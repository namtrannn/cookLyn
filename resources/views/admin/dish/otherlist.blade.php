@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Danh sách món ăn dạng lưới</div>
                <div class="pull-right"><span class="badge badge-info">Số món ăn là {{ count($dish) }}</span>
                </div>
            </div>
            <div>
               <a href="admin/dish/list"><i class="icon-chevron-left"></i>Quay lại</a>
            </div>
            <div class="table-toolbar">
	              <div class="btn-group">
	                 <a href="{{route('addDish')}}"><button class="btn btn-success">Thêm mới <i class="icon-plus icon-white"></i></button></a>
	              </div>
                
	              <div class="btn-group pull-right">
	                 <button data-toggle="dropdown" class="btn dropdown-toggle">Công cụ <span class="caret"></span></button>
	                 <ul class="dropdown-menu">
	                    <li><a href="#">Print</a></li>
	                    <li><a href="#">Save as PDF</a></li>
	                    <li><a href="#">Export to Excel</a></li>
	                 </ul>
	              </div>
	           </div>
            <div class="block-content collapse in">
                <ul class="row-fluid padd-bottom">
					          @foreach($dish as $ds)
                  	<li class="span3">
						
                      	<a href="admin/dish/edit/{{ $ds->id }}" class="thumbnail">
                        	<img alt="260x180" style="width: 260px; height: 180px;" src="upload/dish/{{$ds->image}}">
                      	</a>                   
                      	<strong>ID: {{ $ds->id }} - Món: {{ $ds->name }}</strong>
                      	
                      
                  	 </li>                      
                  	@endforeach          
                </ul>               
            </div>
        </div>
        <!-- /block -->
    </div>		
</div>
@endsection