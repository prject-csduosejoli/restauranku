<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'role_name' => 'admin',
                'description' => 'administrator role with full access to the system.',
            ],
            [
                'role_name' => 'cashier',
                'description' => 'kasir role with access to order management and customer service features.',
            ],
            [
                'role_name' => 'chef',
                'description' => 'koki role with access to kitchen management and recipe features.',
            ],
            [
                'role_name' => 'costomer',
                'description' => 'Pelanggan user role with limited access to the system.',
            ],
        ];
        DB::table('roles')->insert($roles);
    }
}
