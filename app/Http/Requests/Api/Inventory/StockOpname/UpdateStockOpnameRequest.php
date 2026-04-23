<?php

namespace App\Http\Requests\Api\Inventory\StockOpname;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStockOpnameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_opnames.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'opname_number' => ['nullable', 'string', 'max:255'],
            'opname_date' => ['sometimes', 'required', 'date'],
            'status' => ['sometimes', Rule::in(['draft', 'posted', 'cancelled'])],
            'notes' => ['nullable', 'string'],

            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.system_qty' => ['nullable', 'numeric', 'min:0'],
            'items.*.actual_qty' => ['required_with:items', 'numeric', 'min:0'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}
