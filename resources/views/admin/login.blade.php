<!DOCTYPE html>
<html lang="en">
<script src="{{ asset('js/sweetalert2@11.js') }}"></script>
<head>
	<title>Login</title>
	<base href="{{ asset('')}}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login_asset/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_asset/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				@if(count($errors)>0)   
	                <div class="alert alert-danger">
	                    @foreach($errors->all() as $err)
	                       {{ $err }}<br>
	                    @endforeach
	                  </div>            
	                @endif
	                {{-- @CSRF   --}}
	                @if(session('thongbao'))
	                    {{-- <div class="alert alert-success"> --}}
	                      {{ session('thongbao') }}
	                    {{-- </div> --}}
	            @endif
				<form class="login100-form validate-form" action="admin/dangnhap" method="POST">
					@CSRF 
					<div class="login100-form-avatar">
						<img src="upload\logo\logo.png" alt="AVATAR">
					</div>
					@if (session('message'))
						<div class="alert alert-warning">
							{{ session('message') }}
						</div>
					@endif
					<span class="login100-form-title p-t-20 p-b-45">
{{--						Đăng nhập--}}
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn ">
							<a>Đăng nhập</a>
						</button>
					</div>

					{{-- <div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div> --}}

					<div class="text-center w-full">
						<a class="txt1" href="{{ route('registers') }}">
							Tạo tài khoản mới
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="login_asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login_asset/vendor/bootstrap/js/popper.js"></script>
	<script src="login_asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login_asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login_asset/js/main.js"></script>


</body>
</html>
