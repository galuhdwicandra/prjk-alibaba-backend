<?php

namespace App\Http\Requests\Api\Purchasing\GoodsReceipt;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreGoodsReceiptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('goods_receipts.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'purchase_order_id' => ['required', 'integer', 'exists:purchase_orders,id'],
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'receipt_number' => ['nullable', 'string', 'max:100', Rule::unique('goods_receipts', 'receipt_number')],
            'received_date' => ['required', 'date'],
            'status' => ['sometimes', Rule::in(['draft', 'posted', 'cancelled'])],
            'notes' => ['nullable', 'string'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.qty_received' => ['required', 'numeric', 'gt:0'],
            'items.*.unit_cost' => ['required', 'numeric', 'min:0'],
            'items.*.expired_at' => ['nullable', 'date'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}
