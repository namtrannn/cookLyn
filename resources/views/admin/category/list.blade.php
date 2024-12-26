@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
	        <div class="muted pull-left">Thể loại->Danh sách</div>
			<div class="pull-right"><span class="badge badge-info">Số thể loại là {{ count($category) }}</span>
			</div>
	    </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	           <div class="table-toolbar">
	              <div class="btn-group">
	                 <a href="{{route('addCategory')}}"><button class="btn btn-success">Thêm mới <i class="icon-plus icon-white"></i></button></a>
	              </div>
	              {{-- <div class="btn-group pull-right">
	                 <button data-toggle="dropdown" class="btn dropdown-toggle">Các công cụ <span class="caret"></span></button>
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
	                        <th>Tên loại</th>
	                        <th>Tên không dấu</th>
	                        <th>Icon</th>
	                        <th>Ghi chú</th>
	                        <th>Trạng thái</th>
	                        <th>Thao tác</th>	                        
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach($category as $cate)
	                    <tr class="odd gradeX">
	                        <td>{{ $cate->id }}</td>
	                        <td>{{ $cate->name }}</td>
	                        <td>{{ $cate->unsigned_name }}</td>
	                        <td>
                        		<img width="50px" height="50px" src="upload/icon/{{$cate->icon}}">
                           	</td>
	                        <td>{{ $cate->note }}</td>
	                        @if($cate->status == 1)
                            	<td style="color: green">Tồn tại</td>
                        	@else
                            	<td style="color: red">Không tồn tại</td>
                        	@endif
	                       	<td class="center">
	                       		@if($cate->status == 0)
                            		<button class="btn btn-default btn-danger "><i class="fa fa-trash-o  fa-fw"></i><a href="admin/category/delete/{{ $cate->id }}">Khôi phục</a></button><br>
                            	@else
                            		<button class="btn btn-default "> <i class="fas fa-trash-alt"></i> <a href="admin/category/delete/{{ $cate->id }}">Xóa</a></button><br>
                            	@endif
                            <button class="btn btn-default">
                            <i class="fas fa-edit"></i> <a href="admin/category/edit/{{ $cate->id }}"> Cập nhật</a>
                            </button>
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