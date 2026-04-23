<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StockMovementResource;
use App\Models\StockMovement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StockMovementController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('stock_movements.view'), 403);

        $rows = StockMovement::query()
            ->with(['outlet', 'creator', 'items.rawMaterial'])
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('movement_type'), function ($query) use ($request) {
                $query->where('movement_type', $request->string('movement_type')->toString());
            })
            ->when($request->filled('reference_type'), function ($query) use ($request) {
                $query->where('reference_type', $request->string('reference_type')->toString());
            })
            ->when($request->filled('reference_id'), function ($query) use ($request) {
                $query->where('reference_id', (int) $request->input('reference_id'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar stock movement berhasil diambil.',
            'data' => StockMovementResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function show(Request $request, StockMovement $stockMovement): JsonResponse
    {
        abort_unless($request->user()->can('stock_movements.view'), 403);

        return response()->json([
            'message' => 'Detail stock movement berhasil diambil.',
            'data' => new StockMovementResource($stockMovement->load(['outlet', 'creator', 'items.rawMaterial'])),
        ]);
    }
}
