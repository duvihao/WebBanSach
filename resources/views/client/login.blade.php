@extends('client.master')
@section('main-content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						<form action="{{route('postLogin')}}" method="post">
							@csrf
							@if(Session::has('flag'))
							<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
							@endif
							<input type="email" name="loginEmail" placeholder="Tài khoản" />
							@if ($errors->has('loginEmail'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('loginEmail') }}</strong>
                                </span>
                            @endif
							<input type="password" name="loginPass" placeholder="Mật khẩu" />
							@if ($errors->has('loginPass'))
                                <span class="help-block">
                                     <strong>{{ $errors->first('loginPass') }}</strong>
                                </span>
                            @endif
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection
