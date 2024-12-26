@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Cập nhật thông tin món ăn</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="admin/dish/edit/{{ $dish->id }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                        <legend>Cập nhật thông tin món ăn</legend>
                        <div class="control-group">
                          <label class="control-label" for="select01">Thể loại</label>
                          <div class="controls">
                            <select id="select01" name="category" class="chzn-select">
                                <option value="">--Chọn thể loại--</option>
                             @foreach($category as $cate)
                            <option 
                            @if($dish->id_category == $cate ->id)
                                {{ "Selected" }}
                            @endif
                            value="{{$cate->id}}">{{ $cate->name }}</option>
                            @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Tên món ăn </label>
                          <div class="controls">
                            <input name="name" value="{{ $dish->name }}" placeholder="Nhập tên món ăn ..." type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>                                                               
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Hình ảnh</label>
                          <div class="controls">
                            <p>
                              <img src="upload/dish/{{ $dish->image }}" width="300px">
                            </p>
                            <input name="image" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Ghi chú</label>
                          <div class="controls">
                            <textarea name="note" class="input-xlarge textarea" placeholder="Enter text ..." style="width: 810px; height: 200px">{{ $dish->note }}</textarea>   
                          </div>
                        </div>
                        <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Cập nhật</button>   
                          <button type="reset" class="btn">Hủy bỏ</button>
                          <button type="reset" class="btn"> <a href="admin/dish/list">Quay lại</a></button>
                        </div>
                      </fieldset>
                    </form>

                </div>
            </div>
        </div>
        <!-- /block -->
    </div>    
</div>
@endsection