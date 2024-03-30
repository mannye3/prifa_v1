@extends('layouts.master')

@section('content')
    <div class="body_content">
        <!-- Breadcumb Sections -->
        <section class="breadcumb-section bgc-f7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcumb-style1">
                            <h2 class="title">New York Homes for Sale</h2>
                            <div class="breadcumb-list">
                                <a href="#">Home</a>
                                <a href="#">For Rent</a>
                            </div>
                            <a href="#" class="filter-btn-left mobile-filter-btn d-block d-lg-none"><span
                                    class="flaticon-settings"></span> Filter</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Property All Lists -->
        <section class="pt0 pb90 bgc-f7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 d-none d-lg-block">
                        <div class="dropdown-lists">
                            <ul class="p-0 text-center text-xl-start">
                                <li class="list-inline-item position-relative">
                                    <button type="button" class="open-btn mb15 dropdown-toggle"
                                        data-bs-toggle="dropdown">For Sale <i class="fa fa-angle-down ms-2"></i></button>
                                    <div class="dropdown-menu">
                                        <div class="widget-wrapper bdrb1 pb25 mb0 pl20">
                                            <h6 class="list-title">Listing Status</h6>
                                            <div class="radio-element">
                                                <div class="form-check d-flex align-items-center mb10">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">Buy</label>
                                                </div>
                                                <div class="form-check d-flex align-items-center mb10">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault2" checked="checked">
                                                    <label class="form-check-label" for="flexRadioDefault2">Rent</label>
                                                </div>
                                                <div class="form-check d-flex align-items-center">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault3">
                                                    <label class="form-check-label" for="flexRadioDefault3">Sold</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end mt10 pr10">
                                            <button type="button" class="done-btn ud-btn btn-thm drop_btn">Done</button>
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
                                        data-bs-toggle="dropdown">Price <i class="fa fa-angle-down ms-2"></i></button>
                                    <div class="dropdown-menu dd3">
                                        <div class="widget-wrapper bdrb1 pb25 mb0 pl20 pr20">
                                            <h6 class="list-title">Price Range</h6>
                                            <!-- Range Slider Desktop Version -->
                                            <div class="range-slider-style1">
                                                <div class="range-wrapper">
                                                    <div class="slider-range mt30 mb20"></div>
                                                    <div class="text-center">
                                                        <input type="text" class="amount" placeholder="$20"><span
                                                            class="fa-sharp fa-solid fa-minus mx-1 dark-color"></span>
                                                        <input type="text" class="amount2" placeholder="$70987">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end mt10 pr10">
                                            <button type="button" class="done-btn ud-btn btn-thm drop_btn3">Done</button>
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
                                                    <input id="any" name="beds" type="radio" checked>
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
                                                    <input id="baany" name="bath" type="radio" checked>
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
                                            <button type="button" class="done-btn ud-btn btn-thm drop_btn4">Done</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Advance Features modal trigger -->
                                    <button type="button" class="open-btn mb15" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"> <i class="flaticon-settings me-2"></i> More
                                        Filter</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div
                            class="page_control_shorting mb30 d-flex align-items-center justify-content-center justify-content-xl-end">
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-1.jpg" alt="">
                                <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                <div class="list-price">$14,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a>
                                </h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-2.jpg" alt="">
                                <div class="list-price">$82,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego
                                        Park</a></h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-3.jpg" alt="">
                                <div class="list-price">$63,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood
                                        Boulevard</a></h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-4.jpg" alt="">
                                <div class="list-price">$63,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">House on the Northridge</a>
                                </h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-5.jpg" alt="">
                                <div class="list-price">$14,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a>
                                </h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-6.jpg" alt="">
                                <div class="list-price">$82,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">Villa called Archangel</a>
                                </h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-7.jpg" alt="">
                                <div class="list-price">$63,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">House In Foxhall Ave,
                                        Kingston</a></h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-8.jpg" alt="">
                                <div class="list-price">$63,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">Store in Woodside, New
                                        York</a></h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-9.jpg" alt="">
                                <div class="list-price">$82,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">Luxury Villa In Los
                                        Angeles</a></h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-10.jpg" alt="">
                                <div class="list-price">$82,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">Villa called Archangel</a>
                                </h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-11.jpg" alt="">
                                <div class="list-price">$63,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">House In Foxhall Ave,
                                        Kingston</a></h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100" src="images/listings/g4-12.jpg" alt="">
                                <div class="list-price">$63,000 / <span>mo</span></div>
                            </div>
                            <div class="list-content">
                                <h6 class="list-title"><a href="page-property-single-v1.html">Store in Woodside, New
                                        York</a></h6>
                                <p class="list-text">California City, CA, USA</p>
                                <div class="list-meta d-flex align-items-center">
                                    <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                    <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                    <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">20</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
                            </li>
                        </ul>
                        <p class="mt10 pagination_page_count text-center">1 – 20 of 300+ property available</p>
                    </div>
                </div>
            </div>
        </section>
    @endsection>
