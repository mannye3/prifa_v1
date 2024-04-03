@extends('layouts.master')

@section('content')
    <!-- Banner
                                                                                                                                                                                            ================================================== -->
    <div class="parallax" data-background="{{ asset('images/place.jpg') }}" data-color="#36383e" data-color-opacity="0.45"
        data-img-width="2500" data-img-height="1600">
        <div class="parallax-content">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Main Search Container -->
                        <div class="main-search-container ">
                            <h2 class="text-center">Find your next home</h2>
                            <h3 class="text-center" style="color: white">Search properties for rent in Nigeria</h3>

                            <!-- Main Search -->
                            <form class="main-search-form">

                                <!-- Type -->
                                <center>
                                    <div class="search-type text-center">
                                        <label class="active"><input class="first-tab" name="tab" checked="checked"
                                                type="radio">Any Status</label>
                                        <label><input name="tab" type="radio">For Sale</label>
                                        <label><input name="tab" type="radio">For Rent</label>
                                        <div class="search-type-arrow"></div>
                                    </div>
                                </center>



                                <!-- Box -->
                                <div class="main-search-box">

                                    <!-- Main Search Input -->
                                    <div class="main-search-input larger-input">
                                        <input type="text" class="ico-01" id="autocomplete-input"
                                            placeholder="Enter address e.g. street, city and state or zip" value="" />
                                        <button class="button">Search</button>
                                    </div>

                                    <!-- Row -->
                                    <div class="row with-forms">

                                        <!-- Property Type -->
                                        <div class="col-md-4">
                                            <select data-placeholder="Any Type" class="chosen-select-no-single">
                                                <option>Any Type</option>
                                                <option>Apartments</option>
                                                <option>Houses</option>
                                                <option>Commercial</option>
                                                <option>Garages</option>
                                                <option>Lots</option>
                                            </select>
                                        </div>


                                        <!-- Min Price -->
                                        <div class="col-md-4">

                                            <!-- Select Input -->
                                            <div class="select-input">
                                                <input type="text" placeholder="Min Price" data-unit="₦">
                                            </div>
                                            <!-- Select Input / End -->

                                        </div>


                                        <!-- Max Price -->
                                        <div class="col-md-4">

                                            <!-- Select Input -->
                                            <div class="select-input">
                                                <input type="text" placeholder="Max Price" data-unit="₦">
                                            </div>
                                            <!-- Select Input / End -->

                                        </div>

                                    </div>
                                    <!-- Row / End -->





                                </div>
                                <!-- Box / End -->

                            </form>
                            <!-- Main Search -->

                        </div>
                        <!-- Main Search Container / End -->

                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Content
                                                                                                                                                                                            ================================================== -->
    <!-- Fullwidth Section -->
    <section class="fullwidth border-bottom margin-top-0 margin-bottom-0 padding-top-50 padding-bottom-50"
        data-background-color="#ffffff">

        <!-- Content -->
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box-1 alternative">

                        <div class="icon-container">
                            <i class="fa fa-list"></i>
                        </div>

                        <h3>Free Listing</h3>
                        <p>Easy listing process</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box-1 alternative">

                        <div class="icon-container">
                            <i class="fa fa-search"></i>
                        </div>

                        <h3>Safe Search</h3>
                        <p>Search for your prefered properties</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box-1 alternative">

                        <div class="icon-container">
                            <i class="fa fa-users"></i>
                        </div>

                        <h3>Connect</h3>
                        <p>Connect with Agents/Landlords</p>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <!-- Featured -->
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline margin-bottom-25 margin-top-65">Featured Properties</h3>
            </div>

            <!-- Carousel -->
            <div class="col-md-12">
                <div class="carousel">

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item compact">

                            <a href="single-property-page-1.html" class="listing-img-container">

                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                    <span>For Sale</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-compact-title">Eagle Apartments <i>$275,000</i></span>

                                    <ul class="listing-hidden-content">
                                        <li>Area <span>530 sq ft</span></li>
                                        <li>Rooms <span>3</span></li>
                                        <li>Beds <span>1</span></li>
                                        <li>Baths <span>1</span></li>
                                    </ul>
                                </div>

                                <img src="images/listing-01.jpg" alt="">
                            </a>

                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item compact">

                            <a href="single-property-page-2.html" class="listing-img-container">

                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                    <span>For Sale</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-compact-title">Serene Uptown <i>$900 / monthly</i></span>

                                    <ul class="listing-hidden-content">
                                        <li>Area <span>440 sq ft</span></li>
                                        <li>Rooms <span>3</span></li>
                                        <li>Beds <span>1</span></li>
                                        <li>Baths <span>1</span></li>
                                    </ul>
                                </div>

                                <img src="images/listing-02.jpg" alt="">
                            </a>

                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item compact">

                            <a href="single-property-page-1.html" class="listing-img-container">

                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                    <span>For Rent</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-compact-title">Meridian Villas <i>$1700 / monthly</i></span>

                                    <ul class="listing-hidden-content">
                                        <li>Area <span>1450 sq ft</span></li>
                                        <li>Rooms <span>3</span></li>
                                        <li>Beds <span>2</span></li>
                                        <li>Baths <span>2</span></li>
                                    </ul>
                                </div>

                                <img src="images/listing-03.jpg" alt="">
                            </a>

                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item compact">

                            <a href="single-property-page-3.html" class="listing-img-container">

                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                    <span>For Sale</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-compact-title">Selway Apartments <i>$420,000</i></span>

                                    <ul class="listing-hidden-content">
                                        <li>Area <span>540 sq ft</span></li>
                                        <li>Rooms <span>2</span></li>
                                        <li>Beds <span>2</span></li>
                                        <li>Baths <span>1</span></li>
                                    </ul>
                                </div>

                                <img src="images/listing-04.jpg" alt="">
                            </a>

                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item compact">

                            <a href="single-property-page-2.html" class="listing-img-container">

                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                    <span>For Sale</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-compact-title">Oak Tree Villas <i>$535,000</i></span>

                                    <ul class="listing-hidden-content">
                                        <li>Area <span>550 sq ft</span></li>
                                        <li>Rooms <span>3</span></li>
                                        <li>Beds <span>2</span></li>
                                        <li>Baths <span>2</span></li>
                                    </ul>
                                </div>

                                <img src="images/listing-05.jpg" alt="">
                            </a>

                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <div class="listing-item compact">

                            <a href="single-property-page-1.html" class="listing-img-container">

                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                    <span>For Rent</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-compact-title">Old Town Manchester <i>$500 / monthly</i></span>

                                    <ul class="listing-hidden-content">
                                        <li>Area <span>850 sq ft</span></li>
                                        <li>Rooms <span>3</span></li>
                                        <li>Beds <span>2</span></li>
                                        <li>Baths <span>1</span></li>
                                    </ul>
                                </div>

                                <img src="images/listing-06.jpg" alt="">
                            </a>

                        </div>
                    </div>
                    <!-- Listing Item / End -->

                </div>
            </div>
            <!-- Carousel / End -->

        </div>
    </div>
    <!-- Featured / End -->





    <section class="fullwidth border-top margin-top-55 margin-bottom-0 padding-top-60 padding-bottom-65"
        data-background-color="#ffffff">
        <!-- Logo Carousel -->
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3 class="headline centered margin-bottom-40 margin-top-10">Our Partners</h3>
                </div>

                <!-- Carousel -->
                <div class="col-md-12 text-center">
                    <div class="logo-carousel dot-navigation">

                        <!-- <div class="item">
                      <img src="images/brand/1.png" alt="">
                     </div> -->

                        <div class="item">
                            <img src="images/brand/2.jpg" alt="">
                        </div>

                        <div class="item">
                            <img src="images/brand/3.png" alt="">
                        </div>

                        <div class="item">
                            <img src="images/brand/4.jpg" alt="">
                        </div>




                    </div>
                </div>
                <!-- Carousel / End -->

            </div>
        </div>
        <!-- Logo Carousel / End -->
    </section>




    <!-- Flip banner -->
    <a href="listings-half-map-grid-standard.html" class="flip-banner parallax"
        data-background="images/flip-banner-bg.jpg" data-color="#274abb" data-color-opacity="0.9" data-img-width="2500"
        data-img-height="1600">
        <div class="flip-banner-content">
            <h2 class="flip-visible">We help people and homes find each other</h2>
            <h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
        </div>
    </a>
    <!-- Flip banner / End -->
@endsection
