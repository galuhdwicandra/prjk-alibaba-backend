<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Purchasing\Supplier\StoreSupplierRequest;
use App\Http\Requests\Api\Purchasing\Supplier\UpdateSupplierRequest;
use App\Http\Resources\SupplierResource;
use App\Models\Supplier;
use App\Services\Purchasing\SupplierService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct(
        private readonly SupplierService $supplierService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('suppliers.view'), 403);

        $suppliers = Supplier::query()
            ->withCount('purchaseOrders')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%")
                        ->orWhere('contact_person', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar supplier berhasil diambil.',
            'data' => SupplierResource::collection($suppliers),
            'meta' => [
                'current_page' => $suppliers->currentPage(),
                'last_page' => $suppliers->lastPage(),
                'per_page' => $suppliers->perPage(),
                'total' => $suppliers->total(),
            ],
        ]);
    }

    public function store(StoreSupplierRequest $request): JsonResponse
    {
        $supplier = $this->supplierService->create($request->validated());

        return response()->json([
            'message' => 'Supplier berhasil dibuat.',
            'data' => new SupplierResource($supplier),
        ], 201);
    }

    public function show(Request $request, Supplier $supplier): JsonResponse
    {
        abort_unless($request->user()->can('suppliers.view'), 403);

        return response()->json([
            'message' => 'Detail supplier berhasil diambil.',
            'data' => new SupplierResource($supplier->loadCount('purchaseOrders')),
        ]);
    }

    public function update(UpdateSupplierRequest $request, Supplier $supplier): JsonResponse
    {
        $supplier = $this->supplierService->update($supplier, $request->validated());

        return response()->json([
            'message' => 'Supplier berhasil diupdate.',
            'data' => new SupplierResource($supplier),
        ]);
    }

    public function destroy(Request $request, Supplier $supplier): JsonResponse
    {
        abort_unless($request->user()->can('suppliers.delete'), 403);

        if ($supplier->purchaseOrders()->exists()) {
            return response()->json([
                'message' => 'Supplier tidak bisa dihapus karena sudah dipakai purchase order.',
            ], 422);
        }

        $supplier->delete();

        return response()->json([
            'message' => 'Supplier berhasil dihapus.',
        ]);
    }
}
