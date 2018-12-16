<?php

namespace App\Http\Controllers;

use App\TheLoai;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\KhachHang;
use App\SoDiaChi;
use App\User;
use App\SanPham;
use App\NXB;
use Hash;
use App\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class ClientController extends Controller
{
    use AuthenticatesUsers;

    public function getMaster(){
        $data['listtl'] = TheLoai::where('trangthai', 1)->get();
        $data['listnxb'] = NXB::where('trangthai', 1)->get();
        $data['listtg'] = TacGia::where('trangthai', 1)->get();
        return view('client.blade')->with('infos', $data);
    }

	public function getIndex(){
        $listsp=SanPham::where('trangthai', 1)->get();
        return view('client.index')->with('listsp', $listsp);
	}
    public function getRegister(){
    	return view('client.register');
    }
    public function postRegister(RegisterRequest $request){
    	$client= new KhachHang();
    	$client->ten = $request->client_name;
    	$client->diachi=$request->client_address;
    	$client->sdt=$request->client_phone;
    	$client->ngaysinh=$request->client_birthday;
    	$client->gioitinh=$request->client_sex;
    	$client->email=$request->client_email;
    	$client->password=Hash::make($request->client_pass);
    	$client->trangthai=1;
    	$client->save();

        $dataclient=KhachHang::all()->last();

        $address=new SoDiaChi();
        $address->makh =  $dataclient->makh;
        $address->sonha=$request->client_address;
        $address->phuongxa=$request->client_ward;
        $address->quanhuyen=$request->client_district;
        $address->thanhpho=$request->client_city;
        $address->trangthai=1;
        $address->save();
    	return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
    protected function guard(){
      return Auth::guard('khach_hangs');
    }

    public function getLogin(){
    	return view('client.login');
    }
    public function postLogin(LoginRequest $req){
    	$credentials = array('email'=>$req->loginEmail,'password'=>$req->loginPass);
    	if(Auth::guard('khach_hangs')->attempt($credentials)){
    		return redirect()->route('getIndex');
    	}
    	else{
    		return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại']);
    	}
    }
    public function getLogout(){
        Auth::logout();
    	//Auth::guard('khach_hangs')->logout();
    	return redirect()->route('getIndex');
    }

    public function getProductDetails($masp){
        $data['product'] = SanPham::where('masp', $masp)->first();
        $data['listproducts'] = SanPham::where('matl', $data['product']->matl)->get();
        return view('client.product-details')->with('product', $data);
    }
}
