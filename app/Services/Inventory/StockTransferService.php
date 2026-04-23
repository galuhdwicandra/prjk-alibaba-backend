<?php

namespace App\Services\Inventory;

use App\Models\OutletMaterialStock;
use App\Models\StockTransfer;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class StockTransferService
{
    public function __construct(
        private readonly StockMovementService $stockMovementService
    ) {
    }

    public function create(array $payload, ?int $userId = null): StockTransfer
    {
        return DB::transaction(function () use ($payload, $userId) {
            $items = $payload['items'] ?? [];
            unset($payload['items']);

            if (empty($payload['transfer_number'])) {
                $payload['transfer_number'] = $this->generateTransferNumber((int) $payload['source_outlet_id']);
            }

            $payload['created_by'] = $payload['created_by'] ?? $userId;
            $payload['status'] = $payload['status'] ?? 'draft';

            $transfer = StockTransfer::create($payload);

            foreach ($items as $item) {
                $transfer->items()->create([
                    'raw_material_id' => $item['raw_material_id'],
                    'qty_sent' => $item['qty_sent'],
                    'qty_received' => $item['qty_received'] ?? null,
                    'unit_id' => $item['unit_id'],
                    'notes' => $item['notes'] ?? null,
                ]);
            }

            return $transfer->fresh()->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function update(StockTransfer $transfer, array $payload): StockTransfer
    {
        if ($transfer->status !== 'draft') {
            throw ValidationException::withMessages([
                'status' => ['Hanya stock transfer draft yang boleh diubah.'],
            ]);
        }

        return DB::transaction(function () use ($transfer, $payload) {
            $items = $payload['items'] ?? null;
            unset($payload['items']);

            $transfer->update($payload);

            if (is_array($items)) {
                $transfer->items()->delete();

                foreach ($items as $item) {
                    $transfer->items()->create([
                        'raw_material_id' => $item['raw_material_id'],
                        'qty_sent' => $item['qty_sent'],
                        'qty_received' => $item['qty_received'] ?? null,
                        'unit_id' => $item['unit_id'],
                        'notes' => $item['notes'] ?? null,
                    ]);
                }
            }

            return $transfer->fresh()->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function send(StockTransfer $transfer, ?string $sentAt = null): StockTransfer
    {
        if ($transfer->status !== 'draft') {
            throw ValidationException::withMessages([
                'status' => ['Hanya stock transfer draft yang bisa dikirim.'],
            ]);
        }

        return DB::transaction(function () use ($transfer, $sentAt) {
            foreach ($transfer->items as $item) {
                $stock = OutletMaterialStock::query()->firstOrCreate(
                    [
                        'outlet_id' => $transfer->source_outlet_id,
                        'raw_material_id' => $item->raw_material_id,
                    ],
                    [
                        'qty_on_hand' => 0,
                        'qty_reserved' => 0,
                        'last_movement_at' => $transfer->transfer_date,
                    ]
                );

                if ((float) $stock->qty_on_hand < (float) $item->qty_sent) {
                    throw ValidationException::withMessages([
                        'items' => ["Stok bahan {$item->raw_material_id} di outlet sumber tidak mencukupi."],
                    ]);
                }
            }

            $effectiveSentAt = $sentAt ? now()->parse($sentAt) : now();

            $this->stockMovementService->create([
                'outlet_id' => $transfer->source_outlet_id,
                'movement_type' => 'transfer_out',
                'reference_type' => StockTransfer::class,
                'reference_id' => $transfer->id,
                'movement_date' => $effectiveSentAt,
                'notes' => $transfer->notes,
                'created_by' => $transfer->created_by,
                'items' => $transfer->items->map(function ($item) {
                    return [
                        'raw_material_id' => $item->raw_material_id,
                        'qty_in' => 0,
                        'qty_out' => $item->qty_sent,
                        'unit_cost' => 0,
                        'notes' => $item->notes,
                    ];
                })->all(),
            ]);

            $transfer->update([
                'status' => 'sent',
                'sent_at' => $effectiveSentAt,
            ]);

            return $transfer->fresh()->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function receive(StockTransfer $transfer, array $payload, int $userId): StockTransfer
    {
        if ($transfer->status !== 'sent') {
            throw ValidationException::withMessages([
                'status' => ['Hanya stock transfer sent yang bisa diterima.'],
            ]);
        }

        return DB::transaction(function () use ($transfer, $payload, $userId) {
            $receivedMap = collect($payload['items'] ?? [])
                ->keyBy(fn (array $item) => (int) $item['raw_material_id']);

            foreach ($transfer->items as $item) {
                $qtyReceived = (float) ($receivedMap[$item->raw_material_id]['qty_received'] ?? $item->qty_sent);

                if ($qtyReceived <= 0) {
                    throw ValidationException::withMessages([
                        'items' => ["qty_received untuk raw material {$item->raw_material_id} harus lebih dari 0."],
                    ]);
                }

                if ($qtyReceived > (float) $item->qty_sent) {
                    throw ValidationException::withMessages([
                        'items' => ["qty_received untuk raw material {$item->raw_material_id} tidak boleh melebihi qty_sent."],
                    ]);
                }

                $item->update([
                    'qty_received' => $qtyReceived,
                ]);
            }

            $effectiveReceivedAt = !empty($payload['received_at']) ? now()->parse($payload['received_at']) : now();

            $this->stockMovementService->create([
                'outlet_id' => $transfer->target_outlet_id,
                'movement_type' => 'transfer_in',
                'reference_type' => StockTransfer::class,
                'reference_id' => $transfer->id,
                'movement_date' => $effectiveReceivedAt,
                'notes' => $transfer->notes,
                'created_by' => $userId,
                'items' => $transfer->items->map(function ($item) {
                    return [
                        'raw_material_id' => $item->raw_material_id,
                        'qty_in' => $item->qty_received ?? $item->qty_sent,
                        'qty_out' => 0,
                        'unit_cost' => 0,
                        'notes' => $item->notes,
                    ];
                })->all(),
            ]);

            $transfer->update([
                'status' => 'received',
                'received_by' => $userId,
                'received_at' => $effectiveReceivedAt,
            ]);

            return $transfer->fresh()->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit']);
        });
    }

    public function cancel(StockTransfer $transfer): StockTransfer
    {
        if ($transfer->status === 'received') {
            throw ValidationException::withMessages([
                'status' => ['Stock transfer yang sudah received tidak bisa dibatalkan.'],
            ]);
        }

        $transfer->update([
            'status' => 'cancelled',
        ]);

        return $transfer->fresh()->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit']);
    }

    private function generateTransferNumber(int $outletId): string
    {
        $count = StockTransfer::query()
            ->where('source_outlet_id', $outletId)
            ->whereDate('created_at', now()->toDateString())
            ->count() + 1;

        return 'TRF-' . $outletId . '-' . now()->format('Ymd') . '-' . str_pad((string) $count, 4, '0', STR_PAD_LEFT);
    }
}
