<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\RawMaterialCategory\StoreRawMaterialCategoryRequest;
use App\Http\Requests\Api\Inventory\RawMaterialCategory\UpdateRawMaterialCategoryRequest;
use App\Http\Resources\RawMaterialCategoryResource;
use App\Models\RawMaterialCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RawMaterialCategoryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('raw_material_categories.view'), 403);

        $rows = RawMaterialCategory::query()
            ->withCount('rawMaterials')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();
                $query->where('name', 'like', "%{$search}%");
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar kategori bahan baku berhasil diambil.',
            'data' => RawMaterialCategoryResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreRawMaterialCategoryRequest $request): JsonResponse
    {
        $row = RawMaterialCategory::create($request->validated());

        return response()->json([
            'message' => 'Kategori bahan baku berhasil dibuat.',
            'data' => new RawMaterialCategoryResource($row),
        ], 201);
    }

    public function show(Request $request, RawMaterialCategory $rawMaterialCategory): JsonResponse
    {
        abort_unless($request->user()->can('raw_material_categories.view'), 403);

        return response()->json([
            'message' => 'Detail kategori bahan baku berhasil diambil.',
            'data' => new RawMaterialCategoryResource($rawMaterialCategory->loadCount('rawMaterials')),
        ]);
    }

    public function update(UpdateRawMaterialCategoryRequest $request, RawMaterialCategory $rawMaterialCategory): JsonResponse
    {
        $rawMaterialCategory->update($request->validated());

        return response()->json([
            'message' => 'Kategori bahan baku berhasil diupdate.',
            'data' => new RawMaterialCategoryResource($rawMaterialCategory->fresh()->loadCount('rawMaterials')),
        ]);
    }

    public function destroy(Request $request, RawMaterialCategory $rawMaterialCategory): JsonResponse
    {
        abort_unless($request->user()->can('raw_material_categories.delete'), 403);

        if ($rawMaterialCategory->rawMaterials()->exists()) {
            return response()->json([
                'message' => 'Kategori bahan baku tidak bisa dihapus karena masih dipakai.',
            ], 422);
        }

        $rawMaterialCategory->delete();

        return response()->json([
            'message' => 'Kategori bahan baku berhasil dihapus.',
        ]);
    }
}
