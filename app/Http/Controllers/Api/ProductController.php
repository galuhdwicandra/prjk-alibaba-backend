<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Product\StoreProductRequest;
use App\Http\Requests\Api\Product\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\Catalog\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct(
        private readonly ProductService $productService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('products.view'), 403);

        $products = Product::query()
            ->with([
                'category',
                'prices.outlet',
                'outletStatuses.outlet',
                'variantGroups.options',
                'modifierGroups.options',
                'bundleItems.bundledProduct',
            ])
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('sku', 'like', "%{$search}%")
                        ->orWhere('code', 'like', "%{$search}%")
                        ->orWhere('slug', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('product_category_id'), function ($query) use ($request) {
                $query->where('product_category_id', (int) $request->input('product_category_id'));
            })
            ->when($request->filled('product_type'), function ($query) use ($request) {
                $query->where('product_type', $request->string('product_type')->toString());
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar produk berhasil diambil.',
            'data' => ProductResource::collection($products),
            'meta' => [
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage(),
                'per_page' => $products->perPage(),
                'total' => $products->total(),
            ],
        ]);
    }

    public function store(StoreProductRequest $request): JsonResponse
    {
        $payload = $request->validated();

        if (empty($payload['slug'] ?? null) && !empty($payload['name'])) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $product = $this->productService->create($payload);

        return response()->json([
            'message' => 'Produk berhasil dibuat.',
            'data' => new ProductResource($product),
        ], 201);
    }

    public function show(Request $request, Product $product): JsonResponse
    {
        abort_unless($request->user()->can('products.view'), 403);

        return response()->json([
            'message' => 'Detail produk berhasil diambil.',
            'data' => new ProductResource($product->load([
                'category',
                'prices.outlet',
                'outletStatuses.outlet',
                'variantGroups.options',
                'modifierGroups.options',
                'bundleItems.bundledProduct',
            ])),
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product): JsonResponse
    {
        $payload = $request->validated();

        if (array_key_exists('name', $payload) && empty($payload['slug'] ?? null)) {
            $payload['slug'] = Str::slug($payload['name']);
        }

        $product = $this->productService->update($product, $payload);

        return response()->json([
            'message' => 'Produk berhasil diupdate.',
            'data' => new ProductResource($product),
        ]);
    }

    public function destroy(Request $request, Product $product): JsonResponse
    {
        abort_unless($request->user()->can('products.delete'), 403);

        $product->delete();

        return response()->json([
            'message' => 'Produk berhasil dihapus.',
        ]);
    }
}