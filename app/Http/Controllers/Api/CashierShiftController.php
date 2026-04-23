<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CashierShift\CloseCashierShiftRequest;
use App\Http\Requests\Api\CashierShift\StoreCashierShiftRequest;
use App\Http\Requests\Api\CashierShift\UpdateCashierShiftRequest;
use App\Http\Resources\CashierShiftResource;
use App\Models\CashierShift;
use App\Services\Cashier\CashierShiftService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CashierShiftController extends Controller
{
    public function __construct(
        private readonly CashierShiftService $cashierShiftService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('cashier_shifts.view'), 403);

        $rows = CashierShift::query()
            ->with([
                'outlet',
                'user',
                'cashMovements.creator',
                'orders.payments.paymentMethod',
            ])
            ->withCount('orders')
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('user_id'), function ($query) use ($request) {
                $query->where('user_id', (int) $request->input('user_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->when($request->filled('opened_from'), function ($query) use ($request) {
                $query->where('opened_at', '>=', $request->input('opened_from'));
            })
            ->when($request->filled('opened_until'), function ($query) use ($request) {
                $query->where('opened_at', '<=', $request->input('opened_until'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar cashier shift berhasil diambil.',
            'data' => CashierShiftResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreCashierShiftRequest $request): JsonResponse
    {
        $row = $this->cashierShiftService->open(
            payload: $request->validated(),
            userId: $request->user()->id,
        );

        return response()->json([
            'message' => 'Shift kasir berhasil dibuka.',
            'data' => new CashierShiftResource($row),
        ], 201);
    }

    public function show(Request $request, CashierShift $cashierShift): JsonResponse
    {
        abort_unless($request->user()->can('cashier_shifts.view'), 403);

        return response()->json([
            'message' => 'Detail cashier shift berhasil diambil.',
            'data' => new CashierShiftResource($cashierShift->load([
                'outlet',
                'user',
                'cashMovements.creator',
                'orders.payments.paymentMethod',
            ])->loadCount('orders')),
        ]);
    }

    public function update(UpdateCashierShiftRequest $request, CashierShift $cashierShift): JsonResponse
    {
        $row = $this->cashierShiftService->update($cashierShift, $request->validated());

        return response()->json([
            'message' => 'Shift kasir berhasil diupdate.',
            'data' => new CashierShiftResource($row),
        ]);
    }

    public function close(CloseCashierShiftRequest $request, CashierShift $cashierShift): JsonResponse
    {
        $row = $this->cashierShiftService->close(
            shift: $cashierShift,
            payload: $request->validated(),
            userId: $request->user()->id,
        );

        return response()->json([
            'message' => 'Shift kasir berhasil ditutup.',
            'data' => new CashierShiftResource($row),
        ]);
    }
}
