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
                                        <h1>Projects <span class="table-project-n">Data</span> Table</h1>
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
                                            <a href="{{ url('product/add') }}" type="button" class="btn btn-custon-rounded-two btn-success"><i class="fa fa-plus"></i> Thêm sản phẩm</a>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state"></th>
                                                    <th data-field="id">ID</th>
                                                    <th data-field="name">Project</th>
                                                    <th data-field="email">Email</th>
                                                    <th data-field="phone">Phone</th>
                                                    <th data-field="company">Company</th>
                                                    <th data-field="complete">Completed</th>
                                                    <th data-field="task">Task</th>
                                                    <th data-field="date">Date</th>
                                                    <th data-field="price">Price</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>Web Development</td>
                                                    <td>admin@uttara.com</td>
                                                    <td>+8801962067309</td>
                                                    <td>Aber Ltd.</td>
                                                    <td class="datatable-ct"><span class="pie">1/6</span>
                                                    </td>
                                                    <td>10%</td>
                                                    <td>Jul 14, 2018</td>
                                                    <td>$5455</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                                        <a class="btn btn-danger btn-sm" style="color: white;"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>2</td>
                                                    <td>Graphic Design</td>
                                                    <td>fox@itpark.com</td>
                                                    <td>+8801762067304</td>
                                                    <td>Abitibi Inc.</td>
                                                    <td class="datatable-ct"><span class="pie">230/360</span>
                                                    </td>
                                                    <td>70%</td>
                                                    <td>fab 2, 2018</td>
                                                    <td>$8756</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                                        <a class="btn btn-danger btn-sm" style="color: white;"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>3</td>
                                                    <td>Software Development</td>
                                                    <td>gumre@hash.com</td>
                                                    <td>+8801862067308</td>
                                                    <td>Acambis plc</td>
                                                    <td class="datatable-ct"><span class="pie">0.42/1.461</span>
                                                    </td>
                                                    <td>5%</td>
                                                    <td>Seb 5, 2018</td>
                                                    <td>$9875</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                                        <a class="btn btn-danger btn-sm" style="color: white;"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>4</td>
                                                    <td>Woocommerce</td>
                                                    <td>kyum@frok.com</td>
                                                    <td>+8801962066547</td>
                                                    <td>ACLN Ltd.</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>Oct 10, 2018</td>
                                                    <td>$3254</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                                        <a class="btn btn-danger btn-sm" style="color: white;"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>5</td>
                                                    <td>Joomla</td>
                                                    <td>jams@game.com</td>
                                                    <td>+8801962098745</td>
                                                    <td>ACS-Tech Ltd.</td>
                                                    <td class="datatable-ct"><span class="pie">200,133</span>
                                                    </td>
                                                    <td>80%</td>
                                                    <td>Nov 20, 2018</td>
                                                    <td>$58745</td>
                                                    <td class="datatable-ct">
                                                        <a class="btn btn-warning btn-sm" style="color: white;"><i class="fa fa-pencil"></i></a>
                                                        <a class="btn btn-danger btn-sm" style="color: white;"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
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