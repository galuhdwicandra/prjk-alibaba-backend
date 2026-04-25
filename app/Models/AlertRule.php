<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AlertRule extends Model
{
    protected $fillable = [
        'outlet_id',
        'name',
        'alert_type',
        'severity',
        'threshold_minutes',
        'days_before',
        'threshold_value',
        'threshold_unit',
        'recipient_roles',
        'channels',
        'metadata',
        'is_active',
        'last_run_at',
    ];

    protected $casts = [
        'threshold_minutes' => 'integer',
        'days_before' => 'integer',
        'threshold_value' => 'decimal:3',
        'recipient_roles' => 'array',
        'channels' => 'array',
        'metadata' => 'array',
        'is_active' => 'boolean',
        'last_run_at' => 'datetime',
    ];

    public function outlet(): BelongsTo
    {
        return $this->belongsTo(Outlet::class);
    }

    public function notificationLogs(): HasMany
    {
        return $this->hasMany(NotificationLog::class);
    }
}
