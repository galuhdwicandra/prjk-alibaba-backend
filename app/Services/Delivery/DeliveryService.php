<?php
namespace App\Services\Delivery;

use App\Models\Delivery;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class DeliveryService
{
    public function create(array $payload): Delivery
    {
        return DB::transaction(function () use ($payload) {
            $order = Order::query()->findOrFail((int) $payload['order_id']);

            if (! in_array($order->order_channel, ['delivery', 'pickup', 'website'], true)) {
                throw ValidationException::withMessages([
                    'order_id' => ['Delivery hanya boleh dibuat untuk order channel delivery, pickup, atau website.'],
                ]);
            }

            if (Delivery::query()->where('order_id', $order->id)->exists()) {
                throw ValidationException::withMessages([
                    'order_id' => ['Delivery untuk order ini sudah ada.'],
                ]);
            }

            $status = $payload['delivery_status'] ?? 'pending';

            if (! empty($payload['courier_id']) && $status === 'pending') {
                $status = 'assigned';
            }

            $delivery = Delivery::query()->create([
                'order_id'            => $order->id,
                'customer_address_id' => $payload['customer_address_id'] ?? null,
                'courier_id'          => $payload['courier_id'] ?? null,
                'delivery_status'     => $status,
                'delivery_fee'        => $payload['delivery_fee'] ?? 0,
                'delivered_at'        => $payload['delivered_at'] ?? null,
                'notes'               => $payload['notes'] ?? null,
            ]);

            if ($delivery->delivery_status === 'delivered') {
                $this->completeOrderIfPossible($order, $payload['delivered_at'] ?? now());
            }

            return $delivery->load(['order.outlet', 'order.customer', 'customerAddress.customer', 'courier']);
        });
    }

    public function update(Delivery $delivery, array $payload): Delivery
    {
        return DB::transaction(function () use ($delivery, $payload) {
            if (in_array($delivery->delivery_status, ['delivered', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'delivery_status' => ['Delivery yang sudah delivered atau cancelled tidak boleh diubah.'],
                ]);
            }

            $delivery->update([
                'customer_address_id' => array_key_exists('customer_address_id', $payload) ? $payload['customer_address_id'] : $delivery->customer_address_id,
                'courier_id'          => array_key_exists('courier_id', $payload) ? $payload['courier_id'] : $delivery->courier_id,
                'delivery_status'     => array_key_exists('delivery_status', $payload) ? $payload['delivery_status'] : $delivery->delivery_status,
                'delivery_fee'        => array_key_exists('delivery_fee', $payload) ? $payload['delivery_fee'] : $delivery->delivery_fee,
                'delivered_at'        => array_key_exists('delivered_at', $payload) ? $payload['delivered_at'] : $delivery->delivered_at,
                'notes'               => array_key_exists('notes', $payload) ? $payload['notes'] : $delivery->notes,
            ]);

            if ($delivery->delivery_status === 'delivered') {
                $this->completeOrderIfPossible($delivery->order, $delivery->delivered_at ?? now());
            }

            return $delivery->fresh()->load(['order.outlet', 'order.customer', 'customerAddress.customer', 'courier']);
        });
    }

    public function assignCourier(Delivery $delivery, int $courierId, ?string $notes = null): Delivery
    {
        return DB::transaction(function () use ($delivery, $courierId, $notes) {
            if (in_array($delivery->delivery_status, ['delivered', 'failed', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'delivery_status' => ['Courier tidak bisa di-assign untuk delivery yang sudah final.'],
                ]);
            }

            $delivery->update([
                'courier_id'      => $courierId,
                'delivery_status' => 'assigned',
                'notes'           => $notes ?? $delivery->notes,
            ]);

            return $delivery->fresh()->load(['order.outlet', 'order.customer', 'customerAddress.customer', 'courier']);
        });
    }

    public function changeStatus(Delivery $delivery, string $status, ?string $deliveredAt = null, ?string $notes = null): Delivery
    {
        return DB::transaction(function () use ($delivery, $status, $deliveredAt, $notes) {
            $this->ensureValidTransition($delivery->delivery_status, $status);

            $payload = [
                'delivery_status' => $status,
                'notes'           => $notes ?? $delivery->notes,
            ];

            if ($status === 'delivered') {
                $payload['delivered_at'] = $deliveredAt ?? now();
            }

            $delivery->update($payload);

            if ($status === 'delivered') {
                $this->completeOrderIfPossible($delivery->order, $payload['delivered_at']);
            }

            if ($status === 'cancelled') {
                $delivery->order?->update([
                    'order_status' => 'cancelled',
                    'cancelled_at' => now(),
                ]);
            }

            return $delivery->fresh()->load(['order.outlet', 'order.customer', 'customerAddress.customer', 'courier']);
        });
    }

    private function ensureValidTransition(string $currentStatus, string $nextStatus): void
    {
        if ($currentStatus === $nextStatus) {
            return;
        }

        $allowed = [
            'pending'    => ['assigned', 'cancelled', 'failed'],
            'assigned'   => ['on_the_way', 'cancelled', 'failed'],
            'on_the_way' => ['delivered', 'failed', 'cancelled'],
            'delivered'  => [],
            'failed'     => [],
            'cancelled'  => [],
        ];

        if (! in_array($nextStatus, $allowed[$currentStatus] ?? [], true)) {
            throw ValidationException::withMessages([
                'delivery_status' => ["Perubahan status dari {$currentStatus} ke {$nextStatus} tidak valid."],
            ]);
        }
    }

    private function completeOrderIfPossible(?Order $order, mixed $completedAt): void
    {
        if (! $order) {
            return;
        }

        if (! in_array($order->order_status, ['completed', 'cancelled'], true)) {
            $order->update([
                'order_status' => 'completed',
                'completed_at' => $completedAt,
            ]);

            $order->statusHistories()->create([
                'status'     => 'completed',
                'changed_by' => Auth::id(),
                'notes'      => 'Order selesai melalui delivery.',
                'changed_at' => $completedAt,
            ]);
        }
    }
}
