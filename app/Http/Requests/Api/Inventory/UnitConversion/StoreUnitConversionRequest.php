<?php

namespace App\Http\Requests\Api\Inventory\UnitConversion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUnitConversionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('unit_conversions.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'from_unit_id' => ['required', 'integer', 'exists:units,id', 'different:to_unit_id'],
            'to_unit_id' => ['required', 'integer', 'exists:units,id'],
            'multiplier' => ['required', 'numeric', 'gt:0'],
            Rule::unique('unit_conversions')->where(fn ($q) => $q
                ->where('from_unit_id', $this->input('from_unit_id'))
                ->where('to_unit_id', $this->input('to_unit_id'))),
        ];
    }
}
