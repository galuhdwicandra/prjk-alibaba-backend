<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\StockOpname\PostStockOpnameRequest;
use App\Http\Requests\Api\Inventory\StockOpname\StoreStockOpnameRequest;
use App\Http\Requests\Api\Inventory\StockOpname\UpdateStockOpnameRequest;
use App\Http\Resources\StockOpnameResource;
use App\Models\StockOpname;
use App\Services\Inventory\StockOpnameService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StockOpnameController extends Controller
{
    public function __construct(
        private readonly StockOpnameService $stockOpnameService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('stock_opnames.view'), 403);

        $rows = StockOpname::query()
            ->with(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where('opname_number', 'like', "%{$search}%");
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar stock opname berhasil diambil.',
            'data' => StockOpnameResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreStockOpnameRequest $request): JsonResponse
    {
        $row = $this->stockOpnameService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Stock opname berhasil dibuat.',
            'data' => new StockOpnameResource($row),
        ], 201);
    }

    public function show(Request $request, StockOpname $stockOpname): JsonResponse
    {
        abort_unless($request->user()->can('stock_opnames.view'), 403);

        return response()->json([
            'message' => 'Detail stock opname berhasil diambil.',
            'data' => new StockOpnameResource($stockOpname->load(['outlet', 'creator', 'poster', 'items.rawMaterial', 'items.unit'])),
        ]);
    }

    public function update(UpdateStockOpnameRequest $request, StockOpname $stockOpname): JsonResponse
    {
        $row = $this->stockOpnameService->update($stockOpname, $request->validated());

        return response()->json([
            'message' => 'Stock opname berhasil diupdate.',
            'data' => new StockOpnameResource($row),
        ]);
    }

    public function post(PostStockOpnameRequest $request, StockOpname $stockOpname): JsonResponse
    {
        $row = $this->stockOpnameService->post(
            opname: $stockOpname->load('items'),
            userId: $request->user()->id,
            postedAt: $request->input('posted_at'),
        );

        return response()->json([
            'message' => 'Stock opname berhasil dipost.',
            'data' => new StockOpnameResource($row),
        ]);
    }

    public function cancel(Request $request, StockOpname $stockOpname): JsonResponse
    {
        abort_unless($request->user()->can('stock_opnames.cancel'), 403);

        $row = $this->stockOpnameService->cancel($stockOpname);

        return response()->json([
            'message' => 'Stock opname berhasil dibatalkan.',
            'data' => new StockOpnameResource($row),
        ]);
    }

    public function destroy(Request $request, StockOpname $stockOpname): JsonResponse
    {
        abort_unless($request->user()->can('stock_opnames.delete'), 403);

        if ($stockOpname->status !== 'draft') {
            return response()->json([
                'message' => 'Hanya stock opname draft yang boleh dihapus.',
            ], 422);
        }

        $stockOpname->delete();

        return response()->json([
            'message' => 'Stock opname berhasil dihapus.',
        ]);
    }
}
