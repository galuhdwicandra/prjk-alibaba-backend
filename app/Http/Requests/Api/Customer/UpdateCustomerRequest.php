<?php

namespace App\Http\Requests\Api\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('customers.update') ?? false;
    }

    public function rules(): array
    {
        $customerId = $this->route('customer')->id;

        return [
            'code' => ['nullable', 'string', 'max:100', Rule::unique('customers', 'code')->ignore($customerId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50', Rule::unique('customers', 'phone')->ignore($customerId)],
            'email' => ['nullable', 'email', 'max:255', Rule::unique('customers', 'email')->ignore($customerId)],
            'gender' => ['nullable', 'string', 'max:50'],
            'birth_date' => ['nullable', 'date'],
            'points' => ['sometimes', 'integer', 'min:0'],
            'total_spent' => ['sometimes', 'numeric', 'min:0'],
            'is_member' => ['sometimes', 'boolean'],
            'notes' => ['nullable', 'string'],

            'addresses' => ['sometimes', 'array'],
            'addresses.*.label' => ['nullable', 'string', 'max:100'],
            'addresses.*.recipient_name' => ['nullable', 'string', 'max:255'],
            'addresses.*.recipient_phone' => ['nullable', 'string', 'max:50'],
            'addresses.*.address' => ['required_with:addresses', 'string'],
            'addresses.*.city' => ['nullable', 'string', 'max:100'],
            'addresses.*.province' => ['nullable', 'string', 'max:100'],
            'addresses.*.postal_code' => ['nullable', 'string', 'max:20'],
            'addresses.*.latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'addresses.*.longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'addresses.*.is_default' => ['sometimes', 'boolean'],
        ];
    }
}
