<?php

namespace App\Services\Kitchen;

use App\Models\KitchenTicket;
use App\Models\Order;
use App\Models\OrderStatusHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class KitchenTicketService
{
    public function createFromOrderId(int $orderId): KitchenTicket
    {
        $order = Order::query()
            ->with($this->orderRelations())
            ->findOrFail($orderId);

        return $this->createFromOrder($order);
    }

    public function createFromOrder(Order $order): KitchenTicket
    {
        return DB::transaction(function () use ($order) {
            $order->loadMissing($this->orderRelations());

            if (in_array($order->order_status, ['draft', 'pending', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'order_id' => ['Order belum siap dibuatkan kitchen ticket.'],
                ]);
            }

            $existing = KitchenTicket::query()
                ->where('order_id', $order->id)
                ->first();

            if ($existing) {
                return $existing->load($this->ticketRelations());
            }

            $ticket = KitchenTicket::create([
                'order_id' => $order->id,
                'ticket_number' => $this->generateTicketNumber((int) $order->outlet_id),
                'status' => $this->mapOrderStatusToTicketStatus($order->order_status),
                'prepared_at' => $order->order_status === 'preparing' ? now() : null,
                'ready_at' => $order->order_status === 'ready' ? now() : null,
            ]);

            foreach ($order->items as $item) {
                $ticket->items()->create([
                    'order_item_id' => $item->id,
                    'item_name_snapshot' => $item->product_name_snapshot,
                    'qty' => $item->qty,
                    'notes' => $item->notes,
                ]);
            }

            return $ticket->fresh()->load($this->ticketRelations());
        });
    }

    public function syncFromOrder(Order $order): ?KitchenTicket
    {
        $order->loadMissing($this->orderRelations());

        if (in_array($order->order_status, ['draft', 'pending'], true)) {
            return null;
        }

        if ($order->order_status === 'cancelled') {
            return $this->syncCancelledFromOrder($order);
        }

        $ticket = KitchenTicket::query()->where('order_id', $order->id)->first();

        if (!$ticket) {
            return $this->createFromOrder($order);
        }

        $ticketStatus = $this->mapOrderStatusToTicketStatus($order->order_status);

        $payload = [
            'status' => $ticketStatus,
        ];

        if ($ticketStatus === 'preparing' && !$ticket->prepared_at) {
            $payload['prepared_at'] = now();
        }

        if ($ticketStatus === 'ready' && !$ticket->ready_at) {
            $payload['ready_at'] = now();
        }

        $ticket->update($payload);

        return $ticket->fresh()->load($this->ticketRelations());
    }

    public function syncCancelledFromOrder(Order $order): ?KitchenTicket
    {
        $ticket = KitchenTicket::query()->where('order_id', $order->id)->first();

        if (!$ticket) {
            return null;
        }

        $ticket->update([
            'status' => 'cancelled',
        ]);

        return $ticket->fresh()->load($this->ticketRelations());
    }

    public function markPrinted(KitchenTicket $ticket, ?string $printedAt = null): KitchenTicket
    {
        $ticket->update([
            'printed_at' => $printedAt ?: now(),
        ]);

        return $ticket->fresh()->load($this->ticketRelations());
    }

    public function startPreparing(KitchenTicket $ticket, int $userId, ?string $preparedAt = null, ?string $notes = null): KitchenTicket
    {
        return DB::transaction(function () use ($ticket, $userId, $preparedAt, $notes) {
            if (in_array($ticket->status, ['served', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'status' => ['Kitchen ticket yang sudah served atau cancelled tidak bisa diproses lagi.'],
                ]);
            }

            $ticket->update([
                'status' => 'preparing',
                'prepared_at' => $preparedAt ?: now(),
            ]);

            $this->syncOrderStatus(
                order: $ticket->order()->firstOrFail(),
                status: 'preparing',
                userId: $userId,
                notes: $notes ?: 'Pesanan mulai diproses dapur.',
                completedAt: null,
                cancelledAt: null,
            );

            return $ticket->fresh()->load($this->ticketRelations());
        });
    }

    public function markReady(KitchenTicket $ticket, int $userId, ?string $readyAt = null, ?string $notes = null): KitchenTicket
    {
        return DB::transaction(function () use ($ticket, $userId, $readyAt, $notes) {
            if (in_array($ticket->status, ['served', 'cancelled'], true)) {
                throw ValidationException::withMessages([
                    'status' => ['Kitchen ticket yang sudah served atau cancelled tidak bisa diubah ke ready.'],
                ]);
            }

            $ticket->update([
                'status' => 'ready',
                'ready_at' => $readyAt ?: now(),
                'prepared_at' => $ticket->prepared_at ?: now(),
            ]);

            $this->syncOrderStatus(
                order: $ticket->order()->firstOrFail(),
                status: 'ready',
                userId: $userId,
                notes: $notes ?: 'Pesanan sudah siap di-pickup / disajikan.',
                completedAt: null,
                cancelledAt: null,
            );

            return $ticket->fresh()->load($this->ticketRelations());
        });
    }

    public function serve(KitchenTicket $ticket, int $userId, ?string $completedAt = null, ?string $notes = null): KitchenTicket
    {
        return DB::transaction(function () use ($ticket, $userId, $completedAt, $notes) {
            if ($ticket->status === 'cancelled') {
                throw ValidationException::withMessages([
                    'status' => ['Kitchen ticket yang cancelled tidak bisa di-serve.'],
                ]);
            }

            $ticket->update([
                'status' => 'served',
                'prepared_at' => $ticket->prepared_at ?: now(),
                'ready_at' => $ticket->ready_at ?: now(),
            ]);

            $this->syncOrderStatus(
                order: $ticket->order()->firstOrFail(),
                status: 'completed',
                userId: $userId,
                notes: $notes ?: 'Pesanan selesai dari dapur.',
                completedAt: $completedAt ?: now(),
                cancelledAt: null,
            );

            return $ticket->fresh()->load($this->ticketRelations());
        });
    }

    public function cancel(KitchenTicket $ticket, int $userId, ?string $cancelledAt = null, ?string $notes = null): KitchenTicket
    {
        return DB::transaction(function () use ($ticket, $userId, $cancelledAt, $notes) {
            if ($ticket->status === 'served') {
                throw ValidationException::withMessages([
                    'status' => ['Kitchen ticket yang sudah served tidak bisa dibatalkan.'],
                ]);
            }

            $ticket->update([
                'status' => 'cancelled',
            ]);

            $this->syncOrderStatus(
                order: $ticket->order()->firstOrFail(),
                status: 'cancelled',
                userId: $userId,
                notes: $notes ?: 'Pesanan dibatalkan dari proses dapur.',
                completedAt: null,
                cancelledAt: $cancelledAt ?: now(),
            );

            return $ticket->fresh()->load($this->ticketRelations());
        });
    }

    private function syncOrderStatus(
        Order $order,
        string $status,
        int $userId,
        ?string $notes = null,
        ?string $completedAt = null,
        ?string $cancelledAt = null,
    ): void {
        $updatePayload = [
            'order_status' => $status,
        ];

        if ($status === 'completed') {
            $updatePayload['completed_at'] = $completedAt ?: now();
        }

        if ($status === 'cancelled') {
            $updatePayload['cancelled_at'] = $cancelledAt ?: now();
            $updatePayload['cancelled_by'] = $userId;
            $updatePayload['payment_status'] = $order->payment_status === 'paid' ? $order->payment_status : 'cancelled';
        }

        $order->update($updatePayload);

        $latestHistory = $order->statusHistories()->latest('id')->first();

        if (!$latestHistory || $latestHistory->status !== $status) {
            OrderStatusHistory::query()->create([
                'order_id' => $order->id,
                'status' => $status,
                'changed_by' => $userId,
                'notes' => $notes,
                'changed_at' => now(),
            ]);
        }
    }

    private function generateTicketNumber(int $outletId): string
    {
        do {
            $ticketNumber = sprintf(
                'KDS-%d-%s-%s',
                $outletId,
                now()->format('Ymd'),
                strtoupper(Str::padLeft((string) random_int(1, 9999), 4, '0'))
            );

            $exists = KitchenTicket::query()->where('ticket_number', $ticketNumber)->exists();
        } while ($exists);

        return $ticketNumber;
    }

    private function mapOrderStatusToTicketStatus(string $orderStatus): string
    {
        return match ($orderStatus) {
            'preparing' => 'preparing',
            'ready' => 'ready',
            'completed' => 'served',
            'cancelled' => 'cancelled',
            default => 'pending',
        };
    }

    private function ticketRelations(): array
    {
        return [
            'order.outlet',
            'order.customer',
            'items.orderItem.variants',
            'items.orderItem.modifiers',
        ];
    }

    private function orderRelations(): array
    {
        return [
            'outlet',
            'customer',
            'items.variants',
            'items.modifiers',
            'statusHistories',
        ];
    }
}
