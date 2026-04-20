<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\Unit\StoreUnitRequest;
use App\Http\Requests\Api\Inventory\Unit\UpdateUnitRequest;
use App\Http\Resources\UnitResource;
use App\Models\Unit;
use App\Services\Inventory\UnitService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function __construct(
        private readonly UnitService $unitService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('units.view'), 403);

        $units = Unit::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('code', 'like', "%{$search}%");
                });
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar satuan berhasil diambil.',
            'data' => UnitResource::collection($units),
            'meta' => [
                'current_page' => $units->currentPage(),
                'last_page' => $units->lastPage(),
                'per_page' => $units->perPage(),
                'total' => $units->total(),
            ],
        ]);
    }

    public function store(StoreUnitRequest $request): JsonResponse
    {
        $unit = $this->unitService->create($request->validated());

        return response()->json([
            'message' => 'Satuan berhasil dibuat.',
            'data' => new UnitResource($unit),
        ], 201);
    }

    public function show(Request $request, Unit $unit): JsonResponse
    {
        abort_unless($request->user()->can('units.view'), 403);

        return response()->json([
            'message' => 'Detail satuan berhasil diambil.',
            'data' => new UnitResource($unit),
        ]);
    }

    public function update(UpdateUnitRequest $request, Unit $unit): JsonResponse
    {
        $unit = $this->unitService->update($unit, $request->validated());

        return response()->json([
            'message' => 'Satuan berhasil diupdate.',
            'data' => new UnitResource($unit),
        ]);
    }

    public function destroy(Request $request, Unit $unit): JsonResponse
    {
        abort_unless($request->user()->can('units.delete'), 403);

        if ($unit->rawMaterials()->exists() || $unit->bomItems()->exists()) {
            return response()->json([
                'message' => 'Satuan tidak bisa dihapus karena masih dipakai.',
            ], 422);
        }

        $unit->delete();

        return response()->json([
            'message' => 'Satuan berhasil dihapus.',
        ]);
    }
}
