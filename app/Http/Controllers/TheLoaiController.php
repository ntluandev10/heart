<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theloai;
use App\Http\Requests;

class TheLoaiController extends Controller
{
    public function getDanhSach()
    {
        $theloai = Theloai::all();
        return view('admin.theloai.danhsach',compact('theloai'));
    }
    public function getThem()
    {
        return view('admin.theloai.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request,[
            'Ten' => 'required|unique:Theloai,Ten|min:3|max:100'
        ],[
            'Ten.required' => 'Bạn chưa nhập tên thể loại',
            'Ten.unique' => 'Tên thể loại đã tồn tại',
            'Ten.min' => 'Tên tối thiểu 3 ký tự',
            'Ten.max' => 'Tên tối đa 100 ký tự',
        ]);
        $theloai = new Theloai;
        $theloai->Ten = $request->Ten;
        $theloai->TenKhongDau = changeTitle($request->Ten);
        $theloai->save();
        return redirect('admin/theloai/them')->with('thongbao','Đã thêm thành công');

    }
    public function getSua($id)
    {
        $theloai = Theloai::find($id);
        return view('admin.theloai.sua',compact('theloai'));
    }
    public function postSua(Request $request,$id)
    {
        $theloai = Theloai::find($id);
        $this->validate($request,[
            'Ten' => 'required|min:3|max:100'
        ],[
            'Ten.required' => 'Bạn chưa nhập tên thể loại',
            'Ten.min' => 'Tên tối thiểu 3 ký tự',
            'Ten.max' => 'Tên tối đa 100 ký tự',
        ]);
        $theloai->Ten = $request->Ten;
        $theloai->TenKhongDau = changeTitle($request->Ten);
        $theloai->save();
        return redirect('admin/theloai/sua/'.$id)->with('thongbao','Đã sửa thành công');
    }
    public function getXoa($id)
    {
        $theloai = Theloai::find($id);
        if (count($theloai->loaitin) > 0) {
            return redirect('admin/theloai/danhsach')->with('loi','Vui lòng xóa các loại tin thuộc thể loại này trước');
        } else {
            $theloai->delete();
            return redirect('admin/theloai/danhsach')->with('thongbao','Xóa thành công');
        }
    }
}
