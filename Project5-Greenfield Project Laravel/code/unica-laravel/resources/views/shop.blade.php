@extends('unicaApp')
@section('mainunica')

    <!-- Shop Products Section Start -->
    <div class="section section-padding pt-0">

        <!-- Shop Toolbar Start -->
        <div class="shop-toolbar border-bottom">
            <div class="container">
                <div class="row learts-mb-n20">

                    <!-- Isotop Filter Start -->
                    <div class="col-md col-12 align-self-center learts-mb-20">
                        <div class="isotope-filter shop-product-filter" data-target="#shop-products">


                          

                        </div>
                    </div>
                    <!-- Isotop Filter End -->

                    <div class="col-md-auto col-12 learts-mb-20">
                        <ul class="shop-toolbar-controls">

                            <li>
                                <div class="product-sorting">
                                    <select class="nice-select" >
                                        {{-- <option value="menu_order" selected="selected">Gender</option> --}}
                                        

                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="product-column-toggle d-none d-xl-flex">
                                    <button class="toggle active hintT-top" data-hint="5 Column" data-column="5"><i
                                            class="ti-layout-grid4-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="4 Column" data-column="4"><i
                                            class="ti-layout-grid3-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="3 Column" data-column="3"><i
                                            class="ti-layout-grid2-alt"></i></button>
                                </div>
                            </li>


                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Shop Toolbar End -->

        <!-- Product Filter Start -->
        <div id="product-filter" class="product-filter bg-light">
            <div class="container">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 learts-mb-n30">

                    <!-- Sort by Start -->

                    <!-- Brands End -->

                </div>
            </div>
        </div>
        <!-- Product Filter End -->

        <div class="section learts-mt-70">
            <div class="container">

                <!-- Products Start *fetch pro*  -->
                <div id="shop-products"
                    class="products isotope-grid row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                    <div class="grid-sizer col-1"></div>
                    @foreach ($productAll as $item)
                    <div class="grid-item col featured">
                        
                        <div class="product">
                            <div class="product-thumb">
                                <a href="{{ route('product-details',$item->id) }}" class="image">
                                    <img src="images/pro_images/{{$item->pro_image }}"
                                        alt="Product Image">
                                </a>
                            </div>
                                <div class="container" wfd-id="7">
                                    <p class="copyright text-center">{{$item->pro_name}}</p>
                                </div>
                            </div>
                        
                       
                        </div>
                        @endforeach
                    </div>


                </div>
                <!-- Products End -->
            </div>
        </div>
    <!-- Shop Products Section End -->

@endsection