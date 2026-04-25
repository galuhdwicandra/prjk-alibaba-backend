<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ActivityLogPermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'activity_logs.view',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }

        foreach (['superadmin', 'admin_pusat', 'owner'] as $roleName) {
            Role::findOrCreate($roleName, 'sanctum')->givePermissionTo($permissions);
        }
    }
}
