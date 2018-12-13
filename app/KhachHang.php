<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KhachHang extends Authenticatable
{
    //
    protected $fillable = [
        'makh', 'ten', 'diachi', 'sodt', 'ngaysinh', 'gioitinh', 'email', 'password', 'xu', 'trangthai'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sodiachi() {
        return $this->hasMany('App\SoDiaChi');
    }

    public function donhang() {
        return $this->hasMany('App\DonHang');
    }
}
