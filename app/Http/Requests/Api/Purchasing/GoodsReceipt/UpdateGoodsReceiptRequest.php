<?php

namespace App\Http\Requests\Api\Purchasing\GoodsReceipt;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGoodsReceiptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('goods_receipts.update') ?? false;
    }

    public function rules(): array
    {
        $goodsReceiptId = $this->route('goodsReceipt')->id;

        return [
            'purchase_order_id' => ['sometimes', 'required', 'integer', 'exists:purchase_orders,id'],
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'receipt_number' => ['nullable', 'string', 'max:100', Rule::unique('goods_receipts', 'receipt_number')->ignore($goodsReceiptId)],
            'received_date' => ['sometimes', 'required', 'date'],
            'notes' => ['nullable', 'string'],
            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.qty_received' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.unit_cost' => ['required_with:items', 'numeric', 'min:0'],
            'items.*.expired_at' => ['nullable', 'date'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}
