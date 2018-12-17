<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\RegisterAdminRequest;
use App\Http\Requests\LoginAdminRequest;
use App\User;
use App\DonHang;
use Hash;
use Auth;

class AdminController extends Controller
{
    use AuthenticatesUsers;
    public function getIndex(){

    	return view('admin.index');
    }
    public function getRegister(){
    	return view('admin.register');
    }
    public function getLogin(){
    	return view('admin.login');
    }
    public function postRegister(RegisterAdminRequest $request){
    	$admin= new User();
    	$admin->name = $request->admin_name;
    	$admin->email=$request->admin_email;
    	$admin->password=Hash::make($request->admin_password);
    	$admin->save();
    	return redirect()->route('getAdminLogin');
    }
    public function postLogin(LoginAdminRequest $req){
    	$credentials = array('email'=>$req->adminlogin_email,'password'=>$req->adminlogin_password);
    	if(Auth::attempt($credentials)){
    		return redirect()->route('getAdminIndex');
    	}
    	else{
    		return redirect()->back()->with(['flag1'=>'danger','message1'=>'Đăng nhập thất bại']);
    	}
    }
    public function getLogout(){
    	Auth::logout();
    	return redirect()->route('getAdminLogin');
    }
}
