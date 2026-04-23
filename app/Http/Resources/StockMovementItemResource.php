<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockMovementItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'raw_material_id' => $this->raw_material_id,
            'qty_in' => $this->qty_in,
            'qty_out' => $this->qty_out,
            'unit_cost' => $this->unit_cost,
            'notes' => $this->notes,
            'raw_material' => new RawMaterialResource($this->whenLoaded('rawMaterial')),
        ];
    }
}
