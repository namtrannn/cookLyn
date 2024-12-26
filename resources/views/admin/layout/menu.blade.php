
<div class="span3" id="sidebar"> 

    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li @if (Route::current()->getName() == 'dashboard'){{'active'}}@endif" 
        class="{{ Request::is('admin/category/list') ? 'active' : '' }}">
            <a href="admin/category/list"><i class="fas fa-file-alt"></i> Quản lý thể loại</a>
        </li> 
       
        <li class="{{ Request::is('admin/dish/list') ? 'active' : '' }}">
            <a href="admin/dish/list"><i class="fas fa-hamburger"></i> Quản lý món ăn</a>
        </li>
            
       
        <li class="{{ Request::is('admin/dish/otherlist') ? 'active' : '' }}">
            <a href="admin/dish/otherlist"><i class="fas fa-hamburger"></i> </i>Danh sách món ăn dạng lưới</a>
        </li>
           
        {{-- <li>
            <a href="admin/dish/otherlist"><i class="icon-chevron-right"></i>Danh sách món ăn dạng lưới</a>
        </li> --}}
        <li class="{{ Request::is('admin/recipes/list') ? 'active' : '' }}">
            <a href="admin/recipes/list"><i class="fas fa-file-alt"></i> </i>Quản lý công thức</a>
        </li>
        @if(Auth::check())
            @if(Auth::user()->role == 1 || Auth::user()->role == 2)
            <li class="{{ Request::is('admin/slide/list') ? 'active' : '' }}">
                <a href="admin/slide/list"><i class="fas fa-sliders-h"></i> Quản lý slide</a>
            </li>
            @endif
        @endif  
        @if(Auth::check())
            @if(Auth::user()->role == 1)
                <li class="{{ Request::is('admin/user/list') ? 'active' : '' }}">
                    <a href="admin/user/list"><i class="fas fa-users"></i> Quản lý user</a>
                </li>     
            @endif
        @endif  
        @if(Auth::check())
            @if(Auth::user()->role == 1 || Auth::user()->role == 2)
            <li class="{{ Request::is('admin/tukhoa/list') ? 'active' : '' }}">
                <a href="admin/tukhoa/list"><i class="fas fa-key"></i> Quản lý từ khóa tìm kiếm</a>
            </li>
            @endif
        @endif  
        {{-- <li >
            <a href="{{ route('get-thong-tin-ca-nhan',Auth::user()->id) }}"><i class="icon-chevron-right"></i>Thông tin cá nhân</a>
        </li>      --}}
        <li > 
            <a href="{{ route('trang-chu') }}"><i class="fas fa-sign-out-alt"></i> Thoát</a>
        </li>     
        
    </ul>
</div>