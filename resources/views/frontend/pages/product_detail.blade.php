@extends('frontend.layouts.master')

@section('title','Property Detail')
@section('main-content')

<section>
    <div class="container-fluid">
    @php
    $photo=explode(',',$product_detail->photo);
    @endphp
    @foreach($photo as $data)
        <img src="{{$data}}" alt="{{$data}}" width="100%" style="height:500px;">
        @endforeach
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-2 col-md-4 col-sm-6 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1-5.svg" alt="" width="40px">
                    <p class="mt-4">{{$product_detail->cat_info['title']}}</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1-3.svg" alt="" width="40px">
                    <p class="mt-3">{{$product_detail->brand['title']}}</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1.svg" alt="" width="40px">
                    <p class="mt-4">{{$product_detail->area}}</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1-4.svg" alt="" width="30px">
                    <p class="mt-4">{{($product_detail->price)}} CR</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1-2.svg" alt="" width="40px">
                    <p class="mt-4">{{$product_detail->rooms}}</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1-1.svg" alt="" width="40px">
                    <p class="mt-4">{{$product_detail->pr_condition}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 mb-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4 my-3">
                <div class="d-flex flex-column pro-sec-detail">
                    <h5 class="mb-4">{{$product_detail->title}}</h5>
                    <p>{!!($product_detail->summary)!!}</p>
                </div>

                <div class="mt-4 text-center">
                    <div class="d-flex align-items-center justify-content-around my-3">
                   <a href="https://wa.me/9779890316/" title="click to open whatsapp chat" target="_blank"> <button class="btn-whish" ><img src="/frontend/img/wp.png" alt=""></button></a>
                   <a href="tel:9779890316"><button class="btn-whish" ><img src="/frontend/img/phone.png" alt=""></button></a>
                   <a href="{{route('add-to-wishlist',$product_detail->slug)}}"> <button class="btn-whish whishlist-btn" ><img src="/frontend/img/wish.svg" alt=""></button></a>
                </div>



                   <a href="{{ route('product.download', ['slug' => $product_detail->slug]) }}"><button class="btn-download" id="g" >Download Brochure</button></a>

                   @if (isset($product_detail) && isset($product_detail->developersite))
                   <a href="{{ route('product.developerlink', ['slug' => $product_detail->slug]) }}" target="_blank"><button class="btn-download" id="b" >Developer site</button></a>
                    @endif





                </div>
            </div>
            <div class="col-md-8 my-3">
                <div class="owl-carousel owl-theme">
                    @if(count($product_detail->images) != 0 )
                    @foreach($product_detail->images as $photo)
                    <img src="{{asset ('storage/'.preg_replace('/public/','', $photo->url))}}" width="100%" style="height:500px;">
                    <img src="{{asset ('storage/'.preg_replace('/public/','', $photo->url))}}" width="100%" style="height:500px;">
                    @endforeach
                    @else
                    {{-- {{dd($random->images)}} --}}
                    <div class="item"><img src="{{ asset ('/frontend/img/place-holder.jpeg')}}" alt=""></div>
                    <div class="item"><img src="{{ asset ('/frontend/img/place-holder.jpeg')}}" alt=""></div>
                    <div class="item"><img src="{{ asset ('/frontend/img/place-holder.jpeg')}}" alt=""></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5 ">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 ">
                <!-- Tabs nav -->
                <div class="nav flex-row  nav-pills nav-pills-custom pro-nav" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link shadow active" id="v-pills-developer-tab" data-toggle="pill"
                        href="#v-pills-developer" role="tab" aria-controls="v-pills-developer" aria-selected="true">
                        <span class="font-weight-bold small text-uppercase">Developer</span></a>

                    <a class="nav-link shadow" id="v-pills-other-detail-tab" data-toggle="pill"
                        href="#v-pills-other-detail" role="tab" aria-controls="v-pills-other-detail"
                        aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">Other details</span></a>

                    {{-- <a class="nav-link shadow" id="v-pills-acquisition-tab" data-toggle="pill"
                        href="#v-pills-acquisition" role="tab" aria-controls="v-pills-acquisition"
                        aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">Acquisition</span></a> --}}


                </div>
            </div>


            <div class="col-md-12">
                <!-- Tabs content -->
                <hr>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active" id="v-pills-developer"
                        role="tabpanel" aria-labelledby="v-pills-developer-tab">
                        <p class="">{!!($product_detail->developer)!!}</p>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white" id="v-pills-other-detail" role="tabpanel"
                        aria-labelledby="v-pills-other-detail-tab">
                        <p class="">{!!($product_detail->description)!!}</p>
                    </div>

                    {{-- <div class="tab-pane fade shadow rounded bg-white" id="v-pills-acquisition" role="tabpanel"
                        aria-labelledby="v-pills-acquisition-tab">
                        <p class="">{!!($product_detail->acquisition)!!}</p>
                    </div> --}}




                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container text-center">
        <h3 class="mb-3">Projects near by...</h3>
        <p>Strategy startup research & development equity burn rate validation customer vesting period infrastructure
            seed round bandwidth ecosystem infographic market.</p>


            <div class="row my-5">
                {{-- {{$product_detail->rel_prods}} --}}
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        @foreach($product_detail->rel_prods as $data)
                        @if($data->id !==$product_detail->id)
                        <!-- Start Single Product -->
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('product-detail',$data->slug)}}">
                                    @php
                                    $photo=explode(',',$data->photo);
                                    @endphp
                                    <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}" style="height:450px;" >


                                </a>
                                <div class="button-head-one">
                                    <!-- <div class="product-action-one">
                                        <a title="Wishlist" href="#"
                                            class="wishlist" data-id="{{$data->id}}"><img
                                                src="/frontend/img/Vector.svg" alt=""></a>
                                    </div> -->
                                    <div class="product-action-one-2 px-2">
                                        <a
                                            href="#"><h6>{{$data->title}}</h6></a>
                                            <br>
                                            <a
                                            href="#">{{$data->brand['title']}}</a>
                                            <br>
                                            <a
                                            href="#">{{$data->area}}</a>
                                            <br>
                                            <a
                                            href="#">{{$data->rooms}}</a>
                                    </div>
                                </div>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a title="Save property" href="{{route('add-to-wishlist',$data->slug)}}" class="wishlist" data-id="{{$data->id}}"><img
                                                src="/frontend/img/Vector.svg" alt=""></a>
                                    </div>
                                    <div class="product-action-2">
                                       @guest
                                       <a title="View the product"
                                            href="{{route('login.form')}}">View</a>
                                            @elseif(Auth::user()->survey === 'pending')
                                            <a data-toggle="modal" data-target="#exampleModal">
                                               View
                                            </a>
                                            @else
                                        <a title="View the product"
                                            href="{{route('product-detail',$data->slug)}}">View</a>
                                           @endguest


                                            <!-- <a href="{{route('add-to-cart',$data->slug)}}">Visited Property</a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="product-content">
                                <h3><a href="{{route('product-detail',$data->slug)}}">{{$data->title}}</a>
                                </h3>
                                @php
                                $after_discount=($data->price-($data->price*$data->discount)/100);
                                @endphp
                                <span>Rs {{number_format($after_discount,2)}}</span>

                            </div> -->
                        </div>
                        <!-- End Single Product -->

                        @endif
                        @endforeach
                    </div>
                </div>
            </div>

    </div>

</section>





{{-- @include('frontend.layouts.bookavisit') --}}




@endsection
@push('styles')
<style>
/* Rating */
.rating_box {
    display: inline-flex;
}

.star-rating {
    font-size: 0;
    padding-left: 10px;
    padding-right: 10px;
}

.star-rating__wrap {
    display: inline-block;
    font-size: 1rem;
}

.star-rating__wrap:after {
    content: "";
    display: table;
    clear: both;
}

.star-rating__ico {
    float: right;
    padding-left: 2px;
    cursor: pointer;
    color: #F7941D;
    font-size: 16px;
    margin-top: 5px;
}

.star-rating__ico:last-child {
    padding-left: 0;
}

.star-rating__input {
    display: none;
}

.star-rating__ico:hover:before,
.star-rating__ico:hover~.star-rating__ico:before,
.star-rating__input:checked~.star-rating__ico:before {
    content: "\F005";
}

/* ************* */

.single-product .button-head-one {
    background: #000;
    opacity: 0.75;
    display: inline-block;
    width: 100%;
    height:auto;
    position: absolute;
    left: 0;
    bottom: -100%;
    z-index: 9;
    line-height: 50px;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.single-product:hover .button-head-one {
    top: 0;

}

.single-product .product-img .product-action-one a {
    background-color: transparent;
    display: block;
    font-size: 16px;
    display: inline-block;
    /* margin-right: 15px; */
    /* text-align: right; */
    /* height: 0 !important; */
    position: relative;
    top: 50;
}

.single-product .product-img .product-action-one {
    display: inline-block;
    position: absolute;
    right: 10px;
    top: 0;
    z-index: 99;
    border-radius: 3px;
}

.single-product .product-img .product-action-one-2 {
    position: absolute;
    width:100% !important;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 99;
    text-align:center;
    -webkit-transition: all 250ms ease-out;
    -o-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
}
.single-product .product-img .product-action-one-2 a {
    display: block;
    background-color: transparent;
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    text-transform: uppercase;
    line-height: 1;
    display: inline-block;
}

.single-product .product-img .product-action-one-2 a h5 {

    font-size: 20px;

}

@media screen and (max-width:991px) {
    .single-product .product-img .product-action-one-2 a {

    font-size: 12px;

}

.single-product .product-img .product-action-one-2 a h5 {

    font-size: 15px;

}

}


/* **************** */


</style>
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>



<script>
const nextIcon = '<img class="iconprev" src="{{ asset('/frontend/img/blackleft.png') }}">';
const prevIcon = '<img class="iconnext" src="{{ asset('/frontend/img/blackright.png') }}">';

$('.owl-carousel').owlCarousel({
    loop: true,
    dots: false,
    items: 1,
    margin: 10,
    nav: true,
    responsiveClass: true,
    navText: [nextIcon, prevIcon],
})
</script>


@endpush

