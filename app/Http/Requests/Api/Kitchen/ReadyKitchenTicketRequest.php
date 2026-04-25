<?php

namespace App\Http\Requests\Api\Kitchen;

use Illuminate\Foundation\Http\FormRequest;

class ReadyKitchenTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ready_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
