<?php

namespace App\Services\Sales;

use App\Models\CashierShift;
use App\Models\Order;
use App\Models\Payment;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PaymentService
{
    public function create(array $payload, ?int $userId = null): Payment
    {
        return DB::transaction(function () use ($payload, $userId) {
            $order = Order::query()
                ->with('cashierShift')
                ->findOrFail($payload['order_id']);

            if ($order->order_status === 'cancelled') {
                throw ValidationException::withMessages([
                    'order_id' => ['Order yang dibatalkan tidak bisa dibayar.'],
                ]);
            }

            $paymentMethod = PaymentMethod::query()
                ->whereKey($payload['payment_method_id'])
                ->where('is_active', true)
                ->first();

            if (!$paymentMethod) {
                throw ValidationException::withMessages([
                    'payment_method_id' => ['Metode pembayaran tidak ditemukan atau tidak aktif.'],
                ]);
            }

            if ((float) $payload['amount'] <= 0) {
                throw ValidationException::withMessages([
                    'amount' => ['Nominal pembayaran harus lebih dari 0.'],
                ]);
            }

            if ($paymentMethod->type === 'cash' && $order->cashier_shift_id) {
                $this->ensureOpenShift($order->cashierShift);
            }

            $payment = Payment::create([
                'order_id' => $order->id,
                'payment_method_id' => $paymentMethod->id,
                'amount' => $payload['amount'],
                'reference_number' => $payload['reference_number'] ?? null,
                'paid_at' => $payload['paid_at'] ?? now(),
                'status' => $payload['status'] ?? 'paid',
                'notes' => $payload['notes'] ?? null,
                'received_by' => $userId,
            ]);

            $this->syncOrderPaymentSummary($order->fresh());

            if ($paymentMethod->type === 'cash' && $order->cashier_shift_id) {
                $this->refreshShiftExpectedCash((int) $order->cashier_shift_id);
            }

            return $payment->fresh()->load([
                'order.outlet',
                'order.cashierShift',
                'paymentMethod',
                'receiver',
            ]);
        });
    }

    public function cancel(Payment $payment, ?string $notes = null): Payment
    {
        return DB::transaction(function () use ($payment, $notes) {
            if (in_array($payment->status, ['cancelled', 'refunded'], true)) {
                throw ValidationException::withMessages([
                    'status' => ['Payment ini sudah tidak aktif.'],
                ]);
            }

            $order = $payment->order()->with('cashierShift')->firstOrFail();
            $paymentMethod = $payment->paymentMethod()->first();

            $payment->update([
                'status' => 'cancelled',
                'notes' => $notes ?: $payment->notes,
            ]);

            $this->syncOrderPaymentSummary($order->fresh());

            if ($paymentMethod && $paymentMethod->type === 'cash' && $order->cashier_shift_id) {
                $this->refreshShiftExpectedCash((int) $order->cashier_shift_id);
            }

            return $payment->fresh()->load([
                'order.outlet',
                'order.cashierShift',
                'paymentMethod',
                'receiver',
            ]);
        });
    }

    private function syncOrderPaymentSummary(Order $order): void
    {
        $paidTotal = (float) $order->payments()
            ->where('status', 'paid')
            ->sum('amount');

        $paymentStatus = 'unpaid';

        if ($paidTotal > 0 && $paidTotal < (float) $order->grand_total) {
            $paymentStatus = 'partial';
        } elseif ($paidTotal >= (float) $order->grand_total && (float) $order->grand_total > 0) {
            $paymentStatus = 'paid';
        }

        $order->update([
            'paid_total' => $paidTotal,
            'payment_status' => $paymentStatus,
            'change_amount' => max(0, $paidTotal - (float) $order->grand_total),
        ]);
    }

    private function ensureOpenShift(?CashierShift $shift): void
    {
        if (!$shift) {
            throw ValidationException::withMessages([
                'order_id' => ['Order cash wajib terhubung ke shift kasir.'],
            ]);
        }

        if ($shift->status !== 'open') {
            throw ValidationException::withMessages([
                'order_id' => ['Shift kasir untuk order ini harus dalam status open.'],
            ]);
        }
    }

    private function refreshShiftExpectedCash(int $shiftId): void
    {
        $shift = CashierShift::query()->findOrFail($shiftId);

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

        $shift->update([
            'expected_cash' => (float) $shift->opening_cash + $cashSalesTotal + $cashInTotal - $cashOutTotal,
        ]);
    }
}
