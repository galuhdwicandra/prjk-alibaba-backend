<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Outlet\StoreOutletRequest;
use App\Http\Requests\Api\Outlet\UpdateOutletRequest;
use App\Http\Resources\OutletResource;
use App\Models\Outlet;
use App\Services\Outlet\OutletService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function __construct(
        private readonly OutletService $outletService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('outlets.view'), 403);

        $outlets = Outlet::query()
            ->with('setting')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%")
                        ->orWhere('province', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar outlet berhasil diambil.',
            'data' => OutletResource::collection($outlets),
            'meta' => [
                'current_page' => $outlets->currentPage(),
                'last_page' => $outlets->lastPage(),
                'per_page' => $outlets->perPage(),
                'total' => $outlets->total(),
            ],
        ]);
    }

    public function store(StoreOutletRequest $request): JsonResponse
    {
        $outlet = $this->outletService->create($request->validated());

        return response()->json([
            'message' => 'Outlet berhasil dibuat.',
            'data' => new OutletResource($outlet),
        ], 201);
    }

    public function show(Request $request, Outlet $outlet): JsonResponse
    {
        abort_unless($request->user()->can('outlets.view'), 403);

        return response()->json([
            'message' => 'Detail outlet berhasil diambil.',
            'data' => new OutletResource($outlet->load('setting')),
        ]);
    }

    public function update(UpdateOutletRequest $request, Outlet $outlet): JsonResponse
    {
        $outlet = $this->outletService->update($outlet, $request->validated());

        return response()->json([
            'message' => 'Outlet berhasil diupdate.',
            'data' => new OutletResource($outlet),
        ]);
    }

    public function destroy(Request $request, Outlet $outlet): JsonResponse
    {
        abort_unless($request->user()->can('outlets.delete'), 403);

        $outlet->delete();

        return response()->json([
            'message' => 'Outlet berhasil dihapus.',
        ]);
    }
}
