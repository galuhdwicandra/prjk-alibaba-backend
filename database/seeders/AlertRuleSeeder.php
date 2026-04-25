<?php

namespace Database\Seeders;

use App\Models\AlertRule;
use Illuminate\Database\Seeder;

class AlertRuleSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            [
                'outlet_id' => null,
                'name' => 'Stok bahan baku menipis',
                'alert_type' => 'low_stock',
                'severity' => 'high',
                'threshold_minutes' => null,
                'days_before' => null,
                'threshold_value' => null,
                'threshold_unit' => 'qty',
                'recipient_roles' => null,
                'channels' => ['database'],
                'metadata' => null,
                'is_active' => true,
            ],
            [
                'outlet_id' => null,
                'name' => 'Shift kasir belum ditutup',
                'alert_type' => 'shift_not_closed',
                'severity' => 'high',
                'threshold_minutes' => 720,
                'days_before' => null,
                'threshold_value' => 720,
                'threshold_unit' => 'minutes',
                'recipient_roles' => null,
                'channels' => ['database'],
                'metadata' => null,
                'is_active' => true,
            ],
            [
                'outlet_id' => null,
                'name' => 'Voucher segera berakhir',
                'alert_type' => 'promo_expiring',
                'severity' => 'medium',
                'threshold_minutes' => null,
                'days_before' => 3,
                'threshold_value' => 3,
                'threshold_unit' => 'days',
                'recipient_roles' => null,
                'channels' => ['database'],
                'metadata' => null,
                'is_active' => true,
            ],
            [
                'outlet_id' => null,
                'name' => 'Order terlambat diproses',
                'alert_type' => 'order_overdue',
                'severity' => 'critical',
                'threshold_minutes' => 30,
                'days_before' => null,
                'threshold_value' => 30,
                'threshold_unit' => 'minutes',
                'recipient_roles' => null,
                'channels' => ['database'],
                'metadata' => null,
                'is_active' => true,
            ],
        ];

        foreach ($rows as $row) {
            AlertRule::query()->updateOrCreate(
                [
                    'outlet_id' => $row['outlet_id'],
                    'alert_type' => $row['alert_type'],
                ],
                $row
            );
        }
    }
}
