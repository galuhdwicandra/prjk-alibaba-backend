<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                ->constrained('products')
                ->cascadeOnDelete();

            $table->foreignId('outlet_id')
                ->constrained('outlets')
                ->cascadeOnDelete();

            $table->decimal('price', 14, 2);
            $table->decimal('dine_in_price', 14, 2)->nullable();
            $table->decimal('takeaway_price', 14, 2)->nullable();
            $table->decimal('delivery_price', 14, 2)->nullable();

            $table->dateTime('starts_at')->nullable();
            $table->dateTime('ends_at')->nullable();
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['product_id', 'outlet_id', 'is_active']);
            $table->unique(['product_id', 'outlet_id', 'starts_at'], 'product_prices_unique_period');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_prices');
    }
};