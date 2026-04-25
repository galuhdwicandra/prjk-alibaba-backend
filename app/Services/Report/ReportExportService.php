<?php

namespace App\Services\Report;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ReportExportService
{
    public function __construct(
        private readonly ReportingService $reportingService
    ) {
    }

    public function export(string $report, array $filters): Response|StreamedResponse
    {
        $format = $filters['format'] ?? 'csv';

        $payload = $this->getReportPayload($report, $filters);
        $rows = $this->normalizeRows($payload);
        $filename = $this->buildFilename($report, $filters);

        if ($format === 'pdf') {
            return $this->downloadPdf($report, $filters, $rows, "{$filename}.pdf");
        }

        return $this->downloadSpreadsheet($rows, "{$filename}.{$format}", $format);
    }

    private function getReportPayload(string $report, array $filters): mixed
    {
        $cacheKey = 'report_export:' . $report . ':' . md5(json_encode($filters));

        return Cache::remember($cacheKey, now()->addMinutes(5), function () use ($report, $filters) {
            return match ($report) {
                'sales-summary' => $this->reportingService->salesSummary($filters),
                'sales-trend' => $this->reportingService->salesTrend($filters),
                'sales-by-outlet' => $this->reportingService->salesByOutlet($filters),
                'sales-by-cashier' => $this->reportingService->salesByCashier($filters),
                'top-products' => $this->reportingService->topProducts($filters),
                'payment-summary' => $this->reportingService->paymentSummary($filters),
                'promo-usage' => $this->reportingService->promoUsage($filters),
                'void-refund' => $this->reportingService->voidRefund($filters),
                'low-stocks' => $this->reportingService->lowStocks($filters),
                'purchase-materials' => $this->reportingService->purchaseMaterials($filters),
                'expenses' => $this->reportingService->expenses($filters),
                'shift-summary' => $this->reportingService->shiftSummary($filters),
                'order-details' => $this->reportingService->orderDetails($filters),
                default => abort(404, 'Jenis report tidak tersedia.'),
            };
        });
    }

    private function normalizeRows(mixed $payload): array
    {
        if ($payload instanceof Collection) {
            $payload = $payload->toArray();
        }

        if (is_object($payload) && method_exists($payload, 'toArray')) {
            $payload = $payload->toArray();
        }

        if (!is_array($payload)) {
            return [
                [
                    'value' => $payload,
                ],
            ];
        }

        if (array_is_list($payload)) {
            return array_map(fn ($row) => $this->flattenRow((array) $row), $payload);
        }

        if (isset($payload['data']) && is_array($payload['data'])) {
            return $this->normalizeRows($payload['data']);
        }

        return [
            $this->flattenRow($payload),
        ];
    }

    private function flattenRow(array $row, string $prefix = ''): array
    {
        $result = [];

        foreach ($row as $key => $value) {
            $newKey = $prefix === '' ? (string) $key : "{$prefix}.{$key}";

            if (is_array($value)) {
                if (array_is_list($value)) {
                    $result[$newKey] = json_encode($value, JSON_UNESCAPED_UNICODE);
                    continue;
                }

                $result = array_merge($result, $this->flattenRow($value, $newKey));
                continue;
            }

            if ($value instanceof \DateTimeInterface) {
                $result[$newKey] = $value->format('Y-m-d H:i:s');
                continue;
            }

            if (is_bool($value)) {
                $result[$newKey] = $value ? 'true' : 'false';
                continue;
            }

            $result[$newKey] = $value;
        }

        return $result;
    }

    private function downloadSpreadsheet(array $rows, string $filename, string $format): StreamedResponse
    {
        $headers = $this->resolveHeaders($rows);

        return response()->streamDownload(function () use ($rows, $headers) {
            $handle = fopen('php://output', 'w');

            fputcsv($handle, $headers);

            foreach ($rows as $row) {
                fputcsv($handle, array_map(
                    fn ($header) => Arr::get($row, $header, $row[$header] ?? ''),
                    $headers
                ));
            }

            fclose($handle);
        }, $filename, [
            'Content-Type' => $format === 'xls'
                ? 'application/vnd.ms-excel; charset=UTF-8'
                : 'text/csv; charset=UTF-8',
            'Cache-Control' => 'no-store, no-cache, must-revalidate',
            'Pragma' => 'no-cache',
            'X-Content-Type-Options' => 'nosniff',
        ]);
    }

    private function downloadPdf(string $report, array $filters, array $rows, string $filename): Response
    {
        $html = $this->buildPdfHtml($report, $filters, $rows);

        return Pdf::loadHTML($html)
            ->setPaper('a4', 'landscape')
            ->download($filename);
    }

    private function buildPdfHtml(string $report, array $filters, array $rows): string
    {
        $headers = $this->resolveHeaders($rows);
        $title = e(Str::headline($report));
        $generatedAt = now()->timezone('Asia/Jakarta')->format('d/m/Y H:i:s');

        $filterHtml = collect($filters)
            ->except(['format'])
            ->filter(fn ($value) => filled($value))
            ->map(fn ($value, $key) => '<span><strong>' . e((string) $key) . ':</strong> ' . e((string) $value) . '</span>')
            ->implode(' | ');

        $headCells = collect($headers)
            ->map(fn ($header) => '<th>' . e($header) . '</th>')
            ->implode('');

        $bodyRows = collect($rows)
            ->map(function (array $row) use ($headers) {
                $cells = collect($headers)
                    ->map(fn ($header) => '<td>' . e((string) ($row[$header] ?? '')) . '</td>')
                    ->implode('');

                return "<tr>{$cells}</tr>";
            })
            ->implode('');

        if ($bodyRows === '') {
            $bodyRows = '<tr><td colspan="' . max(count($headers), 1) . '">Tidak ada data.</td></tr>';
        }

        return <<<HTML
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{$title}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 10px;
            color: #111827;
        }
        h1 {
            margin: 0 0 6px;
            font-size: 18px;
        }
        .meta {
            margin-bottom: 14px;
            font-size: 10px;
            color: #374151;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: #f3f4f6;
            font-weight: bold;
        }
        th, td {
            border: 1px solid #d1d5db;
            padding: 6px;
            text-align: left;
            vertical-align: top;
        }
    </style>
</head>
<body>
    <h1>{$title}</h1>
    <div class="meta">Generated at: {$generatedAt}</div>
    <div class="meta">{$filterHtml}</div>
    <table>
        <thead>
            <tr>{$headCells}</tr>
        </thead>
        <tbody>
            {$bodyRows}
        </tbody>
    </table>
</body>
</html>
HTML;
    }

    private function resolveHeaders(array $rows): array
    {
        if ($rows === []) {
            return ['message'];
        }

        $headers = [];

        foreach ($rows as $row) {
            foreach (array_keys($row) as $key) {
                if (!in_array($key, $headers, true)) {
                    $headers[] = $key;
                }
            }
        }

        return $headers;
    }

    private function buildFilename(string $report, array $filters): string
    {
        $dateFrom = $filters['date_from'] ?? now()->format('Y-m-d');
        $dateUntil = $filters['date_until'] ?? now()->format('Y-m-d');

        return Str::slug("chicken-alibaba-{$report}-{$dateFrom}-{$dateUntil}");
    }
}
