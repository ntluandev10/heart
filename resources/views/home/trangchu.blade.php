@extends('home.layout.index')
@section('title')
Trang chủ
@endsection
@section('content')

<!-- Feature post -->
<section class="bg0">
    <div class="container">
        <div class="row m-rl--1">
            <div class="col-md-6 p-rl-1 p-b-2">
                @foreach ($tin_rd1 as $item1)
                <div class="bg-img1 size-a-3 how1 pos-relative"
                    style="background-image: url(upload/tintuc/{{$item1->Hinh}});">
                    <a href="chitiet/{{$item1->id}}/{{$item1->TieuDeKhongDau}}.html"
                        class="dis-block how1-child1 trans-03"></a>

                    <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                        <a href="danhmuctheloai/{{$item1->loaitin->theloai->id}}/{{$item1->loaitin->theloai->TenKhongDau}}.html"
                            class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                            {{$item1->loaitin->theloai->Ten}}
                        </a>

                        <h3 class="how1-child2 m-t-14 m-b-10">
                            <a href="chitiet/{{$item1->id}}/{{$item1->TieuDeKhongDau}}.html"
                                class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                {{$item1->TieuDe}}
                            </a>
                        </h3>

                        <span class="how1-child2">
                            <span class="f1-s-4 cl11">
                                Lượt xem : {{$item1->SoLuotXem}}&emsp;<i class="fa fa-eye" aria-hidden="true"></i>
                            </span>

                            <span class="f1-s-3 cl11 m-rl-3">
                                -
                            </span>

                            <span class="f1-s-3 cl11">
                                {{$item1->NgayDang}}
                            </span>
                        </span>
                    </div>

                </div>
                @endforeach
            </div>

            <div class="col-md-6 p-rl-1">
                <div class="row m-rl--1">
                    @foreach ($tin_rd2 as $item2)
                    <div class="col-12 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-4 how1 pos-relative"
                            style="background-image: url(upload/tintuc/{{$item2->Hinh}});">
                            <a href="danhmucloaitin/{{$item2->loaitin->id}}/{{$item2->loaitin->TenKhongDau}}.html"
                                class="dis-block how1-child1 trans-03">{{$item2->loaitin->Ten}}</a>
                            <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                <a href="danhmuctheloai/{{$item2->loaitin->theloai->id}}/{{$item2->loaitin->theloai->TenKhongDau}}.html"
                                    class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    {{$item2->loaitin->theloai->Ten}}
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="chitiet/{{$item2->id}}/{{$item2->TieuDeKhongDau}}.html"
                                        class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                        {{$item2->TieuDe}}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($tin_rd3 as $item3)
                    <div class="col-sm-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-5 how1 pos-relative"
                            style="background-image: url(upload/tintuc/{{$item3->Hinh}});">
                            <a href="danhmucloaitin/{{$item2->loaitin->id}}/{{$item2->loaitin->TenKhongDau}}.html"
                                class="dis-block how1-child1 trans-03">{{$item2->loaitin->Ten}}</a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="danhmuctheloai/{{$item1->loaitin->theloai->id}}/{{$item1->loaitin->theloai->TenKhongDau}}.html"
                                    class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    {{$item1->loaitin->theloai->Ten}}
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="chitiet/{{$item2->id}}/{{$item2->TieuDeKhongDau}}.html"
                                        class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                        {{$item1->TieuDe}}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach ($tin_rd4 as $item4)
                    <div class="col-sm-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-5 how1 pos-relative"
                            style="background-image: url(upload/tintuc/{{$item4->Hinh}});">
                            <a href="danhmucloaitin/{{$item4->loaitin->id}}/{{$item4->loaitin->TenKhongDau}}.html"
                                class="dis-block how1-child1 trans-03">{{$item4->loaitin->Ten}}</a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="danhmuctheloai/{{$item4->loaitin->theloai->id}}/{{$item4->loaitin->theloai->TenKhongDau}}.html"
                                    class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    {{$item4->loaitin->theloai->Ten}}
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="chitiet/{{$item4->id}}/{{$item4->TieuDeKhongDau}}.html"
                                        class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                        {{$item4->TieuDe}}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Post -->
<section class="bg0 p-t-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="p-b-20">
                    <!-- Entertainment -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl12 tab01-title">
                                SỨC KHỎE
                            </h3>


                        </div>


                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                                <div class="row">
                                    @foreach ($tin_suckhoe_2 as $item_sk2)
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="m-b-30">
                                            <a href="chitiet/{{$item_sk2->id}}/{{$item_sk2->TieuDeKhongDau}}.html"
                                                class="wrap-pic-w hov1 trans-03">
                                                <img src="upload/tintuc/{{$item_sk2->Hinh}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="chitiet/{{$item_sk2->id}}/{{$item_sk2->TieuDeKhongDau}}.html"
                                                        class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        {{$item_sk2->TieuDe}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="danhmucloaitin/{{$item_sk2->loaitin->id}}/{{$item_sk2->loaitin->TenKhongDau}}.html"
                                                        class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        {{$item_sk2->loaitin->Ten}}
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$item_sk2->NgayDang}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        @foreach ($tin_suckhoe as $item_sk)
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="chitiet/{{$item_sk->id}}/{{$item_sk->TieuDeKhongDau}}.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="upload/tintuc/{{$item_sk->Hinh}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="chitiet/{{$item_sk->id}}/{{$item_sk->TieuDeKhongDau}}.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$item_sk->TieuDe}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="danhmucloaitin/{{$item_sk->loaitin->id}}/{{$item_sk->loaitin->TenKhongDau}}.html" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        {{$item_sk->loaitin->Ten}}
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$item_sk->NgayDang}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Business -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl13 tab01-title">
                                KHOA HỌC
                            </h3>

                            
                        </div>


                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab2-1" role="tabpanel">
                                <div class="row">
                                    @foreach ($tin_kinhdoanh_2 as $item_kd2)
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="m-b-30">
                                            <a href="chitiet/{{$item_kd2->id}}/{{$item_kd2->TieuDeKhongDau}}.html"
                                                class="wrap-pic-w hov1 trans-03">
                                                <img src="upload/tintuc/{{$item_kd2->Hinh}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="chitiet/{{$item_kd2->id}}/{{$item_kd2->TieuDeKhongDau}}.html"
                                                        class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        {{$item_kd2->TieuDe}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="danhmucloaitin/{{$item_kd2->loaitin->id}}/{{$item_kd2->loaitin->TenKhongDau}}.html"
                                                        class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        {{$item_kd2->loaitin->Ten}}
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$item_kd2->NgayDang}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        @foreach ($tin_kinhdoanh as $item_kd)
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="chitiet/{{$item_kd->id}}/{{$item_kd->TieuDeKhongDau}}.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="upload/tintuc/{{$item_kd->Hinh}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="chitiet/{{$item_kd->id}}/{{$item_kd->TieuDeKhongDau}}.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$item_kd->TieuDe}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="danhmucloaitin/{{$item_kd->loaitin->id}}/{{$item_kd->loaitin->TenKhongDau}}.html" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        {{$item_kd->loaitin->Ten}}
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$item_kd->NgayDang}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Travel -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl14 tab01-title">
                                ĐỜI SỐNG
                            </h3>

                        </div>


                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
                                <div class="row">
                                    @foreach ($tin_doisong_2 as $item_ds2)
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="m-b-30">
                                            <a href="chitiet/{{$item_ds2->id}}/{{$item_ds2->TieuDeKhongDau}}.html"
                                                class="wrap-pic-w hov1 trans-03">
                                                <img src="upload/tintuc/{{$item_ds2->Hinh}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="chitiet/{{$item_ds2->id}}/{{$item_ds2->TieuDeKhongDau}}.html"
                                                        class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        {{$item_ds2->TieuDe}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="danhmucloaitin/{{$item_ds2->loaitin->id}}/{{$item_ds2->loaitin->TenKhongDau}}.html"
                                                        class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        {{$item_ds2->loaitin->Ten}}
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$item_ds2->NgayDang}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        @foreach ($tin_doisong as $item_ds)
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="chitiet/{{$item_ds->id}}/{{$item_ds->TieuDeKhongDau}}.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="upload/tintuc/{{$item_ds->Hinh}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="chitiet/{{$item_ds->id}}/{{$item_ds->TieuDeKhongDau}}.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{$item_ds->TieuDe}}
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="danhmucloaitin/{{$item_ds->loaitin->id}}/{{$item_ds->loaitin->TenKhongDau}}.html" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        {{$item_ds->loaitin->Ten}}
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        {{$item_ds->NgayDang}}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-10 col-lg-4">
                <div class="p-l-10 p-rl-0-sr991 p-b-20">
                    <!--  -->
                    <div>
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                PHỔ BIẾN NHẤT
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($tin_phobien as $item_pb)
                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    @php
                                        echo $i;
                                        $i++;
                                    @endphp
                                </div>

                                <a href="chitiet/{{$item_pb->id}}/{{$item_pb->TieuDeKhongDau}}.html" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    {{$item_pb->TieuDe}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!--  -->
                    <div class="flex-c-s p-t-8">
                        <a href="#">
                            <img class="max-w-full" src="upload/logo/banner.png" alt="IMG">
                        </a>
                    </div>

                    <!--  -->
                    <div class="p-t-50">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                MẠNG XÃ HỘI
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            <li class="flex-wr-sb-c p-b-20">
                                <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
                                    <span class="fab fa-facebook-f"></span>
                                </a>

                                <div class="size-w-3 flex-wr-sb-c">
                                    <span class="f1-s-8 cl3 p-r-20">
                                        6879 bạn bè
                                    </span>

                                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                        THÍCH
                                    </a>
                                </div>
                            </li>

                            <li class="flex-wr-sb-c p-b-20">
                                <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
                                    <span class="fab fa-twitter"></span>
                                </a>

                                <div class="size-w-3 flex-wr-sb-c">
                                    <span class="f1-s-8 cl3 p-r-20">
                                        568 theo dõi
                                    </span>

                                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                        THEO DÕI
                                    </a>
                                </div>
                            </li>

                            <li class="flex-wr-sb-c p-b-20">
                                <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
                                    <span class="fab fa-youtube"></span>
                                </a>

                                <div class="size-w-3 flex-wr-sb-c">
                                    <span class="f1-s-8 cl3 p-r-20">
                                        5039 đăng ký
                                    </span>

                                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                        ĐĂNG KÝ
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Latest -->
<section class="bg0 p-t-60 p-b-35">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-20">
                <div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
                    <h3 class="f1-m-2 cl3 tab01-title">
                        ‎Bài viết mới nhất‎
                    </h3>
                </div>

                <div class="row p-t-35">
                    @foreach ($tin_moinhat as $item_mn)
                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="chitiet/{{$item_mn->id}}/{{$item_mn->TieuDeKhongDau}}.html" class="wrap-pic-w hov1 trans-03">
                                <img src="upload/tintuc//{{$item_mn->Hinh}}" width="100% !important" height="180px !important" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="chitiet/{{$item_mn->id}}/{{$item_mn->TieuDeKhongDau}}.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        {{$item_mn->TieuDe}}
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="danhmucloaitin/{{$item_mn->loaitin->id}}/{{$item_mn->loaitin->TenKhongDau}}.html" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        {{$item_mn->loaitin->Ten}}
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        {{$item_mn->NgayDang}}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-10 col-lg-4">
                <div class="p-l-10 p-rl-0-sr991 p-b-20">
                    <!-- Video -->
                    <div class="p-b-55">
                        <div class="how2 how2-cl4 flex-s-c m-b-35">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                ‎Video nổi bật‎
                            </h3>
                        </div>

                        <div>
                            <div class="wrap-pic-w pos-relative">
                                <img src="home_asset/images/video-01.jpg" alt="IMG">

                                <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal"
                                    data-target="#modal-video-01">
                                    <span class="fab fa-youtube"></span>
                                </button>
                            </div>

                            <div class="p-tb-16 p-rl-25 bg3">
                                <h5 class="p-b-5">
                                    <a href="#" class="f1-m-3 cl0 hov-cl10 trans-03">
                                       Thư giản nhẹ với bản nhạc nhẹ
                                    </a>
                                </h5>

                                <span class="cl15">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        Design NGUYỄN THÀNH LUÂN
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        May 25 , 2000
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Subscribe -->
                    <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
                        <h5 class="f1-m-5 cl0 p-b-10">
                            Đăng ký
                        </h5>

                        <p class="f1-s-1 cl0 p-b-25">
                            ‎Nhận tất cả nội dung mới nhất được gửi đến email của bạn vài lần một tháng.‎
                        </p>

                        <form class="size-a-9 pos-relative">
                            <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email"
                                placeholder="Email của bạn.">

                            <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Tag -->
                    <div class="p-b-55">
                        <div class="how2 how2-cl4 flex-s-c m-b-30">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                GỢI Ý
                            </h3>
                        </div>

                        <div class="flex-wr-s-s m-rl--5">
                            <a href="#"
                                class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                SỨC KHỎE
                            </a>

                            <a href="#"
                                class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                KHOA HỌC
                            </a>

                            <a href="#"
                                class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                ĐỜI SỐNG
                            </a>

                            <a href="#"
                                class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                GIÁO DỤC
                            </a>

                            <a href="#"
                                class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                LÀN DA
                            </a>

                            <a href="#"
                                class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                MŨI MIỆNG
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection