<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Inventory\UnitConversion\StoreUnitConversionRequest;
use App\Http\Requests\Api\Inventory\UnitConversion\UpdateUnitConversionRequest;
use App\Http\Resources\UnitConversionResource;
use App\Models\UnitConversion;
use App\Services\Inventory\UnitConversionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UnitConversionController extends Controller
{
    public function __construct(
        private readonly UnitConversionService $unitConversionService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('unit_conversions.view'), 403);

        $rows = UnitConversion::query()
            ->with(['fromUnit', 'toUnit'])
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar konversi satuan berhasil diambil.',
            'data' => UnitConversionResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreUnitConversionRequest $request): JsonResponse
    {
        $row = $this->unitConversionService->create($request->validated());

        return response()->json([
            'message' => 'Konversi satuan berhasil dibuat.',
            'data' => new UnitConversionResource($row->load(['fromUnit', 'toUnit'])),
        ], 201);
    }

    public function show(Request $request, UnitConversion $unitConversion): JsonResponse
    {
        abort_unless($request->user()->can('unit_conversions.view'), 403);

        return response()->json([
            'message' => 'Detail konversi satuan berhasil diambil.',
            'data' => new UnitConversionResource($unitConversion->load(['fromUnit', 'toUnit'])),
        ]);
    }

    public function update(UpdateUnitConversionRequest $request, UnitConversion $unitConversion): JsonResponse
    {
        $unitConversion = $this->unitConversionService->update($unitConversion, $request->validated());

        return response()->json([
            'message' => 'Konversi satuan berhasil diupdate.',
            'data' => new UnitConversionResource($unitConversion->load(['fromUnit', 'toUnit'])),
        ]);
    }

    public function destroy(Request $request, UnitConversion $unitConversion): JsonResponse
    {
        abort_unless($request->user()->can('unit_conversions.delete'), 403);

        $unitConversion->delete();

        return response()->json([
            'message' => 'Konversi satuan berhasil dihapus.',
        ]);
    }
}
