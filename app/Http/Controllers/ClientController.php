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
use App\DonHang;
use App\ChiTietDonHang;
use App\NXB;
use App\HinhThucThanhToan;
use Hash;
use Cart;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Pagination;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ClientController extends Controller
{
    use AuthenticatesUsers;

	public function getIndex(){
        $listsp['listspslide']=SanPham::where('trangthai', 1)->inRandomOrder()->take(3)->get();
        $listsp['temp'] = 1;
        $listsp['listspnew']=SanPham::where('trangthai', 1)->latest()->take(9)->get();
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
        $idkh=Auth::guard('khach_hangs')->user()->id;
    	$listdiachi=SoDiaChi::where('makh',$idkh)->get();
        $htthanhtoan=HinhThucThanhToan::all();
    	$content=Cart::content();
    	//$total=Cart::total();
    	$subtotal=Cart::subtotal();
    	return view('client.checkout',compact('listdiachi','content','subtotal','htthanhtoan'));
    }

    public function postCheckout(Request $req){
    	$donhang=new DonHang();
    	$donhang->makh=Auth::guard('khach_hangs')->user()->id;
    	$donhang->tongtien=Cart::subtotal();
    	$donhang->hinhthucthanhtoan=$req->optPaidradio;
    	$donhang->phiship=$req->optShipradio;
    	$donhang->diachigiaohang=$req->rddiachigiaohang;
    	$donhang->trangthai=0;
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
            Cart::remove($item->rowId);
    	}
    	return redirect()->route('getIndex');
    }

    public function getAllProducts(){
        $listsp=SanPham::where('trangthai', 1)->paginate(9);
        return view('client.products')->with('listproducts', $listsp);
    }

    public function searchProduct(Request $req){
	    $keyword=$req->keyword;
        $listsp = SanPham::where('tensp', 'like', '%'.$keyword.'%')->where('trangthai', 1)->paginate(9);
        return view('client.products')->with('listproducts', $listsp);
    }

    public function getProductsbyGerne($matl){
        $listsp['listsp'] = SanPham::where('matl', $matl)->where('trangthai', 1)->paginate(9);
        $listsp['tentl'] = TheLoai::where('matl', $matl)->first()->tentl;
        return view('client.theloai')->with('listproducts', $listsp);
    }

    public function getProductsbyAuthor($matg){
        $listsp['listsp'] = SanPham::where('matg', $matg)->where('trangthai', 1)->paginate(9);
        $listsp['tentg'] = TacGia::where('matg', $matg)->first()->tentg;
        return view('client.tacgia')->with('listproducts', $listsp);
    }

    public function getProductsbyPublisher($manxb){
        $listsp['listsp'] = SanPham::where('manxb', $manxb)->where('trangthai', 1)->paginate(9);
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
    public function getDonHangs($idkh)
    {
        $listdh = DonHang::where('makh', $idkh)->paginate(10);
        return view('client.donhangs')->with('listdh', $listdh);
    }

    public function getThemdiachi(){
        return view('client.diachigiaohang.add');
    }

    public function postThemdiachi(Request $req){
        $address=new SoDiaChi();
        $address->makh =  Auth::guard('khach_hangs')->user()->id;
        $address->sonha=$req->cli_address;
        $address->phuongxa=$req->cli_ward;
        $address->quanhuyen=$req->cli_district;
        $address->thanhpho=$req->cli_city;
        $address->trangthai=1;
        $address->save();
        return redirect()->route('getCheckout');
    }

    public function getSuadiachi($id){
        $idkh=Auth::guard('khach_hangs')->user()->id;
        $address=SoDiaChi::where('makh',$idkh)->where('madc',$id)->first();
        return view('client.diachigiaohang.edit',compact('address'));
    }
    public function postSuadiachi(Request $req,$id){
        $diachi=SoDiaChi::find($id);
        $diachi->sonha=$req->cliedit_address;
        $diachi->phuongxa=$req->cliedit_ward;
        $diachi->quanhuyen=$req->cliedit_district;
        $diachi->thanhpho=$req->cliedit_city;
        $diachi->save();
        return redirect()->route('getCheckout');
    }
}
