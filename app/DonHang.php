<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    //
    protected $fillable = [
        'madonhang', 'makh', 'tongtien', 'hinhthucthanhtoan', 'xusudung', 'giamgia', 'phiship', 'diachigiaohang', 'trangthai'
    ];

    public function chitietdonhang() {
        return $this->hasMany('App\ChiTietDonHang');
    }

    public function khachhang() {
        return $this->belongsTo('App\KhachHang');
    }

    public function hinhthucthanhtoan() {
        return $this->belongsTo('App\HinhThucThanhToan');
    }

    public function diachigiaohang() {
        return $this->belongsTo('App\SoDiaChi');
    }

}
