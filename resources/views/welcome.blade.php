@extends('layouts.master')

@section('content')
    <div class="advance-feature-modal">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header pl30 pr30">
                        <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
                        <a class="mobile_logo" href="#"><img src="images/header-logo2.svg" alt=""></a>
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

    <div class="body_content">
        <!-- Home Banner Style V1 -->
        <section class="home-banner-style4 p0 bgc-white">
            <div class="home-style4 maxw1600 bdrs24 position-relative mx-auto mx20-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="inner-banner-style4">
                                <h2 class="hero-title animate-up-1">Easy Way to Find a <br class="d-none d-md-block">
                                    Perfect Property</h2>
                                <p class="hero-text fz15 animate-up-2">Search properties for rent in Nigeria.</p>

                                <div class="advance-search-tab mt60 mt30-lg mx-auto animate-up-3">
                                    <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab"
                                                aria-controls="home" aria-selected="true">Buy</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">Rent</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                                data-bs-target="#contact" type="button" role="tab"
                                                aria-controls="contact" aria-selected="false">Sold</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="advance-content-style1">
                                                <div class="row">
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="advance-search-field position-relative text-start">
                                                            <form action="#" method="get"
                                                                class="form-search position-relative"
                                                                accept-charset="utf-8">
                                                                <div class="box-search">
                                                                    <span class="icon flaticon-home-1"></span>
                                                                    <input class="form-control bgc-f7 bdrs12"
                                                                        type="text" name="search"
                                                                        placeholder="Search products…">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-3">
                                                        <div
                                                            class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                                                            <button class="advance-search-btn" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><span
                                                                    class="flaticon-settings"></span>
                                                                Advanced</button>
                                                            <button class="advance-search-icon ud-btn btn-dark ms-4"
                                                                type="button"><span
                                                                    class="flaticon-search"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <div class="advance-content-style1">
                                                <div class="row">
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="advance-search-field position-relative text-start">
                                                            <form action="#" method="get"
                                                                class="form-search position-relative"
                                                                accept-charset="utf-8">
                                                                <div class="box-search">
                                                                    <span class="icon flaticon-home-1"></span>
                                                                    <input class="form-control bgc-f7 bdrs12"
                                                                        type="text" name="search"
                                                                        placeholder="Search products…">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-3">
                                                        <div
                                                            class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                                                            <button class="advance-search-btn" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><span
                                                                    class="flaticon-settings"></span>
                                                                Advanced</button>
                                                            <button class="advance-search-icon ud-btn btn-dark ms-4"
                                                                type="button"><span
                                                                    class="flaticon-search"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel"
                                            aria-labelledby="contact-tab">
                                            <div class="advance-content-style1">
                                                <div class="row">
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="advance-search-field position-relative text-start">
                                                            <form action="#" method="get"
                                                                class="form-search position-relative"
                                                                accept-charset="utf-8">
                                                                <div class="box-search">
                                                                    <span class="icon flaticon-home-1"></span>
                                                                    <input class="form-control bgc-f7 bdrs12"
                                                                        type="text" name="search"
                                                                        placeholder="Search products…">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-3">
                                                        <div
                                                            class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                                                            <button class="advance-search-btn" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><span
                                                                    class="flaticon-settings"></span>
                                                                Advanced</button>
                                                            <button class="advance-search-icon ud-btn btn-dark ms-4"
                                                                type="button"><span
                                                                    class="flaticon-search"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home4-icon-style mt30 d-none d-sm-flex animate-up-4">
                                    <a href="#" class="d-flex align-items-center dark-color ff-heading me-4"><i
                                            class="icon mr10 flaticon-home-1"></i> Houses</a>
                                    <a href="#" class="d-flex align-items-center dark-color ff-heading me-4"><i
                                            class="icon mr10 flaticon-corporation"></i> Apartments</a>
                                    <a href="#" class="d-flex align-items-center dark-color ff-heading me-4"><i
                                            class="icon mr10 flaticon-network"></i> Office</a>
                                    <a href="#" class="d-flex align-items-center dark-color ff-heading"><i
                                            class="icon mr10 flaticon-garden"></i> Villa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Property Cities -->


        <!-- Popular Property -->
        <br>
        <br>
        <section class="pt-0 pb60">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="100ms">
                    <div class="col-lg-6">
                        <div class="main-title2">
                            <h2 class="title">Discover Popular Properties</h2>
                            <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-house" role="tabpanel"
                                aria-labelledby="pills-house-tab">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-1.jpg" alt="">
                                                <div class="list-tag fz12"><span
                                                        class="flaticon-electricity me-2"></span>FEATURED</div>
                                                <div class="list-tag2 fz12">FOR SALE</div>
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian
                                                        Family
                                                        Home</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-2.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$82,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa
                                                        in Rego
                                                        Park</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-3.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$63,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                        Hollywood
                                                        Boulevard</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-4.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Northwest
                                                        Office
                                                        Space</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-5.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Affordable
                                                        Green Villa
                                                        House</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-6.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Sky Pool
                                                        Villa
                                                        House</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-villa" role="tabpanel"
                                aria-labelledby="pills-villa-tab">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-1.jpg" alt="">
                                                <div class="list-tag fz12"><span
                                                        class="flaticon-electricity me-2"></span>FEATURED</div>
                                                <div class="list-tag2 fz12">FOR SALE</div>
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian
                                                        Family
                                                        Home</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-2.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$82,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Luxury
                                                        villa in Rego
                                                        Park</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-3.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$63,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                        Hollywood
                                                        Boulevard</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-4.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Northwest
                                                        Office
                                                        Space</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-5.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Affordable
                                                        Green Villa
                                                        House</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-6.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Sky Pool
                                                        Villa
                                                        House</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-office" role="tabpanel"
                                aria-labelledby="pills-office-tab">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-1.jpg" alt="">
                                                <div class="list-tag fz12"><span
                                                        class="flaticon-electricity me-2"></span>FEATURED</div>
                                                <div class="list-tag2 fz12">FOR SALE</div>
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian
                                                        Family
                                                        Home</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-2.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$82,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Luxury
                                                        villa in Rego
                                                        Park</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-3.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$63,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                        Hollywood
                                                        Boulevard</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-4.jpg" alt="">
                                                <div class="list-tag fz12"><span
                                                        class="flaticon-electricity me-2"></span>FEATURED</div>
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Northwest
                                                        Office
                                                        Space</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-5.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Affordable
                                                        Green Villa
                                                        House</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-6.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Sky Pool
                                                        Villa
                                                        House</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-apartments" role="tabpanel"
                                aria-labelledby="pills-apartments-tab">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-1.jpg" alt="">
                                                <div class="list-tag fz12"><span
                                                        class="flaticon-electricity me-2"></span>FEATURED</div>
                                                <div class="list-tag2 fz12">FOR SALE</div>
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian
                                                        Family
                                                        Home</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-2.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$82,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Luxury
                                                        villa in Rego
                                                        Park</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-3.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$63,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                        Hollywood
                                                        Boulevard</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-4.jpg" alt="">
                                                <div class="list-tag fz12"><span
                                                        class="flaticon-electricity me-2"></span>FEATURED</div>
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Northwest
                                                        Office
                                                        Space</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-5.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Affordable
                                                        Green Villa
                                                        House</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="listing-style6">
                                            <div class="list-thumb">
                                                <img class="w-100" src="images/listings/md-6.jpg" alt="">
                                                <div class="list-meta">
                                                    <div class="icons">
                                                        <a href="#"><span class="flaticon-like"></span></a>
                                                        <a href="#"><span class="flaticon-new-tab"></span></a>
                                                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <div class="list-price mb-2">$14,000</div>
                                                <h6 class="list-title"><a href="page-property-single-v1.html">Sky Pool
                                                        Villa
                                                        House</a></h6>
                                                <p class="list-text">California City, CA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Banner -->
        <section class="pt30 pb-0">
            <div
                class="cta-banner3 bgc-thm-light mx-auto maxw1600 pt100 pt60-lg pb90 pb60-lg bdrs24 position-relative overflow-hidden mx20-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-5 pl30-md pl15-xs wow fadeInRight" data-wow-delay="500ms">
                            <div class="mb30">
                                <h2 class="title text-capitalize">Let’s find the right <br class="d-none d-md-block">
                                    selling option for you</h2>
                            </div>
                            <div class="why-chose-list style2">
                                <div class="list-one d-flex align-items-start mb30">
                                    <span class="list-icon flex-shrink-0 flaticon-security"></span>
                                    <div class="list-content flex-grow-1 ml20">
                                        <h6 class="mb-1">Property Management</h6>
                                        <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium.
                                            Nullam maximus ultricies auctor.</p>
                                    </div>
                                </div>
                                <div class="list-one d-flex align-items-start mb30">
                                    <span class="list-icon flex-shrink-0 flaticon-keywording"></span>
                                    <div class="list-content flex-grow-1 ml20">
                                        <h6 class="mb-1">Mortgage Services</h6>
                                        <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium.
                                            Nullam maximus ultricies auctor.</p>
                                    </div>
                                </div>
                                <div class="list-one d-flex align-items-start mb30">
                                    <span class="list-icon flex-shrink-0 flaticon-investment"></span>
                                    <div class="list-content flex-grow-1 ml20">
                                        <h6 class="mb-1">Currency Services</h6>
                                        <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium.
                                            Nullam maximus ultricies auctor.</p>
                                    </div>
                                </div>
                            </div>
                            <a href="page-property-single-v1.html" class="ud-btn btn-dark">Learn More<i
                                    class="fal fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- About Us -->



        <!-- Our Partners -->

        <section class="our-partners p-0">
            <br>
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="main-title text-center">
                            <h6>Trusted by the world’s best</h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="dots_none nav_none slider-dib-sm slider-6-grid owl-carousel owl-theme wow fadeInUp"
                            data-wow-delay="300ms">
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/1.png"
                                        alt="1.png"></div>
                            </div>
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/2.png"
                                        alt="2.png"></div>
                            </div>
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/3.png"
                                        alt="3.png"></div>
                            </div>
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/4.png"
                                        alt="4.png"></div>
                            </div>
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/5.png"
                                        alt="5.png"></div>
                            </div>
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/6.png"
                                        alt="6.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Blog -->


        <!-- Our CTA -->


        <!-- Our Footer -->
    @endsection
