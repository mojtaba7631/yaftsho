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
        Schema::create('wallet_charge', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wallet_id');
            $table->unsignedBigInteger('user_payment_method_id');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('wallet_id')->references('id')->on('wallet')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_payment_method_id')->references('id')->on('user_payment_method')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet_charge');
    }
};
