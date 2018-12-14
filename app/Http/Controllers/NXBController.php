<?php

namespace App\Http\Controllers;

use App\NXB;
use Illuminate\Http\Request;

class NXBController extends Controller
{
    //
    public function getNXBs(){
        $data = NXB::where('trangthai', 1)->get();
        return view ('admin.nxb.index') -> with('nxbs', $data);
    }

    public function addNXB(Request $req){
        $nxb = new NXB;
        $nxb->tennxb = $req->tennxb;
        $nxb->diachi = $req->diachi;
        $nxb->sodt = $req->sodt;
        $ten = $req->tennxb;
        $alias = changeTitle($ten);
        $nxb->alias = $alias;
        $nxb->trangthai = 1;
        $nxb->save();
        return redirect() -> route('indexNXB');
    }

    public function getNXB($manxb){
        $nxb = NXB::where('manxb', $manxb)->first();
        return view('admin.nxb.edit', compact('nxb'));
    }

    public function editNXB(Request $req, $manxb){
        $ten = $req->tennxb;
        $alias = changeTitle($ten);
        NXB::where('manxb', $manxb)->update(['tennxb' => $req->tennxb, 'diachi' => $req->diachi, 'sodt' => $req->sodt, 'alias' => $alias]);
        return redirect()->route('indexNXB');
    }

    public function deleteNXB($manxb){
        NXB::where('manxb', $manxb)->update(['trangthai'=>0]);
        return redirect()->route('indexNXB');
    }

}
