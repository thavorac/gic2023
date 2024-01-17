<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permission_roles')->insert([
            'role_id' => 1,
            'permission_id' => 1
        ]);
        DB::table('permission_roles')->insert([
            'role_id' => 1,
            'permission_id' => 2
        ]);
        DB::table('permission_roles')->insert([
            'role_id' => 2,
            'permission_id' => 3
        ]);
        DB::table('permission_roles')->insert([
            'role_id' => 2,
            'permission_id' => 4
        ]);
    }
}
