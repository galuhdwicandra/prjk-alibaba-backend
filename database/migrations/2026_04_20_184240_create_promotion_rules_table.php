<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('promotion_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('promotion_id')->constrained('promotions')->cascadeOnDelete();
            $table->enum('rule_type', ['min_total', 'product', 'category', 'outlet', 'channel', 'time']);
            $table->string('operator', 50)->nullable();
            $table->text('value')->nullable();
            $table->timestamps();

            $table->index('promotion_id');
            $table->index('rule_type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('promotion_rules');
    }
};