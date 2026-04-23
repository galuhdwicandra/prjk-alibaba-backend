<?php

namespace App\Http\Requests\Api\CashMovement;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCashMovementRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('cash_movements.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'cashier_shift_id' => ['required', 'integer', 'exists:cashier_shifts,id'],
            'movement_type' => ['required', Rule::in(['cash_in', 'cash_out'])],
            'amount' => ['required', 'numeric', 'gt:0'],
            'reason' => ['nullable', 'string', 'max:255'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
