<?php

namespace App\Services\Inventory;

use App\Models\OutletMaterialStock;
use App\Models\StockOpname;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class StockOpnameService
{
    public function __construct(
        private readonly StockMovementService $stockMovementService
    ) {
    }

    public function create(array $payload, ?int $userId = null): StockOpname
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            if (empty($payload['opname_number'])) {
                $payload['opname_number'] = $this->generateOpnameNumber((int) $payload['outlet_id']);
            }

            $payload['created_by'] = $payload['created_by'] ?? $userId;
            $payload['status'] = $payload['status'] ?? 'draft';

            $opname = StockOpname::create($payload);

            foreach ($items as $item) {
                $stock = OutletMaterialStock::query()->firstOrCreate(
                    [
                        'outlet_id' => $payload['outlet_id'],
                        'raw_material_id' => $item['raw_material_id'],
                    ],
                    [
                        'qty_on_hand' => 0,
                        'qty_reserved' => 0,
                        'last_movement_at' => null,
                    ]
                );

                $systemQty = array_key_exists('system_qty', $item)
                    ? (float) $item['system_qty']
                    : (float) $stock->qty_on_hand;

                $actualQty = (float) $item['actual_qty'];

                $opname->items()->create([
                    'raw_material_id' => $item['raw_material_id'],
                    'system_qty' => $systemQty,
                    'actual_qty' => $actualQty,
                    'difference_qty' => $actualQty - $systemQty,
                    'unit_id' => $item['unit_id'],
                    'notes' => $item['notes'] ?? null,
                ]);
            }

            return $opname->fresh()->load(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function update(StockOpname $opname, array $payload): StockOpname
    {
        if ($opname->status !== 'draft') {
            throw ValidationException::withMessages([
                'status' => ['Hanya stock opname draft yang boleh diubah.'],
            ]);
        }

        return DB::transaction(function () use ($opname, $payload) {
            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $opname->update($payload);

            if (is_array($items)) {
                $opname->items()->delete();

                foreach ($items as $item) {
                    $stock = OutletMaterialStock::query()->firstOrCreate(
                        [
                            'outlet_id' => $opname->outlet_id,
                            'raw_material_id' => $item['raw_material_id'],
                        ],
                        [
                            'qty_on_hand' => 0,
                            'qty_reserved' => 0,
                            'last_movement_at' => null,
                        ]
                    );

                    $systemQty = array_key_exists('system_qty', $item)
                        ? (float) $item['system_qty']
                        : (float) $stock->qty_on_hand;

                    $actualQty = (float) $item['actual_qty'];

                    $opname->items()->create([
                        'raw_material_id' => $item['raw_material_id'],
                        'system_qty' => $systemQty,
                        'actual_qty' => $actualQty,
                        'difference_qty' => $actualQty - $systemQty,
                        'unit_id' => $item['unit_id'],
                        'notes' => $item['notes'] ?? null,
                    ]);
                }
            }

            return $opname->fresh()->load(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function post(StockOpname $opname, int $userId, ?string $postedAt = null): StockOpname
    {
        if ($opname->status !== 'draft') {
            throw ValidationException::withMessages([
                'status' => ['Hanya stock opname draft yang bisa dipost.'],
            ]);
        }

        return DB::transaction(function () use ($opname, $userId, $postedAt) {
            $effectivePostedAt = $postedAt ? now()->parse($postedAt) : now();

            $this->stockMovementService->create([
                'outlet_id' => $opname->outlet_id,
                'movement_type' => 'opname',
                'reference_type' => StockOpname::class,
                'reference_id' => $opname->id,
                'movement_date' => $effectivePostedAt,
                'notes' => $opname->notes,
                'created_by' => $userId,
                'items' => $opname->items->map(function ($item) {
                    $differenceQty = (float) $item->difference_qty;

                    return [
                        'raw_material_id' => $item->raw_material_id,
                        'qty_in' => $differenceQty > 0 ? $differenceQty : 0,
                        'qty_out' => $differenceQty < 0 ? abs($differenceQty) : 0,
                        'unit_cost' => 0,
                        'notes' => $item->notes,
                    ];
                })->all(),
            ]);

            $opname->update([
                'status' => 'posted',
                'posted_by' => $userId,
                'posted_at' => $effectivePostedAt,
            ]);

            return $opname->fresh()->load(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function cancel(StockOpname $opname): StockOpname
    {
        if ($opname->status === 'posted') {
            throw ValidationException::withMessages([
                'status' => ['Stock opname yang sudah posted tidak bisa dibatalkan.'],
            ]);
        }

        $opname->update([
            'status' => 'cancelled',
        ]);

        return $opname->fresh()->load(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit']);
    }

    private function generateOpnameNumber(int $outletId): string
    {
        $count = StockOpname::query()
            ->where('outlet_id', $outletId)
            ->whereDate('created_at', now()->toDateString())
            ->count() + 1;

        return 'OPN-' . $outletId . '-' . now()->format('Ymd') . '-' . str_pad((string) $count, 4, '0', STR_PAD_LEFT);
    }
}
