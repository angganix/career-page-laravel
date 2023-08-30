<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $current_time = date("Y-m-d H:i:s");
        $data = [
            [
                "name" => "Medan",
                "address" => "Jalan kenanga no. 123",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Bandung",
                "address" => "Jalan bunga bangsa no. 77",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Jakarta",
                "address" => "Jl. Parahyangan no. 122",
                "created_at" => $current_time,
                "updated_at" => $current_time
            ]
        ];
        foreach ($data as $val) {
            DB::table("locations")->insert($val);
        }
    }
}
