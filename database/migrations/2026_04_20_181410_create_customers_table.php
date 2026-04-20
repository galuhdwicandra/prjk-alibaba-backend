<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable()->unique();
            $table->string('name');
            $table->string('phone', 50)->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('gender', 50)->nullable();
            $table->date('birth_date')->nullable();
            $table->unsignedInteger('points')->default(0);
            $table->decimal('total_spent', 14, 2)->default(0);
            $table->boolean('is_member')->default(false);
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('is_member');
            $table->index('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};