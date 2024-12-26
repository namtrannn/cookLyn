@extends('master')
@section('content')
<div class="inner-header" style="margin-top: 200px">
	<div class="container">
		<div class="pull-left">
			<h4>Thông tin cá nhân</h4>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb">
				<a href="{{ route('trang-chu') }}">Home</a> / <span>Thông tin cá nhân</span>
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
				<form action="{{ route('post-edit-thong-tin-ca-nhan',$user->id)}}" method="POST" class="beta-form-checkout" enctype="multipart/form-data">
					@CSRF
					<div class="form-group">
				    	<label for="exampleInputEmail1">Họ tên</label>
				    	<input type="text" class="form-control" name="name" value="{{$user->name }}" aria-describedby="nameHelp" placeholder="Enter name">					    
				  	</div>
				  	<div class="form-group ">
                        <label>Avatar</label>
                        <p>
                        <img src="upload/avatar/{{ Auth::user()->avatar }}" width="300px">
                        </p>
                        <input type="file" name="avatar" class="form-control" />
                    </div>
					<div class="form-group">
                        <label>Giới tính</label>
                        <label class="radio-inline">
                            <input name="rdoSex" value="1" checked=""
                            @if(Auth::user()->sex == 1)
                                {{"checked"}}
                            @endif  
                            type="radio">Nam
                        </label>
                        <label class="radio-inline">
                            <input name="rdoSex" value="2"
                            @if( Auth::user()->sex == 2)
                                {{"checked"}}
                            @endif
                            type="radio">Nữ
                        </label> 
                        <label class="radio-inline">
                            <input name="rdoSex" value="0"
                            @if(Auth::user()->sex == 0)
                                {{"checked"}}
                            @endif
                            type="radio">Khác
                        </label> 
                    </div>
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">Email</label>
				    	<input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{ Auth::user()->email }}" readonly=""/>					    
				  	</div>
				  	<div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ"
                         value="{{ Auth::user()->address }}" />
                    </div>    
				  	<div class="form-group">
                        <label>Số điện thoại:</label>
                        <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại" value="{{ Auth::user()->phone }}" />
                    </div>
				  	<div class="pull-left">
				  		<button type="submit" class="btn btn-primary">Cập nhật</button>
						<button type="reset" class="btn btn-danger"><a href="information/{{Auth::user()->id}}">Hủy bỏ </a></button>
				  	</div>
				</form>					
			</div>				
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection