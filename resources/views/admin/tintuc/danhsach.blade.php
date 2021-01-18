@extends('admin.layout.index')
@section('title')
    Trang danh sách tin tức
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
                        <h4>Danh sách tin tức</h4>
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
                <h5>Danh sách tin tức</h5>
                <a href="admin/tintuc/them">
                    <button class="btn btn-primary"><i class="ti-plus"></i>Thêm tin tức</button>
                </a>
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
                                <th>Tiêu đề</th>
                                <th>Tên loại tin</th>
                                <th>Số lượt xem</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($tintuc as $item)
                            <tr>
                                <th scope="row">
                                    @php
                                        echo $i;
                                        $i ++;
                                    @endphp
                                </th>
                                <td><p id="cut">{{$item->TieuDe}}</p> <br>
                                <img src="upload/tintuc/{{$item->Hinh}}" width="200px" height="150px" alt=""></td>
                                <td>{{$item->loaitin->Ten}}</td>
                                <td>{{$item->SoLuotXem}}</td>
                                <td><a href="admin/tintuc/xoa/{{$item->id}}" title="Xóa"><i class="ti-brush-alt"></i></a></td>
                                <td><a href="admin/tintuc/sua/{{$item->id}}" title="Sửa"><i class="ti-settings"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        {{ $tintuc->links()}}
        
        <!-- Basic table card end -->
    </div>
    <!-- Page-body end -->
</div>
@endsection
@section('css')
    <style>
        #cut{
            width: 300px;
            height: 100px;
            overflow: scroll;
        }
    </style>
@endsection