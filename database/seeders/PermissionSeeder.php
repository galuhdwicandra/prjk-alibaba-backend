<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'users.view',
            'users.create',
            'users.update',
            'users.delete',

            'roles.view',
            'roles.create',
            'roles.update',
            'roles.delete',

            'permissions.view',
            'permissions.create',
            'permissions.update',
            'permissions.delete',

            'outlets.view',
            'outlets.create',
            'outlets.update',
            'outlets.delete',

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
            'product_variants.delete',

            'product_modifiers.view',
            'product_modifiers.create',
            'product_modifiers.update',
            'product_modifiers.delete',

            'product_bundles.view',
            'product_bundles.create',
            'product_bundles.update',
            'product_bundles.delete',

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
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }
    }
}