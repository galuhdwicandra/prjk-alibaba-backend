<?php

namespace App\Services\Customer;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CustomerService
{
    public function create(array $payload): Customer
    {
        return DB::transaction(function () use ($payload) {
            $addresses = $payload['addresses'] ?? [];
            unset($payload['addresses']);

            $customer = Customer::create($payload);

            $this->syncAddresses($customer, $addresses);

            return $customer->fresh()->load('addresses');
        });
    }

    public function update(Customer $customer, array $payload): Customer
    {
        return DB::transaction(function () use ($customer, $payload) {
            $hasAddresses = array_key_exists('addresses', $payload);
            $addresses = $payload['addresses'] ?? [];

            unset($payload['addresses']);

            $customer->update($payload);

            if ($hasAddresses) {
                $this->syncAddresses($customer, $addresses);
            }

            return $customer->fresh()->load('addresses');
        });
    }

    private function syncAddresses(Customer $customer, array $addresses): void
    {
        if (empty($addresses)) {
            $customer->addresses()->delete();
            return;
        }

        $defaultCount = collect($addresses)
            ->filter(fn ($item) => (bool) ($item['is_default'] ?? false))
            ->count();

        if ($defaultCount > 1) {
            throw ValidationException::withMessages([
                'addresses' => ['Hanya boleh ada satu alamat default.'],
            ]);
        }

        if ($defaultCount === 0) {
            $addresses[0]['is_default'] = true;
        }

        $customer->addresses()->delete();

        foreach ($addresses as $address) {
            $customer->addresses()->create([
                'label' => $address['label'] ?? null,
                'recipient_name' => $address['recipient_name'] ?? null,
                'recipient_phone' => $address['recipient_phone'] ?? null,
                'address' => $address['address'],
                'city' => $address['city'] ?? null,
                'province' => $address['province'] ?? null,
                'postal_code' => $address['postal_code'] ?? null,
                'latitude' => $address['latitude'] ?? null,
                'longitude' => $address['longitude'] ?? null,
                'is_default' => $address['is_default'] ?? false,
            ]);
        }
    }
}