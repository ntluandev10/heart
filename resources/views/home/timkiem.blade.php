@extends('home.layout.index')
@section('content')
<!-- Breadcrumb -->
<div class="container">
    <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 p-r-30 m-tb-6">
            <a href="./" class="breadcrumb-item f1-s-3 cl9">
                TRANG CHỦ 
            </a>

            <span class="breadcrumb-item f1-s-3 cl9">
                TÌM KIẾM
            </span>
        </div>

        
    </div>
</div>

<!-- Page heading -->
<div class="container p-t-4 p-b-40">
    <h2 class="f1-l-1 cl2">
        Bạn cần tìm về gì ? =>>> {{$timkiem}}
    </h2>
</div>

<!-- Post -->
<section class="bg0 p-b-55">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-80">
                <div class="p-r-10 p-r-0-sr991">
                    <div class="m-t--40 p-b-40">
                        @if (count($tintuc) > 0)
                        @foreach ($tintuc as $item)
                        <!-- Item post -->
                        <div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
                            <a href="chitiet/{{$item->id}}/{{$item->TieuDeKhongDau}}.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                <img src="upload/tintuc/{{$item->Hinh}}" width="100%" alt="IMG">
                            </a>

                            <div class="size-w-9 w-full-sr575 m-b-25">
                                <h5 class="p-b-12">
                                    <a href="chitiet/{{$item->id}}/{{$item->TieuDeKhongDau}}.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                        {{$item->TieuDe}}
                                    </a>
                                </h5>

                                <div class="cl8 p-b-18">
                                    <a href="danhmucloaitin/{{$item->loaitin->id}}/{{$item->loaitin->TenKhongDau}}.html" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        {{$item->loaitin->Ten}}
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        {{$item->NgayDang}}
                                    </span>
                                </div>

                                <p class="f1-s-1 cl6 p-b-24">
                                    {!! $item->TomTat !!}
                                </p>

                                <a href="chitiet/{{$item->id}}/{{$item->TieuDeKhongDau}}.html" class="f1-s-1 cl9 hov-cl10 trans-03">
                                    xem chi tiết
                                    <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @else
                            Không tìm ra kết quả
                        @endif
                    </div>

                </div>
            </div>

            <div class="col-md-10 col-lg-4 p-b-80">
                <div class="p-l-10 p-rl-0-sr991">							
                    <!-- Subscribe -->
                    <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
                        <h5 class="f1-m-5 cl0 p-b-10">
                            ‎Đăng ký‎
                        </h5>

                        <p class="f1-s-1 cl0 p-b-25">
                            ‎Nhận tất cả nội dung mới nhất được gửi đến email của bạn vài lần một tháng.‎
                        </p>

                        <form class="size-a-9 pos-relative">
                            <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

                            <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Most Popular -->
                    <div class="p-b-23">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                ‎Phổ biến nhất‎
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
                    <div class="flex-c-s p-b-50">
                        <a href="#">
                            <img class="max-w-full" src="upload/logo/banner.png" alt="IMG">
                        </a>
                    </div>
                    
                    <!-- Tag -->
                    <div>
                        <div class="how2 how2-cl4 flex-s-c m-b-30">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Thẻ ghi
                            </h3>
                        </div>

                        <div class="flex-wr-s-s m-rl--5">
                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                SỨC KHỎE
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                SẮC ĐẸP
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                TINH THẦN
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                CAO TUỔI
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                PHỤ NỮ
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                TRẺ EM
                            </a>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection