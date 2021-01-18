@extends('home.layout.index')
@section('title')
Trang thông tin người dùng
@endsection
@section('content')
<div class="container emp-profile">
    <form method="post" action="##" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    @if ($nguoidung->hinh == null)
                        <img src="upload/logo/avatar_2x.png"alt="Sửa hình ảnh" />
                    @else
                        <img src="upload/user/{{$nguoidung->hinh}}"alt="Sửa hình ảnh" />
                    @endif
                    <a href="suanguoidung/{{$nguoidung->id}}/{{$nguoidung->quyen}}.html">
                    <div class="file btn btn-lg btn-primary">
                        Đặt ảnh đại diện
                        <input type="submit" name="hinh" />
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        {{$nguoidung->name}}
                    </h5>
                    <h6>
                        @if ($nguoidung->quyen == 1)
                            QUẢN TRỊ VIÊN
                        @else
                            TÀI KHOẢN NGƯỜI DÙNG
                        @endif
                    </h6>
                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Timeline</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <a href="suanguoidung/{{$nguoidung->id}}/{{$nguoidung->quyen}}.html">
                    Chỉnh sửa thông tin
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Mã tài khoản </label>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    @php
                                        $rand = substr(md5(microtime()),rand(0,26),5);
                                        echo $rand;
                                    @endphp
                                    ***{{$nguoidung->id}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Họ & Tên</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$nguoidung->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$nguoidung->email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Số điện thoại</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$nguoidung->phone}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Nghề nghiệp </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$nguoidung->profession}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Quê quán </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$nguoidung->address}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection