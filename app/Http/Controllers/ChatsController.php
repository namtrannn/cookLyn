<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use App\Events\MessageEvent;

class ChatsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getIndex(){
        return view('chats');
    }
    public function fetchMessages(){
        return Message::with('user')->get();
    }
    public function sendMessages(Request $request){
        $message = auth()->user()->messages()->create([
            'message' => $request->message
        ]);

        broadcast(new MessageEvent($message->load('user')))->toOthers();
        return ['status'=>'success'];
    }
}
