<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotificationLogResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'notification_id' => $this->notification_id,
            'alert_rule_id' => $this->alert_rule_id,
            'outlet_id' => $this->outlet_id,
            'user_id' => $this->user_id,
            'action' => $this->action,
            'status' => $this->status,
            'channel' => $this->channel,
            'message' => $this->message,
            'payload' => $this->payload,
            'logged_at' => $this->logged_at?->toDateTimeString(),
            'created_at' => $this->created_at?->toDateTimeString(),
            'updated_at' => $this->updated_at?->toDateTimeString(),
            'notification' => new NotificationResource($this->whenLoaded('notification')),
            'alert_rule' => new AlertRuleResource($this->whenLoaded('alertRule')),
            'outlet' => new OutletResource($this->whenLoaded('outlet')),
            'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}
