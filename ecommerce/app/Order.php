<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    //protected $fillable = [];
    protected $guarded = [];

    public function buyer() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function products() {
        return $this->belongsToMany('App\Product','order_details','orders_users_id','products_id');
    }
}
