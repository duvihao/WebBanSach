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
							<input type="text" name="client_address" placeholder="Địa Chỉ"/>
							@if ($errors->has('client_address'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('client_address') }}</strong>
                                </span>
                            @endif
							<input type="number" name="client_phone" placeholder="Số điện thoại"/>
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