<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Courier\StoreCourierRequest;
use App\Http\Requests\Api\Courier\UpdateCourierRequest;
use App\Http\Resources\CourierResource;
use App\Models\Courier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('couriers.view'), 403);

        $rows = Courier::query()
            ->withCount('deliveries')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('vehicle_number', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar courier berhasil diambil.',
            'data' => CourierResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreCourierRequest $request): JsonResponse
    {
        $row = Courier::query()->create($request->validated());

        return response()->json([
            'message' => 'Courier berhasil dibuat.',
            'data' => new CourierResource($row),
        ], 201);
    }

    public function show(Request $request, Courier $courier): JsonResponse
    {
        abort_unless($request->user()->can('couriers.view'), 403);

        return response()->json([
            'message' => 'Detail courier berhasil diambil.',
            'data' => new CourierResource($courier->loadCount('deliveries')),
        ]);
    }

    public function update(UpdateCourierRequest $request, Courier $courier): JsonResponse
    {
        $courier->update($request->validated());

        return response()->json([
            'message' => 'Courier berhasil diupdate.',
            'data' => new CourierResource($courier->fresh()->loadCount('deliveries')),
        ]);
    }

    public function destroy(Request $request, Courier $courier): JsonResponse
    {
        abort_unless($request->user()->can('couriers.delete'), 403);

        if ($courier->deliveries()->exists()) {
            return response()->json([
                'message' => 'Courier tidak bisa dihapus karena sudah dipakai delivery.',
            ], 422);
        }

        $courier->delete();

        return response()->json([
            'message' => 'Courier berhasil dihapus.',
        ]);
    }
}
