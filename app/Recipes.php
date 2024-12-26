<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $table = "Recipes";

    public function dish(){
    	return $this->belongsTo('App\Dish','id_dish','id');
    }

    public function user(){
    	return $this->belongsTo('App\User','id_user','id');
    }

    public function comment(){
    	return $this->hasMany('App\Comment','id_recipe','id');
    }
}
