<?php

namespace Database\Seeders;

use App\Models\ExpenseCategory;
use Illuminate\Database\Seeder;

class ExpenseCategorySeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            'Gas',
            'Listrik',
            'Kebersihan',
            'Transport',
            'Pembelian Kecil',
            'Perbaikan Outlet',
            'Operasional Lainnya',
        ];

        foreach ($rows as $name) {
            ExpenseCategory::query()->updateOrCreate(
                ['name' => $name],
                ['is_active' => true]
            );
        }
    }
}
