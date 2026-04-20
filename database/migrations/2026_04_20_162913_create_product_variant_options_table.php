<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_variant_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_variant_group_id')
                ->constrained('product_variant_groups')
                ->cascadeOnDelete();
            $table->string('name');
            $table->decimal('price_adjustment', 14, 2)->default(0);
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['product_variant_group_id', 'sort_order'], 'pvo_group_sort_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_variant_options');
    }
};