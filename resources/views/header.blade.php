<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<header id="mu-header" >  
  <div class="row" style="height: 50;">
    <!--  Text based logo  -->
    <div class="navbar-logo">
      <a class="navbar-brand" href="{{ route('trang-chu') }}"><img src="upload/logo/logo.png"></a> 
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav fz">
        <li><a href="{{ route('trang-chu') }}"><strong>TRANG CHỦ</strong></a></li>                     
        <li><a href="{{ route('menu') }}"><strong>THỰC ĐƠN</strong></a></li>                       
        <li><a href="{{ route('gallery') }}"><strong>BỘ SƯU TẬP</strong></a></li>
        <li><a href="{{ route('chat') }}"><strong>HỖ TRỢ NẤU ĂN</strong></a></li>
        <!-- <li><a href="{{ route('about') }}"><strong>GIỚI THIỆU</strong></a></li>   -->
        <!-- <li><a href="{{ route('contact') }}"><strong>LIÊN HỆ</strong></a></li>  -->
      </ul>                            
    </div><!--/.nav-collapse -->  
    <div class="header_top">
    <div class="container-top">  
        <div class="header_account">
            <ul>
                @if(Auth::check())
                <li class="logouts">
                  <div class="logouts"><a href="{{ route('logouts') }}"><i class="fas fa-sign-out-alt"></i></a></div>
                </li>
                @else
                 <div class="logins"><a href="{{ route('logins') }}">Đăng nhập</a></div>
                 <div class="signin"><a class="registers" href="{{ route('registers') }}">Đăng ký</div>
                @endif
                <li class="wishlist">
                  <a href="wishlist.html"><i class="icon ion-clipboard"></i>  </a>
                </li>  
                @if(Auth::check())                          
                  <li class="top_links signin registers"> {{Auth::user()->name}}<i class="ion-chevron-down"></i>
                    <ul class="dropdown_links">
                        @if(Auth::user()->role == 1||Auth::user()->role == 2 || Auth::user()->role == 3)
                        <li>
                          <a href="{{ route('dashboard') }}"> <i class="fas fa-address-card"></i> Quản trị</a>
                        </li>   
                        <li><a href="{{ route('get-information',Auth::user()->id) }}"> <i class="fas fa-info"></i> Thông tin cá nhân </a></li>
                        <li><a href="{{ route('getchangepass',Auth::user()->id) }}"> <i class="fas fa-exchange-alt"></i> Đổi mật khẩu</a></li>
                        @else                              
                        {{-- <li><a href="checkout.html">Checkout </a></li> --}}
                        <li><a href="{{ route('get-information',Auth::user()->id) }}"> <i class="fas fa-info"></i> Thông tin cá nhân </a></li>
                        <li><a href="{{ route('getchangepass',Auth::user()->id) }}"> <i class="fas fa-exchange-alt"></i> Đổi mật khẩu</a></li>
                        {{-- <li><a href="wishlist.html">Wishlist</a></li> --}}
                        @endif                                   
                    </ul>
                </li>
                @endif                        
            </ul>
        </div>
        @if(Auth::check())
            <div class="iconAccount col-md-3">
              @if(Auth::user()->avatar <> null)
                <a href="{{ route('get-information',Auth::user()->id) }}"><img src="upload/avatar/{{ Auth::user()->avatar }}" alt="">
                <ul class="dropdown_links">
                      @if((Auth::user()->role == 1) || (Auth::user()->role == 2) || (Auth::user()->role == 3))
                      <li>
                        <a href="{{ route('dashboard') }}">Quản trị</a>
                      </li>   
                      <li><a href="{{ route('get-information',Auth::user()->id) }}">Thông tin cá nhân </a></li>
                      <li><a href="{{ route('getchangepass',Auth::user()->id) }}">Đổi mật khẩu</a></li>
                      @else                              
                      <li><a href="{{ route('get-information',Auth::user()->id) }}">Thông tin cá nhân </a></li>
                      <li><a href="{{ route('getchangepass',Auth::user()->id) }}">Đổi mật khẩu</a></li>
                      @endif                                   
                  </ul>
                </a>
              @else
                <a href="{{ route('get-information',Auth::user()->id) }}"><img src="upload/icon/account.png" alt="">
                  <ul class="dropdown_links">
                      @if(Auth::user()->role == 1 || Auth::user()->role == 2|| (Auth::user()->role == 3))
                      <li>
                        <a href="{{ route('dashboard') }}">Quản trị</a>
                      </li>   
                      <li><a href="{{ route('get-information',Auth::user()->id) }}">Thông tin cá nhân </a></li>
                      <li><a href="{{ route('getchangepass',Auth::user()->id) }}">Đổi mật khẩu</a></li>
                      @else                              
                      <li><a href="{{ route('get-information',Auth::user()->id) }}">Thông tin cá nhân </a></li>
                      <li><a href="{{ route('getchangepass',Auth::user()->id) }}">Đổi mật khẩu</a></li>
                      @endif                                   
                  </ul>
                </a>
              @endif
            </div>
            @else
            <div class="iconAccount col-md-3">
                <a href="{{ route('login') }}"><img src="upload/icon/account.png" alt="">
                </a>
            </div>
            @endif
{{--            <div class="message col-md-3">--}}
{{--                <a style="margin-left: 146px;" href=""><img width="35px"; height="35px" src="upload/logo/tb.png" alt=""></a>--}}
{{--            </div>--}}
          </div>
          </div>
    </div>
  </div>       
  </div>
  <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
    <div class="container">
      <div class="row">
        <div class="navbar-header col-md-2">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->           
        </div>
        <!-- <div class="col-md-5">
            <form method="get" action="{{ route('search') }}">
              <div class="header-search">           
                  <input class="namerecipe" placeholder="Tìm kiếm công thức" type="text" name="key">
                  <button type="submit" class="btn-header--search">
                    <i class="fas fa-search"></i>
                  </button>
               </div>
          </form>
        </div> -->

        
        <!-- <div class="col-md-5 login-box" >       
          <div class="row col-md-10">
            <div class=" postRecipe col-md-6 col-xs-8">
              <a href="{{route('post')}}" onclick="myFunction()">
                <div style="margin-top: 5px;">
                  <img width="30px"; height="30px" src="upload/logo/post.png" alt=""> Đăng công thức
                </div>
              </a>
            </div>
            {{-- <div class="message col-md-3 col-xs-4">
                <a href=""><img width="30px"; height="30px" src="upload/logo/tb.png" alt=""></a>
            </div> --}}
      </div> -->
     
  </nav> 
</header>
