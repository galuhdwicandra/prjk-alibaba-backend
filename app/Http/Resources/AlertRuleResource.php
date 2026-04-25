<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlertRuleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'name' => $this->name,
            'alert_type' => $this->alert_type,
            'severity' => $this->severity,
            'threshold_minutes' => $this->threshold_minutes,
            'days_before' => $this->days_before,
            'threshold_value' => $this->threshold_value !== null ? (float) $this->threshold_value : null,
            'threshold_unit' => $this->threshold_unit,
            'recipient_roles' => $this->recipient_roles,
            'channels' => $this->channels,
            'metadata' => $this->metadata,
            'is_active' => (bool) $this->is_active,
            'last_run_at' => $this->last_run_at?->toDateTimeString(),
            'created_at' => $this->created_at?->toDateTimeString(),
            'updated_at' => $this->updated_at?->toDateTimeString(),
            'outlet' => new OutletResource($this->whenLoaded('outlet')),
        ];
    }
}
