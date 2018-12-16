@extends('admin.master')
@section('main-content')
           <!-- Breadcome start-->
            <div class="breadcome-area des-none mg-b-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Danh mục đơn hàng</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            <!-- income order visit user End -->
            <!-- Transitions Start-->
            <!-- Transitions End-->
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Danh Mục Đơn Hàng</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="sparkline13-graph">

                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>

                                        <!-- Datepicker số 2 -->
                                        <form action="{{url('http://localhost:8888/WebBanSach/public/dh/create')}}" method="GET" name="search">
                                            @csrf
                                        <div class="form-group data-custon-pick data-custom-mg" id="data_5" style="margin-bottom: 10px">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <div class="input-daterange input-group" id="datepicker">
                                                        <span class="input-group-addon">Từ ngày</span>
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" class="form-control" name="start" />
                                                        <span class="input-group-addon">đến ngày</span>
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" class="form-control" name="end" />

                                                    </div>

                                                </div>
                                                <div class="col-lg-2">
                                                    <div style="float: right;">
                                                        <input type="submit" class="btn btn-primary" value="Tìm kiếm">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        </form>



                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="madh">Mã đơn hàng</th>
                                                    <th data-field="tenkh">Tên khách hàng</th>
                                                    <th data-field="tongtien">Tổng tiền</th>
                                                    <th data-field="httt">Hình thức thanh toán</th>
                                                    <th data-field="dcgh">Địa chỉ giao hàng</th>
                                                    <th data-field="trangthai">Trạng thái</th>
                                                    <th data-field="action"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <form method="GET">
                                            @foreach($dh as $ds)
                                                <?php
                                                $kh = App\KhachHang::Where('makh',$ds->makh)->first();
                                                $httt = App\HinhThucThanhToan::Where('mahttt',$ds->hinhthucthanhtoan)->first();
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $ds->madh }}</td>
                                                    <td>{{ $kh->ten }}</td>
                                                    <td>{{ $ds->tongtien }}</td>
                                                    <td>{{ $httt->tenhttt }}</td>
                                                    <td>{{ $ds->diachigiaohang }}</td>
                                                    @if($ds->trangthai ==0)
                                                        <td><input style="text-align: center;" type="text" value="Chưa thanh toán" readonly></td>

                                                    @elseif($ds->trangthai ==1)
                                                        <td><input type="text" value="Đã thanh toán" disabled style="text-align: center;"></td>
                                                        @else
                                                        <td><input type="text" value="Hủy" disabled style="text-align: center;"></td>
                                                        @endif
                                                    <td class="datatable-ct">
                                                        <a href="{{url('http://localhost:8888/WebBanSach/public/dh/'.$ds->madh)}}" class="btn btn-success btn-sm" style="color: white;"><i class="glyphicon glyphicon-eye-open"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </form>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>
@endsection
