<?php

namespace App\Http\Requests\Api\Inventory\StockAdjustment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStockAdjustmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_adjustments.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'adjustment_number' => ['nullable', 'string', 'max:255'],
            'adjustment_date' => ['required', 'date'],
            'reason' => ['required', Rule::in(['damaged', 'expired', 'lost', 'correction', 'waste', 'other'])],
            'notes' => ['nullable', 'string'],
            'approved_by' => ['nullable', 'integer', 'exists:users,id'],
            'approved_at' => ['nullable', 'date'],

            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.qty_difference' => ['required', 'numeric', 'not_in:0'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}
