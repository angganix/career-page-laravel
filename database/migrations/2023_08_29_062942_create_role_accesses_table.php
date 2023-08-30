<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('role_accesses', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("path");
            $table->boolean("read");
            $table->boolean("create");
            $table->boolean("update");
            $table->boolean("delete");
            $table->boolean("export");
            $table->bigInteger("role_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_accesses');
    }
};