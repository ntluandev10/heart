<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    protected $table = "theloai";
    public function loaitin()
    {
        return $this->hasMany('App\Loaitin','idTheLoai','id');
    }
    public function tintuc()
    {
        return $this->hasManyThrough('App\Tintuc','App\Loaitin','idTheLoai','idLoaiTin','id');
    }
    public function thuoc()
    {
        return $this->hasMany('App\Thuoc','idTheLoai','id');
    }
    public function benhvien()
    {
        return $this->hasMany('App\Benhvien','idTheLoai','id');
    }
}
