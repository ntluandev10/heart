@extends('admin.layout.index')
@section('title')
Trang Sửa thuốc
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
                        <h4>Sửa thuốc</h4>
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
                        <form action="admin/thuoc/sua/{{$thuoc->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên thuốc</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Tenthuoc" class="form-control" value="{{$thuoc->TenThuoc}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Thể loại</label>
                                <div class="col-sm-10">
                                    <select name="Theloai" class="form-control">
                                        <option value="opt1">Chọn thể loại</option>
                                        @foreach ($theloai as $item)
                                        <option
                                        @if ($item->id == $thuoc->idTheLoai)
                                            {{"selected"}}
                                        @endif
                                        value="{{$item->id}}">{{$item->Ten}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hình ảnh</label>
                                <div class="col-sm-10">
                                    <img src="upload/thuoc/{{$thuoc->Hinh}}" width="100px" height="100px" alt="">
                                    <input type="file" name="Hinh" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nội dung</label>
                                <div class="col-sm-10">
                                    <textarea name="Noidung" id="demo" class="ckeditor">{{$thuoc->ThongTin}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Link</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Link" id="" value="{{$thuoc->Link}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-inverse btn-round">Sửa</button>
                                    <button class="btn btn-danger btn-round">Làm mới</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Basic Form Inputs card end -->
        </div>
    </div>
</div>
@endsection