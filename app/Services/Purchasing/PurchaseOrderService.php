<?php

namespace App\Services\Purchasing;

use App\Models\PurchaseOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PurchaseOrderService
{
    public function create(array $payload, ?int $userId = null): PurchaseOrder
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            $payload['status'] = $payload['status'] ?? 'draft';
            $payload['created_by'] = $userId;

            if (empty($payload['po_number'])) {
                $payload['po_number'] = $this->generatePoNumber($payload['outlet_id']);
            }

            [$subtotal, $discountAmount, $taxAmount, $totalAmount, $normalizedItems] = $this->prepareItemsAndTotals(
                items: $items,
                discountAmount: (float) ($payload['discount_amount'] ?? 0),
                taxAmount: (float) ($payload['tax_amount'] ?? 0),
            );

            $payload['subtotal'] = $subtotal;
            $payload['discount_amount'] = $discountAmount;
            $payload['tax_amount'] = $taxAmount;
            $payload['total_amount'] = $totalAmount;

            $purchaseOrder = PurchaseOrder::create($payload);

            foreach ($normalizedItems as $item) {
                $purchaseOrder->items()->create($item);
            }

            if ($purchaseOrder->status === 'approved') {
                $purchaseOrder->update([
                    'approved_by' => $userId,
                    'approved_at' => now(),
                ]);
            }

            return $purchaseOrder->load([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function update(PurchaseOrder $purchaseOrder, array $payload): PurchaseOrder
    {
        return DB::transaction(function () use ($purchaseOrder, $payload) {
            if (in_array($purchaseOrder->status, ['partial_received', 'received', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'status' => ['Purchase order dengan status ini tidak bisa diubah.'],
                ]);
            }

            $items = $payload['items'] ?? null;
            unset($payload['items']);

            if (empty($payload['po_number'] ?? null)) {
                unset($payload['po_number']);
            }

            if (is_array($items)) {
                [$subtotal, $discountAmount, $taxAmount, $totalAmount, $normalizedItems] = $this->prepareItemsAndTotals(
                    items: $items,
                    discountAmount: (float) ($payload['discount_amount'] ?? $purchaseOrder->discount_amount),
                    taxAmount: (float) ($payload['tax_amount'] ?? $purchaseOrder->tax_amount),
                );

                $payload['subtotal'] = $subtotal;
                $payload['discount_amount'] = $discountAmount;
                $payload['tax_amount'] = $taxAmount;
                $payload['total_amount'] = $totalAmount;
            }

            $purchaseOrder->update($payload);

            if (is_array($items)) {
                $purchaseOrder->items()->delete();

                foreach ($normalizedItems as $item) {
                    $purchaseOrder->items()->create($item);
                }
            }

            return $purchaseOrder->fresh()->load([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ]);
        });
    }

    public function approve(PurchaseOrder $purchaseOrder, int $userId): PurchaseOrder
    {
        if ($purchaseOrder->status !== 'draft') {
            throw ValidationException::withMessages([
                'status' => ['Hanya purchase order draft yang bisa di-approve.'],
            ]);
        }

        $purchaseOrder->update([
            'status' => 'approved',
            'approved_by' => $userId,
            'approved_at' => now(),
        ]);

        return $purchaseOrder->fresh()->load([
            'outlet',
            'supplier',
            'approver',
            'creator',
            'items.rawMaterial',
            'items.unit',
        ]);
    }

    public function cancel(PurchaseOrder $purchaseOrder): PurchaseOrder
    {
        if (in_array($purchaseOrder->status, ['received', 'cancelled'], true)) {
            throw ValidationException::withMessages([
                'status' => ['Purchase order dengan status ini tidak bisa dibatalkan.'],
            ]);
        }

        $purchaseOrder->update([
            'status' => 'cancelled',
        ]);

        return $purchaseOrder->fresh()->load([
            'outlet',
            'supplier',
            'approver',
            'creator',
            'items.rawMaterial',
            'items.unit',
        ]);
    }

    private function prepareItemsAndTotals(array $items, float $discountAmount, float $taxAmount): array
    {
        $normalizedItems = [];
        $subtotal = 0;

        foreach ($items as $item) {
            $lineTotal = ((float) $item['qty_ordered'] * (float) $item['unit_price']) - (float) ($item['discount_amount'] ?? 0);

            $normalizedItems[] = [
                'raw_material_id' => $item['raw_material_id'],
                'unit_id' => $item['unit_id'],
                'qty_ordered' => $item['qty_ordered'],
                'unit_price' => $item['unit_price'],
                'discount_amount' => $item['discount_amount'] ?? 0,
                'line_total' => $lineTotal,
                'notes' => $item['notes'] ?? null,
            ];

            $subtotal += $lineTotal;
        }

        $totalAmount = $subtotal - $discountAmount + $taxAmount;

        return [$subtotal, $discountAmount, $taxAmount, $totalAmount, $normalizedItems];
    }

    private function generatePoNumber(int $outletId): string
    {
        $date = now()->format('Ymd');
        $latestId = (PurchaseOrder::max('id') ?? 0) + 1;

        return sprintf('PO-%d-%s-%04d', $outletId, $date, $latestId);
    }
}
