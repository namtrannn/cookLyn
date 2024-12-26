<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Slide;
use App\Category;
use App\Dish;
use App\User;
use App\Recipes;
use App\Key;
use Response;

class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
        $recipes = Recipes::where('status',1)->paginate(12,['*'],'page10');
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

    	return view('page.trangchu',compact('slide','category','dish_start','dish_breakfast','dish','dish_appetizer','dish_main','dish_snack','dish_drink','dish_salad','master','recipes'));   	
    }

    public function getSearch(Request $request){
        $category = Category::where('status',1)->paginate(6,['*'],'page0');
        $recipes1 = Recipes::where('status',1)->paginate(4,['*'],'page11');
        $slide = Slide::all();
        $result = $request->key;
        // $recipes = Recipes::where('name','like','%'.$result.'%')->get();
        $keys = Key::all();
        $dem=true;
        foreach($keys as $k=>$value){
            if($value->tukhoa == $request->key){
                $dem = false;
                break;
            }
        }
        if($dem){
            $key = new Key;
            $key->tukhoa = $request->key;
            $key->save();
        }
        
        $result = $request->key;
        $string = explode(" ",$result);
        $count = count($string);
        for($i = 0; $i < $count; $i++){
            $recipes2 = Recipes::where('name','like','%'.$string[$i].'%')->get();
        }
        return view('page.search',compact('slide','category','result','recipes1','recipes2'));
    }

    public function getContact(Request $request){
        // $slide = Slide::all();
        // $result = $request->key;
        // $recipes = Recipes::where('name','like','%'.$result.'%')->get();
        return view('page.contact');
    }

    public function getAbout(Request $request){
        // $slide = Slide::all();
        // $result = $request->key;
        // $recipes = Recipes::where('name','like','%'.$result.'%')->get();
        return view('page.about');
    }

    public function getGallery(Request $request){
        $dish = Dish::where('status',1)->paginate(9,['*'],'page12');
        // $slide = Slide::all();
        // $result = $request->key;
        // $recipes = Recipes::where('name','like','%'.$result.'%')->get();
        return view('page.gallery',compact('dish'));
    }

    public function getMenu(Request $request){
        $dish = Dish::where('status',1)->paginate(9,['*'],'page12');
        $dish_start = Dish::where('id_category','2')->paginate(6,['*'],'page2');
        $dish_breakfast = Dish::where('id_category','1')->paginate(6,['*'],'page3');
        $dish_appetizer = Dish::where('id_category','3')->paginate(6,['*'],'page4');
        $dish_main = Dish::where('id_category','5')->paginate(6,['*'],'page5');
        $dish_snack = Dish::where('id_category','2')->paginate(6,['*'],'page6');
        $dish_drink = Dish::where('id_category','6')->paginate(6,['*'],'page7');
        $dish_salad = Dish::where('id_category','7')->paginate(6,['*'],'page8');
        // $slide = Slide::all();
        // $result = $request->key;
        // $recipes = Recipes::where('name','like','%'.$result.'%')->get();
        return view('page.menu',compact('dish_start','dish_breakfast','dish','dish_appetizer','dish_main','dish_snack','dish_drink','dish_salad'));
    }
    public function like(Request $request, $id)
    {
        // Lấy công thức cần like
        $recipe = Recipe::find($id);

        // Kiểm tra nếu người dùng đã like công thức này rồi thì không thực hiện thêm
        if ($recipe->likes->contains(auth()->user()->id)) {
            return response()->json([
                'error' => 'Bạn đã like công thức này rồi!'
            ]);
        }

        // Thêm like mới vào bảng likes
        $like = new Like;
        $like->recipe_id = $recipe->id;
        $like->user_id = auth()->user()->id;
        $like->save();

        // Tăng số lượt like của công thức lên 1
        $recipe->number_like++;
        $recipe->save();

        return response()->json([
            'success' => 'Đã like công thức thành công!'
        ]);
    }

}
