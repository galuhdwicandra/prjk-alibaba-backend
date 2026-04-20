<?php

namespace App\Http\Requests\Api\Inventory\RawMaterialCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRawMaterialCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('raw_material_categories.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
        ];
    }
}
