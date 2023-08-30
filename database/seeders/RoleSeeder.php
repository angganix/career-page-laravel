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
        $current_time = date("Y-m-d H:i:s");
        $data = [
            [
                "name" => "Administrator",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "HRD",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Manager",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Staff",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
        ];
        foreach ($data as $val) {
            DB::table("roles")->insert($val);
        }
    }
}
