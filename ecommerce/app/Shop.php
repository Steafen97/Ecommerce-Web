<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = "shops";
    //protected $fillable = [];
    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'shop_products', 'shops_id', 'products_id');
    }
}
