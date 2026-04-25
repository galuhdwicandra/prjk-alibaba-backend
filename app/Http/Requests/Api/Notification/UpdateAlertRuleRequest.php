<?php

namespace App\Http\Requests\Api\Notification;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAlertRuleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('alert_rules.update') === true;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['nullable', 'integer', 'exists:outlets,id'],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'alert_type' => ['sometimes', 'required', Rule::in([
                'low_stock',
                'shift_not_closed',
                'promo_expiring',
                'order_overdue',
            ])],
            'severity' => ['sometimes', 'required', Rule::in(['low', 'medium', 'high', 'critical'])],
            'threshold_minutes' => ['nullable', 'integer', 'min:1'],
            'days_before' => ['nullable', 'integer', 'min:1'],
            'threshold_value' => ['nullable', 'numeric', 'min:0'],
            'threshold_unit' => ['nullable', Rule::in(['qty', 'minutes', 'days'])],
            'recipient_roles' => ['nullable', 'array'],
            'recipient_roles.*' => ['required', 'string', 'max:255'],
            'channels' => ['nullable', 'array'],
            'channels.*' => ['required', 'string', 'max:255'],
            'metadata' => ['nullable', 'array'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
