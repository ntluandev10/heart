@extends('home.layout.index')
@section('content')
<!-- Breadcrumb -->
<div class="container">
    <div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 p-r-30 m-tb-6">
            <a href="./" class="breadcrumb-item f1-s-3 cl9">
                Trang chủ
            </a>

            <a href="./" class="breadcrumb-item f1-s-3 cl9">
                CHI TIẾT
            </a>

            <span class="breadcrumb-item f1-s-3 cl9">
                {{$tintuc->TieuDe}}
            </span>
        </div>
    </div>
</div>

<!-- Content -->
<section class="bg0 p-b-140 p-t-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-30">
                <div class="p-r-10 p-r-0-sr991">
                    <!-- Blog Detail -->
                    <div class="p-b-70">
                        <a href="danhmucloaitin/{{$tintuc->id}}/{{$tintuc->TenKhongDau}}.html"
                            class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                            {{$tintuc->loaitin->Ten}}
                        </a>

                        <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                            {{$tintuc->TieuDe}}
                        </h3>

                        <div class="flex-wr-s-s p-b-40">
                            <span class="f1-s-3 cl8 m-r-15">
                                <span>
                                    Ngày đăng : {{$tintuc->NgayDang}}
                                </span>
                            </span>

                            <span class="f1-s-3 cl8 m-r-15">
                                {{$tintuc->SoLuotXem}} Lượt xem
                            </span>

                            <a href="./" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
                                {{$comment->count()}} Bình luận
                            </a>
                        </div>

                        <div class="wrap-pic-max-w p-b-30">
                            <img src="upload/tintuc/{{$tintuc->Hinh}}" width="100%" height="300px" alt="IMG">
                        </div>

                        <p class="f1-s-11 cl6 p-b-25">
                            {!! $tintuc->TomTat !!}
                        </p>

                        <p class="f1-s-11 cl6 p-b-25">
                            {!! $tintuc->NoiDung !!}
                        </p>

                        <!-- Tag -->
                        <div class="flex-s-s p-t-12 p-b-15">
                            <span class="f1-s-12 cl5 m-r-8">
                                Thẻ ghi:
                            </span>

                            <div class="flex-wr-s-s size-w-0">
                                @foreach($theloai as $tl)
                                @foreach($tl->loaitin as $lt)
                                <a href="danhmucloaitin/{{$lt->id}}/{{$lt->TenKhongDau}}.html"
                                    class="f1-s-12 cl8 hov-link1 m-r-15">
                                    {{$lt->Ten}}
                                </a>
                                @endforeach
                                @endforeach
                            </div>
                        </div>

                        <!-- Share -->
                        <div class="flex-s-s">
                            <span class="f1-s-12 cl5 p-t-1 m-r-15">
                                Chia Sẻ :
                            </span>

                            <div class="flex-wr-s-s size-w-0">
                                <a href="#"
                                    class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-facebook-f m-r-7"></i>
                                    Facebook
                                </a>

                                <a href="#"
                                    class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-twitter m-r-7"></i>
                                    Twitter
                                </a>

                                <a href="#"
                                    class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-google-plus-g m-r-7"></i>
                                    Google+
                                </a>

                                <a href="#"
                                    class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                    <i class="fab fa-pinterest-p m-r-7"></i>
                                    Pinterest
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- Detail --}}
                    <div class="container">
                        @foreach ($benhvien as $item_bv)
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="upload/benhvien/{{$item_bv->Hinh}}" width="100% !important"
                                    height="130px!important" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <strong><a href="{{$item_bv->Link}}">{{$item_bv->TenBenhVien}}</a></strong>
                                    </div>
                                    <div class="col-lg-12" height="130px!important">
                                        <strong>{!! $item_bv->ThongTin !!}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <br>
                        <hr><br>
                        @foreach ($thuoc as $item_t)
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="upload/thuoc/{{$item_t->Hinh}}" width="100% !important"
                                    height="130px!important" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <strong><a href="{{$item_t->Link}}">{{$item_t->TenThuoc}}</a></strong>
                                    </div>
                                    <div class="col-lg-12" height="130px!important">
                                        <strong>{!! $item_t->ThongTin !!}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <br>
                        <hr><br>
                    </div>
                    <br><br>
                    {{-- Detail --}}
                    {{-- comment --}}
                    <div class="container">

                        <div class="card">
                            <div class="card-body">
                                @foreach ($comment as $item_cm)
                                <div class="row">
                                    <div class="col-md-2">
                                        @if ($item_cm->user->hinh == null)
                                        <img src="upload/logo/avatar_2x.png" class="img img-rounded img-fluid" />
                                        @else
                                        <img src="upload/user/{{$item_cm->user->hinh}}"
                                            class="img img-rounded img-fluid" />
                                        @endif
                                        <p class="text-secondary text-center">{{$item_cm->ThoiGianBinhLuan}}</p>
                                    </div>
                                    <div class="col-md-10">
                                        <p>
                                            <a class="float-left"
                                                href="thongtindetail/{{$item_cm->user->id}}/{{$item_cm->user->quyen}}.html"><strong>{{$item_cm->user->name}}</strong></a>
                                        </p>
                                        <div class="clearfix"></div>
                                        {!! $item_cm->NoiDung !!}
                                        <p>
                                            <a class="float-right btn btn-outline-primary ml-2"> <i
                                                    class="fa fa-reply"></i> Trả lời</a>
                                            <a class="float-right btn text-white btn-danger"> <i
                                                    class="fa fa-heart"></i> Thích</a>
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Leave a comment -->
                    <div>
                        <h4 class="f1-l-4 cl3 p-b-12">
                            ‎Để lại một bình luận‎
                        </h4>


                        @if (isset($nguoidung))
                        <form action="binhluan" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="idtin" value="{{$tintuc->id}}">
                            <input type="hidden" name="iduser" value="{{$nguoidung->id}}">
                            <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20"
                                name="comment" placeholder="Nội dung bình luận..."></textarea>
                            <button type="submit"
                                class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
                                Gửi bình luận
                            </button>
                        </form>
                        @else
                        <form action="binhluan" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20"
                                name="comment" placeholder="Nội dung bình luận..."></textarea>
                        </form>
                        <a href="dangnhap" class="btn btn-dark hov-btn1 stretched-link">Đăng nhập</a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-10 col-lg-4 p-b-30">
                <div class="p-l-10 p-rl-0-sr991 p-t-70">
                    <!-- Category -->
                    <div class="p-b-60">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                DANH MỤC @foreach ($theloai as $item_tl)
                                {{$item_tl->Ten}}
                                @endforeach
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            @foreach ($theloai as $item_thl)
                            @foreach ($item_thl->loaitin as $item_lt)
                            <li class="how-bor3 p-rl-4">
                                <a href="danhmucloaitin/{{$item_lt->id}}/{{$item_lt->TenKhongDau}}.html"
                                    class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
                                    {{$item_lt->Ten}} <strong>**</strong> ({{count($item_lt->tintuc)}})
                                </a>
                            </li>
                            @endforeach
                            @endforeach
                        </ul>
                    </div>


                    <!-- Popular Posts -->
                    <div class="p-b-30">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                BÀI VIẾT LIÊN QUAN
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            @foreach ($tin_ganday as $item_gd)
                            <li class="flex-wr-sb-s p-b-30">
                                <a href="chitiet/{{$item_gd->id}}/{{$item_gd->TieuDeKhongDau}}.html"
                                    class="size-w-10 wrap-pic-w hov1 trans-03">
                                    <img src="upload/tintuc/{{$item_gd->Hinh}}" width="100% !important" alt="IMG">
                                </a>

                                <div class="size-w-11">
                                    <h6 class="p-b-4">
                                        <a href="chitiet/{{$item_gd->id}}/{{$item_gd->TieuDeKhongDau}}.html"
                                            class="f1-s-5 cl3 hov-cl10 trans-03">
                                            {{$item_gd->TieuDe}}
                                        </a>
                                    </h6>

                                    <span class="cl8 txt-center p-b-24">
                                        <a href="danhmucloaitin/{{$item_gd->loaitin->id}}/{{$item_gd->loaitin->TenKhongDau}}.html"
                                            class="f1-s-6 cl8 hov-cl10 trans-03">
                                            {{$item_gd->loaitin->Ten}}
                                        </a>

                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>

                                        <span class="f1-s-3">
                                            {{$item_gd->NgayDang}}
                                        </span>
                                    </span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('css')
<style>
    .card-inner {
        margin-left: 4rem;
    }
</style>
@endsection