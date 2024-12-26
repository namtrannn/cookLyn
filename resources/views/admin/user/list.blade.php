@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
	        <div class="muted pull-left">User -> Danh sách</div>
			<div class="pull-right"><span class="badge badge-info">Số user là {{ count($user) }}</span>
			</div>
	    </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	           <div class="table-toolbar">
	              <div class="btn-group">
	                 <a href="{{route('addUser')}}"><button class="btn btn-success">Thêm mới <i class="icon-plus icon-white"></i></button></a>
	              </div>
	              {{-- <div class="btn-group pull-right">
	                 <button data-toggle="dropdown" class="btn dropdown-toggle">Công cụ <span class="caret"></span></button>
	                 <ul class="dropdown-menu">
	                    <li><a href="#">Print</a></li>
	                    <li><a href="#">Save as PDF</a></li>
	                    <li><a href="#">Export to Excel</a></li>
	                 </ul>
	              </div> --}}
	           </div>
	            
	            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
	                <thead>
	                    <tr>
	                        <th>ID</th>
	                        <th>Avatar</th>
	                        <th>Name</th>
	                        <th>Giới tính</th>
                            <th>Level</th>
	                        {{-- <th>Comment</th> --}}
	                        <th>Email</th>
	                        {{-- <th>Password</th> --}}
	                        <th>Role</th>
	                        <th>Địa chỉ</th>
	                        <th>Số điện thoại</th>
	                        <th>Thao tác</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach($user as $u)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $u->id }}</td>
                        <td>
                        <img width="100px" height="100px" src="upload/avatar/{{$u->avatar}}">
                           </td>
                        <td>{{ $u->name }}</td>
                        <td>
                            @if($u->sex == 1)
                            {{ "Nam" }}
                            @elseif($u->sex == 2)
                            {{ "Nữ" }}
                            @else
                            {{ "Khác" }}
                            @endif
                        </td>
                        <td>{{ $u->level }}</td>
                        {{-- <td>{{ $u->comment }}</td> --}}
                        <td>{{ $u->email }}</td>
                        {{-- <td>{{ bcrypt($u->password) }}</td> --}}
                        <td>{{-- {{ $u->role }} --}}
                            @if($u->role == 1)
                            {{ "Admin" }}
                            @elseif($u->role == 2)
                            {{ "Employee" }}
                            @elseif($u->role == 3)
                            {{ "Chuyên gia ẩm thực" }}
                            @else
                            {{ "Thành viên" }}
                            @endif
                        </td>
                        <td>{{ $u->address }}</td>
                        <td>0{{ $u->phone }}</td>
                        <td class="center">
                            @if($u->role!=1)
                            <button class="btn btn-default">
                            <i class="fas fa-edit"></i> <a href="admin/user/infor/{{$u->id}}"> Xem thông tin</a></button><br>
                            <button class="btn btn-default">
                            <i class="fas fa-edit"></i> <a href="admin/user/edit/{{$u->id}}"> Cập nhật</a></button><br>
                            <button class="btn btn-action">
                            <i class="fas fa-trash-alt"></i><a href="admin/user/delete/{{$u->id}}"> Xóa</a></button>
                            @else
                            <button class="btn btn-default">
                            <i class="fas fa-edit"></i> <a href="admin/user/infor/{{$u->id}}"> Xem thông tin</a></button><br>
                            </button>
                            <button class="btn btn-default">
                            <i class="fas fa-edit"></i> <a href="admin/user/edit/{{$u->id}}"> Cập nhật</a>
                            </button>
                            @endif
                        </td>
                    </tr>
                    @endforeach          
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
        <!-- /block -->
    </div>		
</div>
@endsection