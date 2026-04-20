<?php

namespace App\Services\Inventory;

use App\Models\ProductBom;
use Illuminate\Support\Facades\DB;

class ProductBomService
{
    public function create(array $payload): ProductBom
    {
        return DB::transaction(function () use ($payload) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            if (($payload['is_active'] ?? true) === true) {
                ProductBom::query()
                    ->where('product_id', $payload['product_id'])
                    ->update(['is_active' => false]);
            }

            $bom = ProductBom::create($payload);

            foreach ($items as $item) {
                $bom->items()->create([
                    'raw_material_id' => $item['raw_material_id'],
                    'unit_id' => $item['unit_id'],
                    'qty' => $item['qty'],
                    'waste_percent' => $item['waste_percent'] ?? 0,
                ]);
            }

            return $bom->load(['product', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function update(ProductBom $bom, array $payload): ProductBom
    {
        return DB::transaction(function () use ($bom, $payload) {
            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $targetProductId = $payload['product_id'] ?? $bom->product_id;
            $targetIsActive = $payload['is_active'] ?? $bom->is_active;

            if ($targetIsActive) {
                ProductBom::query()
                    ->where('product_id', $targetProductId)
                    ->where('id', '!=', $bom->id)
                    ->update(['is_active' => false]);
            }

            $bom->update($payload);

            if (is_array($items)) {
                $bom->items()->delete();

                foreach ($items as $item) {
                    $bom->items()->create([
                        'raw_material_id' => $item['raw_material_id'],
                        'unit_id' => $item['unit_id'],
                        'qty' => $item['qty'],
                        'waste_percent' => $item['waste_percent'] ?? 0,
                    ]);
                }
            }

            return $bom->fresh()->load(['product', 'items.rawMaterial', 'items.unit']);
        });
    }
}
