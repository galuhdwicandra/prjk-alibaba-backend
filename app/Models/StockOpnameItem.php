<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockOpnameItem extends Model
{
    protected $fillable = [
        'stock_opname_id',
        'raw_material_id',
        'system_qty',
        'actual_qty',
        'difference_qty',
        'unit_id',
        'notes',
    ];

    protected $casts = [
        'system_qty' => 'decimal:3',
        'actual_qty' => 'decimal:3',
        'difference_qty' => 'decimal:3',
    ];

    public function stockOpname(): BelongsTo
    {
        return $this->belongsTo(StockOpname::class);
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
