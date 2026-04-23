<?php

namespace App\Http\Requests\Api\Inventory\StockOpname;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStockOpnameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_opnames.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'opname_number' => ['nullable', 'string', 'max:255'],
            'opname_date' => ['required', 'date'],
            'status' => ['sometimes', Rule::in(['draft', 'posted', 'cancelled'])],
            'notes' => ['nullable', 'string'],

            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.system_qty' => ['nullable', 'numeric', 'min:0'],
            'items.*.actual_qty' => ['required', 'numeric', 'min:0'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.notes' => ['nullable', 'string'],
        ];
    }
}
