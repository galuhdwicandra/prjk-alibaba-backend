<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Purchasing\PurchaseOrder\StorePurchaseOrderRequest;
use App\Http\Requests\Api\Purchasing\PurchaseOrder\UpdatePurchaseOrderRequest;
use App\Http\Resources\PurchaseOrderResource;
use App\Models\PurchaseOrder;
use App\Services\Purchasing\PurchaseOrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function __construct(
        private readonly PurchaseOrderService $purchaseOrderService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.view'), 403);

        $rows = PurchaseOrder::query()
            ->with([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ])
            ->withCount('goodsReceipts')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('po_number', 'like', "%{$search}%")
                        ->orWhereHas('supplier', fn ($sq) => $sq->where('name', 'like', "%{$search}%"))
                        ->orWhereHas('outlet', fn ($oq) => $oq->where('name', 'like', "%{$search}%"));
                });
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('supplier_id'), function ($query) use ($request) {
                $query->where('supplier_id', (int) $request->input('supplier_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar purchase order berhasil diambil.',
            'data' => PurchaseOrderResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StorePurchaseOrderRequest $request): JsonResponse
    {
        $row = $this->purchaseOrderService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Purchase order berhasil dibuat.',
            'data' => new PurchaseOrderResource($row),
        ], 201);
    }

    public function show(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.view'), 403);

        return response()->json([
            'message' => 'Detail purchase order berhasil diambil.',
            'data' => new PurchaseOrderResource($purchaseOrder->load([
                'outlet',
                'supplier',
                'approver',
                'creator',
                'items.rawMaterial',
                'items.unit',
            ])->loadCount('goodsReceipts')),
        ]);
    }

    public function update(UpdatePurchaseOrderRequest $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        $row = $this->purchaseOrderService->update($purchaseOrder, $request->validated());

        return response()->json([
            'message' => 'Purchase order berhasil diupdate.',
            'data' => new PurchaseOrderResource($row),
        ]);
    }

    public function approve(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.approve'), 403);

        $row = $this->purchaseOrderService->approve($purchaseOrder, $request->user()->id);

        return response()->json([
            'message' => 'Purchase order berhasil di-approve.',
            'data' => new PurchaseOrderResource($row),
        ]);
    }

    public function cancel(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.cancel'), 403);

        $row = $this->purchaseOrderService->cancel($purchaseOrder);

        return response()->json([
            'message' => 'Purchase order berhasil dibatalkan.',
            'data' => new PurchaseOrderResource($row),
        ]);
    }

    public function destroy(Request $request, PurchaseOrder $purchaseOrder): JsonResponse
    {
        abort_unless($request->user()->can('purchase_orders.delete'), 403);

        if ($purchaseOrder->goodsReceipts()->exists()) {
            return response()->json([
                'message' => 'Purchase order tidak bisa dihapus karena sudah memiliki goods receipt.',
            ], 422);
        }

        if ($purchaseOrder->status !== 'draft') {
            return response()->json([
                'message' => 'Hanya purchase order draft yang boleh dihapus.',
            ], 422);
        }

        $purchaseOrder->delete();

        return response()->json([
            'message' => 'Purchase order berhasil dihapus.',
        ]);
    }
}
