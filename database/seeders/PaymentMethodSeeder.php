<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            [
                'code' => 'cash',
                'name' => 'Tunai',
                'type' => 'cash',
                'is_active' => true,
            ],
            [
                'code' => 'qris',
                'name' => 'QRIS',
                'type' => 'qris',
                'is_active' => true,
            ],
            [
                'code' => 'transfer',
                'name' => 'Transfer Bank',
                'type' => 'transfer',
                'is_active' => true,
            ],
        ];

        foreach ($rows as $row) {
            PaymentMethod::query()->updateOrCreate(
                ['code' => $row['code']],
                $row
            );
        }
    }
}
