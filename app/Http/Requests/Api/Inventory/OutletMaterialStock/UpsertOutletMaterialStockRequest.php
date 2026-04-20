<?php

namespace App\Http\Requests\Api\Inventory\OutletMaterialStock;

use Illuminate\Foundation\Http\FormRequest;

class UpsertOutletMaterialStockRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('outlet_material_stocks.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'raw_material_id' => ['required', 'integer', 'exists:raw_materials,id'],
            'qty_on_hand' => ['sometimes', 'numeric'],
            'qty_reserved' => ['sometimes', 'numeric', 'min:0'],
            'last_movement_at' => ['nullable', 'date'],
        ];
    }
}
