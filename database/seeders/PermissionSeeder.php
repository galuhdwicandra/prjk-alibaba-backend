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

            'units.view',
            'units.create',
            'units.update',
            'units.delete',

            'unit_conversions.view',
            'unit_conversions.create',
            'unit_conversions.update',
            'unit_conversions.delete',

            'raw_material_categories.view',
            'raw_material_categories.create',
            'raw_material_categories.update',
            'raw_material_categories.delete',

            'raw_materials.view',
            'raw_materials.create',
            'raw_materials.update',
            'raw_materials.delete',

            'outlet_material_stocks.view',
            'outlet_material_stocks.update',

            'product_boms.view',
            'product_boms.create',
            'product_boms.update',
            'product_boms.delete',

            'suppliers.view',
            'suppliers.create',
            'suppliers.update',
            'suppliers.delete',

            'purchase_orders.view',
            'purchase_orders.create',
            'purchase_orders.update',
            'purchase_orders.delete',
            'purchase_orders.approve',
            'purchase_orders.cancel',

            'goods_receipts.view',
            'goods_receipts.create',
            'goods_receipts.update',
            'goods_receipts.delete',
            'goods_receipts.post',
            'goods_receipts.cancel',

            'stock_movements.view',

            'stock_adjustments.view',
            'stock_adjustments.create',
            'stock_adjustments.update',
            'stock_adjustments.delete',

            'stock_transfers.view',
            'stock_transfers.create',
            'stock_transfers.update',
            'stock_transfers.delete',
            'stock_transfers.send',
            'stock_transfers.receive',
            'stock_transfers.cancel',

            'stock_opnames.view',
            'stock_opnames.create',
            'stock_opnames.update',
            'stock_opnames.delete',
            'stock_opnames.post',
            'stock_opnames.cancel',

            'payment_methods.view',
            'payment_methods.create',
            'payment_methods.update',
            'payment_methods.delete',

            'payments.view',
            'payments.create',
            'payments.cancel',

            'cashier_shifts.view',
            'cashier_shifts.create',
            'cashier_shifts.update',
            'cashier_shifts.close',

            'cash_movements.view',
            'cash_movements.create',

            'orders.view',
            'orders.create',
            'orders.update',
            'orders.delete',
            'orders.cancel',

            'reports.view',
            'reports.export',

            'dashboard.view',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }
    }
}
