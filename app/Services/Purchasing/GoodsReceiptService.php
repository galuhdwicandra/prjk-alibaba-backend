<?php

namespace App\Services\Purchasing;

use App\Models\GoodsReceipt;
use App\Models\OutletMaterialStock;
use App\Models\PurchaseOrder;
use App\Models\RawMaterial;
use App\Models\StockMovement;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class GoodsReceiptService
{
    public function create(array $payload, ?int $userId = null): GoodsReceipt
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            $purchaseOrder = PurchaseOrder::query()
                ->with(['items', 'goodsReceipts.items'])
                ->findOrFail($payload['purchase_order_id']);

            $this->ensureReceiptCanBeCreatedForPurchaseOrder($purchaseOrder, (int) $payload['outlet_id']);

            if (empty($payload['receipt_number'])) {
                $payload['receipt_number'] = $this->generateReceiptNumber((int) $payload['outlet_id']);
            }

            $payload['status'] = $payload['status'] ?? 'draft';
            $payload['received_by'] = $payload['received_by'] ?? $userId;

            $normalizedItems = $this->prepareReceiptItems($purchaseOrder, $items, null);

            $goodsReceipt = GoodsReceipt::create($payload);

            foreach ($normalizedItems as $item) {
                $goodsReceipt->items()->create($item);
            }

            return $goodsReceipt->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function update(GoodsReceipt $goodsReceipt, array $payload): GoodsReceipt
    {
        return DB::transaction(function () use ($goodsReceipt, $payload) {
            if ($goodsReceipt->status !== 'draft') {
                throw ValidationException::withMessages([
                    'status' => ['Hanya goods receipt draft yang bisa diubah.'],
                ]);
            }

            $items = $payload['items'] ?? null;
            unset($payload['items']);

            if (array_key_exists('purchase_order_id', $payload) || array_key_exists('outlet_id', $payload)) {
                $targetPurchaseOrderId = (int) ($payload['purchase_order_id'] ?? $goodsReceipt->purchase_order_id);
                $targetOutletId = (int) ($payload['outlet_id'] ?? $goodsReceipt->outlet_id);

                $purchaseOrder = PurchaseOrder::query()
                    ->with(['items', 'goodsReceipts.items'])
                    ->findOrFail($targetPurchaseOrderId);

                $this->ensureReceiptCanBeCreatedForPurchaseOrder($purchaseOrder, $targetOutletId);
            } else {
                $purchaseOrder = $goodsReceipt->purchaseOrder()->with(['items', 'goodsReceipts.items'])->firstOrFail();
            }

            if (empty($payload['receipt_number'] ?? null)) {
                unset($payload['receipt_number']);
            }

            $goodsReceipt->update($payload);

            if (is_array($items)) {
                $normalizedItems = $this->prepareReceiptItems($purchaseOrder, $items, $goodsReceipt);

                $goodsReceipt->items()->delete();

                foreach ($normalizedItems as $item) {
                    $goodsReceipt->items()->create($item);
                }
            }

            return $goodsReceipt->fresh()->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function post(GoodsReceipt $goodsReceipt, int $userId): GoodsReceipt
    {
        return DB::transaction(function () use ($goodsReceipt, $userId) {
            if ($goodsReceipt->status !== 'draft') {
                throw ValidationException::withMessages([
                    'status' => ['Hanya goods receipt draft yang bisa di-post.'],
                ]);
            }

            $goodsReceipt->loadMissing([
                'purchaseOrder.items',
                'purchaseOrder.goodsReceipts.items',
                'items.rawMaterial',
                'items.unit',
            ]);

            $this->prepareReceiptItems($goodsReceipt->purchaseOrder, $goodsReceipt->items->toArray(), $goodsReceipt);

            $movement = StockMovement::create([
                'outlet_id' => $goodsReceipt->outlet_id,
                'movement_type' => 'purchase',
                'reference_type' => GoodsReceipt::class,
                'reference_id' => $goodsReceipt->id,
                'movement_date' => $goodsReceipt->received_date,
                'notes' => $goodsReceipt->notes,
                'created_by' => $userId,
            ]);

            foreach ($goodsReceipt->items as $item) {
                $stock = OutletMaterialStock::query()->firstOrCreate(
                    [
                        'outlet_id' => $goodsReceipt->outlet_id,
                        'raw_material_id' => $item->raw_material_id,
                    ],
                    [
                        'qty_on_hand' => 0,
                        'qty_reserved' => 0,
                        'last_movement_at' => null,
                    ]
                );

                $stock->update([
                    'qty_on_hand' => (float) $stock->qty_on_hand + (float) $item->qty_received,
                    'last_movement_at' => $goodsReceipt->received_date,
                ]);

                RawMaterial::query()
                    ->whereKey($item->raw_material_id)
                    ->update([
                        'last_purchase_price' => $item->unit_cost,
                    ]);

                $movement->items()->create([
                    'raw_material_id' => $item->raw_material_id,
                    'qty_in' => $item->qty_received,
                    'qty_out' => 0,
                    'unit_cost' => $item->unit_cost,
                    'notes' => $item->notes,
                ]);
            }

            $goodsReceipt->update([
                'status' => 'posted',
                'received_by' => $goodsReceipt->received_by ?: $userId,
            ]);

            $this->refreshPurchaseOrderStatus($goodsReceipt->purchaseOrder()->with(['items', 'goodsReceipts.items'])->firstOrFail());

            return $goodsReceipt->fresh()->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function cancel(GoodsReceipt $goodsReceipt): GoodsReceipt
    {
        if ($goodsReceipt->status === 'posted') {
            throw ValidationException::withMessages([
                'status' => ['Goods receipt yang sudah dipost tidak bisa dibatalkan lewat endpoint ini.'],
            ]);
        }

        $goodsReceipt->update([
            'status' => 'cancelled',
        ]);

        $this->refreshPurchaseOrderStatus($goodsReceipt->purchaseOrder()->with(['items', 'goodsReceipts.items'])->firstOrFail());

        return $goodsReceipt->fresh()->load([
            'purchaseOrder.supplier',
            'outlet',
            'receiver',
            'items.rawMaterial',
            'items.unit',
        ]);
    }

    private function ensureReceiptCanBeCreatedForPurchaseOrder(PurchaseOrder $purchaseOrder, int $outletId): void
    {
        if (!in_array($purchaseOrder->status, ['approved', 'partial_received'], true)) {
            throw ValidationException::withMessages([
                'purchase_order_id' => ['Goods receipt hanya bisa dibuat dari purchase order yang approved atau partial_received.'],
            ]);
        }

        if ((int) $purchaseOrder->outlet_id !== $outletId) {
            throw ValidationException::withMessages([
                'outlet_id' => ['Outlet goods receipt harus sama dengan outlet purchase order.'],
            ]);
        }
    }

    private function prepareReceiptItems(PurchaseOrder $purchaseOrder, array $items, ?GoodsReceipt $currentReceipt = null): array
    {
        $poItemsByMaterial = $purchaseOrder->items->keyBy('raw_material_id');
        $alreadyReceivedMap = $this->getAlreadyReceivedMap($purchaseOrder, $currentReceipt);

        $normalizedItems = [];

        foreach ($items as $item) {
            $rawMaterialId = (int) $item['raw_material_id'];

            if (!isset($poItemsByMaterial[$rawMaterialId])) {
                throw ValidationException::withMessages([
                    'items' => ["Raw material ID {$rawMaterialId} tidak ada di purchase order."],
                ]);
            }

            $poItem = $poItemsByMaterial[$rawMaterialId];
            $newQty = (float) $item['qty_received'];
            $alreadyReceived = (float) ($alreadyReceivedMap[$rawMaterialId] ?? 0);
            $allowedMax = (float) $poItem->qty_ordered - $alreadyReceived;

            if ($newQty > $allowedMax) {
                throw ValidationException::withMessages([
                    'items' => ["Qty received untuk raw material ID {$rawMaterialId} melebihi sisa qty order."],
                ]);
            }

            $lineTotal = (float) $item['unit_cost'] * $newQty;

            $normalizedItems[] = [
                'raw_material_id' => $rawMaterialId,
                'unit_id' => $item['unit_id'],
                'qty_received' => $newQty,
                'unit_cost' => $item['unit_cost'],
                'line_total' => $lineTotal,
                'expired_at' => $item['expired_at'] ?? null,
                'notes' => $item['notes'] ?? null,
            ];
        }

        return $normalizedItems;
    }

    private function getAlreadyReceivedMap(PurchaseOrder $purchaseOrder, ?GoodsReceipt $currentReceipt = null): array
    {
        $map = [];

        $receipts = $purchaseOrder->goodsReceipts
            ->where('status', 'posted')
            ->when($currentReceipt !== null, fn (Collection $collection) => $collection->where('id', '!=', $currentReceipt->id));

        foreach ($receipts as $receipt) {
            foreach ($receipt->items as $item) {
                $map[$item->raw_material_id] = (float) ($map[$item->raw_material_id] ?? 0) + (float) $item->qty_received;
            }
        }

        return $map;
    }

    private function refreshPurchaseOrderStatus(PurchaseOrder $purchaseOrder): void
    {
        if ($purchaseOrder->status === 'cancelled') {
            return;
        }

        $receivedMap = $this->getAlreadyReceivedMap($purchaseOrder, null);

        $allReceived = true;
        $hasAnyReceived = false;

        foreach ($purchaseOrder->items as $item) {
            $receivedQty = (float) ($receivedMap[$item->raw_material_id] ?? 0);

            if ($receivedQty > 0) {
                $hasAnyReceived = true;
            }

            if ($receivedQty < (float) $item->qty_ordered) {
                $allReceived = false;
            }
        }

        $newStatus = 'approved';

        if ($allReceived && $hasAnyReceived) {
            $newStatus = 'received';
        } elseif ($hasAnyReceived) {
            $newStatus = 'partial_received';
        }

        $purchaseOrder->update([
            'status' => $newStatus,
        ]);
    }

    private function generateReceiptNumber(int $outletId): string
    {
        $date = now()->format('Ymd');
        $latestId = (GoodsReceipt::max('id') ?? 0) + 1;

        return sprintf('GR-%d-%s-%04d', $outletId, $date, $latestId);
    }
}
