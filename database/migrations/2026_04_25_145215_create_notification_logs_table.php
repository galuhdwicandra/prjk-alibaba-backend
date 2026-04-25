<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notification_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('notification_id')->nullable()->constrained('notifications')->nullOnDelete();
            $table->foreignId('alert_rule_id')->nullable()->constrained('alert_rules')->nullOnDelete();
            $table->foreignId('outlet_id')->nullable()->constrained('outlets')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('action', [
                'generated',
                'skipped',
                'read',
                'resolved',
                'deleted',
            ]);
            $table->enum('status', [
                'success',
                'failed',
                'skipped',
            ])->default('success');
            $table->string('channel')->nullable();
            $table->text('message')->nullable();
            $table->json('payload')->nullable();
            $table->timestamp('logged_at');
            $table->timestamps();

            $table->index(['alert_rule_id', 'action']);
            $table->index(['notification_id', 'action']);
            $table->index(['outlet_id', 'logged_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notification_logs');
    }
};
