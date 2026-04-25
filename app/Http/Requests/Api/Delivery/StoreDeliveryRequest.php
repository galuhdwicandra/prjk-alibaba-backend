<?php

namespace App\Http\Requests\Api\Delivery;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDeliveryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('deliveries.create') === true;
    }

    public function rules(): array
    {
        return [
            'order_id' => ['required', 'integer', 'exists:orders,id', 'unique:deliveries,order_id'],
            'customer_address_id' => ['nullable', 'integer', 'exists:customer_addresses,id'],
            'courier_id' => ['nullable', 'integer', 'exists:couriers,id'],
            'delivery_status' => ['sometimes', Rule::in(['pending', 'assigned', 'on_the_way', 'delivered', 'failed', 'cancelled'])],
            'delivery_fee' => ['sometimes', 'numeric', 'min:0'],
            'delivered_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
