<?php

namespace App\Http\Requests\Api\Purchasing\GoodsReceipt;

use Illuminate\Foundation\Http\FormRequest;

class PostGoodsReceiptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('goods_receipts.post') ?? false;
    }

    public function rules(): array
    {
        return [];
    }
}
