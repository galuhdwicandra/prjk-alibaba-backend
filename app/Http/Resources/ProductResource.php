<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'product_category_id' => $this->product_category_id,
            'category' => $this->whenLoaded('category', function () {
                return [
                    'id' => $this->category?->id,
                    'name' => $this->category?->name,
                    'slug' => $this->category?->slug,
                ];
            }),
            'sku' => $this->sku,
            'code' => $this->code,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'image_url' => $this->image_url,
            'base_price' => $this->base_price,
            'product_type' => $this->product_type,
            'is_active' => $this->is_active,
            'is_featured' => $this->is_featured,
            'track_recipe' => $this->track_recipe,
            'track_stock_direct' => $this->track_stock_direct,
            'prices' => ProductPriceResource::collection($this->whenLoaded('prices')),
            'outlet_statuses' => ProductOutletStatusResource::collection($this->whenLoaded('outletStatuses')),
            'variant_groups' => ProductVariantGroupResource::collection($this->whenLoaded('variantGroups')),
            'modifier_groups' => ProductModifierGroupResource::collection($this->whenLoaded('modifierGroups')),
            'bundle_items' => ProductBundleItemResource::collection($this->whenLoaded('bundleItems')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}