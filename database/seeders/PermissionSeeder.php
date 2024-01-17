<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            "save_category",
            "delete_category",
            "view_category",
            "save_product",
            "delete_product",
            "view_product",
            "assign_permission",
        ];

        for ($i=0; $i<sizeof($permissions);$i++) {
            DB::table('permissions')->insert([
                'name' => $permissions[$i]
            ]);
        }
    }
}
