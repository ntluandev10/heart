@extends('home.layout.index')
@section('title')
Trang sửa người dùng
@endsection
@section('content')
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10">
        </div>
        <div class="col-sm-2"><a href="/users" class="pull-right"></a></div>
    </div>
    @if(Session::has('message'))
    <script type="text/javascript">
        Materialize.toast("{{ Session::get('message')['msg'] }}", 4000, "{{ Session::get('mensagem')['class'] }}");
    </script>
    @endif()
    <form method="post" id="registrationForm" enctype="multipart/form-data" class="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-sm-3">
                <!--left col-->
                <div class="text-center">
                    @if ($nguoidung->hinh == null)
                    <img src="upload/logo/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    @else
                    <img src="upload/user/{{$nguoidung->hinh}}" class="avatar img-circle img-thumbnail" alt="avatar">
                    @endif
                    <h6>Tải lên một ảnh khác...</h6>
                    <input type="file" name="hinh" id="hinh" class="text-center center-block file-upload"
                        value="Chọn hình ảnh">
                </div>
            </div>
            <!--/col-3-->
            <div class="col-sm-6">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="./">HỌ & TÊN : {{$nguoidung->name}}</a></li>
                </ul>


                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h4>Họ & tên</h4>
                                </label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{$nguoidung->name}}" placeholder="Nhập họ và tên" title="Nhập họ và tên">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone">
                                    <h4>Số điện thoại</h4>
                                </label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    value="{{$nguoidung->phone}}" placeholder="Nhập số điện thoại"
                                    title="Nhập số điện thoại">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mobile">
                                    <h4>Nghệ nghiệp</h4>
                                </label>
                                <input type="text" class="form-control" name="profession" id="profession"
                                    value="{{$nguoidung->profession}}" placeholder="Nhập nghề nghiệp của bạn"
                                    title="Nhập nghề nghiệp của bạn">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" readonly name="email" id="email"
                                    value="{{$nguoidung->email}}" placeholder="you@gmail.com"
                                    title="Nhập email của bạn.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Quê quán</h4>
                                </label>
                                <input type="text" class="form-control" value="{{$nguoidung->address}}" name="address"
                                    id="address" placeholder="Nhập quê quán của bạn" title="Nhập quê quán của bạn">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" id="btn-save" type="submit"><i
                                        class="glyphicon glyphicon-ok-sign"></i> Lưu</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                    Làm mới</button>
                            </div>
                        </div>

                        <hr>

                    </div>
                </div>
                <!--/tab-pane-->
            </div>
            <!--/tab-content-->

        </div>
    </form>

    <!--/col-9-->
</div>
<!--/row-->
<div class="modal" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Lưu thành công.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
@endsection