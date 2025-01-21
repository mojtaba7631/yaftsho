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
        Schema::create('digital_product', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('file_size')->nullable();
            $table->integer('download_limit')->nullable();
            $table->string('file_url')->nullable();
            $table->string('licence_code')->nullable();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('digital_product');
    }
};
