<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KitchenTicketResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_id' => $this->order_id,
            'ticket_number' => $this->ticket_number,
            'status' => $this->status,
            'printed_at' => $this->printed_at,
            'prepared_at' => $this->prepared_at,
            'ready_at' => $this->ready_at,
            'order' => $this->whenLoaded('order', function () {
                return [
                    'id' => $this->order?->id,
                    'order_number' => $this->order?->order_number,
                    'queue_number' => $this->order?->queue_number,
                    'order_channel' => $this->order?->order_channel,
                    'order_status' => $this->order?->order_status,
                    'payment_status' => $this->order?->payment_status,
                    'outlet_id' => $this->order?->outlet_id,
                    'outlet' => $this->order?->relationLoaded('outlet') ? [
                        'id' => $this->order?->outlet?->id,
                        'code' => $this->order?->outlet?->code,
                        'name' => $this->order?->outlet?->name,
                    ] : null,
                    'customer' => $this->order?->relationLoaded('customer') ? [
                        'id' => $this->order?->customer?->id,
                        'code' => $this->order?->customer?->code,
                        'name' => $this->order?->customer?->name,
                        'phone' => $this->order?->customer?->phone,
                    ] : null,
                    'ordered_at' => $this->order?->ordered_at,
                    'notes' => $this->order?->notes,
                ];
            }),
            'items' => KitchenTicketItemResource::collection($this->whenLoaded('items')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
