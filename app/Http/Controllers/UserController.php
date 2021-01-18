<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use App\Comment;

class UserController extends Controller
{
    public function getdangnhapAdmin()
    {
        return view('admin.login');
    }
    public function getDangxuatAdmin()
    {
        Auth::logout();
        return redirect('admin/dangnhap');
    }
    public function postdangnhapAdmin(Request $request)
    {
        $this->validate($request,[
            'email' =>'required',
            'password' =>'required|min:3|max:32',
        ],[
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu 3 ký tự',
            'password.min' => 'Mật khẩu tối thiểu 3 ký tự',
        ]);
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('admin/dashboard');
        }else{
            return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function getDanhSach()
    {
        $user = User::all();
        return view('admin.user.danhsach',compact('user'));
    }
    public function getThem()
    {
        return view('admin.user.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request,[
            'Name' => 'required|min:3',
            'Email' =>'required|email|unique:Users,email',
            'Password' =>'required|min:3|max:32',
            'PasswordAgain' =>'required|same:Password',
        ],[
            'Name.required' => 'Bạn chưa chưa nhập tên người dùng',
            'Name.min' => 'Tên người dùng tối thiểu 3 ký tự',
            'Email.email' => 'Sai cú pháp email',
            'Email.required' => 'Bạn chưa nhập email',
            'Email.unique' => 'Email đã tồn tại',
            'Password.required' => 'Chưa nhập mật khẩu',
            'Password.min' => 'Mật khẩu tối thiểu 3 ký tự',
            'Password.min' => 'Mật khẩu tối thiểu 3 ký tự',
            'PasswordAgain.required' => 'Chưa nhập lại mật khẩu',
            'PasswordAgain.same' => 'Mật khẩu nhập lại không khớp',
        ]);
        $user = new User;
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/user/them')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(8)."_".$name;
            while (file_exists("upload/user/".$Hinh)) {
                $Hinh = str_random(8)."_".$name;
            }
            $file->move("upload/user",$Hinh);
            $user->Hinh = $Hinh;
        } else {
            $user->Hinh = '';
        }
        $user->name = $request->Name;
        $user->email = $request->Email;
        $user->password = bcrypt($request->Password);
        $user->quyen = $request->Quyen;
        $user->phone = $request->Phone;
        $user->address = $request->Address;
        $user->profession = $request->Profession;

        $user->save();
        return redirect('admin/user/them')->with('thongbao','Đã thêm thành công');

    }
    public function getSua($id)
    {
        $user = User::find($id);
        return view('admin.user.sua',compact('user'));
    }
    public function postSua(Request $request,$id)
    {
        $user = User::find($id);
        $this->validate($request,[
            'Name' => 'required|min:3',
        ],[
            'Name.required' => 'Bạn chưa chưa nhập tên người dùng',
            'Name.min' => 'Tên người dùng tối thiểu 3 ký tự',
        ]);
        $user->name = $request->Name;
        if ($request->changePassword == "on") {
            $this->validate($request,[
                'Password' =>'required|min:3|max:32',
                'PasswordAgain' =>'required|same:Password',
            ],[
                'Password.required' => 'Chưa nhập mật khẩu',
                'Password.min' => 'Mật khẩu tối thiểu 3 ký tự',
                'Password.min' => 'Mật khẩu tối thiểu 3 ký tự',
                'PasswordAgain.required' => 'Chưa nhập lại mật khẩu',
                'PasswordAgain.same' => 'Mật khẩu nhập lại không khớp',
            ]);
            $user->password = bcrypt($request->Password);
        }
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/user/them')->with('loi','Chỉ dùng file .JPG,.PNG,.JPEG');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(8)."_".$name;
            while (file_exists("upload/user/".$Hinh)) {
                $Hinh = str_random(8)."_".$name;
            }
            unlink("upload/user".$user->Hinh);
            $file->move("upload/user",$Hinh);
            $user->Hinh = $Hinh;
        }
        $user->quyen = $request->Quyen;
        $user->phone = $request->Phone;
        $user->address = $request->Address;
        $user->profession = $request->Profession;
        $user->save();
        return redirect('admin/user/sua/'.$id)->with('thongbao','Đã sửa thành công');
    }
    public function getXoa($id)
    {
        $user = User::find($id);
        $binhluan = Comment::where('idUser',$id)->get();
        foreach ($binhluan as $key => $value) {
            $value->delete();
        }
        $user->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công');
    }
}
