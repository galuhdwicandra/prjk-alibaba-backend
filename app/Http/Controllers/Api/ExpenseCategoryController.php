<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ExpenseCategory\StoreExpenseCategoryRequest;
use App\Http\Requests\Api\ExpenseCategory\UpdateExpenseCategoryRequest;
use App\Http\Resources\ExpenseCategoryResource;
use App\Models\ExpenseCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExpenseCategoryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('expense_categories.view'), 403);

        $rows = ExpenseCategory::query()
            ->withCount('expenses')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where('name', 'like', "%{$search}%");
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar kategori expense berhasil diambil.',
            'data' => ExpenseCategoryResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreExpenseCategoryRequest $request): JsonResponse
    {
        $row = ExpenseCategory::query()->create($request->validated());

        return response()->json([
            'message' => 'Kategori expense berhasil dibuat.',
            'data' => new ExpenseCategoryResource($row),
        ], 201);
    }

    public function show(Request $request, ExpenseCategory $expenseCategory): JsonResponse
    {
        abort_unless($request->user()->can('expense_categories.view'), 403);

        return response()->json([
            'message' => 'Detail kategori expense berhasil diambil.',
            'data' => new ExpenseCategoryResource($expenseCategory->loadCount('expenses')),
        ]);
    }

    public function update(UpdateExpenseCategoryRequest $request, ExpenseCategory $expenseCategory): JsonResponse
    {
        $expenseCategory->update($request->validated());

        return response()->json([
            'message' => 'Kategori expense berhasil diupdate.',
            'data' => new ExpenseCategoryResource($expenseCategory->fresh()->loadCount('expenses')),
        ]);
    }

    public function destroy(Request $request, ExpenseCategory $expenseCategory): JsonResponse
    {
        abort_unless($request->user()->can('expense_categories.delete'), 403);

        if ($expenseCategory->expenses()->exists()) {
            return response()->json([
                'message' => 'Kategori expense tidak bisa dihapus karena sudah dipakai expense.',
            ], 422);
        }

        $expenseCategory->delete();

        return response()->json([
            'message' => 'Kategori expense berhasil dihapus.',
        ]);
    }
}
