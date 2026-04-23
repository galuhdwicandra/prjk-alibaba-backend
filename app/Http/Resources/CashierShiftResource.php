<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CashierShiftResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $orders = $this->whenLoaded('orders', fn () => $this->orders);
        $cashMovements = $this->whenLoaded('cashMovements', fn () => $this->cashMovements);

        $cashSalesTotal = $this->relationLoaded('orders')
            ? (float) $this->orders->flatMap(fn ($order) => $order->relationLoaded('payments') ? $order->payments : collect())
                ->filter(fn ($payment) => $payment->status === 'paid' && $payment->relationLoaded('paymentMethod') && $payment->paymentMethod?->type === 'cash')
                ->sum('amount')
            : null;

        $cashInTotal = $this->relationLoaded('cashMovements')
            ? (float) $this->cashMovements->where('movement_type', 'cash_in')->sum('amount')
            : null;

        $cashOutTotal = $this->relationLoaded('cashMovements')
            ? (float) $this->cashMovements->where('movement_type', 'cash_out')->sum('amount')
            : null;

        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet' => $this->whenLoaded('outlet', fn () => [
                'id' => $this->outlet?->id,
                'code' => $this->outlet?->code,
                'name' => $this->outlet?->name,
            ]),
            'user_id' => $this->user_id,
            'user' => $this->whenLoaded('user', fn () => [
                'id' => $this->user?->id,
                'name' => $this->user?->name,
                'username' => $this->user?->username,
            ]),
            'shift_number' => $this->shift_number,
            'opened_at' => $this->opened_at,
            'closed_at' => $this->closed_at,
            'opening_cash' => (float) $this->opening_cash,
            'expected_cash' => (float) $this->expected_cash,
            'closing_cash' => (float) $this->closing_cash,
            'cash_difference' => (float) $this->cash_difference,
            'status' => $this->status,
            'notes' => $this->notes,
            'orders_count' => $this->whenCounted('orders'),
            'cash_sales_total' => $cashSalesTotal,
            'cash_in_total' => $cashInTotal,
            'cash_out_total' => $cashOutTotal,
            'cash_movements' => CashMovementResource::collection($cashMovements ?? []),
            'orders' => $this->whenLoaded('orders', function () {
                return $this->orders->map(function ($order) {
                    return [
                        'id' => $order->id,
                        'order_number' => $order->order_number,
                        'grand_total' => (float) $order->grand_total,
                        'paid_total' => (float) $order->paid_total,
                        'payment_status' => $order->payment_status,
                    ];
                });
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
