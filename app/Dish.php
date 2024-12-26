<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $table="Dish";

    public function category(){
    	return $this->belongsTo('App\Category','id_category','id');
    }

    public function recipe(){
    	return $this->hasMany('App\Recipes','id_dish','id');
    }
}
