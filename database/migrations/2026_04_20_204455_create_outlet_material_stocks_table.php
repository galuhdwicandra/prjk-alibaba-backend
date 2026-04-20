<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('outlet_material_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outlet_id')->constrained('outlets')->cascadeOnDelete();
            $table->foreignId('raw_material_id')->constrained('raw_materials')->cascadeOnDelete();
            $table->decimal('qty_on_hand', 14, 3)->default(0);
            $table->decimal('qty_reserved', 14, 3)->default(0);
            $table->dateTime('last_movement_at')->nullable();
            $table->timestamps();

            $table->unique(['outlet_id', 'raw_material_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('outlet_material_stocks');
    }
};
