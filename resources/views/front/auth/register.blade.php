@extends('front.layouts.app')

@section('title', 'START-UP @SUXROB')

@section('content')


 <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-start">Sign Up</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="index.html">Home</a></li>
                        <li class="separator"><i class="feather-chevron-right"></i></li>
                        <li class="item current">Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->

    <!-- login form -->
    <div class="login-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="offset-2 col-lg-4 col-md-6 ml_md--0 ml_sm--0 col-sm-12">
                    <div class="form-wrapper-one registration-area">
                        <h4>Sign up</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-5">
                                <label for="firstname" class="form-label">First name</label>
                                <input type="text" name="firstname" id="firstname">
                            </div>
                            <div class="mb-5">
                                <label for="lastname" class="form-label">Last name</label>
                                <input type="text" name="lastname" id="lastname">
                            </div>
                             <div class="mb-5">
                                <label for="username" class="form-label">User name</label>
                                <input type="text" name="username" id="username">
                            </div>
                            <div class="mb-5">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="mb-5">
                                <label for="password" class="form-label">Create Password</label>
                                <input type="password" name="password" id="password">
                            </div>
                            <div class="mb-5">
                                <label for="password_confirmation" class="form-label">Re Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation">
                            </div>
                            <div class="mb-5 rn-check-box">
                                <input type="checkbox" class="rn-check-box-input" id="exampleCheck1">
                                <label class="rn-check-box-label" for="exampleCheck1">Allow to all tearms &
                                    condition</label>
                            </div>
                            <button type="submit" class="btn btn-primary mr--15">Register</button>
                            <a href="{{ route('login') }}" class="btn btn-primary-alta">Log In</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="social-share-media form-wrapper-one">
                        <h6>Another way to sign up</h6>
                        <p> Lorem ipsum dolor sit, amet sectetur adipisicing elit.cumque.</p>
                        <button class="another-login login-facebook"> <img class="small-image" src="assets/images/icons/google.png" alt=""> <span>Log in with Google</span></button>
                        <button class="another-login login-facebook"> <img class="small-image" src="assets/images/icons/facebook.png" alt=""> <span>Log in with Facebook</span></button>
                        <button class="another-login login-twitter"> <img class="small-image" src="assets/images/icons/tweeter.png" alt=""> <span>Log in with Twitter</span></button>
                        <button class="another-login login-linkedin"> <img class="small-image" src="assets/images/icons/linkedin.png" alt=""> <span>Log in with linkedin</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login form end -->

@endsection
