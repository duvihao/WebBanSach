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
        $ten = $req->tentl;
        $alias = changeTitle($ten);
        $theloai->alias=$alias;
        $theloai->trangthai=1;
        $theloai->save();

        return redirect() -> route('indexTheLoai');
    }

    public function getTheLoai($matl){
        $theloai = TheLoai::Where('matl', $matl) -> first();
        return view('admin.theloai.edit', compact('theloai'));
    }

    public function editTheLoai(request $req, $matl){
        $ten = $req->tentl;
        $alias = changeTitle($ten);

        TheLoai::where('matl', $matl)->update(['tentl' => $req->tentl, 'alias' => $alias]);
        return redirect() -> route('indexTheLoai');
    }

    public function deleteTheLoai($matl){
        TheLoai::where('matl', $matl)->update(['trangthai'=>0]);
        return redirect()->route('indexTheLoai');
    }

}
