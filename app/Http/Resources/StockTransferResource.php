<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockTransferResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'source_outlet_id' => $this->source_outlet_id,
            'target_outlet_id' => $this->target_outlet_id,
            'transfer_number' => $this->transfer_number,
            'status' => $this->status,
            'transfer_date' => $this->transfer_date,
            'sent_at' => $this->sent_at,
            'received_at' => $this->received_at,
            'notes' => $this->notes,
            'created_by' => $this->created_by,
            'received_by' => $this->received_by,
            'source_outlet' => new OutletResource($this->whenLoaded('sourceOutlet')),
            'target_outlet' => new OutletResource($this->whenLoaded('targetOutlet')),
            'creator' => new UserResource($this->whenLoaded('creator')),
            'receiver' => new UserResource($this->whenLoaded('receiver')),
            'items' => StockTransferItemResource::collection($this->whenLoaded('items')),
        ];
    }
}
