<?php
namespace App\Services\Expense;

use App\Models\CashierShift;
use App\Models\CashMovement;
use App\Models\Expense;
use App\Models\ExpenseAttachment;
use App\Models\ExpenseCategory;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ExpenseService
{
    public function create(array $payload, ?int $userId = null): Expense
    {
        return DB::transaction(function () use ($payload, $userId) {
            $this->ensureUserCanAccessOutlet($userId, (int) $payload['outlet_id']);
            $this->ensureActiveCategory((int) $payload['expense_category_id']);

            $attachments = $payload['attachments'] ?? [];
            unset($payload['attachments']);

            $expense = Expense::query()->create([
                'outlet_id'           => $payload['outlet_id'],
                'expense_category_id' => $payload['expense_category_id'],
                'expense_date'        => $payload['expense_date'],
                'amount'              => $payload['amount'],
                'description'         => $payload['description'] ?? null,
                'status'              => $payload['status'] ?? 'draft',
                'created_by'          => $userId,
            ]);

            $this->storeAttachments($expense, $attachments);

            return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
        });
    }

    public function update(Expense $expense, array $payload): Expense
    {
        return DB::transaction(function () use ($expense, $payload) {
            if ($expense->status === 'approved') {
                throw ValidationException::withMessages([
                    'status' => ['Expense yang sudah approved tidak boleh diubah.'],
                ]);
            }

            if (array_key_exists('outlet_id', $payload)) {
                $this->ensureUserCanAccessOutlet(request()->user()?->id, (int) $payload['outlet_id']);
            }

            if (array_key_exists('expense_category_id', $payload)) {
                $this->ensureActiveCategory((int) $payload['expense_category_id']);
            }

            $expense->update($payload);

            return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
        });
    }

    public function submit(Expense $expense): Expense
    {
        if (! in_array($expense->status, ['draft', 'rejected'], true)) {
            throw ValidationException::withMessages([
                'status' => ['Hanya expense draft atau rejected yang boleh disubmit.'],
            ]);
        }

        $expense->update([
            'status' => 'submitted',
        ]);

        return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
    }

    public function approve(Expense $expense, array $payload, int $userId): Expense
    {
        return DB::transaction(function () use ($expense, $payload, $userId) {
            if ($expense->status !== 'submitted') {
                throw ValidationException::withMessages([
                    'status' => ['Hanya expense submitted yang boleh diapprove.'],
                ]);
            }

            $cashierShiftId = $payload['cashier_shift_id'] ?? null;

            if ($cashierShiftId) {
                $shift = CashierShift::query()->findOrFail($cashierShiftId);

                if ((int) $shift->outlet_id !== (int) $expense->outlet_id) {
                    throw ValidationException::withMessages([
                        'cashier_shift_id' => ['Shift kasir harus berasal dari outlet yang sama dengan expense.'],
                    ]);
                }

                if ($shift->status !== 'open') {
                    throw ValidationException::withMessages([
                        'cashier_shift_id' => ['Cash movement hanya bisa dibuat pada shift yang masih open.'],
                    ]);
                }

                CashMovement::query()->create([
                    'cashier_shift_id' => $shift->id,
                    'movement_type'    => 'cash_out',
                    'amount'           => $expense->amount,
                    'reason'           => 'Expense #' . $expense->id,
                    'notes'            => $payload['notes'] ?? $expense->description,
                    'created_by'       => $userId,
                ]);

                $this->refreshShiftExpectedCash($shift);
            }

            $expense->update([
                'status'      => 'approved',
                'approved_by' => $userId,
                'approved_at' => $payload['approved_at'] ?? now(),
            ]);

            return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
        });
    }

    public function reject(Expense $expense, ?string $notes = null): Expense
    {
        if ($expense->status !== 'submitted') {
            throw ValidationException::withMessages([
                'status' => ['Hanya expense submitted yang boleh direject.'],
            ]);
        }

        $description = $expense->description;

        if ($notes) {
            $description = trim(($description ? $description . PHP_EOL : '') . 'Rejected note: ' . $notes);
        }

        $expense->update([
            'status'      => 'rejected',
            'description' => $description,
            'approved_by' => null,
            'approved_at' => null,
        ]);

        return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
    }

    public function addAttachments(Expense $expense, array $attachments): Expense
    {
        if ($expense->status === 'approved') {
            throw ValidationException::withMessages([
                'status' => ['Attachment tidak boleh ditambahkan pada expense yang sudah approved.'],
            ]);
        }

        $this->storeAttachments($expense, $attachments);

        return $expense->fresh()->load($this->defaultRelations())->loadCount('attachments');
    }

    public function deleteAttachment(ExpenseAttachment $attachment): void
    {
        $expense = $attachment->expense;

        if ($expense && $expense->status === 'approved') {
            throw ValidationException::withMessages([
                'status' => ['Attachment expense approved tidak boleh dihapus.'],
            ]);
        }

        if ($attachment->file_path) {
            Storage::disk('public')->delete($attachment->file_path);
        }

        $attachment->delete();
    }

    public function delete(Expense $expense): void
    {
        if ($expense->status === 'approved') {
            throw ValidationException::withMessages([
                'status' => ['Expense approved tidak boleh dihapus.'],
            ]);
        }

        $expense->delete();
    }

    private function storeAttachments(Expense $expense, array $attachments): void
    {
        foreach ($attachments as $attachment) {
            if (! $attachment instanceof UploadedFile) {
                continue;
            }

            $path = $attachment->store('expenses/' . $expense->id, 'public');

            $expense->attachments()->create([
                'file_path' => $path,
                'file_name' => $attachment->getClientOriginalName(),
                'mime_type' => $attachment->getClientMimeType(),
            ]);
        }
    }

    private function ensureActiveCategory(int $categoryId): void
    {
        $exists = ExpenseCategory::query()
            ->whereKey($categoryId)
            ->where('is_active', true)
            ->exists();

        if (! $exists) {
            throw ValidationException::withMessages([
                'expense_category_id' => ['Kategori expense tidak ditemukan atau tidak aktif.'],
            ]);
        }
    }

    private function ensureUserCanAccessOutlet(?int $userId, int $outletId): void
    {
        if (! $userId) {
            return;
        }

        $user = User::query()
            ->with('roles', 'outletAccesses')
            ->findOrFail($userId);

        if ($user->hasRole('superadmin') || $user->hasRole('admin_pusat')) {
            return;
        }

        $hasAccess = $user->outletAccesses
            ->contains(fn($access) => (int) $access->outlet_id === $outletId);

        if (! $hasAccess) {
            throw ValidationException::withMessages([
                'outlet_id' => ['User tidak memiliki akses ke outlet ini.'],
            ]);
        }
    }

    private function refreshShiftExpectedCash(CashierShift $shift): void
    {
        $cashSalesTotal = (float) $shift->orders()
            ->whereHas('payments.paymentMethod', fn($query) => $query->where('type', 'cash'))
            ->with('payments.paymentMethod')
            ->get()
            ->flatMap->payments
            ->filter(fn($payment) => $payment->status === 'paid' && $payment->paymentMethod?->type === 'cash')
            ->sum('amount');

        $cashInTotal = (float) $shift->cashMovements()
            ->where('movement_type', 'cash_in')
            ->sum('amount');

        $cashOutTotal = (float) $shift->cashMovements()
            ->where('movement_type', 'cash_out')
            ->sum('amount');

        $shift->update([
            'expected_cash' => (float) $shift->opening_cash + $cashSalesTotal + $cashInTotal - $cashOutTotal,
        ]);
    }

    private function defaultRelations(): array
    {
        return [
            'outlet',
            'category',
            'creator',
            'approver',
            'attachments',
        ];
    }
}
