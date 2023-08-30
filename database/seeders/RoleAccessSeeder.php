<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $current_time = date("Y-m-d H:i:s");
        $data = [
            [
                "name" => "Overview",
                "path" => "/overview",
                "read" => true,
                "create" => true,
                "update" => true,
                "delete" => true,
                "export" => true,
                "role_id" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Divisi",
                "path" => "/divisi",
                "read" => true,
                "create" => true,
                "update" => true,
                "delete" => true,
                "export" => true,
                "role_id" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Posisi",
                "path" => "/posisi",
                "read" => true,
                "create" => true,
                "update" => true,
                "delete" => true,
                "export" => true,
                "role_id" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Lamaran",
                "path" => "/lamaran",
                "read" => true,
                "create" => true,
                "update" => true,
                "delete" => true,
                "export" => true,
                "role_id" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Lowongan",
                "path" => "/lowongan",
                "read" => true,
                "create" => true,
                "update" => true,
                "delete" => true,
                "export" => true,
                "role_id" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Role Akses",
                "path" => "/role",
                "read" => true,
                "create" => true,
                "update" => true,
                "delete" => true,
                "export" => true,
                "role_id" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time
            ],
            [
                "name" => "Pengguna",
                "path" => "/user",
                "read" => true,
                "create" => true,
                "update" => true,
                "delete" => true,
                "export" => true,
                "role_id" => 1,
                "created_at" => $current_time,
                "updated_at" => $current_time
            ]
        ];
        foreach ($data as $val) {
            DB::table("role_accesses")->insert($val);
        }
    }
}
