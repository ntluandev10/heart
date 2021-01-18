<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Theloai;
use App\Benhvien;

class BenhVienController extends Controller
{
    public function getDanhSach()
    {
        $benhvien = Benhvien::all();
        return view('admin.benhvien.danhsach',compact('benhvien'));
    }
    public function getThem()
    {
        $theloai = Theloai::all();
        return view('admin.benhvien.them',compact('theloai'));
    }
    public function postThem(Request $request)
    {
        $this->validate($request,[
            'Tenbenhvien' =>'required|min:3|unique:Benhvien,TenBenhVien',
            'Link' =>'required',
            'Noidung' =>'required',
            'Theloai' =>'required',
            
        ],[
            'Tenbenhvien.required' => 'Bạn chưa nhập tên thuốc',
            'Tenbenhvien.min' => 'Tên thuốc tối thiểu 3 ký tự',
            'Tenbenhvien.unique' => 'Tên thuốc đã tồn tại',
            'Link.required' => 'Bạn chưa nhập link',
            'Noidung.required' => 'Bạn chưa nhập nội dung',
            'Theloai.required' => 'Bạn chưa chọn thể loại',
        ]);
        $benhvien = new Benhvien;
        $benhvien->Tenbenhvien = $request->Tenbenhvien;
        $benhvien->TenbenhvienKhongDau = changeTitle($request->Tenbenhvien);
        $benhvien->idTheloai = $request->Theloai;
        $benhvien->Link = $request->Link;
        $benhvien->ThongTin = $request->Noidung;
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/benhvien/them')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(8)."_".$name;
            while (file_exists("upload/benhvien/".$Hinh)) {
                $Hinh = str_random(8)."_".$name;
            }
            $file->move("upload/benhvien",$Hinh);
            $benhvien->Hinh = $Hinh;
        } else {
            $benhvien->Hinh = '';
        }
        $benhvien->save();
        return redirect('admin/benhvien/them')->with('thongbao','Đã thêm thành công');

    }
    public function getSua($id)
    {
        $benhvien = Benhvien::find($id);
        $theloai = Theloai::all();
        return view('admin.benhvien.sua',compact('benhvien','theloai'));
    }
    public function postSua(Request $request,$id)
    {
        $benhvien = Benhvien::find($id);
        $this->validate($request,[
            'Tenbenhvien' =>'required|min:3',
            'Link' =>'required',
            'Noidung' =>'required',
            'Theloai' =>'required',
            
        ],[
            'Tenbenhvien.required' => 'Bạn chưa nhập tên thuốc',
            'Tenbenhvien.min' => 'Tên thuốc tối thiểu 3 ký tự',
            'Link.required' => 'Bạn chưa nhập link',
            'Noidung.required' => 'Bạn chưa nhập nội dung',
            'Theloai.required' => 'Bạn chưa chọn thể loại',
        ]);
        $benhvien->Tenbenhvien = $request->Tenbenhvien;
        $benhvien->TenbenhvienKhongDau = changeTitle($request->Tenbenhvien);
        $benhvien->idTheloai = $request->Theloai;
        $benhvien->Link = $request->Link;
        $benhvien->ThongTin = $request->Noidung;
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/benhvien/them')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(8)."_".$name;
            while (file_exists("upload/benhvien/".$Hinh)) {
                $Hinh = str_random(8)."_".$name;
            }
            unlink("upload/benhvien/".$benhvien->Hinh);
            $file->move("upload/benhvien",$Hinh);
            $benhvien->Hinh = $Hinh;
        }

        $benhvien->save();
        return redirect('admin/benhvien/sua/'.$id)->with('thongbao','Đã sửa thành công');
    }
    public function getXoa($id)
    {
        $benhvien = Benhvien::find($id);
        unlink("upload/benhvien/".$benhvien->Hinh);
        $benhvien->delete();
        return redirect('admin/benhvien/danhsach')->with('thongbao','Xóa thành công');
    }
}