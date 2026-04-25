<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Expense\ApproveExpenseRequest;
use App\Http\Requests\Api\Expense\RejectExpenseRequest;
use App\Http\Requests\Api\Expense\StoreExpenseRequest;
use App\Http\Requests\Api\Expense\UpdateExpenseRequest;
use App\Http\Requests\Api\Expense\UploadExpenseAttachmentRequest;
use App\Http\Resources\ExpenseResource;
use App\Models\Expense;
use App\Models\ExpenseAttachment;
use App\Services\Expense\ExpenseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function __construct(
        private readonly ExpenseService $expenseService
    ) {
    }

    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('expenses.view'), 403);

        $rows = Expense::query()
            ->with([
                'outlet',
                'category',
                'creator',
                'approver',
                'attachments',
            ])
            ->withCount('attachments')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('description', 'like', "%{$search}%")
                        ->orWhereHas('category', fn ($categoryQuery) => $categoryQuery->where('name', 'like', "%{$search}%"))
                        ->orWhereHas('outlet', fn ($outletQuery) => $outletQuery->where('name', 'like', "%{$search}%"));
                });
            })
            ->when($request->filled('outlet_id'), function ($query) use ($request) {
                $query->where('outlet_id', (int) $request->input('outlet_id'));
            })
            ->when($request->filled('expense_category_id'), function ($query) use ($request) {
                $query->where('expense_category_id', (int) $request->input('expense_category_id'));
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->string('status')->toString());
            })
            ->when($request->filled('expense_from'), function ($query) use ($request) {
                $query->whereDate('expense_date', '>=', $request->input('expense_from'));
            })
            ->when($request->filled('expense_until'), function ($query) use ($request) {
                $query->whereDate('expense_date', '<=', $request->input('expense_until'));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar expense berhasil diambil.',
            'data' => ExpenseResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StoreExpenseRequest $request): JsonResponse
    {
        $row = $this->expenseService->create(
            payload: $request->validated(),
            userId: $request->user()?->id,
        );

        return response()->json([
            'message' => 'Expense berhasil dibuat.',
            'data' => new ExpenseResource($row),
        ], 201);
    }

    public function show(Request $request, Expense $expense): JsonResponse
    {
        abort_unless($request->user()->can('expenses.view'), 403);

        return response()->json([
            'message' => 'Detail expense berhasil diambil.',
            'data' => new ExpenseResource($expense->load([
                'outlet',
                'category',
                'creator',
                'approver',
                'attachments',
            ])->loadCount('attachments')),
        ]);
    }

    public function update(UpdateExpenseRequest $request, Expense $expense): JsonResponse
    {
        $row = $this->expenseService->update($expense, $request->validated());

        return response()->json([
            'message' => 'Expense berhasil diupdate.',
            'data' => new ExpenseResource($row),
        ]);
    }

    public function submit(Request $request, Expense $expense): JsonResponse
    {
        abort_unless($request->user()->can('expenses.submit'), 403);

        $row = $this->expenseService->submit($expense);

        return response()->json([
            'message' => 'Expense berhasil disubmit.',
            'data' => new ExpenseResource($row),
        ]);
    }

    public function approve(ApproveExpenseRequest $request, Expense $expense): JsonResponse
    {
        $row = $this->expenseService->approve(
            expense: $expense,
            payload: $request->validated(),
            userId: $request->user()->id,
        );

        return response()->json([
            'message' => 'Expense berhasil diapprove.',
            'data' => new ExpenseResource($row),
        ]);
    }

    public function reject(RejectExpenseRequest $request, Expense $expense): JsonResponse
    {
        $row = $this->expenseService->reject(
            expense: $expense,
            notes: $request->input('notes'),
        );

        return response()->json([
            'message' => 'Expense berhasil direject.',
            'data' => new ExpenseResource($row),
        ]);
    }

    public function uploadAttachments(UploadExpenseAttachmentRequest $request, Expense $expense): JsonResponse
    {
        $row = $this->expenseService->addAttachments(
            expense: $expense,
            attachments: $request->file('attachments', []),
        );

        return response()->json([
            'message' => 'Attachment expense berhasil ditambahkan.',
            'data' => new ExpenseResource($row),
        ]);
    }

    public function deleteAttachment(Request $request, ExpenseAttachment $expenseAttachment): JsonResponse
    {
        abort_unless($request->user()->can('expenses.update'), 403);

        $this->expenseService->deleteAttachment($expenseAttachment);

        return response()->json([
            'message' => 'Attachment expense berhasil dihapus.',
        ]);
    }

    public function destroy(Request $request, Expense $expense): JsonResponse
    {
        abort_unless($request->user()->can('expenses.delete'), 403);

        $this->expenseService->delete($expense);

        return response()->json([
            'message' => 'Expense berhasil dihapus.',
        ]);
    }
}
