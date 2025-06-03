<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Polymorphic fields
            $table->string('item_type'); // 'course', 'career', 'module'
            $table->unsignedBigInteger('item_id');
            
            // Checkout details
            $table->timestamp('checkout_date')->nullable();
            $table->enum('status', ['pending', 'completed', 'cancelled', 'trial'])->default('pending');
            $table->decimal('payment_amount', 10, 2)->default(0);
            
            // Billing information
            $table->enum('organization_type', ['individual', 'corporation', 'school']);
            $table->string('corporation_name')->nullable();
            $table->string('school_name')->nullable();
            $table->string('country', 2);
            
            // Payment information
            $table->enum('payment_method', ['card', 'paypal']);
            $table->string('card_number')->nullable(); // Encrypt in production
            $table->string('expiry_date')->nullable(); // Encrypt in production
            $table->string('cvc')->nullable(); // Encrypt in production
            
            $table->timestamps();
            
            // Indexes
            $table->index(['item_type', 'item_id']);
            $table->index(['user_id', 'status']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
};