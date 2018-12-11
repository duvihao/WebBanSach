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

/* The Loai */
Route::get('admin/theloai', ['as' => 'indexTheLoai', 'uses' => 'TheLoaiController@getTheLoais']);

Route::post('admin/theloai/add', ['as' => 'postAddTheLoai', 'uses' => 'TheLoaiController@addTheLoai']);
Route::get('admin/theloai/add', ['as' => 'getAddTheLoai', function(){ return view ('admin.theloai.add');}]);

/* Tac Gia */
Route::get('admin/tacgia', ['as' => 'indexTacGia', 'uses' => 'TacGiaController@getTacGias']);

Route::post('admin/tacgia/add', ['as' => 'postAddTacGia', 'uses' => 'TacGiaController@addTacGia']);
Route::get('admin/tacgia/add', ['as' => 'getAddTacGia', function(){ return view ('admin.tacgia.add');}]);

/* NXB */
Route::get('admin/nxb', function(){
    return view('admin.nxb.index');
});

Route::get('admin/nxb/add', function(){
    return view('admin.nxb.add');
});

/* San Pham*/
Route::get('admin/sanpham', function(){
    return view('admin.sanpham.index');
});

Route::get('admin/sanpham/add', function(){
	return view('admin.sanpham.add');
});

/* Khach Hang */
Route::get('admin/khachhang', function(){
    return view('admin.khachhang.index');
});

/* Phi Ship */
Route::get('admin/phiship', function(){
	return view('admin.phiship.config');
});

/* HTTT */
Route::get('admin/hinhthucthanhtoan', function(){
    return view('admin.hinhthucthanhtoan.index');
});

Route::get('admin/hinhthucthanhtoan/add', function(){
   return view('admin.hinhthucthanhtoan.add');
});

