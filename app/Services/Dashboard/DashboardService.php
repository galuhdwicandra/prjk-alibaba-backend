<?php

namespace App\Services\Dashboard;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DashboardService
{
    public function overview(array $filters, User $user): array
    {
        $limit = (int) ($filters['limit'] ?? 5);
        $overdueMinutes = (int) ($filters['overdue_minutes'] ?? 30);

        return [
            'summary' => $this->summary($filters, $user),
            'top_products' => $this->topProducts($filters, $user, $limit),
            'best_outlets' => $this->bestOutlets($filters, $user, $limit),
            'critical_stocks' => $this->criticalStocks($filters, $user, $limit),
            'pending_orders' => $this->pendingOrders($filters, $user, $limit),
            'overdue_orders' => $this->overdueOrders($filters, $user, $limit, $overdueMinutes),
            'cash_discrepancies' => $this->cashDiscrepancies($filters, $user, $limit),
            'meta' => [
                'filters' => [
                    'outlet_id' => $filters['outlet_id'] ?? null,
                    'date_from' => $filters['date_from'] ?? null,
                    'date_until' => $filters['date_until'] ?? null,
                    'overdue_minutes' => $overdueMinutes,
                    'limit' => $limit,
                ],
                'generated_at' => now()->toISOString(),
            ],
        ];
    }

    public function summary(array $filters, User $user): array
    {
        $today = Carbon::today();
        $monthStart = Carbon::now()->startOfMonth();

        $todaySalesQuery = DB::table('orders')
            ->whereDate('ordered_at', $today)
            ->where('order_status', 'completed')
            ->where('payment_status', 'paid');

        $this->applyOutletScope($todaySalesQuery, $filters, $user, 'orders.outlet_id');

        $monthSalesQuery = DB::table('orders')
            ->where('ordered_at', '>=', $monthStart)
            ->where('order_status', 'completed')
            ->where('payment_status', 'paid');

        $this->applyOutletScope($monthSalesQuery, $filters, $user, 'orders.outlet_id');

        $pendingOrdersQuery = DB::table('orders')
            ->whereIn('order_status', ['pending', 'confirmed', 'preparing', 'ready'])
            ->whereNotIn('payment_status', ['cancelled', 'refunded']);

        $this->applyOutletScope($pendingOrdersQuery, $filters, $user, 'orders.outlet_id');

        $overdueOrdersQuery = DB::table('orders')
            ->whereIn('order_status', ['pending', 'confirmed', 'preparing'])
            ->where('ordered_at', '<=', now()->subMinutes((int) ($filters['overdue_minutes'] ?? 30)));

        $this->applyOutletScope($overdueOrdersQuery, $filters, $user, 'orders.outlet_id');

        $criticalStocksQuery = DB::table('outlet_material_stocks')
            ->join('raw_materials', 'raw_materials.id', '=', 'outlet_material_stocks.raw_material_id')
            ->whereColumn('outlet_material_stocks.qty_on_hand', '<=', 'raw_materials.minimum_stock')
            ->where('raw_materials.is_active', true);

        $this->applyOutletScope($criticalStocksQuery, $filters, $user, 'outlet_material_stocks.outlet_id');

        $cashDiscrepancyQuery = DB::table('cashier_shifts')
            ->where('status', 'closed')
            ->where('cash_difference', '!=', 0);

        $this->applyDateRange($cashDiscrepancyQuery, $filters, 'closed_at');
        $this->applyOutletScope($cashDiscrepancyQuery, $filters, $user, 'cashier_shifts.outlet_id');

        return [
            'today_revenue' => (float) $todaySalesQuery->sum('grand_total'),
            'today_orders' => (int) $todaySalesQuery->count(),
            'month_revenue' => (float) $monthSalesQuery->sum('grand_total'),
            'month_orders' => (int) $monthSalesQuery->count(),
            'pending_orders_count' => (int) $pendingOrdersQuery->count(),
            'overdue_orders_count' => (int) $overdueOrdersQuery->count(),
            'critical_stocks_count' => (int) $criticalStocksQuery->count(),
            'cash_discrepancies_count' => (int) $cashDiscrepancyQuery->count(),
            'cash_discrepancies_total' => (float) $cashDiscrepancyQuery->sum('cash_difference'),
        ];
    }

    public function salesTrend(array $filters, User $user): array
    {
        $query = DB::table('orders')
            ->selectRaw('DATE(ordered_at) as sales_date')
            ->selectRaw('COUNT(*) as total_orders')
            ->selectRaw('COALESCE(SUM(grand_total), 0) as total_revenue')
            ->where('order_status', 'completed')
            ->where('payment_status', 'paid');

        $this->applyDateRange($query, $filters, 'orders.ordered_at');
        $this->applyOutletScope($query, $filters, $user, 'orders.outlet_id');

        return $query
            ->groupByRaw('DATE(ordered_at)')
            ->orderByRaw('DATE(ordered_at)')
            ->get()
            ->map(fn ($row) => [
                'sales_date' => $row->sales_date,
                'total_orders' => (int) $row->total_orders,
                'total_revenue' => (float) $row->total_revenue,
            ])
            ->all();
    }

    public function topProducts(array $filters, User $user, int $limit = 5): array
    {
        $query = DB::table('order_items')
            ->join('orders', 'orders.id', '=', 'order_items.order_id')
            ->select('order_items.product_id', 'order_items.product_name_snapshot')
            ->selectRaw('COALESCE(SUM(order_items.qty), 0) as total_qty')
            ->selectRaw('COALESCE(SUM(order_items.line_total), 0) as total_sales')
            ->where('orders.order_status', 'completed')
            ->where('orders.payment_status', 'paid');

        $this->applyDateRange($query, $filters, 'orders.ordered_at');
        $this->applyOutletScope($query, $filters, $user, 'orders.outlet_id');

        return $query
            ->groupBy('order_items.product_id', 'order_items.product_name_snapshot')
            ->orderByDesc('total_qty')
            ->limit($limit)
            ->get()
            ->map(fn ($row) => [
                'product_id' => $row->product_id ? (int) $row->product_id : null,
                'product_name' => $row->product_name_snapshot,
                'total_qty' => (float) $row->total_qty,
                'total_sales' => (float) $row->total_sales,
            ])
            ->all();
    }

    public function bestOutlets(array $filters, User $user, int $limit = 5): array
    {
        $query = DB::table('orders')
            ->join('outlets', 'outlets.id', '=', 'orders.outlet_id')
            ->select('outlets.id', 'outlets.code', 'outlets.name')
            ->selectRaw('COUNT(orders.id) as total_orders')
            ->selectRaw('COALESCE(SUM(orders.grand_total), 0) as total_revenue')
            ->where('orders.order_status', 'completed')
            ->where('orders.payment_status', 'paid');

        $this->applyDateRange($query, $filters, 'orders.ordered_at');
        $this->applyOutletScope($query, $filters, $user, 'orders.outlet_id');

        return $query
            ->groupBy('outlets.id', 'outlets.code', 'outlets.name')
            ->orderByDesc('total_revenue')
            ->limit($limit)
            ->get()
            ->map(fn ($row) => [
                'outlet_id' => (int) $row->id,
                'outlet_code' => $row->code,
                'outlet_name' => $row->name,
                'total_orders' => (int) $row->total_orders,
                'total_revenue' => (float) $row->total_revenue,
            ])
            ->all();
    }

    public function criticalStocks(array $filters, User $user, int $limit = 10): array
    {
        $query = DB::table('outlet_material_stocks')
            ->join('outlets', 'outlets.id', '=', 'outlet_material_stocks.outlet_id')
            ->join('raw_materials', 'raw_materials.id', '=', 'outlet_material_stocks.raw_material_id')
            ->leftJoin('units', 'units.id', '=', 'raw_materials.unit_id')
            ->select(
                'outlets.id as outlet_id',
                'outlets.code as outlet_code',
                'outlets.name as outlet_name',
                'raw_materials.id as raw_material_id',
                'raw_materials.name as raw_material_name',
                'raw_materials.minimum_stock',
                'outlet_material_stocks.qty_on_hand',
                'outlet_material_stocks.qty_reserved',
                'units.code as unit_code'
            )
            ->where('raw_materials.is_active', true)
            ->whereColumn('outlet_material_stocks.qty_on_hand', '<=', 'raw_materials.minimum_stock');

        $this->applyOutletScope($query, $filters, $user, 'outlet_material_stocks.outlet_id');

        return $query
            ->orderBy('outlet_material_stocks.qty_on_hand')
            ->limit($limit)
            ->get()
            ->map(fn ($row) => [
                'outlet_id' => (int) $row->outlet_id,
                'outlet_code' => $row->outlet_code,
                'outlet_name' => $row->outlet_name,
                'raw_material_id' => (int) $row->raw_material_id,
                'raw_material_name' => $row->raw_material_name,
                'qty_on_hand' => (float) $row->qty_on_hand,
                'qty_reserved' => (float) $row->qty_reserved,
                'minimum_stock' => (float) $row->minimum_stock,
                'unit_code' => $row->unit_code,
            ])
            ->all();
    }

    public function pendingOrders(array $filters, User $user, int $limit = 10): array
    {
        $query = DB::table('orders')
            ->join('outlets', 'outlets.id', '=', 'orders.outlet_id')
            ->leftJoin('users', 'users.id', '=', 'orders.created_by')
            ->select(
                'orders.id',
                'orders.order_number',
                'orders.queue_number',
                'orders.order_channel',
                'orders.order_status',
                'orders.payment_status',
                'orders.grand_total',
                'orders.ordered_at',
                'outlets.id as outlet_id',
                'outlets.code as outlet_code',
                'outlets.name as outlet_name',
                'users.name as cashier_name'
            )
            ->whereIn('orders.order_status', ['pending', 'confirmed', 'preparing', 'ready'])
            ->whereNotIn('orders.payment_status', ['cancelled', 'refunded']);

        $this->applyDateRange($query, $filters, 'orders.ordered_at');
        $this->applyOutletScope($query, $filters, $user, 'orders.outlet_id');

        return $query
            ->orderBy('orders.ordered_at')
            ->limit($limit)
            ->get()
            ->map(fn ($row) => $this->formatOrderRow($row))
            ->all();
    }

    public function overdueOrders(array $filters, User $user, int $limit = 10, int $overdueMinutes = 30): array
    {
        $query = DB::table('orders')
            ->join('outlets', 'outlets.id', '=', 'orders.outlet_id')
            ->leftJoin('users', 'users.id', '=', 'orders.created_by')
            ->select(
                'orders.id',
                'orders.order_number',
                'orders.queue_number',
                'orders.order_channel',
                'orders.order_status',
                'orders.payment_status',
                'orders.grand_total',
                'orders.ordered_at',
                'outlets.id as outlet_id',
                'outlets.code as outlet_code',
                'outlets.name as outlet_name',
                'users.name as cashier_name'
            )
            ->whereIn('orders.order_status', ['pending', 'confirmed', 'preparing'])
            ->where('orders.ordered_at', '<=', now()->subMinutes($overdueMinutes));

        $this->applyDateRange($query, $filters, 'orders.ordered_at');
        $this->applyOutletScope($query, $filters, $user, 'orders.outlet_id');

        return $query
            ->orderBy('orders.ordered_at')
            ->limit($limit)
            ->get()
            ->map(fn ($row) => $this->formatOrderRow($row))
            ->all();
    }

    public function cashDiscrepancies(array $filters, User $user, int $limit = 10): array
    {
        $query = DB::table('cashier_shifts')
            ->join('outlets', 'outlets.id', '=', 'cashier_shifts.outlet_id')
            ->join('users', 'users.id', '=', 'cashier_shifts.user_id')
            ->select(
                'cashier_shifts.id',
                'cashier_shifts.shift_number',
                'cashier_shifts.opened_at',
                'cashier_shifts.closed_at',
                'cashier_shifts.expected_cash',
                'cashier_shifts.closing_cash',
                'cashier_shifts.cash_difference',
                'outlets.id as outlet_id',
                'outlets.code as outlet_code',
                'outlets.name as outlet_name',
                'users.name as cashier_name'
            )
            ->where('cashier_shifts.status', 'closed')
            ->where('cashier_shifts.cash_difference', '!=', 0);

        $this->applyDateRange($query, $filters, 'cashier_shifts.closed_at');
        $this->applyOutletScope($query, $filters, $user, 'cashier_shifts.outlet_id');

        return $query
            ->orderByDesc('cashier_shifts.closed_at')
            ->limit($limit)
            ->get()
            ->map(fn ($row) => [
                'cashier_shift_id' => (int) $row->id,
                'shift_number' => $row->shift_number,
                'outlet_id' => (int) $row->outlet_id,
                'outlet_code' => $row->outlet_code,
                'outlet_name' => $row->outlet_name,
                'cashier_name' => $row->cashier_name,
                'opened_at' => $row->opened_at,
                'closed_at' => $row->closed_at,
                'expected_cash' => (float) $row->expected_cash,
                'closing_cash' => (float) $row->closing_cash,
                'cash_difference' => (float) $row->cash_difference,
            ])
            ->all();
    }

    private function formatOrderRow(object $row): array
    {
        return [
            'order_id' => (int) $row->id,
            'order_number' => $row->order_number,
            'queue_number' => $row->queue_number,
            'order_channel' => $row->order_channel,
            'order_status' => $row->order_status,
            'payment_status' => $row->payment_status,
            'grand_total' => (float) $row->grand_total,
            'ordered_at' => $row->ordered_at,
            'outlet_id' => (int) $row->outlet_id,
            'outlet_code' => $row->outlet_code,
            'outlet_name' => $row->outlet_name,
            'cashier_name' => $row->cashier_name,
        ];
    }

    private function applyDateRange(Builder $query, array $filters, string $column): void
    {
        if (!empty($filters['date_from'])) {
            $query->where($column, '>=', Carbon::parse($filters['date_from'])->startOfDay());
        }

        if (!empty($filters['date_until'])) {
            $query->where($column, '<=', Carbon::parse($filters['date_until'])->endOfDay());
        }
    }

    private function applyOutletScope(Builder $query, array $filters, User $user, string $column): void
    {
        $allowedOutletIds = $this->allowedOutletIds($user);

        if (!empty($filters['outlet_id'])) {
            $requestedOutletId = (int) $filters['outlet_id'];

            if ($allowedOutletIds !== null && !in_array($requestedOutletId, $allowedOutletIds, true)) {
                throw new HttpException(403, 'Anda tidak memiliki akses ke outlet ini.');
            }

            $query->where($column, $requestedOutletId);

            return;
        }

        if ($allowedOutletIds !== null) {
            if ($allowedOutletIds === []) {
                $query->whereRaw('1 = 0');

                return;
            }

            $query->whereIn($column, $allowedOutletIds);
        }
    }

    private function allowedOutletIds(User $user): ?array
    {
        if ($user->hasAnyRole(['superadmin', 'admin_pusat', 'owner'])) {
            return null;
        }

        return DB::table('user_outlet_accesses')
            ->where('user_id', $user->id)
            ->pluck('outlet_id')
            ->map(fn ($id) => (int) $id)
            ->all();
    }
}
