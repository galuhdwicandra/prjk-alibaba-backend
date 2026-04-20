<?php

namespace App\Http\Requests\Api\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('products.create') ?? false;
    }

    public function rules(): array
    {
        return [
            'product_category_id' => ['required', 'integer', 'exists:product_categories,id'],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('products', 'sku')],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('products', 'code')],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('products', 'slug')],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'string', 'max:2048'],
            'base_price' => ['required', 'numeric', 'min:0'],
            'product_type' => ['required', Rule::in(['single', 'bundle'])],
            'is_active' => ['sometimes', 'boolean'],
            'is_featured' => ['sometimes', 'boolean'],
            'track_recipe' => ['sometimes', 'boolean'],
            'track_stock_direct' => ['sometimes', 'boolean'],

            'prices' => ['nullable', 'array'],
            'prices.*.outlet_id' => ['required_with:prices', 'integer', 'exists:outlets,id'],
            'prices.*.price' => ['required_with:prices', 'numeric', 'min:0'],
            'prices.*.dine_in_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.takeaway_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.delivery_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.starts_at' => ['nullable', 'date'],
            'prices.*.ends_at' => ['nullable', 'date', 'after_or_equal:prices.*.starts_at'],
            'prices.*.is_active' => ['sometimes', 'boolean'],

            'outlet_statuses' => ['nullable', 'array'],
            'outlet_statuses.*.outlet_id' => ['required_with:outlet_statuses', 'integer', 'exists:outlets,id'],
            'outlet_statuses.*.is_available' => ['sometimes', 'boolean'],
            'outlet_statuses.*.is_hidden' => ['sometimes', 'boolean'],
            'outlet_statuses.*.daily_limit' => ['nullable', 'integer', 'min:0'],
            'outlet_statuses.*.notes' => ['nullable', 'string'],
        ];
    }
}