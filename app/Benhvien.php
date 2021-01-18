<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benhvien extends Model
{
    protected $table = "benhvien";
    public function theloai()
    {
        return $this->belongsTo('App\Theloai','idTheLoai','id');
    }
}
