<?php

namespace App\Services\Cashier;

use App\Models\CashierShift;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CashierShiftService
{
    public function open(array $payload, int $userId): CashierShift
    {
        return DB::transaction(function () use ($payload, $userId) {
            $this->ensureUserCanAccessOutlet($userId, (int) $payload['outlet_id']);

            $hasOpenShift = CashierShift::query()
                ->where('outlet_id', (int) $payload['outlet_id'])
                ->where('user_id', $userId)
                ->where('status', 'open')
                ->exists();

            if ($hasOpenShift) {
                throw ValidationException::withMessages([
                    'outlet_id' => ['User ini masih memiliki shift open pada outlet tersebut.'],
                ]);
            }

            $openingCash = (float) ($payload['opening_cash'] ?? 0);

            $shift = CashierShift::create([
                'outlet_id' => $payload['outlet_id'],
                'user_id' => $userId,
                'shift_number' => $this->generateShiftNumber((int) $payload['outlet_id']),
                'opened_at' => $payload['opened_at'] ?? now(),
                'opening_cash' => $openingCash,
                'expected_cash' => $openingCash,
                'closing_cash' => 0,
                'cash_difference' => 0,
                'status' => 'open',
                'notes' => $payload['notes'] ?? null,
            ]);

            $shift->cashMovements()->create([
                'movement_type' => 'opening',
                'amount' => $openingCash,
                'reason' => 'Opening cash',
                'notes' => 'Modal awal shift',
                'created_by' => $userId,
            ]);

            return $shift->fresh()->load([
                'outlet',
                'user',
                'cashMovements.creator',
                'orders.payments.paymentMethod',
            ]);
        });
    }

    public function update(CashierShift $shift, array $payload): CashierShift
    {
        $shift->update([
            'notes' => array_key_exists('notes', $payload) ? $payload['notes'] : $shift->notes,
        ]);

        return $shift->fresh()->load([
            'outlet',
            'user',
            'cashMovements.creator',
            'orders.payments.paymentMethod',
        ]);
    }

    public function close(CashierShift $shift, array $payload, int $userId): CashierShift
    {
        return DB::transaction(function () use ($shift, $payload, $userId) {
            if ($shift->status !== 'open') {
                throw ValidationException::withMessages([
                    'status' => ['Shift kasir ini sudah ditutup.'],
                ]);
            }

            $expectedCash = $this->calculateExpectedCash($shift);
            $closingCash = (float) $payload['closing_cash'];
            $cashDifference = $closingCash - $expectedCash;

            $shift->update([
                'closed_at' => $payload['closed_at'] ?? now(),
                'expected_cash' => $expectedCash,
                'closing_cash' => $closingCash,
                'cash_difference' => $cashDifference,
                'status' => 'closed',
                'notes' => array_key_exists('notes', $payload)
                    ? $payload['notes']
                    : $shift->notes,
            ]);

            if ((float) $cashDifference !== 0.0) {
                $shift->cashMovements()->create([
                    'movement_type' => 'closing_adjustment',
                    'amount' => abs($cashDifference),
                    'reason' => $cashDifference > 0 ? 'Closing overage' : 'Closing shortage',
                    'notes' => 'Selisih saat tutup shift',
                    'created_by' => $userId,
                ]);
            }

            return $shift->fresh()->load([
                'outlet',
                'user',
                'cashMovements.creator',
                'orders.payments.paymentMethod',
            ]);
        });
    }

    public function refreshExpectedCash(CashierShift $shift): CashierShift
    {
        $shift->update([
            'expected_cash' => $this->calculateExpectedCash($shift),
        ]);

        return $shift->fresh()->load([
            'outlet',
            'user',
            'cashMovements.creator',
            'orders.payments.paymentMethod',
        ]);
    }

    private function calculateExpectedCash(CashierShift $shift): float
    {
        $cashSalesTotal = (float) Payment::query()
            ->where('status', 'paid')
            ->whereHas('paymentMethod', fn ($query) => $query->where('type', 'cash'))
            ->whereHas('order', fn ($query) => $query->where('cashier_shift_id', $shift->id))
            ->sum('amount');

        $cashInTotal = (float) $shift->cashMovements()
            ->where('movement_type', 'cash_in')
            ->sum('amount');

        $cashOutTotal = (float) $shift->cashMovements()
            ->where('movement_type', 'cash_out')
            ->sum('amount');

        return (float) $shift->opening_cash + $cashSalesTotal + $cashInTotal - $cashOutTotal;
    }

    private function generateShiftNumber(int $outletId): string
    {
        $datePart = now()->format('Ymd');
        $randomPart = strtoupper(Str::padLeft((string) random_int(1, 9999), 4, '0'));

        return 'SHIFT-' . $outletId . '-' . $datePart . '-' . $randomPart;
    }

    private function ensureUserCanAccessOutlet(int $userId, int $outletId): void
    {
        $user = User::query()
            ->with('roles', 'outletAccesses')
            ->findOrFail($userId);

        if ($user->hasRole('superadmin') || $user->hasRole('admin_pusat')) {
            return;
        }

        $hasAccess = $user->outletAccesses
            ->contains(fn ($access) => (int) $access->outlet_id === $outletId);

        if (!$hasAccess) {
            throw ValidationException::withMessages([
                'outlet_id' => ['User tidak memiliki akses ke outlet ini.'],
            ]);
        }
    }
}
