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
                    @if ($user->hinh == null)
                        <img src="upload/logo/avatar_2x.png"alt="Sửa hình ảnh" />
                    @else
                        <img src="upload/user/{{$user->hinh}}"alt="Sửa hình ảnh" />
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        {{$user->name}}
                    </h5>
                    <h6>
                        @if ($user->quyen == 1)
                            QUẢN TRỊ VIÊN
                        @else
                            TÀI KHOẢN NGƯỜI DÙNG
                        @endif
                    </h6>
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
                                    ***{{$user->id}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Họ & Tên</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$user->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$user->email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Số điện thoại</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$user->phone}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Nghề nghiệp </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$user->profession}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Quê quán </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$user->address}}</p>
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