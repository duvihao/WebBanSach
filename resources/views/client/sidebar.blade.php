                    <div class="left-sidebar">
                        <h2><a href="{{ route('getAllProducts') }}">Sản Phẩm</a></h2>
                        </div>
                        <div class="left-sidebar">
						<h2>Thể Loại</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->

                            @foreach(App\TheLoai::all() as $theloai)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{ route('getProductsbyGerne', [$theloai->matl,$theloai->alias]) }}">{{ $theloai->tentl }}</a></h4>
								</div>
							</div>
                            @endforeach
						</div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Nhà Xuất Bản</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach(App\NXB::all() as $nxb)
                                        <li><a href="{{ route('getProductsbyPublisher', [$nxb->manxb,$nxb->alias]) }}">{{ $nxb->tennxb }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Tác Giả</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach(App\TacGia::all() as $tacgia)
                                        <li><a href="{{ route('getProductsbyAuthor', [$tacgia->matg,$tacgia->alias]) }}">{{ $tacgia->tentg }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->

						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="" id="sl2" ><br />
								 <b class="pull-left">0 đ</b> <b class="pull-right">2,000,000 đ</b>
							</div>
						</div><!--/price-range-->

						<div class="shipping text-center"><!--shipping-->
							<img src="{{ URL::asset('client/images/home/shipping.jpg') }}" alt="" />
						</div><!--/shipping-->

					</div>
