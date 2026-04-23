<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Payment\CancelPaymentRequest;
use App\Http\Requests\Api\Payment\StorePaymentRequest;
use App\Http\Resources\PaymentResource;
use App\Models\Payment;
use App\Services\Sales\PaymentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct(
        private readonly PaymentService $paymentService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('payments.view'), 403);

        $rows = Payment::query()
            ->with([
                'order.outlet',
                'order.cashierShift',
                'paymentMethod',
                'receiver',
            ])
            ->when($request->filled('order_id'), function ($query) use ($request) {
                $query->where('order_id', (int) $request->input('order_id'));
            })
            ->when($request->filled('payment_method_id'), function ($query) use ($request) {
                $query->where('payment_method_id', (int) $request->input('payment_method_id'));
            })
            ->when($request->filled('cashier_shift_id'), function ($query) use ($request) {
                $query->whereHas('order', function ($orderQuery) use ($request) {
                    $orderQuery->where('cashier_shift_id', (int) $request->input('cashier_shift_id'));
                });
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->whereHas('order', function ($orderQuery) use ($request) {
                    $orderQuery->where('outlet_id', (int) $request->input('outlet_id'));
                });
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar payment berhasil diambil.',
            'data' => PaymentResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StorePaymentRequest $request): JsonResponse
    {
        $row = $this->paymentService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Payment berhasil dibuat.',
            'data' => new PaymentResource($row),
        ], 201);
    }

    public function show(Request $request, Payment $payment): JsonResponse
    {
        abort_unless($request->user()->can('payments.view'), 403);

        return response()->json([
            'message' => 'Detail payment berhasil diambil.',
            'data' => new PaymentResource($payment->load([
                'order.outlet',
                'order.cashierShift',
                'paymentMethod',
                'receiver',
            ])),
        ]);
    }

    public function cancel(CancelPaymentRequest $request, Payment $payment): JsonResponse
    {
        $row = $this->paymentService->cancel(
            payment: $payment,
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Payment berhasil dibatalkan.',
            'data' => new PaymentResource($row),
        ]);
    }
}
