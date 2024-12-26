<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </a>
            <a class="brand" href="{{ route('trang-chu') }}">Quay lại trang chủ</a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    @if(Auth::check())
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><img style="border-radius: 50%" width="25px" height="25px" src="upload/avatar/{{Auth::user()->avatar}}" alt=""> {{Auth::user()->name}} <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="{{ route('get-information',Auth::user()->id) }}">Cá nhân</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="{{ route('logouts') }}">Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Username <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="#">Cá nhân</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="{{ route('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
                <ul class="nav">
                    <li class="active">
                        <a href="admin/category/list?active=category">Trang quản trị</a>
                     </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

</div>