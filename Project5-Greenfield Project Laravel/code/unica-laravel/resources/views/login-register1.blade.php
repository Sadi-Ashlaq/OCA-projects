@extends('unicaApp')
@section('mainunica')

    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="{{ asset('unica/assets/images/bg/page-title-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Login & Register</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Login & Register</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Login & Register Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="user-login-register">
                        <div class="login-register-title">
                            <h2 class="title">Register</h2>
                            <p class="desc">If you don’t have an account, register now!</p>
                        </div>
                        <div class="login-register-form">
                                <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                                    @csrf
                                <div class="row learts-mb-n50">

                                    

                                    <div class="col-12 learts-mb-20">
                                        <label for="registerEmail">User Image <abbr class="required">*</abbr></label>
                                        {{-- <input type="email" id="registerEmail"> --}}
                                        {{-- <input id="registerEmail" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}
                                        <input type="file" name="user_image" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="col-12 learts-mb-20">
                                        <label for="registerEmail">User Name <abbr class="required">*</abbr></label>
                                        {{-- <input type="email" id="registerEmail"> --}}
                                        <input id="registerEmail" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-12 learts-mb-20">
                                        <label for="registerEmail">Email address <abbr class="required">*</abbr></label>
                                        {{-- <input type="email" id="registerEmail"> --}}
                                        <input id="registerEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12 learts-mb-20">
                                        <label for="registerEmail">User Mobile <abbr class="required">*</abbr></label>
                                        {{-- <input type="email" id="registerEmail"> --}}
                                        <input id="registerEmail" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12 learts-mb-20">
                                        <label for="password">Password <abbr class="required">*</abbr></label>
                                        {{-- <input type="email" id="registerEmail"> --}}
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12 learts-mb-20">
                                        <label for="password">Password <abbr class="required">*</abbr></label>
                                        {{-- <input type="email" id="registerEmail"> --}}
                                        {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> --}}
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <div class="col-12 learts-mb-50">
                                        <p>Your personal data will be used to support your experience throughout this
                                            website, to manage access to your account, and for other purposes described in
                                            our privacy policy</p>
                                    </div>
                                    <div class="col-12 text-center learts-mb-50">
                                        {{-- <button class="btn btn-dark btn-outline-hover-dark">Register</button> --}}
                                        <button type="submit" class="btn btn-dark btn-outline-hover-dark">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 learts-mb-30">
                    <div class="sale-banner7">
                        <div class="inner">
                            <div class="image"><img
                                    src="{{ asset('unica/assets/images/product/single/3/banner/banner-3.jpg') }}"
                                    alt="Sale Banner Image"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Login & Register Section End -->

@endsection
