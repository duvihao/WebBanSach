<?php

namespace App\Http\Controllers;

use App\SanPham;
use App\TacGia;
use App\NXB;
use App\TheLoai;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    //

    public function getSanPhams(){
        $data = SanPham::all();
        return view ('admin.sanpham.index') -> with('sanphams', $data);
    }

    public function getInfos(){
        $data['tacgias'] = TacGia::all();
        $data['nxbs'] = NXB::all();
        $data['theloais'] = TheLoai::all();
        return view ('admin.sanpham.add') -> with('infos', $data);
    }

    public function addSanPham(Request $req){
        $sanpham = new SanPham;
        $sanpham->tensp = $req->tensp;
        $sanpham->sotrang = $req->sotrang;
        $sanpham->loaibia = $req->loaibia;
        $sanpham->kichthuoc = $req->kichthuoc;
        $sanpham->taiban = $req->taiban;
        $sanpham->soluong = $req->soluong;
        $sanpham->gia = $req->gia;
        $sanpham->ngayxb = $req->ngayxb;
        $sanpham->matg = $req->matg;
        $sanpham->manxb = $req->manxb;
        $sanpham->matl = $req->matl;
        $sanpham->hinhanh = $req->hinhanh;
        $sanpham->mota = $req->mota;
        $alias = $req->tensp;
        $sanpham->alias = $alias;
        $sanpham->trangthai = 1;
        $sanpham->save();

        return redirect() -> route('indexSanPham');
    }
}
