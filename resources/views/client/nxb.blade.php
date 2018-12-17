@extends('client.master')
@section('main-content')<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('client.sidebar')
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Nhà xuất bản {{ $listproducts['tennxb'] }}</h2>
                    @foreach($listproducts['listsp'] as $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products" >
                                    <div class="productinfo text-center">
                                        <img src="{!! asset('img/hinhanhsanpham/'.$product->hinhanh) !!}" alt="" height="268" width="249" />
                                        <h4 style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis"><a href="{{ route('getProductDetails', [$product->masp, $product->alias]) }}">{{ $product->tensp }}</a></h4>
                                        <p>{{ number_format($product->gia, 0)}}đ</p>
                                        <a href="{!! url('themgiohang',[$product->masp,$product->alias]) !!}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div><!--features_items-->
                {{ $listproducts['listsp']->links() }}

            </div>
        </div>
    </div>
</section>
@endsection
