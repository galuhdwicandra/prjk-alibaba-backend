<?php

namespace App\Services\Catalog;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductService
{
    public function create(array $payload): Product
    {
        return DB::transaction(function () use ($payload) {
            $prices = $payload['prices'] ?? [];
            $outletStatuses = $payload['outlet_statuses'] ?? [];

            unset($payload['prices'], $payload['outlet_statuses']);

            $product = Product::create($payload);

            $this->syncPrices($product, $prices);
            $this->syncOutletStatuses($product, $outletStatuses);

            return $product->fresh()->load([
                'category',
                'prices.outlet',
                'outletStatuses.outlet',
            ]);
        });
    }

    public function update(Product $product, array $payload): Product
    {
        return DB::transaction(function () use ($product, $payload) {
            $hasPrices = array_key_exists('prices', $payload);
            $hasStatuses = array_key_exists('outlet_statuses', $payload);

            $prices = $payload['prices'] ?? [];
            $outletStatuses = $payload['outlet_statuses'] ?? [];

            unset($payload['prices'], $payload['outlet_statuses']);

            $product->update($payload);

            if ($hasPrices) {
                $this->syncPrices($product, $prices);
            }

            if ($hasStatuses) {
                $this->syncOutletStatuses($product, $outletStatuses);
            }

            return $product->fresh()->load([
                'category',
                'prices.outlet',
                'outletStatuses.outlet',
            ]);
        });
    }

    private function syncPrices(Product $product, array $prices): void
    {
        $product->prices()->delete();

        foreach ($prices as $price) {
            $product->prices()->create([
                'outlet_id' => $price['outlet_id'],
                'price' => $price['price'],
                'dine_in_price' => $price['dine_in_price'] ?? null,
                'takeaway_price' => $price['takeaway_price'] ?? null,
                'delivery_price' => $price['delivery_price'] ?? null,
                'starts_at' => $price['starts_at'] ?? null,
                'ends_at' => $price['ends_at'] ?? null,
                'is_active' => $price['is_active'] ?? true,
            ]);
        }
    }

    private function syncOutletStatuses(Product $product, array $outletStatuses): void
    {
        $product->outletStatuses()->delete();

        foreach ($outletStatuses as $status) {
            $product->outletStatuses()->create([
                'outlet_id' => $status['outlet_id'],
                'is_available' => $status['is_available'] ?? true,
                'is_hidden' => $status['is_hidden'] ?? false,
                'daily_limit' => $status['daily_limit'] ?? null,
                'notes' => $status['notes'] ?? null,
            ]);
        }
    }
}