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
    $table->string('order_id', 20)->primary();
    $table->enum('progress', ['none', 'in_progress', 'done'])->default('none');
    $table->integer('nilai')->nullable();
    
    // Tambahkan kolom untuk menyelesaikan section
    $table->boolean('section_1_completed')->default(false);
    $table->boolean('section_2_completed')->default(false);
    $table->boolean('section_3_completed')->default(false);
    
    // Tambahkan kolom untuk nilai quiz
    $table->integer('quiz_1_score')->nullable();
    $table->integer('quiz_2_score')->nullable();
    $table->integer('quiz_3_score')->nullable();
    
    $table->timestamps();
});
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning');
    }
};
