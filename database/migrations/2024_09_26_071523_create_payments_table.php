<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // $table->foreignUuid('client_id')->constrained()->onDelete('cascade');
            $table->string('businessName');
            $table->string('businessAddress');
            $table->integer('businessEmployees');
            $table->string('areaName')->nullable();
            $table->string('railwayName')->nullable();
            $table->integer('pinCode');
            $table->string('LandMarkName')->nullable();
            $table->enum('platform', ['google', 'youtube', 'facebook', 'instagram', 'others'])->default('others');
            $table->integer('fees');
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignUuid('payment_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 6, 2);
            $table->string('currency')->default('INR');
            $table->timestamps();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('order_id')->constrained()->onDelete('cascade');
            $table->string('created_payment_id')->unique();
            $table->string('created_signature')->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('transactions');
    }
};
