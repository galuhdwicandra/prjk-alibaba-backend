<?php

namespace App\Http\Requests\Api\Expense;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreExpenseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expenses.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'outlet_id' => ['required', 'integer', 'exists:outlets,id'],
            'expense_category_id' => ['required', 'integer', 'exists:expense_categories,id'],
            'expense_date' => ['required', 'date'],
            'amount' => ['required', 'numeric', 'gt:0'],
            'description' => ['nullable', 'string'],
            'status' => ['sometimes', Rule::in(['draft', 'submitted'])],
            'attachments' => ['nullable', 'array'],
            'attachments.*' => ['file', 'mimes:jpg,jpeg,png,pdf,webp', 'max:4096'],
        ];
    }
}
