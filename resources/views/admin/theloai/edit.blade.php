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
    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Thêm Thể Loại</h1>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="all-form-element-inner">
                                            <form method="post" action="{{ route('postEditTheLoai', $theloai->matl) }}">
                                            @csrf

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <label class="login2 pull-right pull-right-pro">Mã thể loại</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control" value="{{ $theloai->matl }}" disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <label class="login2 pull-right pull-right-pro">Tên thể loại</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control" name="tentl" value="{{ $theloai->tentl }}"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2"></div>
                                                            <div class="col-lg-8">
                                                                <div class="login-horizental cancel-wp pull-left">
                                                                    <a class="btn btn-danger" href="{{ url() -> previous() }}">
                                                                        <i class="glyphicon glyphicon-remove"></i> Hủy
                                                                    </a>
                                                                    <button class="btn btn-success" type="submit">
                                                                        <i class="glyphicon glyphicon-floppy-disk"></i> Lưu
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
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
