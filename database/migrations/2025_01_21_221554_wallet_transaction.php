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
        Schema::create('wallet_transaction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wallet_id');
            $table->integer('amount');
            $table->text('description')->default(null);
            $table->integer('status');
            $table->integer('type');
            $table->datetime('transaction_date');
            $table->string('reference');
            $table->timestamps();
            $table->foreign('wallet_id')->references('id')->on('wallet')->ondelete('cascade')->onupdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet_transaction');
    }
};
