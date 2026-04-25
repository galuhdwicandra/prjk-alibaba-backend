<?php

namespace App\Http\Requests\Api\Expense;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateExpenseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expenses.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['sometimes', 'required', 'integer', 'exists:outlets,id'],
            'expense_category_id' => ['sometimes', 'required', 'integer', 'exists:expense_categories,id'],
            'expense_date' => ['sometimes', 'required', 'date'],
            'amount' => ['sometimes', 'required', 'numeric', 'gt:0'],
            'description' => ['nullable', 'string'],
            'status' => ['sometimes', Rule::in(['draft', 'submitted'])],
        ];
    }
}
