                    <div class="left-sidebar">
                        <h2><a href="{{ route('getIndex') }}" style="color:#FE980F;">Trang Chủ</a></h2>
                        <h2><a href="{{ route('getAllProducts') }}" style="color:#FE980F;">Sản Phẩm</a></h2>
                        </div>
                        <div class="left-sidebar">
                            <h2><a href="{{ route('getAllGernes') }}" style="color:#FE980F;">Thể Loại</a></h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->

                            @foreach(App\TheLoai::where('trangthai', 1)->inRandomOrder()->take(10)->get() as $theloai)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{ route('getProductsbyGerne', [$theloai->matl,$theloai->alias]) }}">{{ $theloai->tentl }}</a></h4>
								</div>
							</div>
                            @endforeach
						</div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2><a href="{{ route('getAllPublishers') }}" style="color:#FE980F;">Nhà Xuất Bản</a></h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach(App\NXB::where('trangthai', 1)->inRandomOrder()->take(10)->get() as $nxb)
                                        <li><a href="{{ route('getProductsbyPublisher', [$nxb->manxb,$nxb->alias]) }}">{{ $nxb->tennxb }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2><a href="{{ route('getAllAuthors') }}" style="color:#FE980F;">Tác Giả</a></h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach(App\TacGia::where('trangthai', 1)->inRandomOrder()->take(10)->get() as $tacgia)
                                        <li><a href="{{ route('getProductsbyAuthor', [$tacgia->matg,$tacgia->alias]) }}">{{ $tacgia->tentg }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->

						<!--<div class="price-range"><!--price-range
							<h2>Giá sản phẩm</h2>
						</div><!--/price-range-->
					</div>
