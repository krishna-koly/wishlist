<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    //


     public function products(){

        return $this->belongsToMany('App\Product');
   
    }

     public function productsales(){


        return $this->hasMany('App\ProductSale');
    }
}
