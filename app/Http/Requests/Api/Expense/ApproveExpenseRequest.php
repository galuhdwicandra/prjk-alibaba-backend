<?php

namespace App\Http\Requests\Api\Expense;

use Illuminate\Foundation\Http\FormRequest;

class ApproveExpenseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expenses.approve') ?? false;
    }

    public function rules(): array
    {
        return [
            'cashier_shift_id' => ['nullable', 'integer', 'exists:cashier_shifts,id'],
            'approved_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
