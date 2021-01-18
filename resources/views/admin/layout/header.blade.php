<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="admin/dashboard">
                <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="admin/dashboard">
                <i class="ti-search"></i>
            </a>
            <a href="admin/dashboard">
                <img class="img-fluid" src="upload/logo/logo.png" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>

        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                    </div>
                </li>

                <li>
                    <a href="admin/dashboard" onclick="javascript:toggleFullScreen()">
                        <i class="ti-fullscreen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="user-profile header-notification">
                    <a href="#!">
                        @if (Auth::user()->hinh == null)
                            <img src="upload/logo/avatar_2x.png" class="img-radius" alt="User-Profile-Image">
                        @else
                            <img src="upload/user/{{Auth::user()->hinh}}" class="img-radius" alt="User-Profile-Image">
                        @endif
                        <span>{{Auth::user()->name}}</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        <li>
                            <a href="admin/thongtin/{{Auth::user()->id}}">
                                <i class="ti-user"></i> Thông tin
                            </a>
                        </li>
                        <li>
                            <a href="admin/user/sua/{{Auth::user()->id}}">
                                <i class="ti-settings"></i> Chỉnh sửa
                            </a>
                        </li>
                        <li>
                            <a href="admin/dangxuat">
                                <i class="ti-layout-sidebar-left"></i> Đăng xuất
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>