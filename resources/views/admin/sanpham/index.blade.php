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
                                            <li><span class="bread-blod">Danh sách sản phẩm</span>
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
                                        <h1>Danh Mục Sách</h1>
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
                                        <div style="float: right;">
                                            <a href="{{ route('getAddSanPham') }}" type="button" class="btn btn-custon-rounded-two btn-success"><i class="fa fa-plus"></i> Thêm Sách</a>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="masp">Mã Sách</th>
                                                    <th data-field="tensp">Tên Sách</th>
                                                    <th data-field="soluong">Số Lượng</th>
                                                    <th data-field="theloai">Thể Loại</th>
                                                    <th data-field="nxb">NXB</th>
                                                    <th data-field="tacgia">Tác Giả</th>
                                                    <th data-field="gia">Giá</th>
                                                    <th data-field="action"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($sanphams as $sanpham)
                                                <?php  $theloai = App\TheLoai::Where('matl', $sanpham->matl)->first();
                                                        $nxb = App\NXB::Where('manxb', $sanpham->manxb)->first();
                                                        $tacgia = App\TacGia::Where('matg', $sanpham->matg)->first();
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $sanpham->masp }}</td>
                                                    <td>{{ $sanpham->tensp }}</td>
                                                    <td>{{ $sanpham->soluong }}</td>
                                                    <td>{{ $theloai->tentl }}</td>
                                                    <td>{{ $nxb->tennxb }}</td>
                                                    <td>{{ $tacgia->tentg }}</td>
                                                    <td>{{ $sanpham->gia }}</td>
                                                    <td class="datatable-ct">
                                                        <a href="{{ route('getEditSanPham', [$sanpham->masp, $sanpham->alias]) }}" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger btn-sm" style="color: white;"><i class="fa fa-trash"></i></a>
                                                    </td>
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
