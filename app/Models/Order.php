<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'order_number', 'total_price', 'status',
        'recipient_name', 'phone', 'address', 'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
