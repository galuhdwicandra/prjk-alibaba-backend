<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemModifierResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'modifier_group_name_snapshot' => $this->modifier_group_name_snapshot,
            'modifier_option_name_snapshot' => $this->modifier_option_name_snapshot,
            'qty' => (float) $this->qty,
            'price' => (float) $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
