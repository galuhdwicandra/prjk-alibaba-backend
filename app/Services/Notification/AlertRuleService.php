<?php

namespace App\Services\Notification;

use App\Models\AlertRule;
use Illuminate\Support\Facades\DB;

class AlertRuleService
{
    public function create(array $payload): AlertRule
    {
        return DB::transaction(function () use ($payload) {
            $rule = AlertRule::query()->create($payload);

            return $rule->load('outlet');
        });
    }

    public function update(AlertRule $alertRule, array $payload): AlertRule
    {
        return DB::transaction(function () use ($alertRule, $payload) {
            $alertRule->update($payload);

            return $alertRule->fresh()->load('outlet');
        });
    }
}
