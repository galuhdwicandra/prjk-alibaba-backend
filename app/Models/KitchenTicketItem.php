<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitchenTicketItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'kitchen_ticket_id',
        'order_item_id',
        'item_name_snapshot',
        'qty',
        'notes',
    ];

    protected $casts = [
        'qty' => 'decimal:3',
    ];

    public function kitchenTicket()
    {
        return $this->belongsTo(KitchenTicket::class);
    }

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }
}
