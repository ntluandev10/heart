@extends('home.layout.index')
@section('title')
TRANG ĐĂNG NHẬP
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
                <form action="dangnhap" method="post" class="was-validated">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                    @if(session('loi'))
                    <div class="alert alert-danger">
                        {{session('loi')}}
                    </div>
                    @endif
                    <br><br><br>
                    <span>
                        <center>
                        <h4 class="f1-l-4 cl3 p-b-12">
                            Đăng nhập người dùng
                        </h4></center>
                    </span>
                    <div class="form-group">
                        <label for="uname">Email :</label>
                        <input type="text" class="form-control" id="uname" placeholder="Nhập địa chỉ email của bạn"
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu của bạn"
                            name="pass">
                    </div>
                    <div class="form-group form-check">
                        <input class="form-check-input" type="checkbox" name="remember"><label class="form-check-label">
                            Ghi nhớ
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark hov-btn1 stretched-link">Đăng Nhập</button>
                        <a class="txt2" href="dangky">
                            Tạo tài khoản mới ?
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection