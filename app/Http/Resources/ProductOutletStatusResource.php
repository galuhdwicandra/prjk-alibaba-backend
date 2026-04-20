<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductOutletStatusResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'outlet_name' => $this->outlet?->name,
            'outlet_code' => $this->outlet?->code,
            'is_available' => $this->is_available,
            'is_hidden' => $this->is_hidden,
            'daily_limit' => $this->daily_limit,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}