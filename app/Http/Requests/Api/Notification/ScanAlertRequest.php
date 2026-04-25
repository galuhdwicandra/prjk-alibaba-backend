<?php

namespace App\Http\Requests\Api\Notification;

use Illuminate\Foundation\Http\FormRequest;

class ScanAlertRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('notifications.scan') === true;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['nullable', 'integer', 'exists:outlets,id'],
            'alert_type' => ['nullable', 'string', 'in:low_stock,shift_not_closed,promo_expiring,order_overdue'],
        ];
    }
}
