<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slide;

class SlideController extends Controller
{
    public function getDanhSach()
    {
        $slide = Slide::all();
        return view('admin.slide.danhsach',compact('slide'));
    }
    public function getThem()
    {
        return view('admin.slide.them');
    }
    public function postThem(Request $request)
    {
        $slide = new Slide;
        $slide->Ten = $request->Ten;
        $slide->NoiDung = $request->Noidung;
        $slide->link = $request->Link;
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/slide/them')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(8)."_".$name;
            while (file_exists("upload/slide/".$Hinh)) {
                $Hinh = str_random(8)."_".$name;
            }
            $file->move("upload/slide",$Hinh);
            $slide->Hinh = $Hinh;
        } else {
            $slide->Hinh = '';
        }
        $slide->save();
        return redirect('admin/slide/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {
        $slide = Slide::find($id);
        return view('admin.slide.sua',compact('slide'));
    }
    public function postSua(Request $request,$id)
    {
        $slide = Slide::find($id);
        $this->validate($request,[
            'Ten' => 'required',
            'Noidung' => 'required',
        ],[
            'Ten.required' => 'Bạn chưa nhập tên thể loại',
            'Noidung.required' => 'Bạn chưa nhập nội dung',
        ]);
        $slide->Ten = $request->Ten;
        $slide->NoiDung = $request->Noidung;
        if ($request->has('Link')) {
            $slide->link = $request->Link;
        }
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/slide/them')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(8)."_".$name;
            while (file_exists("upload/slide/".$Hinh)) {
                $Hinh = str_random(8)."_".$name;
            }
            unlink("upload/slide/".$slide->Hinh);
            $file->move("upload/slide",$Hinh);
            $slide->Hinh = $Hinh;
        }
        $slide->save();
        return redirect('admin/slide/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id)
    {
        $slide = Slide::find($id);
        unlink("upload/slide/".$slide->Hinh);
        $slide->delete();
        return redirect('admin/slide/danhsach')->with('thongbao','Xóa thành công');
    }
}
