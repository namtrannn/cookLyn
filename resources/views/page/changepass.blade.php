@extends('master')
@section('content')
<div class="inner-header" style="margin-top: 200px">
	<div class="container">
		<div class="pull-left">
			<h4>Đổi mật khẩu</h4>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb">
				<a href="{{ route('trang-chu') }}">Home</a> / <span>Đổi mật khẩu</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">	
		<div class="row">
			<div class="col-sm-3"></div>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
						{{ $err }}
					@endforeach
				</div>
			@endif
			@if(Session::has('thanhcong'))
				<div class="alert alert-success">{{ Session::get('thanhcong') }}</div>
			@endif
			@CSRF 
			<div class="col-sm-6" style="margin-bottom: 50px">
				<form action="{{ route('postchangepass',$user->id)}}" method="POST" class="beta-form-checkout">
					@CSRF					
				  	<div class="form-group">
				    	<label for="exampleInputPassword1">New Password</label>
				    	<input type="password" class="form-control" name="password" placeholder="Mật khẩu mới">
				  	</div>
				  	<div class="form-group">
				    	<label for="exampleInputPassword1">Nhập lại Password</label>
				    	<input type="password" class="form-control" name="re_password" placeholder="Nhập lại mật khẩu mới">
				  	</div>
				  	{{-- <div class="form-check">
				    	<input type="checkbox" class="form-check-input" id="exampleCheck1">
				    	<label class="form-check-label" for="exampleCheck1">Check me out</label>
				  	</div> --}}
				  	<div class="pull-right">
				  		<button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
				  	</div>
				</form>					
			</div>				
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection