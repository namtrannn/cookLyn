<?php

namespace App\Http\Controllers;

use App\category;
use App\Dish;
use App\slide;
use App\User;
use Illuminate\Http\Request;
use App\Recipes;


class FilterController extends Controller
{
    public function filter(Request $request)
    {
        $slide = Slide::all();
        $master = User::where('role',3)->paginate(10,['*'],'page9');
        $category = Category::where('status',1)->paginate(6,['*'],'page0');
        $dish = Dish::where('status',1)->paginate(9,['*'],'page1');
        $dish_start = Dish::where('id_category','2')->paginate(6,['*'],'page2');
        $dish_breakfast = Dish::where('id_category','1')->paginate(6,['*'],'page3');
        $dish_appetizer = Dish::where('id_category','3')->paginate(6,['*'],'page4');
        $dish_main = Dish::where('id_category','5')->paginate(6,['*'],'page5');
        $dish_snack = Dish::where('id_category','2')->paginate(6,['*'],'page6');
        $dish_drink = Dish::where('id_category','6')->paginate(6,['*'],'page7');
        $dish_salad = Dish::where('id_category','7')->paginate(6,['*'],'page8');
        $query = Recipes::query();
        if ($request->filled('category')) {
            $query->join('dish', 'recipes.id_dish', '=', 'dish.id')
                ->where('dish.id_category', $request->input('category'));
        }

        if ($request->filled('level')) {
            $query->where('level', $request->input('level'));
        }


        if ($request->filled('time')) {
            $time = $request->input('time');
            if ($time == "1") {
                $query->where('time', '<', 30);
            } else if ($time == "2") {
                $query->whereBetween('time', [30, 60]);
            } else if ($time == "3") {
                $query->where('time', '>', 60);
            }
        }

        $recipes = $query->paginate(12);
        $recipes->appends($request->query());

        return view('page.filter', compact('slide','category','dish_start','dish_breakfast','dish','dish_appetizer','dish_main','dish_snack','dish_drink','dish_salad','master','recipes'));
    }

}
