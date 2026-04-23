<?php

namespace App\Http\Requests\Api\Inventory\StockTransfer;

use Illuminate\Foundation\Http\FormRequest;

class SendStockTransferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('stock_transfers.send') ?? false;
    }

    public function rules(): array
    {
        return [
            'sent_at' => ['nullable', 'date'],
        ];
    }
}
