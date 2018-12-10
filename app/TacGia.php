<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TacGia extends Model
{
    //
    protected  $table = 'tac_gias';

    protected $fillable = [
        'matg', 'tentg', 'ngaysinh', 'gioitinh', 'alias'
    ];

    public function sanpham() {
        return $this->hasMany('App\SanPham');
    }
}
