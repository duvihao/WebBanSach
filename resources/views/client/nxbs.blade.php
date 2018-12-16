@extends('client.master')
@section('main-content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('client.sidebar')
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Tất cả nhà xuất bản</h2>
                        @foreach($listnxb as $nxb)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products" >
                                        <ul class="nav nav-pills nav-stacked productinfo text-center">
                                            <li><a href="{{ route('getProductsbyPublisher', [$nxb->manxb,$nxb->alias]) }}">{{ $nxb->tennxb }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div><!--features_items-->


                </div>
            </div>
        </div>
    </section>
@endsection
