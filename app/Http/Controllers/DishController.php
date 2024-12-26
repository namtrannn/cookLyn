<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Dish;

class DishController extends Controller
{
    public function getList(){
    	$dish= Dish::all();
    	return view('admin.dish.list',['dish'=>$dish]);
    }

    public function getOtherlist(){
        $dish = Dish::all();
        return view('admin.dish.otherlist',['dish'=>$dish]);
    }

    public function getAdd(){
        $category = Category::where('status',1)->get();  
    	return view('admin.dish.add',['category'=>$category]);
    }

    public function postAdd(Request $request){

    	$this->validate($request,[
    			'name'=>'required|min:3|max:100|unique:Dish,name',
                'category'=>'required',
                'note'=>'required'
	    	],
	    	[
                'category.required'=>'Bạn chưa chọn thể loại',
	    		'name.required'=>'Bạn chưa nhập tên món ăn',
                'note.required'=>'Bạn chưa nhập ghi chú',
	    		'name.unique'=>'Tên món ăn đã tồn tại',
	    		'name.min'=>'Tên món ăn phải có độ dài từ 3 đến 100 kí tự',
	    		'name.max'=>'Tên món ăn phải có độ dài từ 3 đến 100 kí tự',
	    ]);

	    $dish = new Dish;
	    $dish->name = $request->name;
        if($request->hasFile('image')){
            $file = $request-> file('image');
            $duoi = $file -> getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png'  && $duoi != 'jpeg'){
                return redirect('admin/dish/add')->with('thongbao','Bạn chỉ được chọn file có đuôi jpg,png,jpeg! ');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(4)."_".$name;
            while(file_exists(public_path()."upload/dish/".$hinh)){
                $hinh = str_random(4)."_".$name;
            }
            $file->move("upload/dish",$hinh);
            $dish->image = $hinh;
        }else{
            $dish->image = $dish->image;
        }
	    $dish->unsigned_name = str_slug($request->name,' ');
        $dish->id_category = $request->category;
	    $dish->note = $request->note;
	    $dish->status = 1;
	    $dish->save();

	    return redirect('admin/dish/add')->with('thongbao','Bạn đã thêm thành công ');
    }

    public function getEdit($id){
        $category  = Category::all();
    	$dish = Dish::find($id);
        // dd($dish);
    	return view('admin.dish.edit',['dish'=>$dish,'category'=>$category]);
        // return $dish;
    }

    public function postEdit(Request $request,$id){
    	$dish = Dish::find($id);
    	$this->validate($request,[
                'name'=>'required|min:3|max:100',
                'category'=>'required',
                'note'=>'required' 
            ],
            [
                'category.required'=>'Bạn chưa chọn thể loại',
                'name.required'=>'Bạn chưa nhập tên món ăn',
                'note.required'=>'Bạn chưa nhập ghi chú',               
                'name.min'=>'Tên món ăn phải có độ dài từ 3 đến 100 kí tự',
                'name.max'=>'Tên món ăn phải có độ dài từ 3 đến 100 kí tự',
        ]);

        $dish->name = $request->name;
        if($request->hasFile('image')){
            $file = $request-> file('image');
            $duoi = $file -> getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png'  && $duoi != 'jpeg'){
                return redirect('admin/dish/add')->with('thongbao','Bạn chỉ được chọn file có đuôi jpg,png,jpeg! ');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(4)."_".$name;
            while(file_exists(public_path()."upload/dish/".$hinh)){
                $hinh = str_random(4)."_".$name;
            }
            $file->move("upload/dish",$hinh);
            $dish->image = $hinh;
        }else{
            $dish->image = "";
        }
        $dish->unsigned_name = str_slug($request->name,' ');
        $dish->id_category = $request->category;
        $dish->note = $request->note;
        $dish->status = 1;
        $dish->save();

        return redirect('admin/dish/edit/'.$id)->with('thongbao','Bạn đã sửa thành công !');  
    }

    public function getDelete($id){
    	$dish = Dish::find($id);
        if($dish->status ==0){
            $dish->status = 1;
        }
        else{
    	   $dish->status = 0;
        }
    	$dish->save();

    	return redirect('admin/dish/list')->with('thongbao','Bạn đã xóa thành công');
    }
}
