@extends('layouts.master')

@section('content')
    <div class="body_content">
        <!-- Property All Lists -->
        <section class="pt60 pb90 bgc-f7">
            <div class="container">
                <div class="row mb30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="col-lg-8">
                        <div class="single-property-content mb30-md">
                            <h2 class="sp-lg-title">Awesome Interior Apartment</h2>
                            <div class="pd-meta mb15 d-md-flex align-items-center">
                                <p class="text fz15 mb-0 bdrr1 pr10 bdrrn-sm">4834 N 10th St, Philadelphia, PA 19141</p>
                                <a class="ff-heading text-thm fz15 bdrr1 pr10 ml0-sm ml10 bdrrn-sm" href="#"><i
                                        class="fas fa-circle fz10 pe-2"></i>For sale</a>
                                <a class="ff-heading bdrr1 fz15 pr10 ml10 ml0-sm bdrrn-sm" href="#"><i
                                        class="far fa-clock pe-2"></i>1 years ago</a>
                                <a class="ff-heading ml10 ml0-sm fz15" href="#"><i
                                        class="flaticon-fullscreen pe-2 align-text-top"></i>8721</a>
                            </div>
                            <div class="property-meta d-flex align-items-center">
                                <a class="text fz15" href="#"><i class="flaticon-bed pe-2 align-text-top"></i>3
                                    bed</a>
                                <a class="text ml20 fz15" href="#"><i
                                        class="flaticon-shower pe-2 align-text-top"></i>4 bath</a>
                                <a class="text ml20 fz15" href="#"><i
                                        class="flaticon-expand pe-2 align-text-top"></i>1200 sqft</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-property-content">
                            <div class="property-action text-lg-end">

                                <h3 class="price mb-0">$958,000</h3>
                                <p class="text space fz15">$2,300/sq ft</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="500ms">
                    <div class="col-lg-8">
                        <div
                            class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                            <div class="ps-v4-hero-tab position-relative">
                                <ul class="nav nav-pills justify-content-end" id="pills-tab2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active mr10" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true"><span
                                                class="flaticon-images text-white fz20"></span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link mr10" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false"><span
                                                class="flaticon-map text-white fz20"></span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false"><span
                                                class="flaticon-maps-1 text-white fz20"></span></button>
                                    </li>
                                </ul>
                            </div>
                            <div class="ps-v4-hero-tab">
                                <div class="tab-content overflow-visible" id="pills-tabContent2">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div class="container p-0">
                                            <div class="row wow fadeInUp" data-wow-delay="300ms">
                                                <div class="col-lg-12">
                                                    <div class="ps-v6-slider nav_none slider-1-grid owl-theme owl-carousel">
                                                        <div class="item">
                                                            <img class="bdrs12" src="images/listings/listing-single-6-1.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="item">
                                                            <img class="bdrs12" src="images/listings/listing-single-6-2.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="item">
                                                            <img class="bdrs12" src="images/listings/listing-single-6-3.jpg"
                                                                alt="">
                                                        </div>
                                                        <div class="item">
                                                            <img class="bdrs12"
                                                                src="images/listings/listing-single-6-4.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <iframe class="position-relative h510" loading="lazy"
                                            src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                                            title="London Eye, London, United Kingdom"
                                            aria-label="London Eye, London, United Kingdom"></iframe>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab">
                                        <iframe class="h510 w-100"
                                            src="https://www.google.com/maps/embed?pb=!4v1553797194458!6m8!1m7!1sR4K_5Z2wRHTk9el8KLTh9Q!2m2!1d36.82551718071267!2d-76.34864590837246!3f305.15097!4f0!5f0.7820865974627469"
                                            allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                            <h4 class="title fz17 mb30">Overview</h4>
                            <div class="row">
                                <div class="col-sm-6 col-lg-4">
                                    <div class="overview-element mb25 d-flex align-items-center">
                                        <span class="icon flaticon-bed"></span>
                                        <div class="ml15">
                                            <h6 class="mb-0">Bedroom</h6>
                                            <p class="text mb-0 fz15">3</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="overview-element mb25 d-flex align-items-center">
                                        <span class="icon flaticon-shower"></span>
                                        <div class="ml15">
                                            <h6 class="mb-0">Bath</h6>
                                            <p class="text mb-0 fz15">2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="overview-element mb25 d-flex align-items-center">
                                        <span class="icon flaticon-event"></span>
                                        <div class="ml15">
                                            <h6 class="mb-0">Year Built</h6>
                                            <p class="text mb-0 fz15">2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="overview-element mb25-xs d-flex align-items-center">
                                        <span class="icon flaticon-garage"></span>
                                        <div class="ml15">
                                            <h6 class="mb-0">Garage</h6>
                                            <p class="text mb-0 fz15">2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="overview-element mb25-xs d-flex align-items-center">
                                        <span class="icon flaticon-expand"></span>
                                        <div class="ml15">
                                            <h6 class="mb-0">Sqft</h6>
                                            <p class="text mb-0 fz15">1200</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="overview-element d-flex align-items-center">
                                        <span class="icon flaticon-home-1"></span>
                                        <div class="ml15">
                                            <h6 class="mb-0">Property Type</h6>
                                            <p class="text mb-0 fz15">Apartment</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                            <h4 class="title fz17 mb30">Property Description</h4>
                            <p class="text mb10">This 3-bed with a loft, 2-bath home in the gated community of The Hideout
                                has it all. From the open floor plan to the abundance of light from the windows, this home
                                is perfect for entertaining. The living room and dining room have vaulted ceilings and a
                                beautiful fireplace. You will love spending time on the deck taking in the beautiful views.
                                In the kitchen, you'll find stainless steel appliances and a tile backsplash, as well as a
                                breakfast bar.</p>
                            <div class="agent-single-accordion">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample"
                                            style="">
                                            <div class="accordion-body p-0">
                                                <p class="text">Placeholder content for this accordion, which is intended
                                                    to demonstrate the class. This is the first item's accordion body you
                                                    get groundbreaking performance and amazing battery life. Add to that a
                                                    stunning Liquid Retina XDR display, the best camera and audio ever in a
                                                    Mac notebook, and all the ports you need.</p>
                                            </div>
                                        </div>
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button p-0 collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">Show more</button>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <h4 class="title fz17 mb30 mt50">Property Details</h4>
                            <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="pd-list">
                                            <p class="fw600 mb10 ff-heading dark-color">Property ID</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Price</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Property Size</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Bathrooms</p>
                                            <p class="fw600 mb-0 ff-heading dark-color">Bedrooms</p>
                                        </div>
                                        <div class="pd-list">
                                            <p class="text mb10">RT48</p>
                                            <p class="text mb10">$252,000</p>
                                            <p class="text mb10">1500 Sq Ft</p>
                                            <p class="text mb10">3</p>
                                            <p class="text mb-0">2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 offset-xl-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="pd-list">
                                            <p class="fw600 mb10 ff-heading dark-color">Garage</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Garage Size</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Year Built</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Property Type</p>
                                            <p class="fw600 mb-0 ff-heading dark-color">Property Status</p>
                                        </div>
                                        <div class="pd-list">
                                            <p class="text mb10">2</p>
                                            <p class="text mb10">200 SqFt</p>
                                            <p class="text mb10">2022</p>
                                            <p class="text mb10">Apartment</p>
                                            <p class="text mb-0">For Sale</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                            <h4 class="title fz17 mb30 mt30">Address</h4>
                            <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="pd-list">
                                            <p class="fw600 mb10 ff-heading dark-color">Address</p>
                                            <p class="fw600 mb10 ff-heading dark-color">City</p>
                                            <p class="fw600 mb-0 ff-heading dark-color">State/county</p>
                                        </div>
                                        <div class="pd-list">
                                            <p class="text mb10">10425 Tabor St</p>
                                            <p class="text mb10">Los Angeles</p>
                                            <p class="text mb-0">California</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 offset-xl-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="pd-list">
                                            <p class="fw600 mb10 ff-heading dark-color">Zip/Postal Code</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Area</p>
                                            <p class="fw600 mb-0 ff-heading dark-color">Country</p>
                                        </div>
                                        <div class="pd-list">
                                            <p class="text mb10">90034</p>
                                            <p class="text mb10">Brookside</p>
                                            <p class="text mb-0">United States</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <iframe class="position-relative bdrs12 mt30 h250" loading="lazy"
                                        src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                                        title="London Eye, London, United Kingdom"
                                        aria-label="London Eye, London, United Kingdom"></iframe>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4">

                        <div class="agen-personal-info position-relative bgc-white default-box-shadow2 bdrs12 p30 mb30">
                            <div class="widget-wrapper mb-0">
                                <h6 class="title fz17 mb30">Get More Information</h6>
                                <div class="agent-single d-sm-flex align-items-center pb25">
                                    <div class="single-img mb30-sm">
                                        <img class="w90" src="images/team/agent-3.png" alt="">
                                    </div>
                                    <div class="single-contant ml20 ml0-xs">
                                        <h6 class="title mb-1">Arlene McCoy</h6>
                                        <div class="agent-meta mb10 d-md-flex align-items-center">
                                            <a class="text fz15" href="#"><i class="flaticon-call pe-1"></i>(920)
                                                012-3421</a>
                                        </div>
                                        <a href="#" class="text-decoration-underline fw600">View Listings</a>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="ud-btn btn-white2">Contact Agent<i
                                            class="fal fa-arrow-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="list-sidebar-style1">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Property Showcase</h6>
                                <div class="listing-style1 sidebar-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                        <div class="list-price">$14,000 / <span>mo</span></div>
                                    </div>
                                    <div class="list-content px-0 pb-0">
                                        <h6 class="list-title mb-1"><a href="#">House on the Northridge</a></h6>
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

                            <div class="widget-wrapper">
                            </div>
                            <div class="widget-wrapper">
                            </div>
                            <div class="widget-wrapper">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="col-lg-9">
                        <div class="main-title2">
                            <h2 class="title">Nearby Similar Homes</h2>
                            <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="900ms">
                    <div class="col-lg-12">
                        <div
                            class="property-city-slider navi_pagi_top_right slider-dib-sm slider-3-grid owl-theme owl-carousel">
                            <div class="item">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                        <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED
                                        </div>
                                        <div class="list-price">$14,000 / <span>mo</span></div>
                                    </div>
                                    <div class="list-content">
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family
                                                Home</a></h6>
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
                            <div class="item">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                        <div class="list-price">$82,000 / <span>mo</span></div>
                                    </div>
                                    <div class="list-content">
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in
                                                Rego Park</a></h6>
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
                            <div class="item">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-3.jpg" alt="">
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
                            <div class="item">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                        <div class="list-price">$63,000 / <span>mo</span></div>
                                    </div>
                                    <div class="list-content">
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Triple Story House
                                                for Rent</a></h6>
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
                            <div class="item">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-5.jpg" alt="">
                                        <div class="list-price">$14,000 / <span>mo</span></div>
                                    </div>
                                    <div class="list-content">
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office
                                                Space</a></h6>
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
                            <div class="item">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-6.jpg" alt="">
                                        <div class="list-price">$82,000 / <span>mo</span></div>
                                    </div>
                                    <div class="list-content">
                                        <h6 class="list-title"><a href="page-property-single-v1.html">House on the
                                                beverly hills</a></h6>
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
                            <div class="item">
                                <div class="listing-style1">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                        <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED
                                        </div>
                                        <div class="list-price">$14,000 / <span>mo</span></div>
                                    </div>
                                    <div class="list-content">
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family
                                                Home</a></h6>
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
                    </div>
                </div>
            </div>
        </section>
    @endsection
