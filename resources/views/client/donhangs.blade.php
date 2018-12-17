@extends('client.master')
@section('main-content')<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('client.sidebar')
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Tất cả đơn hàng</h2>
                    @if($listdh->count() > 0)
                        @foreach($listdh as $donhang)
                            <div class="col-sm-4" >
                                <div class="product-image-wrapper" >
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <h4 style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis"><a href="{{ route('getCTDonHang', $donhang->madh) }}">{{ $donhang->madh }} </a></h4>
                                            <p>{{ number_format($donhang->tongtien, 0)}}đ</p>
                                            <p>{{ $donhang->diachigiaohang}}đ</p>
                                            <p>{{ $donhang->trangthai}}đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-sm-4" >
                            <h4>Bạn Chưa Mua Đơn Hàng Nào!</h4>
                        </div>
                    @endif

                </div><!--features_items-->
                {{ $listdh->links() }}

            </div>
        </div>
    </div>
</section>
@endsection
