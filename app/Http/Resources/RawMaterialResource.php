<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RawMaterialResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'raw_material_category_id' => $this->raw_material_category_id,
            'category' => $this->whenLoaded('category', function () {
                return [
                    'id' => $this->category?->id,
                    'name' => $this->category?->name,
                ];
            }),
            'unit_id' => $this->unit_id,
            'unit' => $this->whenLoaded('unit', function () {
                return [
                    'id' => $this->unit?->id,
                    'name' => $this->unit?->name,
                    'code' => $this->unit?->code,
                ];
            }),
            'code' => $this->code,
            'sku' => $this->sku,
            'name' => $this->name,
            'description' => $this->description,
            'minimum_stock' => $this->minimum_stock,
            'last_purchase_price' => $this->last_purchase_price,
            'average_cost' => $this->average_cost,
            'is_active' => $this->is_active,
            'outlet_stocks' => OutletMaterialStockResource::collection($this->whenLoaded('outletStocks')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
