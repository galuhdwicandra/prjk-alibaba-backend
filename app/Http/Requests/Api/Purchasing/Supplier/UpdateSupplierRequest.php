<?php

namespace App\Http\Requests\Api\Purchasing\Supplier;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSupplierRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('suppliers.update') ?? false;
    }

    public function rules(): array
    {
        $supplierId = $this->route('supplier')->id;

        return [
            'code' => ['nullable', 'string', 'max:100', Rule::unique('suppliers', 'code')->ignore($supplierId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string'],
            'city' => ['nullable', 'string', 'max:100'],
            'contact_person' => ['nullable', 'string', 'max:255'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
