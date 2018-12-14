<?php

namespace App\Http\Controllers;

use App\TheLoai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TheLoaiController extends Controller
{
    //
    public function getTheLoais(){
        $data = TheLoai::where('trangthai', 1)->get();
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

    public function getTheLoai($matl){
        $theloai = TheLoai::Where('matl', $matl) -> first();
        return view('admin.theloai.edit', compact('theloai'));
    }

    public function editTheLoai(request $req, $matl){
        TheLoai::where('matl', $matl)->update(['tentl' => $req->tentl]);
        return redirect() -> route('indexTheLoai');
    }

    public function deleteTheLoai($matl){
        TheLoai::where('matl', $matl)->update(['trangthai'=>0]);
        return redirect()->route('indexTheLoai');
    }

}
