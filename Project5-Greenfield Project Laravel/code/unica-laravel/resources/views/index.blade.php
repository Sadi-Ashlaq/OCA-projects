@extends('unicaApp')
@section('mainunica')

<!-- Slider main container Start -->
<div class="home1-slider swiper-container">
    <div class="swiper-wrapper">
        <div class="home1-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-image="{{ asset('unica/assets/images/slider/home1/slide-1.jpg') }}">
            <div class="home1-slide1-content">
                <span class="bg"></span>
                <span class="slide-border"></span>
                <span class="icon"><img src="{{ asset('unica/assets/images/slider/home1/slide-1-1.png') }}" alt="Slide Icon"></span>
                <h2 class="title">Handicraft Shop</h2>
                <h3 class="sub-title">Just for you</h3>
                <div class="link"><a href="{{ route('shop') }}">show now</a></div>
            </div>
        </div>
        <div class="home1-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-image="{{ asset('unica/assets/images/slider/home1/slide-2.jpg') }}">
            <div class="home1-slide2-content">
                <span class="bg" data-bg-image="{{ asset('unica/assets/images/slider/home1/slide-2-1.png') }}"></span>
                <span class="slide-border"></span>
                <span class="icon">
                    <img src="{{ asset('unica/assets/images/slider/home1/slide-2-2.png') }}" alt="Slide Icon">
                    <img src="{{ asset('unica/assets/images/slider/home1/slide-2-3.png') }}" alt="Slide Icon">
                </span>
                <h2 class="title">Specialist</h2>
                <h3 class="sub-title"> Gifts For Anyone </h3>
                <div class="link"><a href="{{ route('shop') }}">show now</a></div>
            </div>
        </div>
        <div class="home1-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-image="{{ asset('unica/assets/images/slider/home1/slide-3.jpg') }}">
            <div class="home1-slide3-content">
                <h2 class="title"> Perfect gifts</h2>
                <h3 class="sub-title">
                    <img class="left-icon " src="{{ asset('unica/assets/images/slider/home1/slide-2-2.png') }}" alt="Slide Icon">
                    For friends & family
                    <img class="right-icon " src="{{ asset('unica/assets/images/slider/home1/slide-2-3.png') }}" alt="Slide Icon">
                </h3>
                <div class="link"><a href="{{ route('shop') }}">show now</a></div>
            </div>
        </div>
    </div>
    <div class="home1-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
    <div class="home1-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
</div>
<!-- Slider main container End -->





<!-- Sale Banner Section Start -->
<div class="section section-padding">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h3 class="sub-title">Just for you</h3>
            <h2 class="title title-icon-both">Occasions
            </h2>
        </div>
        <!-- Section Title End -->


    </div>
</div>
<!-- Sale Banner Section End -->


<!-- Category Banner Section Start -->
<div class="section section-fluid section-padding pt-0">
    <div class="container">
        <div class="category-banner1-carousel">
            <!--shop category start here -->

            @foreach ($catshop as $item)
            <div class="col">
                <div class="category-banner1">
                    <div class="inner">

                        <a href="{{ route('shop_products',$item->id) }}" class="image"><img src="images/cat_images/{{$item->cat_image}}" alt=""></a>
                        <div class="content">
                            <h3 class="title">
                                <a href="{{ route('shop_products',$item->id) }}">{{$item->cat_name}}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!--shop category end here -->
        </div>
    </div>
</div>
<!-- Category Banner Section End -->





<!-- Product Section Start -->
<div class="section section-fluid section-padding bg-white">
    <div class="container">

        <!-- Product Tab Start -->
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h3 class="sub-title">Just for you</h3>
                    <h2 class="title title-icon-both">Our Products </h2>
                </div>
                <div class="prodyct-tab-content1 tab-content">
                    <div class="tab-pane fade show active" id="tab-new-sale">
                        <!-- Products Start -->
                        <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                            <!-- Product  start -->
                            @foreach ($products as $item)


                            <div class="col">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="{{ route('product-details',$item->id) }}" class="image">

                                            <img src="images/pro_images/{{$item->pro_image}}" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ route('product-details') }}">{{$item->pro_name}}</a></h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <!-- Product  End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- Product Section End -->

<!-- Shop By Category Section Start -->
<div class="section section-fluid section-padding bg-white">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h3 class="sub-title">Create Custom Gifts</h3>
            <h2 class="title title-icon-both">Handcraft</h2>
        </div>
        <!-- Section Title End -->

        <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 learts-mb-n40">
            <!--handmade category start here -->
            @foreach ($cathandcraft as $handcraft)
            <div class="col learts-mb-40">
                
                <div class="col learts-mb-40">

                    <div class="category-banner5">
                        {{-- href="{{ route('product-details',$item->id) }}" --}}
                        <a href="{{ route('supplier_profile',$handcraft->id) }}" class="inner">
                            <div class="image"><img src=" images/cat_images/{{$handcraft->cat_image}}" alt=""></div>
                            <div class="content">
                                <h3 class="title">{{$handcraft->cat_name}}</h3>

                            </div>
                        </a>
                    </div>

                </div>
                
            </div>
            @endforeach
            <!--handmade category end here -->


        </div>

    </div>
</div>
<!-- Shop By Category Section End -->

<!-- Sale Banner Start -->
<div class="section section-fluid">
    <div class="row no-gutters">

        <div class="col-lg-6 col-12">
            <div class="sale-banner9 bg-light">
                <div class="inner">
                    <div class="content">
                        <h3 class="title">New collection</h3>
                        <span class="cuppon">The Best Gift Ideas of New Year</span>

                        <a href="{{ route('shop') }}" class="btn btn-dark btn-hover-primary">show now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-12">
            <div class="sale-banner9-image">
                <img src="{{ asset('unica/assets/images/banner/sale/giftbox.jpg') }}" alt="">
            </div>
        </div>

    </div>
</div>
<!-- Sale Banner End -->

<!-- Shop By Brands Section Start -->
<div class="section section-fluid section-padding bg-white border-top-dashed border-bottom-dashed">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title title-icon-both">Our Partners</h2>
        </div>
        <!-- Section Title End -->

        <div class="brand-carousel">

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-7.png') }}" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-8.png') }}" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-1.png') }}" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-2.png') }}" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-3.png') }}" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-4.png') }}" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-5.png') }}" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-6.png') }}" alt="Brands Image"></a>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Shop By Brands Section End -->





<!-- Product Overview Section Start -->
<div class="section section-fluid section-padding pt-0" style="margin-top: 50px;">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title title-icon-both">Best Products Gallery </h2>
            <p>Browse a wide range of distinctive pieces of gifts you could never find elsewhere.</p>
        </div>
        <!-- Section Title End -->

        <div class="row learts-mb-n30">

            <div class="col-lg-6 col-12 learts-mb-30">
                <div class="sale-banner7">
                    <div class="inner">
                        <div class="image"><img src="{{ asset('unica/assets/images/banner/sale/gallery1.jpg') }}" alt="Sale Banner Image"></div>
                        <div class="content">
                            <h2 class="title">Caught</h2>
                            <h3 class="sub-title Secondary">in the moment</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12 learts-mb-30">
                <div class="row learts-mb-n30">

                    <div class="col-sm-6 col-12 learts-mb-30">
                        <div class="sale-banner7">
                            <div class="inner">
                                <div class="image"><img src="{{ asset('unica/assets/images/banner/sale/gallery2.jpg') }}" alt="Sale Banner Image"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-12 learts-mb-30">
                        <div class="sale-banner7">
                            <div class="inner">
                                <div class="image"><img src="{{ asset('unica/assets/images/banner/sale/gallery3.jpg') }}" alt="Sale Banner Image"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-12 learts-mb-30">
                        <div class="sale-banner7">
                            <div class="inner">
                                <div class="image"><img src="{{ asset('unica/assets/images/banner/sale/gallery4.jpg') }}" alt="Sale Banner Image"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-12 learts-mb-30">
                        <div class="sale-banner7">
                            <div class="inner">
                                <div class="image"><img src="{{ asset('unica/assets/images/banner/sale/gallery8.jpg') }}" alt="Sale Banner Image"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- Product Overview Section End -->







<!-- Banner Section Start -->
<div class="home12-slide-item section swiper-slide-active mb-5" data-bg-image="{{ asset('unica/assets/images/slider/home12/slide-1.jpg') }}">
    <div class="home12-slide1-content ">
        <div class="bg"></div>
        <span class="sub-title">Creative and Unique Ideas</span>
        <h2 class="title">JUST FOR YOU</h2>

    </div>
</div>



>






@endsection