<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Dish;
use App\Recipes;

class AjaxController extends Controller
{
    public function getDish($id_category){
        $dish = Dish::where('id_category',$id_category)->get();
        foreach($dish as $ds)
        { 
            echo "<option value='".$ds->id."'>".$ds->name."</option>";
        }
       
   }

   public function getRecipes($id_dish){
    $recipe = Recipes::where('id_dish',$id_dish)->get();
    foreach($recipe as $re)
    { 
        echo "<option value='".$re->id."'>".$re->name."</option>";
    }
   
}
}
