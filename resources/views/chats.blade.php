@extends('layouts.app')

@section('content')

    <div class="containerx">
        <chats :user="{{auth()->user()}}"></chats>
    </div>
@endsection