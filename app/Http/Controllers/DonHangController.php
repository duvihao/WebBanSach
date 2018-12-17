<?php

namespace App\Http\Controllers;

use App\ChiTietDonHang;
use App\DonHang;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dh = DonHang::all();
        return view('admin.donhang.index')->with('dh',$dh);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(empty($request->start)){
            $date_start = Carbon::create(2002,1,1,0,0,0);
            $donhang = DonHang::whereBetween('created_at',[$date_start, $request->end])->get();
            return view('admin.donhang.index')->with('dh',$donhang);
        }
        if(empty($request->end)){
            $temp = Carbon::now();
            $date_end = date_time_set($temp, 23,59,59);
            $donhang = DonHang::whereBetween('created_at',[$request->start, $date_end])->get();
            return view('admin.donhang.index')->with('dh',$donhang);
        }
        if(!empty($request->start) && !empty($request->end)){
            $temp = new DateTime($request->end);
            $date_end = date_time_set($temp, 23,59,59);
            $donhang = DonHang::whereBetween('created_at',[$request->start, $date_end])->get();
            return view('admin.donhang.index')->with('dh',$donhang);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $donhang = DonHang::where('madh',$id)->get();
        return view('admin.donhang.ctdh')->with('donhang',$donhang);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dh = DonHang::where('madh',$id)->first();
        $dh->trangthai= $request->cb_trangthai;
        if($dh->update()){
            return redirect('http://localhost:8888/WebBanSach/public/dh/');
        }else{
            return redirect('http://localhost:8888/WebBanSach/public/dh/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
