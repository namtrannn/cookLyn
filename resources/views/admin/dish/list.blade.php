@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Danh sách món ăn</div>
                <div class="pull-right"><span class="badge badge-info">Số món ăn là {{ count($dish) }}</span>
                </div>
        </div>
        <div>
	         <a href="admin/dish/otherlist"><i class="icon-chevron-right"></i>Xem dạng lưới</a>
	    </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	           <div class="table-toolbar">
	              <div class="btn-group">
	                 <a href="{{route('addDish')}}"><button class="btn btn-success">Thêm mới <i class="icon-plus icon-white"></i></button></a>
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
	                        <th>Hình ảnh</th>
	                        <th>Tên món ăn</th>	                        	                        
	                        <th>Thể loại</th>
	                        <th>Ghi chú</th>
	                        <th>Trạng thái</th>
	                        <th>Thao tác</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach($dish as $ds)
	                    <tr class="odd gradeX">
	                        <td>{{ $ds->id }}</td>
	                        <td>
                        		<img width="100px" height="100px" src="upload/dish/{{$ds->image}}">
                           	</td>
	                        <td style="width: 20%">{{ $ds->name }}</td>	                                               
	                        <td>{{ $ds->category->name }}</td>
	                        <td style="width: 30%">{{ $ds->note }}</td>
	                        @if($ds->status == 1)
                            	<td style="color: green">Tồn tại</td>
                        	@else
                            	<td style="color: red">Không tồn tại</td>
                        	@endif
	                        <td class="center">
	                        	@if($ds->status ==0)
	                        	<button class="btn btn-default btn-danger"><i class="fas fa-trash-alt"></i><a href="admin/dish/delete/{{ $ds->id }}">Khôi phục</a></button><br>
	                        	@else
                            	<button class="btn btn-default "><i class="fas fa-trash-alt"></i><a href="admin/dish/delete/{{ $ds->id }}">Xóa</a></button><br>
                            	@endif
                            <button class="btn btn-default">
                            <i class="fas fa-edit"></i> <a href="admin/dish/edit/{{ $ds->id }}"> Cập nhật</a>
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