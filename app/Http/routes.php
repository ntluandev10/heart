<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('admin/dangnhap','UserController@getdangnhapAdmin');
Route::post('admin/dangnhap','UserController@postdangnhapAdmin');
Route::get('admin/dangxuat','UserController@getDangxuatAdmin');


Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
    Route::get('dashboard','AdminController@getAdmin');
    Route::get('thongtin/{id}','AdminController@getThongtin');

    Route::group(['prefix'=>'theloai'],function(){
        //admin/theloai/...
        Route::get('danhsach','TheLoaiController@getDanhSach');

        Route::get('sua/{id}','TheLoaiController@getSua');
        Route::post('sua/{id}','TheLoaiController@postSua');

        Route::get('them','TheLoaiController@getThem');
        Route::post('them','TheLoaiController@postThem');

        Route::get('xoa/{id}','TheLoaiController@getXoa');
    });

    Route::group(['prefix'=>'loaitin'],function(){
        Route::get('danhsach','LoaiTinController@getDanhSach');

        Route::get('sua/{id}','LoaiTinController@getSua');
        Route::post('sua/{id}','LoaiTinController@postSua');

        Route::get('them','LoaiTinController@getThem');
        Route::post('them','LoaiTinController@postThem');

        Route::get('xoa/{id}','LoaiTinController@getXoa');
    });

    Route::group(['prefix'=>'tintuc'],function(){
        Route::get('danhsach','TinTucController@getDanhSach');

        Route::get('sua/{id}','TinTucController@getSua');
        Route::post('sua/{id}','TinTucController@postSua');

        Route::get('them','TinTucController@getThem');
        Route::post('them','TinTucController@postThem');

        Route::get('xoa/{id}','TinTucController@getXoa');
    });

    Route::group(['prefix'=>'slide'],function(){
        Route::get('danhsach','SlideController@getDanhSach');

        Route::get('sua/{id}','SlideController@getSua');
        Route::post('sua/{id}','SlideController@postSua');

        Route::get('them','SlideController@getThem');
        Route::post('them','SlideController@postThem');

        Route::get('xoa/{id}','SlideController@getXoa');
    });

    Route::group(['prefix'=>'comment'],function(){
        Route::get('danhsach','CommentController@getDanhSach');

        Route::get('xoa/{id}','CommentController@getXoa');
    });

    Route::group(['prefix'=>'user'],function(){
        Route::get('danhsach','UserController@getDanhSach');

        Route::get('sua/{id}','UserController@getSua');
        Route::post('sua/{id}','UserController@postSua');

        Route::get('them','UserController@getThem');
        Route::post('them','UserController@postThem');

        Route::get('xoa/{id}','UserController@getXoa');
    });

    Route::group(['prefix'=>'thuoc'],function(){
        Route::get('danhsach','ThuocController@getDanhSach');

        Route::get('sua/{id}','ThuocController@getSua');
        Route::post('sua/{id}','ThuocController@postSua');

        Route::get('them','ThuocController@getThem');
        Route::post('them','ThuocController@postThem');

        Route::get('xoa/{id}','ThuocController@getXoa');
    });

    Route::group(['prefix'=>'benhvien'],function(){
        Route::get('danhsach','BenhVienController@getDanhSach');

        Route::get('sua/{id}','BenhVienController@getSua');
        Route::post('sua/{id}','BenhVienController@postSua');

        Route::get('them','BenhVienController@getThem');
        Route::post('them','BenhVienController@postThem');

        Route::get('xoa/{id}','BenhVienController@getXoa');
    });

    Route::group(['prefix'=>'ajax'],function(){
        Route::get('loaitin/{idTheLoai}','AjaxController@getLoaitin');
    });
});

Route::group(['prefix'=>''],function(){
    Route::get('/','PageController@getHome');

    Route::get('timkiem','PageController@getTimkiem');
    Route::get('lienhe','PageController@getGioithieu');
    Route::get('gioithieu','PageController@getLienhe');

    Route::get('dangbai','PageController@getDangbai');
    Route::post('dangbai','PageController@postDangbai');

    Route::get('chitiet/{id}/{TieuDeKhongDau}.html','PageController@getChitiet');
    Route::get('danhmuctheloai/{id}/{TenKhongDau}.html','PageController@getDanhmuctheloai');
    Route::get('danhmucloaitin/{id}/{TenKhongDau}.html','PageController@getDanhmucloaitin');


    Route::post('binhluan','PageController@postBinhluan');

    Route::get('dangnhap','PageController@getDangnhap');
    Route::post('dangnhap','PageController@postDangnhap');

    Route::get('dangxuat','PageController@getDangxuat');

    Route::get('dangky','PageController@getDangky');
    Route::post('dangky','PageController@postDangky');

    Route::get('thongtin/{id}/{name}.html','PageController@getThongtin');
    Route::get('thongtindetail/{id}/{name}.html','PageController@getThongtinnguoidung');

    Route::get('suanguoidung/{id}/{name}.html','PageController@getSua');
    Route::post('suanguoidung/{id}/{name}.html','PageController@postSua');
});