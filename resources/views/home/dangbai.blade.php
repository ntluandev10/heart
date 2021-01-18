@extends('home.layout.index')
@section('title')
TRANG ĐĂNG BÀI
@endsection
@section('content')
<!-- Feature post -->
<section class="bg0">
    <div class="container">
        <div class="row m-rl--1">
            <div class="col-md-4 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-3 how1 pos-relative">
                    <img width="90%" src="upload/logo/banner-2.jpg" alt="">
                </div>
            </div>

            <div class="col-md-8 p-rl-1">
                <form action="dangbai" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tiêu đề</label>
                        <div class="col-sm-10">
                            <input type="text" name="Tieude" class="form-control"
                                placeholder="Nhập tiêu đề">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Thể loại</label>
                        <div class="col-sm-10">
                            <select name="Theloai" id="Theloai" class="form-control">
                                <option value="opt1">Chọn thể loại</option>
                                @foreach ($theloai as $item)
                                <option value="{{$item->id}}">{{$item->Ten}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Loại tin</label>
                        <div class="col-sm-10">
                            <select name="Loaitin" id="Loaitin" class="form-control">
                                <option value="opt1">Chọn loại tin</option>
                                @foreach ($loaitin as $item1)
                                <option value="{{$item1->id}}">{{$item1->Ten}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Hình ảnh</label>
                        <div class="col-sm-10">
                            <input type="file" name="Hinh" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tóm tắt</label>
                        <div class="col-sm-10">
                            <textarea name="Tomtat" id="demo" class="ckeditor"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nội dung</label>
                        <div class="col-sm-10">
                            <textarea name="Noidung" id="demo" class="ckeditor"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <button class="btn btn-dark hov-btn1 stretched-link">Đăng bài</button>
                            <button class="btn btn-danger btn-round">Làm mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $("#Theloai").change(function () {
            var idTheLoai = $(this).val();
            $.get("admin/ajax/loaitin/" + idTheLoai, function (data) {
                $("#Loaitin").html(data);
            });
        });
    });
</script>
@endsection