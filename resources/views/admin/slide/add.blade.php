@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Thể loại</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="admin/slide/add" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                        <legend>Thêm slide</legend>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Tên slide </label>
                          <div class="controls">
                            <input name="name" placeholder="Nhập tên thể loại ..." type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>                                                               
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Hình ảnh</label>
                          <div class="controls">
                            <input name="image" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Nội dung</label>
                          <div class="controls">
                            <textarea name="content" class="input-xlarge textarea" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Link </label>
                          <div class="controls">
                            <input name="link" placeholder="Nhập tên thể loại ..." type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>
                        <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Thêm mới</button>
                          <button type="reset" class="btn"><a href="admin/slide/list">Hủy bỏ</a></button>
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