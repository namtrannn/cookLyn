<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category; 
use App\Dish;
use App\Comment;
use App\Recipes;
use App\User;
use Response;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function getDelete($id,$idRecipes){
    	$comment = Comment::find($id);
    	$comment->delete();

    	return redirect('admin/recipes/edit/'.$idRecipes)->with('thongbao','Xóa comment thành công');
    }

    // public function postComment($id,Request $request){
    //     $id_recipe = $id;
    //     $recipe = Recipes::find($id);
    //     $comment = new Comment;
    //     $comment->id_recipe = $id_recipe;
    //     $comment->id_user = Auth::user()->id;
    //     $comment->content = $request->content;
    //     $comment->status = 1;
    //     $comment->save();
    //     return redirect('recipes/'.$id)->with('thongbao','Viết bình luận thành công');
    // }
    public function postComment($id){
        $id_recipe = $id;
        $recipe = Recipes::find($id);
        $comment = new Comment;
        $comment->id_recipe = $id_recipe;
        $comment->id_user = Auth::user()->id;
        $comment->content = $_POST['content'];
        $comment->status = 1;
        $comment->save();
        $respones = array(
            'user'=>Auth::user(),
            'comment'=>$comment,
        );
        $user = Auth::user();
        return Response::json($respones);
        // return redirect('recipes/'.$id)->with('thongbao','Viết bình luận thành công');
    }

    // function postComment1($id){
    //     $id_recipe = $id;
    //     $recipe = Recipes::find($id);
    //     $comment = new Comment;
    //     $comment->id_recipe = $id_recipe;
    //     $comment->id_user = Auth::user()->id;
    //     $comment->content = $_POST['content'];
    //     $comment->status = 1;
    //     $comment->save();
    //     $respones = array(
    //         'user'=>Auth::user(),
    //         'comment'=>$comment,
    //     );
    //     $user = Auth::user();
    //     return Response::json($respones);
    // }
}
