<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests;
use App\Theloai;
use App\Loaitin;
use App\Tintuc;
use App\Comment;

class TinTucController extends Controller
{
    public function getDanhSach()
    {
        $tintuc = Tintuc::paginate(5);
        return view('admin.tintuc.danhsach',compact('tintuc'));
    }
    public function getThem()
    {
        $theloai = Theloai::all();
        $loaitin = Loaitin::all();
        return view('admin.tintuc.them',compact('theloai','loaitin'));
    }
    public function postThem(Request $request)
    {
        $this->validate($request,[
            'Loaitin' => 'required',
            'Tieude' =>'required|min:3|unique:Tintuc,TieuDe',
            'Tomtat' =>'required',
            'Noidung' =>'required',
        ],[
            'Loaitin.required' => 'Bạn chưa chọn tên loại tin',
            'Tieude.required' => 'Bạn chưa nhập tiêu đề',
            'Tieude.min' => 'Tiêu đề tối thiểu 3 ký tự',
            'Tieude.unique' => 'Tiêu đề đã tồn tại',
            'Tomtat.required' => 'Bạn chưa nhập tóm tắt',
            'Noidung.required' => 'Bạn chưa nhập nội dung',

        ]);
        $tintuc = new Tintuc;
        $tintuc->TieuDe = $request->Tieude;
        $tintuc->TieuDeKhongDau = changeTitle($request->Tieude);
        $tintuc->idLoaiTin = $request->Loaitin;
        $tintuc->TomTat = $request->Tomtat;
        $tintuc->NoiDung = $request->Noidung;
        $tintuc->NgayDang = date('Y-m-d');
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/tintuc/them')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(8)."_".$name;
            while (file_exists("upload/tintuc/".$Hinh)) {
                $Hinh = str_random(8)."_".$name;
            }
            $file->move("upload/tintuc",$Hinh);
            $tintuc->Hinh = $Hinh;
        } else {
            $tintuc->Hinh = '';
        }
        $tintuc->SoluotXem = 0;
        $tintuc->NoiBat = $request->Noibat;

        $tintuc->save();
        return redirect('admin/tintuc/them')->with('thongbao','Đã thêm thành công');

    }
    public function getSua($id)
    {
        $tintuc = Tintuc::find($id);
        $theloai = Theloai::all();
        $loaitin = Loaitin::all();
        return view('admin.tintuc.sua',compact('tintuc','loaitin','theloai'));
    }
    public function postSua(Request $request,$id)
    {
        $tintuc = Tintuc::find($id);
        $this->validate($request,[
            'Loaitin' => 'required',
            'Tieude' =>'required|min:3',
            'Tomtat' =>'required',
            'Noidung' =>'required',
        ],[
            'Loaitin.required' => 'Bạn chưa chọn tên loại tin',
            'Tieude.required' => 'Bạn chưa nhập tiêu đề',
            'Tieude.min' => 'Tiêu đề tối thiểu 3 ký tự',
            'Tomtat.required' => 'Bạn chưa nhập tóm tắt',
            'Noidung.required' => 'Bạn chưa nhập nội dung',

        ]);
        $tintuc->TieuDe = $request->Tieude;
        $tintuc->TieuDeKhongDau = changeTitle($request->Tieude);
        $tintuc->idLoaiTin = $request->Loaitin;
        $tintuc->TomTat = $request->Tomtat;
        $tintuc->NoiDung = $request->Noidung;
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/tintuc/them')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(8)."_".$name;
            while (file_exists("upload/tintuc/".$Hinh)) {
                $Hinh = str_random(8)."_".$name;
            }
            unlink("upload/tintuc/".$tintuc->Hinh);
            $file->move("upload/tintuc",$Hinh);
            $tintuc->Hinh = $Hinh;
        }
        $tintuc->NoiBat = $request->Noibat;

        $tintuc->save();
        return redirect('admin/tintuc/sua/'.$id)->with('thongbao','Đã sửa thành công');
    }
    public function getXoa($id)
    {
        $tintuc = Tintuc::find($id);
        unlink("upload/tintuc/".$tintuc->Hinh);
        $binhluan = Comment::where('idTinTuc',$tintuc->id)->get();
        foreach ($binhluan as $key => $value) {
            $value->delete();
        }
        $tintuc->delete();
        return redirect('admin/tintuc/danhsach')->with('thongbao','Xóa thành công');
    }
}
