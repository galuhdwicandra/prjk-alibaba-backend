<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GoodsReceiptItem extends Model
{
    protected $fillable = [
        'goods_receipt_id',
        'raw_material_id',
        'unit_id',
        'qty_received',
        'unit_cost',
        'line_total',
        'expired_at',
        'notes',
    ];

    protected $casts = [
        'qty_received' => 'decimal:3',
        'unit_cost' => 'decimal:2',
        'line_total' => 'decimal:2',
        'expired_at' => 'date',
    ];

    public function goodsReceipt(): BelongsTo
    {
        return $this->belongsTo(GoodsReceipt::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
}
