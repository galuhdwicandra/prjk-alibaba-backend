<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DeliveryPermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'couriers.view',
            'couriers.create',
            'couriers.update',
            'couriers.delete',
            'deliveries.view',
            'deliveries.create',
            'deliveries.update',
            'deliveries.delete',
            'deliveries.assign',
            'deliveries.update_status',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission, 'sanctum');
        }
    }
}
