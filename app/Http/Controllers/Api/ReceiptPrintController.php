<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\Audit\ActivityLogService;
use App\Services\Sales\ReceiptPrintService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReceiptPrintController extends Controller
{
    public function __construct(
        private readonly ReceiptPrintService $receiptPrintService,
        private readonly ActivityLogService $activityLogService
    ) {
    }

    public function print(Request $request, Order $order): Response
    {
        abort_unless($request->user()->can('orders.view'), 403);

        $html = $this->receiptPrintService->printableHtml($order);

        return response($html, 200, [
            'Content-Type' => 'text/html; charset=UTF-8',
            'Cache-Control' => 'no-store, no-cache, must-revalidate',
            'Pragma' => 'no-cache',
            'X-Content-Type-Options' => 'nosniff',
        ]);
    }

    public function pdf(Request $request, Order $order): Response
    {
        abort_unless($request->user()->can('orders.view'), 403);

        return $this->receiptPrintService->pdf($order);
    }

    public function reprint(Request $request, Order $order): JsonResponse
    {
        abort_unless($request->user()->can('orders.view'), 403);

        $this->receiptPrintService->validateReprint($order);

        $this->activityLogService->record([
            'user_id' => $request->user()?->id,
            'outlet_id' => $order->outlet_id,
            'action' => 'reprint_receipt',
            'module' => 'orders',
            'reference_type' => $order::class,
            'reference_id' => $order->id,
            'description' => 'User mencetak ulang receipt order.',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'metadata' => [
                'order_number' => $order->order_number,
                'payment_status' => $order->payment_status,
                'order_status' => $order->order_status,
            ],
        ]);

        return response()->json([
            'message' => 'Receipt boleh dicetak ulang.',
            'data' => [
                'order_id' => $order->id,
                'order_number' => $order->order_number,
                'print_url' => url("/api/v1/orders/{$order->id}/receipt/print"),
                'pdf_url' => url("/api/v1/orders/{$order->id}/receipt/pdf"),
            ],
        ]);
    }
}
