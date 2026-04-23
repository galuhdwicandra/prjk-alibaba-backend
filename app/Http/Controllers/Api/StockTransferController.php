<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\StockTransfer\ReceiveStockTransferRequest;
use App\Http\Requests\Api\Inventory\StockTransfer\SendStockTransferRequest;
use App\Http\Requests\Api\Inventory\StockTransfer\StoreStockTransferRequest;
use App\Http\Requests\Api\Inventory\StockTransfer\UpdateStockTransferRequest;
use App\Http\Resources\StockTransferResource;
use App\Models\StockTransfer;
use App\Services\Inventory\StockTransferService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StockTransferController extends Controller
{
    public function __construct(
        private readonly StockTransferService $stockTransferService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('stock_transfers.view'), 403);

        $rows = StockTransfer::query()
            ->with(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where('transfer_number', 'like', "%{$search}%");
            })
            ->when($request->filled('source_outlet_id'), function ($query) use ($request) {
                $query->where('source_outlet_id', (int) $request->input('source_outlet_id'));
            })
            ->when($request->filled('target_outlet_id'), function ($query) use ($request) {
                $query->where('target_outlet_id', (int) $request->input('target_outlet_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar stock transfer berhasil diambil.',
            'data' => StockTransferResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreStockTransferRequest $request): JsonResponse
    {
        $row = $this->stockTransferService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Stock transfer berhasil dibuat.',
            'data' => new StockTransferResource($row),
        ], 201);
    }

    public function show(Request $request, StockTransfer $stockTransfer): JsonResponse
    {
        abort_unless($request->user()->can('stock_transfers.view'), 403);

        return response()->json([
            'message' => 'Detail stock transfer berhasil diambil.',
            'data' => new StockTransferResource($stockTransfer->load(['sourceOutlet', 'targetOutlet', 'creator', 'receiver', 'items.rawMaterial', 'items.unit'])),
        ]);
    }

    public function update(UpdateStockTransferRequest $request, StockTransfer $stockTransfer): JsonResponse
    {
        $row = $this->stockTransferService->update($stockTransfer, $request->validated());

        return response()->json([
            'message' => 'Stock transfer berhasil diupdate.',
            'data' => new StockTransferResource($row),
        ]);
    }

    public function send(SendStockTransferRequest $request, StockTransfer $stockTransfer): JsonResponse
    {
        $row = $this->stockTransferService->send(
            transfer: $stockTransfer->load('items'),
            sentAt: $request->input('sent_at'),
        );

        return response()->json([
            'message' => 'Stock transfer berhasil dikirim.',
            'data' => new StockTransferResource($row),
        ]);
    }

    public function receive(ReceiveStockTransferRequest $request, StockTransfer $stockTransfer): JsonResponse
    {
        $row = $this->stockTransferService->receive(
            transfer: $stockTransfer->load('items'),
            payload: $request->validated(),
            userId: $request->user()->id,
        );

        return response()->json([
            'message' => 'Stock transfer berhasil diterima.',
            'data' => new StockTransferResource($row),
        ]);
    }

    public function cancel(Request $request, StockTransfer $stockTransfer): JsonResponse
    {
        abort_unless($request->user()->can('stock_transfers.cancel'), 403);

        $row = $this->stockTransferService->cancel($stockTransfer);

        return response()->json([
            'message' => 'Stock transfer berhasil dibatalkan.',
            'data' => new StockTransferResource($row),
        ]);
    }

    public function destroy(Request $request, StockTransfer $stockTransfer): JsonResponse
    {
        abort_unless($request->user()->can('stock_transfers.delete'), 403);

        if ($stockTransfer->status !== 'draft') {
            return response()->json([
                'message' => 'Hanya stock transfer draft yang boleh dihapus.',
            ], 422);
        }

        $stockTransfer->delete();

        return response()->json([
            'message' => 'Stock transfer berhasil dihapus.',
        ]);
    }
}
