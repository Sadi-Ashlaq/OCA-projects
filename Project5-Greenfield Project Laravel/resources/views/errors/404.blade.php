@extends('unicaApp')
@section('mainunica')

    <!-- 404 Section Start -->
    <div class="section-404 section" data-bg-image="{{ asset('unica/assets/images/bg/bg-404.jpg') }}">
        <div class="container">
            <div class="content-404">
                <h1 class="title">Oops!</h1>
                <h2 class="sub-title">Page not found!</h2>
                <p>You could either go back or go to homepage</p>
                <div class="buttons">
                    <a class="btn btn-dark btn-outline-hover-dark" href="/index">Homepage</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 Section End -->

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

    </html>
@endsection
