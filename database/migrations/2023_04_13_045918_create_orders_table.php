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
            $table->string('order_id')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('currency')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_category_id')->nullable();
            $table->string('product_weight')->nullable();
            $table->string('product_price')->nullable();
            $table->string('total_price')->nullable();
            $table->double('amount')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('pending');
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
