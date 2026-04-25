<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alert_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outlet_id')->nullable()->constrained('outlets')->nullOnDelete();
            $table->string('name');
            $table->enum('alert_type', [
                'low_stock',
                'shift_not_closed',
                'promo_expiring',
                'order_overdue',
            ]);
            $table->enum('severity', [
                'info',
                'warning',
                'danger',
            ])->default('warning');
            $table->unsignedInteger('threshold_minutes')->nullable();
            $table->unsignedInteger('days_before')->nullable();
            $table->decimal('threshold_value', 14, 3)->nullable();
            $table->json('recipient_roles')->nullable();
            $table->json('channels')->nullable();
            $table->json('metadata')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamp('last_run_at')->nullable();
            $table->timestamps();

            $table->index(['alert_type', 'is_active']);
            $table->index(['outlet_id', 'alert_type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alert_rules');
    }
};
