<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('alert_rules', function (Blueprint $table) {
            if (!Schema::hasColumn('alert_rules', 'threshold_unit')) {
                $table->enum('threshold_unit', ['qty', 'minutes', 'days'])
                    ->nullable()
                    ->after('threshold_value');
            }
        });
    }

    public function down(): void
    {
        Schema::table('alert_rules', function (Blueprint $table) {
            if (Schema::hasColumn('alert_rules', 'threshold_unit')) {
                $table->dropColumn('threshold_unit');
            }
        });
    }
};
