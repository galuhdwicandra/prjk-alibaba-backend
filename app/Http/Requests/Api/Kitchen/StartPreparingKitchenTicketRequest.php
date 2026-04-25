<?php

namespace App\Http\Requests\Api\Kitchen;

use Illuminate\Foundation\Http\FormRequest;

class StartPreparingKitchenTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'prepared_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
