<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_id' => $this->order_id,
            'customer_address_id' => $this->customer_address_id,
            'courier_id' => $this->courier_id,
            'delivery_status' => $this->delivery_status,
            'delivery_fee' => $this->delivery_fee,
            'delivered_at' => $this->delivered_at?->toISOString(),
            'notes' => $this->notes,
            'order' => new OrderResource($this->whenLoaded('order')),
            'customer_address' => new CustomerAddressResource($this->whenLoaded('customerAddress')),
            'courier' => new CourierResource($this->whenLoaded('courier')),
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}
