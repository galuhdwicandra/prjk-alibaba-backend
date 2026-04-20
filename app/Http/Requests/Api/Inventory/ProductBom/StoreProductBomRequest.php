<?php

namespace App\Http\Requests\Api\Inventory\ProductBom;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductBomRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('product_boms.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'product_id' => ['required', 'integer', 'exists:products,id'],
            'version' => ['sometimes', 'integer', 'min:1'],
            'is_active' => ['sometimes', 'boolean'],
            'notes' => ['nullable', 'string'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'items.*.unit_id' => ['required', 'integer', 'exists:units,id'],
            'items.*.qty' => ['required', 'numeric', 'gt:0'],
            'items.*.waste_percent' => ['sometimes', 'numeric', 'min:0', 'max:100'],
        ];
    }
}
