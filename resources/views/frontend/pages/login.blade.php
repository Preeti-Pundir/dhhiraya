@extends('frontend.layouts.master')

@section('title','Login')

@section('main-content')


<!-- Shop Login -->
<section class="shop login section">
    <div class="container-fluid" style="max-width:1500px !important">
        <div class="row">

            <div class="col-lg-4 col-md-12 my-3 fcare text-white" style="background-color:#B3B356;">
                <h2 class="">Find
                    Comfortable
                    Real Estate
                    Here</h2>

                <p class="text-white">Having troubles? <u>Get Help</u></p>
            </div>

<div class="col-lg-2"></div>

            <div class="col-lg-4 col-md-12 my-3">
                <div class="login-form">
                    <p>Login to Dhiiraaya Homes</p>
                     <div class="d-flex">
                        <a href="{{route('login.redirect','google')}}" class=""><img src="/frontend/img/Group 1.png"
                                alt=""></a>&nbsp;&nbsp;&nbsp;
                        <a href="{{route('login.redirect','facebook')}}" class=""><img src="/frontend/img/Group 2.png"
                                alt=""></a>

                    </div>
                    <img src="/frontend/img/Separator.png" alt="">
                    <!-- Form -->
                    <form class="form mt-4" method="post" action="{{route('login.submit')}}">
                        @csrf
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <!-- <label>Your Email<span>*</span></label> -->
                                    <input type="email" name="email" placeholder="Email address" required="required"
                                        value="{{old('email')}}">

                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <!-- <label>Your Password<span>*</span></label> -->
                                    <input type="password" name="password" placeholder="Password" required="required"
                                        value="{{old('password')}}">
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        @if (Route::has('password.request'))
                                        <a class="lost-pass" href="{{ route('password.request') }}">
                                            Forgot password?
                                        </a>
                                        @endif
                                    </div>
                                    <div>
                                        <a href="{{route('register.form')}}">New user? Signup</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group login-btn">
                                    <button class="btn-lgn" type="submit">Login</button>
                                    <!-- <a href="{{route('register.form')}}" class="btn">Register</a> -->

                                </div>

                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
            <div class="col-lg-2"></div>


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

/*
    .label-float{
  position: relative;
  padding-top: 13px;
}

.label-float input{
  border: 1px solid lightgrey;
  border-radius: 5px;
  outline: none;
  min-width: 250px;
  padding: 15px 20px;
  font-size: 16px;
  transition: all .1s linear;
  -webkit-transition: all .1s linear;
  -moz-transition: all .1s linear;
  -webkit-appearance:none;
}

.label-float input:focus{
  border: 2px solid #3951b2;
}

.label-float input::placeholder{
  color:transparent;
}

.label-float label{
  pointer-events: none;
  position: absolute;
  top: calc(50% - 8px);
  left: 15px;
  transition: all .1s linear;
  -webkit-transition: all .1s linear;
  -moz-transition: all .1s linear;
  background-color: white;
  padding: 5px;
  box-sizing: border-box;
}

.label-float input:required:invalid + label{
  color: red;
}
.label-float input:focus:required:invalid{
  border: 2px solid red;
}
.label-float input:required:invalid + label:before{
  content: '*';
}
.label-float input:focus + label,
.label-float input:not(:placeholder-shown) + label{
  font-size: 13px;
  top: 0;
  color: #3951b2;
} */
</style>
@endpush
