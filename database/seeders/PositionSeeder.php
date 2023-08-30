<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $current_time = date("Y-m-d H:i:s");
        $data = [
            [
                "name" => "Manager",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Supervisor",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Staff",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ]
        ];
        foreach ($data as $val) {
            DB::table("positions")->insert($val);
        }
    }
}
