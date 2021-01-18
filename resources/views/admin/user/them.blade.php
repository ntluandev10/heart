@extends('admin.layout.index')
@section('title')
    Trang thêm người dùng
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
                        <h4>Thêm người dùng</h4>
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
                        <form action="admin/user/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Họ & Tên</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Name" class="form-control"
                                        placeholder="Nhập họ & tên của bạn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Email" class="form-control"
                                        placeholder="Nhập email của bạn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hình ảnh</label>
                                <div class="col-sm-10">
                                    <input type="file" name="Hinh" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mật khẩu</label>
                                <div class="col-sm-10">
                                    <input type="password" name="Password" class="form-control"
                                        placeholder="Nhập mật khẩu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                                <div class="col-sm-10">
                                    <input type="password" name="PasswordAgain" class="form-control"
                                        placeholder="Nhập mật khẩu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Số điện thoại</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Phone" class="form-control"
                                        placeholder="Nhập số điện thoại của bạn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Địa chỉ</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Address" class="form-control"
                                        placeholder="Nhập địa chỉ của bạn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nghề nghiệp</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Profession" class="form-control"
                                        placeholder="Nhập nghề nghiệp của bạn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Level</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="Quyen" id="" value="1">
                                    <span>ADMIN</span>
                                    <input type="radio" name="Quyen" id="" value="0">
                                    <span>KHÁCH</span>
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