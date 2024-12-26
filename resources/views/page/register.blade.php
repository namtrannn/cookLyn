@extends('master')
@section('content')
<div class="inner-header" style="margin-top: 250px">
	<div class="container">
		<div class="pull-left">
			<h4>Đăng kí thành viên</h4>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb">
				<a href="{{ route('trang-chu') }}">Home</a> / <span>Đăng kí</span>
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
				<form action="admin/dangky" method="POST" class="beta-form-checkout">
					@CSRF
					<div class="form-group">
				    	<label for="exampleInputEmail1">Họ tên</label>
				    	<input type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Enter name">					    
				  	</div>
					<div class="form-group">
						<label>Giới tính </label>
						<input name="rdoSex" type="radio" class="input-radio"  value="1" checked="checked" style="width: 10%"><span style="margin-right: 5%">Nam</span>
						<input name="rdoSex" type="radio" class="input-radio"  value="2" style="width: 10%"><span style="margin-right: 5%">Nữ</span>
						<input name="rdoSex" type="radio" class="input-radio"  value="0" style="width: 10%"><span>Khác</span>		
					</div>
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">Email address</label>
				    	<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">					    
				  	</div>
				  	<div class="form-group">
				    	<label for="exampleInputPassword1">Password</label>
				    	<input type="password" class="form-control" name="password" placeholder="Password">
				  	</div>
				  	<div class="form-group">
				    	<label for="exampleInputPassword1">Nhập lại Password</label>
				    	<input type="password" class="form-control" name="re_password" placeholder="Password Again">
				  	</div>
				  	{{-- <div class="form-check">
				    	<input type="checkbox" class="form-check-input" id="exampleCheck1">
				    	<label class="form-check-label" for="exampleCheck1">Check me out</label>
				  	</div> --}}
				  	<div class="pull-right">
				  		<button type="submit" class="btn btn-primary">Đăng ký</button>
				  	</div>
				</form>					
			</div>				
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection