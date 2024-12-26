<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\Events\RedisEvent;
use App\User;
use Illuminate\Support\Facades\Auth;


class RedisController extends Controller
{
    public function index(){
        // $user = User::find($id);
    	$messages = Messages::all();
    	return view('messages',compact('messages'));
    }

    public function postSendMessage(Request $request){
    	$messages = Messages::create($request->all());
        event(
            $e = new RedisEvent($messages)
        );
        return redirect()->back();
    }
}
