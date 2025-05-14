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
        Schema::create('data_universitas', function (Blueprint $table) {
            $table->string('id');
            $table->string('nama');
            $table->string('singkatan');
            $table->string('tanggal_berdiri');
            $table->string('lokasi');
            $table->string('akreditas');
            $table->string('logo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_universitas');
    }
};
