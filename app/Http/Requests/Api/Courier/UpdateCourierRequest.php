<?php

namespace App\Http\Requests\Api\Courier;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourierRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('couriers.update') === true;
    }

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'vehicle_number' => ['nullable', 'string', 'max:255'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
