<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('goods_receipt_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('goods_receipt_id')->constrained('goods_receipts')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('raw_material_id')->constrained('raw_materials')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('unit_id')->constrained('units')->cascadeOnUpdate()->restrictOnDelete();
            $table->decimal('qty_received', 14, 3);
            $table->decimal('unit_cost', 14, 2);
            $table->decimal('line_total', 14, 2);
            $table->date('expired_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index('goods_receipt_id');
            $table->index('raw_material_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('goods_receipt_items');
    }
};
