@extends('admin.layout.index')
@section('title')
Trang sửa người dùng
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
                        <h4>Sửa người dùng</h4>
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
                        <form action="admin/user/sua/{{$user->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Họ & Tên</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Name" class="form-control"
                                        value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Email" readonly class="form-control"
                                        value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hình ảnh</label>
                                <div class="col-sm-10">
                                    <img src="upload/user/{{$user->hinh}}" width="50px" height="50px" alt="">
                                    <input type="file" name="Hinh" class="form-control Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                <label class="col-sm-2 col-form-label">
                                    <p><input type="checkbox" name="changePassword" id="checkchangePassword">Chọn vào đấy nếu muốn đổi mật khẩu</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mật khẩu</label>
                                <div class="col-sm-10">
                                    <input type="password" name="Password" disabled class="form-control password"
                                        placeholder="Nhập mật khẩu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                                <div class="col-sm-10">
                                    <input type="password" disabled name="PasswordAgain" class="form-control password"
                                        placeholder="Nhập mật khẩu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Số điện thoại</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Phone" class="form-control"
                                        value="{{$user->phone}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Địa chỉ</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Address" class="form-control"
                                        value="{{$user->address}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nghề nghiệp</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Profession" class="form-control"
                                        value="{{$user->profession}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Level</label>
                                <div class="col-sm-10">
                                    <input type="radio"
                                    @if ($user->quyen == 1)
                                        {{"checked"}}
                                    @endif
                                    name="Quyen" id="" value="1">
                                    <span>ADMIN</span>
                                    <input type="radio"
                                    @if ($user->quyen == 0)
                                        {{"checked"}}
                                    @endif
                                    name="Quyen" id="" value="0">
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
@section('script')
    <script>
        $(document).ready(function(){
            $("#checkchangePassword").change(function(){
                if ($(this).is(":checked")) {
                    $(".password").removeAttr('disabled');

                } else {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection