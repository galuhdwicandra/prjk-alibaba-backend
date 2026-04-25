<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KitchenTicketItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'kitchen_ticket_id' => $this->kitchen_ticket_id,
            'order_item_id' => $this->order_item_id,
            'item_name_snapshot' => $this->item_name_snapshot,
            'qty' => $this->qty,
            'notes' => $this->notes,
            'order_item' => $this->whenLoaded('orderItem', function () {
                return [
                    'id' => $this->orderItem?->id,
                    'product_id' => $this->orderItem?->product_id,
                    'product_name_snapshot' => $this->orderItem?->product_name_snapshot,
                    'sku_snapshot' => $this->orderItem?->sku_snapshot,
                    'qty' => $this->orderItem?->qty,
                    'unit_price' => $this->orderItem?->unit_price,
                    'discount_amount' => $this->orderItem?->discount_amount,
                    'line_total' => $this->orderItem?->line_total,
                    'notes' => $this->orderItem?->notes,
                ];
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
