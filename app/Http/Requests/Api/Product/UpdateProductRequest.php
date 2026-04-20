<?php

namespace App\Http\Requests\Api\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('products.update') ?? false;
    }

    public function rules(): array
    {
        $productId = $this->route('product')->id;

        return [
            'product_category_id' => ['sometimes', 'required', 'integer', 'exists:product_categories,id'],
            'sku' => ['nullable', 'string', 'max:100', Rule::unique('products', 'sku')->ignore($productId)],
            'code' => ['nullable', 'string', 'max:100', Rule::unique('products', 'code')->ignore($productId)],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('products', 'slug')->ignore($productId)],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'string', 'max:2048'],
            'base_price' => ['sometimes', 'required', 'numeric', 'min:0'],
            'product_type' => ['sometimes', 'required', Rule::in(['single', 'bundle'])],
            'is_active' => ['sometimes', 'boolean'],
            'is_featured' => ['sometimes', 'boolean'],
            'track_recipe' => ['sometimes', 'boolean'],
            'track_stock_direct' => ['sometimes', 'boolean'],

            'prices' => ['sometimes', 'array'],
            'prices.*.outlet_id' => ['required_with:prices', 'integer', 'exists:outlets,id'],
            'prices.*.price' => ['required_with:prices', 'numeric', 'min:0'],
            'prices.*.dine_in_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.takeaway_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.delivery_price' => ['nullable', 'numeric', 'min:0'],
            'prices.*.starts_at' => ['nullable', 'date'],
            'prices.*.ends_at' => ['nullable', 'date', 'after_or_equal:prices.*.starts_at'],
            'prices.*.is_active' => ['sometimes', 'boolean'],

            'outlet_statuses' => ['sometimes', 'array'],
            'outlet_statuses.*.outlet_id' => ['required_with:outlet_statuses', 'integer', 'exists:outlets,id'],
            'outlet_statuses.*.is_available' => ['sometimes', 'boolean'],
            'outlet_statuses.*.is_hidden' => ['sometimes', 'boolean'],
            'outlet_statuses.*.daily_limit' => ['nullable', 'integer', 'min:0'],
            'outlet_statuses.*.notes' => ['nullable', 'string'],
        ];
    }
}