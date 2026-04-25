<?php

namespace App\Http\Requests\Api\Expense;

use Illuminate\Foundation\Http\FormRequest;

class RejectExpenseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expenses.approve') ?? false;
    }

    public function rules(): array
    {
        return [
            'notes' => ['nullable', 'string'],
        ];
    }
}
