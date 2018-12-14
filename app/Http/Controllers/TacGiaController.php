<?php

namespace App\Http\Controllers;

use App\TacGia;
use Illuminate\Http\Request;

class TacGiaController extends Controller
{
    //
    public function getTacGias(){
        $data = TacGia::where('trangthai',1)->get();
        return view ('admin.tacgia.index') -> with('tacgias', $data);
    }

    public function addTacGia(Request $req){
        $tacgia = new TacGia;
        $tacgia->tentg = $req->tentg;
        $tacgia->ngaysinh = $req->ngaysinh;
        $tacgia->gioitinh = $req->gioitinh;
        $ten = $req->tentg;
        $alias = changeTitle($ten);
        $tacgia->alias = $alias;
        $tacgia->trangthai=1;
        $tacgia->save();

        return redirect() -> route('indexTacGia');
    }

    public function getTacGia($matg){
        $tacgia = TacGia::where('matg', $matg)->first();
        return view('admin.tacgia.edit', compact('tacgia'));
    }

    public function editTacGia(Request $req, $matg){
        $ten = $req->tentg;
        $alias = changeTitle($ten);
        TacGia::where('matg', $matg)->update(['tentg' => $req->tentg, 'ngaysinh' => $req->ngaysinh, 'gioitinh' => $req->gioitinh, 'alias' => $alias]);
        return redirect()->route('indexTacGia');
    }

    public function deleteTacGia($matg){
        TacGia::where('matg', $matg)->update(['trangthai'=>0]);
        return redirect()->route('indexTacGia');
    }

}
