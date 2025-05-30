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
    Schema::table('universities', function (Blueprint $table) {
        $table->integer('row')->default(0);
    });
}

public function down(): void
{
    Schema::table('universities', function (Blueprint $table) {
        $table->dropColumn('row');
    });
}

};
