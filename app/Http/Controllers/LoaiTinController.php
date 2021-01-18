<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Theloai;
use App\Loaitin;

class LoaiTinController extends Controller
{
    public function getDanhSach()
    {
        $loaitin = Loaitin::all();
        return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);
    }
    public function getThem()
    {
        $theloai = Theloai::all();
        return view('admin.loaitin.them',compact('theloai'));
    }
    public function postThem(Request $request)
    {
        $this->validate($request,[
            'Ten' => 'required|unique:Loaitin,Ten|min:3|max:100',
            'Theloai' =>'required'
        ],[
            'Ten.required' => 'Bạn chưa nhập tên thể loại',
            'Ten.unique' => 'Tên loại tin đã tồn tại',
            'Ten.min' => 'Tên tối thiểu 3 ký tự',
            'Ten.max' => 'Tên tối đa 100 ký tự',
            'Theloai.required' => 'Bạn chưa chọn thể loại',

        ]);
        $loaitin = new Loaitin;
        $loaitin->Ten = $request->Ten;
        $loaitin->idTheLoai = $request->Theloai;
        $loaitin->TenKhongDau = changeTitle($request->Ten);
        $loaitin->save();
        return redirect('admin/loaitin/them')->with('thongbao','Đã thêm thành công');

    }
    public function getSua($id)
    {
        $loaitin = Loaitin::find($id);
        $theloai = Theloai::all();
        return view('admin.loaitin.sua',compact('loaitin','theloai'));
    }
    public function postSua(Request $request,$id)
    {
        $loaitin = Loaitin::find($id);
        $this->validate($request,[
            'Ten' => 'required|min:3|max:100',
            'Theloai' =>'required'
        ],[
            'Ten.required' => 'Bạn chưa nhập tên thể loại',
            'Ten.min' => 'Tên tối thiểu 3 ký tự',
            'Ten.max' => 'Tên tối đa 100 ký tự',
            'Theloai.required' => 'Bạn chưa chọn thể loại',

        ]);
        $loaitin->Ten = $request->Ten;
        $loaitin->idTheLoai = $request->Theloai;
        $loaitin->TenKhongDau = changeTitle($request->Ten);
        $loaitin->save();
        return redirect('admin/loaitin/sua/'.$id)->with('thongbao','Đã sửa thành công');
    }
    public function getXoa($id)
    {
        $loaitin = Loaitin::find($id);
        if (count($loaitin->tintuc) > 0) {
            return redirect('admin/loaitin/danhsach')->with('loi','Vui lòng xóa các tin tức thuộc loại tin này trước');
        } else {
            $loaitin->delete();
            return redirect('admin/loaitin/danhsach')->with('thongbao','Xóa thành công');
        }
    }
}
