@extends('frontend.layouts.master')

@section('title','E-SHOP || Register Page')

@section('main-content')
	
            
    <!-- Shop Login -->
    <section class="shop login section">
        <div class="container">
            <div class="row"> 
            <div class="col-lg-2"></div>

<div class="col-lg-2">
    <h2 class="pb-5">Find
    Comfortable
    Real Estate
    Here</h2>

    <p class="pt-5 mt-5 ">Having troubles? Get Help</p>
</div>
<div class="col-lg-2"></div>
                <div class="col-lg-4 ">
                    <div class="login-form">
                        <!-- <h2>Register</h2> -->
                        <p>Sign up to Dhiiraya Homes</p>
                        <div class="d-flex">
                        <a href="{{route('login.redirect','facebook')}}" class=""><img src="/frontend/img/Group 1.png" alt=""></a>&nbsp;&nbsp;&nbsp;
                        <a href="{{route('login.redirect','google')}}" class=""><img src="/frontend/img/Group 2.png" alt=""></a>

                                        </div>
                        <img class="mt-2" src="/frontend/img/Separator.png" alt="">

                        <!-- Form -->
                        <form class="form mt-4" method="post" action="{{route('register.submit')}}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Name" required="required" value="{{old('name')}}">
                                        @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="Email address" required="required" value="{{old('email')}}">
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password" required="required" value="{{old('password')}}">
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required="required" value="{{old('password_confirmation')}}">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn-lgn" type="submit">Register</button>
                                        <!-- <a href="{{route('login.form')}}" class="btn">Login</a> -->
                                        <!-- <a href="{{route('login.redirect','facebook')}}" class="btn btn-facebook"><i class="ti-facebook"></i></a>
                                        <a href="{{route('login.redirect','github')}}" class="btn btn-github"><i class="ti-github"></i></a>
                                        <a href="{{route('login.redirect','google')}}" class="btn btn-google"><i class="ti-google"></i></a> -->
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
    .shop.login .form .btn{
        margin-right:0;
    }
    .btn-facebook{
        background:#39579A;
    }
    .btn-facebook:hover{
        background:#073088 !important;
    }
    .btn-github{
        background:#444444;
        color:white;
    }
    .btn-github:hover{
        background:black !important;
    }
    .btn-google{
        background:#ea4335;
        color:white;
    }
    .btn-google:hover{
        background:rgb(243, 26, 26) !important;
    }
</style>
@endpush