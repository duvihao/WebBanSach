<?php

namespace App\Http\Controllers;

use App\TacGia;
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
use Cart;
use Auth;
use Illuminate\Contracts\Pagination;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ClientController extends Controller
{
    use AuthenticatesUsers;

	public function getIndex(){
        $listsp['listspslide']=SanPham::where('trangthai', 1)->inRandomOrder()->take(3)->get();
        $listsp['temp'] = 1;
        $listsp['listspnew']=SanPham::where('trangthai', 1)->latest()->paginate(12);
        return view('client.index')->with('listsp', $listsp);
	}

    public function getAllGernes(){
        $listtl=TheLoai::where('trangthai', 1)->get();
        return view('client.theloais')->with('listtl', $listtl);
    }

    public function getAllPublishers(){
        $listnxb=NXB::where('trangthai', 1)->get();
        return view('client.nxbs')->with('listnxb', $listnxb);
    }

    public function getAllAuthors(){
        $listtg=TacGia::where('trangthai', 1)->get();
        return view('client.tacgias')->with('listtg', $listtg);
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
        $address->makh =  $dataclient->id;
        $address->sonha=$request->client_address;
        $address->phuongxa=$request->client_ward;
        $address->quanhuyen=$request->client_district;
        $address->thanhpho=$request->client_city;
        $address->trangthai=1;
        $address->save();
    	return redirect()->route('getLogin');
    }
    protected function guard(){
      return Auth::guard('khach_hangs');
    }

    public function getLogin(){
    	return view('client.login');
    }
    public function postLogin(LoginRequest $req){
    	$credentials = array('email'=>$req->loginEmail,'password'=>$req->loginPass);
        Auth::guard('khach_hangs')->attempt($credentials);
    	if(Auth::guard('khach_hangs')->attempt($credentials)){
    		return redirect()->route('getIndex');
    	}
    	else{
    		return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại']);
    	}
    }
    public function getLogout(){
    	Auth::guard('khach_hangs')->logout();
    	return redirect()->route('getIndex');
    }

    public function getCheckout(){
        return view('client.checkout-new');
    }

    public function getAllProducts(){
        $listsp=SanPham::where('trangthai', 1)->paginate(12);
        return view('client.products')->with('listproducts', $listsp);
    }

    public function searchProduct(Request $req){
	    $keyword=$req->keyword;
        $listsp=SanPham::where('tensp', 'like', '%'.$keyword.'%')->paginate(12);
        return view('client.products')->with('listproducts', $listsp);
    }

    public function getProductsbyGerne($matl){
        $listsp['listsp'] = SanPham::where('matl', $matl)->paginate(12);
        $listsp['tentl'] = TheLoai::where('matl', $matl)->first()->tentl;
        return view('client.theloai')->with('listproducts', $listsp);
    }

    public function getProductsbyAuthor($matg){
        $listsp['listsp'] = SanPham::where('matg', $matg)->paginate(12);
        $listsp['tentg'] = TacGia::where('matg', $matg)->first()->tentg;
        return view('client.tacgia')->with('listproducts', $listsp);
    }

    public function getProductsbyPublisher($manxb){
        $listsp['listsp'] = SanPham::where('manxb', $manxb)->paginate(12);
        $listsp['tennxb'] = NXB::where('manxb', $manxb)->first()->tennxb;
        return view('client.nxb')->with('listproducts', $listsp);
    }

    public function getProductDetails($masp)
    {
        $data['product'] = SanPham::where('masp', $masp)->first();
        $temp=SanPham::where('masp', $masp)->first()->matl;
        $data['listproducts'] = SanPham::where('matl', $temp)->where('masp', '!=', $masp)->get();
        return view('client.product-details')->with('product', $data);
    }

    public function giohang($id){
        $product_buy=SanPham::where('masp',$id)->first();
        Cart::add(array('id'=>$id,'name'=>$product_buy->tensp,'qty'=>1,'price'=>$product_buy->gia,'options'=>array('img'=>$product_buy->hinhanh)));
        $content=Cart::content();
        print_r($content);
    }
}
