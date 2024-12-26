<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
class SlideController extends Controller
{
    public function getList(){
    	$slide = Slide::orderBy('id','DESC')->get();
        return view('admin.slide.list',['slide'=>$slide]);
    }

    public function getAdd(){
    	return view('admin.slide.add');
    }

    public function postAdd(Request $request){

    	$this->validate($request,[
                'name'=>'required',
                'content'=>'required',

	    	],
	    	[
                'name.required'=>'Bạn chưa nhập tên slide',
                'content.required'=>'Bạn chưa nhập nội dung cho slide'
	    ]);

	    $slide = new Slide;
	    $slide->name = $request->name;
        if($request->hasFile('image')){
            $file = $request-> file('image');
            $duoi = $file -> getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png'  && $duoi != 'jpeg'){
                return redirect('admin/slide/add')->with('thongbao','Bạn chỉ được chọn file có đuôi jpg,png,jpeg! ');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(4)."_".$name;
            while(file_exists(public_path()."upload/slide/".$hinh)){
                $hinh = str_random(4)."_".$name;
            }
            $file->move("upload/slide",$hinh);
            $slide->image = $hinh;
        }else{
            $slide->image = "";
        }
	    $slide->content = $request->content;
        if($request->has('link'))
            $slide->link = $request->link;
	    $slide->save();

	    return redirect('admin/slide/add')->with('thongbao','Bạn đã thêm slide thành công! ');
    }

    public function getEdit($id){
    	$slide = Slide::find($id);
    	return view('admin/slide/edit',['slide'=>$slide]);
    }

    public function postEdit(Request $request,$id){
    	$this->validate($request,[
                'name'=>'required',
                'content'=>'required',

            ],
            [
                'name.required'=>'Bạn chưa nhập tên slide',
                'content.required'=>'Bạn chưa nhập nội dunh cho slide'
        ]);

        $slide = Slide::find($id);
        $slide->name = $request->name;
        if($request->hasFile('image')){
            $file = $request-> file('image');
            $duoi = $file -> getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png'  && $duoi != 'jpeg'){
                return redirect('admin/slide/add')->with('thongbao','Bạn chỉ được chọn file có đuôi jpg,png,jpeg! ');
            }
            $name = $file->getClientOriginalName();
            $hinh = str_random(4)."_".$name;
            while(file_exists(public_path()."upload/slide/".$hinh)){
                $hinh = str_random(4)."_".$name;
            }
            $file->move("upload/slide",$hinh);
            $slide->image = $hinh;
        }else{
            $slide->image = $slide->image;
        }
        $slide->content = $request->content;
        if($request->has('link'))
            $slide->link = $request->link;
        $slide->save();

        return redirect('admin/slide/edit/'.$id)->with('thongbao','Sửa thành thành công! ');
    }

    
    public function getDelete($id){
    	$slide = Slide::find($id);
    	
    	$slide->delete();

    	return redirect('admin/slide/list')->with('thongbao','Xóa thành công');
    }
}
