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

Route::get('/', function () {
    return view('admin.master');
});

Route::get('product', function(){
	return view('admin.product.index');
});

Route::get('product/add', function(){
	return view('admin.product.add');
});

Route::get('chargeship', function(){
	return view('admin.chargeship.config');
});

