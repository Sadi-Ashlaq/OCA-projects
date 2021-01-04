<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.hasthemes.com/learts/learts/{{ route('index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Dec 2020 21:42:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Learts – Handmade Shop eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('unica/assets/images/favicon.png') }}">

    <!-- CSS
 ============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="{{ asset('unica/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/vendor/font-awesome-pro.min.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/vendor/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/vendor/customFonts.css') }}"> -->

    <!-- Plugins CSS (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="{{ asset('unica/assets/css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/plugins/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/plugins/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/plugins/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/plugins/photoswipe-default-skin.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/plugins/slick.css') }}"> -->

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('unica/assets/css/style.css') }}"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ asset('unica/assets/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('unica/assets/css/style.min.css') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        @yield('style')
</head>

<body>

    <!-- Topbar Section Start -->
   
    <!-- Topbar Section End -->

    <!-- Header Section Start -->
    <div class="header-section section section-fluid bg-white d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('unica/assets/images/logo/logo-2.jpg') }}"
                                alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col-auto mr-auto">
                    <nav class="site-main-menu site-main-menu-left menu-height-100 justify-content-center">
                        <ul>
                            <li class=""><a href="{{ route('index') }}"><span class="menu-text">Home</span></a>
                            </li>
                            <li class=""><a href="{{ route('shop') }}"><span class="menu-text">Shop</span></a>
                            </li>
                            <li class=""><a href="{{ route('about-us') }}"><span class="menu-text">About us</span></a>
                            </li>
                            <li class=""><a href="{{ route('contact-us') }}"><span class="menu-text">Contact
                                        us</span></a>
                            </li>
                            <li class="has-children"><a href="#"><span class="menu-text">Account</span></a>
                                <ul class="sub-menu">
                                    {{-- <li><a href="{{ route('my-account') }}"><span class="menu-text">My
                                                Account</span></a></li> --}}
                                    {{-- <li><a href="{{ route('login-register') }}"><span class="menu-text">login -
                                                Register</span></a></li> --}}
                                    @if (Route::has('login'))
                                        @auth
                                            <li><a href="{{ url('/my-account') }}"><span class="menu-text">Home</span></a></li>
                                        @else
                                            <li><a href="{{ route('login-register') }}"><span class="menu-text">Login</a></li>
                                            @if (Route::has('register'))
                                                {{-- <li><a href="{{ route('register') }}"><span class="menu-text">Register</a>
                                                </li> --}}
                                                <li><a href="{{ route('login-register1') }}"><span class="menu-text">Register</a>
                                                </li>
                                            @endif
                                        @endauth
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Search End -->

                <!-- Search Start -->
                <div class="col-auto d-none d-xl-block">
                    <div class="header2-search">
                        <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" type="get" action="{{url('/search')}}">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm ml-3 w-75" name="query" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    
                </div>
                <!-- Search End -->

                {{--
                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login">
                            <a href="{{ route('my-account') }}"><i class="fal fa-user"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End --> --}}

            </div>
        </div>

    </div>
    <!-- Header Section End -->
    <!-- Header Sticky Section End -->
    <!-- Mobile Header Section Start -->
    <div class="mobile-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('unica/assets/images/logo/logo-2.png') }}"
                                alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="{{ route('my-account') }}"><i class="fal fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->

    <!-- Mobile Header Section Start -->
    <div class="mobile-header sticky-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('unica/assets/images/logo/logo-2.png') }}"
                                alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="{{ route('my-account') }}"><i class="fal fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Search Start -->
    <div id="offcanvas-search" class="offcanvas offcanvas-search">
        <div class="inner">
            <div class="offcanvas-search-form">
                <button class="offcanvas-close">×</button>
                <form action="#">
                    <div class="row mb-n3">
                        <div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="Search Products..."></div>
                        <div class="col-lg-4 col-12 mb-3">
                            <select class="search-select select2-basic">
                                <option value="0">All Categories</option>
                                <option value="kids-babies">Kids &amp; Babies</option>
                                <option value="home-decor">Home Decor</option>
                                <option value="gift-ideas">Gift ideas</option>
                                <option value="kitchen">Kitchen</option>
                                <option value="toys">Toys</option>
                                <option value="kniting-sewing">Kniting &amp; Sewing</option>
                                <option value="pots">Pots</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span>
                <span># Hit enter to search or ESC to close</span>
            </p>

        </div>
    </div>
    <!-- OffCanvas Search End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fal fa-search"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li class=""><a href="{{ route('index') }}"><span class="menu-text">Home</span></a>
                    </li>
                    <li class=""><a href="{{ route('shop') }}"><span class="menu-text">Shop</span></a>
                    </li>
                    <li class=""><a href="{{ route('blog') }}"><span class="menu-text">Blog</span></a>
                    </li>
                    <li class=""><a href="{{ route('portfolio') }}"><span class="menu-text">Portfolio</span></a>
                    </li>
                    <li class=""><a href="{{ route('about-us') }}"><span class="menu-text">About us</span></a>
                    </li>
                    <li class=""><a href="{{ route('contact-us') }}"><span class="menu-text">Contact us</span></a>
                    </li>
                    <li class="has-children"><a href="#"><span class="menu-text">Account</span></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('my-account') }}"><span class="menu-text">My Account</span></a></li>
                            <li><a href="{{ route('login-register') }}"><span class="menu-text">login -
                                        Register</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="offcanvas-buttons">
                <div class="header-tools">
                    <div class="header-login">
                        <a href="{{ route('my-account') }}"><i class="fal fa-user"></i></a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-social">
                <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>


    @yield('mainunica')


    <div class="footer2-section section section-padding" style="background: #F4EDE7;">
        <div class="container">
            <div class="row learts-mb-n40">

                <div class="col-lg-6 learts-mb-40">
                    <div class="widget-about">
                        <img src="{{ asset('unica/assets/images/logo/logo-2.jpg') }}" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod itaque recusandae commodi
                            mollitia facere iure nisi, laudantium quis quas perferendis a minus dolores.</p>
                    </div>
                </div>

                <div class="col-lg-4 learts-mb-40">
                    <div class="row">
                        <div class="col">
                            <ul class="widget-list">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                 </ul>
                        </div>
                        <div class="col">
                            <ul class="widget-list">
                                <li><a href="{{ route('about-us') }}">About us</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact</a></li>
                                <li><a href="{{ route('faq') }}">Support Policy</a></li>
                                <li><a href="{{ route('faq') }}">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 learts-mb-40">
                    <ul class="widget-list">
                        <li> <i class="fab fa-twitter"></i> <a href="https://www.twitter.com/">Twitter</a></li>
                        <li> <i class="fab fa-facebook-f"></i> <a href="https://www.facebook.com/">Facebook</a></li>
                        <li> <i class="fab fa-instagram"></i> <a href="https://www.instagram.com/">Instagram</a></li>
                        <li> <i class="fab fa-youtube"></i> <a href="https://www.youtube.com/">Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{--
    <!-- Feature Section Start -->
    <div class="section learts-pt-30 learts-pb-30" data-bg-color="#eee4dc">
        <div class="container">
            <div class="row learts-mb-n30">

                <div class="col-lg-4 col-sm-6 col-12 learts-mb-30">
                    <div class="icon-box5">
                        <div class="icon"><i class="fas fa-redo-alt"></i></div>
                        <div class="content">
                            <h4 class="title">Free returns</h4>
                            <p>Free 7-day returns</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-12 learts-mb-30">
                    <div class="icon-box5">
                        <div class="icon"><i class="fas fa-headset"></i></div>
                        <div class="content">
                            <h4 class="title">24/7 Support</h4>
                            <p>Dedicated support</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-12 learts-mb-30">
                    <div class="icon-box5">
                        <div class="icon"><i class="fas fa-gift"></i></div>
                        <div class="content">
                            <h4 class="title">Gift cards</h4>
                            <p>Code promotion</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Feature Section End --> --}}

    <div class="footer2-copyright section">
        <div class="container">
            <p class="copyright text-center">&copy; 2020 learts. All Rights Reserved</a></p>
        </div>
    </div>


    <!-- Modal -->
    <div class="quickViewModal modal fade" id="quickViewModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="close" data-dismiss="modal">&times;</button>
                <div class="row learts-mb-n30">

                    <!-- Product Images Start -->
                    <div class="col-lg-6 col-12 learts-mb-30">
                        <div class="product-images">
                            <div class="product-gallery-slider-quickview">
                                <div class="product-zoom"
                                    data-image="{{ asset('unica/assets/images/product/single/1/product-zoom-1.jpg') }}">
                                    <img src="{{ asset('unica/assets/images/product/single/1/product-1.jpg') }}" alt="">
                                </div>
                                <div class="product-zoom"
                                    data-image="{{ asset('unica/assets/images/product/single/1/product-zoom-2.jpg') }}">
                                    <img src="{{ asset('unica/assets/images/product/single/1/product-2.jpg') }}" alt="">
                                </div>
                                <div class="product-zoom"
                                    data-image="{{ asset('unica/assets/images/product/single/1/product-zoom-3.jpg') }}">
                                    <img src="{{ asset('unica/assets/images/product/single/1/product-3.jpg') }}" alt="">
                                </div>
                                <div class="product-zoom"
                                    data-image="{{ asset('unica/assets/images/product/single/1/product-zoom-4.jpg') }}">
                                    <img src="{{ asset('unica/assets/images/product/single/1/product-4.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Images End -->



                    <!-- Product Summery Start -->
                    <div class="col-lg-6 col-12 overflow-hidden learts-mb-30">
                        <div class="product-summery customScroll">
                            <div class="product-ratings">
                                <span class="star-rating">
                                    <span class="rating-active" style="width: 100%;">ratings</span>
                                </span>
                                <a href="#reviews" class="review-link">(<span class="count">3</span> customer
                                    reviews)</a>
                            </div>
                            <h3 class="product-title">Cleaning Dustpan & Brush</h3>
                            <div class="product-price">£38.00 – £50.00</div>
                            <div class="product-description">
                                <p>Easy clip-on handle – Hold the brush and dustpan together for storage; the dustpan
                                    edge is serrated to allow easy scraping off the hair without entanglement.
                                    High-quality bristles – no burr damage, no scratches, thick and durable, comfortable
                                    to remove dust and smaller particles.</p>
                            </div>
                            <div class="product-variations">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label"><span>Size</span></td>
                                            <td class="value">
                                                <div class="product-sizes">
                                                    <a href="#">Large</a>
                                                    <a href="#">Medium</a>
                                                    <a href="#">Small</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Color</span></td>
                                            <td class="value">
                                                <div class="product-colors">
                                                    <a href="#" data-bg-color="#000000"></a>
                                                    <a href="#" data-bg-color="#ffffff"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Quantity</span></td>
                                            <td class="value">
                                                <div class="product-quantity">
                                                    <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                    <input type="text" class="input-qty" value="1">
                                                    <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="product-buttons">
                                <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i
                                        class="fal fa-heart"></i></a>
                                <a href="#" class="btn btn-dark btn-outline-hover-dark"><i
                                        class="fal fa-shopping-cart"></i> Add to Cart</a>
                                <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i
                                        class="fal fa-random"></i></a>
                            </div>
                            <div class="product-brands">
                                <span class="title">Brands</span>
                                <div class="brands">
                                    <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-3.png') }}"
                                            alt=""></a>
                                    <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-8.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="product-meta mb-0">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label"><span>SKU</span></td>
                                            <td class="value">0404019</td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Category</span></td>
                                            <td class="value">
                                                <ul class="product-category">
                                                    <li><a href="#">Kitchen</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Tags</span></td>
                                            <td class="value">
                                                <ul class="product-tags">
                                                    <li><a href="#">handmade</a></li>
                                                    <li><a href="#">learts</a></li>
                                                    <li><a href="#">mug</a></li>
                                                    <li><a href="#">product</a></li>
                                                    <li><a href="#">learts</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Share on</span></td>
                                            <td class="va">
                                                <div class="product-share">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                                    <a href="#"><i class="fal fa-envelope"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Product Summery End -->


                </div>
            </div>
        </div>
    </div>

    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <!-- <script src="{{ asset('unica/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/vendor/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/vendor/jquery-migrate-3.1.0.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/vendor/bootstrap.bundle.min.js') }}"></script> -->

    <!-- Plugins JS -->
    <!-- <script src="{{ asset('unica/assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/swiper.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/slick.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/mo.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/jquery.instagramFeed.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/photoswipe.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/ResizeSensor.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/jquery.sticky-sidebar.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/product360.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('unica/assets/js/plugins/scrollax.min.js') }}"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{ asset('unica/assets/js/vendor/vendor.min.js') }}"></script>
    <script src="{{ asset('unica/assets/js/plugins/plugins.min.js') }}"></script>

    <!-- Main Activation JS -->
    <script src="{{ asset('unica/assets/js/main.js') }}"></script>

</body>


<!-- Mirrored from htmldemo.hasthemes.com/learts/learts/{{ route('index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Dec 2020 21:43:01 GMT -->

</html>
