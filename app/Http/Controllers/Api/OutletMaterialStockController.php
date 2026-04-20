<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\OutletMaterialStock\UpsertOutletMaterialStockRequest;
use App\Http\Resources\OutletMaterialStockResource;
use App\Models\OutletMaterialStock;
use App\Services\Inventory\OutletMaterialStockService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OutletMaterialStockController extends Controller
{
    public function __construct(
        private readonly OutletMaterialStockService $outletMaterialStockService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('outlet_material_stocks.view'), 403);

        $rows = OutletMaterialStock::query()
            ->with(['outlet', 'rawMaterial'])
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('raw_material_id'), function ($query) use ($request) {
                $query->where('raw_material_id', (int) $request->input('raw_material_id'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar stok bahan per outlet berhasil diambil.',
            'data' => OutletMaterialStockResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function upsert(UpsertOutletMaterialStockRequest $request): JsonResponse
    {
        $row = $this->outletMaterialStockService->upsert($request->validated());

        return response()->json([
            'message' => 'Stok bahan outlet berhasil disimpan.',
            'data' => new OutletMaterialStockResource($row),
        ]);
    }

    public function show(Request $request, OutletMaterialStock $outletMaterialStock): JsonResponse
    {
        abort_unless($request->user()->can('outlet_material_stocks.view'), 403);

        return response()->json([
            'message' => 'Detail stok bahan outlet berhasil diambil.',
            'data' => new OutletMaterialStockResource($outletMaterialStock->load(['outlet', 'rawMaterial'])),
        ]);
    }
}
