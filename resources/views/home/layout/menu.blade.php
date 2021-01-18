<div class="header-mid d-none d-md-block">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- Logo -->
            <div class="col-xl-3 col-lg-3 col-md-3">
                <div class="logo">

                    <a href="./"><img src="upload/logo/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9">
                <div class="header-banner f-right ">
                    @include('home.layout.slide')
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-bottom header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                <!-- sticky -->
                <div class="sticky-logo">
                    <a href="./"><img src="upload/logo/logo.png" alt=""></a>
                </div>
                <!-- Main-menu -->
                <div class="main-menu d-none d-md-block">
                    <nav>
                        <ul id="navigation">
                            @foreach($theloai_chung as $tl)
                            <li><a href="danhmuctheloai/{{$tl->id}}/{{ $tl->TenKhongDau }}.html">{{$tl->Ten}}</a>
                                @if(count($tl->loaitin) > 0)
                                <ul class="submenu">
                                    @foreach($tl->loaitin as $lt)
                                    <li><a href="danhmucloaitin/{{$lt->id}}/{{ $lt->TenKhongDau }}.html">{{$lt->Ten}}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach

                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4">
               
            </div>
            <!-- Mobile Menu -->
            <div class="col-12">
                <div class="mobile_menu d-block d-md-none"></div>
            </div>
        </div>
    </div>
</div>