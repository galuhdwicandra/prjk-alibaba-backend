<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class NotificationPermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'notifications.view',
            'notifications.update',
            'notifications.delete',
            'notifications.resolve',
            'notifications.scan',

            'alert_rules.view',
            'alert_rules.create',
            'alert_rules.update',
            'alert_rules.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }

        foreach (['superadmin', 'admin_pusat', 'admin_outlet', 'owner'] as $roleName) {
            Role::findOrCreate($roleName, 'sanctum')->givePermissionTo($permissions);
        }
    }
}
