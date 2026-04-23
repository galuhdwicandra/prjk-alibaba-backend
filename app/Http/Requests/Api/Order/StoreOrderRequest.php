<?php

namespace App\Http\Requests\Api\Order;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('orders.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'cashier_shift_id' => ['nullable', 'integer', 'exists:cashier_shifts,id'],
            'customer_id' => ['nullable', 'integer', 'exists:customers,id'],
            'queue_number' => ['nullable', 'string', 'max:100'],
            'order_channel' => ['sometimes', 'string', Rule::in(['pos', 'dine_in', 'takeaway', 'pickup', 'delivery', 'website'])],
            'order_status' => ['sometimes', 'string', Rule::in(['draft', 'pending', 'confirmed'])],
            'payment_status' => ['sometimes', 'string', Rule::in(['unpaid', 'partial', 'paid', 'refunded', 'cancelled'])],
            'discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'tax_amount' => ['sometimes', 'numeric', 'min:0'],
            'service_charge_amount' => ['sometimes', 'numeric', 'min:0'],
            'paid_total' => ['sometimes', 'numeric', 'min:0'],
            'change_amount' => ['sometimes', 'numeric', 'min:0'],
            'notes' => ['nullable', 'string'],
            'ordered_at' => ['nullable', 'date'],

            'items' => ['required', 'array', 'min:1'],
            'items.*.product_id' => ['required', 'integer', 'exists:products,id'],
            'items.*.qty' => ['required', 'numeric', 'gt:0'],
            'items.*.discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'items.*.notes' => ['nullable', 'string'],

            'items.*.variants' => ['nullable', 'array'],
            'items.*.variants.*.variant_group_name_snapshot' => ['required_with:items.*.variants', 'string', 'max:255'],
            'items.*.variants.*.variant_option_name_snapshot' => ['required_with:items.*.variants', 'string', 'max:255'],
            'items.*.variants.*.price_adjustment' => ['sometimes', 'numeric', 'min:0'],

            'items.*.modifiers' => ['nullable', 'array'],
            'items.*.modifiers.*.modifier_group_name_snapshot' => ['required_with:items.*.modifiers', 'string', 'max:255'],
            'items.*.modifiers.*.modifier_option_name_snapshot' => ['required_with:items.*.modifiers', 'string', 'max:255'],
            'items.*.modifiers.*.qty' => ['sometimes', 'numeric', 'gt:0'],
            'items.*.modifiers.*.price' => ['sometimes', 'numeric', 'min:0'],
        ];
    }
}
