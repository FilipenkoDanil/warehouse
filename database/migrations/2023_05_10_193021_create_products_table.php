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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code');
            $table->string('barcode')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('unit_id')->constrained();
            $table->double('sell_price', 8, 2)->default(0);
            $table->double('order_price', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
