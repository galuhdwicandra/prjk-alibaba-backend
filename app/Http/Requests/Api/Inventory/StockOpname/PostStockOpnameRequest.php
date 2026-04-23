<?php

namespace App\Http\Requests\Api\Inventory\StockOpname;

use Illuminate\Foundation\Http\FormRequest;

class PostStockOpnameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_opnames.post') ?? false;
    }

    public function rules(): array
    {
        return [
            'posted_at' => ['nullable', 'date'],
        ];
    }
}
