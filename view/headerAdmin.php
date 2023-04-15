<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start Code By Thang -->
     <title>Admin</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"               integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/view/css/main.css">

    <!-- End Code By Thang -->

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/view/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="/view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/view/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/view/assets/css/metisMenu.css">
    <link rel="stylesheet" href="/view/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/view/assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/view/assets/css/typography.css">
    <link rel="stylesheet" href="/view/assets/css/default-css.css">
    <link rel="stylesheet" href="/view/assets/css/styles.css">
    <link rel="stylesheet" href="/view/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="/view/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <!-- <div class="logo">
                    <a href="#"><img src="assets/images/icon/logo.png" alt="logo"></a>
                    <h1 class="color" style="" >Contract</h1>
                </div> -->
                <h1 style="color: aliceblue;" >Contract</h1>

            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Chuyển Hướng</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="/controller/index.php?act=return">Trang chủ</a></li>
                                    <!-- <li><a href="index2.html">Ecommerce dashboard</a></li>
                                    <li><a href="index3.html">SEO dashboard</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="#">Thao Tác</a></li>
                                <li><span>Nhập Liệu</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="/view/assets/images/author/avatar.png" alt="avatar">
                            <?php
                                if(isset($_SESSION['user_role']) && ($_SESSION['user_role'] !="")){
                                    echo '<h4 class="user-name dropdown-toggle" data-toggle="dropdown">'.$_SESSION['user_taiKhoan'].'<i class="fa fa-angle-down"></i></h4>';
                                }else{
                                    // Làm gì đó
                                }
                            ?>
                            <!-- <h4 class="user-name dropdown-toggle" data-toggle="dropdown">".$name."<i class="fa fa-angle-down"></i></h4> -->
                            <div class="dropdown-menu">
                                <!-- <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a> -->
                                <a class="dropdown-item" href="/controller/index.php?act=logout">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
        <!-- </div> -->
    <!-- </div> -->
