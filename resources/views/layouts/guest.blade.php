{{--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>--}}



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="DynamicLayers">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Scripts -->
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}

    <!-- Font Awesome Icons CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="{{asset('css/elegant-font-icons.css')}}">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="{{asset('css/elegant-line-icons.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{asset('css/venobox/venobox.css')}}">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
    <!-- Css Animation CSS -->
    <link rel="stylesheet" href="{{asset('css/css-animation.min.css')}}">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="site-preloader-wrap">
    <div class="spinner"></div>
</div><!-- Preloader -->

<header id="header" class="header-section">
    {{--<div class="top-header">
        <div class="container">
            <div class="top-content-wrap row">
                <div class="col-sm-8">
                    <ul class="left-info">
                        <li><a href="#"><i class="ti-email"></i>robertochiteta@hotmail.com</a></li>
                        <li><a href="#"><i class="ti-mobile"></i>+244930731304</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 d-none d-md-block">
                    <ul class="right-info">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>--}}
    <div class="bottom-header">
        <div class="container">
            <div class="bottom-content-wrap row">
                <div class="col-sm-4">
                    <div class="site-branding" style="padding: 20px 0;">
                        <a  href="{{route('home')}}"><img style="height: 50px" src="{{asset('images/logo.jpeg')}}" alt="Brand"></a>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <ul id="mainmenu" class="nav navbar-nav nav-menu">
                        <li class="active"> <a href="{{route('home')}}">Home</a></li>
                        <li> <a href="#">What we do</a>
                            <ul>
                                <li><a href="{{route('our-activities')}}">Our Activities</a></li>
                                <li><a href="{{route('our-achievements')}}">Our Achievements</a></li>
                                <li><a href="{{route('partnerships')}}">Partnerships</a></li>
                                <li><a href="{{route('future-plans')}}">Future Plans</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('news')}}">News</a></li>
                        <li> <a href="#">About Us</a>
                            <ul>
                                <li><a href="{{route('contact-info')}}">Contact Info</a></li>
                                <li><a href="{{route('ngo-management')}}">NGO Management</a></li>
{{--                                <li><a href="#">Core Values</a></li>--}}
                                <li><a href="{{route('rsdf-region-office')}}">RSDF Region Office</a></li>
                                <li><a href="{{route('objectives')}}">Objectives</a></li>
                                <li><a href="{{route('funding-guarantee')}}">Funding Guarantee</a></li>
                            </ul>
                        </li>
                        @auth
                        <li> <a href="#">Profile</a>

                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Change Password</a></li>
                                <li>
                                    <form id="logout" method="post" action="{{route('logout')}}" >
                                        @csrf
                                        <a href="javascript:{}" onclick="document.getElementById('logout').submit();">Logout</a>
                                    </form>
                                </li>

                            </ul>
                        </li>
                        @endauth
                    </ul>
                    <a data-scroll href="#subscribe" class="default-btn">Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</header><!-- /Header Section -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="" class="form-wrap material" method="post" action="{{route('change-password')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <input style="margin-bottom: 10px"  placeholder="Current Password" type="password" name="password" class="form-control" required>
                    <input placeholder="New Password" type="password" name="newPassword" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="secondary-btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="default-btn">Change</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="header-height"></div>

{{ $slot }}
<div class="status">
    @if($message=Session::get('success'))
        <div style="width:100%" class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>Success!</strong> {{$message}}
        </div>
    @endif
    @if($message=Session::get('info'))
        <div style="width:100%" class="alert alert-info alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>Information!</strong> {{$message}}
        </div>
    @endif
    @if($message=Session::get('error'))
        <div style="width:100%" class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>Error!</strong> {{$message}}
        </div>
    @endif
    @if($message=Session::get('notice'))
        <div style="width:100%" class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>Notice box!</strong> {{$message}}
        </div>
    @endif

</div>

<section class="widget-section padding">
    <div class="container">
{{--        <div class="row">--}}
{{--           --}}
{{--        </div>--}}
        <div class="widget-wrap row">
            <div id="subscribe" class="col-md-12 col-lg-4 xs-padding">
                <div class="widget-content">
                    <h3>Subscribe to our Newsletter</h3>
                    <form action="#">
                        <input style="margin-bottom: 10px" class="form-control" type="text" placeholder="Full Name">
                        <input style="margin-bottom: 10px" class="form-control" type="text" placeholder="Email">
                        <input style="margin-bottom: 20px" class="default-btn" type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 xs-padding">
                <div class="widget-content">
                    <h3>Get in touch</h3>
                    <ul class="address">
                        <li><i class="ti-email"></i> contact@rosdfoundation.org</li>
                        <li><i class="ti-mobile"></i> +244930731304</li>
{{--                        <li><i class="ti-world"></i> Www.YourWebsite.com</li>--}}
                        <li><i class="ti-location-pin"></i> Lusaka, Zambia</li>
                    </ul>
                    <ul class="social-icon">
                        <li><a href="https://www.linkedin.com/in/roberto-save-dreams-foundation-38376a21a" target="_blank"><i class="ti-linkedin"></i></a></li>
                        <li><a href="https://www.twitter.com/rosdfound" target="_blank"><i class="ti-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 xs-padding">
                <div class="widget-content">
                    <h3>Quick Links</h3>
                    <div style="display: flex; justify-content: space-between">
                        <div class="">
                            <ul class="widget-link">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('our-activities')}}">Our Activities</a></li>
                                <li><a href="{{route('our-achievements')}}">Our Achievements</a></li>
                                <li><a href="{{route('partnerships')}}">Partnerships</a></li>
                                <li><a href="{{route('future-plans')}}">Future Plans</a></li>
                                <li><a href="{{route('news')}}">News</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <ul class="widget-link">
                                <li><a href="{{route('contact-info')}}">Contact Info</a></li>
                                <li><a href="{{route('ngo-management')}}">NGO Management</a></li>
                                <li><a href="{{route('objectives')}}">Objectives</a></li>
                                <li><a href="{{route('funding-guarantee')}}">Funding Guarantee</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section><!-- ./Widget Section -->

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sm-padding">
                <div class="copyright">&copy; 2022 Roberto Save Dreams Foundation</div>
            </div>
        {{--    <div class="col-md-6 sm-padding">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>--}}
        </div>
    </div>
</footer><!-- /Footer Section -->

<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@stack('scripts')

<!-- jQuery Lib -->
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<!-- Tether JS -->
<script src="{{asset('js/vendor/tether.min.js')}}"></script>
<!-- Imagesloaded JS -->
<script src="{{asset('js/vendor/imagesloaded.pkgd.min.js')}}"></script>
<!-- OWL-Carousel JS -->
<script src="{{asset('js/vendor/owl.carousel.min.js')}}"></script>
<!-- isotope JS -->
<script src="{{asset('js/vendor/jquery.isotope.v3.0.2.js')}}"></script>
<!-- Smooth Scroll JS -->
<script src="{{asset('js/vendor/smooth-scroll.min.js')}}"></script>
<!-- venobox JS -->
<script src="{{asset('js/vendor/venobox.min.js')}}"></script>
<!-- ajaxchimp JS -->
<script src="{{asset('js/vendor/jquery.ajaxchimp.min.js')}}"></script>
<!-- Counterup JS -->
<script src="{{asset('js/vendor/jquery.counterup.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('js/vendor/jquery.waypoints.v2.0.3.min.js')}}"></script>
<!-- Slick Nav JS -->
<script src="{{asset('js/vendor/jquery.slicknav.min.js')}}"></script>
<!-- Nivo Slider JS -->
<script src="{{asset('js/vendor/jquery.nivo.slider.pack.js')}}"></script>
<!-- Letter Animation JS -->
<script src="{{asset('js/vendor/letteranimation.min.js')}}"></script>
<!-- Wow JS -->
<script src="{{asset('js/vendor/wow.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('js/contact.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
