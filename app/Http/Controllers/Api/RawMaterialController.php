<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\RawMaterial\StoreRawMaterialRequest;
use App\Http\Requests\Api\Inventory\RawMaterial\UpdateRawMaterialRequest;
use App\Http\Resources\RawMaterialResource;
use App\Models\RawMaterial;
use App\Services\Inventory\RawMaterialService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RawMaterialController extends Controller
{
    public function __construct(
        private readonly RawMaterialService $rawMaterialService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('raw_materials.view'), 403);

        $rows = RawMaterial::query()
            ->with(['category', 'unit', 'outletStocks.outlet'])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('code', 'like', "%{$search}%")
                        ->orWhere('sku', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('raw_material_category_id'), function ($query) use ($request) {
                $query->where('raw_material_category_id', (int) $request->input('raw_material_category_id'));
            })
            ->when($request->filled('unit_id'), function ($query) use ($request) {
                $query->where('unit_id', (int) $request->input('unit_id'));
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar bahan baku berhasil diambil.',
            'data' => RawMaterialResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreRawMaterialRequest $request): JsonResponse
    {
        $row = $this->rawMaterialService->create($request->validated());

        return response()->json([
            'message' => 'Bahan baku berhasil dibuat.',
            'data' => new RawMaterialResource($row),
        ], 201);
    }

    public function show(Request $request, RawMaterial $rawMaterial): JsonResponse
    {
        abort_unless($request->user()->can('raw_materials.view'), 403);

        return response()->json([
            'message' => 'Detail bahan baku berhasil diambil.',
            'data' => new RawMaterialResource($rawMaterial->load(['category', 'unit', 'outletStocks.outlet'])),
        ]);
    }

    public function update(UpdateRawMaterialRequest $request, RawMaterial $rawMaterial): JsonResponse
    {
        $row = $this->rawMaterialService->update($rawMaterial, $request->validated());

        return response()->json([
            'message' => 'Bahan baku berhasil diupdate.',
            'data' => new RawMaterialResource($row),
        ]);
    }

    public function destroy(Request $request, RawMaterial $rawMaterial): JsonResponse
    {
        abort_unless($request->user()->can('raw_materials.delete'), 403);

        if ($rawMaterial->bomItems()->exists()) {
            return response()->json([
                'message' => 'Bahan baku tidak bisa dihapus karena sudah dipakai di BOM.',
            ], 422);
        }

        $rawMaterial->delete();

        return response()->json([
            'message' => 'Bahan baku berhasil dihapus.',
        ]);
    }
}
