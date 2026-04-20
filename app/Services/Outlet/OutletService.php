<?php

namespace App\Services\Outlet;

use App\Models\Outlet;
use Illuminate\Support\Facades\DB;

class OutletService
{
    public function create(array $payload): Outlet
    {
        return DB::transaction(function () use ($payload) {
            $outlet = Outlet::create($payload);

            $outlet->setting()->create([
                'tax_percent' => 0,
                'service_charge_percent' => 0,
                'currency_code' => 'IDR',
                'timezone' => 'Asia/Jakarta',
                'allow_negative_stock' => false,
                'low_stock_notification_enabled' => true,
            ]);

            return $outlet->load('setting');
        });
    }

    public function update(Outlet $outlet, array $payload): Outlet
    {
        return DB::transaction(function () use ($outlet, $payload) {
            $outlet->update($payload);

            return $outlet->load('setting');
        });
    }
}
