<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ExpensePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'expense_categories.view',
            'expense_categories.create',
            'expense_categories.update',
            'expense_categories.delete',

            'expenses.view',
            'expenses.create',
            'expenses.update',
            'expenses.delete',
            'expenses.submit',
            'expenses.approve',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }

        Role::findOrCreate('superadmin', 'sanctum')->givePermissionTo($permissions);

        Role::findOrCreate('admin_pusat', 'sanctum')->givePermissionTo($permissions);

        Role::findOrCreate('admin_outlet', 'sanctum')->givePermissionTo([
            'expense_categories.view',
            'expenses.view',
            'expenses.create',
            'expenses.update',
            'expenses.delete',
            'expenses.submit',
        ]);

        Role::findOrCreate('kasir', 'sanctum')->givePermissionTo([
            'expense_categories.view',
            'expenses.view',
            'expenses.create',
            'expenses.update',
            'expenses.submit',
        ]);

        Role::findOrCreate('owner', 'sanctum')->givePermissionTo([
            'expense_categories.view',
            'expenses.view',
        ]);
    }
}
