<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Promotion\StorePromotionRequest;
use App\Http\Requests\Api\Promotion\UpdatePromotionRequest;
use App\Http\Resources\PromotionResource;
use App\Models\Promotion;
use App\Services\Promotion\PromotionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function __construct(
        private readonly PromotionService $promotionService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('promotions.view'), 403);

        $promotions = Promotion::query()
            ->with('rules')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where('name', 'like', "%{$search}%");
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->when($request->filled('promotion_type'), function ($query) use ($request) {
                $query->where('promotion_type', $request->string('promotion_type')->toString());
            })
            ->orderByDesc('priority')
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar promotion berhasil diambil.',
            'data' => PromotionResource::collection($promotions),
            'meta' => [
                'current_page' => $promotions->currentPage(),
                'last_page' => $promotions->lastPage(),
                'per_page' => $promotions->perPage(),
                'total' => $promotions->total(),
            ],
        ]);
    }

    public function store(StorePromotionRequest $request): JsonResponse
    {
        $promotion = $this->promotionService->create($request->validated());

        return response()->json([
            'message' => 'Promotion berhasil dibuat.',
            'data' => new PromotionResource($promotion),
        ], 201);
    }

    public function show(Request $request, Promotion $promotion): JsonResponse
    {
        abort_unless($request->user()->can('promotions.view'), 403);

        return response()->json([
            'message' => 'Detail promotion berhasil diambil.',
            'data' => new PromotionResource($promotion->load('rules')),
        ]);
    }

    public function update(UpdatePromotionRequest $request, Promotion $promotion): JsonResponse
    {
        $promotion = $this->promotionService->update($promotion, $request->validated());

        return response()->json([
            'message' => 'Promotion berhasil diupdate.',
            'data' => new PromotionResource($promotion),
        ]);
    }

    public function destroy(Request $request, Promotion $promotion): JsonResponse
    {
        abort_unless($request->user()->can('promotions.delete'), 403);

        $promotion->delete();

        return response()->json([
            'message' => 'Promotion berhasil dihapus.',
        ]);
    }
}