<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/adminpro-custon-icon.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/meanmenu.min.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/modals.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/data-table/bootstrap-editable.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/form/all-type-forms.css') }}">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/c3.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ URL::asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="{{ URL::asset('img/message/1.jpg') }}" alt="" />
                    </a>
                    <h3>Admin 1</h3>
                    <strong>AD</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">

                        <li class="nav-item">
                            <a href="{{ url('/admin') }}" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Trang Chính</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/sanpham') }}" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-book"></i> <span class="mini-dn">Sách</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/theloai') }}" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-tag"></i> <span class="mini-dn">Thể Loại</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/tacgia') }}" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-pencil"></i> <span class="mini-dn">Tác Giả</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/nxb') }}" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-copyright-mark"></i> <span class="mini-dn">Nhà Xuất Bản</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/phiship') }}" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-transfer"></i> <span class="mini-dn">Phí Ship</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/khachhang') }}" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-user"></i> <span class="mini-dn">Khách Hàng</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('http://localhost:8888/WebBanSach/public/dh/')}}" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-gift"></i> <span class="mini-dn">Đơn Hàng</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/hinhthucthanhtoan') }}" class="nav-link dropdown-toggle"><i class="glyphicon glyphicon-credit-card"></i> <span class="mini-dn">HT Thanh Toán</span></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>


        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="{{ URL::asset('img/logo/log.png') }}" alt="" />
                                    </a>
                                </div>
                            </div>


                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                        <li class="nav-item">
                                            <a href="#"><span class="adminpro-icon adminpro-locked author-log-ic"></span>  Log Out</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->


            <!--section-->
            @yield('main-content')

            <!--end section-->
        </div>
    </div>


        <!-- Footer Start-->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &#169; 2018 Colorlib All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
        <!-- jquery
        ============================================ -->
    <script src="{{ URL::asset('js/vendor/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{ URL::asset('js/jquery.meanmenu.js') }}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{ URL::asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{ URL::asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{ URL::asset('js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('js/counterup/waypoints.min.js') }}"></script>
    <!-- peity JS
        ============================================ -->
    <script src="{{ URL::asset('js/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ URL::asset('js/peity/peity-active.js') }}"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{ URL::asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ URL::asset('js/sparkline/sparkline-active.js') }}"></script>
    <!-- data table JS
        ============================================ -->
    <script src="{{ URL::asset('js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/tableExport.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/data-table-active.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-table-editable.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-editable.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-table-resizable.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/colResizable-1.5.source.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-table-export.js') }}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{ URL::asset('js/main.js') }}"></script>

    <!-- datapicker JS
		============================================ -->
    <script src="{{ URL::asset('js/datapicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('js/datapicker/datepicker-active.js') }}"></script>

    <!-- modal JS
        ============================================ -->
    <script src="{{ URL::asset('js/modal-active.js') }}js/modal-active.js"></script>

    <!-- icheck JS
		============================================ -->
    <script src="{{ URL::asset('js/icheck/icheck.min.js') }}"></script>
    <script src="{{ URL::asset('js/icheck/icheck-active.js') }}"></script>

</body>

</html>
