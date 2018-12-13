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
Route::get('/', ['as' => 'getIndex', 'uses' => 'ClientController@getIndex']);
Route::get('/product/detail', function() {
	return view('client.product-details');
});
Route::get('register', ['as' => 'getRegister', 'uses' => 'ClientController@getRegister']);
Route::post('register', ['as' => 'postRegister', 'uses' => 'ClientController@postRegister']);
Route::get('login', ['as' => 'getLogin', 'uses' => 'ClientController@getLogin']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'ClientController@postLogin']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'ClientController@postLogin']);

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
Route::get('admin/nxb', ['as' => 'indexNXB', 'uses' => 'NXBController@getNXBs']);

Route::post('admin/nxb/add', ['as' => 'postAddNXB', 'uses' => 'NXBController@addNXB']);
Route::get('admin/nxb/add', ['as' => 'getAddNXB', function(){ return view ('admin.nxb.add');}]);

/* San Pham*/
Route::get('admin/sanpham', ['as' => 'indexSanPham', 'uses' => 'SanPhamController@getSanPhams']);

Route::post('admin/sanpham/add', ['as' => 'postAddSanPham', 'uses' => 'SanPhamController@addSanPham']);
Route::get('admin/sanpham/add', ['as' => 'getAddSanPham', 'uses' => 'SanPhamController@getInfos']);

/* Khach Hang */
Route::get('admin/khachhang', ['as' => 'indexKhachHang', 'uses' => 'KhachHangController@getKhachHangs']);

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

