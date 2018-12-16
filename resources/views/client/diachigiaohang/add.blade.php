@extends('client.master')
@section('main-content')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Thêm địa chỉ giao hàng</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Thêm địa chỉ giao hàng</h2>
			</div>
			<form method="post" action="{{ route('postThemdiachi') }}">
				@csrf
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<div class="total_area">
							<ul>
								<li><input type="text" name="cli_address" placeholder="Số nhà"/></li>
								<li> <select name="cli_ward" placeholder="Phường/xã"/>
                            	<option selected>Chọn Phường</option>
                            	<option value="1">Phường 1</option>
  								<option value="2">Phường 2</option>
  								<option value="3">Phường 3</option>
  								<option value="4">Phường 4</option>
  								<option value="5">Phường 5</option>
  								<option value="6">Phường 6</option>
  								<option value="7">Phường 7</option>
  								<option value="8">Phường 8</option>
  								<option value="9">Phường 9</option>
  								<option value="10">Phường 10</option>
                        	</select></li>
                        	<li><select name="cli_district" placeholder="Quận/Huyện"/>
								<option selected>Chọn Quận</option>
								<option value="1">Quận 1</option>
  								<option value="2">Quận 2</option>
  								<option value="3">Quận 3</option>
  								<option value="4">Quận 4</option>
  								<option value="5">Quận 5</option>
  								<option value="6">Quận 6</option>
  								<option value="7">Quận 7</option>
  								<option value="8">Quận 8</option>
  								<option value="9">Quận 9</option>
  								<option value="10">Quận 10</option>
  							</select></li>
  							<li><select name="cli_city" placeholder="Thành phố"/>
                            	<option selected>Chọn Thành phố</option>
                            	<option value="1">TP Hồ Chí Minh</option>
                            	<option value="2">Khác</option>
                        	</select></li>
                        	<li><center><button class="btn btn-default update" type="submit"><i class="fa fa-floppy-o"></i> Lưu địa chỉ mới</a></center></li>
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