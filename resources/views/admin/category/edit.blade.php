@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Cập nhật thể loại</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form class="form-horizontal" action="admin/category/edit/{{ $category->id }}" method="POST" enctype="multipart/form-data">
                      @if(count($errors)>0)   
                      <div class="alert alert-danger">
                          @foreach($errors->all() as $err)
                              {{ $err }}<br>
                          @endforeach
                      </div>            
                      @endif
                      
                      @if(session('thongbao'))
                          <div class="alert alert-success">
                              {{ session('thongbao') }}
                          </div>
                      @endif
                      @CSRF      
                      <fieldset>
                        <legend>{{ $category->name }}</legend>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Tên thể loại </label>
                          <div class="controls">
                            <input name="name" value="{{ $category->name }}" placeholder="Nhập tên thể loại ..." type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>                                                               
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Icon</label>
                          
                          <div class="controls">
                            <p>
                              <img src="upload/icon/{{ $category->icon }}" width="50px">
                            </p>
                            <input name="icon" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Ghi chú</label>
                          <div class="controls">
                            <textarea name="note" class="input-xlarge textarea" placeholder="Enter text ..." style="width: 810px; height: 200px"> {{ $category->note }} </textarea>
                          </div>
                        </div>
                        <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Cập nhật</button>
                          <button type="reset" class="btn">Hủy bỏ</button>
                          <button type="reset" class="btn"><a href="admin/category/list">Quay lại</a></button>
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