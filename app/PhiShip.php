<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhiShip extends Model
{
    //
    protected $fillable = [
        'maps', 'thanhpho', 'phuongxa', 'quanhuyen', 'loaigiaohang', 'sotien'
    ];

}
