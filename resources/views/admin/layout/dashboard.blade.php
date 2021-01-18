@extends('admin.layout.index')
@section('title')
    Trang quản trị
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-body">
        <div class="row">
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-chart-bar-graph bg-c-blue card1-icon"></i>
                        <span class="text-c-blue f-w-600">THỂ LOẠI</span>
                        <h4>Tổng : {{count($theloai)}}</h4>
                        <div>
                            <a href="admin/theloai/danhsach">
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Xem tất cả
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-bars bg-c-pink card1-icon"></i>
                        <span class="text-c-pink f-w-600">LOẠI TIN</span>
                        <h4>Tổng : {{count($loaitin)}}</h4>
                        <div>
                            <a href="admin/loaitin/danhsach">
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Xem tất cả
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-newspaper bg-c-green card1-icon"></i>
                        <span class="text-c-green f-w-600">TIN TỨC</span>
                        <h4>Tổng : {{count($tintuc)}}</h4>
                        <div>
                            <a href="admin/tintuc/danhsach">
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Xem tất cả
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-brand-slideshare bg-c-pink card1-icon"></i>
                        <span class="text-c-yellow f-w-600">SLIDE</span>
                        <h4>Tổng : {{count($slide)}}</h4>
                        <div>
                            <a href="admin/slide/danhsach">
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Xem tất cả
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-comment bg-c-blue card1-icon"></i>
                        <span class="text-c-blue f-w-600">BÌNH LUẬN</span>
                        <h4>Tổng : {{count($comment)}}</h4>
                        <div>
                            <a href="admin/comment/danhsach">
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Xem tất cả
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-hospital bg-c-pink card1-icon"></i>
                        <span class="text-c-pink f-w-600">BỆNH VIỆN</span>
                        <h4>Tổng : {{count($benhvien)}}</h4>
                        <div>
                            <a href="admin/benhvien/danhsach">
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Xem tất cả
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-medicine bg-c-green card1-icon"></i>
                        <span class="text-c-green f-w-600">THUỐC</span>
                        <h4>Tổng : {{count($thuoc)}}</h4>
                        <div>
                            <a href="admin/thuoc/danhsach">
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Xem tất cả
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <i class="icofont icofont-users-alt-1 bg-c-yellow card1-icon"></i>
                        <span class="text-c-yellow f-w-600">NGƯỜI DÙNG</span>
                        <h4>Tổng : {{count($user)}}</h4>
                        <div>
                            <a href="admin/user/danhsach">
                                <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Xem tất cả
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card1 end -->
        </div>
    </div>
</div>
@endsection