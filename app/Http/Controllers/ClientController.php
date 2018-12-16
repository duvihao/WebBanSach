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
use App\DonHang;
use App\ChiTietDonHang;
use App\NXB;
use Hash;
use Cart;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Pagination;
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
        $listsp=SanPham::where('trangthai', 1)->paginate(12);
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
        $idkh=Auth::guard('khach_hangs')->user()->id;
    	$listdiachi=SoDiaChi::where('makh',$idkh)->get();
    	$content=Cart::content();
    	//$total=Cart::total();
    	$subtotal=Cart::subtotal();
    	return view('client.checkout',compact('listdiachi','content','subtotal'));
    }
    
    public function postCheckout(Request $req){
    	$donhang=new DonHang();
    	$donhang->makh=Auth::guard('khach_hangs')->user()->id;
    	$donhang->tongtien=Cart::subtotal();
    	$donhang->hinhthucthanhtoan=$req->optPaidradio;
    	$donhang->phiship=$req->optShipradio;
    	$donhang->diachigiaohang=$req->rddiachigiaohang;
    	$donhang->trangthai=1;
    	$donhang->save();

    	$datadonhang=DonHang::all()->last();

    	$listitem=Cart::content();
    	foreach($listitem as $item){
    		$ctdonhang=new ChiTietDonHang();
    		$ctdonhang->madh=$datadonhang->madh;
    		$ctdonhang->masp=$item->id;
    		$ctdonhang->soluong=$item->qty;
    		$ctdonhang->dongia=$item->price;
    		$ctdonhang->thanhtien=$item->price*$item->qty;
    		$ctdonhang->trangthai=1;
    		$ctdonhang->save();
    	}
    	return redirect()->route('getIndex');
    }

    public function getAllProducts(){
        $listsp=SanPham::where('trangthai', 1)->paginate(12);
        return view('client.products')->with('listproducts', $listsp);
    }

    public function getProductsbyGerne($matl){
        $listsp = SanPham::where('matl', $matl)->paginate(12);
        return view('client.theloai')->with('listproducts', $listsp);
    }

    public function getProductsbyAuthor($matg){
        $listsp = SanPham::where('matg', $matg)->paginate(12);
        return view('client.tacgia')->with('listproducts', $listsp);
    }

    public function getProductsbyPublisher($manxb){
        $listsp = SanPham::where('manxb', $manxb)->paginate(12);
        return view('client.nxb')->with('listproducts', $listsp);
    }

    public function getProductDetails($masp)
    {
        $data['product'] = SanPham::where('masp', $masp)->first();
        $data['listproducts'] = SanPham::where('matl', $data['product']->matl)->get();
        return view('client.product-details')->with('product', $data);
    }

    public function themgiohang($id){
        $product_buy=SanPham::where('masp',$id)->first();
        Cart::add(array('id'=>$id,'name'=>$product_buy->tensp,'qty'=>1,'price'=>$product_buy->gia,'options'=>array('img'=>$product_buy->hinhanh)));
        $content=Cart::content();
        return redirect()->back();
    }
    public function giohang(){
    	$content=Cart::content();
    	$total=Cart::subtotal();
    	return view('client.cart',compact('content','total'));
    }
    public function xoagiohang($id){
    	Cart::remove($id);
    	return redirect()->route('giohang');
    }
    /*public function capnhatgiohang($id){
    	$qty=Input::get('quantity');
    	Cart::update($id,$qty);
    	return redirect()->route('giohang');
    }*/
    public function capnhatgiohang(){
    	if(Request::ajax()){
    		$id = Request::get('id');
    		$qty = Request::get('qty');
    		Cart::update($id,$qty);
    		echo "oke";
    	}
    }
    public function laySoDiaChi(){
    	
    }
}
