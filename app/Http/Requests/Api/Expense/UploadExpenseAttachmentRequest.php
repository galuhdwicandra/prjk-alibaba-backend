<?php

namespace App\Http\Requests\Api\Expense;

use Illuminate\Foundation\Http\FormRequest;

class UploadExpenseAttachmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('expenses.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'attachments' => ['required', 'array', 'min:1'],
            'attachments.*' => ['file', 'mimes:jpg,jpeg,png,pdf,webp', 'max:4096'],
        ];
    }
}
