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
        Schema::create('courses_certificates', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable();
            $table->longText('image')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('rating', 2, 1)->nullable();
            $table->string('duration_r', 100)->nullable();
            $table->string('institution')->nullable();
            $table->longText('institution_logo')->nullable();
            $table->mediumText('kategori')->nullable()->charset('utf8mb4')->collation('utf8mb4_unicode_ci');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_certificates');
    }
};
