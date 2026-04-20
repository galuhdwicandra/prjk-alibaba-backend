<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'phone',
        'email',
        'gender',
        'birth_date',
        'points',
        'total_spent',
        'is_member',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
            'points' => 'integer',
            'total_spent' => 'decimal:2',
            'is_member' => 'boolean',
        ];
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(CustomerAddress::class);
    }
}