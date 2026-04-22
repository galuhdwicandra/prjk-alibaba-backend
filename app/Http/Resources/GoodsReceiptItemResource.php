<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GoodsReceiptItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'goods_receipt_id' => $this->goods_receipt_id,
            'raw_material_id' => $this->raw_material_id,
            'raw_material_name' => $this->rawMaterial?->name,
            'raw_material_code' => $this->rawMaterial?->code,
            'unit_id' => $this->unit_id,
            'unit_name' => $this->unit?->name,
            'unit_code' => $this->unit?->code,
            'qty_received' => $this->qty_received,
            'unit_cost' => $this->unit_cost,
            'line_total' => $this->line_total,
            'expired_at' => $this->expired_at,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
