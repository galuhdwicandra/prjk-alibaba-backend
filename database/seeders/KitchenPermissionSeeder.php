<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class KitchenPermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'kitchen_tickets.view',
            'kitchen_tickets.create',
            'kitchen_tickets.update',
            'kitchen_tickets.delete',
            'kitchen_tickets.print',
            'kitchen_tickets.start_preparing',
            'kitchen_tickets.mark_ready',
            'kitchen_tickets.serve',
            'kitchen_tickets.cancel',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }
    }
}
