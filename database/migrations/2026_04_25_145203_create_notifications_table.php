<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outlet_id')->nullable()->constrained('outlets')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('type', [
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
            $table->enum('status', [
                'unread',
                'read',
                'resolved',
            ])->default('unread');
            $table->string('title');
            $table->text('message');
            $table->string('source_type')->nullable();
            $table->unsignedBigInteger('source_id')->nullable();
            $table->json('data')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'status']);
            $table->index(['outlet_id', 'type', 'status']);
            $table->index(['source_type', 'source_id']);
            $table->index(['created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
