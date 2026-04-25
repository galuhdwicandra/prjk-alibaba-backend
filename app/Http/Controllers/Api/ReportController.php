<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Report\ReportExportRequest;
use App\Http\Requests\Api\Report\ReportFilterRequest;
use App\Services\Audit\ActivityLogService;
use App\Services\Report\ReportExportService;
use App\Services\Report\ReportingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ReportController extends Controller
{
    public function __construct(
        private readonly ReportingService $reportingService,
        private readonly ReportExportService $reportExportService,
        private readonly ActivityLogService $activityLogService
    ) {
    }

    public function salesSummary(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Ringkasan penjualan berhasil diambil.',
            'data' => $this->reportingService->salesSummary($request->validated()),
        ]);
    }

    public function salesTrend(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Tren penjualan berhasil diambil.',
            'data' => $this->reportingService->salesTrend($request->validated()),
        ]);
    }

    public function salesByOutlet(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan penjualan per outlet berhasil diambil.',
            'data' => $this->reportingService->salesByOutlet($request->validated()),
        ]);
    }

    public function salesByCashier(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan penjualan per kasir berhasil diambil.',
            'data' => $this->reportingService->salesByCashier($request->validated()),
        ]);
    }

    public function topProducts(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan produk terlaris berhasil diambil.',
            'data' => $this->reportingService->topProducts($request->validated()),
        ]);
    }

    public function paymentSummary(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Ringkasan pembayaran berhasil diambil.',
            'data' => $this->reportingService->paymentSummary($request->validated()),
        ]);
    }

    public function promoUsage(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan pemakaian promo berhasil diambil.',
            'data' => $this->reportingService->promoUsage($request->validated()),
        ]);
    }

    public function voidRefund(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan void/refund berhasil diambil.',
            'data' => $this->reportingService->voidRefund($request->validated()),
        ]);
    }

    public function lowStocks(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan stok menipis berhasil diambil.',
            'data' => $this->reportingService->lowStocks($request->validated()),
        ]);
    }

    public function purchaseMaterials(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan pembelian bahan berhasil diambil.',
            'data' => $this->reportingService->purchaseMaterials($request->validated()),
        ]);
    }

    public function expenses(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Laporan pengeluaran outlet berhasil diambil.',
            'data' => $this->reportingService->expenses($request->validated()),
        ]);
    }

    public function shiftSummary(ReportFilterRequest $request): JsonResponse
    {
        return response()->json([
            'message' => 'Rekap shift kasir berhasil diambil.',
            'data' => $this->reportingService->shiftSummary($request->validated()),
        ]);
    }

    public function orderDetails(ReportFilterRequest $request): JsonResponse
    {
        $rows = $this->reportingService->orderDetails($request->validated());

        return response()->json([
            'message' => 'Detail laporan order berhasil diambil.',
            'data' => $rows->items(),
            'meta' => [
                'current_page' => $rows->currentPage(),
                'last_page' => $rows->lastPage(),
                'per_page' => $rows->perPage(),
                'total' => $rows->total(),
            ],
        ]);
    }

    public function export(ReportExportRequest $request, string $report): Response|StreamedResponse
    {
        $filters = $request->validated();

        $this->activityLogService->record([
            'user_id' => $request->user()?->id,
            'outlet_id' => $filters['outlet_id'] ?? null,
            'action' => 'export_report',
            'module' => 'reports',
            'reference_type' => null,
            'reference_id' => null,
            'description' => 'User melakukan export report.',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'metadata' => [
                'report' => $report,
                'filters' => $filters,
            ],
        ]);

        return $this->reportExportService->export($report, $filters);
    }
}
