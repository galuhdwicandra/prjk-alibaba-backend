<?php

namespace App\Http\Requests\Api\Kitchen;

use Illuminate\Foundation\Http\FormRequest;

class StoreKitchenTicketRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'order_id' => ['required', 'integer', 'exists:orders,id'],
        ];
    }
}
