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
        Schema::create('discount_product', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('discount_value');
            $table->integer('discount_type');
            $table->datetimes('start_date');
            $table->datetimes('end_date');
            $table->integer('count');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_product');
    }
};
