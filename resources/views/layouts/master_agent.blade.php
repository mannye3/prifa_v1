<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="advanced search, agency, agent, classified, directory, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
    <meta name="description" content="Homez - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="user/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/css/ace-responsive-menu.css">
    <link rel="stylesheet" href="user/css/menu.css">
    <link rel="stylesheet" href="user/css/fontawesome.css">
    <link rel="stylesheet" href="user/css/flaticon.css">
    <link rel="stylesheet" href="user/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="user/css/ud-custom-spacing.css">
    <link rel="stylesheet" href="user/css/animate.css">
    <link rel="stylesheet" href="user/css/slider.css">
    <link rel="stylesheet" href="user/css/jquery-ui.min.css">
    <link rel="stylesheet" href="user/css/magnific-popup.css">
    <link rel="stylesheet" href="user/css/style.css">
    <link rel="stylesheet" href="user/css/dashbord_navitaion.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="user/css/responsive.css">
    <!-- Title -->
    <title>Homez - Real Estate HTML Template</title>
    <!-- Favicon -->
    <link href="user/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="user/images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!-- Apple Touch Icon -->
    <link href="user/images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
    <link href="user/images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
    <link href="user/images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
    <link href="user/images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">


</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
        <header class="header-nav nav-innerpage-style menu-home4 dashboard_header main-menu">
            <!-- Ace Responsive Menu -->
            <nav class="posr">
                <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-6 col-lg-auto">
                            <div class="text-center text-lg-start d-flex align-items-center">
                                <div class="dashboard_header_logo position-relative me-2 me-xl-5">
                                    <a href="index.html" class="logo"><img src="user/images/header-logo2.svg"
                                            alt=""></a>
                                </div>
                                <div class="fz20 ms-2 ms-xl-5">
                                    <a href="#" class="dashboard_sidebar_toggle_icon text-thm1 vam"><img
                                            src="user/images/dark-nav-icon.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-auto">
                            <!-- Responsive Menu Structure-->
                            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                                <li class="visible_list"> <a class="list-item" href="{{ route('welcome') }}"><span
                                            class="title">Home</span></a>

                                </li>


                                <li class="visible_list"> <a class="list-item" href="{{ route('about') }}"><span
                                            class="title">About</span></a>

                                </li>


                                <li class="visible_list"> <a class="list-item" href="{{ route('rent') }}"><span
                                            class="title">Rent</span></a>

                                </li>


                                <li class="visible_list"> <a class="list-item" href="{{ route('sale') }}"><span
                                            class="title">Sale</span></a>

                                </li>

                                <li class="visible_list"> <a class="list-item" href="{{ route('contact') }}"><span
                                            class="title">Contact</span></a>

                                </li>

                            </ul>
                        </div>
                        <div class="col-6 col-lg-auto">
                            <div class="text-center text-lg-end header_right_widgets">
                                <ul class="mb0 d-flex justify-content-center justify-content-sm-end p-0">

                                    <li class=" user_setting">
                                        <div class="dropdown">
                                            <a class="btn" href="#" data-bs-toggle="dropdown">
                                                <img src="user/images/resource/user.png" alt="user.png">
                                            </a>
                                            <div class="dropdown-menu">
                                                <div class="user_setting_content">
                                                    <a class="dropdown-item" href="page-dashboard-profile.html"><i
                                                            class="flaticon-user mr10"></i>My Profile</a>
                                                    <a class="dropdown-item" href="page-login.html"><i
                                                            class="flaticon-exit mr10"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Menu In Hiddn SideBar -->

        <!--End Menu In Hiddn SideBar -->
        <!-- Mobile Nav  -->
        <div id="page" class="mobilie_header_nav stylehome1">
            <div class="mobile-menu">
                <div class="header innerpage-style">
                    <div class="menu_and_widgets">
                        <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
                            <a class="menubar" href="#menu"><img src="user/images/mobile-dark-nav-icon.svg"
                                    alt=""></a>
                            <a class="mobile_logo" href="#"><img src="user/images/header-logo2.svg"
                                    alt=""></a>
                            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="">
                <ul>
                    <li><span><a href="{{ route('welcome') }}">Home</a></span> </li>
                    <li><span><a href="{{ route('about') }}">About</a></span> </li>
                    <li><span><a href="{{ route('rent') }}">Rent</a></span> </li>
                    <li><span><a href="{{ route('sale') }}">Sale</a></span> </li>
                    <li><span><a href="{{ route('contact') }}">Contact</a></span> </li>

                </ul>
            </nav>
        </div>

        <div class="dashboard_content_wrapper">
            <div class="dashboard dashboard_wrapper pr30 pr0-md">
                <div class="dashboard__sidebar d-none d-lg-block">
                    <div class="dashboard_sidebar_list">
                        <div class="sidebar_list_item">
                            <a href="{{ route('userDashboard') }}" class="items-center"><i
                                    class="flaticon-discovery mr15"></i>Dashboard</a>
                        </div>

                        <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p>
                        <div class="sidebar_list_item ">
                            <a href="{{ route('addProperty') }}" class="items-center -is-active"><i
                                    class="flaticon-new-tab mr15"></i>Add New Property</a>
                        </div>
                        <div class="sidebar_list_item ">
                            <a href="page-dashboard-properties.html" class="items-center"><i
                                    class="flaticon-home mr15"></i>My
                                Properties</a>
                        </div>



                        <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>

                        <div class="sidebar_list_item ">
                            <a href="page-dashboard-profile.html" class="items-center"><i
                                    class="flaticon-user mr15"></i>My
                                Profile</a>
                        </div>
                        <div class="sidebar_list_item ">
                            <a href="page-login.html" class="items-center"><i
                                    class="flaticon-logout mr15"></i>Logout</a>
                        </div>
                    </div>
                </div>
                <div class="dashboard__main pl0-md">
                    <div class="dashboard__content property-page bgc-f7">
                        <div class="row pb40 d-block d-lg-none">
                            <div class="col-lg-12">
                                <div class="dashboard_navigationbar">
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn"><i
                                                class="fa fa-bars pr10"></i> Dashboard
                                            Navigation</button>
                                        <ul id="myDropdown" class="dropdown-content">
                                            <li><a href="{{ route('userDashboard') }}"><i
                                                        class="flaticon-discovery mr10"></i>Dashboard</a></li>

                                            <li>
                                                <p class="fz15 fw400 ff-heading mt30 pl30">MANAGE LISTINGS</p>
                                            </li>
                                            <li class="active"><a href="{{ route('addProperty') }}"><i
                                                        class="flaticon-new-tab mr10"></i>Add New Property</a></li>
                                            <li><a href="page-dashboard-properties.html"><i
                                                        class="flaticon-home mr10"></i>My
                                                    Properties</a></li>



                                            <li>
                                                <p class="fz15 fw400 ff-heading mt30 pl30">MANAGE ACCOUNT</p>
                                            </li>
                                            <li><a href="page-dashboard-package.html"><i
                                                        class="flaticon-protection mr10"></i>My
                                                    Package</a></li>
                                            <li><a href="page-dashboard-profile.html"><i
                                                        class="flaticon-user mr10"></i>My
                                                    Profile</a></li>
                                            <li><a class="" href="page-login.html"><i
                                                        class="flaticon-exit mr10"></i>Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- @include('layouts.header'); --}}


                        @yield('content')





                        <footer class="dashboard_footer pt30 pb10">
                            <div class="container">
                                <div class="row items-center justify-content-center justify-content-md-between">
                                    <div class="col-auto">
                                        <div class="copyright-widget">
                                            <p class="text">© Homez - All rights reserved</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="footer_bottom_right_widgets text-center text-lg-end">
                                            <p><a href="#">Privacy</a> · <a href="#">Terms</a> · <a
                                                    href="#">Sitemap</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
        </div>
        <!-- Wrapper End -->
        <script src="user/js/jquery-3.6.4.min.js"></script>
        <script src="user/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="user/js/popper.min.js"></script>
        <script src="user/js/bootstrap.min.js"></script>
        <script src="user/js/bootstrap-select.min.js"></script>
        <script src="user/js/jquery.mmenu.all.js"></script>
        <script src="user/js/ace-responsive-menu.js"></script>
        <script src="user/js/chart.min.js"></script>
        <script src="user/js/chart-custome.js"></script>
        <script src="user/js/jquery-scrolltofixed-min.js"></script>
        <script src="user/js/dashboard-script.js"></script>
        <!-- Custom script for all pages -->
        <script src="user/js/script.js"></script>
</body>

</html>
