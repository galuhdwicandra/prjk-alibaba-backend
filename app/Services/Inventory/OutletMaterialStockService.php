<?php

namespace App\Services\Inventory;

use App\Models\OutletMaterialStock;

class OutletMaterialStockService
{
    public function upsert(array $payload): OutletMaterialStock
    {
        $stock = OutletMaterialStock::query()->updateOrCreate(
            [
                'outlet_id' => $payload['outlet_id'],
                'raw_material_id' => $payload['raw_material_id'],
            ],
            [
                'qty_on_hand' => $payload['qty_on_hand'] ?? 0,
                'qty_reserved' => $payload['qty_reserved'] ?? 0,
                'last_movement_at' => $payload['last_movement_at'] ?? null,
            ]
        );

        return $stock->fresh()->load(['outlet', 'rawMaterial']);
    }
}
