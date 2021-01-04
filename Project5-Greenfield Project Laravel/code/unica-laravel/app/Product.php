<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable = [
        'pro_name', 'pro_desc', 'pro_price', 'pro_image', 'pro_coupon',
        'property_gender', 'cat_id', 'sup_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
