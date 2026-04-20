<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'superadmin@chickenalibaba.test'],
            [
                'name' => 'Super Admin',
                'phone' => '081234567890',
                'username' => 'superadmin',
                'password' => 'password123',
                'is_active' => true,
                'user_type' => 'superadmin',
            ]
        );

        $user->syncRoles(['superadmin']);
    }
}
