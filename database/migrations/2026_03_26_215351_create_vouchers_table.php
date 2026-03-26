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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->integer('limit_per_user');
            $table->timestamp('created_at');
            $table->timestamp('redeem_expired_at');
            $table->string('voucher_type');
            $table->decimal('value', 10, 2);
            $table->decimal('min_price', 10, 2);
            $table->boolean('expired');
            $table->timestamp('voucher_expire_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
