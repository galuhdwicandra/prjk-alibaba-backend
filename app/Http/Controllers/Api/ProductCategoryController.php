<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductCategory\StoreProductCategoryRequest;
use App\Http\Requests\Api\ProductCategory\UpdateProductCategoryRequest;
use App\Http\Resources\ProductCategoryResource;
use App\Models\ProductCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('product_categories.view'), 403);

        $categories = ProductCategory::query()
            ->withCount('products')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('slug', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->orderBy('sort_order')
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar kategori produk berhasil diambil.',
            'data' => ProductCategoryResource::collection($categories),
            'meta' => [
                'current_page' => $categories->currentPage(),
                'last_page' => $categories->lastPage(),
                'per_page' => $categories->perPage(),
                'total' => $categories->total(),
            ],
        ]);
    }

    public function store(StoreProductCategoryRequest $request): JsonResponse
    {
        $payload = $request->validated();

        if (empty($payload['slug'] ?? null) && !empty($payload['name'])) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $category = ProductCategory::create($payload);

        return response()->json([
            'message' => 'Kategori produk berhasil dibuat.',
            'data' => new ProductCategoryResource($category),
        ], 201);
    }

    public function show(Request $request, ProductCategory $productCategory): JsonResponse
    {
        abort_unless($request->user()->can('product_categories.view'), 403);

        return response()->json([
            'message' => 'Detail kategori produk berhasil diambil.',
            'data' => new ProductCategoryResource($productCategory->loadCount('products')),
        ]);
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory): JsonResponse
    {
        $payload = $request->validated();

        if (array_key_exists('name', $payload) && empty($payload['slug'] ?? null)) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $productCategory->update($payload);

        return response()->json([
            'message' => 'Kategori produk berhasil diupdate.',
            'data' => new ProductCategoryResource($productCategory->fresh()->loadCount('products')),
        ]);
    }

    public function destroy(Request $request, ProductCategory $productCategory): JsonResponse
    {
        abort_unless($request->user()->can('product_categories.delete'), 403);

        if ($productCategory->products()->exists()) {
            return response()->json([
                'message' => 'Kategori tidak bisa dihapus karena masih dipakai produk.',
            ], 422);
        }

        $productCategory->delete();

        return response()->json([
            'message' => 'Kategori produk berhasil dihapus.',
        ]);
    }
}