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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
             $table->string('name');
             $table->enum('status', ['pending','shipping','done','cancel']);
             $table->integer('total_price');
              $table->string('address'); 
              $table->unsignedBigInteger('payment_method');
              $table->unsignedBigInteger('status_update');
               $table->unsignedBigInteger('user_id'); 
              $table->unsignedBigInteger('voucher_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
