
<div class="span3" id="sidebar">
    <?php $active = $_GET['active']; ?>
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li @if($active == 'category' ) class="active" @endif>
            <a href="admin/category/list?active=category"><i class="icon-chevron-right"></i>Quản lý thể loại</a>
        </li>
        <li @if($active == 'dish' ) class="active" @endif>
            <a href="admin/dish/list?active=dish"><i class="icon-chevron-right"></i>Quản lý món ăn</a>
        </li>
        <li @if($active == 'dish1' ) class="active" @endif>
            <a href="admin/dish/otherlist?active=dish1"><i class="icon-chevron-right"></i>Danh sách món ăn dạng lưới</a>
        </li>
        <li @if($active == 'recipes' ) class="active" @endif>
            <a href="admin/recipes/list?active=recipes"><i class="icon-chevron-right"></i>Quản lý công thức</a>
        </li>
        <li @if($active == 'slide' ) class="active" @endif>
            <a href="admin/slide/list?active=slide"><i class="icon-chevron-right"></i>Quản lý slide</a>
        </li>
        <li @if($active == 'user' ) class="active" @endif>
            <a href="admin/user/list?active=user"><i class="icon-chevron-right"></i>Quản lý user</a>
        </li>       
        <li>
            <a href="#"><i class="icon-chevron-right"></i>Thông tin cá nhân</a>
        </li> 
        <li>
            <a href="{{ route('trang-chu') }}"><i class="icon-chevron-right"></i>Thoát</a>
        </li>     
    </ul>
</div>