<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UnitConversionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'from_unit_id' => $this->from_unit_id,
            'from_unit_name' => $this->fromUnit?->name,
            'from_unit_code' => $this->fromUnit?->code,
            'to_unit_id' => $this->to_unit_id,
            'to_unit_name' => $this->toUnit?->name,
            'to_unit_code' => $this->toUnit?->code,
            'multiplier' => $this->multiplier,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
