@extends('home.layout.index')
@section('title')
TRANG ĐĂNG KÝ
@endsection
@section('content')
<!-- Feature post -->
<section class="bg0">
    <div class="container">
        <div class="row m-rl--1">
            <div class="col-md-6 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-3 how1 pos-relative">
                    <img width="80%" src="upload/dangnhap/t1.png" alt="">
                </div>
            </div>

            <div class="col-md-6 p-rl-1">
                <form action="dangky" method="post" class="was-validated">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}<br>
                            @endforeach
                        </div>
                        @endif

                        @if(session('thongbao'))
                        <div class="alert alert-danger">
                            {{session('thongbao')}}
                        </div>
                        @endif
                    <br>
                    <span>
                        <center><strong>Đăng ký người dùng</strong></center>
                    </span>
                    <div class="form-group">
                        <label for="uname">Họ & Tên :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Nhập họ & tên của bạn"
                            name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="uname">Email :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Nhập địa chỉ email của bạn"
                            name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu của bạn"
                            name="pass" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Nhập lại mật khẩu:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu của bạn"
                            name="passAgain" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="btn-dk" class="btn btn-primary">Đăng ký</button>
                        <a class="txt2" href="dangnhap">
                            Đã có tài khoản ! vui lòng đăng nhập.
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection