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
        Schema::create('tag_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
            $table->foreign('tag_id')->references('id')->on('tags')->ondelete('cascade')->onupdate('cascade');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade')->onupdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_product');
    }
};
