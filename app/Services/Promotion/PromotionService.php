<?php

namespace App\Services\Promotion;

use App\Models\Promotion;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PromotionService
{
    public function create(array $payload): Promotion
    {
        return DB::transaction(function () use ($payload) {
            $rules = $payload['rules'] ?? [];
            unset($payload['rules']);

            $this->validateBusinessRules($payload);

            $promotion = Promotion::create([
                'name' => $payload['name'],
                'description' => $payload['description'] ?? null,
                'promotion_type' => $payload['promotion_type'],
                'starts_at' => $payload['starts_at'] ?? null,
                'ends_at' => $payload['ends_at'] ?? null,
                'priority' => $payload['priority'] ?? 0,
                'is_active' => $payload['is_active'] ?? true,
            ]);

            $this->syncRules($promotion, $rules);

            return $promotion->fresh()->load('rules');
        });
    }

    public function update(Promotion $promotion, array $payload): Promotion
    {
        return DB::transaction(function () use ($promotion, $payload) {
            $hasRules = array_key_exists('rules', $payload);
            $rules = $payload['rules'] ?? [];
            unset($payload['rules']);

            $merged = array_merge($promotion->toArray(), $payload);
            $this->validateBusinessRules($merged);

            $promotion->update($payload);

            if ($hasRules) {
                $this->syncRules($promotion, $rules);
            }

            return $promotion->fresh()->load('rules');
        });
    }

    private function syncRules(Promotion $promotion, array $rules): void
    {
        $promotion->rules()->delete();

        foreach ($rules as $rule) {
            $promotion->rules()->create([
                'rule_type' => $rule['rule_type'],
                'operator' => $rule['operator'] ?? null,
                'value' => is_array($rule['value'] ?? null)
                    ? json_encode($rule['value'], JSON_UNESCAPED_UNICODE)
                    : ($rule['value'] ?? null),
            ]);
        }
    }

    private function validateBusinessRules(array $payload): void
    {
        $startsAt = $payload['starts_at'] ?? null;
        $endsAt = $payload['ends_at'] ?? null;

        if ($startsAt && $endsAt && strtotime((string) $endsAt) < strtotime((string) $startsAt)) {
            throw ValidationException::withMessages([
                'ends_at' => ['ends_at tidak boleh lebih kecil dari starts_at.'],
            ]);
        }
    }
}