<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_opname_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_opname_id')->constrained('stock_opnames')->cascadeOnDelete();
            $table->foreignId('raw_material_id')->constrained('raw_materials')->restrictOnDelete();
            $table->decimal('system_qty', 14, 3);
            $table->decimal('actual_qty', 14, 3);
            $table->decimal('difference_qty', 14, 3);
            $table->foreignId('unit_id')->constrained('units')->restrictOnDelete();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index(['stock_opname_id']);
            $table->index(['raw_material_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_opname_items');
    }
};
