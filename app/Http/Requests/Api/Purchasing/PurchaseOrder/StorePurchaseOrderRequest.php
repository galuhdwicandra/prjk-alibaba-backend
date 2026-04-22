<?php

namespace App\Http\Requests\Api\Purchasing\PurchaseOrder;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePurchaseOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('purchase_orders.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'supplier_id' => ['required', 'integer', 'exists:suppliers,id'],
            'po_number' => ['nullable', 'string', 'max:100', Rule::unique('purchase_orders', 'po_number')],
            'status' => ['sometimes', Rule::in(['draft', 'approved', 'partial_received', 'received', 'cancelled'])],
            'order_date' => ['required', 'date'],
            'expected_date' => ['nullable', 'date'],
            'discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'tax_amount' => ['sometimes', 'numeric', 'min:0'],
            'notes' => ['nullable', 'string'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.qty_ordered' => ['required', 'numeric', 'gt:0'],
            'items.*.unit_price' => ['required', 'numeric', 'min:0'],
            'items.*.discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}
