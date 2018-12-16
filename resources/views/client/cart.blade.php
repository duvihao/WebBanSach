@extends('client.master')
@section('main-content')
		<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
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
						<form method="post" action="">
							@csrf
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
							<td class="cart_delete">
								<a href="" class="updatecart" id="{!! $item->rowId !!}"><i class="fa fa-refresh"></i></a>
								<a href="{!! url('xoagiohang',[$item->rowId]) !!}" class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>	
							</td>
						</tr>
						@endforeach
						</form>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6" style="float: right;">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{!! $total !!}</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{!! $total !!}</span></li>
						</ul>
						<center>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
						</center>	
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection
