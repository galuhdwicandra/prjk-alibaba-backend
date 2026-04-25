<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Dashboard\DashboardFilterRequest;
use App\Services\Dashboard\DashboardService;
use Illuminate\Http\JsonResponse;

class DashboardController extends Controller
{
    public function __construct(
        private readonly DashboardService $dashboardService
    ) {
    }

    public function overview(DashboardFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Ringkasan dashboard berhasil diambil.',
            'data' => $this->dashboardService->overview(
                filters: $request->validated(),
                user: $request->user(),
            ),
        ]);
    }

    public function summary(DashboardFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Summary dashboard berhasil diambil.',
            'data' => $this->dashboardService->summary(
                filters: $request->validated(),
                user: $request->user(),
            ),
        ]);
    }

    public function salesTrend(DashboardFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Tren penjualan dashboard berhasil diambil.',
            'data' => $this->dashboardService->salesTrend(
                filters: $request->validated(),
                user: $request->user(),
            ),
        ]);
    }

    public function topProducts(DashboardFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Top produk dashboard berhasil diambil.',
            'data' => $this->dashboardService->topProducts(
                filters: $request->validated(),
                user: $request->user(),
                limit: (int) $request->input('limit', 5),
            ),
        ]);
    }

    public function bestOutlets(DashboardFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Outlet terbaik dashboard berhasil diambil.',
            'data' => $this->dashboardService->bestOutlets(
                filters: $request->validated(),
                user: $request->user(),
                limit: (int) $request->input('limit', 5),
            ),
        ]);
    }

    public function criticalStocks(DashboardFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Stok kritis dashboard berhasil diambil.',
            'data' => $this->dashboardService->criticalStocks(
                filters: $request->validated(),
                user: $request->user(),
                limit: (int) $request->input('limit', 10),
            ),
        ]);
    }

    public function pendingOrders(DashboardFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Pending order dashboard berhasil diambil.',
            'data' => $this->dashboardService->pendingOrders(
                filters: $request->validated(),
                user: $request->user(),
                limit: (int) $request->input('limit', 10),
            ),
        ]);
    }

    public function overdueOrders(DashboardFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Order terlambat dashboard berhasil diambil.',
            'data' => $this->dashboardService->overdueOrders(
                filters: $request->validated(),
                user: $request->user(),
                limit: (int) $request->input('limit', 10),
                overdueMinutes: (int) $request->input('overdue_minutes', 30),
            ),
        ]);
    }

    public function cashDiscrepancies(DashboardFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Cash discrepancy dashboard berhasil diambil.',
            'data' => $this->dashboardService->cashDiscrepancies(
                filters: $request->validated(),
                user: $request->user(),
                limit: (int) $request->input('limit', 10),
            ),
        ]);
    }
}
