<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="topbar">
            <div class="content-topbar container h-100">
                <div class="left-topbar">
                    <span class="left-topbar-item flex-wr-s-c">
                        <span>
                            Đà Nẵng , Việt Nam
                        </span>

                        <span>
                            &emsp;
                            +84 399 355 04
                        </span>
                    </span>

                    <a href="gioithieu" class="left-topbar-item">
                        Giới thiệu
                    </a>

                    <a href="lienhe" class="left-topbar-item">
                        Liên hệ
                    </a>
                    
                    
                </div>

                <div class="right-topbar">
                    @if (isset($nguoidung))
                        <a href="thongtin/{{$nguoidung->id}}/{{$nguoidung->quyen}}.html" class="left-topbar-item">
                            {{$nguoidung->name}}
                        </a>
                        <a href="dangbai" class="left-topbar-item">
                            Đăng bài
                        </a>
                        <a href="dangxuat" class="left-topbar-item">
                            Đăng xuất
                        </a>
                    @else
                        <a href="dangky" class="left-topbar-item">
                            Đăng kí
                        </a>

                        <a href="dangnhap" class="left-topbar-item">
                            Đăng nhập
                    </a>
                    @endif
                </div>
            </div>
        </div>

        <!--  -->
        <div class="wrap-logo container">
            <!-- Logo desktop -->
            <div class="logo">
                <a href="./"><img src="upload/logo/logo.png" alt="LOGO"></a>
            </div>

            @include('home.layout.slide')
        </div>

        <!--  -->
        <div class="wrap-main-nav">
            <div class="main-nav">
                <!-- Menu desktop -->
                <nav class="menu-desktop">
                    <a class="logo-stick" href="./">
                        <img src="upload/logo/logo.png" alt="LOGO">
                    </a>

                    <ul class="main-menu">
                        <li class="main-menu-active"><a href="./">TRANG CHỦ</a></li>
                        @foreach ($theloai_chung as $item)
                        @if (count($item->loaitin) > 0)
                        <li class="main-menu">
                            <a href="danhmuctheloai/{{$item->id}}/{{$item->TenKhongDau}}.html">{{$item->Ten}}</a>
                            <ul class="sub-menu">
                                @foreach ($item->loaitin as $items)
                                <li><a href="danhmucloaitin/{{$items->id}}/{{$items->TenKhongDau}}.html">{{$items->Ten}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Headline -->
<div class="container">
    <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
            <span class="text-uppercase cl2 p-r-8">
                TIN NÓNG:
            </span>

            <span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown"
                data-out="fadeOutDown">
                @foreach ($tintuc_chung as $item)
                <span class="dis-inline-block slide100-txt-item animated visible-false">
                    <a href="chitiet/{{$item->id}}/{{$item->TieuDeKhongDau}}.html">{{$item->TieuDe}}</a>
                </span>
                @endforeach
        </div>
        <form action="timkiem" method="get">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
            <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="Search" placeholder="Tìm kiếm ...">
            <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                <i class="zmdi zmdi-search"></i>
            </button>
        </div>
     </form>
    </div>
</div>