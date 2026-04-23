<?php

namespace App\Http\Requests\Api\Inventory\StockTransfer;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Validation\Rule;

class UpdateStockTransferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_transfers.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'source_outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id', 'different:target_outlet_id'],
            'target_outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'transfer_number' => ['nullable', 'string', 'max:255'],
            'transfer_date' => ['sometimes', 'required', 'date'],
            'notes' => ['nullable', 'string'],

            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.qty_sent' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.qty_received' => ['nullable', 'numeric', 'gt:0'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}
