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
            'prices.*.ends_at' => ['nullable', 'date'],
            'prices.*.is_active' => ['sometimes', 'boolean'],

            'outlet_statuses' => ['nullable', 'array'],
            'outlet_statuses.*.outlet_id' => ['required_with:outlet_statuses', 'integer', 'exists:outlets,id'],
            'outlet_statuses.*.is_available' => ['sometimes', 'boolean'],
            'outlet_statuses.*.is_hidden' => ['sometimes', 'boolean'],
            'outlet_statuses.*.daily_limit' => ['nullable', 'integer', 'min:0'],
            'outlet_statuses.*.notes' => ['nullable', 'string'],

            'variant_groups' => ['nullable', 'array'],
            'variant_groups.*.name' => ['required_with:variant_groups', 'string', 'max:255'],
            'variant_groups.*.selection_type' => ['required_with:variant_groups', Rule::in(['single', 'multiple'])],
            'variant_groups.*.is_required' => ['sometimes', 'boolean'],
            'variant_groups.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'variant_groups.*.options' => ['required_with:variant_groups', 'array', 'min:1'],
            'variant_groups.*.options.*.name' => ['required', 'string', 'max:255'],
            'variant_groups.*.options.*.price_adjustment' => ['sometimes', 'numeric', 'min:0'],
            'variant_groups.*.options.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'variant_groups.*.options.*.is_active' => ['sometimes', 'boolean'],

            'modifier_groups' => ['nullable', 'array'],
            'modifier_groups.*.name' => ['required_with:modifier_groups', 'string', 'max:255'],
            'modifier_groups.*.min_select' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.max_select' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.is_required' => ['sometimes', 'boolean'],
            'modifier_groups.*.sort_order' => ['sometimes', 'integer', 'min:0'],
            'modifier_groups.*.options' => ['required_with:modifier_groups', 'array', 'min:1'],
            'modifier_groups.*.options.*.name' => ['required', 'string', 'max:255'],
            'modifier_groups.*.options.*.price' => ['sometimes', 'numeric', 'min:0'],
            'modifier_groups.*.options.*.is_active' => ['sometimes', 'boolean'],
            'modifier_groups.*.options.*.sort_order' => ['sometimes', 'integer', 'min:0'],

            'bundle_items' => ['nullable', 'array'],
            'bundle_items.*.bundled_product_id' => ['required_with:bundle_items', 'integer', 'exists:products,id'],
            'bundle_items.*.qty' => ['required_with:bundle_items', 'numeric', 'gt:0'],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            foreach (($this->input('modifier_groups') ?? []) as $index => $group) {
                $min = (int) ($group['min_select'] ?? 0);
                $max = (int) ($group['max_select'] ?? 1);

                if ($max < $min) {
                    $validator->errors()->add(
                        "modifier_groups.$index.max_select",
                        'max_select tidak boleh lebih kecil dari min_select.'
                    );
                }
            }
        });
    }
}
