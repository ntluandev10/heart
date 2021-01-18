<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Theloai;
use App\Thuoc;

class ThuocController extends Controller
{
    public function getDanhSach()
    {
        $thuoc = Thuoc::all();
        return view('admin.thuoc.danhsach',compact('thuoc'));
    }
    public function getThem()
    {
        $theloai = Theloai::all();
        return view('admin.thuoc.them',compact('theloai'));
    }
    public function postThem(Request $request)
    {
        $this->validate($request,[
            'Tenthuoc' =>'required|min:3|unique:Thuoc,TenThuoc',
            'Theloai' =>'required',
            
        ],[
            'Tenthuoc.required' => 'Bạn chưa nhập tên thuốc',
            'Tenthuoc.min' => 'Tên thuốc tối thiểu 3 ký tự',
            'Tenthuoc.unique' => 'Tên thuốc đã tồn tại',
            'Theloai.required' => 'Bạn chưa chọn thể loại',
        ]);
        $thuoc = new Thuoc;
        $thuoc->Tenthuoc = $request->Tenthuoc;
        $thuoc->TenThuocKhongDau = changeTitle($request->Tenthuoc);
        $thuoc->idTheloai = $request->Theloai;
        $thuoc->Link = $request->Link;
        $thuoc->ThongTin = $request->Noidung;
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/thuoc/them')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(8)."_".$name;
            while (file_exists("upload/thuoc/".$Hinh)) {
                $Hinh = str_random(8)."_".$name;
            }
            $file->move("upload/thuoc",$Hinh);
            $thuoc->Hinh = $Hinh;
        } else {
            $thuoc->Hinh = '';
        }
        $thuoc->save();
        return redirect('admin/thuoc/them')->with('thongbao','Đã thêm thành công');

    }
    public function getSua($id)
    {
        $thuoc = Thuoc::find($id);
        $theloai = Theloai::all();
        return view('admin.thuoc.sua',compact('thuoc','theloai'));
    }
    public function postSua(Request $request,$id)
    {
        $thuoc = Thuoc::find($id);
        $this->validate($request,[
            'Tenthuoc' =>'required|min:3|unique:Thuoc,TenThuoc',
            'Link' =>'required',
            'Noidung' =>'required',
            'Theloai' =>'required',
            
        ],[
            'Tenthuoc.required' => 'Bạn chưa nhập tên thuốc',
            'Tenthuoc.min' => 'Tên thuốc tối thiểu 3 ký tự',
            'Tenthuoc.unique' => 'Tên thuốc đã tồn tại',
            'Link.required' => 'Bạn chưa nhập link',
            'Noidung.required' => 'Bạn chưa nhập nội dung',
            'Theloai.required' => 'Bạn chưa chọn thể loại',
        ]);
        $thuoc->Tenthuoc = $request->Tenthuoc;
        $thuoc->TenThuocKhongDau = changeTitle($request->Tenthuoc);
        $thuoc->idTheloai = $request->Theloai;
        $thuoc->Link = $request->Link;
        $thuoc->ThongTin = $request->Noidung;
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/thuoc/them')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(8)."_".$name;
            while (file_exists("upload/thuoc/".$Hinh)) {
                $Hinh = str_random(8)."_".$name;
            }
            unlink("upload/thuoc/".$thuoc->Hinh);
            $file->move("upload/thuoc",$Hinh);
            $thuoc->Hinh = $Hinh;
        }

        $thuoc->save();
        return redirect('admin/thuoc/sua/'.$id)->with('thongbao','Đã sửa thành công');
    }
    public function getXoa($id)
    {
        $thuoc = Thuoc::find($id);
        unlink("upload/thuoc/".$thuoc->Hinh);
        $thuoc->delete();
        return redirect('admin/thuoc/danhsach')->with('thongbao','Xóa thành công');
    }
}
