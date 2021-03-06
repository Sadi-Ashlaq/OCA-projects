@extends('dashboard.appNav')
@section('main')
   
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data" action="" class="form-horizontal">
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">category</i>
                                </div>
                                <h4 class="card-title">Add Product</h4>
                            </div>
                            <div class="card-body ">
                               
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Picture</label>
                                    <div class="col-sm-7">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="/images/pro_images/{{$product->pro_image}}" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div class="form-group">
                                                <span class="btn btn-rose btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="pro_image" class="custom-file-input" id="input-picture" accept="image/*">
                                                    
                                                </span>
                                                @error('pro_image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                    Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Product Name</label>
                                        <div class="col-sm-7">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" name="pro_name" id="input-name" type="text" placeholder="Product Name" value="{{$product->pro_name}}" aria-required="true">
                                            </div>
                                            @error('pro_name')
                                            <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                        </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Product Price</label>
                                        <div class="col-sm-7">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" name="pro_price" id="input-name" type="text" placeholder="Product Price" value="{{$product->pro_price}}" aria-required="true">
                                            </div>
                                            @error('pro_price')
                                            <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                        </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Product Description</label>
                                        <div class="col-sm-7">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" name="pro_desc" id="input-name" type="text" placeholder="Product Description" value="{{$product->pro_desc}}" aria-required="true">
                                            </div>
                                            @error('pro_desc')
                                            <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                        </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Product Coupon</label>
                                        <div class="col-sm-7">
                                            <div class="form-group bmd-form-group">
                                                <input class="form-control" name="pro_coupon" id="input-name" type="text" placeholder="Product Coupon" value="{{$product->pro_coupon}}" aria-required="true">
                                            </div>
                                            @error('pro_coupon') 
                                            <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                        </div>
                                </div>

                            

                                <div class="row">
                                    <label class="col col-form-label">Category Name</label>
                                     <div class=" col">
                                          <select name="cat_name"class="selectpicker" data-style="select-with-transition"  title="{{$old_cat->cat_name}}" data-size="7">
                                            @foreach ($categories as $cat)
                                            <option  value="{{$cat->id}} ">{{$cat->cat_name}} </option>
                                            @endforeach
                                            
                                            
                                            
                                            
                                          </select>
                                          @error('cat_name')
                                          <div class="text-danger">{{ $message }}</div>
                                  @enderror
                                        </div>

                                        <label class="col col-form-label ">Supplier</label>
                                        <div class="col">
                                                <select name="sup_name" class="selectpicker" data-style="select-with-transition"  title="{{$old_sup->sup_name}}" >
                                                
                                                    @foreach ($suppliers as $sup)
                                                    <option  value="{{$sup->id}}">{{$sup->sup_name}} </option>
                                                    @endforeach
                                                    
                                                </select>
                                                @error('sup_name')
                                                <div class="text-danger">{{$message }}</div>
                                        @enderror
                                            </div>

                                        <label class="col col-form-label ">Gender</label>
                                             <div class="col">
                                                  <select name="property_gender"class="selectpicker" data-style="select-with-transition"  title="{{$product->property_gender}}" data-size="7">
                                                    
                                                    <option  value="male ">Male </option>
                                                    <option value="female ">female  </option>
                                                    
                                                  </select>
                                                  @error('property_gender')
                                                  <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                                </div>
                                       
                                            
                                </div>
                            
                               
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose">Create Product</button>
                            </div>
                        </div>
                    </form>
                      
                </div>
            </div>
    
@endsection

@section('js')

    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../assets/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../assets/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' +
                                new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                            'img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                            $full_page_background.css('background-image', 'url("' +
                                new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img")
                            .attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                            'img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image +
                            '")');
                        $full_page_background.css('background-image', 'url("' +
                            new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function() {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function() {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

            md.initVectorMap();

        });

    </script>
    </body>

    </html>
@endsection
