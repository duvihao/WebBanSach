<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    //
    protected  $table = 'the_loais';

    protected $fillable = [
        'masp', 'tensp', 'hinhanh', 'soluong', 'matl', 'sotrang', 'manxb', 'ngayxb', 'matg', 'taiban', 'mota', 'loaibia', 'kichthuoc', 'gia', 'alias', 'trangthai'
    ];

    public function theloai() {
        return $this->belongsTo('App\TheLoai');
    }

    public function tacgia() {
        return $this->belongsTo('App\TacGia');
    }

    public function nxb() {
        return $this->belongsTo('App\NXB');
    }

}
