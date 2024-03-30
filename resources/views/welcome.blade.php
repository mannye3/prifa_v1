@extends('layouts.master')

@section('content')
    

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
        <section class="our-cta pt0">
            <div class="cta-banner bgc-f7 mx-auto maxw1600 pt120 pt60-md pb120 pb60-md bdrs12 position-relative mx20-lg">
                <div class="img-box-5">
                    <img class="img-1 spin-right" src="images/about/element-1.png" alt="">
                </div>
                <div class="img-box-6">
                    <img class="img-1 spin-left" src="images/about/element-1.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-xl-6 wow fadeInLeft">
                            <div class="cta-style1">
                                <h2 class="cta-title">Need help? Talk to our expert.</h2>
                                <p class="cta-text mb-0">Talk to our experts or Browse through more properties.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                            <div class="cta-btns-style1 d-block d-sm-flex align-items-center justify-content-lg-end">
                                <a href="page-contact.html" class="ud-btn btn-transparent mr30 mr0-xs">Contact Us<i
                                        class="fal fa-arrow-right-long"></i></a>
                                <a href="page-contact.html" class="ud-btn btn-dark"><span
                                        class="flaticon-call vam pe-2"></span>920 851 9087</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- About Us -->



        <!-- Our Partners -->

        {{-- <section class="our-partners p-0">
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
        </section> --}}

        <!-- Our Blog -->


        <!-- Our CTA -->


        <!-- Our Footer -->
    @endsection
