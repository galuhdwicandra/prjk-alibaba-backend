<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockOpnameItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'raw_material_id' => $this->raw_material_id,
            'system_qty' => $this->system_qty,
            'actual_qty' => $this->actual_qty,
            'difference_qty' => $this->difference_qty,
            'unit_id' => $this->unit_id,
            'notes' => $this->notes,
            'raw_material' => new RawMaterialResource($this->whenLoaded('rawMaterial')),
            'unit' => new UnitResource($this->whenLoaded('unit')),
        ];
    }
}
