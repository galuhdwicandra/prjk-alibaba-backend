<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_movement_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_movement_id')->constrained('stock_movements')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('raw_material_id')->constrained('raw_materials')->cascadeOnUpdate()->restrictOnDelete();
            $table->decimal('qty_in', 14, 3)->default(0);
            $table->decimal('qty_out', 14, 3)->default(0);
            $table->decimal('unit_cost', 14, 2)->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index('stock_movement_id');
            $table->index('raw_material_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_movement_items');
    }
};
