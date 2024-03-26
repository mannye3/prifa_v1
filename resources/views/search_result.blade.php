@extends('layouts.master_property')

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
            <li><span>Home</span>
                <ul>
                    <li><a href="index.html">Home V1</a></li>
                    <li><a href="index2.html">Home V2</a></li>
                    <li><a href="index3.html">Home V3</a></li>
                    <li><a href="index4.html">Home V4</a></li>
                    <li><a href="index5.html">Home V5</a></li>
                    <li><a href="index6.html">Home V6</a></li>
                    <li><a href="index7.html">Home V7</a></li>
                    <li><a href="index8.html">Home V8</a></li>
                    <li><a href="index9.html">Home V9</a></li>
                    <li><a href="index10.html">Home V10</a></li>
                </ul>
            </li>
            <li><span>Property Listign</span>
                <ul>
                    <li><span>Listing Grid</span>
                        <ul>
                            <li><a href="page-grid-default-v1.html">Grid Default v1</a></li>
                            <li><a href="page-grid-default-v2.html">Grid Default v2</a></li>
                            <li><a href="page-property-3-col.html">Grid Full Width 3 Cols</a></li>
                            <li><a href="page-property-4-col.html">Grid Full Width 4 Cols</a></li>
                            <li><a href="page-property-2-col.html">Grid Full Width 2 Cols</a></li>
                            <li><a href="page-property-1-col-v1.html">Grid Full Width 1 Cols v1</a></li>
                            <li><a href="page-property-1-col-v2.html">Grid Full Width 1 Cols v2</a></li>
                            <li><a href="page-property-banner-v1.html">Banner Search v1</a></li>
                            <li><a href="page-property-banner-v2.html">Banner Search v2</a></li>
                        </ul>
                    </li>
                    <li><span>List Style</span>
                        <ul>
                            <li><a href="page-property-list.html">Style V1</a></li>
                            <li><a href="page-property-list-all.html">All List</a></li>
                        </ul>
                    </li>
                    <li><span>Listing Single</span>
                        <ul>
                            <li><a href="page-property-single-v1.html">Single V1</a></li>
                            <li><a href="page-property-single-v2.html">Single V2</a></li>
                            <li><a href="page-property-single-v3.html">Single V3</a></li>
                            <li><a href="page-property-single-v4.html">Single V4</a></li>
                            <li><a href="page-property-single-v5.html">Single V5</a></li>
                            <li><a href="page-property-single-v6.html">Single V6</a></li>
                            <li><a href="page-property-single-v7.html">Single V7</a></li>
                            <li><a href="page-property-single-v8.html">Single V8</a></li>
                            <li><a href="page-property-single-v9.html">Single V9</a></li>
                            <li><a href="page-property-single-v10.html">Single V10</a></li>
                        </ul>
                    </li>
                    <li><span>Map Style</span>
                        <ul>
                            <li><a href="page-property-header-map-style.html">Map Header</a></li>
                            <li><a href="page-property-half-map-v1.html">Map V1</a></li>
                            <li><a href="page-property-half-map-v2.html">Map V2</a></li>
                            <li><a href="page-property-half-map-v3.html">Map V3</a></li>
                            <li><a href="page-property-half-map-v4.html">Map V4</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><span>User Dashboard</span>
                <ul>
                    <li><a href="page-dashboard.html">Dashboard</a></li>
                    <li><a href="page-dashboard-message.html">Message</a></li>
                    <li><a href="page-dashboard-add-property.html">New Property</a></li>
                    <li><a href="page-dashboard-properties.html">My Properties</a></li>
                    <li><a href="page-dashboard-favorites.html">My Favorites</a></li>
                    <li><a href="page-dashboard-savesearch.html">Saved Search</a></li>
                    <li><a href="page-dashboard-review.html">Reviews</a></li>
                    <li><a href="page-dashboard-package.html">My Package</a></li>
                    <li><a href="page-dashboard-profile.html">My Profile</a></li>
                </ul>
            </li>
            <li><span>Blog</span>
                <ul>
                    <li><a href="page-blog-v1.html">List V1</a></li>
                    <li><a href="page-blog-v2.html">List V2</a></li>
                    <li><a href="page-blog-v3.html">List V3</a></li>
                    <li><a href="page-blog-single.html">Single</a></li>
                </ul>
            </li>
            <li><span>Pages</span>
                <ul>
                    <li><a href="page-about.html">About</a></li>
                    <li><a href="page-contact.html">Contact</a></li>
                    <li><a href="page-compare.html">Compare</a></li>
                    <li><a href="page-pricing.html">Pricing</a></li>
                    <li><a href="page-faq.html">Faq</a></li>
                    <li><a href="page-login.html">Login</a></li>
                    <li><a href="page-register.html">Register</a></li>
                    <li><a href="page-error.html">404</a></li>
                    <li><a href="page-invoice.html">Invoices</a></li>
                    <li><a href="page-ui-element.html">UI Elements</a></li>
                </ul>
            </li>
            <li class="px-3 mobile-menu-btn">
                <a href="page-dashboard-add-property.html" class="ud-btn btn-thm text-white">Submit Property<i
                        class="fal fa-arrow-right-long"></i></a>
            </li>
            <!-- Only for Mobile View -->
        </ul>
    </nav>
</div>

<div class="body_content">
    <!-- Property Half Map V1 -->
    <section class="p-0 bgc-f7">
        <div class="container-fluid">
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-xl-5">
                    <div class="half_map_area_content mt30">
                        <div class="col-lg-12">
                            <div class="advance-search-list d-flex justify-content-between">
                                <div class="dropdown-lists">
                                    <ul class="p-0 text-center text-xl-start">
                                        <li class="list-inline-item position-relative">
                                            <button type="button" class="open-btn mb15 dropdown-toggle"
                                                data-bs-toggle="dropdown">For Sale <i
                                                    class="fa fa-angle-down ms-2"></i></button>
                                            <div class="dropdown-menu">
                                                <div class="widget-wrapper bdrb1 pb25 mb0 pl20">
                                                    <h6 class="list-title">Listing Status</h6>
                                                    <div class="radio-element">
                                                        <div class="form-check d-flex align-items-center mb10">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label"
                                                                for="flexRadioDefault1">Buy</label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center mb10">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault2"
                                                                checked="checked">
                                                            <label class="form-check-label"
                                                                for="flexRadioDefault2">Rent</label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault3">
                                                            <label class="form-check-label"
                                                                for="flexRadioDefault3">Sold</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end mt10 pr10">
                                                    <button type="button"
                                                        class="done-btn ud-btn btn-thm drop_btn">Done</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item position-relative">
                                            <button type="button" class="open-btn mb15 dropdown-toggle"
                                                data-bs-toggle="dropdown">Property Type <i
                                                    class="fa fa-angle-down ms-2"></i></button>
                                            <div class="dropdown-menu">
                                                <div class="widget-wrapper bdrb1 pb25 mb0 pl20">
                                                    <h6 class="list-title">Property Type</h6>
                                                    <div class="checkbox-style1">
                                                        <label class="custom_checkbox">Houses
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Apartments
                                                            <input type="checkbox" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Office
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Villa
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="custom_checkbox">Townhome
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="text-end mt10 pr10">
                                                    <button type="button"
                                                        class="done-btn ud-btn btn-thm dropdown-toggle">Done</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item position-relative">
                                            <button type="button" class="open-btn mb15 dropdown-toggle"
                                                data-bs-toggle="dropdown">Price <i
                                                    class="fa fa-angle-down ms-2"></i></button>
                                            <div class="dropdown-menu dd3">
                                                <div class="widget-wrapper bdrb1 pb25 mb0 pl20 pr20">
                                                    <h6 class="list-title">Price Range</h6>
                                                    <!-- Range Slider Desktop Version -->
                                                    <div class="range-slider-style1">
                                                        <div class="range-wrapper">
                                                            <div class="slider-range mt30 mb20"></div>
                                                            <div class="text-center">
                                                                <input type="text" class="amount"
                                                                    placeholder="$20"><span
                                                                    class="fa-sharp fa-solid fa-minus mx-1 dark-color"></span>
                                                                <input type="text" class="amount2"
                                                                    placeholder="$70987">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end mt10 pr10">
                                                    <button type="button"
                                                        class="done-btn ud-btn btn-thm drop_btn3">Done</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item position-relative">
                                            <button type="button" class="open-btn mb15 dropdown-toggle"
                                                data-bs-toggle="dropdown">Beds / Baths <i
                                                    class="fa fa-angle-down ms-2"></i></button>
                                            <div class="dropdown-menu dd4 pb20">
                                                <div class="widget-wrapper pl20 pr20">
                                                    <h6 class="list-title">Bedrooms</h6>
                                                    <div class="d-flex">
                                                        <div class="selection">
                                                            <input id="any" name="beds" type="radio"
                                                                checked>
                                                            <label for="any">any</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="oneplus" name="beds" type="radio">
                                                            <label for="oneplus">1+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="twoplus" name="beds" type="radio">
                                                            <label for="twoplus">2+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="threeplus" name="beds" type="radio">
                                                            <label for="threeplus">3+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="fourplus" name="beds" type="radio">
                                                            <label for="fourplus">4+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="fiveplus" name="beds" type="radio">
                                                            <label for="fiveplus">5+</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-wrapper bdrb1 pb25 mb0 pl20 pr20">
                                                    <h6 class="list-title">Bathrooms</h6>
                                                    <div class="d-flex">
                                                        <div class="selection">
                                                            <input id="baany" name="bath" type="radio"
                                                                checked>
                                                            <label for="baany">any</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="baoneplus" name="bath" type="radio">
                                                            <label for="baoneplus">1+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="batwoplus" name="bath" type="radio">
                                                            <label for="batwoplus">2+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="bathreeplus" name="bath" type="radio">
                                                            <label for="bathreeplus">3+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="bafourplus" name="bath" type="radio">
                                                            <label for="bafourplus">4+</label>
                                                        </div>
                                                        <div class="selection">
                                                            <input id="bafiveplus" name="bath" type="radio">
                                                            <label for="bafiveplus">5+</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end mt10 pr10">
                                                    <button type="button"
                                                        class="done-btn ud-btn btn-thm drop_btn4">Done</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <!-- Advance Features modal trigger -->
                                            <button type="button" class="open-btn mb15" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"> <i class="flaticon-settings me-2"></i>
                                                More Filter</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-1">New York Homes for Sale</h4>
                        <div class="row align-items-center mb10">
                            <div class="col-sm-6">
                                <div class="text-center text-sm-start">
                                    <p class="pagination_page_count mb-0">Showing 1–10 of 13 results</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div
                                    class="page_control_shorting d-flex align-items-center justify-content-center justify-content-sm-end">
                                    <div class="pcs_dropdown pr10"><span>Sort by</span>
                                        <select class="selectpicker show-tick">
                                            <option>Newest</option>
                                            <option>Best Seller</option>
                                            <option>Best Match</option>
                                            <option>Price Low</option>
                                            <option>Price High</option>
                                        </select>
                                    </div>
                                    <a class="pl15 pr15 bdrl1 bdrr1 d-none d-md-block" href="#">Grid</a>
                                    <a class="pl15 d-none d-md-block" href="#">List</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                        <div class="list-tag fz12"><span
                                                class="flaticon-electricity me-2"></span>FEATURED</div>
                                        <div class="list-price">$14,000 / <span>mo</span></div>
                                    </div>
                                    <div class="list-content">
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian
                                                Family Home</a>
                                        </h6>
                                        <p class="list-text">California City, CA, USA</p>
                                        <div class="list-meta d-flex align-items-center">
                                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                            <a href="#"><span class="flaticon-expand"></span>1200
                                                sqft</a>
                                        </div>
                                        <hr class="mt-2 mb-2">
                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                            <span class="for-what">For Rent</span>
                                            <div class="icons d-flex align-items-center">
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-like"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                        <div class="list-price">$82,000 / <span>mo</span></div>
                                    </div>
                                    <div class="list-content">
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Luxury
                                                villa in Rego Park</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                        <div class="list-meta d-flex align-items-center">
                                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                            <a href="#"><span class="flaticon-expand"></span>1200
                                                sqft</a>
                                        </div>
                                        <hr class="mt-2 mb-2">
                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                            <span class="for-what">For Rent</span>
                                            <div class="icons d-flex align-items-center">
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-like"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                        <div class="list-price">$63,000 / <span>mo</span></div>
                                    </div>
                                    <div class="list-content">
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                Hollywood Boulevard</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                        <div class="list-meta d-flex align-items-center">
                                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                            <a href="#"><span class="flaticon-expand"></span>1200
                                                sqft</a>
                                        </div>
                                        <hr class="mt-2 mb-2">
                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                            <span class="for-what">For Rent</span>
                                            <div class="icons d-flex align-items-center">
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-like"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                        <div class="list-price">$63,000 / <span>mo</span></div>
                                    </div>
                                    <div class="list-content">
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Triple
                                                Story House for Rent</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                        <div class="list-meta d-flex align-items-center">
                                            <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                            <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                            <a href="#"><span class="flaticon-expand"></span>1200
                                                sqft</a>
                                        </div>
                                        <hr class="mt-2 mb-2">
                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                            <span class="for-what">For Rent</span>
                                            <div class="icons d-flex align-items-center">
                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                <a href="#"><span class="flaticon-like"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mbp_pagination text-center">
                                <ul class="page_navigation">
                                    <li class="page-item">
                                        <a class="page-link" href="#"> <span
                                                class="fas fa-angle-left"></span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2 <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">20</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span
                                                class="fas fa-angle-right"></span></a>
                                    </li>
                                </ul>
                                <p class="mt10 pagination_page_count text-center">1 – 20 of 300+ property
                                    available</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 overflow-hidden position-relative">
                    <div class="half_map_area">
                        <div class="map-canvas half_style" id="map" data-map-zoom="7" data-map-scroll="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @endsection