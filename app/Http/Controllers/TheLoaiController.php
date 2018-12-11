<?php

namespace App\Http\Controllers;

use App\TheLoai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TheLoaiController extends Controller
{
    //
    public function getTheLoais(){
        $data = TheLoai::all();
        return view ('admin.theloai.index') -> with('theloais', $data);
    }

    public function addTheLoai(Request $req){
        $theloai = new TheLoai;
        $theloai->tentl = $req->tentl;
        $alias = $req->tentl;
        $theloai->alias = $alias;
        $theloai->save();

        return redirect() -> route('indexTheLoai');
    }
}
