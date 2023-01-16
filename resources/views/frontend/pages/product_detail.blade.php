@extends('frontend.layouts.master')

@section('title','Property Detail')
@section('main-content')

<section>
    <div class="container-fluid">
        <img src="/frontend/img/Rectangle.png" alt="" width="100%">
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-2 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1-5.svg" alt="" width="40px">
                    <p class="mt-4">Residential</p>
                </div>
            </div>
            <div class="col-md-2 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1-3.svg" alt="" width="40px">
                    <p class="mt-4">Delhi NCR</p>
                </div>
            </div>
            <div class="col-md-2 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1.svg" alt="" width="40px">
                    <p class="mt-4">30 FT X 40FT</p>
                </div>
            </div>
            <div class="col-md-2 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1-4.svg" alt="" width="30px">
                    <p class="mt-4">2.5 CR</p>
                </div>
            </div>
            <div class="col-md-2 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1-2.svg" alt="" width="40px">
                    <p class="mt-4">3 Bedroom, 2 bathroom</p>
                </div>
            </div>
            <div class="col-md-2 border-size-box">
                <div class="d-flex flex-column pro-detail">
                    <img src="/frontend/img/Layer_x0020_1-1.svg" alt="" width="40px">
                    <p class="mt-4">Construction</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 mb-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="d-flex flex-column pro-sec-detail">
                    <h5 class="mb-4">Bedroom 2</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minina aliqua. Ut enim ad </p>
                </div>

                <div class="mt-4 text-center">

                   <a href="https://wa.me/9512624584/" title="click to open whatsapp chat" target="_blank"> <button class="btn-ma" id="b" >Book a visit</button></a>
                   <a href="tel:9512624584"> <button class="btn-ma" id="g" >Make a call</button></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="owl-carousel owl-theme">
                    <div><img src="/frontend/img/Rectangle 3.png" alt="" width="100%" style="height: 450px "></div>
                    <div><img src="/frontend/img/Rectangle 3.png" alt="" width="100%" style="height: 450px "></div>
                    <div><img src="/frontend/img/Rectangle 3.png" alt="" width="100%" style="height: 450px "></div>
                    <div><img src="/frontend/img/Rectangle 3.png" alt="" width="100%" style="height: 450px "></div>
                    <div><img src="/frontend/img/Rectangle 3.png" alt="" width="100%" style="height: 450px "></div>
                    <div><img src="/frontend/img/Rectangle 3.png" alt="" width="100%" style="height: 450px "></div>
                    <div><img src="/frontend/img/Rectangle 3.png" alt="" width="100%" style="height: 450px "></div>
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

                    <a class="nav-link shadow" id="v-pills-acquisition-tab" data-toggle="pill"
                        href="#v-pills-acquisition" role="tab" aria-controls="v-pills-acquisition"
                        aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">Acquisition</span></a>


                </div>
            </div>


            <div class="col-md-12">
                <!-- Tabs content -->
                <hr>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active" id="v-pills-developer"
                        role="tabpanel" aria-labelledby="v-pills-developer-tab">
                        <p class="m-5"> </p>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white" id="v-pills-other-detail" role="tabpanel"
                        aria-labelledby="v-pills-other-detail-tab">
                        <p class="m-5"> </p>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white" id="v-pills-acquisition" role="tabpanel"
                        aria-labelledby="v-pills-acquisition-tab">
                        <p class="m-5"> </p>
                    </div>




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


    </div>

</section>


<!-- Button trigger modal -->


@include('frontend.layouts.bookavisit')




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