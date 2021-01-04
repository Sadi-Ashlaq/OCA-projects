@extends('unicaApp')
@section('mainunica')

@guest
  <h1>Plaese login to display suppliers name</h1>  
@endguest

    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="{{ asset('unica/assets/images/bg/page-title-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">My Account</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active">My Account</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- My Account Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row learts-mb-n30">

                <!-- My Account Tab List Start -->
                <div class="col-lg-4 col-12 learts-mb-30">
                    <div class="myaccount-tab-list nav">
                        <a href="#dashboad" class="active" data-toggle="tab">Dashboard <i class="far fa-home"></i></a>
                        <a href="#orders" data-toggle="tab">Orders <i class="far fa-file-alt"></i></a>
                        <a href="#download" data-toggle="tab">Download <i class="far fa-arrow-to-bottom"></i></a>
                        <a href="#address" data-toggle="tab">address <i class="far fa-map-marker-alt"></i></a>
                        <a href="#account-info" data-toggle="tab">Account Details <i class="far fa-user"></i></a>
                        {{-- <a href="{{ route('login-register') }}">Logout <i
                                class="far fa-sign-out-alt"></i></a> --}}
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>
                <!-- My Account Tab List End -->

                <!-- My Account Tab Content Start -->
                <div class="col-lg-8 col-12 learts-mb-30">
                    <div class="tab-content">

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade show active" id="dashboad">
                            <div class="myaccount-content dashboad">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                @auth
                                                <div class="card-header">Dashboard</div>
                                                <div class="card-body">
                                                    {{-- @if(auth()->user()->is_admin == 1) --}}
                                                    @if(auth()->check() && auth()->user()->is_admin == 1)
                                                    <a href="{{url('dashboard')}}">Admin</a>
                                                    @else
                                                    <div class="panel-heading">Normal User</div>
                                                    @endif
                                                </div>
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Tab Content End -->

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="orders">
                            <div class="myaccount-content order">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Aug 22, 2018</td>
                                                <td>Pending</td>
                                                <td>$3000</td>
                                                <td><a href="shopping-cart.html">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>July 22, 2018</td>
                                                <td>Approved</td>
                                                <td>$200</td>
                                                <td><a href="shopping-cart.html">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>June 12, 2017</td>
                                                <td>On Hold</td>
                                                <td>$990</td>
                                                <td><a href="shopping-cart.html">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Single Tab Content End -->

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="download">
                            <div class="myaccount-content download">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Date</th>
                                                <th>Expire</th>
                                                <th>Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Haven - Free Real Estate PSD Template</td>
                                                <td>Aug 22, 2018</td>
                                                <td>Yes</td>
                                                <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download
                                                        File</a></td>
                                            </tr>
                                            <tr>
                                                <td>HasTech - Profolio Business Template</td>
                                                <td>Sep 12, 2018</td>
                                                <td>Never</td>
                                                <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download
                                                        File</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Single Tab Content End -->

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="address">
                            <div class="myaccount-content address">
                                <p>The following addresses will be used on the checkout page by default.</p>
                                <div class="row learts-mb-n30">
                                    <div class="col-md-6 col-12 learts-mb-30">
                                        <h4 class="title">Billing Address <a href="#" class="edit-link">edit</a></h4>
                                        <address>
                                            <p><strong>Alex Tuntuni</strong></p>
                                            <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                    </div>
                                    <div class="col-md-6 col-12 learts-mb-30">
                                        <h4 class="title">Shipping Address <a href="#" class="edit-link">edit</a></h4>
                                        <address>
                                            <p><strong>Alex Tuntuni</strong></p>
                                            <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Tab Content End -->

                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="account-info">
                            <div class="myaccount-content account-details">
                                <div class="account-details-form">
                                    <form action="#">
                                        <div class="row learts-mb-n30">
                                            <div class="col-md-6 col-12 learts-mb-30">
                                                <div class="single-input-item">
                                                    <label for="first-name">First Name <abbr
                                                            class="required">*</abbr></label>
                                                    <input type="text" id="first-name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12 learts-mb-30">
                                                <div class="single-input-item">
                                                    <label for="last-name">Last Name <abbr class="required">*</abbr></label>
                                                    <input type="text" id="last-name">
                                                </div>
                                            </div>
                                            <div class="col-12 learts-mb-30">
                                                <label for="display-name">Display Name <abbr
                                                        class="required">*</abbr></label>
                                                <input type="text" id="display-name" value="didiv91396">
                                                <p>This will be how your name will be displayed in the account section and
                                                    in reviews</p>
                                            </div>
                                            <div class="col-12 learts-mb-30">
                                                <label for="email">Email Addres <abbr class="required">*</abbr></label>
                                                <input type="email" id="email" value="didiv91396@ismailgul.net">
                                            </div>
                                            <div class="col-12 learts-mb-30 learts-mt-30">
                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="row learts-mb-n30">
                                                        <div class="col-12 learts-mb-30">
                                                            <label for="current-pwd">Current password (leave blank to leave
                                                                unchanged)</label>
                                                            <input type="password" id="current-pwd">
                                                        </div>
                                                        <div class="col-12 learts-mb-30">
                                                            <label for="new-pwd">New password (leave blank to leave
                                                                unchanged)</label>
                                                            <input type="password" id="new-pwd">
                                                        </div>
                                                        <div class="col-12 learts-mb-30">
                                                            <label for="confirm-pwd">Confirm new password</label>
                                                            <input type="password" id="confirm-pwd">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 learts-mb-30">
                                                <button class="btn btn-dark btn-outline-hover-dark">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- Single Tab Content End -->

                    </div>
                </div> <!-- My Account Tab Content End -->
            </div>
        </div>
    </div>
    <!-- My Account Section End -->


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


    <!-- Mirrored from htmldemo.hasthemes.com/learts/learts/{{ route('my-account') }} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Dec 2020 21:43:36 GMT -->

    </html>

@endsection
