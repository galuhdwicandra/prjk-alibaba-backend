<?php

namespace App\Services\SystemSetting;

use App\Models\SystemSetting;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SystemSettingService
{
    public function upsertMany(array $settings): Collection
    {
        return DB::transaction(function () use ($settings) {
            $items = collect();

            foreach ($settings as $setting) {
                $items->push(
                    SystemSetting::updateOrCreate(
                        ['key' => $setting['key']],
                        [
                            'value' => $this->normalizeValue($setting['value'] ?? null, $setting['type']),
                            'type' => $setting['type'],
                        ]
                    )
                );
            }

            return $items;
        });
    }

    private function normalizeValue(mixed $value, string $type): mixed
    {
        return match ($type) {
            'boolean' => is_null($value) ? null : ($value ? '1' : '0'),
            'json' => is_null($value) ? null : json_encode($value, JSON_UNESCAPED_UNICODE),
            default => is_null($value) ? null : (string) $value,
        };
    }
}
