<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Web Bán Sách</title>
    <link href="{{ URL::asset('client/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('client/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('client/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('client/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('client/css/animate.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('client/css/main.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('client/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ URL::asset('client/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('client/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('client/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('client/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('client/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">

                            <div class="item" style="margin-top:-120px;">
                                <div class="col-sm-6">
                                    <a href="{{ route('getIndex') }}"><h1><span>Web</span>Bán<span>Sách</span></h1></a>
                                </div>
                            </div>

						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{ route('getCheckout') }}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
								<li><a href="{{ route('giohang') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                @if(Auth::guard('khach_hangs')->check())
                                    <li><a href="#"><i class="fa fa-user"></i>Hello {{Auth::guard('khach_hangs')->user()->ten}}</a></li>
								    <li><a href="{{route('getLogout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
								@else
								    <li><a href="{{route('getLogin')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                    <li><a href="{{ route('getRegister') }}"><i class="fa fa-star"></i> Đăng ký</a></li>
								@endif

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
                    <form action="{{ route('getSearch') }}" method="get">
                        @csrf
					<div class="col-sm-5">
					</div>
					<div class="col-sm-6">
						<div class="search_box pull-right">
							<input type="text" placeholder="Tìm kiếm tên sách ..." name="keyword" id="getSearch"/>
						</div>
					</div>
                    <div class="col-sm-1">
                        <div class="search_box pull-right">
                            <button type="submit" class="btn btn-default get" style="margin-top: 0px">Tìm kiếm</button>
                        </div>
                    </div>
                    </form>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	@yield('main-content')

	<footer id="footer" style="height:300px"><!--Footer-->

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Tài khoản của tôi</h2>
							<ul class="nav nav-pills nav-stacked">
                                @if(Auth::guard('khach_hangs')->check())
                                    <li><a href="{{route('getLogout')}}"><i class="fa fa-lock"></i>Đăng xuất tài khoản</a></li>
                                    <li><a href="{{ route('getDonHang', Auth::guard('khach_hangs')->user()) }}"><i class="glyphicon glyphicon-gift"></i>Đơn hàng của tôi</a></li>
                                @else
                                    <li><a href="{{route('getLogin')}}"><i class="fa fa-lock"></i> Đăng nhập tài khoản</a></li>
                                    <li><a href="{{ route('getRegister') }}"><i class="fa fa-star"></i>Đăng ký tài khoản</a></li>
                                @endif
								<li><a href="#"><i class="fa fa-shopping-cart"></i>Giỏ hàng của tôi</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>Thành viên nhóm</h2>
							<ul class="nav nav-pills nav-stacked">
                                <li><a href="#"><i class="glyphicon glyphicon-user"></i> Dư Vĩ Hào - 3114410033</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-user"></i> Nguyễn Thị Thanh Hằng - 3114410038</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-user"></i> Văn Trung Huê - 3114410049</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-user"></i> Nguyễn Bão Duy Khang - 3114410061</a></li>
							</ul>
						</div>
					</div>
                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>Liên Hệ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"><i class="glyphicon glyphicon-map-marker"></i> Địa Chỉ: Đại Học Sài Gòn</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Email: p_daotao@sgu.edu.vn</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-earphone"></i> Điện Thoại: (84-8) 38.354409 - 38.352309</a></li>
                            </ul>
                        </div>
                    </div>
				</div>
			</div>
		</div>

		<!--<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>-->

	</footer><!--/Footer-->



    <script src="{{ URL::asset('client/js/jquery.js') }}"></script>
	<script src="{{ URL::asset('client/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('client/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ URL::asset('client/js/price-range.js') }}"></script>
    <script src="{{ URL::asset('client/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ URL::asset('client/js/main.js') }}"></script>
    <script src="{{ URL::asset('client/js/myscript.js') }}"></script>
</body>
</html>
