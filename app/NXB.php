<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NXB extends Model
{
    //
    protected  $table = 'n_x_bs';

    protected $fillable = [
        'manxb', 'tennxb', 'diachi', 'sodt', 'alias'
    ];

    public function sanpham() {
        return $this->hasMany('App\SanPham');
    }
}
