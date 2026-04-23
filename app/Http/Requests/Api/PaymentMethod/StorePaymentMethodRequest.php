<?php

namespace App\Http\Requests\Api\PaymentMethod;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePaymentMethodRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('payment_methods.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'code' => ['required', 'string', 'max:100', Rule::unique('payment_methods', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', Rule::in(['cash', 'qris', 'transfer', 'ewallet', 'other'])],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
