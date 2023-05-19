@extends('frontend.layouts.master')
@section('title','Dhiiraaya')
@section('main-content')
@if(count($banners)>0)
<section id="Gslider" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
        @foreach($banners as $key=>$banner)
        <div class="carousel-item {{(($key==0)? 'active' : '')}}">
            <img class="first-slide" src="{{$banner->photo}}" alt="First slide">
            <div class="carousel-caption text-center">
                <h1 class="wow fadeInDown">{{$banner->title}}</h1>
                <div class="search-container mt-4">
                    <form action="{{route('product.search')}}" method="post">
                        @csrf
                        <input type="search" name="search" class="bannersearch"
                            placeholder="Enter product name" name="search">
                    </form>
                </div>
                <div class="social-media-iocns d-flex align-items-center justify-content-center">

                <a href="#" class="mx-2" > <img  src="{{asset ('/frontend/img/twitter.svg')}}" alt="">
               </a>
               <a href="#" class="mx-2" > <img  src="{{asset ('/frontend/img/fb.svg')}}" alt="">
               </a>
               <a href="#" class="mx-2" > <img  src="{{asset ('/frontend/img/insta.svg')}}" alt="">
               </a> </div>
            </div>

        </div>
        @endforeach
    </div>

</section>
@endif




@if(count($brands)>0)
<div class="container mt-5">
    <div class="row">
        <div class="owl-carousel owl-theme brandscarousel">
            @foreach($brands as $city)

            <div>
                <div class="my-container">

                    <h6>{{$city->title}}<br><br>{{$city->products_count==0?'Comming Soon' :$city->products_count.'  properties'  }}</h6>
                    <img class="newimage" src="{{$city->images}}" alt="">
                    <img class="imageone" src="{{asset('/frontend/img/brand.png')}}" alt="">
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endif





<section class="pt-5 pb-5">
    <div class="container pt-5 pb-5">
        <div class="text-center">
            <h2>Great choices from our listings</h2>
            <p class="mt-3">Strategy startup research & development equity burn rate validation customer vesting period
                infrastructure seed <br> round bandwidth ecosystem infographic market.</p>
        </div>
    </div>
    <div class="container-fluid-new">
        <div class="container-fluid" style="background-color:#FFFFEE">
            @foreach($product_lists as $random)
            <div class="row align-items-center">
                <div class="col-md-6 my-3 ">
                    <div class="owl-carousel owl-theme citycarousel">
                        {{-- @foreach($random->images as $photo)
                        @if($photo->url)
                        <img src="{{asset ('storage/'.preg_replace('/public/','', $photo->url))}}" width="100%" style="height:500px;">
                        @else
                        <img src="https://via.placeholder.com/600x370" alt="#">
                        @endif
                        @endforeach --}}

                        <div class="item"><img src="{{ asset ('/frontend/img/Rectangle 23.png')}}" alt=""></div>
                        <div class="item"><img src="{{ asset ('/frontend/img/Rectangle 23.png')}}" alt=""></div>
                        <div class="item"><img src="{{ asset ('/frontend/img/Rectangle 23.png')}}" alt=""></div>
                        <div class="item"><img src="{{ asset ('/frontend/img/Rectangle 23.png')}}" alt=""></div>
                        <div class="item"><img src="{{ asset ('/frontend/img/Rectangle 23.png')}}" alt=""></div>
                    </div>


                </div>
                <div class="col-md-6 my-3">
                    <h4>{{$random->title}}</h4>
                    <div class="d-flex align-items-center mt-4">
                        <img src="/frontend/img/Layer_x0020_1.png" alt="" class="pr-4">

                       <p> {{$random->cat_info['title']}}</p>
                    </div>
                    <hr class="w-50">

                    <div class="d-flex align-items-center">
                        <img src="/frontend/img/Layer_x0020_2.png" alt="" class="pr-4">

                       <p> {{$random->brand['title']}}</p>

                    </div>
                    <hr class="w-50">

                    <div class="btns py-4">
                        <a href="{{route('product-grids')}}" class="btn-1 ">View in detail</a>
                        <a href="{{route('user.myaccount')}}" class="btn-2 ">Wishlist</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<div class="container text-center">
    <div class="mt-4">
        <h2 class="mb-3">Find your way home</h2>
        <p>Discover a place you’ll live and love</p>
    </div>
    <div class="row mt-5 mb-5 align-items-center justify-content-center">
        @php
        $category_lists=DB::table('categories')->get();
        @endphp
        @if($category_lists)
        @foreach($category_lists as $cat)
        @if($cat->is_parent==1)
        <div class="col-lg-4 col-md-6 col-sm-6 cat-card py-4 px-3">
            <div class="single-banner">
                @if($cat->photo)
                <img src="{{$cat->photo}}" alt="{{$cat->photo}}" width="25%">
                @else
                <img src="https://via.placeholder.com/600x370" alt="#">
                @endif
                <div class="content">
                    <p style="color:#B3B356" class="mt-3 mb-3">{{$cat->title}}</p>
                    <p class="pl-4 pr-4" style="color:#000">{!!($cat->summary)!!}</p>
                    <div class="cat-btn mt-5">
                        <button><a href="{{route('product-cat',$cat->slug)}}">Discover</a></button>

                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endif
    </div>
</div>



@include('frontend.layouts.ownproperty')


@include('frontend.layouts.newsletter')


@endsection

@push('styles')

<style>
/* Banner Sliding */
#Gslider .carousel-inner {
    background: #000000;
    color: black;
}

#Gslider .carousel-inner {
    height: auto;
}

#Gslider .carousel-inner img {
    width: 100% !important;
    opacity: .8;
}

#Gslider .carousel-inner .carousel-caption {
    bottom: 55%;
}

#Gslider .carousel-inner .carousel-caption h1 {
    font-size: 35px;
    font-weight: bold;
    line-height: 100%;
    color: #fff;
}

#Gslider .carousel-inner .carousel-caption p {
    font-size: 18px;
    color: black;
    margin: 28px 0 28px 0;
}

#Gslider .carousel-indicators {
    bottom: 70px;
}

.bannersearch {
    width: 70% !important;
    padding: 12px 20px !important;
    border-radius: 40px !important;
}

.container-fluid-new {
    max-width: 1600px;
    margin: 0 auto;
}

.cat-btn button {

    border-radius: opx !important;
    background-color: #B8B87B;
    padding: 10px 40px !important;

}

.cat-card {
    box-shadow: 12px 6px 20px rgba(0, 72, 102, 0.101961);

}

.btns .btn-1 {
    padding: 10px 12%;
    background-color: #B8B87B;
    color: #000;
    border: 1px solid #B8B87B;
    border-radius: 0px !important;
    margin: 0 10px 0 0;
}


.btns .btn-2 {
    padding: 10px 7%;
    background-color: Transparent;
    border: 1px solid #000;
    border-radius: 0px !important;

}

@media screen and (max-width:991px) {
    #Gslider .carousel-inner .carousel-caption h1 {
        font-size: 25px;
        font-weight: bold;
        line-height: 100%;
        color: #fff;
    }

    #Gslider .carousel-inner .carousel-caption {
        bottom: 40%;
    }

    .bannersearch {
        width: 80% !important;
        padding: 6px 6px !important;
        border-radius: 20px !important;
    }

}

@media screen and (max-width:767px) {
    #Gslider .carousel-inner .carousel-caption h1 {
        font-size: 20px;
        font-weight: bold;
        line-height: 100%;
        color: #fff;
    }

    #Gslider .carousel-inner .carousel-caption {
        bottom: 30%;
    }

}

@media screen and (max-width:600px) {
    #Gslider .carousel-inner .carousel-caption {
        bottom: 20%;
    }

}
</style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
/*==================================================================
        [ Isotope ]*/
var $topeContainer = $('.isotope-grid');
var $filter = $('.filter-tope-group');

// filter items on button click
$filter.each(function() {
    $filter.on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $topeContainer.isotope({
            filter: filterValue
        });
    });

});

// init Isotope
$(window).on('load', function() {
    var $grid = $topeContainer.each(function() {
        $(this).isotope({
            itemSelector: '.isotope-item',
            layoutMode: 'fitRows',
            percentPosition: true,
            animationEngine: 'best-available',
            masonry: {
                columnWidth: '.isotope-item'
            }
        });
    });
});

var isotopeButton = $('.filter-tope-group button');

$(isotopeButton).each(function() {
    $(this).on('click', function() {
        for (var i = 0; i < isotopeButton.length; i++) {
            $(isotopeButton[i]).removeClass('how-active1');
        }

        $(this).addClass('how-active1');
    });
});
</script>
<script>
function cancelFullScreen(el) {
    var requestMethod = el.cancelFullScreen || el.webkitCancelFullScreen || el.mozCancelFullScreen || el.exitFullscreen;
    if (requestMethod) { // cancel full screen.
        requestMethod.call(el);
    } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
        var wscript = new ActiveXObject("WScript.Shell");
        if (wscript !== null) {
            wscript.SendKeys("{F11}");
        }
    }
}

function requestFullScreen(el) {
    // Supports most browsers and their versions.
    var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el
        .msRequestFullscreen;

    if (requestMethod) { // Native full screen.
        requestMethod.call(el);
    } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
        var wscript = new ActiveXObject("WScript.Shell");
        if (wscript !== null) {
            wscript.SendKeys("{F11}");
        }
    }
    return false
}
</script>

<script>
$('.brandscarousel').owlCarousel({
    loop: true,
    dots: false,
    margin: 30,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            dots: true,
        },

        767: {
            items: 3,
            dots: true,
        },

        991: {
            items: 4,
        },

        1199: {
            items: 4,
        },


    }
})
</script>

<script>
const nextIcon = '<img class="iconprev" src="{{ asset('/frontend/img/left.png') }}">';
const prevIcon = '<img class="iconnext" src="{{ asset('/frontend/img/right.png') }}">';

$('.citycarousel').owlCarousel({
    loop: true,
    dots: false,
    items: 1,
    nav:true,
    responsiveClass: true,
    navText: [nextIcon, prevIcon],

})
</script>



@endpush
