<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
            $table->foreignId('customer_address_id')->nullable()->constrained('customer_addresses')->nullOnDelete();
            $table->foreignId('courier_id')->nullable()->constrained('couriers')->nullOnDelete();
            $table->enum('delivery_status', ['pending', 'assigned', 'on_the_way', 'delivered', 'failed', 'cancelled'])->default('pending');
            $table->decimal('delivery_fee', 14, 2)->default(0);
            $table->dateTime('delivered_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->unique('order_id');
            $table->index(['delivery_status', 'courier_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
