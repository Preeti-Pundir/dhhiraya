@extends('frontend.layouts.master')

@section('title','Register')

@section('main-content')


<!-- Shop Login -->
<section class="shop login section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 fcare" style="background-color:#B3B356;">
                <h2 class="text-white">Find
                    Comfortable
                    Real Estate
                    Here</h2>

                <p class="text-white ">Having troubles? <u>Get Help</u></p>
            </div>

            <div class="col-md-2 extra-div"></div>

            <div class="col-lg-5 col-md-12">
                <div class="register-form">
                    <!-- <h2>Register</h2> -->
                    <p class="my-3">Sign up to Dhiiraaya Homes</p>
                    <div class="d-flex">
                        <a href="{{route('login.redirect','facebook')}}" class=""><img src="/frontend/img/Group 1.png"
                                alt=""></a>&nbsp;&nbsp;&nbsp;
                        <a href="{{route('login.redirect','google')}}" class=""><img src="/frontend/img/Group 2.png"
                                alt=""></a>

                    </div>
                    <img class="mt-2" src="/frontend/img/Separator.png" alt="">

                    <!-- Form -->
                    <form class="form mt-4" method="post" action="{{route('register.submit')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Name" required="required"
                                        value="{{old('name')}}">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Email address" required="required"
                                        value="{{old('email')}}">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" required="required"
                                        value="{{old('password')}}">
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                        required="required" value="{{old('password_confirmation')}}">
                                    @error('password_confirmation')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group login-btn d-flex align-items-center justify-content-between">
                                    <button class="btn-lgn" type="submit">Register</button>
                                    <a href="{{route('login.form')}}">Oldies? Login here</a>

                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Login -->

@include('frontend.layouts.newsletter')

@endsection

@push('styles')
<style>
.shop.login .form .btn {
    margin-right: 0;
}

.btn-facebook {
    background: #39579A;
}

.btn-facebook:hover {
    background: #073088 !important;
}

.btn-github {
    background: #444444;
    color: white;
}

.btn-github:hover {
    background: black !important;
}

.btn-google {
    background: #ea4335;
    color: white;
}

.btn-google:hover {
    background: rgb(243, 26, 26) !important;
}
</style>
@endpush
