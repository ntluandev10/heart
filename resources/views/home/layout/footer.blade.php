<!-- Footer -->
<footer>
    <div class="bg2 p-t-40 p-b-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <a href="./">
                            <img class="max-s-full" src="upload/logo/logo2.png" alt="LOGO">
                        </a>
                    </div>

                    <div>
                        <p class="f1-s-1 cl11 p-b-16">
                            Phó Tổng Biên tập phụ trách: BS ***
                            <br>
                            Phó Tổng Biên tập: Nhà báo ***
                            <br>
                            Cơ quan chủ quản: Bộ Y tế
                            <br>
                            Giấy phép của Bộ Thông Tin và Truyền Thông - số ***/GP-BTTTT ngày **/**/**
                            <br>
                            Cấm sao chép dưới mọi hình thức nếu không có sự chấp thuận bằng văn bản
                        </p>

                        <div class="p-t-15">
                            <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fab fa-facebook-f"></span>
                            </a>

                            <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fab fa-twitter"></span>
                            </a>

                            <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fab fa-pinterest-p"></span>
                            </a>

                            <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fab fa-vimeo-v"></span>
                            </a>

                            <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fab fa-youtube"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <h5 class="f1-m-7 cl0">
                            ‎Bài viết phổ biến‎
                        </h5>
                    </div>

                    <ul>
                        @foreach ($tintuc_chung_2 as $item_tt)
                        <li class="flex-wr-sb-s p-b-20">
                            <a href="chitiet/{{$item_tt->id}}/{{$item_tt->TieuDekhongDau}}.html" class="size-w-4 wrap-pic-w hov1 trans-03">
                                <img src="upload/tintuc/{{$item_tt->Hinh}}" alt="IMG">
                            </a>

                            <div class="size-w-5">
                                <h6 class="p-b-5">
                                    <a href="chitiet/{{$item_tt->id}}/{{$item_tt->TieuDeKhongDau}}.html" class="f1-s-5 cl11 hov-cl10 trans-03">
                                        {{$item_tt->TieuDe}}
                                    </a>
                                </h6>

                                <span class="f1-s-3 cl6">
                                    {{$item_tt->NgayDang}}
                                </span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <h5 class="f1-m-7 cl0">
                            Danh mục hiện có
                        </h5>
                    </div>
                    <ul class="m-t--12">
                        @foreach ($theloai_chung_2 as $item_tl)
                        <li class="how-bor1 p-rl-5 p-tb-10">
                            <a href="danhmuctheloai/{{$item_tl->id}}/{{$item_tl->TenKhongDau}}.html" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                {{$item_tl->Ten}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>