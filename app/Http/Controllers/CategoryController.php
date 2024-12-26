<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getList(){
    	$category= Category::all();
    	return view('admin.category.list',['category'=>$category]);
    }
    public function getAdd(){
    	return view('admin.category.add');
    }

    public function postAdd(Request $request){

    	$this->validate($request,[
    			'name'=>'required|min:3|max:100|unique:Category,name'
	    	],
	    	[
	    		'name.required'=>'Bạn chưa nhập tên thể loại',
	    		'name.unique'=>'Tên thể loại đã tồn tại',
	    		'name.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 kí tự',
	    		'name.max'=>'Tên thể loại phải có độ dài từ 3 đến 100 kí tự',
	    ]);

	    $category = new Category;
	    $category->name = $request->name;
	    $category->unsigned_name = str_slug($request->name,' ');
        if($request->hasFile('icon')){
            $file = $request-> file('icon');
            $duoi = $file -> getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png'  && $duoi != 'jpeg'){
                return redirect('admin/category/add')->with('thongbao','Bạn chỉ được chọn file có đuôi jpg,png,jpeg! ');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(4)."_".$name;
            while(file_exists(public_path()."upload/icon/".$hinh)){
                $hinh = str_random(4)."_".$name;
            }
            $file->move("upload/icon",$hinh);
            $category->icon = $hinh;
        }else{
            $category->icon = "";
        }
	    $category->note = $request->note;
	    $category->status = 1;
	    $category->save();

	    return redirect('admin/category/add')->with('thongbao','Thêm thành công ');
    }

    public function getEdit($id){
    	$category = Category::find($id);
    	return view('admin/category/edit',['category'=>$category]);
    }

    public function postEdit(Request $request,$id){
    	$category=Category::find($id);
    	$this->validate($request,[
    			'name'=>'required|min:3|max:100|unique:Category,name'
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên thể loại',
    			'name.unique'=>'Tên thể loại đã tồn tại',
    			'name.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 kí tự',
	    		'name.max'=>'Tên thể loại phải có độ dài từ 3 đến 100 kí tự',
    		]);

    	$category->name = $request->name;
        $category->unsigned_name = str_slug($request->name,' ');
        if($request->hasFile('icon')){
            $file = $request-> file('icon');
            $duoi = $file -> getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png'  && $duoi != 'jpeg'){
                return redirect('admin/category/edit')->with('thongbao','Bạn chỉ được chọn file có đuôi jpg,png,jpeg! ');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(4)."_".$name;
            while(file_exists(public_path()."upload/icon/".$hinh)){
                $hinh = str_random(4)."_".$name;
            }
            $file->move("upload/icon",$hinh);
            $category->icon = $hinh;
        }else{
            $category->icon = $category->icon;
        }
        $category->note = $request->note;
        $category->status = 1;
        $category->save();  	

    	return redirect('admin/category/edit/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getDelete($id){
    	$category = Category::find($id);

    	if($category->status ==0){
            $category->status = 1;
        }
        else{
           $category->status = 0;
        }
    	$category->save();

    	return redirect('admin/category/list')->with('thongbao','Bạn đã xóa thành công');
    }
}
