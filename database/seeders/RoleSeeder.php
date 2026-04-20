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
        $adminOutlet = Role::findOrCreate('admin_outlet', 'sanctum');
        $owner = Role::findOrCreate('owner', 'sanctum');

        $allPermissions = Permission::query()->pluck('name')->all();

        $superadmin->syncPermissions($allPermissions);

        $adminPusat->syncPermissions([
            'users.view',
            'users.create',
            'users.update',
            'roles.view',
            'permissions.view',
            'outlets.view',
            'outlets.create',
            'outlets.update',
            'outlet_settings.view',
            'outlet_settings.update',
            'system_settings.view',
            'system_settings.update',
        ]);

        $adminOutlet->syncPermissions([
            'users.view',
            'outlets.view',
            'outlet_settings.view',
            'outlet_settings.update',
        ]);

        $owner->syncPermissions([
            'users.view',
            'roles.view',
            'permissions.view',
            'outlets.view',
            'outlet_settings.view',
            'system_settings.view',
        ]);
    }
}