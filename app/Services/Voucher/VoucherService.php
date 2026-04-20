<?php

namespace App\Services\Voucher;

use App\Models\Voucher;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class VoucherService
{
    public function create(array $payload): Voucher
    {
        return DB::transaction(function () use ($payload) {
            $this->validateBusinessRules($payload);

            return Voucher::create([
                'code' => strtoupper($payload['code']),
                'name' => $payload['name'],
                'description' => $payload['description'] ?? null,
                'discount_type' => $payload['discount_type'],
                'discount_value' => $payload['discount_value'],
                'max_discount' => $payload['max_discount'] ?? null,
                'min_order_total' => $payload['min_order_total'] ?? 0,
                'quota' => $payload['quota'] ?? null,
                'used_count' => $payload['used_count'] ?? 0,
                'starts_at' => $payload['starts_at'] ?? null,
                'ends_at' => $payload['ends_at'] ?? null,
                'is_active' => $payload['is_active'] ?? true,
                'applies_to' => $payload['applies_to'],
            ]);
        });
    }

    public function update(Voucher $voucher, array $payload): Voucher
    {
        return DB::transaction(function () use ($voucher, $payload) {
            $merged = array_merge($voucher->toArray(), $payload);

            $this->validateBusinessRules($merged);

            if (array_key_exists('code', $payload)) {
                $payload['code'] = strtoupper($payload['code']);
            }

            $voucher->update($payload);

            return $voucher->fresh();
        });
    }

    private function validateBusinessRules(array $payload): void
    {
        if (($payload['discount_type'] ?? null) === 'percent' && (float) ($payload['discount_value'] ?? 0) > 100) {
            throw ValidationException::withMessages([
                'discount_value' => ['Voucher persen tidak boleh lebih dari 100.'],
            ]);
        }

        $startsAt = $payload['starts_at'] ?? null;
        $endsAt = $payload['ends_at'] ?? null;

        if ($startsAt && $endsAt && strtotime((string) $endsAt) < strtotime((string) $startsAt)) {
            throw ValidationException::withMessages([
                'ends_at' => ['ends_at tidak boleh lebih kecil dari starts_at.'],
            ]);
        }
    }
}