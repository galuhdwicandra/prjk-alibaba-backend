<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitchenTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'ticket_number',
        'status',
        'printed_at',
        'prepared_at',
        'ready_at',
    ];

    protected $casts = [
        'printed_at' => 'datetime',
        'prepared_at' => 'datetime',
        'ready_at' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function items()
    {
        return $this->hasMany(KitchenTicketItem::class);
    }
}
