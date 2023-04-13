<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sell_requests', function (Blueprint $table) {
            $table->id();
            $table->string('seller_id')->nullable();
            $table->string('address')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_category_id')->nullable();
            $table->string('product_weight')->nullable();
            $table->string('product_price')->nullable();
            $table->string('total_price')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('pending');
            $table->string('reject_reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sell_requests');
    }
};