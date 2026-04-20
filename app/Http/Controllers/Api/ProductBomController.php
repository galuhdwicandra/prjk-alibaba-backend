<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\ProductBom\StoreProductBomRequest;
use App\Http\Requests\Api\Inventory\ProductBom\UpdateProductBomRequest;
use App\Http\Resources\ProductBomResource;
use App\Models\ProductBom;
use App\Services\Inventory\ProductBomService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductBomController extends Controller
{
    public function __construct(
        private readonly ProductBomService $productBomService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('product_boms.view'), 403);

        $rows = ProductBom::query()
            ->with(['product', 'items.rawMaterial', 'items.unit'])
            ->when($request->filled('product_id'), function ($query) use ($request) {
                $query->where('product_id', (int) $request->input('product_id'));
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->orderByDesc('version')
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar BOM berhasil diambil.',
            'data' => ProductBomResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreProductBomRequest $request): JsonResponse
    {
        $row = $this->productBomService->create($request->validated());

        return response()->json([
            'message' => 'BOM berhasil dibuat.',
            'data' => new ProductBomResource($row),
        ], 201);
    }

    public function show(Request $request, ProductBom $productBom): JsonResponse
    {
        abort_unless($request->user()->can('product_boms.view'), 403);

        return response()->json([
            'message' => 'Detail BOM berhasil diambil.',
            'data' => new ProductBomResource($productBom->load(['product', 'items.rawMaterial', 'items.unit'])),
        ]);
    }

    public function update(UpdateProductBomRequest $request, ProductBom $productBom): JsonResponse
    {
        $row = $this->productBomService->update($productBom, $request->validated());

        return response()->json([
            'message' => 'BOM berhasil diupdate.',
            'data' => new ProductBomResource($row),
        ]);
    }

    public function destroy(Request $request, ProductBom $productBom): JsonResponse
    {
        abort_unless($request->user()->can('product_boms.delete'), 403);

        $productBom->delete();

        return response()->json([
            'message' => 'BOM berhasil dihapus.',
        ]);
    }
}
