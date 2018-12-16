@extends('client.master')
@section('main-content')
	 @if(Auth::guard('khach_hangs')->check())
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Xử lý thanh toán</h2>
			</div>

			<div class="step-one">
				<h2 class="heading">Chọn địa chỉ giao hàng</h2>
			</div>
			<form method="post" action="">
				@csrf
			<div class="shopper-informations">
				<div class="row">
					@foreach($listdiachi as $diachi)
					<div class="col-sm-6">
						<center>
						<div class="total_area" style="padding-bottom: 20px; padding-right:30px; border: #000 1px dotted;">
							<ul>
								<li>{{Auth::guard('khach_hangs')->user()->ten}}</li>
								@if($diachi->thanhpho==1)
								<li>Địa chỉ: {{$diachi->sonha}},Phường {{$diachi->phuongxa}}, Quận {{$diachi->quanhuyen}}, TP.Hồ Chí Minh</li>
								@else
								<li>Khác</li>
								@endif
								<li>Điện thoại: {{Auth::guard('khach_hangs')->user()->sdt}}</li>
							</ul>
								<button class="btn btn-primary"><input type="radio" name="diachigiaohang" value="{{ $diachi->madc }}"> Chọn địa chỉ này</button>
								<a class="btn btn-default check_out" href="">Sửa</a>
						</div>
						</center>
					</div>
					@endforeach
					<div class="col-sm-6">
						<center>
						<div class="total_area" style="padding-bottom: 20px; padding-right:30px; border: #000 1px dotted;">
							<ul>
								<li>Bạn muốn giao hàng đến địa chỉ khác?</li>
							</ul>
								<a class="btn btn-default update" href=""><i class="fa fa-plus"></i> Thêm địa chỉ mới</a>
						</div>
						</center>
					</div>
				</div>
			</div>

			<div class="step-one">
				<h2 class="heading">Chọn hình thức giao hàng</h2>
			</div>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12">
						<div class="total_area">
							<ul>
								<li><label><input type="radio" name="optShipradio" value="12000" checked> <i class="fa fa-truck"></i> Giao hàng tiêu chuẩn (12000 đ)</label></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="step-one">
				<h2 class="heading">Chọn hình thức thanh toán</h2>
			</div>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12">
						<div class="total_area">
							<ul>
								<li><label><input type="radio" name="optPaidradio" value="1" checked> <i class="fa fa-money"></i> Thanh toán bằng tiền mặt khi nhận hàng</label></li>
								<li><label><input type="radio" name="optPaidradio" value="2"><i class="fa fa-credit-card"></i>  Thanh toán bằng chuyển khoản ngân hàng</label></li>
							</ul>
						</div>
					</div>
				</div>
			</div>


			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $item)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{!! asset('img/hinhanhsanpham/'.$item->options['img']) !!}" width="50px" height="50px"></a>
							</td>
							<td class="cart_description">
								<h4>{!! $item->name !!}</h4>
								<p>ID: {!! $item->id !!}</p>
							</td>
							<td class="cart_price">
								<p>{!! number_format($item->price,0,",",".") !!}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="text" name="quantity" value='{!! $item->qty !!}'>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{!! number_format($item->price*$item->qty,0,".",",") !!}</p>
							</td>
						</tr>
						@endforeach
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Tổng tiền</td>
										<td>{!! $subtotal !!}</td>
									</tr>
									<!--<tr>
										<td>Total</td>
										<td><span></span></td>-->
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<button type="submit" class="btn btn-primary" style="float: right;">Đặt hàng</button>
			</div>
			</form>	
		</div>
	</section> <!--/#cart_items-->
	@else

		<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Xử lý thanh toán</h2>
			</div>
			<div class="checkout-options">
				<h3>Đăng nhập để thanh toán</h3>
				<p>Bạn chưa đăng ký thành viên? <a href="{{route('getRegister')}}">Đăng ký</a></p>
				<center><a href="{{route('getLogin')}}" type="button" class="btn btn-primary">Đăng nhập</a></center>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>Vui lòng đăng nhập để thanh toán hoặc nếu chưa có tài khoản hãy đăng ký thành viên</p>
			</div><!--/register-req-->

			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $item)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{!! asset('img/hinhanhsanpham/'.$item->options['img']) !!}" width="50px" height="50px"></a>
							</td>
							<td class="cart_description">
								<h4>{!! $item->name !!}</h4>
								<p>ID: {!! $item->id !!}</p>
							</td>
							<td class="cart_price">
								<p>{!! number_format($item->price,0,",",".") !!}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="text" name="quantity" value='{!! $item->qty !!}'>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{!! number_format($item->price*$item->qty,0,".",",") !!}</p>
							</td>
						</tr>
						@endforeach
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Tổng tiền</td>
										<td>{!! $subtotal !!}</td>
									</tr>
									<!--<tr>
										<td>Total</td>
										<td><span></span></td>-->
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</section> <!--/#cart_items-->
	@endif

@endsection

