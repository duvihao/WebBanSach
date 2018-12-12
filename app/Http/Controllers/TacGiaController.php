<?php

namespace App\Http\Controllers;

use App\TacGia;
use Illuminate\Http\Request;

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
        $tacgia->ngaysinh = $req->ngaysinh;
        $tacgia->gioitinh = $req->gioitinh;
        $alias = $req->tentg;
        $tacgia->alias = $alias;
        $tacgia->save();

        return redirect() -> route('indexTacGia');
    }
}
