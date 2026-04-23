<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet' => $this->whenLoaded('outlet', fn () => [
                'id' => $this->outlet?->id,
                'code' => $this->outlet?->code,
                'name' => $this->outlet?->name,
            ]),
            'cashier_shift_id' => $this->cashier_shift_id,
            'cashier_shift' => $this->whenLoaded('cashierShift', fn () => [
                'id' => $this->cashierShift?->id,
                'shift_number' => $this->cashierShift?->shift_number,
                'status' => $this->cashierShift?->status,
            ]),
            'customer_id' => $this->customer_id,
            'customer' => $this->whenLoaded('customer', fn () => [
                'id' => $this->customer?->id,
                'code' => $this->customer?->code,
                'name' => $this->customer?->name,
                'phone' => $this->customer?->phone,
            ]),
            'order_number' => $this->order_number,
            'queue_number' => $this->queue_number,
            'order_channel' => $this->order_channel,
            'order_status' => $this->order_status,
            'payment_status' => $this->payment_status,
            'subtotal' => (float) $this->subtotal,
            'discount_amount' => (float) $this->discount_amount,
            'tax_amount' => (float) $this->tax_amount,
            'service_charge_amount' => (float) $this->service_charge_amount,
            'grand_total' => (float) $this->grand_total,
            'paid_total' => (float) $this->paid_total,
            'change_amount' => (float) $this->change_amount,
            'notes' => $this->notes,
            'ordered_at' => $this->ordered_at,
            'completed_at' => $this->completed_at,
            'cancelled_at' => $this->cancelled_at,
            'cancelled_by' => $this->cancelled_by,
            'canceller' => $this->whenLoaded('canceller', fn () => [
                'id' => $this->canceller?->id,
                'name' => $this->canceller?->name,
            ]),
            'created_by' => $this->created_by,
            'creator' => $this->whenLoaded('creator', fn () => [
                'id' => $this->creator?->id,
                'name' => $this->creator?->name,
            ]),
            'items' => OrderItemResource::collection($this->whenLoaded('items')),
            'payments' => PaymentResource::collection($this->whenLoaded('payments')),
            'status_histories' => $this->whenLoaded('statusHistories', function () {
                return $this->statusHistories->map(function ($history) {
                    return [
                        'id' => $history->id,
                        'status' => $history->status,
                        'changed_by' => $history->changed_by,
                        'changer' => $history->relationLoaded('changer') ? [
                            'id' => $history->changer?->id,
                            'name' => $history->changer?->name,
                        ] : null,
                        'notes' => $history->notes,
                        'changed_at' => $history->changed_at,
                        'created_at' => $history->created_at,
                        'updated_at' => $history->updated_at,
                    ];
                });
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
