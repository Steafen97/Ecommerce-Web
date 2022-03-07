<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = "categories";
    protected $fillable = ['name','description','thumbnail'];

    public function products()
    {
        return $this->hasMany('App\Product', 'categories_id');
    }
}
