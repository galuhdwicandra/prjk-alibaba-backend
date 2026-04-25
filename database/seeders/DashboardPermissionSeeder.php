<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardPermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'dashboard.view',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }

        foreach (['superadmin', 'admin_pusat', 'admin_outlet', 'owner'] as $roleName) {
            Role::findOrCreate($roleName, 'sanctum')->givePermissionTo($permissions);
        }
    }
}
