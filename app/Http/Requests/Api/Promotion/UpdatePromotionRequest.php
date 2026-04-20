<?php

namespace App\Http\Requests\Api\Promotion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePromotionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('promotions.update') ?? false;
    }

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'promotion_type' => ['sometimes', 'required', Rule::in(['discount', 'bundle', 'buy_x_get_y'])],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date'],
            'priority' => ['sometimes', 'integer'],
            'is_active' => ['sometimes', 'boolean'],

            'rules' => ['sometimes', 'array'],
            'rules.*.rule_type' => ['required_with:rules', Rule::in(['min_total', 'product', 'category', 'outlet', 'channel', 'time'])],
            'rules.*.operator' => ['nullable', 'string', 'max:50'],
            'rules.*.value' => ['nullable'],
        ];
    }
}