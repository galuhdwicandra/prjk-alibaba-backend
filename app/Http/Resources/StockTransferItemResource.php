<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockTransferItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'raw_material_id' => $this->raw_material_id,
            'qty_sent' => $this->qty_sent,
            'qty_received' => $this->qty_received,
            'unit_id' => $this->unit_id,
            'notes' => $this->notes,
            'raw_material' => new RawMaterialResource($this->whenLoaded('rawMaterial')),
            'unit' => new UnitResource($this->whenLoaded('unit')),
        ];
    }
}
