<?php

namespace App\Http\Requests\Api\Inventory\StockAdjustment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStockAdjustmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_adjustments.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'adjustment_number' => ['nullable', 'string', 'max:255'],
            'adjustment_date' => ['sometimes', 'required', 'date'],
            'reason' => ['sometimes', 'required', Rule::in(['damaged', 'expired', 'lost', 'correction', 'waste', 'other'])],
            'notes' => ['nullable', 'string'],
            'approved_by' => ['nullable', 'integer', 'exists:users,id'],
            'approved_at' => ['nullable', 'date'],

            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.qty_difference' => ['required_with:items', 'numeric', 'not_in:0'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}
