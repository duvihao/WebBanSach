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
                            <div class="col-sm-12" >
                                <div class="product-image-wrapper" >
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <table border="1px">
                                                <thead>
                                                <tr style="text-align: center">
                                                    <th data-field="madh" class="col-sm-2" style="text-align: center">Mã đơn hàng</th>
                                                    <th data-field="tongtien" class="col-sm-2" style="text-align: center">Tổng tiền</th>
                                                    <th data-field="httt" class="col-sm-2" style="text-align: center">HT thanh toán</th>
                                                    <th data-field="dcgh" class="col-sm-4" style="text-align: center">Địa chỉ giao hàng</th>
                                                    <th data-field="trangthai" class="col-sm-2" style="text-align: center">Trạng thái</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($listdh as $dh)
                                                        <?php
                                                        $httt = App\HinhThucThanhToan::Where('mahttt',$dh->hinhthucthanhtoan)->first();
                                                        $diachi = App\SoDiaChi::where('madc', $dh->diachigiaohang)->first();
                                                        ?>
                                                        <tr>
                                                            <td>{{ $dh->madh }}</td>
                                                            <td>{{ number_format($dh->tongtien*1000, 0) }} đ</td>
                                                            <td>{{ $httt->tenhttt }}</td>
                                                            <td>{{ $diachi->sonha }}, Phường {{ $diachi->phuongxa }}, Quận {{ $diachi->quanhuyen }}</td>
                                                            @if($dh->trangthai ==0)
                                                                <td><input style="text-align: center;" type="text" value="Chưa thanh toán" readonly></td>

                                                            @elseif($dh->trangthai ==1)
                                                                <td><input type="text" value="Đã thanh toán" disabled style="text-align: center;"></td>
                                                            @else
                                                                <td><input type="text" value="Hủy" disabled style="text-align: center;"></td>
                                                            @endif
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                </div><!--features_items-->

            </div>
        </div>
    </div>
</section>
@endsection
