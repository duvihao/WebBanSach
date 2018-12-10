<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    //
    protected  $table = 'the_loais';

    protected $fillable = [
        'matl', 'tentl', 'alias'
    ];

    public function sanpham() {
        return $this->hasMany('App\SanPham');
    }
}
