<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $current_time = date("Y-m-d H:i:s");
        $data = [
            [
                "name" => "IT",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Finance",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Marketing",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Engineering",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
        ];
        foreach ($data as $val) {
            DB::table("divisions")->insert($val);
        }
    }
}
