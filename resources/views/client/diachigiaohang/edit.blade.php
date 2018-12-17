@extends('client.master')
@section('main-content')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Sửa địa chỉ giao hàng</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Sửa địa chỉ giao hàng</h2>
			</div>
			<form method="post" action="{{ url('suadiachi',[$address->madc]) }}">
				@csrf
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<div class="total_area">
							<ul>
								<li><input type="text" name="cliedit_address" placeholder="Số nhà" value="{{ $address->sonha }}" /></li>
								<li> <select name="cliedit_ward" placeholder="Phường/xã"/>
								@for($i=1;$i<=10;$i++)
									@if($address->phuongxa == $i)
                            	<option value="{{ $i }}" selected>Phường {{ $i }}</option>
                            		@else
                            	<option value="{{ $i }}">Phường {{ $i }}</option>
                            		@endif
  								<!--<option value="2">Phường 2</option>
  								<option value="3">Phường 3</option>
  								<option value="4">Phường 4</option>
  								<option value="5">Phường 5</option>
  								<option value="6">Phường 6</option>
  								<option value="7">Phường 7</option>
  								<option value="8">Phường 8</option>
  								<option value="9">Phường 9</option>
  								<option value="10">Phường 10</option>-->
  								@endfor
                        	</select></li>
                        	<li><select name="cliedit_district" placeholder="Quận/Huyện"/>
                        		@for($a=1;$a<=10;$a++)
									@if($address->quanhuyen == $a)
                            	<option value="{{ $a }}" selected>Quận {{ $a }}</option>
                            		@else
                            	<option value="{{ $a }}">Quận {{ $a }}</option>
                            		@endif
								<!--<option selected>Chọn Quận</option>
								<option value="1">Quận 1</option>
  								<option value="2">Quận 2</option>
  								<option value="3">Quận 3</option>
  								<option value="4">Quận 4</option>
  								<option value="5">Quận 5</option>
  								<option value="6">Quận 6</option>
  								<option value="7">Quận 7</option>
  								<option value="8">Quận 8</option>
  								<option value="9">Quận 9</option>
  								<option value="10">Quận 10</option>-->
  								@endfor
  							</select></li>
  							<li><select name="cliedit_city" placeholder="Thành phố"/>
  								@for($b=1;$b<=2;$b++)
									@if($address->thanhpho == $b && $b==1)
                            	<option value="{{ $b }}" selected>TP Hồ Chí Minh</option>
                            		@else
                            	<option value="{{ $b }}">Khác</option>
                            		@endif
                            	<!--<option value="1">TP Hồ Chí Minh</option>
                            	<option value="2">Khác</option>-->
                            	@endfor
                        	</select></li>
                        	<li><center><button type="submit" class="btn btn-default update"><i class="fa fa-pencil"></i> Sửa địa chỉ</button></center></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3"></div>	
				</div>
			</div>
		</form>

		</div>
	</section> <!--/#cart_items-->
@endsection