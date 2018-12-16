@extends('client.master')
@section('main-content')

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
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-6">
						<center>
						<div class="total_area" style="padding-bottom: 20px; padding-right:30px; border: #000 1px dotted;">
							<ul>
								<li>Nguyễn Bão Duy Khang</li>
								<li>Địa chỉ: 28/23A Dương Bá Trạc, Phường 02, Quận 08, TPHCM, Việt Nam</li>
								<li>Điện thoại: 0708245111</li>
							</ul>
								<a class="btn btn-default update" href="">Chọn địa chỉ này</a>
								<a class="btn btn-default check_out" href="">Sửa</a>
						</div>
						</center>
					</div>
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
				<h2 class="heading">Chọn hình thức thanh toán và giao hàng</h2>
			</div>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-6">
						<div class="total_area">
							<ul>
								<li><label><input type="radio" name="optShipradio" checked> <i class="fa fa-truck"></i> Giao hàng tiêu chuẩn (12000 đ)</label></li>
								<li><label><input type="radio" name="optShipradio"><i class="fa fa-truck"></i>  Giao hàng nhanh (29000 đ)</label></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="total_area">
							<ul>
								<li><label><input type="radio" name="optPaidradio" checked> <i class="fa fa-money"></i> Thanh toán bằng tiền mặt khi nhận hàng</label></li>
								<li><label><input type="radio" name="optPaidradio"><i class="fa fa-credit-card"></i>  Thanh toán bằng chuyển khoản ngân hàng</label></li>
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
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>$59</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>$2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$61</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
					<button type="submit" class="btn btn-primary" style="float: right;">Đặt hàng</button>
			</div>

		</div>
	</section> <!--/#cart_items-->

@endsection

