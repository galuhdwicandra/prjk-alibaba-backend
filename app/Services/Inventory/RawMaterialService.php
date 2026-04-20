<?php

namespace App\Services\Inventory;

use App\Models\RawMaterial;
use Illuminate\Support\Facades\DB;

class RawMaterialService
{
    public function create(array $payload): RawMaterial
    {
        return DB::transaction(function () use ($payload) {
            $stocks = $payload['outlet_stocks'] ?? [];
            unset($payload['outlet_stocks']);

            $rawMaterial = RawMaterial::create($payload);

            foreach ($stocks as $stock) {
                $rawMaterial->outletStocks()->create([
                    'outlet_id' => $stock['outlet_id'],
                    'qty_on_hand' => $stock['qty_on_hand'] ?? 0,
                    'qty_reserved' => $stock['qty_reserved'] ?? 0,
                    'last_movement_at' => $stock['last_movement_at'] ?? null,
                ]);
            }

            return $rawMaterial->load(['category', 'unit', 'outletStocks.outlet']);
        });
    }

    public function update(RawMaterial $rawMaterial, array $payload): RawMaterial
    {
        return DB::transaction(function () use ($rawMaterial, $payload) {
            $stocks = $payload['outlet_stocks'] ?? null;
            unset($payload['outlet_stocks']);

            $rawMaterial->update($payload);

            if (is_array($stocks)) {
                $rawMaterial->outletStocks()->delete();

                foreach ($stocks as $stock) {
                    $rawMaterial->outletStocks()->create([
                        'outlet_id' => $stock['outlet_id'],
                        'qty_on_hand' => $stock['qty_on_hand'] ?? 0,
                        'qty_reserved' => $stock['qty_reserved'] ?? 0,
                        'last_movement_at' => $stock['last_movement_at'] ?? null,
                    ]);
                }
            }

            return $rawMaterial->fresh()->load(['category', 'unit', 'outletStocks.outlet']);
        });
    }
}
