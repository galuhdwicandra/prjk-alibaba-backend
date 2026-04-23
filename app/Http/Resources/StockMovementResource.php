<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockMovementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'movement_type' => $this->movement_type,
            'reference_type' => $this->reference_type,
            'reference_id' => $this->reference_id,
            'movement_date' => $this->movement_date,
            'notes' => $this->notes,
            'created_by' => $this->created_by,
            'outlet' => new OutletResource($this->whenLoaded('outlet')),
            'creator' => new UserResource($this->whenLoaded('creator')),
            'items' => StockMovementItemResource::collection($this->whenLoaded('items')),
        ];
    }
}
