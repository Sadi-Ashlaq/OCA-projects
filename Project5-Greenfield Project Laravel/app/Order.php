<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = [
        'user_id', 'pro_name', 'order_notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
