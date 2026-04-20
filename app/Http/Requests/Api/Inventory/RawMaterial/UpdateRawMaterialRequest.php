<?php

namespace App\Http\Requests\Api\Inventory\RawMaterial;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRawMaterialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_materials.update') ?? false;
    }

    public function rules(): array
    {
        $id = $this->route('rawMaterial')->id;

        return [
            'raw_material_category_id' => ['sometimes', 'required', 'integer', 'exists:raw_material_categories,id'],
            'unit_id' => ['sometimes', 'required', 'integer', 'exists:units,id'],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'code')->ignore($id)],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('raw_materials', 'sku')->ignore($id)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'minimum_stock' => ['sometimes', 'numeric', 'min:0'],
            'last_purchase_price' => ['sometimes', 'numeric', 'min:0'],
            'average_cost' => ['sometimes', 'numeric', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],

            'outlet_stocks' => ['sometimes', 'array'],
            'outlet_stocks.*.outlet_id' => ['required_with:outlet_stocks', 'integer', 'exists:outlets,id'],
            'outlet_stocks.*.qty_on_hand' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.qty_reserved' => ['sometimes', 'numeric', 'min:0'],
            'outlet_stocks.*.last_movement_at' => ['nullable', 'date'],
        ];
    }
}
