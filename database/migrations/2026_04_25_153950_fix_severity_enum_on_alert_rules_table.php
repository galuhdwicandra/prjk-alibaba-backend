<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("ALTER TABLE alert_rules MODIFY severity ENUM('low', 'medium', 'high', 'critical') NOT NULL DEFAULT 'medium'");
    }

    public function down(): void
    {
        DB::statement("ALTER TABLE alert_rules MODIFY severity ENUM('info', 'warning', 'danger') NOT NULL DEFAULT 'warning'");
    }
};
