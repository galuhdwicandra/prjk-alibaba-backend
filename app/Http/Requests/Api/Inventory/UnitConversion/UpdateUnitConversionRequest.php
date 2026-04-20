<?php

namespace App\Http\Requests\Api\Inventory\UnitConversion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUnitConversionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('unit_conversions.update') ?? false;
    }

    public function rules(): array
    {
        $id = $this->route('unitConversion')->id;

        return [
            'from_unit_id' => ['sometimes', 'required', 'integer', 'exists:units,id', 'different:to_unit_id'],
            'to_unit_id' => ['sometimes', 'required', 'integer', 'exists:units,id'],
            'multiplier' => ['sometimes', 'required', 'numeric', 'gt:0'],
            Rule::unique('unit_conversions')->ignore($id)->where(fn ($q) => $q
                ->where('from_unit_id', $this->input('from_unit_id', $this->route('unitConversion')->from_unit_id))
                ->where('to_unit_id', $this->input('to_unit_id', $this->route('unitConversion')->to_unit_id))),
        ];
    }
}
