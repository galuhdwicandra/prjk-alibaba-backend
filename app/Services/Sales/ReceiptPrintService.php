<?php

namespace App\Services\Sales;

use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;
use Illuminate\Support\Number;
use Illuminate\Support\Str;

class ReceiptPrintService
{
    public function loadOrder(Order $order): Order
    {
        return $order->load([
            'outlet.setting',
            'cashierShift.user',
            'customer',
            'creator',
            'items.product',
            'items.variants',
            'items.modifiers',
            'payments.paymentMethod',
            'payments.receiver',
        ]);
    }

    public function printableHtml(Order $order): string
    {
        $order = $this->loadOrder($order);

        $outlet = $order->outlet;
        $setting = $outlet?->setting;
        $paperSize = '58mm';
        $currency = $setting?->currency_code ?: 'IDR';
        $orderedAt = optional($order->ordered_at)->timezone('Asia/Jakarta')->format('d/m/Y H:i') ?: now()->timezone('Asia/Jakarta')->format('d/m/Y H:i');

        $itemRows = $order->items->map(function ($item) use ($currency) {
            $variantRows = $item->variants->map(function ($variant) {
                return '<div class="muted">- ' . e($variant->variant_group_name_snapshot) . ': ' . e($variant->variant_option_name_snapshot) . '</div>';
            })->implode('');

            $modifierRows = $item->modifiers->map(function ($modifier) use ($currency) {
                $price = $this->money((float) $modifier->price, $currency);

                return '<div class="muted">- ' . e($modifier->modifier_option_name_snapshot) . ' x ' . e((string) $modifier->qty) . ' @ ' . e($price) . '</div>';
            })->implode('');

            $lineTotal = $this->money((float) $item->line_total, $currency);

            return '
                <div class="item">
                    <div class="item-main">
                        <span>' . e($item->product_name_snapshot) . '</span>
                        <span>' . e($lineTotal) . '</span>
                    </div>
                    <div class="muted">' . e((string) $item->qty) . ' x ' . e($this->money((float) $item->unit_price, $currency)) . '</div>
                    ' . $variantRows . '
                    ' . $modifierRows . '
                    ' . ($item->notes ? '<div class="muted">Catatan: ' . e($item->notes) . '</div>' : '') . '
                </div>
            ';
        })->implode('');

        $paymentRows = $order->payments->map(function ($payment) use ($currency) {
            return '
                <div class="line">
                    <span>' . e($payment->paymentMethod?->name ?? 'Pembayaran') . '</span>
                    <span>' . e($this->money((float) $payment->amount, $currency)) . '</span>
                </div>
            ';
        })->implode('');

        if ($paymentRows === '') {
            $paymentRows = '
                <div class="line">
                    <span>Belum ada pembayaran</span>
                    <span>0</span>
                </div>
            ';
        }

        $footer = e($setting?->receipt_footer ?: 'Terima kasih atas kunjungan Anda.');
        $outletName = e($outlet?->name ?: 'Chicken Alibaba');
        $outletAddress = e($outlet?->address ?: '');
        $outletPhone = e($outlet?->phone ?: '');
        $cashierName = e($order->creator?->name ?: $order->cashierShift?->user?->name ?: '-');

        $subtotal = $this->money((float) $order->subtotal, $currency);
        $discount = $this->money((float) $order->discount_amount, $currency);
        $tax = $this->money((float) $order->tax_amount, $currency);
        $serviceCharge = $this->money((float) $order->service_charge_amount, $currency);
        $grandTotal = $this->money((float) $order->grand_total, $currency);
        $paidTotal = $this->money((float) $order->paid_total, $currency);
        $changeAmount = $this->money((float) $order->change_amount, $currency);

        return <<<HTML
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Receipt {$order->order_number}</title>
    <style>
        @page {
            size: {$paperSize} auto;
            margin: 0;
        }
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            padding: 8px;
            font-family: DejaVu Sans, monospace;
            font-size: 11px;
            color: #111;
            width: {$paperSize};
        }
        .center {
            text-align: center;
        }
        .bold {
            font-weight: bold;
        }
        .muted {
            color: #444;
            font-size: 10px;
            line-height: 1.35;
        }
        .divider {
            border-top: 1px dashed #111;
            margin: 8px 0;
        }
        .line,
        .item-main {
            display: flex;
            justify-content: space-between;
            gap: 8px;
        }
        .item {
            margin-bottom: 8px;
        }
        .total {
            font-size: 12px;
            font-weight: bold;
        }
        .footer {
            margin-top: 10px;
            text-align: center;
            font-size: 10px;
        }
        @media print {
            body {
                width: {$paperSize};
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="center bold">{$outletName}</div>
    <div class="center muted">{$outletAddress}</div>
    <div class="center muted">{$outletPhone}</div>

    <div class="divider"></div>

    <div class="line">
        <span>No</span>
        <span>{$order->order_number}</span>
    </div>
    <div class="line">
        <span>Antrian</span>
        <span>{$order->queue_number}</span>
    </div>
    <div class="line">
        <span>Tanggal</span>
        <span>{$orderedAt}</span>
    </div>
    <div class="line">
        <span>Kasir</span>
        <span>{$cashierName}</span>
    </div>
    <div class="line">
        <span>Channel</span>
        <span>{$order->order_channel}</span>
    </div>

    <div class="divider"></div>

    {$itemRows}

    <div class="divider"></div>

    <div class="line">
        <span>Subtotal</span>
        <span>{$subtotal}</span>
    </div>
    <div class="line">
        <span>Diskon</span>
        <span>{$discount}</span>
    </div>
    <div class="line">
        <span>Pajak</span>
        <span>{$tax}</span>
    </div>
    <div class="line">
        <span>Service</span>
        <span>{$serviceCharge}</span>
    </div>
    <div class="line total">
        <span>Total</span>
        <span>{$grandTotal}</span>
    </div>

    <div class="divider"></div>

    {$paymentRows}

    <div class="line">
        <span>Dibayar</span>
        <span>{$paidTotal}</span>
    </div>
    <div class="line">
        <span>Kembali</span>
        <span>{$changeAmount}</span>
    </div>

    <div class="divider"></div>

    <div class="footer">{$footer}</div>

    <script>
        window.addEventListener('load', function () {
            if (window.location.search.includes('auto_print=1')) {
                window.print();
            }
        });
    </script>
</body>
</html>
HTML;
    }

    public function pdf(Order $order): Response
    {
        $order = $this->loadOrder($order);
        $html = $this->printableHtml($order);
        $filename = Str::slug("receipt-{$order->order_number}") . '.pdf';

        return Pdf::loadHTML($html)
            ->setPaper([0, 0, 164.41, 841.89], 'portrait')
            ->download($filename);
    }

    public function validateReprint(Order $order): void
    {
        if (!in_array($order->payment_status, ['paid', 'partial'], true)) {
            abort(422, 'Receipt hanya boleh dicetak ulang untuk order yang sudah memiliki pembayaran.');
        }

        if (in_array($order->order_status, ['draft', 'cancelled'], true)) {
            abort(422, 'Receipt tidak boleh dicetak ulang untuk order draft atau cancelled.');
        }
    }

    private function money(float $amount, string $currency): string
    {
        return Number::currency($amount, $currency, app()->getLocale());
    }
}
