<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $superadmin = Role::findOrCreate('superadmin', 'sanctum');
        $adminPusat = Role::findOrCreate('admin_pusat', 'sanctum');
        $owner = Role::findOrCreate('owner', 'sanctum');

        $allPermissions = Permission::query()->pluck('name')->all();

        $superadmin->syncPermissions($allPermissions);
        $adminPusat->syncPermissions([
            'users.view',
            'users.create',
            'users.update',
            'roles.view',
            'permissions.view',
        ]);
        $owner->syncPermissions([
            'users.view',
            'roles.view',
            'permissions.view',
        ]);
    }
}
