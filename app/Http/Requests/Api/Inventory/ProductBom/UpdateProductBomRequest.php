<?php

namespace App\Http\Requests\Api\Inventory\ProductBom;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductBomRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('product_boms.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'product_id' => ['sometimes', 'required', 'integer', 'exists:products,id'],
            'version' => ['sometimes', 'integer', 'min:1'],
            'is_active' => ['sometimes', 'boolean'],
            'notes' => ['nullable', 'string'],
            'items' => ['sometimes', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required_with:items', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required_with:items', 'integer', 'exists:units,id'],
            'items.*.qty' => ['required_with:items', 'numeric', 'gt:0'],
            'items.*.waste_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
        ];
    }
}
