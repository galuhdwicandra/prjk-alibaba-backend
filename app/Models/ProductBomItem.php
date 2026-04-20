<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductBomItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_bom_id',
        'raw_material_id',
        'unit_id',
        'qty',
        'waste_percent',
    ];

    protected function casts(): array
    {
        return [
            'qty' => 'decimal:3',
            'waste_percent' => 'decimal:2',
        ];
    }

    public function bom(): BelongsTo
    {
        return $this->belongsTo(ProductBom::class, 'product_bom_id');
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
