
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
                                        <input type="text" placeholder="Search" class="form-control">
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
                                <h1>Danh Mục Nhà Xuất Bản</h1>
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
                                    <a href="{{ route('getAddNXB') }}" type="button" class="btn btn-custon-rounded-two btn-success"><i class="fa fa-plus"></i> Thêm NXB</a>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="manxb">Mã NXB</th>
                                        <th data-field="tennxb">Tên NXB</th>
                                        <th data-field="diachi">Địa Chỉ</th>
                                        <th data-field="sodt">Số ĐT</th>
                                        <th data-field="action"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($nxbs as $nxb)
                                    <tr>
                                        <td></td>
                                        <td>{{ $nxb->manxb }}</td>
                                        <td>{{ $nxb->tennxb }}</td>
                                        <td>{{ $nxb->diachi }}</td>
                                        <td>{{ $nxb->sodt }}</td>
                                        <td class="datatable-ct">
                                            <a href="{{ route('getEditNXB', [$nxb->manxb, $nxb->alias]) }}" class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Bạn muốn xóa nhà xuất bản này?')" href="{{ route('deleteNXB', $nxb->manxb) }}" class="btn btn-danger btn-sm" style="color: white;"><i class="fa fa-trash"></i></a>
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

