@extends('master')
@section('content')
	<section id="mu-restaurant-menu" style="margin-top: 120px">
	{{-- <head>
		<title>Demo chat</title>
	</head> --}}
{{-- 	<body> --}}
		<h2 style="text-align: center">Hỗ trợ nấu ăn tương tác</h2>
		<div id="data" style="background-color: #72d1e0">
			@foreach($messages as $message)
			{{-- @foreach($user as $u)
				<img style="border-radius: 50%;" width=30px; height="30px" src="upload/avatar/{{ $u->avatar }}">
			@endforeach --}}
			<p id="{{$message->id}}"><strong>{{ $message->author }}</strong>: {{ $message->content }}</p>
			@endforeach
		</div>
		<div>
			<form action="send-message" method="POST">
				@CSRF
				<div class="container" style="margin-top: 10px">
					<div class="row">
						<div class="col-lg-4 text-right">
							<img style="border-radius: 50%;" width=30px; height="30px" src="upload/avatar/{{ Auth::user()->avatar }}">
							<input style="border: none" type="text" value="{{ Auth::user()->name }}" name="author"> 
							{{-- <span>{{ Auth::user()->name }} </span> --}}
							
						</div>
						<div class="col-lg-5" style="position: relative">							
							<input id="button-input" placeholder=" Nhập ..." name="content"></input>
							<button class="btn btn-success bbb" type="submit" name="send" id="sendButton">Gửi</button>
						</div>
					</div>
				</div>					
				<br>
				<br>
				{{-- Content: <textarea name="content" rows="5" style="width: 80%"></textarea>
				<button type="submit" name="send" id="sendButton">Gửi</button> --}}
			</form>
			<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>

		<script>           
        $(document).ready(function () {
         	var socket = io('http://localhost:6001')
	        socket.on('chat:message',function(data){
	            console.log(data)
	            if($('#'+data.id).length == 0){
	                $('#data').append('<p><strong>'+data.author+'</strong>: '+data.content+'</p>')
	            }
	            else{
	                console.log('Đã có tin nhắn')
	            }
	        })
        });
        </script>

		</div>

	{{-- </body> --}}
	</section>
@endsection