@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
	<div class="block">
	    <div class="navbar navbar-inner block-header">
	        <div class="muted pull-left">Từ khóa -> Danh sách</div>
			<div class="pull-right"><span class="badge badge-info">Số từ khóa tìm kiếm là {{ count($tukhoa) }}</span>
			</div>
	    </div>
	    <div class="block-content collapse in">
	        <div class="span12">
	           <div class="table-toolbar">
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
	                        <th>STT</th>
	                        <th>Từ khóa tìm kiếm</th>
	                        <th>Thao tác</th>
	                    </tr>
	                </thead>
	                <tbody>
						@foreach($tukhoa as $t)
	                    <tr class="odd gradeX">
	                        <td>{{ $t->id }}</td>
	                        <td>{{ $t->tukhoa }}</td>
	                        <td class="center">
	                            <button class="btn btn-action"><i class="fas fa-trash-alt"></i><a href="admin/tukhoa/delete/{{ $t->id }}"> Xóa</a></button><br>
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