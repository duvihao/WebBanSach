@extends('client.master')
@section('main-content')
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row" style="background-color: #fff8e1">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner" >
                            @foreach($listsp['listspslide'] as $sanpham)
                                @if($listsp['temp']++ != 1)
                                    <div class="item active">
                                @else
                                        <div class="item">
                                @endif
                                <div class="col-sm-8">
                                    <h1><span>{{ $sanpham->tensp }}</span></h1>
                                    <h2>{{ number_format($sanpham->gia, 0) }} đ</h2>
                                    <a href="{{ route('getProductDetails', [$sanpham->masp,$sanpham->alias]) }}" type="button" class="btn btn-default get">Xem sản phẩm</a>
                                </div>
                                <div class="col-sm-4">
                                    <img src="{!! asset('img/hinhanhsanpham/'.$sanpham->hinhanh) !!}" alt="" height="268" width="249" />
                                </div>
                            </div>
                            @endforeach

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					@include('client.sidebar')
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản Phẩm Mới</h2>

                        @foreach($listsp['listspnew'] as $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products" >
                                    <div class="productinfo text-center">
                                        <img src="{!! asset('img/hinhanhsanpham/'.$product->hinhanh) !!}" alt="" height="268" width="249" />
                                        <h4><a href="{{ route('getProductDetails', [$product->masp, $product->alias]) }}">{{ $product->tensp }}</a></h4>
                                        <p>{{ number_format($product->gia,0) }}đ</p>
                                        <a href="{!! url('themgiohang',[$product->masp,$product->alias]) !!}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <img src="{!! asset('client/images/home/new.png') !!}" class="new" alt="" />
								</div>
							</div>
						</div>
                        @endforeach

                        {{ $listsp['listspnew']->links() }}

					</div><!--features_items-->

				</div>
			</div>
		</div>
	</section>
@endsection
