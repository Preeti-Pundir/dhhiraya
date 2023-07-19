@extends('frontend.layouts.master')

@section('title','My Account')

@section('main-content')

<!-- Demo header-->
<section class="header">

    <div class="container ">



        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-12 py-0 py-md-5 mx-4 mx-md-0">
                <!-- Tabs nav -->
                <div class="nav flex-row flex-md-column myaccount-tabs nav-pills nav-pills-custom" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link mb-0 mb-md-5 p-3 shadow active" id="saved-properties" data-toggle="pill"
                        href="#v-saved-properties" role="tab" aria-controls="v-saved-properties"
                        aria-selected="true">
                        <span class="font-weight-bold text-uppercase">saved properties</span></a>

                    <!-- <a class="nav-link mb-0 mb-md-5 p-3 shadow" id="v-pills-visited-properties-tab" data-toggle="pill"
                        href="#v-pills-visited-properties" role="tab" aria-controls="v-pills-visited-properties"
                        aria-selected="false">
                        <span class="font-weight-bold text-uppercase">Visited properties</span></a> -->

                    <a class="nav-link mb-0 mb-md-5 p-3 shadow" id="v-pills-faqs-tab" data-toggle="pill" href="#v-pills-faqs"
                        role="tab" aria-controls="v-pills-faqs" aria-selected="false">
                        <span class="font-weight-bold text-uppercase">FAQs</span></a>

                    <a class="nav-link mb-0 mb-md-5 p-3 shadow" id="v-pills-terms-tab" data-toggle="pill" href="#v-pills-terms"
                        role="tab" aria-controls="v-pills-terms" aria-selected="false">
                        <span class="font-weight-bold text-uppercase">Terms of service</span></a>

                    <a class="nav-link mb-0 mb-md-5 p-3 shadow " href="{{Route('contact')}}">
                        <span class="font-weight-bold text-uppercase">Contact us</span></a>
                </div>
            </div>


            <div class="col-lg-8 col-md-9 col-sm-12">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active py-5" id="v-saved-properties"
                        role="tabpanel" aria-labelledby="saved-properties">
                        <div class="container ">
                        @if( count(Helper::getAllProductFromWishlist()) > 0)
                                @foreach(Helper::getAllProductFromWishlist() as $key=>$wishlist)
                            <div class="row properties align-items-center ">
                                <!-- <div class="col-lg-4 col-md-4 col-sm-4 my-1"><img src="/frontend/img/Rectangle 51.png" alt=""></div> -->
                                @php
                                 $photo=explode(',',$wishlist->product['photo']);
                                @endphp
                                <div class="image col-lg-4 col-md-4 col-sm-4 my-1" data-title="No">
                                    <img src="{{$photo[0]}}" alt="{{$photo[0]}}" style="width:100%; height:150px" >
                                </div>

                                <div class="col-lg-5 col-md-8 col-sm-8 my-1 hsummary">

                                    <h5 class="my-2">
                                        @if(Auth::user()->survey === 'pending')
                                        <a class="curser-pointer" data-toggle="modal" data-target="#exampleModal">
                                            {{$wishlist->product['title']}}
                                        </a>
                                        @else
                                        <a class="curser-pointer" href="{{route('product-detail',$wishlist->product['slug'])}}">
                                            {{$wishlist->product['title']}}
                                        </a>
                                        @endif
                                    </h5>
                                    <p style="line-height:2;">{!!($wishlist->product['summary'])!!}</p>
                                    <div class="action my-4" data-title="Remove"><a href="{{route('wishlist-delete',$wishlist->id)}}">Remove Property</a></div>

                                        <!-- <div class="total-amount" data-title="Total"><span>${{$wishlist['amount']}}</span></div> -->
                                        <!-- <div><a href="{{route('add-to-cart',$wishlist->product['slug'])}}" class='btn text-white'>Add To Cart</a></div>
                                        <div class="action" data-title="Remove"><a href="{{route('wishlist-delete',$wishlist->id)}}"><i class="ti-trash remove-icon"></i></a></div>
                                     -->

                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 my-1 ">
                                    <div class="d-flex d-md-block">
                                    <a href="https://wa.me/8390712871/" title="click to open whatsapp chat" target="_blank"> <button class="btn-ma" id="b" >Book a visit</button></a>
                                   <a href="tel:8390712871">  <button class="btn-ma" id="g" >Make a call</button> </a>
                                        </div>
                                </div>
                            </div>


                            @endforeach
                            @else


                                    <div class="text-center text-dark">
                                        There are no any property available. <a href="{{route('product-grids')}}" style="color:blue;">Continue building your Property Wishlist</a>

                                    </div>

                            @endif

                    </div>
                    </div>

                    <!-- <div class="tab-pane fade shadow rounded bg-white py-5" id="v-pills-visited-properties"
                        role="tabpanel" aria-labelledby="v-pills-visited-properties-tab">
                        <div class="container ">
                        @if(count(Helper::getAllProductFromCart()) > 0)
									@foreach(Helper::getAllProductFromCart() as $key=>$cart)

                            <div class="row properties align-items-center ">
                            @php
											$photo=explode(',',$cart->product['photo']);
											@endphp
                                            <div class="image col-lg-4 col-md-4 col-sm-4 my-1" data-title="No"><img src="{{$photo[0]}}" alt="{{$photo[0]}}" style="width:100%; height:150px"></div>
                                <div class="col-lg-5 col-md-8 col-sm-8 my-1">
                                    <h4><a href="{{route('product-detail',$cart->product['slug'])}}" target="_blank">{{$cart->product['title']}}</a></h4>
                                    <p style="line-height:2">{!!($cart['summary']) !!}</p>
                                    <div class="price" data-title="Price"><span>${{number_format($cart['price'],2)}}</span></div>


											<div class="action" data-title="Remove"><a href="{{route('cart-delete',$cart->id)}}">Remove Property</a></div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 my-1 ">
                                    <div class="d-flex d-md-block">
                                    <a href="https://wa.me/8390712871/" title="click to open whatsapp chat" target="_blank"> <button class="btn-ma" id="b" >Book a visit</button></a>
                                   <a href="tel:8390712871">  <button class="btn-ma" id="g" >Make a call</button> </a>
                                        </div>
                                </div>
                            </div>

                            @endforeach

								@else

											<div class="text-center">
												There are no any carts available. <a href="{{route('product-grids')}}" style="color:blue;">Continue shopping</a>

											</div>

								@endif


                        </div>
                    </div> -->

                    <div class="tab-pane fade shadow rounded bg-white py-5" id="v-pills-faqs" role="tabpanel"
                        aria-labelledby="v-pills-faqs-tab">
                        <h4 class="font-italic mb-4">FAQs</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</p>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white py-5" id="v-pills-terms" role="tabpanel"
                        aria-labelledby="v-pills-terms-tab">
                        <h4 class="font-italic mb-4">Terms of service</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

{{-- @include('frontend.layouts.bookavisit') --}}


@endsection
