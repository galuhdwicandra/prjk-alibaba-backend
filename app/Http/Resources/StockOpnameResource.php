<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockOpnameResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'opname_number' => $this->opname_number,
            'opname_date' => $this->opname_date,
            'status' => $this->status,
            'notes' => $this->notes,
            'created_by' => $this->created_by,
            'posted_by' => $this->posted_by,
            'posted_at' => $this->posted_at,
            'outlet' => new OutletResource($this->whenLoaded('outlet')),
            'creator' => new UserResource($this->whenLoaded('creator')),
            'poster' => new UserResource($this->whenLoaded('poster')),
            'items' => StockOpnameItemResource::collection($this->whenLoaded('items')),
        ];
    }
}
