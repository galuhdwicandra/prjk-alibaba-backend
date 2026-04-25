<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class KitchenRolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $kitchenPermissions = [
            'kitchen_tickets.view',
            'kitchen_tickets.create',
            'kitchen_tickets.update',
            'kitchen_tickets.print',
            'kitchen_tickets.start_preparing',
            'kitchen_tickets.mark_ready',
            'kitchen_tickets.serve',
            'kitchen_tickets.cancel',
        ];

        $dapur = Role::findByName('dapur', 'sanctum');
        $dapur->givePermissionTo($kitchenPermissions);

        foreach (['superadmin', 'admin_pusat', 'admin_outlet'] as $roleName) {
            $role = Role::findByName($roleName, 'sanctum');
            $role->givePermissionTo(array_merge($kitchenPermissions, [
                'kitchen_tickets.delete',
            ]));
        }
    }
}
