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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->text('description');
            $table->text('description2')->nullable();
            $table->string('median_salary')->nullable(); // ← string
            $table->string('jobs_available')->nullable(); // ← string
            $table->string('credential')->nullable();
            $table->string('credential_logo')->nullable();
            $table->string('kategoris')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
