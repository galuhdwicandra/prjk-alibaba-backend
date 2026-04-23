<?php

namespace App\Http\Requests\Api\CashierShift;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCashierShiftRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('cashier_shifts.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'notes' => ['nullable', 'string'],
        ];
    }
}
