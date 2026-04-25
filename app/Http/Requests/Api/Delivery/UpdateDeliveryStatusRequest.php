<?php

namespace App\Http\Requests\Api\Delivery;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDeliveryStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('deliveries.update_status') === true;
    }

    public function rules(): array
    {
        return [
            'delivery_status' => ['required', Rule::in(['pending', 'assigned', 'on_the_way', 'delivered', 'failed', 'cancelled'])],
            'delivered_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
