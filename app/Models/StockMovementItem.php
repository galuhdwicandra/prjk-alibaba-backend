<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockMovementItem extends Model
{
    protected $fillable = [
        'stock_movement_id',
        'raw_material_id',
        'qty_in',
        'qty_out',
        'unit_cost',
        'notes',
    ];

    protected $casts = [
        'qty_in' => 'decimal:3',
        'qty_out' => 'decimal:3',
        'unit_cost' => 'decimal:2',
    ];

    public function stockMovement(): BelongsTo
    {
        return $this->belongsTo(StockMovement::class);
    }

    public function rawMaterial(): BelongsTo
    {
        return $this->belongsTo(RawMaterial::class);
    }
}
