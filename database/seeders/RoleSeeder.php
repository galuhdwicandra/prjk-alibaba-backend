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
            'product_categories.view',
            'product_categories.create',
            'product_categories.update',
            'product_categories.delete',
            'products.view',
            'products.create',
            'products.update',
            'products.delete',
            'product_variants.view',
            'product_variants.create',
            'product_variants.update',
            'product_modifiers.view',
            'product_modifiers.create',
            'product_modifiers.update',
            'product_bundles.view',
            'product_bundles.create',
            'product_bundles.update',
            'customers.view',
            'customers.create',
            'customers.update',
            'customers.delete',
            'vouchers.view',
            'vouchers.create',
            'vouchers.update',
            'vouchers.delete',
            'promotions.view',
            'promotions.create',
            'promotions.update',
            'promotions.delete',
        ]);

        $adminOutlet->syncPermissions([
            'users.view',
            'outlets.view',
            'outlet_settings.view',
            'outlet_settings.update',
            'product_categories.view',
            'products.view',
            'products.create',
            'products.update',
            'product_variants.view',
            'product_variants.create',
            'product_variants.update',
            'product_modifiers.view',
            'product_modifiers.create',
            'product_modifiers.update',
            'product_bundles.view',
            'product_bundles.create',
            'product_bundles.update',
            'customers.view',
            'customers.create',
            'customers.update',
            'vouchers.view',
            'promotions.view',
        ]);

        $owner->syncPermissions([
            'users.view',
            'roles.view',
            'permissions.view',
            'outlets.view',
            'outlet_settings.view',
            'system_settings.view',
            'product_categories.view',
            'products.view',
            'product_variants.view',
            'product_modifiers.view',
            'product_bundles.view',
            'customers.view',
            'vouchers.view',
            'promotions.view',
        ]);
    }
}