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
        Schema::create('flashsale_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flashsale_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedInteger('flash_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flashsale_products');
    }
};
