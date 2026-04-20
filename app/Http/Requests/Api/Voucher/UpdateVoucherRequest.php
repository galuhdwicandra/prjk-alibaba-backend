<?php

namespace App\Http\Requests\Api\Voucher;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateVoucherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('vouchers.update') ?? false;
    }

    public function rules(): array
    {
        $voucherId = $this->route('voucher')->id;

        return [
            'code' => ['sometimes', 'required', 'string', 'max:100', Rule::unique('vouchers', 'code')->ignore($voucherId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'discount_type' => ['sometimes', 'required', Rule::in(['percent', 'fixed'])],
            'discount_value' => ['sometimes', 'required', 'numeric', 'min:0'],
            'max_discount' => ['nullable', 'numeric', 'min:0'],
            'min_order_total' => ['sometimes', 'numeric', 'min:0'],
            'quota' => ['nullable', 'integer', 'min:1'],
            'used_count' => ['sometimes', 'integer', 'min:0'],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'is_active' => ['sometimes', 'boolean'],
            'applies_to' => ['sometimes', 'required', Rule::in(['all', 'specific_products', 'specific_categories'])],
        ];
    }
}