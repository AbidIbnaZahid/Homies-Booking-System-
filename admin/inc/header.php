<?php
session_start();
?>
<?php
if (!isset($_SESSION['verification'])) {
    header('location: login.php');
    $_SESSION['login_first_error'] = "Your are not registered user. Please log in first";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Homies </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- C3 charts css -->
    <link href="../plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.php" class="logo">
                    Homies
                </a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Navbar-left -->
                    <ul class="nav navbar-nav navbar-left nav-menu-left">
                        <li>
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                    </ul>

                    <div class="login" style="position: absolute;right: 20px; top:10px">
                        <a href="logout.php" class="btn btn-primary btn-sm">Log Out</a>
                        <!-- <a href="signup.php" class="btn btn-info btn-sm">Sign Up</a> -->
                    </div>

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metisMenu nav" id="side-menu">
                        <li class="menu-title">Navigation</li>
                        <li>
                            <a href="index.php" aria-expanded="true"><i class="fi-air-play"></i><span class="badge badge-success pull-right"></span> <span> Dashboard </span></a>
                        </li>
                        <li>
                            <a href="../" target="_blank" aria-expanded="true"><i class="fi-air-play"></i><span class="badge badge-success pull-right"></span> <span> Website </span></a>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="fi-target text-muted"></i> <span>Location</span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level nav">
                                <li><a href="location.php">Add Location</a></li>
                            </ul>
                            <ul class="nav-second-level nav">
                                <li><a href="location_view.php">View Location</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="fi-layout text-muted"></i> <span>House</span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level nav">
                                <li><a href="home.php">Add House</a></li>
                            </ul>
                            <ul class="nav-second-level nav">
                                <li><a href="home_view.php">View House</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="fi-layout text-muted"></i> <span>Booking</span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level nav">
                                <li><a href="booking_detals.php">Booking Detals</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <!-- Start content -->
        <div class="content-page">