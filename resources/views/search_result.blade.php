@extends('layouts.master')

@section('content')
    <section class="search margin-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Title -->
                    <h3 class="search-title">Search</h3>

                    <!-- Form -->
                    <div class="main-search-box no-shadow">


                        <!-- Row With Forms -->
                        <div class="row with-forms">

                            <!-- Status -->
                            <div class="col-md-3">
                                <select data-placeholder="Any Status" class="chosen-select-no-single">
                                    <option>Any Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>

                            <!-- Property Type -->
                            <div class="col-md-3">
                                <select data-placeholder="Any Type" class="chosen-select-no-single">
                                    <option>Any Type</option>
                                    <option>Apartments</option>
                                    <option>Houses</option>
                                    <option>Commercial</option>
                                    <option>Garages</option>
                                    <option>Lots</option>
                                </select>
                            </div>

                            <!-- Main Search Input -->
                            <div class="col-md-6">
                                <div class="main-search-input">
                                    <input type="text" placeholder="Enter address e.g. street, city or state"
                                        value="" />
                                    <button class="button">Search</button>
                                </div>
                            </div>

                        </div>
                        <!-- Row With Forms / End -->


                        <!-- Row With Forms -->
                        <div class="row with-forms">

                            <!-- Min Price -->
                            <div class="col-md-3">

                                <!-- Select Input -->
                                <div class="select-input disabled-first-option">
                                    <input type="text" placeholder="Min Area" data-unit="Sq Ft">
                                    <select>
                                        <option>Min Area</option>
                                        <option>300</option>
                                        <option>400</option>
                                        <option>500</option>
                                        <option>700</option>
                                        <option>800</option>
                                        <option>1000</option>
                                        <option>1500</option>
                                    </select>
                                </div>
                                <!-- Select Input / End -->

                            </div>

                            <!-- Max Price -->
                            <div class="col-md-3">

                                <!-- Select Input -->
                                <div class="select-input disabled-first-option">
                                    <input type="text" placeholder="Max Area" data-unit="Sq Ft">
                                    <select>
                                        <option>Max Area</option>
                                        <option>300</option>
                                        <option>400</option>
                                        <option>500</option>
                                        <option>700</option>
                                        <option>800</option>
                                        <option>1000</option>
                                        <option>1500</option>
                                    </select>
                                </div>
                                <!-- Select Input / End -->

                            </div>


                            <!-- Min Price -->
                            <div class="col-md-3">

                                <!-- Select Input -->
                                <div class="select-input disabled-first-option">
                                    <input type="text" placeholder="Min Price" data-unit="USD">
                                    <select>
                                        <option>Min Price</option>
                                        <option>1 000</option>
                                        <option>2 000</option>
                                        <option>3 000</option>
                                        <option>4 000</option>
                                        <option>5 000</option>
                                        <option>10 000</option>
                                        <option>15 000</option>
                                        <option>20 000</option>
                                        <option>30 000</option>
                                        <option>40 000</option>
                                        <option>50 000</option>
                                        <option>60 000</option>
                                        <option>70 000</option>
                                        <option>80 000</option>
                                        <option>90 000</option>
                                        <option>100 000</option>
                                        <option>110 000</option>
                                        <option>120 000</option>
                                        <option>130 000</option>
                                        <option>140 000</option>
                                        <option>150 000</option>
                                    </select>
                                </div>
                                <!-- Select Input / End -->

                            </div>


                            <!-- Max Price -->
                            <div class="col-md-3">

                                <!-- Select Input -->
                                <div class="select-input disabled-first-option">
                                    <input type="text" placeholder="Max Price" data-unit="USD">
                                    <select>
                                        <option>Max Price</option>
                                        <option>1 000</option>
                                        <option>2 000</option>
                                        <option>3 000</option>
                                        <option>4 000</option>
                                        <option>5 000</option>
                                        <option>10 000</option>
                                        <option>15 000</option>
                                        <option>20 000</option>
                                        <option>30 000</option>
                                        <option>40 000</option>
                                        <option>50 000</option>
                                        <option>60 000</option>
                                        <option>70 000</option>
                                        <option>80 000</option>
                                        <option>90 000</option>
                                        <option>100 000</option>
                                        <option>110 000</option>
                                        <option>120 000</option>
                                        <option>130 000</option>
                                        <option>140 000</option>
                                        <option>150 000</option>
                                    </select>
                                </div>
                                <!-- Select Input / End -->

                            </div>

                        </div>
                        <!-- Row With Forms / End -->


                        <!-- More Search Options -->



                    </div>
                    <!-- Box / End -->
                </div>
            </div>
        </div>
    </section>



    <!-- Content
                ================================================== -->
    <div class="container">
        <div class="row fullwidth-layout">

            <div class="col-md-12">

                <!-- Sorting / Layout Switcher -->
                <div class="row margin-bottom-15">

                    <div class="col-md-6">
                        <!-- Sort by -->
                        <div class="sort-by">
                            <label>Sort by:</label>

                            <div class="sort-by-select">
                                <select data-placeholder="Default order" class="chosen-select-no-single">
                                    <option>Default Order</option>
                                    <option>Price Low to High</option>
                                    <option>Price High to Low</option>
                                    <option>Newest Properties</option>
                                    <option>Oldest Properties</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Layout Switcher -->
                        <div class="layout-switcher">
                            <a href="#" class="grid-three"><i class="fa fa-th"></i></a>
                            <a href="#" class="grid"><i class="fa fa-th-large"></i></a>
                            <a href="#" class="list"><i class="fa fa-th-list"></i></a>
                        </div>
                    </div>
                </div>


                <!-- Listings -->
                <div class="listings-container grid-layout-three">

                    <!-- Listing Item -->
                    <div class="listing-item">

                        <a href="single-property-page-1.html" class="listing-img-container">

                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                                <span>For Sale</span>
                            </div>

                            <div class="listing-img-content">
                                <span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
                                <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                            </div>

                            <div class="listing-carousel">
                                <div><img src="images/listing-01.jpg" alt=""></div>
                                <div><img src="images/listing-01b.jpg" alt=""></div>
                                <div><img src="images/listing-01c.jpg" alt=""></div>
                            </div>
                        </a>

                        <div class="listing-content">

                            <div class="listing-title">
                                <h4><a href="single-property-page-1.html">Eagle Apartments</a></h4>
                                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                    class="listing-address popup-gmaps">
                                    <i class="fa fa-map-marker"></i>
                                    9364 School St. Lynchburg, NY
                                </a>

                                <a href="single-property-page-1.html" class="details button border">Details</a>
                            </div>

                            <ul class="listing-details">
                                <li>530 sq ft</li>
                                <li>1 Bedroom</li>
                                <li>3 Rooms</li>
                                <li>1 Bathroom</li>
                            </ul>

                            <div class="listing-footer">
                                <a href="#"><i class="fa fa-user"></i> David Strozier</a>
                                <span><i class="fa fa-calendar-o"></i> 1 day ago</span>
                            </div>

                        </div>

                    </div>
                    <!-- Listing Item / End -->


                    <!-- Listing Item -->
                    <div class="listing-item">

                        <a href="single-property-page-1.html" class="listing-img-container">

                            <div class="listing-badges">
                                <span>For Rent</span>
                            </div>

                            <div class="listing-img-content">
                                <span class="listing-price">$900 <i>monthly</i></span>
                                <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                            </div>

                            <img src="images/listing-02.jpg" alt="">

                        </a>

                        <div class="listing-content">

                            <div class="listing-title">
                                <h4><a href="single-property-page-1.html">Serene Uptown</a></h4>
                                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                    class="listing-address popup-gmaps">
                                    <i class="fa fa-map-marker"></i>
                                    6 Bishop Ave. Perkasie, PA
                                </a>

                                <a href="single-property-page-1.html" class="details button border">Details</a>
                            </div>

                            <ul class="listing-details">
                                <li>440 sq ft</li>
                                <li>1 Bedroom</li>
                                <li>1 Room</li>
                                <li>1 Bathroom</li>
                            </ul>

                            <div class="listing-footer">
                                <a href="#"><i class="fa fa-user"></i> Harriette Clark</a>
                                <span><i class="fa fa-calendar-o"></i> 2 days ago</span>
                            </div>

                        </div>

                    </div>
                    <!-- Listing Item / End -->


                    <!-- Listing Item -->


                </div>
                <!-- Listings Container / End -->

                <div class="clearfix"></div>
                <!-- Pagination -->
                <div class="pagination-container margin-top-20">
                    <nav class="pagination">
                        <ul>
                            <li><a href="#" class="current-page">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="blank">...</li>
                            <li><a href="#">22</a></li>
                        </ul>
                    </nav>

                    <nav class="pagination-next-prev">
                        <ul>
                            <li><a href="#" class="prev">Previous</a></li>
                            <li><a href="#" class="next">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination / End -->

            </div>

        </div>
    </div>
@endsection
