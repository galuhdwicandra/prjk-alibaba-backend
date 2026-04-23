<?php

namespace App\Http\Requests\Api\Inventory\StockTransfer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStockTransferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_transfers.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'source_outlet_id' => ['required', 'integer', 'exists:outlets,id', 'different:target_outlet_id'],
            'target_outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'transfer_number' => ['nullable', 'string', 'max:255'],
            'status' => ['sometimes', Rule::in(['draft', 'sent', 'received', 'cancelled'])],
            'transfer_date' => ['required', 'date'],
            'notes' => ['nullable', 'string'],

            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.qty_sent' => ['required', 'numeric', 'gt:0'],
            'items.*.qty_received' => ['nullable', 'numeric', 'gt:0'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}
