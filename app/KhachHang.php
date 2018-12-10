<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    //
    protected $fillable = [
        'makh', 'ten', 'diachi', 'sodt', 'ngaysinh', 'gioitinh', 'email', 'password', 'xu', 'trangthai'
    ];

    public function sodiachi() {
        return $this->hasMany('App\SoDiaChi');
    }

    public function donhang() {
        return $this->hasMany('App\DonHang');
    }
}
