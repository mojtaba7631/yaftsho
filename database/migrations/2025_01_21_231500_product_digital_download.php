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
        Schema::create('product_digital_download', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('digital_product_id');
            $table->unsignedBigInteger('user_id');
            $table->datetime('download_date');
            $table->timestamps();
            $table->foreign('digital_product_id')->references('id')->on('digital_product')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_digital_download');
    }
};
