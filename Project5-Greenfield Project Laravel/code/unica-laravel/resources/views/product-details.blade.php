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
                            <img src="/images/pro_images/{{ $productOne->pro_image }}" alt="">
                        </div>
                    
                    </div>
                </div>
                <!-- Product Images End -->

                <!-- Product Summery Start -->
                <div class="col-lg-6 col-12 learts-mb-40">
                    <div class="product-summery">
{{--                         fetch pro name --}}
                        <h3 class="product-title">{{$productOne->pro_name}}</h3>
{{--                        fetch pro name end--}}
                        <div class="product-price">{{$productOne->pro_price}}</div>
                        <div class="product-description">
                            <p>{{$productOne->pro_desc}}.</p>
                        </div>
                     
                        @guest
                        <div class="product-buttons">
                        
                            <a href="{{Route('login-register')}}" class="btn btn-dark btn-outline-hover-dark">IF YOU LIKE IT PLEASE SING IN </a>
                           
                        </div>
                        @endguest

                        @auth

                        <div class="product-brands">
                            <span class="title">Brands</span>
                            <div class="brands">
                                <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-3.png') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('unica/assets/images/brands/brand-8.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="product-brands">
                            <span class="title">Unica Coupon: <strong>{{$productOne->pro_coupon}}</strong> </span>
                        </div>
                        @endauth
                    </div>
                </div>
                <!-- Product Summery End -->

            </div>
        
        </div>

    </div>
    <!-- Single Products Section End -->
   

  

    <!-- Recommended Products Section Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">You Might Also Like</h2>
            </div>
            <!-- Section Title End -->

            <!-- Products Start -->
            <div class="product-carousel">
                @foreach ($allProductLikes as $item)
                    
                
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ route('product-details',$item->id) }}" class="image">
                                <img src="/images/pro_images/{{ $item->pro_image }}"
                                    alt="Product Image">
                            </a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ route('product-details',$item->id) }}">{{$item->pro_name}}</a></h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Products End -->

        </div>
    </div>
    <!-- Recommended Products Section End -->

    <hr>
    @auth
    <div class="section section-padding pt-0">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                {{-- <h2 class="title">Order</h2> --}}
            </div>
            <!-- Section Title End -->

            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="contact-form">

                        <form method="post"  action="/manage_orders" class="form-horizontal">
                            @csrf
                            <div class="card ">
                                <div class="card-header card-header-rose card-header-icon">
                                    <div class="card-icon">
                                        {{-- <i class="material-icons">category</i> --}}
                                    </div>
                                    <h4 class="card-title">Order</h4>
                                </div>
                                <div class="card-body ">
                                    
                                    
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Product Name *"
                                                                    name="pro_name"></div>
                                <div class="col-12 learts-mb-30"><textarea name="order_notes" placeholder="Note"></textarea>
                                </div>
                                {{-- <div class="col-12 text-center learts-mb-30"><button
                                class="btn btn-dark btn-outline-hover-dark" type="submit" name="submit">Submit</button></div> --}}

                                                                
                                
                                    </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-rose"> Send </button>
                                </div>
                              
                            </div>
                        </form>
                        {{-- <form action="saveorder" id="contact-form" method="GET">
                            @csrf
                            
                            <div class="row learts-mb-n30">
                               
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Product Name *"
                                                                                 name="pro_name"></div>
                                <div class="col-12 learts-mb-30"><textarea name="order_notes" placeholder="Note"></textarea>
                                </div>
                                <div class="col-12 text-center learts-mb-30"><button
                                        class="btn btn-dark btn-outline-hover-dark" type="submit" name="submit">Submit</button></div>
                            </div>
                        </form> --}}
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endauth
@endsection