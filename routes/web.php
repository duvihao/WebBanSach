<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('admin.master');
});

Route::get('admin/theloai', function(){
    return view('admin.theloai.index');
});

Route::get('admin/tacgia', function(){
    return view('admin.tacgia.index');
});

Route::get('admin/nxb', function(){
    return view('admin.nxb.index');
});

Route::get('admin/sanpham', function(){
    return view('admin.sanpham.index');
});

Route::get('admin/sanpham/add', function(){
	return view('admin.sanpham.add');
});

Route::get('admin/khachhang', function(){
    return view('admin.khachhang.index');
});

Route::get('admin/phiship', function(){
	return view('admin.phiship.config');
});

Route::get('admin/hinhthucthanhtoan', function(){
    return view('admin.hinhthucthanhtoan.index');
});

