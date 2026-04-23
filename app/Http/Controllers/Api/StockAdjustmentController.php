<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\StockAdjustment\StoreStockAdjustmentRequest;
use App\Http\Requests\Api\Inventory\StockAdjustment\UpdateStockAdjustmentRequest;
use App\Http\Resources\StockAdjustmentResource;
use App\Models\StockAdjustment;
use App\Services\Inventory\StockAdjustmentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StockAdjustmentController extends Controller
{
    public function __construct(
        private readonly StockAdjustmentService $stockAdjustmentService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('stock_adjustments.view'), 403);

        $rows = StockAdjustment::query()
            ->with(['outlet', 'creator', 'approver', 'items.rawMaterial', 'items.unit'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('adjustment_number', 'like', "%{$search}%")
                        ->orWhere('reason', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('reason'), function ($query) use ($request) {
                $query->where('reason', $request->string('reason')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar stock adjustment berhasil diambil.',
            'data' => StockAdjustmentResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreStockAdjustmentRequest $request): JsonResponse
    {
        $row = $this->stockAdjustmentService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Stock adjustment berhasil dibuat.',
            'data' => new StockAdjustmentResource($row),
        ], 201);
    }

    public function show(Request $request, StockAdjustment $stockAdjustment): JsonResponse
    {
        abort_unless($request->user()->can('stock_adjustments.view'), 403);

        return response()->json([
            'message' => 'Detail stock adjustment berhasil diambil.',
            'data' => new StockAdjustmentResource($stockAdjustment->load(['outlet', 'creator', 'approver', 'items.rawMaterial', 'items.unit'])),
        ]);
    }

    public function update(UpdateStockAdjustmentRequest $request, StockAdjustment $stockAdjustment): JsonResponse
    {
        $row = $this->stockAdjustmentService->update($stockAdjustment, $request->validated());

        return response()->json([
            'message' => 'Stock adjustment berhasil diupdate.',
            'data' => new StockAdjustmentResource($row),
        ]);
    }

    public function destroy(Request $request, StockAdjustment $stockAdjustment): JsonResponse
    {
        abort_unless($request->user()->can('stock_adjustments.delete'), 403);

        $stockAdjustment->delete();

        return response()->json([
            'message' => 'Stock adjustment berhasil dihapus.',
        ]);
    }
}
