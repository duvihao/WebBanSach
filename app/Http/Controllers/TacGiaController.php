<?php

namespace App\Http\Controllers;

use App\TacGia;
use Illuminate\Http\Request;
use DateTime;

class TacGiaController extends Controller
{
    //
    public function getTacGias(){
        $data = TacGia::all();
        return view ('admin.tacgia.index') -> with('tacgias', $data);
    }

    public function addTacGia(Request $req){
        $tacgia = new TacGia;
        $tacgia->tentg = $req->tentg;
        $ngaysinh = date_create($req->ngaysinh);
        date_format('y-m-d', $ngaysinh);
        $tacgia->ngaysinh = $ngaysinh;
        $tacgia->gioitinh = $req->gioitinh;
        $alias = $req->tentl;
        $tacgia->alias = $alias;
        $tacgia->save();

        return redirect() -> route('indexTheLoai');
    }
}
