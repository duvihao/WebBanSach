<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    //
    protected $fillable = [
        'id', 'madh', 'masp', 'soluong', 'dongia', 'thanhtien', 'giamgia', 'trangthai'
    ];

    public function donhang() {
        return $this->belongsTo('App\DonHang');
    }

    public function sanpham() {
        return $this->hasMany('App\SanPham');
    }
    
}
