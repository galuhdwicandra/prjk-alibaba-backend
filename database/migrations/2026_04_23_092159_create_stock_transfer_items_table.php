<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_transfer_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_transfer_id')->constrained('stock_transfers')->cascadeOnDelete();
            $table->foreignId('raw_material_id')->constrained('raw_materials')->restrictOnDelete();
            $table->decimal('qty_sent', 14, 3);
            $table->decimal('qty_received', 14, 3)->nullable();
            $table->foreignId('unit_id')->constrained('units')->restrictOnDelete();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index(['stock_transfer_id']);
            $table->index(['raw_material_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_transfer_items');
    }
};
