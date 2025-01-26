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
        Schema::create('product_variant_rel_attribute', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_variant_id');
            $table->unsignedBigInteger('attribute_variant_id');
            $table->timestamps();
            $table->foreign('product_variant_id')->references('id')->on('product_physical_variant')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('attribute_variant_id')->references('id')->on('attribute_value')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variant_rel_attribute');
    }
};
