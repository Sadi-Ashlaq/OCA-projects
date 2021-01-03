@extends('unicaApp')
@section('mainunica')

    <!-- Single Products Section Start -->
    <div class="section section-padding border-bottom">
        <div class="container">
            <div class="row learts-mb-n40">

                <!-- Product Images Start -->
                <div class="col-lg-6 col-12 learts-mb-40">
                    <div class="product-images">
                        <div class="product-gallery-slider">
                            <div class="product-zoom"
                                data-image="{{ asset('unica/assets/images/product/single/1/product-zoom-1.jpg') }}">
                                <img src="{{ asset('unica/assets/images/product/single/1/product-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Images End -->

                <!-- Product Summery Start -->
                <div class="col-lg-6 col-12 learts-mb-40">
                    <div class="product-summery">
                          {{--fetch pro name --}}
                        <h3 class="product-title">Cleaning Dustpan & Brush</h3>
                           {{--fetch pro name end--}}

                        {{--fetch pro price start --}}
                        <div class="product-price">£38.00 – £50.00</div>
                        {{--fetch pro price end --}}

                        {{--fetch pro desc start --}}
                        <div class="product-description">
                            <p>Easy clip-on handle – Hold the brush and dustpan together for storage; the dustpan edge is
                                serrated to allow easy scraping off the hair without entanglement. High-quality bristles –
                                no burr damage, no scratches, thick and durable, comfortable to remove dust and smaller
                                particles.</p>
                        </div>
                        {{--fetch pro desc end --}}
                        <div class="product-variations">
                            <table>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                            <a href="#" class="btn btn-dark btn-outline-hover-dark">Get </a>
                        </div>
                    <br>
                        <div class="product-brands">
                            <span class="title">Brands</span>
                            <div class="brands">
                                <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-3.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="product-meta">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="label"><span>coupon </span></td>
                                        <td class="value">0404019</td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>Category</span></td>
                                        <td class="value">
                                            <ul class="product-category">

                                                {{--fetch pro cat by id start --}}
                                                <li><a href="#">Kitchen</a></li>
                                                {{--fetch pro cat by id end --}}

                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>Contact on</span></td>
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
    <br>
    <br>
    <br>
    <br>
    <!-- Single Products Section End -->
    <div class="section section-padding pt-0">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Order</h2>
            </div>
            <!-- Section Title End -->

            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="contact-form">
                        <form action="https://htmlmail.hasthemes.com/yeasin/learts.php" id="contact-form" method="post">
                            <div class="row learts-mb-n30">
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Your Name *"
                                                                                 name="name"></div>
                                <div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder="Email *"
                                                                                 name="email"></div>
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Phone Number *"
                                                                                 name="email"></div>
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Product Name *"
                                                                                 name="email"></div>
                                <div class="col-12 learts-mb-30"><textarea name="message" placeholder="Note"></textarea>
                                </div>
                                <div class="col-12 text-center learts-mb-30"><button
                                        class="btn btn-dark btn-outline-hover-dark">Submit</button></div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Recommended Products Section End -->

@endsection