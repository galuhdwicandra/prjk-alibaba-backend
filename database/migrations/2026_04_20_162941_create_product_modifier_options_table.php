<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_modifier_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_modifier_group_id')
                ->constrained('product_modifier_groups')
                ->cascadeOnDelete();
            $table->string('name');
            $table->decimal('price', 14, 2)->default(0);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();

            $table->index(['product_modifier_group_id', 'sort_order'], 'pmo_group_sort_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_modifier_options');
    }
};