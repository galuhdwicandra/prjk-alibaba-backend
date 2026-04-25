<?php

namespace App\Http\Requests\Api\Report;

use Illuminate\Foundation\Http\FormRequest;

class ReportFilterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('reports.view') === true;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['nullable', 'integer', 'exists:outlets,id'],
            'cashier_id' => ['nullable', 'integer', 'exists:users,id'],
            'payment_method_id' => ['nullable', 'integer', 'exists:payment_methods,id'],
            'product_id' => ['nullable', 'integer', 'exists:products,id'],
            'raw_material_id' => ['nullable', 'integer', 'exists:raw_materials,id'],
            'supplier_id' => ['nullable', 'integer', 'exists:suppliers,id'],
            'expense_category_id' => ['nullable', 'integer', 'exists:expense_categories,id'],
            'status' => ['nullable', 'string', 'max:50'],
            'date_from' => ['nullable', 'date'],
            'date_until' => ['nullable', 'date', 'after_or_equal:date_from'],
            'group_by' => ['nullable', 'string', 'in:day,week,month'],
            'limit' => ['nullable', 'integer', 'min:1', 'max:100'],
            'per_page' => ['nullable', 'integer', 'min:1', 'max:100'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'group_by' => $this->input('group_by', 'day'),
            'limit' => $this->input('limit', 10),
            'per_page' => $this->input('per_page', 10),
        ]);
    }
}
