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
			<div class="col-sm-6 infomain" style="margin-bottom: 80px;">
				<form>				
				  	<div class="form-group">
                        <label>Avatar	</label>
                        <p>
                        <img style="border-radius:50%" src="upload/avatar/{{ Auth::user()->avatar }}" width="200px", height="200px" >
                        </p>
                    </div>

					<div class="form-group">
				    	<label for="exampleInputEmail1">Họ tên:	</label>
				    	<strong>{{$user->name }}</strong>				    
				  	</div>

					{{-- <div class="form-group">
				    	<label for="exampleInputEmail1">Level:	</label>
				    	<strong>
							@if({{count($recipes)}} > 10 ) 10 @endif
						</strong>				    
				  	</div> --}}

					<div class="form-group">
                        <label>Giới tính:	</label>
						<strong>
                            @if(Auth::user()->sex == 1)
                                Nam
                            @endif    

                            @if( Auth::user()->sex == 2)
                                Nữ
                            @endif

                            @if(Auth::user()->sex == 0)
                                Khác
                            @endif    
						</strong>               
                    </div>
				  	<div class="form-group">
				    	<label for="exampleInputEmail1">Email:	</label>
				    	<strong>{{ Auth::user()->email }}</strong>				    
				  	</div>
				  	<div class="form-group">
                        <label>Địa chỉ:	</label>
                        <strong>{{ Auth::user()->address }}</strong>
                    </div>    
				  	<div class="form-group">
                        <label>Số điện thoại:	</label>
                        <strong>0{{ Auth::user()->phone }}</strong>
                    </div>
				  	<div class="pull-center">
				  		<button type="button" class="btn btn-primary"><a href="edit-thong-tin-ca-nhan/{{Auth::user()->id}}"> Cập nhật</a></button>
				  	</div>
				</form>					
			</div>				
		</div>
	</div> <!-- #content -->
	<div class="container">
		<div class="pull-left">
			<h3>Danh sách công thức đã đăng</h3>
		</div>
		<div class="pull-right">
			<h4>Số công thức: {{ count($totalrecipes) }}</h4>
		</div>		
		<div class="clearfix"></div>
	</div>
<div style="border: 1px solid #e58a2f;
    margin-bottom: 50px;
    padding: 50px;
    border-radius: 10px;">
	<div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
			<th>ID</th>
			<th>Món ăn</th>
			<th>Số nguyên liệu</th>
			<th>Số người</th>
			<th>Thời gian</th>
			<th>Độ khó</th>
			<th>Trạng thái</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach($recipes as $re)
			<tr class="odd gradeX">
				<td>{{ $re->id }}</td>
				<td>{{ $re->dish['name'] }}</td>
				<td>{{ $re->amount }}</td>
				<td>{{ $re->eater }}</td>
				<td>{{ $re->time }} phút</td>
				<td>
					@if($re->level == 1)
					{{ "Dễ" }}
					@elseif($re->level == 2)
					{{ "Trung bình" }}
					@else
					{{ "Khó" }}
					@endif
				</td>
				@if($re->status == 1)
					<td style="color: green">Đã duyệt</td>
				@else
					<td style="color: red">Chưa duyệt</td>
				@endif
			</tr>
			@endforeach
        </tr>
      </tbody>
    </table>
	<div class="row">{{ $recipes->links() }}</div>
  </div>
</div>
</div> <!-- .container -->
@endsection