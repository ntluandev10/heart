<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thuoc extends Model
{
    protected $table = "thuoc";
    public function theloai()
    {
        return $this->belongsTo('App\Theloai','idTheLoai','id');
    }
}
