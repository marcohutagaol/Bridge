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
        Schema::table('visimisi_kampus', function (Blueprint $table) {
            $table->foreign('kampus_id')->references('id')->on('data_kampus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('visimisi_kampus', function (Blueprint $table) {
            //
        });
    }
};
