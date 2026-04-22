<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GoodsReceiptResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'purchase_order_id' => $this->purchase_order_id,
            'purchase_order_number' => $this->purchaseOrder?->po_number,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'receipt_number' => $this->receipt_number,
            'received_date' => $this->received_date,
            'status' => $this->status,
            'notes' => $this->notes,
            'received_by' => $this->received_by,
            'received_by_name' => $this->receiver?->name,
            'items' => GoodsReceiptItemResource::collection($this->whenLoaded('items')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
