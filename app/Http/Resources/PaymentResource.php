<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_id' => $this->order_id,
            'order' => $this->whenLoaded('order', fn () => [
                'id' => $this->order?->id,
                'order_number' => $this->order?->order_number,
                'outlet_id' => $this->order?->outlet_id,
                'cashier_shift_id' => $this->order?->cashier_shift_id,
                'grand_total' => (float) ($this->order?->grand_total ?? 0),
                'paid_total' => (float) ($this->order?->paid_total ?? 0),
                'payment_status' => $this->order?->payment_status,
            ]),
            'payment_method_id' => $this->payment_method_id,
            'payment_method' => $this->whenLoaded('paymentMethod', fn () => [
                'id' => $this->paymentMethod?->id,
                'code' => $this->paymentMethod?->code,
                'name' => $this->paymentMethod?->name,
                'type' => $this->paymentMethod?->type,
            ]),
            'amount' => (float) $this->amount,
            'reference_number' => $this->reference_number,
            'paid_at' => $this->paid_at,
            'status' => $this->status,
            'notes' => $this->notes,
            'received_by' => $this->received_by,
            'receiver' => $this->whenLoaded('receiver', fn () => [
                'id' => $this->receiver?->id,
                'name' => $this->receiver?->name,
            ]),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
