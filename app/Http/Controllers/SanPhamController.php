<?php

namespace App\Http\Controllers;

use App\SanPham;
use App\TacGia;
use App\NXB;
use App\TheLoai;
use DateTime;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    //

    public function getSanPhams(){
        $data = SanPham::where('trangthai', 1)->get();
        return view ('admin.sanpham.index') -> with('sanphams', $data);
    }

    public function getInfos(){
        $data['tacgias'] = TacGia::where('trangthai', 1)->get();
        $data['nxbs'] = NXB::where('trangthai', 1)->get();
        $data['theloais'] = TheLoai::where('trangthai', 1)->get();
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

        $filename = $req->file('hinhanh')->getClientOriginalName();
        $now = new DateTime();
        $datestring = $now->format('dmYHis');
        $hinhanh = $datestring."-".$filename;
        $req->file('hinhanh')->move('img/hinhanhsanpham/', $hinhanh);
        $sanpham->hinhanh = $hinhanh;

        $sanpham->mota = $req->mota;

        $ten = $req->tensp;
        $alias = changeTitle($ten);
        $sanpham->alias = $alias;

        $sanpham->trangthai = 1;
        $sanpham->save();

        return redirect() -> route('indexSanPham');
    }

    public function getSanPham($masp){
        $data['sanpham'] = SanPham::where('masp', $masp)->first();
        $data['tacgias'] = TacGia::all();
        $data['nxbs'] = NXB::all();
        $data['theloais'] = TheLoai::all();
        return view('admin.sanpham.edit')->with('infos', $data);
    }

    public function editSanPham(Request $req, $masp){

        $ten = $req->tensp;
        $alias = changeTitle($ten);

        SanPham::where('masp', $masp)->update(['tensp'=>$req->tensp, 'soluong'=>$req->soluong,
                                                'matl'=>$req->matl, 'sotrang'=>$req->sotrang, 'manxb'=>$req->manxb,
                                                'ngayxb'=>$req->ngayxb, 'matg'=>$req->matg, 'taiban'=>$req->taiban,
                                                'mota'=>$req->mota, 'loaibia'=>$req->loaibia, 'kichthuoc'=>$req->kichthuoc,
                                                'gia'=>$req->gia, 'alias'=>$alias]);
        if($req->file('hinhanh') != null){
            $filename = $req->file('hinhanh')->getClientOriginalName();
            $now = new DateTime();
            $datestring = $now->format('dmYHis');
            $hinh = $datestring."-".$filename;
            $req->file('hinhanh')->move('img/hinhanhsanpham/', $hinh);
            SanPham::where('masp', $masp)->update(['hinhanh'=>$hinh]);
        }
        return redirect()->route('indexSanPham');
    }

    public function deleteSanPham($masp){
        SanPham::where('masp', $masp)->update(['trangthai'=>0]);
        return redirect()->route('indexSanPham');
    }

}
