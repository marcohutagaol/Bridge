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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('message');
            $table->string('template_type')->nullable(); 
            $table->enum('status', ['unread', 'read', 'replied'])->default('unread');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};