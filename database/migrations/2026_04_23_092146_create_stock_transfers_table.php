<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('source_outlet_id')->constrained('outlets')->cascadeOnDelete();
            $table->foreignId('target_outlet_id')->constrained('outlets')->cascadeOnDelete();
            $table->string('transfer_number')->unique();
            $table->enum('status', ['draft', 'sent', 'received', 'cancelled'])->default('draft');
            $table->dateTime('transfer_date');
            $table->dateTime('sent_at')->nullable();
            $table->dateTime('received_at')->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('received_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();

            $table->index(['source_outlet_id', 'status']);
            $table->index(['target_outlet_id', 'status']);
            $table->index(['transfer_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_transfers');
    }
};
