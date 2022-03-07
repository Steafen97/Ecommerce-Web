<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    //protected $fillable = [];
    protected $guarded = [];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie', 'categories_id');
    }
}
