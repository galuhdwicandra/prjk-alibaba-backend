<?php

namespace App\Services\Report;

use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class ReportingService
{
    public function salesSummary(array $filters): array
    {
        $query = DB::table('orders')
            ->leftJoin('payments', function ($join) {
                $join->on('payments.order_id', '=', 'orders.id')
                    ->where('payments.status', '=', 'paid');
            });

        $this->applyOrderFilters($query, $filters);

        $row = $query
            ->selectRaw('COUNT(DISTINCT orders.id) as total_orders')
            ->selectRaw('COALESCE(SUM(DISTINCT orders.subtotal), 0) as subtotal')
            ->selectRaw('COALESCE(SUM(DISTINCT orders.discount_amount), 0) as discount_amount')
            ->selectRaw('COALESCE(SUM(DISTINCT orders.tax_amount), 0) as tax_amount')
            ->selectRaw('COALESCE(SUM(DISTINCT orders.service_charge_amount), 0) as service_charge_amount')
            ->selectRaw('COALESCE(SUM(DISTINCT orders.grand_total), 0) as grand_total')
            ->selectRaw('COALESCE(SUM(payments.amount), 0) as paid_total')
            ->selectRaw('COALESCE(AVG(orders.grand_total), 0) as average_order_value')
            ->first();

        return [
            'total_orders' => (int) ($row->total_orders ?? 0),
            'subtotal' => (float) ($row->subtotal ?? 0),
            'discount_amount' => (float) ($row->discount_amount ?? 0),
            'tax_amount' => (float) ($row->tax_amount ?? 0),
            'service_charge_amount' => (float) ($row->service_charge_amount ?? 0),
            'grand_total' => (float) ($row->grand_total ?? 0),
            'paid_total' => (float) ($row->paid_total ?? 0),
            'average_order_value' => (float) ($row->average_order_value ?? 0),
            'filters' => $this->normalizedFilters($filters),
        ];
    }

    public function salesTrend(array $filters): Collection
    {
        $groupBy = $filters['group_by'] ?? 'day';
        $dateExpression = $this->dateGroupExpression('orders.ordered_at', $groupBy);

        $query = DB::table('orders');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw("{$dateExpression} as period")
            ->selectRaw('COUNT(*) as total_orders')
            ->selectRaw('COALESCE(SUM(grand_total), 0) as grand_total')
            ->selectRaw('COALESCE(SUM(discount_amount), 0) as discount_amount')
            ->whereNotIn('orders.order_status', ['draft', 'cancelled'])
            ->groupBy('period')
            ->orderBy('period')
            ->get()
            ->map(fn ($row) => [
                'period' => $row->period,
                'total_orders' => (int) $row->total_orders,
                'grand_total' => (float) $row->grand_total,
                'discount_amount' => (float) $row->discount_amount,
            ]);
    }

    public function salesByOutlet(array $filters): Collection
    {
        $query = DB::table('orders')
            ->join('outlets', 'outlets.id', '=', 'orders.outlet_id');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.code as outlet_code')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('COUNT(orders.id) as total_orders')
            ->selectRaw('COALESCE(SUM(orders.grand_total), 0) as grand_total')
            ->selectRaw('COALESCE(SUM(orders.discount_amount), 0) as discount_amount')
            ->whereNotIn('orders.order_status', ['draft', 'cancelled'])
            ->groupBy('outlets.id', 'outlets.code', 'outlets.name')
            ->orderByDesc('grand_total')
            ->get()
            ->map(fn ($row) => [
                'outlet_id' => (int) $row->outlet_id,
                'outlet_code' => $row->outlet_code,
                'outlet_name' => $row->outlet_name,
                'total_orders' => (int) $row->total_orders,
                'grand_total' => (float) $row->grand_total,
                'discount_amount' => (float) $row->discount_amount,
            ]);
    }

    public function salesByCashier(array $filters): Collection
    {
        $query = DB::table('orders')
            ->leftJoin('users', 'users.id', '=', 'orders.created_by')
            ->leftJoin('outlets', 'outlets.id', '=', 'orders.outlet_id');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw('users.id as cashier_id')
            ->selectRaw('users.name as cashier_name')
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('COUNT(orders.id) as total_orders')
            ->selectRaw('COALESCE(SUM(orders.grand_total), 0) as grand_total')
            ->whereNotIn('orders.order_status', ['draft', 'cancelled'])
            ->when(!empty($filters['cashier_id']), fn ($query) => $query->where('orders.created_by', (int) $filters['cashier_id']))
            ->groupBy('users.id', 'users.name', 'outlets.id', 'outlets.name')
            ->orderByDesc('grand_total')
            ->get()
            ->map(fn ($row) => [
                'cashier_id' => $row->cashier_id ? (int) $row->cashier_id : null,
                'cashier_name' => $row->cashier_name ?? 'Tanpa Kasir',
                'outlet_id' => $row->outlet_id ? (int) $row->outlet_id : null,
                'outlet_name' => $row->outlet_name,
                'total_orders' => (int) $row->total_orders,
                'grand_total' => (float) $row->grand_total,
            ]);
    }

    public function topProducts(array $filters): Collection
    {
        $query = DB::table('order_items')
            ->join('orders', 'orders.id', '=', 'order_items.order_id')
            ->leftJoin('products', 'products.id', '=', 'order_items.product_id')
            ->leftJoin('outlets', 'outlets.id', '=', 'orders.outlet_id');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw('order_items.product_id')
            ->selectRaw('order_items.product_name_snapshot')
            ->selectRaw('order_items.sku_snapshot')
            ->selectRaw('COUNT(DISTINCT orders.id) as total_orders')
            ->selectRaw('COALESCE(SUM(order_items.qty), 0) as total_qty')
            ->selectRaw('COALESCE(SUM(order_items.line_total), 0) as total_sales')
            ->whereNotIn('orders.order_status', ['draft', 'cancelled'])
            ->when(!empty($filters['product_id']), fn ($query) => $query->where('order_items.product_id', (int) $filters['product_id']))
            ->groupBy('order_items.product_id', 'order_items.product_name_snapshot', 'order_items.sku_snapshot')
            ->orderByDesc('total_qty')
            ->limit((int) ($filters['limit'] ?? 10))
            ->get()
            ->map(fn ($row) => [
                'product_id' => $row->product_id ? (int) $row->product_id : null,
                'product_name' => $row->product_name_snapshot,
                'sku' => $row->sku_snapshot,
                'total_orders' => (int) $row->total_orders,
                'total_qty' => (float) $row->total_qty,
                'total_sales' => (float) $row->total_sales,
            ]);
    }

    public function paymentSummary(array $filters): Collection
    {
        $query = DB::table('payments')
            ->join('orders', 'orders.id', '=', 'payments.order_id')
            ->join('payment_methods', 'payment_methods.id', '=', 'payments.payment_method_id');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw('payment_methods.id as payment_method_id')
            ->selectRaw('payment_methods.code as payment_method_code')
            ->selectRaw('payment_methods.name as payment_method_name')
            ->selectRaw('payment_methods.type as payment_method_type')
            ->selectRaw('COUNT(payments.id) as total_payments')
            ->selectRaw('COALESCE(SUM(payments.amount), 0) as total_amount')
            ->where('payments.status', 'paid')
            ->when(!empty($filters['payment_method_id']), fn ($query) => $query->where('payments.payment_method_id', (int) $filters['payment_method_id']))
            ->groupBy('payment_methods.id', 'payment_methods.code', 'payment_methods.name', 'payment_methods.type')
            ->orderByDesc('total_amount')
            ->get()
            ->map(fn ($row) => [
                'payment_method_id' => (int) $row->payment_method_id,
                'payment_method_code' => $row->payment_method_code,
                'payment_method_name' => $row->payment_method_name,
                'payment_method_type' => $row->payment_method_type,
                'total_payments' => (int) $row->total_payments,
                'total_amount' => (float) $row->total_amount,
            ]);
    }

    public function promoUsage(array $filters): array
    {
        $voucherQuery = DB::table('voucher_usages')
            ->join('vouchers', 'vouchers.id', '=', 'voucher_usages.voucher_id')
            ->join('orders', 'orders.id', '=', 'voucher_usages.order_id');

        $this->applyOrderFilters($voucherQuery, $filters);

        $vouchers = $voucherQuery
            ->selectRaw('vouchers.id as voucher_id')
            ->selectRaw('vouchers.code as voucher_code')
            ->selectRaw('vouchers.name as voucher_name')
            ->selectRaw('COUNT(voucher_usages.id) as total_usage')
            ->selectRaw('COALESCE(SUM(voucher_usages.discount_amount), 0) as total_discount')
            ->groupBy('vouchers.id', 'vouchers.code', 'vouchers.name')
            ->orderByDesc('total_discount')
            ->get()
            ->map(fn ($row) => [
                'voucher_id' => (int) $row->voucher_id,
                'voucher_code' => $row->voucher_code,
                'voucher_name' => $row->voucher_name,
                'total_usage' => (int) $row->total_usage,
                'total_discount' => (float) $row->total_discount,
            ]);

        $promotionQuery = DB::table('promotion_usages')
            ->join('promotions', 'promotions.id', '=', 'promotion_usages.promotion_id')
            ->join('orders', 'orders.id', '=', 'promotion_usages.order_id');

        $this->applyOrderFilters($promotionQuery, $filters);

        $promotions = $promotionQuery
            ->selectRaw('promotions.id as promotion_id')
            ->selectRaw('promotions.name as promotion_name')
            ->selectRaw('promotions.promotion_type')
            ->selectRaw('COUNT(promotion_usages.id) as total_usage')
            ->selectRaw('COALESCE(SUM(promotion_usages.discount_amount), 0) as total_discount')
            ->groupBy('promotions.id', 'promotions.name', 'promotions.promotion_type')
            ->orderByDesc('total_discount')
            ->get()
            ->map(fn ($row) => [
                'promotion_id' => (int) $row->promotion_id,
                'promotion_name' => $row->promotion_name,
                'promotion_type' => $row->promotion_type,
                'total_usage' => (int) $row->total_usage,
                'total_discount' => (float) $row->total_discount,
            ]);

        return [
            'vouchers' => $vouchers,
            'promotions' => $promotions,
        ];
    }

    public function voidRefund(array $filters): array
    {
        $cancelledOrderQuery = DB::table('orders')
            ->leftJoin('users', 'users.id', '=', 'orders.cancelled_by')
            ->leftJoin('outlets', 'outlets.id', '=', 'orders.outlet_id');

        $this->applyOrderFilters($cancelledOrderQuery, $filters);

        $cancelledOrders = $cancelledOrderQuery
            ->selectRaw('orders.id')
            ->selectRaw('orders.order_number')
            ->selectRaw('orders.order_status')
            ->selectRaw('orders.payment_status')
            ->selectRaw('orders.grand_total')
            ->selectRaw('orders.cancelled_at')
            ->selectRaw('users.name as cancelled_by_name')
            ->selectRaw('outlets.name as outlet_name')
            ->where('orders.order_status', 'cancelled')
            ->orderByDesc('orders.cancelled_at')
            ->limit((int) ($filters['limit'] ?? 10))
            ->get()
            ->map(fn ($row) => [
                'id' => (int) $row->id,
                'order_number' => $row->order_number,
                'order_status' => $row->order_status,
                'payment_status' => $row->payment_status,
                'grand_total' => (float) $row->grand_total,
                'cancelled_at' => $row->cancelled_at,
                'cancelled_by_name' => $row->cancelled_by_name,
                'outlet_name' => $row->outlet_name,
            ]);

        $paymentQuery = DB::table('payments')
            ->join('orders', 'orders.id', '=', 'payments.order_id')
            ->join('payment_methods', 'payment_methods.id', '=', 'payments.payment_method_id')
            ->leftJoin('outlets', 'outlets.id', '=', 'orders.outlet_id');

        $this->applyOrderFilters($paymentQuery, $filters);

        $payments = $paymentQuery
            ->selectRaw('payments.id')
            ->selectRaw('orders.order_number')
            ->selectRaw('payment_methods.name as payment_method_name')
            ->selectRaw('payments.amount')
            ->selectRaw('payments.status')
            ->selectRaw('payments.paid_at')
            ->selectRaw('outlets.name as outlet_name')
            ->whereIn('payments.status', ['cancelled', 'refunded'])
            ->orderByDesc('payments.paid_at')
            ->limit((int) ($filters['limit'] ?? 10))
            ->get()
            ->map(fn ($row) => [
                'id' => (int) $row->id,
                'order_number' => $row->order_number,
                'payment_method_name' => $row->payment_method_name,
                'amount' => (float) $row->amount,
                'status' => $row->status,
                'paid_at' => $row->paid_at,
                'outlet_name' => $row->outlet_name,
            ]);

        return [
            'cancelled_orders' => $cancelledOrders,
            'cancelled_or_refunded_payments' => $payments,
        ];
    }

    public function lowStocks(array $filters): Collection
    {
        $query = DB::table('outlet_material_stocks')
            ->join('outlets', 'outlets.id', '=', 'outlet_material_stocks.outlet_id')
            ->join('raw_materials', 'raw_materials.id', '=', 'outlet_material_stocks.raw_material_id')
            ->join('units', 'units.id', '=', 'raw_materials.unit_id');

        return $query
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.code as outlet_code')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('raw_materials.id as raw_material_id')
            ->selectRaw('raw_materials.code as raw_material_code')
            ->selectRaw('raw_materials.name as raw_material_name')
            ->selectRaw('units.code as unit_code')
            ->selectRaw('raw_materials.minimum_stock')
            ->selectRaw('outlet_material_stocks.qty_on_hand')
            ->selectRaw('(outlet_material_stocks.qty_on_hand - raw_materials.minimum_stock) as stock_gap')
            ->whereColumn('outlet_material_stocks.qty_on_hand', '<=', 'raw_materials.minimum_stock')
            ->where('raw_materials.is_active', true)
            ->when(!empty($filters['outlet_id']), fn ($query) => $query->where('outlet_material_stocks.outlet_id', (int) $filters['outlet_id']))
            ->when(!empty($filters['raw_material_id']), fn ($query) => $query->where('outlet_material_stocks.raw_material_id', (int) $filters['raw_material_id']))
            ->orderBy('stock_gap')
            ->limit((int) ($filters['limit'] ?? 100))
            ->get()
            ->map(fn ($row) => [
                'outlet_id' => (int) $row->outlet_id,
                'outlet_code' => $row->outlet_code,
                'outlet_name' => $row->outlet_name,
                'raw_material_id' => (int) $row->raw_material_id,
                'raw_material_code' => $row->raw_material_code,
                'raw_material_name' => $row->raw_material_name,
                'unit_code' => $row->unit_code,
                'minimum_stock' => (float) $row->minimum_stock,
                'qty_on_hand' => (float) $row->qty_on_hand,
                'stock_gap' => (float) $row->stock_gap,
            ]);
    }

    public function purchaseMaterials(array $filters): Collection
    {
        $query = DB::table('goods_receipt_items')
            ->join('goods_receipts', 'goods_receipts.id', '=', 'goods_receipt_items.goods_receipt_id')
            ->join('purchase_orders', 'purchase_orders.id', '=', 'goods_receipts.purchase_order_id')
            ->join('suppliers', 'suppliers.id', '=', 'purchase_orders.supplier_id')
            ->join('outlets', 'outlets.id', '=', 'goods_receipts.outlet_id')
            ->join('raw_materials', 'raw_materials.id', '=', 'goods_receipt_items.raw_material_id')
            ->join('units', 'units.id', '=', 'goods_receipt_items.unit_id');

        return $query
            ->selectRaw('raw_materials.id as raw_material_id')
            ->selectRaw('raw_materials.name as raw_material_name')
            ->selectRaw('units.code as unit_code')
            ->selectRaw('suppliers.id as supplier_id')
            ->selectRaw('suppliers.name as supplier_name')
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('COUNT(goods_receipt_items.id) as total_receipt_items')
            ->selectRaw('COALESCE(SUM(goods_receipt_items.qty_received), 0) as total_qty_received')
            ->selectRaw('COALESCE(SUM(goods_receipt_items.line_total), 0) as total_amount')
            ->where('goods_receipts.status', 'posted')
            ->when(!empty($filters['outlet_id']), fn ($query) => $query->where('goods_receipts.outlet_id', (int) $filters['outlet_id']))
            ->when(!empty($filters['supplier_id']), fn ($query) => $query->where('purchase_orders.supplier_id', (int) $filters['supplier_id']))
            ->when(!empty($filters['raw_material_id']), fn ($query) => $query->where('goods_receipt_items.raw_material_id', (int) $filters['raw_material_id']))
            ->when(!empty($filters['date_from']), fn ($query) => $query->whereDate('goods_receipts.received_date', '>=', $filters['date_from']))
            ->when(!empty($filters['date_until']), fn ($query) => $query->whereDate('goods_receipts.received_date', '<=', $filters['date_until']))
            ->groupBy(
                'raw_materials.id',
                'raw_materials.name',
                'units.code',
                'suppliers.id',
                'suppliers.name',
                'outlets.id',
                'outlets.name'
            )
            ->orderByDesc('total_amount')
            ->get()
            ->map(fn ($row) => [
                'raw_material_id' => (int) $row->raw_material_id,
                'raw_material_name' => $row->raw_material_name,
                'unit_code' => $row->unit_code,
                'supplier_id' => (int) $row->supplier_id,
                'supplier_name' => $row->supplier_name,
                'outlet_id' => (int) $row->outlet_id,
                'outlet_name' => $row->outlet_name,
                'total_receipt_items' => (int) $row->total_receipt_items,
                'total_qty_received' => (float) $row->total_qty_received,
                'total_amount' => (float) $row->total_amount,
            ]);
    }

    public function expenses(array $filters): Collection
    {
        $query = DB::table('expenses')
            ->join('expense_categories', 'expense_categories.id', '=', 'expenses.expense_category_id')
            ->join('outlets', 'outlets.id', '=', 'expenses.outlet_id')
            ->leftJoin('users as creators', 'creators.id', '=', 'expenses.created_by')
            ->leftJoin('users as approvers', 'approvers.id', '=', 'expenses.approved_by');

        return $query
            ->selectRaw('expenses.id')
            ->selectRaw('expenses.expense_date')
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('expense_categories.id as expense_category_id')
            ->selectRaw('expense_categories.name as expense_category_name')
            ->selectRaw('expenses.amount')
            ->selectRaw('expenses.status')
            ->selectRaw('expenses.description')
            ->selectRaw('creators.name as created_by_name')
            ->selectRaw('approvers.name as approved_by_name')
            ->where('expenses.status', 'approved')
            ->when(!empty($filters['outlet_id']), fn ($query) => $query->where('expenses.outlet_id', (int) $filters['outlet_id']))
            ->when(!empty($filters['expense_category_id']), fn ($query) => $query->where('expenses.expense_category_id', (int) $filters['expense_category_id']))
            ->when(!empty($filters['date_from']), fn ($query) => $query->whereDate('expenses.expense_date', '>=', $filters['date_from']))
            ->when(!empty($filters['date_until']), fn ($query) => $query->whereDate('expenses.expense_date', '<=', $filters['date_until']))
            ->orderByDesc('expenses.expense_date')
            ->get()
            ->map(fn ($row) => [
                'id' => (int) $row->id,
                'expense_date' => $row->expense_date,
                'outlet_id' => (int) $row->outlet_id,
                'outlet_name' => $row->outlet_name,
                'expense_category_id' => (int) $row->expense_category_id,
                'expense_category_name' => $row->expense_category_name,
                'amount' => (float) $row->amount,
                'status' => $row->status,
                'description' => $row->description,
                'created_by_name' => $row->created_by_name,
                'approved_by_name' => $row->approved_by_name,
            ]);
    }

    public function shiftSummary(array $filters): Collection
    {
        $query = DB::table('cashier_shifts')
            ->join('outlets', 'outlets.id', '=', 'cashier_shifts.outlet_id')
            ->join('users', 'users.id', '=', 'cashier_shifts.user_id')
            ->leftJoin('orders', 'orders.cashier_shift_id', '=', 'cashier_shifts.id');

        return $query
            ->selectRaw('cashier_shifts.id')
            ->selectRaw('cashier_shifts.shift_number')
            ->selectRaw('cashier_shifts.status')
            ->selectRaw('cashier_shifts.opened_at')
            ->selectRaw('cashier_shifts.closed_at')
            ->selectRaw('outlets.id as outlet_id')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('users.id as cashier_id')
            ->selectRaw('users.name as cashier_name')
            ->selectRaw('cashier_shifts.opening_cash')
            ->selectRaw('cashier_shifts.expected_cash')
            ->selectRaw('cashier_shifts.closing_cash')
            ->selectRaw('cashier_shifts.cash_difference')
            ->selectRaw('COUNT(orders.id) as total_orders')
            ->selectRaw('COALESCE(SUM(orders.grand_total), 0) as grand_total')
            ->when(!empty($filters['outlet_id']), fn ($query) => $query->where('cashier_shifts.outlet_id', (int) $filters['outlet_id']))
            ->when(!empty($filters['cashier_id']), fn ($query) => $query->where('cashier_shifts.user_id', (int) $filters['cashier_id']))
            ->when(!empty($filters['status']), fn ($query) => $query->where('cashier_shifts.status', $filters['status']))
            ->when(!empty($filters['date_from']), fn ($query) => $query->whereDate('cashier_shifts.opened_at', '>=', $filters['date_from']))
            ->when(!empty($filters['date_until']), fn ($query) => $query->whereDate('cashier_shifts.opened_at', '<=', $filters['date_until']))
            ->groupBy(
                'cashier_shifts.id',
                'cashier_shifts.shift_number',
                'cashier_shifts.status',
                'cashier_shifts.opened_at',
                'cashier_shifts.closed_at',
                'outlets.id',
                'outlets.name',
                'users.id',
                'users.name',
                'cashier_shifts.opening_cash',
                'cashier_shifts.expected_cash',
                'cashier_shifts.closing_cash',
                'cashier_shifts.cash_difference'
            )
            ->orderByDesc('cashier_shifts.id')
            ->get()
            ->map(fn ($row) => [
                'id' => (int) $row->id,
                'shift_number' => $row->shift_number,
                'status' => $row->status,
                'opened_at' => $row->opened_at,
                'closed_at' => $row->closed_at,
                'outlet_id' => (int) $row->outlet_id,
                'outlet_name' => $row->outlet_name,
                'cashier_id' => (int) $row->cashier_id,
                'cashier_name' => $row->cashier_name,
                'opening_cash' => (float) $row->opening_cash,
                'expected_cash' => (float) $row->expected_cash,
                'closing_cash' => (float) $row->closing_cash,
                'cash_difference' => (float) $row->cash_difference,
                'total_orders' => (int) $row->total_orders,
                'grand_total' => (float) $row->grand_total,
            ]);
    }

    public function orderDetails(array $filters): LengthAwarePaginator
    {
        $query = DB::table('orders')
            ->leftJoin('outlets', 'outlets.id', '=', 'orders.outlet_id')
            ->leftJoin('users', 'users.id', '=', 'orders.created_by')
            ->leftJoin('customers', 'customers.id', '=', 'orders.customer_id');

        $this->applyOrderFilters($query, $filters);

        return $query
            ->selectRaw('orders.id')
            ->selectRaw('orders.order_number')
            ->selectRaw('orders.queue_number')
            ->selectRaw('orders.order_channel')
            ->selectRaw('orders.order_status')
            ->selectRaw('orders.payment_status')
            ->selectRaw('orders.subtotal')
            ->selectRaw('orders.discount_amount')
            ->selectRaw('orders.tax_amount')
            ->selectRaw('orders.service_charge_amount')
            ->selectRaw('orders.grand_total')
            ->selectRaw('orders.paid_total')
            ->selectRaw('orders.change_amount')
            ->selectRaw('orders.ordered_at')
            ->selectRaw('orders.completed_at')
            ->selectRaw('outlets.name as outlet_name')
            ->selectRaw('users.name as cashier_name')
            ->selectRaw('customers.name as customer_name')
            ->orderByDesc('orders.ordered_at')
            ->paginate((int) ($filters['per_page'] ?? 10));
    }

    private function applyOrderFilters(Builder $query, array $filters): void
    {
        $query
            ->when(!empty($filters['outlet_id']), fn ($query) => $query->where('orders.outlet_id', (int) $filters['outlet_id']))
            ->when(!empty($filters['date_from']), fn ($query) => $query->whereDate('orders.ordered_at', '>=', $filters['date_from']))
            ->when(!empty($filters['date_until']), fn ($query) => $query->whereDate('orders.ordered_at', '<=', $filters['date_until']));
    }

    private function dateGroupExpression(string $column, string $groupBy): string
    {
        return match ($groupBy) {
            'day' => "DATE({$column})",
            'week' => "YEARWEEK({$column}, 1)",
            'month' => "DATE_FORMAT({$column}, '%Y-%m')",
            default => throw new InvalidArgumentException('group_by tidak valid.'),
        };
    }

    private function normalizedFilters(array $filters): array
    {
        return [
            'outlet_id' => isset($filters['outlet_id']) ? (int) $filters['outlet_id'] : null,
            'date_from' => $filters['date_from'] ?? null,
            'date_until' => $filters['date_until'] ?? null,
            'generated_at' => Carbon::now('Asia/Jakarta')->toDateTimeString(),
        ];
    }
}
