<?php

namespace App\Services\Sales;

use App\Models\CashierShift;
use App\Models\Order;
use App\Models\OrderStatusHistory;
use App\Models\Product;
use App\Models\ProductPrice;
use App\Services\Kitchen\KitchenTicketService;
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

            $outletId = (int) $payload['outlet_id'];

            $this->validateCashierShift(
                cashierShiftId: $payload['cashier_shift_id'] ?? null,
                outletId: $outletId,
            );

            [$subtotal, $normalizedItems] = $this->prepareItemsAndTotals(
                outletId: $outletId,
                items: $items,
            );

            $discountAmount = (float) ($payload['discount_amount'] ?? 0);
            $taxAmount = (float) ($payload['tax_amount'] ?? 0);
            $serviceChargeAmount = (float) ($payload['service_charge_amount'] ?? 0);
            $grandTotal = $subtotal - $discountAmount + $taxAmount + $serviceChargeAmount;

            $order = Order::query()->create([
                'outlet_id' => $outletId,
                'cashier_shift_id' => $payload['cashier_shift_id'] ?? null,
                'customer_id' => $payload['customer_id'] ?? null,
                'order_number' => $this->generateOrderNumber($outletId),
                'queue_number' => $payload['queue_number'] ?? null,
                'order_channel' => $payload['order_channel'] ?? 'pos',
                'order_status' => $payload['order_status'] ?? 'draft',
                'payment_status' => $payload['payment_status'] ?? 'unpaid',
                'subtotal' => $subtotal,
                'discount_amount' => $discountAmount,
                'tax_amount' => $taxAmount,
                'service_charge_amount' => $serviceChargeAmount,
                'grand_total' => $grandTotal,
                'paid_total' => 0,
                'change_amount' => 0,
                'notes' => $payload['notes'] ?? null,
                'ordered_at' => $payload['ordered_at'] ?? now(),
                'created_by' => $userId,
            ]);

            foreach ($normalizedItems as $item) {
                $orderItem = $order->items()->create([
                    'product_id' => $item['product_id'],
                    'product_name_snapshot' => $item['product_name_snapshot'],
                    'sku_snapshot' => $item['sku_snapshot'],
                    'qty' => $item['qty'],
                    'unit_price' => $item['unit_price'],
                    'discount_amount' => $item['discount_amount'],
                    'line_total' => $item['line_total'],
                    'notes' => $item['notes'],
                ]);

                foreach ($item['variants'] as $variant) {
                    $orderItem->variants()->create([
                        'variant_group_name_snapshot' => $variant['variant_group_name_snapshot'],
                        'variant_option_name_snapshot' => $variant['variant_option_name_snapshot'],
                        'price_adjustment' => $variant['price_adjustment'],
                    ]);
                }

                foreach ($item['modifiers'] as $modifier) {
                    $orderItem->modifiers()->create([
                        'modifier_group_name_snapshot' => $modifier['modifier_group_name_snapshot'],
                        'modifier_option_name_snapshot' => $modifier['modifier_option_name_snapshot'],
                        'qty' => $modifier['qty'],
                        'price' => $modifier['price'],
                    ]);
                }
            }

            $this->createStatusHistory(
                orderId: $order->id,
                status: $order->order_status,
                userId: $userId,
                notes: 'Order dibuat.',
            );

            $order = $order->fresh()->load($this->defaultRelations());

            $this->syncKitchenTicketByOrderStatus($order);

            return $order->fresh()->load($this->defaultRelations());
        });
    }

    public function update(Order $order, array $payload): Order
    {
        return DB::transaction(function () use ($order, $payload) {
            if ($order->order_status !== 'draft') {
                throw ValidationException::withMessages([
                    'order_status' => ['Hanya order draft yang boleh diupdate.'],
                ]);
            }

            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $outletId = (int) ($payload['outlet_id'] ?? $order->outlet_id);

            $this->validateCashierShift(
                cashierShiftId: $payload['cashier_shift_id'] ?? $order->cashier_shift_id,
                outletId: $outletId,
            );

            if ($items !== null) {
                [$subtotal, $normalizedItems] = $this->prepareItemsAndTotals(
                    outletId: $outletId,
                    items: $items,
                );

                $discountAmount = (float) ($payload['discount_amount'] ?? $order->discount_amount);
                $taxAmount = (float) ($payload['tax_amount'] ?? $order->tax_amount);
                $serviceChargeAmount = (float) ($payload['service_charge_amount'] ?? $order->service_charge_amount);
                $grandTotal = $subtotal - $discountAmount + $taxAmount + $serviceChargeAmount;

                $order->items()->delete();

                foreach ($normalizedItems as $item) {
                    $orderItem = $order->items()->create([
                        'product_id' => $item['product_id'],
                        'product_name_snapshot' => $item['product_name_snapshot'],
                        'sku_snapshot' => $item['sku_snapshot'],
                        'qty' => $item['qty'],
                        'unit_price' => $item['unit_price'],
                        'discount_amount' => $item['discount_amount'],
                        'line_total' => $item['line_total'],
                        'notes' => $item['notes'],
                    ]);

                    foreach ($item['variants'] as $variant) {
                        $orderItem->variants()->create([
                            'variant_group_name_snapshot' => $variant['variant_group_name_snapshot'],
                            'variant_option_name_snapshot' => $variant['variant_option_name_snapshot'],
                            'price_adjustment' => $variant['price_adjustment'],
                        ]);
                    }

                    foreach ($item['modifiers'] as $modifier) {
                        $orderItem->modifiers()->create([
                            'modifier_group_name_snapshot' => $modifier['modifier_group_name_snapshot'],
                            'modifier_option_name_snapshot' => $modifier['modifier_option_name_snapshot'],
                            'qty' => $modifier['qty'],
                            'price' => $modifier['price'],
                        ]);
                    }
                }

                $payload['subtotal'] = $subtotal;
                $payload['grand_total'] = $grandTotal;
            }

            $order->update($payload);

            return $order->fresh()->load($this->defaultRelations());
        });
    }

    public function changeStatus(Order $order, string $newStatus, int $userId, ?string $notes = null): Order
    {
        return DB::transaction(function () use ($order, $newStatus, $userId, $notes) {
            $allowedStatuses = ['draft', 'pending', 'confirmed', 'preparing', 'ready', 'completed', 'cancelled'];

            if (!in_array($newStatus, $allowedStatuses, true)) {
                throw ValidationException::withMessages([
                    'status' => ['Status order tidak valid.'],
                ]);
            }

            if ($order->order_status === 'cancelled') {
                throw ValidationException::withMessages([
                    'status' => ['Order yang sudah cancelled tidak bisa diubah lagi.'],
                ]);
            }

            $updatePayload = [
                'order_status' => $newStatus,
            ];

            if ($newStatus === 'completed') {
                $updatePayload['completed_at'] = now();
            }

            $order->update($updatePayload);

            $this->createStatusHistory(
                orderId: $order->id,
                status: $newStatus,
                userId: $userId,
                notes: $notes,
            );

            $order = $order->fresh()->load($this->defaultRelations());

            $this->syncKitchenTicketByOrderStatus($order);

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

            $order->update([
                'order_status' => 'cancelled',
                'payment_status' => $order->payment_status === 'paid' ? $order->payment_status : 'cancelled',
                'cancelled_at' => now(),
                'cancelled_by' => $userId,
            ]);

            $this->createStatusHistory(
                orderId: $order->id,
                status: 'cancelled',
                userId: $userId,
                notes: $notes,
            );

            $order = $order->fresh()->load($this->defaultRelations());

            $this->syncKitchenTicketByOrderStatus($order);

            return $order->fresh()->load($this->defaultRelations());
        });
    }

    private function validateCashierShift(?int $cashierShiftId, int $outletId): void
    {
        if (!$cashierShiftId) {
            return;
        }

        $cashierShift = CashierShift::query()
            ->whereKey($cashierShiftId)
            ->where('outlet_id', $outletId)
            ->first();

        if (!$cashierShift) {
            throw ValidationException::withMessages([
                'cashier_shift_id' => ['Shift kasir tidak ditemukan untuk outlet tersebut.'],
            ]);
        }

        if ($cashierShift->status !== 'open') {
            throw ValidationException::withMessages([
                'cashier_shift_id' => ['Shift kasir harus dalam status open.'],
            ]);
        }
    }

    private function prepareItemsAndTotals(int $outletId, array $items): array
    {
        if (empty($items)) {
            throw ValidationException::withMessages([
                'items' => ['Minimal harus ada 1 item order.'],
            ]);
        }

        $subtotal = 0;
        $normalizedItems = [];

        foreach ($items as $index => $item) {
            $productId = (int) ($item['product_id'] ?? 0);
            $qty = (float) ($item['qty'] ?? 0);

            if ($productId <= 0 || $qty <= 0) {
                throw ValidationException::withMessages([
                    "items.{$index}.product_id" => ['Produk item tidak valid.'],
                    "items.{$index}.qty" => ['Qty item harus lebih dari 0.'],
                ]);
            }

            $product = Product::query()
                ->whereKey($productId)
                ->where('is_active', true)
                ->first();

            if (!$product) {
                throw ValidationException::withMessages([
                    "items.{$index}.product_id" => ['Produk tidak ditemukan atau tidak aktif.'],
                ]);
            }

            $productPrice = ProductPrice::query()
                ->where('product_id', $productId)
                ->where('outlet_id', $outletId)
                ->where('is_active', true)
                ->latest('id')
                ->first();

            $baseUnitPrice = (float) ($productPrice?->price ?? $product->base_price);

            $variants = [];
            $variantAdjustmentTotal = 0;

            foreach (($item['variants'] ?? []) as $variant) {
                $adjustment = (float) ($variant['price_adjustment'] ?? 0);

                $variants[] = [
                    'variant_group_name_snapshot' => $variant['variant_group_name_snapshot'] ?? ($variant['group_name'] ?? '-'),
                    'variant_option_name_snapshot' => $variant['variant_option_name_snapshot'] ?? ($variant['option_name'] ?? '-'),
                    'price_adjustment' => $adjustment,
                ];

                $variantAdjustmentTotal += $adjustment;
            }

            $modifiers = [];
            $modifierTotalPerUnit = 0;

            foreach (($item['modifiers'] ?? []) as $modifier) {
                $modifierQty = (float) ($modifier['qty'] ?? 1);
                $modifierPrice = (float) ($modifier['price'] ?? 0);

                $modifiers[] = [
                    'modifier_group_name_snapshot' => $modifier['modifier_group_name_snapshot'] ?? ($modifier['group_name'] ?? '-'),
                    'modifier_option_name_snapshot' => $modifier['modifier_option_name_snapshot'] ?? ($modifier['option_name'] ?? '-'),
                    'qty' => $modifierQty,
                    'price' => $modifierPrice,
                ];

                $modifierTotalPerUnit += ($modifierQty * $modifierPrice);
            }

            $discountAmount = (float) ($item['discount_amount'] ?? 0);
            $unitPrice = $baseUnitPrice + $variantAdjustmentTotal + $modifierTotalPerUnit;
            $lineTotal = ($unitPrice * $qty) - $discountAmount;

            if ($lineTotal < 0) {
                throw ValidationException::withMessages([
                    "items.{$index}.discount_amount" => ['Discount item tidak boleh melebihi total item.'],
                ]);
            }

            $normalizedItems[] = [
                'product_id' => $product->id,
                'product_name_snapshot' => $product->name,
                'sku_snapshot' => $product->sku,
                'qty' => $qty,
                'unit_price' => $unitPrice,
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

    private function createStatusHistory(int $orderId, string $status, ?int $userId = null, ?string $notes = null): void
    {
        OrderStatusHistory::query()->create([
            'order_id' => $orderId,
            'status' => $status,
            'changed_by' => $userId,
            'notes' => $notes,
            'changed_at' => now(),
        ]);
    }

    private function generateOrderNumber(int $outletId): string
    {
        do {
            $orderNumber = sprintf(
                'ORD-%d-%s-%s',
                $outletId,
                now()->format('Ymd'),
                strtoupper(Str::padLeft((string) random_int(1, 9999), 4, '0'))
            );

            $exists = Order::query()->where('order_number', $orderNumber)->exists();

            if (!$exists) {
                return $orderNumber;
            }
        } while (true);
    }

    private function syncKitchenTicketByOrderStatus(Order $order): void
    {
        /** @var KitchenTicketService $kitchenTicketService */
        $kitchenTicketService = app(KitchenTicketService::class);

        if (in_array($order->order_status, ['confirmed', 'preparing', 'ready', 'completed', 'cancelled'], true)) {
            $kitchenTicketService->syncFromOrder($order);
        }
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
            'kitchenTickets.items.orderItem',
        ];
    }
}
