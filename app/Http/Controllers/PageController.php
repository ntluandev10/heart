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
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PageController extends Controller
{
    
    function __construct()
    {
        $theloai = Theloai::orderBy('created_at','ASC')->limit(6)->get();
        $theloai_chung = Theloai::all();
        $slide = Slide::all();
        $tintuc = Tintuc::orderBy('id','DESC')->limit(10)->get();
        $tintuc_chung = Tintuc::all()->random(3);
        view()->share('theloai_chung',$theloai);
        view()->share('theloai_chung_2',$theloai_chung);
        view()->share('slide_chung',$slide);
        view()->share('tintuc_chung',$tintuc);
        view()->share('tintuc_chung_2',$tintuc_chung);

        if (Auth::check()) {
            view()->share('nguoidung',Auth::user());
        }
    }
    function getDangxuat()
    {
        Auth::logout();
        return redirect()->back();
    }
    public function getHome()
    {
        $tin_rd1 = Tintuc::inRandomOrder()->limit(1)->get();
        $tin_rd2 = Tintuc::inRandomOrder()->limit(1)->get();
        $tin_rd3= Tintuc::inRandomOrder()->limit(1)->get();
        $tin_rd4 = Tintuc::inRandomOrder()->limit(1)->get();
        $tin_suckhoe = Tintuc::inRandomOrder()->limit(3)->get();
        $tin_suckhoe_2 = Tintuc::orderBy('NgayDang','desc')->limit(1)->get();
        $tin_kinhdoanh = Tintuc::inRandomOrder()->limit(3)->get();
        $tin_kinhdoanh_2 = Tintuc::orderBy('id','desc')->limit(1)->get();
        $tin_doisong = Tintuc::inRandomOrder()->limit(3)->get();
        $tin_doisong_2 = Tintuc::orderBy('SoLuotXem','desc')->limit(1)->get();
        $tin_phobien = Tintuc::all()->random(5);
        $tin_moinhat = Tintuc::orderBy('NgayDang','desc')->limit(6)->get();
        return view('home.trangchu',compact('tin_rd1','tin_rd2','tin_rd3','tin_rd4','tin_suckhoe','tin_suckhoe_2','tin_kinhdoanh','tin_kinhdoanh_2','tin_doisong','tin_doisong_2','tin_phobien','tin_moinhat'));
    }
    public function getTimkiem(Request $request)
    {
        $tintuc = Tintuc::where('TieuDeKhongDau', 'like', '%' . $request->Search . '%')->limit(10)->get();
        $timkiem = $request->Search;
        $tin_phobien = Tintuc::all()->random(5);

        return view('home.timkiem',compact('tintuc','timkiem','tin_phobien'));
    }
    public function getDangbai()
    {
        $theloai = Theloai::all();
        $loaitin = Loaitin::all();
        return view('home.dangbai',compact('theloai','loaitin'));
    }
    public function postDangbai(Request $request)
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
                return redirect('dangbai')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
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
        $tintuc->NoiBat = '0';

        $tintuc->save();
        return redirect('/');
    }
    public function getDanhmuctheloai($id)
    {
        $theloai = Theloai::find($id);
        $tin_phobien = Tintuc::all()->random(5);

        return view('home.danhmuctheloai',compact('theloai','tin_phobien'));
    }
    public function getDanhmucloaitin($id)
    {
        $loaitin = Loaitin::find($id);
        $tin_phobien = Tintuc::all()->random(5);

        return view('home.danhmucloaitin',compact('loaitin','tin_phobien'));
    }
    public function getChitiet($id)
    {
        $tintuc = Tintuc::find($id);
        $theloai = Theloai::where('id','=',$tintuc->loaitin->theloai->id)->get();
        $benhvien = Benhvien::where('idTheLoai','=',$tintuc->loaitin->theloai->id)->get();
        $thuoc = Thuoc::where('idTheLoai','=',$tintuc->loaitin->theloai->id)->get();
        $tin_ganday = Tintuc::all()->random(5);
        $comment = Comment::where('idTinTuc','=',$id)->get();
        $tintuc->SoLuotXem = $tintuc->SoLuotXem + 1;
        $tintuc->save();

        return view('home.chitiet',compact('tintuc','theloai','benhvien','thuoc','tin_ganday','comment'));
    }
    public function postBinhluan(Request $request)
    {
        $binhluan = new Comment();
        $binhluan->NoiDung = $request->comment;
        $binhluan->idTinTuc = $request->idtin;
        $binhluan->idUser = $request->iduser;
        $binhluan->ThoiGianBinhLuan = date('Y-m-d H:i:s');
        $binhluan->save();
        return redirect()->back();
    }
    public function getDangnhap()
    {
        return view('home.login');
    }
    
    public function postDangnhap(Request $request)
    {
        $this->validate($request,[
            'email' =>'required',
            'pass' =>'required|min:3|max:32',
        ],[
            'email.required' => 'Bạn chưa nhập email',
            'pass.required' => 'Chưa nhập mật khẩu',
            'pass.min' => 'Mật khẩu tối thiểu 3 ký tự',
            'pass.min' => 'Mật khẩu tối thiểu 3 ký tự',
        ]);
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->pass])) {
            return redirect('./')->with('alert','Đăng nhập thành công');
        }else{
            return redirect('dangnhap')->with('loi','Đăng nhập không thành công. Nếu chưa có vui lòng đăng ký tài khỏa mới.');
        }
    }

    public function getDangky()
    {
        return view('home.resgiter');
    }
    public function postDangky(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
            'email' =>'required|email|unique:Users,email',
            'pass' =>'required|min:3|max:32',
            'passAgain' =>'required|same:pass',
        ],[
            'name.required' => 'Bạn chưa nhập họ tên',
            'email.email' => 'Sai cú pháp email',
            'email.required' => 'Bạn chưa nhập email',
            'email.unique' => 'Email đã tồn tại',
            'pass.required' => 'Chưa nhập mật khẩu',
            'pass.min' => 'Mật khẩu tối thiểu 3 ký tự',
            'pass.min' => 'Mật khẩu tối thiểu 3 ký tự',
            'passAgain.required' => 'Chưa nhập lại mật khẩu',
            'passAgain.same' => 'Mật khẩu nhập lại không khớp',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->pass);
        $user->quyen = '0';

        $user->save();
        return redirect('dangnhap')->with('thongbao','Đã đăng ký tài khoản thành công');
    }
    public function getSua()
    {
        return view('home.suanguoidung');
    }
    public function postSua(Request $request,$id)
    {
        $user = User::find($id);
        $this->validate($request,[
            'name' =>'required',
            'email' =>'required|email',
        ],[
            'name.required' => 'Bạn chưa nhập họ tên',
            'email.email' => 'Sai cú pháp email',
            'email.required' => 'Bạn chưa nhập email',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->profession = $request->profession;
        $user->quyen = '0';
        if ($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('suanguoidung/'.$id.'/'.$user->quyen.'.html')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(8)."_".$name;
            while (file_exists("upload/user/".$Hinh)) {
                $Hinh = str_random(8)."_".$name;
            }
            $file->move("upload/user",$Hinh);
            $user->hinh = $Hinh;
        } else {
            $user->hinh = '';
        }
        $user->save();
        return back();
    }
    public function getThongtin($id)
    {
        return view('home.thongtinnguoidung');
    }
    public function getThongtinnguoidung($id)
    {
        $user = User::find($id);
        return view('home.thongtin',compact('user'));
    }
    public function getGioithieu()
    {
        return view('home.gioithieu');
    }
    public function getLienhe()
    {
        return view('home.lienhe');
    }
}
