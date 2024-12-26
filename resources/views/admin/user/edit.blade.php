@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Cập nhật thông tin user</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="admin/user/edit/{{$user->id}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                        <legend>Cập nhật thông tin user</legend>                                            
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Họ tên(*) </label>
                          <div class="controls">
                            <input value="{{ $user->name }}" name="name" placeholder="Nhập họ tên người dùng ..." type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>   
                        <div class="control-group">
                          <label class="control-label" for="select01">Giới tính(*)</label>
                          <div class="controls">                           
                            <label class="radio-inline">
                                <input name="sex" value="1" checked="" 
                                @if($user->sex == 1)
                                {{"checked"}}
                                 @endif 
                                type="radio">Nam
                            </label>
                            <label class="radio-inline">
                                <input name="sex" value="2" 
                                @if($user->sex == 2)
                                  {{"checked"}}
                                @endif
                                type="radio">Nữ
                            </label> 
                            <label class="radio-inline">
                                <input name="sex" value="3" 
                                @if($user->sex == 3)
                                  {{"checked"}}
                                @endif
                                type="radio">Khác
                            </label> 
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Chọn avatar </label>
                          <div class="controls">
                            <p>
                              <img src="upload/avatar/{{ $user->avatar }}" width="200px">
                            </p>
                            <input  name="avatar" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Số điện thoại(*) </label>
                          <div class="controls">
                            <input value="{{ $user->phone }}" name="phone" placeholder="Nhập số điện thoại ..." type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Email(*) </label>
                          <div class="controls">
                            <input readonly="" value="{{ $user->email }}" name="email" placeholder="Nhập email ..." type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Password(*) </label>
                          <div class="controls">
                            <input readonly="" value="{{ $user->password }}" name="password" placeholder="Nhập mật khẩu ..." type="password" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Nhập lại Password(*) </label>
                          <div class="controls">
                            <input readonly="" value="{{ $user->password }}" name="again_pass" placeholder="Nhập lại mật khẩu..." type="password" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="select01">Chọn quyền(*)</label>
                          <div class="controls">
                            <select name="role" class="chzn-select">
                                @if($user->role == 1)
                                  <option selected value="1">Addmin</option>
                                  <option value="2">Employee</option>
                                  <option value="3">Specialist</option>
                                  <option value="0">Khách hàng</option>
                                @elseif($user->role == 2)
                                  <option value="1">Addmin</option>
                                  <option selected value="2">Employee</option>
                                  <option value="3">Specialist</option>
                                  <option value="0">Khách hàng</option>
                                @elseif($user->role == 3)
                                  <option value="1">Addmin</option> 
                                  <option value="2">Employee</option>
                                  <option selected value="3">Specialist</option>
                                  <option value="0">Khách hàng</option>
                                @elseif($user->role == 0)
                                  <option value="1">Addmin</option> 
                                  <option value="2">Employee</option>
                                  <option value="3">Specialist</option>
                                  <option selected value="0">Khách hàng</option>
                                @endif
                            </select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Địa chỉ(*)</label>
                          <div class="controls">
                            <input value="{{ $user->address }}" name="address" placeholder="Nhập địa chỉ ..." type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>                        
                                             
                        <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Cập nhật</button>
                          <button type="reset" class="btn">Hủy bỏ</button>
                          <button type="reset" class="btn"> <a href="admin/user/infor/{{$user->id}}">Quay lại </a></button>
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
