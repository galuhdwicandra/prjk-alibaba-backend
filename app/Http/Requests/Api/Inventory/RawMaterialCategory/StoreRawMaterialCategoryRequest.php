<?php

namespace App\Http\Requests\Api\Inventory\RawMaterialCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreRawMaterialCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_material_categories.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}
