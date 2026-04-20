<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_category_id')
                ->constrained('product_categories')
                ->restrictOnDelete();

            $table->string('sku')->nullable()->unique();
            $table->string('code')->nullable()->unique();
            $table->string('name');
            $table->string('slug')->nullable()->unique();
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();

            $table->decimal('base_price', 14, 2)->default(0);
            $table->enum('product_type', ['single', 'bundle'])->default('single');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('track_recipe')->default(true);
            $table->boolean('track_stock_direct')->default(false);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['product_category_id', 'is_active']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};