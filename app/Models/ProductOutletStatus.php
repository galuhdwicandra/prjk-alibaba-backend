<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductOutletStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'outlet_id',
        'is_available',
        'is_hidden',
        'daily_limit',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'is_available' => 'boolean',
            'is_hidden' => 'boolean',
            'daily_limit' => 'integer',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }
}