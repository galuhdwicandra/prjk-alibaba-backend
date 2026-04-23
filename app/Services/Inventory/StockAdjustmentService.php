<?php

namespace App\Services\Inventory;

use App\Models\StockAdjustment;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class StockAdjustmentService
{
    public function __construct(
        private readonly StockMovementService $stockMovementService
    ) {
    }

    public function create(array $payload, ?int $userId = null): StockAdjustment
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            if (empty($payload['adjustment_number'])) {
                $payload['adjustment_number'] = $this->generateAdjustmentNumber((int) $payload['outlet_id']);
            }

            $payload['created_by'] = $payload['created_by'] ?? $userId;

            $adjustment = StockAdjustment::create($payload);

            foreach ($items as $item) {
                $adjustment->items()->create([
                    'raw_material_id' => $item['raw_material_id'],
                    'qty_difference' => $item['qty_difference'],
                    'unit_id' => $item['unit_id'],
                    'notes' => $item['notes'] ?? null,
                ]);
            }

            $this->stockMovementService->create([
                'outlet_id' => $adjustment->outlet_id,
                'movement_type' => $payload['reason'] === 'waste' ? 'waste' : 'adjustment',
                'reference_type' => StockAdjustment::class,
                'reference_id' => $adjustment->id,
                'movement_date' => $adjustment->adjustment_date,
                'notes' => $adjustment->notes,
                'created_by' => $adjustment->created_by,
                'items' => collect($items)->map(function (array $item) {
                    $qtyDifference = (float) $item['qty_difference'];

                    return [
                        'raw_material_id' => $item['raw_material_id'],
                        'qty_in' => $qtyDifference > 0 ? $qtyDifference : 0,
                        'qty_out' => $qtyDifference < 0 ? abs($qtyDifference) : 0,
                        'unit_cost' => 0,
                        'notes' => $item['notes'] ?? null,
                    ];
                })->all(),
            ]);

            return $adjustment->fresh()->load(['outlet', 'creator', 'approver', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function update(StockAdjustment $adjustment, array $payload): StockAdjustment
    {
        if ($adjustment->approved_at !== null) {
            throw ValidationException::withMessages([
                'approved_at' => ['Stock adjustment yang sudah approved tidak boleh diubah.'],
            ]);
        }

        return DB::transaction(function () use ($adjustment, $payload) {
            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $adjustment->update($payload);

            if (is_array($items)) {
                $adjustment->items()->delete();

                foreach ($items as $item) {
                    $adjustment->items()->create([
                        'raw_material_id' => $item['raw_material_id'],
                        'qty_difference' => $item['qty_difference'],
                        'unit_id' => $item['unit_id'],
                        'notes' => $item['notes'] ?? null,
                    ]);
                }
            }

            return $adjustment->fresh()->load(['outlet', 'creator', 'approver', 'items.rawMaterial', 'items.unit']);
        });
    }

    private function generateAdjustmentNumber(int $outletId): string
    {
        $count = StockAdjustment::query()
            ->where('outlet_id', $outletId)
            ->whereDate('created_at', now()->toDateString())
            ->count() + 1;

        return 'ADJ-' . $outletId . '-' . now()->format('Ymd') . '-' . str_pad((string) $count, 4, '0', STR_PAD_LEFT);
    }
}
