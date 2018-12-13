<?php

namespace App\Http\Controllers;

use App\KhachHAng;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    //
    public function getKhachHangs(){
        $data = KhachHang::all();
        return view ('admin.khachhang.index') -> with('khachhangs', $data);
    }
}
