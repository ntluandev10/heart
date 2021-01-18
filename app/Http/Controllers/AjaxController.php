<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Theloai;
use App\Loaitin;
use App\Tintuc;

class AjaxController extends Controller
{
    public function getLoaitin($idTheLoai)
    {
        $loaitin = Loaitin::where('idTheLoai',$idTheLoai)->get();
        foreach ($loaitin as $lt) {
            echo "<option value='".$lt->id."'>".$lt->Ten."</option>";
        }
    }
}
?>