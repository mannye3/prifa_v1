@extends('layouts.master')

@section('content')
    <!-- Titlebar
                    ================================================== -->
    <div id="titlebar" class="property-titlebar margin-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <a href="listings-list-with-sidebar.html" class="back-to-listings"></a>
                    <div class="property-title">
                        <h2>Selway Apartments <span class="property-badge">For Sale</span></h2>
                        <span>
                            <a href="#location" class="listing-address">
                                <i class="fa fa-map-marker"></i>
                                7843 Durham Avenue, MD
                            </a>
                        </span>
                    </div>

                    <div class="property-pricing">
                        <div class="property-price">$420,000</div>
                        <div class="sub-price">$770 / sq ft</div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- Content
                    ================================================== -->
    <div class="container">
        <div class="row margin-bottom-50">
            <div class="col-md-12">

                <!-- Slider -->
                <div class="property-slider default">
                    <a href="images/single-property-01.jpg" data-background-image="images/single-property-01.jpg"
                        class="item mfp-gallery"></a>
                    <a href="images/single-property-02.jpg" data-background-image="images/single-property-02.jpg"
                        class="item mfp-gallery"></a>
                    <a href="images/single-property-03.jpg" data-background-image="images/single-property-03.jpg"
                        class="item mfp-gallery"></a>
                    <a href="images/single-property-04.jpg" data-background-image="images/single-property-04.jpg"
                        class="item mfp-gallery"></a>
                    <a href="images/single-property-05.jpg" data-background-image="images/single-property-05.jpg"
                        class="item mfp-gallery"></a>
                    <a href="images/single-property-06.jpg" data-background-image="images/single-property-06.jpg"
                        class="item mfp-gallery"></a>
                </div>

                <!-- Slider Thumbs -->
                <div class="property-slider-nav">
                    <div class="item"><img src="images/single-property-01.jpg" alt=""></div>
                    <div class="item"><img src="images/single-property-02.jpg" alt=""></div>
                    <div class="item"><img src="images/single-property-03.jpg" alt=""></div>
                    <div class="item"><img src="images/single-property-04.jpg" alt=""></div>
                    <div class="item"><img src="images/single-property-05.jpg" alt=""></div>
                    <div class="item"><img src="images/single-property-06.jpg" alt=""></div>
                </div>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Property Description -->
            <div class="col-lg-8 col-md-7 sp-content">
                <div class="property-description">

                    <!-- Main Features -->
                    <ul class="property-main-features">
                        <li>Area <span>1450 sq ft</span></li>
                        <li>Rooms <span>4</span></li>
                        <li>Bedrooms <span>2</span></li>
                        <li>Bathrooms <span>1</span></li>
                    </ul>


                    <!-- Description -->
                    <h3 class="desc-headline">Description</h3>
                    <div class="show-more">
                        <p>
                            Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus.
                            Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit
                            amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum,
                            lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus
                            turpis.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla
                            finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus
                            suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam
                            sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a
                            consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas
                            ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel
                            nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et
                            fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique
                            augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.
                        </p>

                        <p>
                            Nam mattis lobortis felis eu blandit. Morbi tellus ligula, interdum sit amet ipsum et, viverra
                            hendrerit lectus. Nunc efficitur sem vel est laoreet, sed bibendum eros viverra. Vestibulum
                            finibus, ligula sed euismod tincidunt, lacus libero lobortis ligula, sit amet molestie ipsum
                            purus ut tortor. Nunc varius, dui et sollicitudin facilisis, erat felis imperdiet felis, et
                            iaculis dui magna vitae diam. Donec mattis diam nisl, quis ullamcorper enim malesuada non.
                            Curabitur lobortis eu mauris nec vestibulum. Nam efficitur, ex ac semper malesuada, nisi odio
                            consequat dui, hendrerit vulputate odio dui vitae massa. Aliquam tortor urna, tincidunt ut
                            euismod quis, semper vel ipsum. Ut non vestibulum mauris. Morbi euismod, felis non hendrerit
                            viverra, nunc sapien bibendum ligula, eget vehicula nunc dolor eu ex. Quisque in semper odio.
                            Donec auctor blandit ligula. Integer id lectus non nibh vulputate efficitur quis at arcu.
                        </p>

                        <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
                    </div>

                    <!-- Details -->
                    <h3 class="desc-headline">Details</h3>
                    <ul class="property-features margin-top-0">
                        <li>Building Age: <span>2 Years</span></li>
                        <li>Parking: <span>Attached Garage</span></li>
                        <li>Cooling: <span>Central Cooling</span></li>
                        <li>Heating: <span>Forced Air, Gas</span></li>
                        <li>Sewer: <span>Public/City</span></li>
                        <li>Water: <span>City</span></li>
                        <li>Exercise Room: <span>Yes</span></li>
                        <li>Storage Room: <span>Yes</span></li>
                    </ul>


                    <!-- Features -->
                    <h3 class="desc-headline">Features</h3>
                    <ul class="property-features checkboxes margin-top-0">
                        <li>Air Conditioning</li>
                        <li>Swimming Pool</li>
                        <li>Central Heating</li>
                        <li>Laundry Room</li>
                        <li>Gym</li>
                        <li>Alarm</li>
                        <li>Window Covering</li>
                        <li>Internet</li>
                    </ul>







                    <!-- Location -->
                    <h3 class="desc-headline no-border" id="location">Location</h3>
                    <div id="propertyMap-container">
                        <div id="propertyMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                        <a href="#" id="streetView">Street View</a>
                    </div>


                    <!-- Similar Listings Container -->
                    <h3 class="desc-headline no-border margin-bottom-35 margin-top-60">Similar Properties</h3>

                    <!-- Layout Switcher -->

                    <div class="layout-switcher hidden"><a href="#" class="list"><i class="fa fa-th-list"></i></a>
                    </div>
                    <div class="listings-container list-layout">

                        <!-- Listing Item -->
                        <div class="listing-item">

                            <a href="#" class="listing-img-container">

                                <div class="listing-badges">
                                    <span>For Rent</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-price">$1700 <i>monthly</i></span>
                                    <span class="like-icon"></span>
                                </div>

                                <img src="images/listing-03.jpg" alt="">

                            </a>

                            <div class="listing-content">

                                <div class="listing-title">
                                    <h4><a href="#">Meridian Villas</a></h4>
                                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                        class="listing-address popup-gmaps">
                                        <i class="fa fa-map-marker"></i>
                                        778 Country St. Panama City, FL
                                    </a>

                                    <a href="#" class="details button border">Details</a>
                                </div>

                                <ul class="listing-details">
                                    <li>1450 sq ft</li>
                                    <li>1 Bedroom</li>
                                    <li>2 Rooms</li>
                                    <li>2 Rooms</li>
                                </ul>

                                <div class="listing-footer">
                                    <a href="#"><i class="fa fa-user"></i> Chester Miller</a>
                                    <span><i class="fa fa-calendar-o"></i> 4 days ago</span>
                                </div>

                            </div>
                            <!-- Listing Item / End -->

                        </div>
                        <!-- Listing Item / End -->


                        <!-- Listing Item -->
                        <div class="listing-item">

                            <a href="#" class="listing-img-container">

                                <div class="listing-badges">
                                    <span>For Sale</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-price">$420,000 <i>$770 / sq ft</i></span>
                                    <span class="like-icon"></span>
                                </div>

                                <div><img src="images/listing-04.jpg" alt=""></div>

                            </a>

                            <div class="listing-content">

                                <div class="listing-title">
                                    <h4><a href="#">Selway Apartments</a></h4>
                                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                        class="listing-address popup-gmaps">
                                        <i class="fa fa-map-marker"></i>
                                        33 William St. Northbrook, IL
                                    </a>

                                    <a href="#" class="details button border">Details</a>
                                </div>

                                <ul class="listing-details">
                                    <li>540 sq ft</li>
                                    <li>1 Bedroom</li>
                                    <li>3 Rooms</li>
                                    <li>2 Bathroom</li>
                                </ul>

                                <div class="listing-footer">
                                    <a href="#"><i class="fa fa-user"></i> Kristen Berry</a>
                                    <span><i class="fa fa-calendar-o"></i> 3 days ago</span>
                                </div>

                            </div>
                            <!-- Listing Item / End -->

                        </div>
                        <!-- Listing Item / End -->


                        <!-- Listing Item -->
                        <div class="listing-item">

                            <a href="#" class="listing-img-container">
                                <div class="listing-badges">
                                    <span>For Sale</span>
                                </div>

                                <div class="listing-img-content">
                                    <span class="listing-price">$535,000 <i>$640 / sq ft</i></span>
                                    <span class="like-icon"></span>
                                </div>

                                <img src="images/listing-05.jpg" alt="">
                            </a>

                            <div class="listing-content">

                                <div class="listing-title">
                                    <h4><a href="#">Oak Tree Villas</a></h4>
                                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                        class="listing-address popup-gmaps">
                                        <i class="fa fa-map-marker"></i>
                                        71 Lower River Dr. Bronx, NY
                                    </a>

                                    <a href="#" class="details button border">Details</a>
                                </div>

                                <ul class="listing-details">
                                    <li>350 sq ft</li>
                                    <li>1 Bedroom</li>
                                    <li>2 Rooms</li>
                                    <li>1 Bathroom</li>
                                </ul>

                                <div class="listing-footer">
                                    <a href="#"><i class="fa fa-user"></i> Mabel Gagnon</a>
                                    <span><i class="fa fa-calendar-o"></i> 4 days ago</span>
                                </div>

                            </div>
                            <!-- Listing Item / End -->

                        </div>
                        <!-- Listing Item / End -->

                    </div>
                    <!-- Similar Listings Container / End -->

                </div>
            </div>
            <!-- Property Description / End -->


            <!-- Sidebar -->
            <div class="col-lg-4 col-md-5 sp-sidebar">
                <div class="sidebar sticky right">


                    <!-- Widget -->
                    <div class="widget">

                        <!-- Agent Widget -->
                        <div class="agent-widget">
                            <div class="agent-title">
                                <div class="agent-photo"><img src="images/agent-avatar.jpg" alt="" /></div>
                                <div class="agent-details">
                                    <h4><a href="#">Jennie Wilson</a></h4>
                                    <span><i class="sl sl-icon-call-in"></i>(123) 123-456</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <input type="text" placeholder="Your Email"
                                pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$">
                            <input type="text" placeholder="Your Phone">
                            <textarea>I'm interested in this property [ID 123456] and I'd like to know more details.</textarea>
                            <button class="button fullwidth margin-top-5">Send Message</button>
                        </div>
                        <!-- Agent Widget / End -->

                    </div>
                    <!-- Widget / End -->


                    <!-- Widget -->





                </div>
            </div>
            <!-- Sidebar / End -->

        </div>
    </div>


    <!-- Footer
@endsection
