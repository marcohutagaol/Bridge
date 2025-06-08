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
        Schema::create('learning_progress', function (Blueprint $table) {
            $table->string('order_id', 20)->primary(); // order_id sebagai primary key
            $table->enum('progress', ['none', 'in_progress', 'done'])->default('none');
            $table->integer('nilai')->nullable(); // nilai 0-100
            $table->timestamps();
            
            // Index untuk performance
            $table->index('progress');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_progress');
    }
};