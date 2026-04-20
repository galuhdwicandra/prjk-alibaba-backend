<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Voucher\StoreVoucherRequest;
use App\Http\Requests\Api\Voucher\UpdateVoucherRequest;
use App\Http\Resources\VoucherResource;
use App\Models\Voucher;
use App\Services\Voucher\VoucherService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function __construct(
        private readonly VoucherService $voucherService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('vouchers.view'), 403);

        $vouchers = Voucher::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->when($request->filled('discount_type'), function ($query) use ($request) {
                $query->where('discount_type', $request->string('discount_type')->toString());
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar voucher berhasil diambil.',
            'data' => VoucherResource::collection($vouchers),
            'meta' => [
                'current_page' => $vouchers->currentPage(),
                'last_page' => $vouchers->lastPage(),
                'per_page' => $vouchers->perPage(),
                'total' => $vouchers->total(),
            ],
        ]);
    }

    public function store(StoreVoucherRequest $request): JsonResponse
    {
        $voucher = $this->voucherService->create($request->validated());

        return response()->json([
            'message' => 'Voucher berhasil dibuat.',
            'data' => new VoucherResource($voucher),
        ], 201);
    }

    public function show(Request $request, Voucher $voucher): JsonResponse
    {
        abort_unless($request->user()->can('vouchers.view'), 403);

        return response()->json([
            'message' => 'Detail voucher berhasil diambil.',
            'data' => new VoucherResource($voucher),
        ]);
    }

    public function update(UpdateVoucherRequest $request, Voucher $voucher): JsonResponse
    {
        $voucher = $this->voucherService->update($voucher, $request->validated());

        return response()->json([
            'message' => 'Voucher berhasil diupdate.',
            'data' => new VoucherResource($voucher),
        ]);
    }

    public function destroy(Request $request, Voucher $voucher): JsonResponse
    {
        abort_unless($request->user()->can('vouchers.delete'), 403);

        $voucher->delete();

        return response()->json([
            'message' => 'Voucher berhasil dihapus.',
        ]);
    }
}