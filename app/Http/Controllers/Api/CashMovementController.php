<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CashMovement\StoreCashMovementRequest;
use App\Http\Resources\CashMovementResource;
use App\Models\CashMovement;
use App\Services\Cashier\CashMovementService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CashMovementController extends Controller
{
    public function __construct(
        private readonly CashMovementService $cashMovementService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('cash_movements.view'), 403);

        $rows = CashMovement::query()
            ->with([
                'cashierShift.outlet',
                'cashierShift.user',
                'creator',
            ])
            ->when($request->filled('cashier_shift_id'), function ($query) use ($request) {
                $query->where('cashier_shift_id', (int) $request->input('cashier_shift_id'));
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->whereHas('cashierShift', function ($shiftQuery) use ($request) {
                    $shiftQuery->where('outlet_id', (int) $request->input('outlet_id'));
                });
            })
            ->when($request->filled('movement_type'), function ($query) use ($request) {
                $query->where('movement_type', $request->string('movement_type')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar cash movement berhasil diambil.',
            'data' => CashMovementResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreCashMovementRequest $request): JsonResponse
    {
        $row = $this->cashMovementService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Cash movement berhasil dibuat.',
            'data' => new CashMovementResource($row),
        ], 201);
    }

    public function show(Request $request, CashMovement $cashMovement): JsonResponse
    {
        abort_unless($request->user()->can('cash_movements.view'), 403);

        return response()->json([
            'message' => 'Detail cash movement berhasil diambil.',
            'data' => new CashMovementResource($cashMovement->load([
                'cashierShift.outlet',
                'cashierShift.user',
                'creator',
            ])),
        ]);
    }
}
