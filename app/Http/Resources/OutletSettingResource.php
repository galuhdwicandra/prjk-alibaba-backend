<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OutletSettingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'outlet_id' => $this->outlet_id,
            'tax_percent' => $this->tax_percent,
            'service_charge_percent' => $this->service_charge_percent,
            'currency_code' => $this->currency_code,
            'receipt_footer' => $this->receipt_footer,
            'invoice_prefix' => $this->invoice_prefix,
            'order_prefix' => $this->order_prefix,
            'timezone' => $this->timezone,
            'allow_negative_stock' => $this->allow_negative_stock,
            'low_stock_notification_enabled' => $this->low_stock_notification_enabled,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
