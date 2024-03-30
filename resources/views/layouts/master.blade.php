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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/ace-responsive-menu.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ud-custom-spacing.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Title -->
    <title>Homez - Real Estate HTML Template</title>
    <!-- Favicon -->
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!-- Apple Touch Icon -->
    <link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">



</head>

<body>
    <div class="wrapper ovh">
        <div class="preloader"></div>


        @include('layouts.header');
        <div class="advance-feature-modal">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header pl30 pr30">
                            <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Price Range</h6>
                                        <!-- Range Slider Mobile Version -->
                                        <div class="range-slider-style modal-version">
                                            <div class="range-wrapper">
                                                <div class="mb30 mt35" id="slider"></div>
                                                <div class="d-flex align-items-center">
                                                    <span id="slider-range-value1"></span><i
                                                        class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
                                                    <span id="slider-range-value2"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Type</h6>
                                        <div class="form-style2 input-group">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option>Property</option>
                                                <option data-tokens="Apartments">Apartments</option>
                                                <option data-tokens="Bungalow">Bungalow</option>
                                                <option data-tokens="Houses">Houses</option>
                                                <option data-tokens="Loft">Loft</option>
                                                <option data-tokens="Office">Office</option>
                                                <option data-tokens="Townhome">Townhome</option>
                                                <option data-tokens="Villa">Villa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Property ID</h6>
                                        <div class="form-style2">
                                            <input type="text" class="form-control" placeholder="RT04949213">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Bedrooms</h6>
                                        <div class="d-flex">
                                            <div class="selection">
                                                <input id="xany" name="xbeds" type="radio" checked>
                                                <label for="xany">any</label>
                                            </div>
                                            <div class="selection">
                                                <input id="xoneplus" name="xbeds" type="radio">
                                                <label for="xoneplus">1+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="xtwoplus" name="xbeds" type="radio">
                                                <label for="xtwoplus">2+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="xthreeplus" name="xbeds" type="radio">
                                                <label for="xthreeplus">3+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="xfourplus" name="xbeds" type="radio">
                                                <label for="xfourplus">4+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="xfiveplus" name="xbeds" type="radio">
                                                <label for="xfiveplus">5+</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Bathrooms</h6>
                                        <div class="d-flex">
                                            <div class="selection">
                                                <input id="yany" name="ybath" type="radio" checked>
                                                <label for="yany">any</label>
                                            </div>
                                            <div class="selection">
                                                <input id="yoneplus" name="ybath" type="radio">
                                                <label for="yoneplus">1+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="ytwoplus" name="ybath" type="radio">
                                                <label for="ytwoplus">2+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="ythreeplus" name="ybath" type="radio">
                                                <label for="ythreeplus">3+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="yfourplus" name="ybath" type="radio">
                                                <label for="yfourplus">4+</label>
                                            </div>
                                            <div class="selection">
                                                <input id="yfiveplus" name="ybath" type="radio">
                                                <label for="yfiveplus">5+</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Location</h6>
                                        <div class="form-style2 input-group">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option>All Cities</option>
                                                <option data-tokens="California">California</option>
                                                <option data-tokens="Chicago">Chicago</option>
                                                <option data-tokens="LosAngeles">Los Angeles</option>
                                                <option data-tokens="Manhattan">Manhattan</option>
                                                <option data-tokens="NewJersey">New Jersey</option>
                                                <option data-tokens="NewYork">New York</option>
                                                <option data-tokens="SanDiego">San Diego</option>
                                                <option data-tokens="SanFrancisco">San Francisco</option>
                                                <option data-tokens="Texas">Texas</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="widget-wrapper">
                                        <h6 class="list-title">Square Feet</h6>
                                        <div class="space-area">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="form-style1">
                                                    <input type="text" class="form-control" placeholder="Min.">
                                                </div>
                                                <span class="dark-color">-</span>
                                                <div class="form-style1">
                                                    <input type="text" class="form-control" placeholder="Max">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="widget-wrapper mb0">
                                        <h6 class="list-title mb10">Amenities</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="widget-wrapper mb20">
                                        <div class="checkbox-style1">
                                            <label class="custom_checkbox">Attic
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Basketball court
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Air Conditioning
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Lawn
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="widget-wrapper mb20">
                                        <div class="checkbox-style1">
                                            <label class="custom_checkbox">TV Cable
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Dryer
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Outdoor Shower
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Washer
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="widget-wrapper mb20">
                                        <div class="checkbox-style1">
                                            <label class="custom_checkbox">Lake view
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Wine cellar
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Front yard
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="custom_checkbox">Refrigerator
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset
                                    all filters</u></a>
                            <div class="btn-area">
                                <button class="ud-btn btn-thm"><span
                                        class="flaticon-search align-text-top pr10"></span>Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Advance Feature Modal End -->

        <div class="hiddenbar-body-ovelay"></div>

        <!-- Mobile Nav  -->
        <div id="page" class="mobilie_header_nav stylehome1">
            <div class="mobile-menu">
                <div class="header innerpage-style">
                    <div class="menu_and_widgets">
                        <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
                            <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg"
                                    alt=""></a>
                            <a class="mobile_logo" href="#"><img src="images/header-logo2.svg"
                                    alt=""></a>
                            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="">
                <ul>
                    <li> <a href="#"><span class="title">Home</span></a></li>
                    <li> <a href="#"><span class="title">About Us</span></a></li>
                    <li> <a href="#"><span class="title">For Rent</span></a></li>
                    <li> <a href="#"><span class="title">For Sale</span></a></li>
                    <li> <a href="#"><span class="title">Contact Us</span></a></li>
                    <li class="px-3 mobile-menu-btn">
                        <a href="page-dashboard-add-property.html" class="ud-btn btn-thm text-white">Submit Property<i
                                class="fal fa-arrow-right-long"></i></a>
                    </li>
                    <!-- Only for Mobile View -->
                </ul>
            </nav>
        </div>

        @yield('content')



        <section class="footer-style1 pt60 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="footer-widget mb-4 mb-lg-5">
                            <a class="footer-logo" href="index.html"><img class="mb40"
                                    src="images/header-logo.svg" alt=""></a>
                            <div class="row mb-4 mb-lg-5">
                                <div class="col-auto">
                                    <div class="contact-info">
                                        <p class="info-title">Total Free Customer Care</p>
                                        <h6 class="info-phone"><a href="%2b(0)-123-050-945-02.html">+(0) 123 050 945
                                                02</a></h6>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="contact-info">
                                        <p class="info-title">Nee Live Support?</p>
                                        <h6 class="info-mail"><a href="mailto:hi@homez.com">hi@homez.com</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="app-widget">
                                <h5 class="title text-white mb10">Apps</h5>
                                <div class="row mb-4 mb-lg-5">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="app-info d-flex align-items-center mb10">
                                                <div class="flex-shrink-0">
                                                    <i class="fab fa-apple fz30 text-white"></i>
                                                </div>
                                                <div class="flex-grow-1 ml20">
                                                    <p class="app-text fz13 mb0">Download on the</p>
                                                    <h6 class="app-title text-white fz14">Apple Store</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="app-info d-flex align-items-center mb10">
                                                <div class="flex-shrink-0">
                                                    <i class="fab fa-google-play fz30 text-white"></i>
                                                </div>
                                                <div class="flex-grow-1 ml20">
                                                    <p class="app-text fz13 mb0">Get in on</p>
                                                    <h6 class="app-title text-white fz14">Google Play</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="social-widget">
                                <h6 class="text-white mb20">Follow us on social media</h6>
                                <div class="social-style1">
                                    <a href="#"><i class="fab fa-facebook-f list-inline-item"></i></a>
                                    <a href="#"><i class="fab fa-twitter list-inline-item"></i></a>
                                    <a href="#"><i class="fab fa-instagram list-inline-item"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in list-inline-item"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="footer-widget mb-4 mb-lg-5">
                            <div class="mailchimp-widget mb-4 mb-lg-5">
                                <h6 class="title text-white mb20">Keep Yourself Up to Date</h6>
                                <div class="mailchimp-style1">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                    <button type="submit">Subscribe</button>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <div class="link-style1 mb-3">
                                        <h6 class="text-white mb25">Popular Search</h6>
                                        <div class="link-list">
                                            <a href="#">Apartment for Rent</a>
                                            <a href="#">Apartment Low to hide</a>
                                            <a href="#">Offices for Buy</a>
                                            <a href="#">Offices for Rent</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="link-style1 mb-3">
                                        <h6 class="text-white mb25">Quick Links</h6>
                                        <ul class="ps-0">
                                            <li><a href="#">Terms of Use</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Pricing Plans</a></li>
                                            <li><a href="#">Our Services</a></li>
                                            <li><a href="#">Contact Support</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">FAQs</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="link-style1 mb-3">
                                        <h6 class="text-white mb25">Discover</h6>
                                        <ul class="ps-0">
                                            <li><a href="#">Miami</a></li>
                                            <li><a href="#">Los Angeles</a></li>
                                            <li><a href="#">Chicago</a></li>
                                            <li><a href="#">New York</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container white-bdrt1 py-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-center text-lg-start">
                            <p class="copyright-text text-gray ff-heading">© Homez - All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-center text-lg-end">
                            <p class="footer-menu ff-heading text-gray"><a class="text-gray"
                                    href="#">Privacy</a> · <a class="text-gray" href="#">Terms</a> · <a
                                    class="text-gray" href="#">Sitemap</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
    </div>
    </div>
    <!-- Wrapper End -->
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery.mmenu.all.js"></script>
    <script src="js/ace-responsive-menu.js"></script>
    <script src="js/jquery-scrolltofixed-min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/isotop.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/pricing-slider.js"></script>
    <!-- Custom script for all pages -->
    <script src="js/script.js"></script>
</body>



</html>
