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
                                        <h1>Projects <span class="table-project-n">Data</span> Table</h1>
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
                                                    <form action="#">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label class="login2 pull-right pull-right-pro">Tên sách</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label class="login2 pull-right pull-right-pro">Số trang</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label class="login2 pull-right pull-right-pro">Loại bìa</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label class="login2 pull-right pull-right-pro">Kích thước</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label class="login2 pull-right pull-right-pro">Tái bản</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="number" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label class="login2 pull-right pull-right-pro">Số lượng</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class="touchspin-inner">
                                                                        <input class="touchspin1" type="number" value="" name="demo1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label class="login2 pull-right pull-right-pro">Gía sách</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="number" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label class="login2 pull-right pull-right-pro">Ngày xuất bản</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class="data-custon-pick" id="data_1">
                                                                        <div class="input-group date">
                                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                            <input type="text" class="form-control" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label class="login2 pull-right pull-right-pro">Tác giả</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class="form-select-list">
                                                                        <select class="form-control custom-select-value" name="account">
                                                                            <option>Select 1</option>
                                                                            <option>Select 2</option>
                                                                            <option>Select 3</option>
                                                                            <option>Select 4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    <a type="button" class="btn btn-custon-rounded-two btn-success"><i class="fa fa-plus"></i> Thêm tác giả</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label class="login2 pull-right pull-right-pro">Nhà xuất bản</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class="form-select-list">
                                                                        <select class="form-control custom-select-value" name="account">
                                                                            <option>Select 1</option>
                                                                            <option>Select 2</option>
                                                                            <option>Select 3</option>
                                                                            <option>Select 4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    <a type="button" class="btn btn-custon-rounded-two btn-success"><i class="fa fa-plus"></i> Thêm NXB</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2">
                                                                    <label class="login2 pull-right pull-right-pro">Thể loại</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class="form-select-list">
                                                                        <select class="form-control custom-select-value" name="account">
                                                                            <option>Select 1</option>
                                                                            <option>Select 2</option>
                                                                            <option>Select 3</option>
                                                                            <option>Select 4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1">
                                                                    <a type="button" class="btn btn-custon-rounded-two btn-success"><i class="fa fa-plus"></i> Thêm thể loại</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="login2 pull-right pull-right-pro">Hình ảnh</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                        <input type="file" id="append-small-btn" placeholder="no file selected">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="login2 pull-right pull-right-pro">Giới thiệu sách</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                                    <textarea style="float: left;" name="message" rows="7" cols="110"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-2"></div>
                                                                    <div class="col-lg-8">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                            <button class="btn btn-danger" type="submit">
                                                                                <i class="glyphicon glyphicon-remove"></i> Hủy
                                                                            </button>
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