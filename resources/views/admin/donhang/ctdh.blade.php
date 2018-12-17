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
                                            <li><span class="bread-blod">Dashboard</span>
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
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Thông <span class="table-project-n">Tin</span> Đơn Hàng</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                        </div>
                                    </div>
                                </div>
                                @foreach($donhang as $dh)
                                    <?php
                                    $kh = App\KhachHang::where('id',$dh->makh)->first();
                                    $httt = App\HinhThucThanhToan::where('mahttt',$dh->hinhthucthanhtoan)->first();
                                    $ctdh = App\ChiTietDonHang::where('madh',$dh->madh)->get();
                                    ?>
                                <div class="sparkline13-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">

                                                        <!-- Mã đơn hàng-->
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-right pull-right-pro">Mã đơn hàng:</label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <p style="margin: 5px;float: left;">{{$dh->madh}}</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Tên khách hàng-->
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-right pull-right-pro">Tên khách hàng:</label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <p style="margin: 5px;float: left;">{{$kh->ten}}</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Địa chỉ giao hàng-->
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-right pull-right-pro">Địa chỉ giao hàng:</label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <p style="margin: 5px;float: left;">{{$dh->diachigiaohang}}</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Hình thức thanh toán-->
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-right pull-right-pro">Hình thức thanh toán:</label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <p style="margin: 5px;float: left;">{{$httt->tenhttt}}</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Ngày tạo-->
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-right pull-right-pro">Ngày tạo</label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <p style="margin: 5px;float: left;">{{$dh->created_at->format('d M Y')}}</p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- Tổng tiền-->
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-right pull-right-pro">Tổng tiền:</label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <p style="margin: 5px;float: left;">{{$dh->tongtien}}</p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- Trạng thái-->
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-right pull-right-pro">Trạng thái:</label>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-select-list">
                                                                        @if($dh->trangthai==0)
                                                                            <form action="{{url('http://localhost:8888/WebBanSach/public/dh/'.$dh->madh)}}" method="POST">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="row">
                                                                                    <div class="col-lg-9">
                                                                        <select class="form-control custom-select-value" name="cb_trangthai">
                                                                            <option value="0" selected>Chưa thanh toán</option>
                                                                            <option value="1">Đã thanh toán</option>
                                                                            <option value="2">Hủy</option>
                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-3">
                                                                                <input type="submit" class="btn btn-primary" style="float:left" value="Cập nhật">
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        @elseif($dh->trangthai==1)
                                                                            <p style="margin: 5px;float: left;">Đã thanh toán</p>
                                                                        @else
                                                                            <p style="margin: 5px;float: left;">Hủy</p>
                                                                            @endif

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Chi tiết<span class="table-project-n"> Đơn</span> Hàng</h1>
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
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="mactdh">Mã CTDH</th>
                                                    <th data-field="biasach">Bìa sách</th>
                                                    <th data-field="tensach">Tên sách</th>
                                                    <th data-field="soluong">Số lượng</th>
                                                    <th data-field="price">Thành tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($ctdh as $ct)
                                                    <?php
                                                    $sanpham = App\SanPham::where('masp',$ct->masp)->first();

                                                    ?>
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $ct->id }}</td>
                                                        <td>
                                                            <img src="{{URL::asset('/img/hinhanhsanpham/'.$sanpham->hinhanh)}}" style="display: block;width: 100px;height: auto;">
                                                        </td>
                                                        <td>{{ $sanpham->tensp }}</td>
                                                        <td>{{ $ct->soluong }}</td>
                                                        <td>{{ $ct->thanhtien }}</td>

                                                    </tr>
                                                    @endforeach

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
