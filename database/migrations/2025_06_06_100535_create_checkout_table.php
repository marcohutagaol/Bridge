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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->bigIncrements('id'); // auto-increment primary key

            $table->unsignedBigInteger('user_id');
            $table->string('item_type');
            $table->unsignedBigInteger('item_id');

            $table->timestamp('checkout_date')->nullable();

            $table->enum('status', ['pending', 'completed', 'cancelled', 'trial'])->default('pending');
            $table->decimal('payment_amount', 10, 2)->default(0.00);

            $table->enum('organization_type', ['individual', 'corporation', 'school']);
            $table->string('corporation_name')->nullable();
            $table->string('school_name')->nullable();

            $table->string('country', 2);
            $table->enum('payment_method', ['card', 'paypal']);

            $table->string('card_number')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('cvc')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
