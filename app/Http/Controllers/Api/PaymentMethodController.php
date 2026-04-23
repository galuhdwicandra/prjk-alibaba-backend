<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PaymentMethod\StorePaymentMethodRequest;
use App\Http\Requests\Api\PaymentMethod\UpdatePaymentMethodRequest;
use App\Http\Resources\PaymentMethodResource;
use App\Models\PaymentMethod;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        abort_unless($request->user()->can('payment_methods.view'), 403);

        $rows = PaymentMethod::query()
            ->withCount('payments')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search')->toString();

                $query->where(function ($q) use ($search) {
                    $q->where('code', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('type', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('type'), function ($query) use ($request) {
                $query->where('type', $request->string('type')->toString());
            })
            ->when($request->filled('is_active'), function ($query) use ($request) {
                $query->where('is_active', filter_var($request->input('is_active'), FILTER_VALIDATE_BOOLEAN));
            })
            ->latest('id')
            ->paginate((int) $request->input('per_page', 10));

        return response()->json([
            'message' => 'Daftar metode pembayaran berhasil diambil.',
            'data' => PaymentMethodResource::collection($rows),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function store(StorePaymentMethodRequest $request): JsonResponse
    {
        $row = PaymentMethod::create($request->validated());

        return response()->json([
            'message' => 'Metode pembayaran berhasil dibuat.',
            'data' => new PaymentMethodResource($row),
        ], 201);
    }

    public function show(Request $request, PaymentMethod $paymentMethod): JsonResponse
    {
        abort_unless($request->user()->can('payment_methods.view'), 403);

        return response()->json([
            'message' => 'Detail metode pembayaran berhasil diambil.',
            'data' => new PaymentMethodResource($paymentMethod->loadCount('payments')),
        ]);
    }

    public function update(UpdatePaymentMethodRequest $request, PaymentMethod $paymentMethod): JsonResponse
    {
        $paymentMethod->update($request->validated());

        return response()->json([
            'message' => 'Metode pembayaran berhasil diupdate.',
            'data' => new PaymentMethodResource($paymentMethod->fresh()->loadCount('payments')),
        ]);
    }

    public function destroy(Request $request, PaymentMethod $paymentMethod): JsonResponse
    {
        abort_unless($request->user()->can('payment_methods.delete'), 403);

        if ($paymentMethod->payments()->exists()) {
            return response()->json([
                'message' => 'Metode pembayaran tidak bisa dihapus karena sudah dipakai transaksi.',
            ], 422);
        }

        $paymentMethod->delete();

        return response()->json([
            'message' => 'Metode pembayaran berhasil dihapus.',
        ]);
    }
}
