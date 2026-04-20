<?php

namespace App\Services\Catalog;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ProductService
{
    public function create(array $payload): Product
    {
        return DB::transaction(function () use ($payload) {
            $prices = $payload['prices'] ?? [];
            $outletStatuses = $payload['outlet_statuses'] ?? [];
            $variantGroups = $payload['variant_groups'] ?? [];
            $modifierGroups = $payload['modifier_groups'] ?? [];
            $bundleItems = $payload['bundle_items'] ?? [];

            unset(
                $payload['prices'],
                $payload['outlet_statuses'],
                $payload['variant_groups'],
                $payload['modifier_groups'],
                $payload['bundle_items'],
            );

            $product = Product::create($payload);

            $this->validateBundleRules($product, $bundleItems);
            $this->syncPrices($product, $prices);
            $this->syncOutletStatuses($product, $outletStatuses);
            $this->syncVariantGroups($product, $variantGroups);
            $this->syncModifierGroups($product, $modifierGroups);
            $this->syncBundleItems($product, $bundleItems);

            return $this->loadRelations($product);
        });
    }

    public function update(Product $product, array $payload): Product
    {
        return DB::transaction(function () use ($product, $payload) {
            $hasPrices = array_key_exists('prices', $payload);
            $hasStatuses = array_key_exists('outlet_statuses', $payload);
            $hasVariantGroups = array_key_exists('variant_groups', $payload);
            $hasModifierGroups = array_key_exists('modifier_groups', $payload);
            $hasBundleItems = array_key_exists('bundle_items', $payload);

            $prices = $payload['prices'] ?? [];
            $outletStatuses = $payload['outlet_statuses'] ?? [];
            $variantGroups = $payload['variant_groups'] ?? [];
            $modifierGroups = $payload['modifier_groups'] ?? [];
            $bundleItems = $payload['bundle_items'] ?? [];

            unset(
                $payload['prices'],
                $payload['outlet_statuses'],
                $payload['variant_groups'],
                $payload['modifier_groups'],
                $payload['bundle_items'],
            );

            $product->update($payload);

            if ($hasBundleItems || (isset($payload['product_type']) && $product->product_type === 'bundle')) {
                $this->validateBundleRules($product, $bundleItems);
            }

            if ($hasPrices) {
                $this->syncPrices($product, $prices);
            }

            if ($hasStatuses) {
                $this->syncOutletStatuses($product, $outletStatuses);
            }

            if ($hasVariantGroups) {
                $this->syncVariantGroups($product, $variantGroups);
            }

            if ($hasModifierGroups) {
                $this->syncModifierGroups($product, $modifierGroups);
            }

            if ($hasBundleItems) {
                $this->syncBundleItems($product, $bundleItems);
            }

            return $this->loadRelations($product);
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

    private function syncVariantGroups(Product $product, array $variantGroups): void
    {
        $product->variantGroups()->delete();

        foreach ($variantGroups as $group) {
            $options = $group['options'] ?? [];
            unset($group['options']);

            $variantGroup = $product->variantGroups()->create([
                'name' => $group['name'],
                'selection_type' => $group['selection_type'],
                'is_required' => $group['is_required'] ?? true,
                'sort_order' => $group['sort_order'] ?? 0,
            ]);

            foreach ($options as $option) {
                $variantGroup->options()->create([
                    'name' => $option['name'],
                    'price_adjustment' => $option['price_adjustment'] ?? 0,
                    'sort_order' => $option['sort_order'] ?? 0,
                    'is_active' => $option['is_active'] ?? true,
                ]);
            }
        }
    }

    private function syncModifierGroups(Product $product, array $modifierGroups): void
    {
        $product->modifierGroups()->delete();

        foreach ($modifierGroups as $group) {
            $options = $group['options'] ?? [];
            unset($group['options']);

            $modifierGroup = $product->modifierGroups()->create([
                'name' => $group['name'],
                'min_select' => $group['min_select'] ?? 0,
                'max_select' => $group['max_select'] ?? 1,
                'is_required' => $group['is_required'] ?? false,
                'sort_order' => $group['sort_order'] ?? 0,
            ]);

            foreach ($options as $option) {
                $modifierGroup->options()->create([
                    'name' => $option['name'],
                    'price' => $option['price'] ?? 0,
                    'is_active' => $option['is_active'] ?? true,
                    'sort_order' => $option['sort_order'] ?? 0,
                ]);
            }
        }
    }

    private function syncBundleItems(Product $product, array $bundleItems): void
    {
        $product->bundleItems()->delete();

        foreach ($bundleItems as $item) {
            $product->bundleItems()->create([
                'bundled_product_id' => $item['bundled_product_id'],
                'qty' => $item['qty'],
            ]);
        }
    }

    private function validateBundleRules(Product $product, array $bundleItems): void
    {
        if ($product->product_type === 'bundle' && empty($bundleItems)) {
            throw ValidationException::withMessages([
                'bundle_items' => ['Produk bundle wajib memiliki minimal satu bundle item.'],
            ]);
        }

        foreach ($bundleItems as $index => $item) {
            if ((int) $item['bundled_product_id'] === (int) $product->id) {
                throw ValidationException::withMessages([
                    "bundle_items.$index.bundled_product_id" => ['Produk bundle tidak boleh membundle dirinya sendiri.'],
                ]);
            }
        }
    }

    private function loadRelations(Product $product): Product
    {
        return $product->fresh()->load([
            'category',
            'prices.outlet',
            'outletStatuses.outlet',
            'variantGroups.options',
            'modifierGroups.options',
            'bundleItems.bundledProduct',
        ]);
    }
}