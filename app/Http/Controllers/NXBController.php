<?php

namespace App\Http\Controllers;

use App\NXB;
use Illuminate\Http\Request;

class NXBController extends Controller
{
    //
    public function getNXBs(){
        $data = NXB::all();
        return view ('admin.nxb.index') -> with('nxbs', $data);
    }

    public function addNXB(Request $req){
        $nxb = new NXB;
        $nxb->tennxb = $req->tennxb;
        $nxb->diachi = $req->diachi;
        $nxb->sodt = $req->sodt;
        $alias = $req->tennxb;
        $nxb->alias = $alias;
        $nxb->save();

        return redirect() -> route('indexNXB');
    }

    public function getNXB($manxb){
        $nxb = NXB::where('manxb', $manxb)->first();
        return view('admin.nxb.edit', compact('nxb'));
    }

    public function editNXB(Request $req, $manxb){
        NXB::where('manxb', $manxb)->update(['tennxb' => $req->tennxb, 'diachi' => $req->diachi, 'sodt' => $req->sodt]);
        return redirect()->route('indexNXB');
    }

    public function deleteNXB($manxb){
        NXB::where('manxb', $manxb)->delete();
        return redirect()->route('indexNXB');
    }

}
