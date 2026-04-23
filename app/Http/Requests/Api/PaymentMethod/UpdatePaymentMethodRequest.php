<?php

namespace App\Http\Requests\Api\PaymentMethod;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePaymentMethodRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('payment_methods.update') ?? false;
    }

    public function rules(): array
    {
        $paymentMethodId = $this->route('paymentMethod')->id;

        return [
            'code' => ['sometimes', 'required', 'string', 'max:100', Rule::unique('payment_methods', 'code')->ignore($paymentMethodId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'type' => ['sometimes', 'required', Rule::in(['cash', 'qris', 'transfer', 'ewallet', 'other'])],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
