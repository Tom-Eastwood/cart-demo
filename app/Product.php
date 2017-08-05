<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'sku';

    public $incrementing = false;

    public function images(){
        return $this->hasMany('App\ProductImage');
    }

    public function details(){
        return $this->hasMany('App\ProductDetail');
    }
}
