@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
	        <div class="muted pull-left">Slide -> Danh sách</div>
			<div class="pull-right"><span class="badge badge-info">Số slide là {{ count($slide) }}</span>
			</div>
	    </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	           <div class="table-toolbar">
	              <div class="btn-group">
	                 <a href="{{route('addSlide')}}"><button class="btn btn-success">Thêm mới <i class="icon-plus icon-white"></i></button></a>
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
	                        <th>Tên</th>
	                        <th>Hình ảnh</th>
	                        <th>Nội dung</th>
	                        <th>Link</th>
	                        <th>Thao tác</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach($slide as $sd)
                    	<tr class="odd gradeX" align="center">
	                        <td>{{ $sd->id }}</td>
	                        <td>{{ $sd->name }}</td>
	                        <td style = " width: 30%">
	                            <img width="300px" src="upload/slide/{{ $sd->image }}" alt="">
	                        </td>
	                        <td>{{ $sd->content }}</td>
	                        <td>{{ $sd->link }}</td>
	                        <td class="center">
	                            <button class="btn btn-action"><i class="fas fa-trash-alt"></i></i><a href="admin/slide/delete/{{ $sd->id }}"> Xóa</a></button><br>
	                            <button class="btn btn-default">
	                            <i class="fas fa-edit"></i> <a href="admin/slide/edit/{{ $sd->id }}"> Cập nhật</a>
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