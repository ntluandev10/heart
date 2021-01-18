@extends('admin.layout.index')
@section('title')
    Trang thêm tin tức
@endsection
@section('content')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-ui-add bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Thêm thể loại</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}<br>
                    @endforeach
                </div>
                @endif

                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">

                <!-- Basic Form Inputs card start -->
                <div class="card">
                    <div class="card-block">
                        <form action="admin/tintuc/them" method="POST" enctype="multipart/form-data">
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
                                <label class="col-sm-2 col-form-label">Nổi bật</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="Noibat" id="" value="1">
                                    <span>Có</span>
                                    <input type="radio" name="Noibat" id="" value="0">
                                    <span>Không</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button class="btn btn-inverse btn-round">Thêm</button>
                                    <button class="btn btn-danger btn-round">Làm mới</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Basic Form Inputs card end -->

            </div>
        </div>
    </div>
    <!-- Page body end -->
</div>
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