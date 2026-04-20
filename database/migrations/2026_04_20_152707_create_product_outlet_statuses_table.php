<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_outlet_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                ->constrained('products')
                ->cascadeOnDelete();

            $table->foreignId('outlet_id')
                ->constrained('outlets')
                ->cascadeOnDelete();

            $table->boolean('is_available')->default(true);
            $table->boolean('is_hidden')->default(false);
            $table->integer('daily_limit')->nullable();
            $table->text('notes')->nullable();

            $table->timestamps();

            $table->unique(['product_id', 'outlet_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_outlet_statuses');
    }
};