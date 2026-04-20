<?php

namespace App\Http\Requests\Api\Outlet;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Validation\Rule;

class UpdateOutletSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('outlet_settings.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'tax_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
            'service_charge_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
            'currency_code' => ['sometimes', 'string', 'max:10'],
            'receipt_footer' => ['nullable', 'string'],
            'invoice_prefix' => ['nullable', 'string', 'max:50'],
            'order_prefix' => ['nullable', 'string', 'max:50'],
            'timezone' => ['sometimes', 'string', 'max:100'],
            'allow_negative_stock' => ['sometimes', 'boolean'],
            'low_stock_notification_enabled' => ['sometimes', 'boolean'],
        ];
    }
}
