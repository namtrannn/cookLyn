@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left"> Cập nhật thông tin công thức</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="admin/recipes/edit/{{$recipes->id}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                      @if(count($errors)>0)   
                          <div class="alert alert-danger">
                              @foreach($errors->all() as $err)
                                  {{ $err }}<br>
                              @endforeach
                          </div>            
                      @endif
                      @CSRF  
                      @if(session('thongbao'))
                          <div class="alert alert-success">
                              {{ session('thongbao') }}
                          </div>
                      @endif
                      <fieldset>
                        <legend>Cập nhật công thức</legend>
                        <div class="control-group">
                          <label class="control-label" for="select01">Thể loại</label>
                          <div class="controls">
                            <select id="Category" name="category" class="chzn-select">
                              @foreach($category as $cate)
                                <option
                                @if($recipes->dish->category->id == $cate->id)
                                    {{ "selected" }}
                                @endif
                                value="{{ $cate->id }}">{{$cate->name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="select01">Món ăn</label>
                          <div class="controls">
                            <select id="Dish" name="dish" class="chzn-select">
                              @foreach($dish as $ds)
                                <option 
                                @if($recipes->dish->id == $ds->id)
                                    {{ "selected" }}
                                @endif
                                value="{{ $ds->id }}">{{ $ds->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Tên công thức </label>
                          <div class="controls">
                            <input value="{{ $recipes->name }}" name="name" placeholder="Nhập tên công thức ..." type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>   
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Số nguyên liệu </label>
                          <div class="controls">
                            <input value="{{ $recipes->amount }}" name="amount" placeholder="Nhập số nguyên liệu ..." type="numeric" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Số người ăn </label>
                          <div class="controls">
                            <input value="{{ $recipes->eater }}" name="eater" placeholder="Nhập số người ăn ..." type="numeric" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>  
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Các nguyên liệu</label>
                          <div class="controls">
                            <textarea name="materials" class="input-xlarge textarea" placeholder="Các nguyên liệu" style="width: 810px; height: 200px">{{ $recipes->materials }}</textarea>
                          </div>
                        </div> 
                        <div class="control-group">
                          <label class="control-label" for="select01">Độ khó</label>
                          <div class="controls">                           
                            <label class="radio-inline">
                                <input name="level" value="1" checked=""
                                @if($recipes->level == 1)
                                  {{"checked"}}
                                @endif  
                                type="radio">Dễ
                            </label>
                            <label class="radio-inline">
                                <input name="level" value="2"
                                @if($recipes->level == 2)
                                  {{"checked"}}
                                @endif
                                 type="radio">Trung bình
                            </label> 
                            <label class="radio-inline">
                                <input name="level" value="3"
                                @if($recipes->level == 3)
                                  {{"checked"}}
                                @endif 
                                type="radio">Khó
                            </label> 
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Thời gian thực hiện</label>
                          <div class="controls">
                            <input value="{{ $recipes->time }}" name="time" placeholder="Nhập thời gian thực hiện ...(số phút thực hiện)" type="numeric" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>  phút
                            <p class="help-block"></p>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" style="color: Red">CÁC BƯỚC THỰC HIỆN</label>
                        </div>       
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Bước 1</label>
                          <div class="controls">
                            <textarea name="step_1" class="input-xlarge textarea" placeholder="Bước 1 ..." style="width: 810px; height: 200px">{{ $recipes->step_1 }}</textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Hình ảnh bước 1</label>
                          <div class="controls">
                            <p>
                              <img src="upload/recipes/{{ $recipes->image_1 }}" width="200px">
                            </p>
                            <input name="image_1" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Bước 2</label>
                          <div class="controls">
                            <textarea name="step_2" class="input-xlarge textarea" placeholder="Bước 2 ..." style="width: 810px; height: 200px">{{ $recipes->step_2 }}</textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Hình ảnh bước 2</label>
                          <div class="controls">
                            <p>
                              <img src="upload/recipes/{{ $recipes->image_2 }}" width="200px">
                            </p>
                            <input name="image_2" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Bước 3</label>
                          <div class="controls">
                            <textarea name="step_3" class="input-xlarge textarea" placeholder="Bước 3 ..." style="width: 810px; height: 200px">{{ $recipes->step_3 }}</textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Hình ảnh bước 3</label>
                          <div class="controls">
                            <p>
                              <img src="upload/recipes/{{ $recipes->image_3 }}" width="200px">
                            </p>
                            <input name="image_3" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Bước 4</label>
                          <div class="controls">
                            <textarea name="step_4" class="input-xlarge textarea" placeholder="Bước 4 ..." style="width: 810px; height: 200px">{{ $recipes->step_4 }}</textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Hình ảnh bước 4</label>
                          <div class="controls">
                            <p>
                              <img src="upload/recipes/{{ $recipes->image_4 }}" width="200px">
                            </p>
                            <input name="image_4" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Bước 5</label>
                          <div class="controls">
                            <textarea name="step_5" class="input-xlarge textarea" placeholder="Bước 5 ..." style="width: 810px; height: 200px">{{ $recipes->step_5 }}</textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Hình ảnh bước 5</label>
                          <div class="controls">
                            <p>
                              <img src="upload/recipes/{{ $recipes->image_5 }}" width="200px">
                            </p>
                            <input name="image_5" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Bước 6</label>
                          <div class="controls">
                            <textarea name="step_6" class="input-xlarge textarea" placeholder="Bước 6 ..." style="width: 810px; height: 200px">{{ $recipes->step_6 }}</textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Hình ảnh bước 6</label>
                          <div class="controls">
                            <p>
                              <img src="upload/recipes/{{ $recipes->image_6 }}" width="200px">
                            </p>
                            <input name="image_6" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>                       
                        <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Cập nhật</button>
                          <button type="reset" class="btn">Hủy bỏ</button>
                          <button type="reset" class="btn"> <a href="admin/recipes/list">Quay lại </a></button>
                        </div>
                      </fieldset>
                    </form>
                </div>
            </div>
            <div class="block-content collapse in">
	        <div class="span12">
            <h3>Danh sách bình luận</h3>
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
	                        <th>ID</th>
	                        <th>Người dùng</th>
	                        <th>Nội dung</th>	                        	                        
	                        <th>Ngày đăng</th>
	                        <th>Trạng thái</th>
	                        <th>Thao tác</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach($recipes->comment as $cm)
	                    <tr class="odd gradeX">
	                        <td>{{ $cm->id }}</td>
	                        <td>{{ $cm->user->name }}</td>	                                          
	                        <td>{{ $cm->content }}</td>
	                        <td>{{ $cm->created_at }}</td>
	                        @if($ds->status == 1)
                            	<td style="color: green">Tồn tại</td>
                        	@else
                            	<td style="color: red">Không tồn tại</td>
                        	@endif
	                        <td class="center">
	                        	@if($ds->status ==0)
	                        	<button class="btn btn-default btn-danger"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/delete/{{ $cm->id }}/{{$recipes->id}}">Khôi phục</a></button><br>
	                        	@else
                            	<button class="btn btn-default "><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/delete/{{ $cm->id }}/{{$recipes->id}}">Xóa</a></button><br>
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
        
      <!-- end-row -->
    </div>    
</div>
@endsection

@section('script')
    <script>    
        $(document).ready(function(){
            $("#Category").change(function(){
                var id_category = $(this).val();
                $.get("dish/"+id_category,function(data){
                    $("#Dish").html(data);  
                });
                // alert(id_theloai);
            });
        }); 
    </script>
@endsection