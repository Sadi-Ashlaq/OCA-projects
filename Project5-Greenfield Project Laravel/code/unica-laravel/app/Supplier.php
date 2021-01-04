<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //

    protected $fillable = [
        'sup_name', 'sup_image', 'sup_title', 'sup_desc', 'sup_mobile', 'sup_email',
        'sup_address', 'cat_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
