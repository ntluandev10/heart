<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tintuc;
use App\Comment;

class CommentController extends Controller
{
    public function getDanhSach()
    {
        $comment = Comment::all();
        return view('admin.comment.danhsach',compact('comment'));
    }
    public function getXoa($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/comment/danhsach')->with('thongbao','Xóa thành công');
    }
}
