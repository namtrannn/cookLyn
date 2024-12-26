<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table="Category";

   	public function dish(){
   		return $this->hasMany('App\Dish','id_category','id');
   	}

   	public function recipe(){
   		return $this->hasManyThrough('App\Recipes','App\Dish','id_category','id_dish','id');
   	}
}
