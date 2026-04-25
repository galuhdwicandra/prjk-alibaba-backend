<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Notification extends Model
{
    protected $fillable = [
        'outlet_id',
        'user_id',
        'type',
        'severity',
        'status',
        'title',
        'message',
        'source_type',
        'source_id',
        'data',
        'read_at',
        'resolved_at',
    ];

    protected $casts = [
        'data' => 'array',
        'read_at' => 'datetime',
        'resolved_at' => 'datetime',
    ];

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(NotificationLog::class);
    }
}
