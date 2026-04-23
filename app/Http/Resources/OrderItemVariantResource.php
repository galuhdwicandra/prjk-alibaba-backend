<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemVariantResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'variant_group_name_snapshot' => $this->variant_group_name_snapshot,
            'variant_option_name_snapshot' => $this->variant_option_name_snapshot,
            'price_adjustment' => (float) $this->price_adjustment,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
