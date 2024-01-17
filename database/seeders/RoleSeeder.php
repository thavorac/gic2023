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
            "Supplier",
            "Customer",
            "Admin",
        ];

        for ($i=0; $i<sizeof($roles);$i++) {
            DB::table('roles')->insert([
                'name' => $roles[$i]
            ]);
        }
    }
}
