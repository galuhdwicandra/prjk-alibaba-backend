<?php

namespace App\Services\Sales;

use App\Models\CashierShift;
use App\Models\Order;
use App\Models\Product;
// use App\Models\ProductOutletStatus;
use App\Models\ProductPrice;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class OrderService
{
    public function create(array $payload, ?int $userId = null): Order
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'];
            unset($payload['items']);

            $this->validateCashierShift($payload['cashier_shift_id'] ?? null, (int) $payload['outlet_id']);
            [$subtotal, $normalizedItems] = $this->prepareItemsAndTotals(
                outletId: (int) $payload['outlet_id'],
                items: $items,
            );

            $discountAmount = (float) ($payload['discount_amount'] ?? 0);
            $taxAmount = (float) ($payload['tax_amount'] ?? 0);
            $serviceChargeAmount = (float) ($payload['service_charge_amount'] ?? 0);
            $paidTotal = (float) ($payload['paid_total'] ?? 0);
            $grandTotal = $subtotal - $discountAmount + $taxAmount + $serviceChargeAmount;
            $changeAmount = (float) ($payload['change_amount'] ?? max(0, $paidTotal - $grandTotal));

            $order = Order::create([
                'outlet_id' => $payload['outlet_id'],
                'cashier_shift_id' => $payload['cashier_shift_id'] ?? null,
                'customer_id' => $payload['customer_id'] ?? null,
                'order_number' => $payload['order_number'] ?? $this->generateOrderNumber((int) $payload['outlet_id']),
                'queue_number' => $payload['queue_number'] ?? null,
                'order_channel' => $payload['order_channel'] ?? 'pos',
                'order_status' => $payload['order_status'] ?? 'draft',
                'payment_status' => $payload['payment_status'] ?? 'unpaid',
                'subtotal' => $subtotal,
                'discount_amount' => $discountAmount,
                'tax_amount' => $taxAmount,
                'service_charge_amount' => $serviceChargeAmount,
                'grand_total' => $grandTotal,
                'paid_total' => $paidTotal,
                'change_amount' => $changeAmount,
                'notes' => $payload['notes'] ?? null,
                'ordered_at' => $payload['ordered_at'] ?? now(),
                'created_by' => $userId,
            ]);

            foreach ($normalizedItems as $item) {
                $variants = $item['variants'];
                $modifiers = $item['modifiers'];
                unset($item['variants'], $item['modifiers']);

                $orderItem = $order->items()->create($item);

                foreach ($variants as $variant) {
                    $orderItem->variants()->create($variant);
                }

                foreach ($modifiers as $modifier) {
                    $orderItem->modifiers()->create($modifier);
                }
            }

            $this->recordStatusHistory(
                order: $order,
                status: $order->order_status,
                userId: $userId,
                notes: 'Order dibuat.',
            );

            return $order->fresh()->load($this->defaultRelations());
        });
    }

    public function update(Order $order, array $payload): Order
    {
        return DB::transaction(function () use ($order, $payload) {
            if (in_array($order->order_status, ['completed', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'order_status' => ['Order dengan status ini tidak bisa diubah.'],
                ]);
            }

            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $outletId = (int) ($payload['outlet_id'] ?? $order->outlet_id);

            $this->validateCashierShift(
                $payload['cashier_shift_id'] ?? $order->cashier_shift_id,
                $outletId
            );

            if (is_array($items)) {
                [$subtotal, $normalizedItems] = $this->prepareItemsAndTotals(
                    outletId: $outletId,
                    items: $items,
                );
            } else {
                $subtotal = (float) $order->subtotal;
                $normalizedItems = null;
            }

            $discountAmount = (float) ($payload['discount_amount'] ?? $order->discount_amount);
            $taxAmount = (float) ($payload['tax_amount'] ?? $order->tax_amount);
            $serviceChargeAmount = (float) ($payload['service_charge_amount'] ?? $order->service_charge_amount);
            $paidTotal = (float) ($payload['paid_total'] ?? $order->paid_total);
            $grandTotal = $subtotal - $discountAmount + $taxAmount + $serviceChargeAmount;
            $changeAmount = array_key_exists('change_amount', $payload)
                ? (float) $payload['change_amount']
                : max(0, $paidTotal - $grandTotal);

            $oldStatus = $order->order_status;

            $order->update([
                'outlet_id' => $outletId,
                'cashier_shift_id' => $payload['cashier_shift_id'] ?? $order->cashier_shift_id,
                'customer_id' => $payload['customer_id'] ?? $order->customer_id,
                'queue_number' => $payload['queue_number'] ?? $order->queue_number,
                'order_channel' => $payload['order_channel'] ?? $order->order_channel,
                'order_status' => $payload['order_status'] ?? $order->order_status,
                'payment_status' => $payload['payment_status'] ?? $order->payment_status,
                'subtotal' => $subtotal,
                'discount_amount' => $discountAmount,
                'tax_amount' => $taxAmount,
                'service_charge_amount' => $serviceChargeAmount,
                'grand_total' => $grandTotal,
                'paid_total' => $paidTotal,
                'change_amount' => $changeAmount,
                'notes' => array_key_exists('notes', $payload) ? $payload['notes'] : $order->notes,
                'ordered_at' => $payload['ordered_at'] ?? $order->ordered_at,
            ]);

            if (is_array($normalizedItems)) {
                $order->items()->delete();

                foreach ($normalizedItems as $item) {
                    $variants = $item['variants'];
                    $modifiers = $item['modifiers'];
                    unset($item['variants'], $item['modifiers']);

                    $orderItem = $order->items()->create($item);

                    foreach ($variants as $variant) {
                        $orderItem->variants()->create($variant);
                    }

                    foreach ($modifiers as $modifier) {
                        $orderItem->modifiers()->create($modifier);
                    }
                }
            }

            if (($payload['order_status'] ?? $oldStatus) !== $oldStatus) {
                $this->recordStatusHistory(
                    order: $order,
                    status: $order->order_status,
                    userId: null,
                    notes: 'Status order diubah lewat update.',
                );
            }

            return $order->fresh()->load($this->defaultRelations());
        });
    }

    public function changeStatus(Order $order, string $newStatus, int $userId, ?string $notes = null): Order
    {
        return DB::transaction(function () use ($order, $newStatus, $userId, $notes) {
            if ($order->order_status === 'cancelled') {
                throw ValidationException::withMessages([
                    'order_status' => ['Order yang sudah dibatalkan tidak bisa diubah statusnya.'],
                ]);
            }

            if ($order->order_status === 'completed') {
                throw ValidationException::withMessages([
                    'order_status' => ['Order yang sudah selesai tidak bisa diubah statusnya.'],
                ]);
            }

            $allowedMap = [
                'draft' => ['pending', 'confirmed', 'cancelled'],
                'pending' => ['confirmed', 'cancelled'],
                'confirmed' => ['preparing', 'ready', 'completed', 'cancelled'],
                'preparing' => ['ready', 'completed', 'cancelled'],
                'ready' => ['completed', 'cancelled'],
            ];

            $currentStatus = $order->order_status;
            $allowedNextStatuses = $allowedMap[$currentStatus] ?? [];

            if (!in_array($newStatus, $allowedNextStatuses, true)) {
                throw ValidationException::withMessages([
                    'order_status' => ["Transisi status dari {$currentStatus} ke {$newStatus} tidak diizinkan."],
                ]);
            }

            $updatePayload = [
                'order_status' => $newStatus,
            ];

            if ($newStatus === 'completed') {
                $updatePayload['completed_at'] = now();
            }

            $order->update($updatePayload);

            $this->recordStatusHistory(
                order: $order,
                status: $newStatus,
                userId: $userId,
                notes: $notes,
            );

            return $order->fresh()->load($this->defaultRelations());
        });
    }

    public function cancel(Order $order, int $userId, ?string $notes = null): Order
    {
        return DB::transaction(function () use ($order, $userId, $notes) {
            if ($order->order_status === 'completed') {
                throw ValidationException::withMessages([
                    'order_status' => ['Order yang sudah completed tidak bisa dibatalkan.'],
                ]);
            }

            if ($order->order_status === 'cancelled') {
                throw ValidationException::withMessages([
                    'order_status' => ['Order sudah berstatus cancelled.'],
                ]);
            }

            $order->update([
                'order_status' => 'cancelled',
                'payment_status' => $order->payment_status === 'paid' ? 'refunded' : 'cancelled',
                'cancelled_at' => now(),
                'cancelled_by' => $userId,
            ]);

            $this->recordStatusHistory(
                order: $order,
                status: 'cancelled',
                userId: $userId,
                notes: $notes,
            );

            return $order->fresh()->load($this->defaultRelations());
        });
    }

    private function prepareItemsAndTotals(int $outletId, array $items): array
    {
        $normalizedItems = [];
        $subtotal = 0;

        foreach ($items as $item) {
            $product = Product::query()
                ->with([
                    'prices' => function ($query) use ($outletId) {
                        $query->where('outlet_id', $outletId)
                            ->where('is_active', true)
                            ->orderByDesc('starts_at')
                            ->orderByDesc('id');
                    },
                    'outletStatuses' => function ($query) use ($outletId) {
                        $query->where('outlet_id', $outletId);
                    },
                ])
                ->findOrFail((int) $item['product_id']);

            if (!$product->is_active) {
                throw ValidationException::withMessages([
                    'items' => ["Produk {$product->name} tidak aktif."],
                ]);
            }

            $outletStatus = $product->outletStatuses->first();

            if ($outletStatus && (!$outletStatus->is_available || $outletStatus->is_hidden)) {
                throw ValidationException::withMessages([
                    'items' => ["Produk {$product->name} tidak tersedia di outlet ini."],
                ]);
            }

            $priceRow = $product->prices->first();

            if (!$priceRow) {
                $priceRow = ProductPrice::query()
                    ->where('product_id', $product->id)
                    ->where('outlet_id', $outletId)
                    ->where('is_active', true)
                    ->latest('id')
                    ->first();
            }

            $baseUnitPrice = $priceRow?->price ?? $product->base_price;

            $variants = collect($item['variants'] ?? [])->map(function ($variant) {
                return [
                    'variant_group_name_snapshot' => $variant['variant_group_name_snapshot'],
                    'variant_option_name_snapshot' => $variant['variant_option_name_snapshot'],
                    'price_adjustment' => (float) ($variant['price_adjustment'] ?? 0),
                ];
            })->values()->all();

            $modifiers = collect($item['modifiers'] ?? [])->map(function ($modifier) {
                return [
                    'modifier_group_name_snapshot' => $modifier['modifier_group_name_snapshot'],
                    'modifier_option_name_snapshot' => $modifier['modifier_option_name_snapshot'],
                    'qty' => (float) ($modifier['qty'] ?? 1),
                    'price' => (float) ($modifier['price'] ?? 0),
                ];
            })->values()->all();

            $variantAdjustmentTotal = collect($variants)->sum('price_adjustment');
            $modifierTotal = collect($modifiers)->sum(function ($modifier) {
                return ((float) $modifier['qty']) * ((float) $modifier['price']);
            });

            $qty = (float) $item['qty'];
            $discountAmount = (float) ($item['discount_amount'] ?? 0);
            $effectiveUnitPrice = (float) $baseUnitPrice + (float) $variantAdjustmentTotal + (float) $modifierTotal;
            $lineTotal = ($qty * $effectiveUnitPrice) - $discountAmount;

            if ($lineTotal < 0) {
                throw ValidationException::withMessages([
                    'items' => ["Line total produk {$product->name} tidak valid."],
                ]);
            }

            $normalizedItems[] = [
                'product_id' => $product->id,
                'product_name_snapshot' => $product->name,
                'sku_snapshot' => $product->sku,
                'qty' => $qty,
                'unit_price' => $effectiveUnitPrice,
                'discount_amount' => $discountAmount,
                'line_total' => $lineTotal,
                'notes' => $item['notes'] ?? null,
                'variants' => $variants,
                'modifiers' => $modifiers,
            ];

            $subtotal += $lineTotal;
        }

        return [$subtotal, $normalizedItems];
    }

    private function validateCashierShift(?int $cashierShiftId, int $outletId): void
    {
        if (!$cashierShiftId) {
            return;
        }

        $shift = CashierShift::query()->findOrFail($cashierShiftId);

        if ((int) $shift->outlet_id !== $outletId) {
            throw ValidationException::withMessages([
                'cashier_shift_id' => ['Shift kasir harus berasal dari outlet yang sama dengan order.'],
            ]);
        }

        if ($shift->status !== 'open') {
            throw ValidationException::withMessages([
                'cashier_shift_id' => ['Shift kasir harus dalam status open.'],
            ]);
        }
    }

    private function recordStatusHistory(Order $order, string $status, ?int $userId = null, ?string $notes = null): void
    {
        $order->statusHistories()->create([
            'status' => $status,
            'changed_by' => $userId,
            'notes' => $notes,
            'changed_at' => now(),
        ]);
    }

    private function generateOrderNumber(int $outletId): string
    {
        $datePart = now()->format('Ymd');
        $randomPart = strtoupper(Str::padLeft((string) random_int(1, 9999), 4, '0'));

        do {
            $orderNumber = "ORD-{$outletId}-{$datePart}-{$randomPart}";
            $exists = Order::query()->where('order_number', $orderNumber)->exists();

            if (!$exists) {
                return $orderNumber;
            }

            $randomPart = strtoupper(Str::padLeft((string) random_int(1, 9999), 4, '0'));
        } while (true);
    }

    private function defaultRelations(): array
    {
        return [
            'outlet',
            'cashierShift',
            'customer',
            'creator',
            'canceller',
            'items.product',
            'items.variants',
            'items.modifiers',
            'statusHistories.changer',
        ];
    }
}
