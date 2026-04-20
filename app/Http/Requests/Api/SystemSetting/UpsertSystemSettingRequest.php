<?php

namespace App\Http\Requests\Api\SystemSetting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpsertSystemSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('system_settings.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'settings' => ['required', 'array', 'min:1'],
            'settings.*.key' => ['required', 'string', 'max:150'],
            'settings.*.value' => ['nullable'],
            'settings.*.type' => ['required', Rule::in(['string', 'number', 'boolean', 'json'])],
        ];
    }
}
