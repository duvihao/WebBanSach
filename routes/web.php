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

Route::get('/product/detail/{masp}', ['as' => 'getProductDetails', 'uses' => 'ClientController@getProductDetails']);

Route::get('register', ['as' => 'getRegister', 'uses' => 'ClientController@getRegister']);
Route::post('register', ['as' => 'postRegister', 'uses' => 'ClientController@postRegister']);

Route::get('login', ['as' => 'getLogin', 'uses' => 'ClientController@getLogin']);
Route::post('login', ['as' => 'postLogin', 'uses' => 'ClientController@postLogin']);

Route::get('logout', ['as' => 'getLogout', 'uses' => 'ClientController@getLogout']);
Route::get('themgiohang/{id}/{tensanpham}',['as'=>'themgiohang','uses'=>'ClientController@giohang']);

Route::get('/admin', function () {
    return view('admin.master');
});

/* The Loai */
Route::get('admin/theloai', ['as' => 'indexTheLoai', 'uses' => 'TheLoaiController@getTheLoais']);

Route::post('admin/theloai/add', ['as' => 'postAddTheLoai', 'uses' => 'TheLoaiController@addTheLoai']);
Route::get('admin/theloai/add', ['as' => 'getAddTheLoai', function(){ return view ('admin.theloai.add');}]);

Route::post('admin/theloai/edit/{matl}', ['as' => 'postEditTheLoai', 'uses' => 'TheLoaiController@editTheLoai']);
Route::get('admin/theloai/edit/{matl}', ['as' => 'getEditTheLoai', 'uses' => 'TheLoaiController@getTheLoai']);

Route::get('admin/theloai/delete/{matl}', ['as' => 'deleteTheLoai', 'uses' => 'TheLoaiController@deleteTheLoai']);

/* Tac Gia */
Route::get('admin/tacgia', ['as' => 'indexTacGia', 'uses' => 'TacGiaController@getTacGias']);

Route::post('admin/tacgia/add', ['as' => 'postAddTacGia', 'uses' => 'TacGiaController@addTacGia']);
Route::get('admin/tacgia/add', ['as' => 'getAddTacGia', function(){ return view ('admin.tacgia.add');}]);

Route::post('admin/tacgia/edit/{matg}', ['as' => 'postEditTacGia', 'uses' => 'TacGiaController@editTacGia']);
Route::get('admin/tacgia/edit/{matg}', ['as' => 'getEditTacGia', 'uses' => 'TacGiaController@getTacGia']);

Route::get('admin/tacgia/delete/{matg}', ['as' => 'deleteTacGia', 'uses' => 'TacGiaController@deleteTacGia']);

/* NXB */
Route::get('admin/nxb', ['as' => 'indexNXB', 'uses' => 'NXBController@getNXBs']);

Route::post('admin/nxb/add', ['as' => 'postAddNXB', 'uses' => 'NXBController@addNXB']);
Route::get('admin/nxb/add', ['as' => 'getAddNXB', function(){ return view ('admin.nxb.add');}]);

Route::post('admin/nxb/edit/{manxb}', ['as' => 'postEditNXB', 'uses' => 'NXBController@editNXB']);
Route::get('admin/nxb/edit/{manxb}', ['as' => 'getEditNXB', 'uses' => 'NXBController@getNXB']);

Route::get('admin/nxb/delete/{manxb}', ['as' => 'deleteNXB', 'uses' => 'NXBController@deleteNXB']);

/* San Pham*/
Route::get('admin/sanpham', ['as' => 'indexSanPham', 'uses' => 'SanPhamController@getSanPhams']);

Route::post('admin/sanpham/add', ['as' => 'postAddSanPham', 'uses' => 'SanPhamController@addSanPham']);
Route::get('admin/sanpham/add', ['as' => 'getAddSanPham', 'uses' => 'SanPhamController@getInfos']);

Route::post('admin/sanpham/edit/{masp}', ['as' => 'postEditSanPham', 'uses' => 'SanPhamController@editSanPham']);
Route::get('admin/sanpham/edit/{masp}', ['as' => 'getEditSanPham', 'uses' => 'SanPhamController@getSanPham']);


/* Khach Hang */
Route::get('admin/khachhang', ['as' => 'indexKhachHang', 'uses' => 'KhachHangController@getKhachHangs']);


/* Phi Ship */
Route::get('admin/phiship', function(){
	return view('admin.phiship.config');
});


/* HTTT */
Route::get('admin/hinhthucthanhtoan', ['as' => 'indexHinhThucThanhToan', 'uses' => 'HinhThucThanhToanController@getHinhThucThanhToans']);

/*Route::post('admin/hinhthucthanhtoan/add', ['as' => 'postAddHinhThucThanhToan', 'uses' => 'HinhThucThanhToanController@addHinhThucThanhToan']);
Route::get('admin/hinhthucthanhtoan/add', ['as' => 'getAddHinhThucThanhToan', function(){ return view ('admin.hinhthucthanhtoan.add');}]);*/

