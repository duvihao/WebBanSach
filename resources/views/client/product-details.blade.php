@extends('client.master')
@section('main-content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					@include('client.sidebar')
				</div>

				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
                                <img src="{!! asset('img/hinhanhsanpham/'.$product['product']->hinhanh) !!}" alt="" />
							</div>
                        </div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2>{{ $product['product']->tensp }}</h2>
								<span>
									<span>{{ number_format($product['product']->gia, 0)}}đ</span>
									<label>Số lượng:</label>
									<input type="text" value="1" /><br>
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng
									</button>
								</span>
								<p><b>Tình trạng:</b>
                                    @if($product['product']->soluong > 0) Còn sản phẩm
                                    @else Hết sản phẩm
                                    @endif</p>
								<p><b>Tác Giả:</b> {{ App\TacGia::where('matg', $product['product']-> matg)->first()->tentg }}</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Chi tiết sản phẩm</a></li>
							</ul>
						</div>
						<div class="tab-content">

                            <div class="tab-pane fade active in" id="reviews" >
                                <div class="col-sm-4">

                                    <p><b>Tác Giả:</b><span class="pull-right"> {{ App\TacGia::where('matg', $product['product']-> matg)->first()->tentg }}</span></p>
                                    <p><b>Ngày Xuất Bản:</b><span class="pull-right"> {{ $product['product']-> ngayxb }}</span></p>
                                    <p><b>Kích Thước:</b><span class="pull-right"> {{ $product['product']-> kichthuoc }}</span></p>
                                    <p><b>Nhà Xuất Bản:</b><span class="pull-right"> {{ App\NXB::where('manxb', $product['product']-> manxb)->first()->tennxb }}</span></p>
                                    <p><b>Nhà Xuất Bản:</b><span class="pull-right"> {{ App\TheLoai::where('matl', $product['product']-> matl)->first()->tentl }}</span></p>
                                    <p><b>Loại Bìa:</b><span class="pull-right"> {{ $product['product']-> loaibia }}</span></p>
                                    <p><b>Số Trang:</b><span class="pull-right"> {{ $product['product']-> sotrang }}</span></p>

                                </div>
							</div>

						</div>
					</div><!--/category-tab-->

					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản Phẩm Tương Tự</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
                                    @foreach($product['listproducts'] as $products)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{!! asset('img/hinhanhsanpham/'.$products->hinhanh) !!}" alt="" height="268" width="249"/>
                                                    <h4><a href="{{ route('getProductDetails', [$products->masp, $products->alias]) }}">{{ $products->tensp }}</a></h4>
													<p>{{ number_format($products->gia,0) }}đ</p>
                                                    <a href="{!! url('themgiohang',[$products->masp,$products->tensp]) !!}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
											</div>
										</div>
									</div>
                                    @endforeach
								</div>
						</div>
					</div><!--/recommended_items-->

				</div>
			</div>
		</div>
	</section>
@endsection
