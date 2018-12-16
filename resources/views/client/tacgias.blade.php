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
                        <h2 class="title text-center">Tất cả tác giả</h2>
                        @foreach($listtg as $tacgia)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products" >
                                        <ul class="nav nav-pills nav-stacked productinfo text-center">
                                            <li><a href="{{ route('getProductsbyAuthor', [$tacgia->matg,$tacgia->alias]) }}">{{ $tacgia->tentg }}</a></li>
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
