<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OutletSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'tax_percent',
        'service_charge_percent',
        'currency_code',
        'receipt_footer',
        'invoice_prefix',
        'order_prefix',
        'timezone',
        'allow_negative_stock',
        'low_stock_notification_enabled',
    ];

    protected function casts(): array
    {
        return [
            'tax_percent' => 'decimal:2',
            'service_charge_percent' => 'decimal:2',
            'allow_negative_stock' => 'boolean',
            'low_stock_notification_enabled' => 'boolean',
        ];
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }
}
