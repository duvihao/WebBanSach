<?php

namespace App\Http\Controllers;

use App\HinhThucThanhToan;
use Illuminate\Http\Request;

class HinhThucThanhToanController extends Controller
{
    //
    public function getHinhThucThanhToans(){
        $data = HinhThucThanhToan::all();
        return view ('admin.hinhthucthanhtoan.index') -> with('hinhthucthanhtoans', $data);
    }
}
