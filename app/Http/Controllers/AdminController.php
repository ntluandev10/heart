<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Theloai;
use App\Loaitin;
use App\Tintuc;
use App\Slide;
use App\User;
use App\Comment;
use App\Benhvien;
use App\Thuoc;

class AdminController extends Controller
{
    public function getAdmin()
    {
        $theloai = Theloai::all();
        $loaitin = Loaitin::all();
        $slide = Slide::all();
        $tintuc = Tintuc::all();
        $comment = Comment::all();
        $user = User::all();
        $thuoc = Thuoc::all();
        $benhvien = Benhvien::all();
        return view('admin.layout.dashboard',compact('theloai','loaitin','slide','tintuc','comment','user','thuoc','benhvien'));
    }
    public function getThongtin($id)
    {
        $user = User::find($id);
        return view('admin.layout.thongtin',compact('user'));
    }
}
