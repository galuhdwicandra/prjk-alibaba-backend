<?php

namespace App\Http\Requests\Api\Purchasing\PurchaseOrder;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePurchaseOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('purchase_orders.update') ?? false;
    }

    public function rules(): array
    {
        $purchaseOrderId = $this->route('purchaseOrder')->id;

        return [
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'supplier_id' => ['sometimes', 'required', 'integer', 'exists:suppliers,id'],
            'po_number' => ['nullable', 'string', 'max:100', Rule::unique('purchase_orders', 'po_number')->ignore($purchaseOrderId)],
            'order_date' => ['sometimes', 'required', 'date'],
            'expected_date' => ['nullable', 'date'],
            'discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'tax_amount' => ['sometimes', 'numeric', 'min:0'],
            'notes' => ['nullable', 'string'],
            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.qty_ordered' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.unit_price' => ['required_with:items', 'numeric', 'min:0'],
            'items.*.discount_amount' => ['sometimes', 'numeric', 'min:0'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}
