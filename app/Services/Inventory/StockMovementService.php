<?php

namespace App\Services\Inventory;

use App\Models\OutletMaterialStock;
use App\Models\StockMovement;
use Illuminate\Support\Facades\DB;

class StockMovementService
{
    public function create(array $payload): StockMovement
    {
        return DB::transaction(function () use ($payload) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            $movement = StockMovement::create($payload);

            foreach ($items as $item) {
                $movement->items()->create([
                    'raw_material_id' => $item['raw_material_id'],
                    'qty_in' => $item['qty_in'] ?? 0,
                    'qty_out' => $item['qty_out'] ?? 0,
                    'unit_cost' => $item['unit_cost'] ?? 0,
                    'notes' => $item['notes'] ?? null,
                ]);

                $stock = OutletMaterialStock::query()->firstOrCreate(
                    [
                        'outlet_id' => $movement->outlet_id,
                        'raw_material_id' => $item['raw_material_id'],
                    ],
                    [
                        'qty_on_hand' => 0,
                        'qty_reserved' => 0,
                        'last_movement_at' => $movement->movement_date,
                    ]
                );

                $stock->update([
                    'qty_on_hand' => (float) $stock->qty_on_hand + (float) ($item['qty_in'] ?? 0) - (float) ($item['qty_out'] ?? 0),
                    'last_movement_at' => $movement->movement_date,
                ]);
            }

            return $movement->fresh()->load(['outlet', 'creator', 'items.rawMaterial']);
        });
    }
}
