<?php

namespace App\Http\Requests\Api\Inventory\StockTransfer;

use Illuminate\Foundation\Http\FormRequest;

class ReceiveStockTransferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_transfers.receive') ?? false;
    }

    public function rules(): array
    {
        return [
            'received_at' => ['nullable', 'date'],
            'items' => ['nullable', 'array'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.qty_received' => ['required_with:items', 'numeric', 'gt:0'],
        ];
    }
}
