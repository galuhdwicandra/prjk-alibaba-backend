<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseOrderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'supplier_id' => $this->supplier_id,
            'supplier_name' => $this->supplier?->name,
            'po_number' => $this->po_number,
            'status' => $this->status,
            'order_date' => $this->order_date,
            'expected_date' => $this->expected_date,
            'subtotal' => $this->subtotal,
            'discount_amount' => $this->discount_amount,
            'tax_amount' => $this->tax_amount,
            'total_amount' => $this->total_amount,
            'notes' => $this->notes,
            'approved_by' => $this->approved_by,
            'approved_by_name' => $this->approver?->name,
            'approved_at' => $this->approved_at,
            'created_by' => $this->created_by,
            'created_by_name' => $this->creator?->name,
            'items' => PurchaseOrderItemResource::collection($this->whenLoaded('items')),
            'goods_receipts_count' => $this->whenCounted('goodsReceipts'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
