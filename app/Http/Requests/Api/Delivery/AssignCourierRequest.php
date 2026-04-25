<?php

namespace App\Http\Requests\Api\Delivery;

use Illuminate\Foundation\Http\FormRequest;

class AssignCourierRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('deliveries.assign') === true;
    }

    public function rules(): array
    {
        return [
            'courier_id' => ['required', 'integer', 'exists:couriers,id'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
