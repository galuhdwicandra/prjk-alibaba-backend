<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('goods_receipts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_order_id')->constrained('purchase_orders')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('outlet_id')->constrained('outlets')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('receipt_number')->unique();
            $table->dateTime('received_date');
            $table->enum('status', ['draft', 'posted', 'cancelled'])->default('draft');
            $table->text('notes')->nullable();
            $table->foreignId('received_by')->nullable()->constrained('users')->nullOnDelete()->cascadeOnUpdate();
            $table->timestamps();

            $table->index(['purchase_order_id', 'status']);
            $table->index(['outlet_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('goods_receipts');
    }
};
