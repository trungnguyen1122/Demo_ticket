<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a class="site_title" ><span>Trang quản trị</span></a>
        </div><br/>
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="padding-top:40px;">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-edit"></i>Sự kiện<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.list')}}">Danh sách sự kiện</a></li>
                            <li><a href="{{route('admin.confirmevent')}}">Phê duyệt sự kiện</a></li>
                            <li><a href="{{route('admin.hotevent')}}">Sự kiện hot</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-edit"></i>Cài đặt hệ thống<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.setting_banner')}}">Cài đặt ảnh banner</a></li>
                            <li><a href="{{route('admin.setting_category')}}">Thể loại sự kiện </a></li>
                            <li><a href="{{route('admin.setting_footer')}}">Footer</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-edit"></i>Danh sách người dùng</a></li>

                    <li><a><i class="fa fa-edit"></i>Danh sách order</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
