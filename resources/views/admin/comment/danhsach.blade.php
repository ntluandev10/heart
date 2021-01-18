@extends('admin.layout.index')
@section('title')
    Trang danh sách bình luận
@endsection
@section('content')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-table bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Danh sách bình luận</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <!-- Page-body start -->
    <div class="page-body">
        <!-- Basic table card start -->
        <div class="card">
            <div class="card-header">
                <h5>Danh sách bình luận</h5>
                {{-- <a href="admin/comment/them">
                    <button class="btn btn-primary"><i class="ti-plus"></i>Thêm bình luận</button>
                </a> --}}
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="icofont icofont-simple-left "></i></li>
                        <li><i class="icofont icofont-maximize full-card"></i></li>
                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                        <li><i class="icofont icofont-error close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên người dùng</th>
                                <th>Tin tức</th>
                                <th>nội dung</th>
                                <th>Thời gian bình luận</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($comment as $item)
                            <tr>
                                <th scope="row">
                                    @php
                                        echo $i;
                                        $i++;
                                    @endphp
                                </th>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->tintuc->TieuDe}}</td>
                                <td>{{$item->NoiDung}}</td>
                                <td>{{$item->ThoiGianBinhLuan}}</td>
                                <td><a href="admin/comment/xoa/{{$item->id}}" title="Xóa"><i class="ti-brush-alt"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Basic table card end -->
    </div>
    <!-- Page-body end -->
</div>
@endsection