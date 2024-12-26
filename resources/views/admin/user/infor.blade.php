@extends('admin.layout.index')
@section('content')
<div class="span9" id="content">                  
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Thông tin user</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="admin/user/edit/{{$user->id}}" class="form-horizontal" method="GET">
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
                        
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Avatar </label>
                          <div class="controls">
                            <p>
                              <img src="upload/avatar/{{ $user->avatar }}" width="300px">
                            </p>
                          </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label">Họ tên : </label>    
                          <div class="controls">
                            <strong>
                              {{ $user->name }}
                            </strong>
                          </div>                
                        </div>   

                        <div class="control-group">
                          <label class="control-label">Giới tính: </label>
                          <div class="controls">
                            <strong> 
                                  @if($user->sex == 1) Nam @endif
                                  @if($user->sex == 2) Nữ @endif
                                  @if($user->sex == 3) Khác @endif
                            </strong>              
                          </div>  
                        </div>

                        <div class="control-group">
                          <label class="control-label" for="typeahead">Số điện thoại: </label>
                          <div class="controls">
                            <strong>0{{ $user->phone }}</strong>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Email: </label>
                          <div class="controls">
                            <strong>{{ $user->email }}</strong>
                          </div>
                        </div>
                        {{-- <div class="control-group">
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
                        </div> --}}
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Quyền: </label>
                          <div class="controls">
                            <strong> 
                                  @if($user->role == 1) Admin @endif
                                  @if($user->role == 2) Employee @endif
                                  @if($user->role == 3) Chuyên gia ẩm thực  @endif
                                  @if($user->role == 0) Thành viên  @endif
                            </strong> 
                          </div>
                        </div>
                        
                        <div class="control-group">
                          <label class="control-label">Địa chỉ: </label>
                          <div class="controls">
                            <strong>{{ $user->address }}</strong>
                          </div>
                        </div>                        
                                             
                        <div class="form-actions">
                          <button type="submit" class="btn btn-primary"> <a href="admin/user/edit/{{$user->id}}">Cập nhật</button>
                          <button type="reset" class="btn"> <a href="admin/user/list">Quay lại </a></button>
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
