@extends('client.master')
@section('main-content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{route('postRegister')}}" method="post">
							@csrf
							@if(Session::has('thanhcong'))
								<div class="alert alert-successs">{{Session::get('thanhcong')}}</div>
							@endif
							<input type="email" name="client_email" placeholder="Email Address"/>
							@if ($errors->has('client_email'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('client_email') }}</strong>
                                </span>
                            @endif
							<input type="text" name="client_name" placeholder="Họ Tên"/>
							@if ($errors->has('client_name'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('client_name') }}</strong>
                                </span>
                            @endif
							<input type="text" name="client_address" placeholder="Số nhà"/>
							@if ($errors->has('client_address'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('client_address') }}</strong>
                                </span>
                            @endif
                        	<div class="col-sm-4">
                            <select name="client_ward" placeholder="Phường/xã"/>
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
                        	</select>
                            </div>
                             <div class="col-sm-4">
							<select name="client_district" placeholder="Quận/Huyện"/>
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
  							</select>
                        	</div>
                        	<div class="col-sm-4">
                            <select name="client_city" placeholder="Thành phố"/>
                            	<option selected>Chọn Thành phố</option>
                            	<option value="1">TP Hồ Chí Minh</option>
                            	<option value="2">Khác</option>
                        	</select>
                            </div>
							<input style="margin-top:50px;" type="number" name="client_phone" placeholder="Số điện thoại"/>
							@if ($errors->has('client_phone'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('client_phone') }}</strong>
                                </span>
                            @endif
							<input type="date" name="client_birthday" placeholder="Ngày sinh"/>
							@if ($errors->has('client_birthday'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('client_birthday') }}</strong>
                                </span>
                            @endif
							<div class="col-sm-3">
								<label class="col-sm-3 radio-inline"><input type="radio" name="client_sex" value="1">Nam</label>
							</div>
							<div class="col-sm-3">
								<label class="col-sm-3 radio-inline"><input type="radio" name="client_sex" value="0">Nữ</label>
							</div>
							@if ($errors->has('client_sex'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('client_sex') }}</strong>
                                </span>
                            @endif
							<input type="password" name="client_pass" placeholder="Password"/>
							@if ($errors->has('client_pass'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('client_pass') }}</strong>
                                </span>
                            @endif
							<input type="password" name="client_repass" placeholder="Re Password"/>
							@if ($errors->has('client_repass'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('client_repass') }}</strong>
                                </span>
                            @endif
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection