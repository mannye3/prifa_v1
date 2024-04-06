<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Title -->
    <title>Omah - Real Estate Admin Dashboard Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Vectormap -->
    <link href="{{ asset('user/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">


    <link href="user/vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="user/vendor/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="user/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="user/vendor/datatables/responsive/responsive.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="user/images/logo.png" alt="/">
                <img class="logo-compact" src="user/images/logo-text.png" alt="/">
                <img class="brand-title" src="user/images/logo-text.png" alt="/">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>


        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        @include('layouts.header')
        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        @yield('content')






        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/"
                        target="_blank">DexignZone</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('user/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('user/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('user/vendor/chartuser/js/chart.bundle.min.js') }}"></script>
    <script src="{{ asset('user/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Apex Chart -->
    <script src="user/vendor/apexchart/apexchart.js') }}"></script>
    <!-- Vectormap -->
    <script src="{{ asset('user/vendor/jqvmap/user/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('user/vendor/jqvmap/user/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('user/vendor/jqvmap/user/js/jquery.vmap.usa.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('user/vendor/peity/jquery.peity.min.js') }}"></script>


    <script src="{{ asset('user/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('user/js/custom.min.js') }}"></script>
    <script src="{{ asset('user/js/deznav-init.js') }}"></script>



    <script src="user/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="user/vendor/datatables/responsive/responsive.js"></script>
    <script src="user/js/plugins-init/datatables.init.js"></script>

    <script src="user/vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>
    <script src="user/vendor/dropzone/dist/dropzone.js"></script>

    <!-- Dashboard 1 -->

    <script>
        function carouselReview() {
            /*  testimonial one function by = owl.carousel.js */
            jQuery('.testimonial-one').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 0,
                nav: true,
                dots: false,
                navText: ['<i class="las la-long-arrow-alt-left"></i>',
                    '<i class="las la-long-arrow-alt-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },

                    480: {
                        items: 1
                    },

                    767: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            /*Custom Navigation work*/
            jQuery('#next-slide').on('click', function() {
                $('.testimonial-one').trigger('next.owl.carousel');
            });

            jQuery('#prev-slide').on('click', function() {
                $('.testimonial-one').trigger('prev.owl.carousel');
            });
            /*Custom Navigation work*/
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                carouselReview();
            }, 1000);
        });
    </script>

</body>

</html>
