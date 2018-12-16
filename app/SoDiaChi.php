<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoDiaChi extends Model
{
	protected $primaryKey = 'madc';
    //
    protected $fillable = [
        'madc', 'makh', 'sonha', 'phuongxa', 'quanhuyen', 'thanhpho', 'trangthai'
    ];

    public function khachhang() {
        return $this->belongsTo('App\KhachHang');
    }
}
