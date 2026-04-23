<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Order\StoreOrderRequest;
use App\Http\Requests\Api\Order\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Services\Sales\OrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(
        private readonly OrderService $orderService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('orders.view'), 403);

        $orders = Order::query()
            ->with([
                'outlet',
                'cashierShift',
                'customer',
                'creator',
                'canceller',
                'items.product',
                'items.variants',
                'items.modifiers',
                'payments.paymentMethod',
                'payments.receiver',
                'statusHistories.changer',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('order_number', 'like', "%{$search}%")
                        ->orWhere('queue_number', 'like', "%{$search}%")
                        ->orWhereHas('customer', function ($customerQuery) use ($search) {
                            $customerQuery->where('name', 'like', "%{$search}%")
                                ->orWhere('phone', 'like', "%{$search}%");
                        });
                });
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('cashier_shift_id'), function ($query) use ($request) {
                $query->where('cashier_shift_id', (int) $request->input('cashier_shift_id'));
            })
            ->when($request->filled('customer_id'), function ($query) use ($request) {
                $query->where('customer_id', (int) $request->input('customer_id'));
            })
            ->when($request->filled('order_channel'), function ($query) use ($request) {
                $query->where('order_channel', $request->string('order_channel')->toString());
            })
            ->when($request->filled('order_status'), function ($query) use ($request) {
                $query->where('order_status', $request->string('order_status')->toString());
            })
            ->when($request->filled('payment_status'), function ($query) use ($request) {
                $query->where('payment_status', $request->string('payment_status')->toString());
            })
            ->when($request->filled('ordered_from'), function ($query) use ($request) {
                $query->where('ordered_at', '>=', $request->input('ordered_from'));
            })
            ->when($request->filled('ordered_until'), function ($query) use ($request) {
                $query->where('ordered_at', '<=', $request->input('ordered_until'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar order berhasil diambil.',
            'data' => OrderResource::collection($orders),
            'meta' => [
                'current_page' => $orders->currentPage(),
                'last_page' => $orders->lastPage(),
                'per_page' => $orders->perPage(),
                'total' => $orders->total(),
            ],
        ]);
    }

    public function store(StoreOrderRequest $request): JsonResponse
    {
        $order = $this->orderService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Order berhasil dibuat.',
            'data' => new OrderResource($order),
        ], 201);
    }

    public function show(Request $request, Order $order): JsonResponse
    {
        abort_unless($request->user()->can('orders.view'), 403);

        return response()->json([
            'message' => 'Detail order berhasil diambil.',
            'data' => new OrderResource($order->load([
                'outlet',
                'cashierShift',
                'customer',
                'creator',
                'canceller',
                'items.product',
                'items.variants',
                'items.modifiers',
                'payments.paymentMethod',
                'payments.receiver',
                'statusHistories.changer',
            ])),
        ]);
    }

    public function update(UpdateOrderRequest $request, Order $order): JsonResponse
    {
        $order = $this->orderService->update($order, $request->validated());

        return response()->json([
            'message' => 'Order berhasil diupdate.',
            'data' => new OrderResource($order),
        ]);
    }

    public function confirm(Request $request, Order $order): JsonResponse
    {
        abort_unless($request->user()->can('orders.update'), 403);

        $order = $this->orderService->changeStatus(
            order: $order,
            newStatus: 'confirmed',
            userId: $request->user()->id,
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Order berhasil dikonfirmasi.',
            'data' => new OrderResource($order),
        ]);
    }

    public function complete(Request $request, Order $order): JsonResponse
    {
        abort_unless($request->user()->can('orders.update'), 403);

        $order = $this->orderService->changeStatus(
            order: $order,
            newStatus: 'completed',
            userId: $request->user()->id,
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Order berhasil diselesaikan.',
            'data' => new OrderResource($order),
        ]);
    }

    public function cancel(Request $request, Order $order): JsonResponse
    {
        abort_unless($request->user()->can('orders.cancel'), 403);

        $order = $this->orderService->cancel(
            order: $order,
            userId: $request->user()->id,
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Order berhasil dibatalkan.',
            'data' => new OrderResource($order),
        ]);
    }

    public function destroy(Request $request, Order $order): JsonResponse
    {
        abort_unless($request->user()->can('orders.delete'), 403);

        if ($order->order_status !== 'draft') {
            return response()->json([
                'message' => 'Hanya order draft yang boleh dihapus.',
            ], 422);
        }

        $order->delete();

        return response()->json([
            'message' => 'Order berhasil dihapus.',
        ]);
    }
}
