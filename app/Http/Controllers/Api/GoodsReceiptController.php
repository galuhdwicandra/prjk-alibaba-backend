<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Purchasing\GoodsReceipt\PostGoodsReceiptRequest;
use App\Http\Requests\Api\Purchasing\GoodsReceipt\StoreGoodsReceiptRequest;
use App\Http\Requests\Api\Purchasing\GoodsReceipt\UpdateGoodsReceiptRequest;
use App\Http\Resources\GoodsReceiptResource;
use App\Models\GoodsReceipt;
use App\Services\Purchasing\GoodsReceiptService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GoodsReceiptController extends Controller
{
    public function __construct(
        private readonly GoodsReceiptService $goodsReceiptService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.view'), 403);

        $rows = GoodsReceipt::query()
            ->with([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('receipt_number', 'like', "%{$search}%")
                        ->orWhereHas('purchaseOrder', fn ($pq) => $pq->where('po_number', 'like', "%{$search}%"));
                });
            })
            ->when($request->filled('purchase_order_id'), function ($query) use ($request) {
                $query->where('purchase_order_id', (int) $request->input('purchase_order_id'));
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar goods receipt berhasil diambil.',
            'data' => GoodsReceiptResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreGoodsReceiptRequest $request): JsonResponse
    {
        $row = $this->goodsReceiptService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Goods receipt berhasil dibuat.',
            'data' => new GoodsReceiptResource($row),
        ], 201);
    }

    public function show(Request $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.view'), 403);

        return response()->json([
            'message' => 'Detail goods receipt berhasil diambil.',
            'data' => new GoodsReceiptResource($goodsReceipt->load([
                'purchaseOrder.supplier',
                'outlet',
                'receiver',
                'items.rawMaterial',
                'items.unit',
            ])),
        ]);
    }

    public function update(UpdateGoodsReceiptRequest $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        $row = $this->goodsReceiptService->update($goodsReceipt, $request->validated());

        return response()->json([
            'message' => 'Goods receipt berhasil diupdate.',
            'data' => new GoodsReceiptResource($row),
        ]);
    }

    public function post(PostGoodsReceiptRequest $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        $row = $this->goodsReceiptService->post($goodsReceipt, $request->user()->id);

        return response()->json([
            'message' => 'Goods receipt berhasil dipost.',
            'data' => new GoodsReceiptResource($row),
        ]);
    }

    public function cancel(Request $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.cancel'), 403);

        $row = $this->goodsReceiptService->cancel($goodsReceipt);

        return response()->json([
            'message' => 'Goods receipt berhasil dibatalkan.',
            'data' => new GoodsReceiptResource($row),
        ]);
    }

    public function destroy(Request $request, GoodsReceipt $goodsReceipt): JsonResponse
    {
        abort_unless($request->user()->can('goods_receipts.delete'), 403);

        if ($goodsReceipt->status !== 'draft') {
            return response()->json([
                'message' => 'Hanya goods receipt draft yang boleh dihapus.',
            ], 422);
        }

        $goodsReceipt->delete();

        return response()->json([
            'message' => 'Goods receipt berhasil dihapus.',
        ]);
    }
}
