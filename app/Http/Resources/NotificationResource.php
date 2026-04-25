<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'user_id' => $this->user_id,
            'type' => $this->type,
            'severity' => $this->severity,
            'status' => $this->status,
            'title' => $this->title,
            'message' => $this->message,
            'source_type' => $this->source_type,
            'source_id' => $this->source_id,
            'data' => $this->data,
            'read_at' => $this->read_at?->toDateTimeString(),
            'resolved_at' => $this->resolved_at?->toDateTimeString(),
            'created_at' => $this->created_at?->toDateTimeString(),
            'updated_at' => $this->updated_at?->toDateTimeString(),
            'outlet' => new OutletResource($this->whenLoaded('outlet')),
            'user' => new UserResource($this->whenLoaded('user')),
            'logs' => NotificationLogResource::collection($this->whenLoaded('logs')),
            'logs_count' => $this->whenCounted('logs'),
        ];
    }
}
