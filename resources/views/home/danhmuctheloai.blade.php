@extends('home.layout.index')
@section('content')
<!-- Page heading -->
<div class="container p-t-4 p-b-40">
    <h2 class="f1-l-1 cl2">
        DANH MỤC THỂ LOẠI : {{$theloai->Ten}}
    </h2>
</div>

<!-- Post -->
<section class="bg0 p-b-55">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-80">
                <div class="row">
                    @foreach($theloai->loaitin as $tl)
                    @foreach ($tl->tintuc as $item)
                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->
                        <div class="m-b-45">
                            <a href="chitiet/{{$item->id}}/{{$item->TieuDeKhongDau}}.html" class="wrap-pic-w hov1 trans-03">
                                <img src="upload/tintuc/{{$item->Hinh}}" width="100%" height="150px" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="chitiet/{{$item->id}}/{{$item->TieuDeKhongDau}}.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        {{$item->TieuDe}}
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="danhmuctheloai/{{$item->id}}/{{$item->TenKhongDau}}.html" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        {{$item->Ten}}
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        {{$item->NgayDang}}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex-wr-s-c m-rl--7 p-t-15">
                    <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
                    <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>
                </div>
            </div>

            <div class="col-md-10 col-lg-4 p-b-80">
                <div class="p-l-10 p-rl-0-sr991">
                    <!-- Subscribe -->
                    <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
                        <h5 class="f1-m-5 cl0 p-b-10">
                            Đăng ký
                        </h5>

                        <p class="f1-s-1 cl0 p-b-25">
                            Bạn sẽ nhận được nhiều tin tức có ích nhất.
                        </p>

                        <form class="size-a-9 pos-relative">
                            <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email"
                                placeholder="Email">

                            <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Most Popular -->
                    <div class="p-b-23">
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
                    <div class="flex-c-s p-b-50">
                        <a href="#">
                            <img class="max-w-full" src="upload/logo/banner.png" alt="IMG">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection