<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('outlet_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outlet_id')->unique()->constrained()->cascadeOnDelete();
            $table->decimal('tax_percent', 5, 2)->default(0);
            $table->decimal('service_charge_percent', 5, 2)->default(0);
            $table->string('currency_code', 10)->default('IDR');
            $table->text('receipt_footer')->nullable();
            $table->string('invoice_prefix')->nullable();
            $table->string('order_prefix')->nullable();
            $table->string('timezone')->default('Asia/Jakarta');
            $table->boolean('allow_negative_stock')->default(false);
            $table->boolean('low_stock_notification_enabled')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('outlet_settings');
    }
};
