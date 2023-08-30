<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $current_time = date("Y-m-d H:i:s");
        DB::table("users")->insert([
            "name" => "Administrator",
            "email" => "angganix@gmail.com",
            "email_verified_at" => $current_time,
            "password" => Hash::make("admin123"),
            "role_id" => 1,
            "phone" => "085951218906",
            "created_at" => $current_time,
            "updated_at" => $current_time
        ]);
    }
}
