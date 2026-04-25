<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Delivery\AssignCourierRequest;
use App\Http\Requests\Api\Delivery\StoreDeliveryRequest;
use App\Http\Requests\Api\Delivery\UpdateDeliveryRequest;
use App\Http\Requests\Api\Delivery\UpdateDeliveryStatusRequest;
use App\Http\Resources\DeliveryResource;
use App\Models\Delivery;
use App\Services\Delivery\DeliveryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function __construct(
        private readonly DeliveryService $deliveryService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('deliveries.view'), 403);

        $rows = Delivery::query()
            ->with([
                'order.outlet',
                'order.customer',
                'customerAddress.customer',
                'courier',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->whereHas('order', function ($orderQuery) use ($search) {
                        $orderQuery->where('order_number', 'like', "%{$search}%")
                            ->orWhere('queue_number', 'like', "%{$search}%");
                    })
                        ->orWhereHas('courier', function ($courierQuery) use ($search) {
                            $courierQuery->where('name', 'like', "%{$search}%")
                                ->orWhere('phone', 'like', "%{$search}%");
                        });
                });
            })
            ->when($request->filled('order_id'), function ($query) use ($request) {
                $query->where('order_id', (int) $request->input('order_id'));
            })
            ->when($request->filled('courier_id'), function ($query) use ($request) {
                $query->where('courier_id', (int) $request->input('courier_id'));
            })
            ->when($request->filled('delivery_status'), function ($query) use ($request) {
                $query->where('delivery_status', $request->string('delivery_status')->toString());
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->whereHas('order', function ($orderQuery) use ($request) {
                    $orderQuery->where('outlet_id', (int) $request->input('outlet_id'));
                });
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar delivery berhasil diambil.',
            'data' => DeliveryResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreDeliveryRequest $request): JsonResponse
    {
        $row = $this->deliveryService->create($request->validated());

        return response()->json([
            'message' => 'Delivery berhasil dibuat.',
            'data' => new DeliveryResource($row),
        ], 201);
    }

    public function show(Request $request, Delivery $delivery): JsonResponse
    {
        abort_unless($request->user()->can('deliveries.view'), 403);

        return response()->json([
            'message' => 'Detail delivery berhasil diambil.',
            'data' => new DeliveryResource($delivery->load([
                'order.outlet',
                'order.customer',
                'customerAddress.customer',
                'courier',
            ])),
        ]);
    }

    public function update(UpdateDeliveryRequest $request, Delivery $delivery): JsonResponse
    {
        $row = $this->deliveryService->update($delivery, $request->validated());

        return response()->json([
            'message' => 'Delivery berhasil diupdate.',
            'data' => new DeliveryResource($row),
        ]);
    }

    public function assignCourier(AssignCourierRequest $request, Delivery $delivery): JsonResponse
    {
        $row = $this->deliveryService->assignCourier(
            delivery: $delivery,
            courierId: (int) $request->validated('courier_id'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Courier berhasil di-assign ke delivery.',
            'data' => new DeliveryResource($row),
        ]);
    }

    public function updateStatus(UpdateDeliveryStatusRequest $request, Delivery $delivery): JsonResponse
    {
        $row = $this->deliveryService->changeStatus(
            delivery: $delivery,
            status: $request->string('delivery_status')->toString(),
            deliveredAt: $request->input('delivered_at'),
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Status delivery berhasil diupdate.',
            'data' => new DeliveryResource($row),
        ]);
    }

    public function destroy(Request $request, Delivery $delivery): JsonResponse
    {
        abort_unless($request->user()->can('deliveries.delete'), 403);

        if (!in_array($delivery->delivery_status, ['pending', 'cancelled', 'failed'], true)) {
            return response()->json([
                'message' => 'Hanya delivery pending, failed, atau cancelled yang boleh dihapus.',
            ], 422);
        }

        $delivery->delete();

        return response()->json([
            'message' => 'Delivery berhasil dihapus.',
        ]);
    }
}
