<?php

namespace App\Http\Requests\Api\Inventory\RawMaterial;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRawMaterialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_materials.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'raw_material_category_id' => ['required', 'integer', 'exists:raw_material_categories,id'],
            'unit_id' => ['required', 'integer', 'exists:units,id'],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'code')],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'sku')],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'minimum_stock' => ['sometimes', 'numeric', 'min:0'],
            'last_purchase_price' => ['sometimes', 'numeric', 'min:0'],
            'average_cost' => ['sometimes', 'numeric', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],

            'outlet_stocks' => ['nullable', 'array'],
            'outlet_stocks.*.outlet_id' => ['required_with:outlet_stocks', 'integer', 'exists:outlets,id'],
            'outlet_stocks.*.qty_on_hand' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.qty_reserved' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.last_movement_at' => ['nullable', 'date'],
        ];
    }
}
