@extends('frontend.layouts.master')

@section('title','Hot Shot Listings')

@section('main-content')


<!-- Product Style -->
<form action="{{route('shop.filter')}}" method="POST">
    @csrf
    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-12">
                    <div class="row">
                        <div class="col-12">
                            <!-- Shop Top -->
                            <div class="shop-top">
                                <div class="shop-shorter">
                                    <div class="single-shorter">

                                        <select class="show pfilter" name="show" >
                                            <option value="">City</option>
                                            <option value="9" @if(!empty($_GET['show']) && $_GET['show']=='9' ) selected
                                                @endif>09</option>
                                            <option value="15" @if(!empty($_GET['show']) && $_GET['show']=='15' )
                                                selected @endif>15</option>
                                            <option value="21" @if(!empty($_GET['show']) && $_GET['show']=='21' )
                                                selected @endif>21</option>
                                            <option value="30" @if(!empty($_GET['show']) && $_GET['show']=='30' )
                                                selected @endif>30</option>
                                        </select>
                                    </div>
                                    <div class="single-shorter">

                                        <select class='sortBy pfilter' name='sortBy' >
                                            <option value="">Property type</option>
                                            <option value="title" @if(!empty($_GET['sortBy']) &&
                                                $_GET['sortBy']=='title' ) selected @endif>Name</option>
                                            <option value="price" @if(!empty($_GET['sortBy']) &&
                                                $_GET['sortBy']=='price' ) selected @endif>Price</option>
                                            <option value="category" @if(!empty($_GET['sortBy']) &&
                                                $_GET['sortBy']=='category' ) selected @endif>Category</option>
                                            <option value="brand" @if(!empty($_GET['sortBy']) &&
                                                $_GET['sortBy']=='brand' ) selected @endif>Brand</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <ul class="view-mode">
                                        <li class="active"><a href="javascript:void(0)"><i class="fa fa-th-large"></i></a></li>
                                        <li><a href="{{route('product-lists')}}"><i class="fa fa-th-list"></i></a></li>
                                    </ul> -->
                            </div>
                            <!--/ End Shop Top -->
                        </div>
                    </div>
                    <div class="row">
                        {{-- {{$products}} --}}
                        @if(count($products)>0)
                        @foreach($products as $product)
                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="{{route('product-detail',$product->slug)}}">
                                        @php
                                        $photo=explode(',',$product->photo);
                                        @endphp
                                        <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                        <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                        
                                    </a>
                                    <div class="button-head-one">
                                        <!-- <div class="product-action-one">
                                            <a title="Wishlist" href="#"
                                                class="wishlist" data-id="{{$product->id}}"><img
                                                    src="/frontend/img/Vector.svg" alt=""></a>
                                        </div> -->
                                        <div class="product-action-one-2">
                                            <a 
                                                href="#"><h5>{{$product->title}}</h5></a>
                                                <br>
                                                <a 
                                                href="#">{{$product->size}}</a>
                                                <br>
                                                <a 
                                                href="#">{{$product->condition}}</a>
                                        </div>
                                    </div>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a title="Save property" href="{{route('add-to-wishlist',$product->slug)}}" class="wishlist" data-id="{{$product->id}}"><img
                                                    src="/frontend/img/Vector.svg" alt=""></a>
                                        </div>
                                        <div class="product-action-2">
                                           @guest
                                           <a title="View the product"
                                                href="{{route('login.form')}}">View</a>
                                                @elseif(Auth::user()->survey === 'pending')
                                            <a title="View the product"
                                                href="/">View</a>
                                                @else
                                            <a title="View the product"
                                                href="{{route('product-detail',$product->slug)}}">View</a>
                                               @endguest
                                                <!-- <a href="{{route('add-to-cart',$product->slug)}}">Visited Property</a> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="product-content">
                                    <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a>
                                    </h3>
                                    @php
                                    $after_discount=($product->price-($product->price*$product->discount)/100);
                                    @endphp
                                    <span>Rs {{number_format($after_discount,2)}}</span>
                                   
                                </div> -->
                            </div>
                        </div>
                        @endforeach
                        @else
                        <h4 class="text-warning" style="margin:100px auto;">There are no products.</h4>
                        @endif



                    </div>
                    <div class="row">
                        <div class="col-md-12 justify-content-center d-flex">
                            {{$products->appends($_GET)->links()}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</form>

<!--/ End Product Style 1  -->



<!-- Modal -->
@if($products)
@foreach($products as $key=>$product)
<div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
                        aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- Product Slider -->
                        <div class="product-gallery">
                            <div class="quickview-slider-active">
                                @php
                                $photo=explode(',',$product->photo);
                                // dd($photo);
                                @endphp
                                @foreach($photo as $data)
                                <div class="single-slider">
                                    <img src="{{$data}}" alt="{{$data}}">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End Product slider -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-content">
                            <h2>{{$product->title}}</h2>
                            <div class="quickview-ratting-review">
                                <div class="quickview-ratting-wrap">
                                    <div class="quickview-ratting">
                                        {{-- <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="yellow fa fa-star"></i>
                                                        <i class="fa fa-star"></i> --}}
                                        @php
                                        $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                        $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
                                        @endphp
                                        @for($i=1; $i<=5; $i++) @if($rate>=$i)
                                            <i class="yellow fa fa-star"></i>
                                            @else
                                            <i class="fa fa-star"></i>
                                            @endif
                                            @endfor
                                    </div>
                                    <a href="#"> ({{$rate_count}} customer review)</a>
                                </div>
                                <div class="quickview-stock">
                                    @if($product->stock >0)
                                    <span><i class="fa fa-check-circle-o"></i> {{$product->stock}} in stock</span>
                                    @else
                                    <span><i class="fa fa-times-circle-o text-danger"></i> {{$product->stock}} out
                                        stock</span>
                                    @endif
                                </div>
                            </div>
                            @php
                            $after_discount=($product->price-($product->price*$product->discount)/100);
                            @endphp
                            <h3><small><del class="text-muted">${{number_format($product->price,2)}}</del></small>
                                ${{number_format($after_discount,2)}} </h3>
                            <div class="quickview-peragraph">
                                <p>{!! html_entity_decode($product->summary) !!}</p>
                            </div>
                            @if($product->size)
                            <div class="size">
                                <h4>Size</h4>
                                <ul>
                                    @php
                                    $sizes=explode(',',$product->size);
                                    // dd($sizes);
                                    @endphp
                                    @foreach($sizes as $size)
                                    <li><a href="#" class="one">{{$size}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="size">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Size</h5>
                                        <select>
                                            @php
                                            $sizes=explode(',',$product->size);
                                            // dd($sizes);
                                            @endphp
                                            @foreach($sizes as $size)
                                            <option>{{$size}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="col-lg-6 col-12">
                                                        <h5 class="title">Color</h5>
                                                        <select>
                                                            <option selected="selected">orange</option>
                                                            <option>purple</option>
                                                            <option>black</option>
                                                            <option>pink</option>
                                                        </select>
                                                    </div> --}}
                                </div>
                            </div>
                            <form action="{{route('single-add-to-cart')}}" method="POST">
                                @csrf
                                <div class="quantity">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled"
                                                data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="hidden" name="slug" value="{{$product->slug}}">
                                        <input type="text" name="quant[1]" class="input-number" data-min="1"
                                            data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus"
                                                data-field="quant[1]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </div>
                                <div class="add-to-cart">
                                    <button type="submit" class="btn">Add to cart</button>
                                    <a href="{{route('add-to-wishlist',$product->slug)}}" class="btn min"><i
                                            class="ti-heart"></i></a>
                                </div>
                            </form>
                            <div class="default-social">
                                <!-- ShareThis BEGIN -->
                                <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
<!-- Modal end -->

@include('frontend.layouts.ownproperty')


@include('frontend.layouts.newsletter')


@endsection
@push('styles')
<style>
.pagination {
    display: inline-flex;
}

.filter_button {
    /* height:20px; */
    text-align: center;
    background: #F7941D;
    padding: 8px 16px;
    margin-top: 10px;
    color: white;
}



/* ********************************* */




.single-product .button-head-one {
    background: #000;
    opacity: 0.5;
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
    height: 52px;
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
    width:50% !important;
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

/* ************************************ */
</style>
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
{{-- <script>
        $('.cart').click(function(){
            var quantity=1;
            var pro_id=$(this).data('id');
            $.ajax({
                url:"{{route('add-to-cart')}}",
type:"POST",
data:{
_token:"{{csrf_token()}}",
quantity:quantity,
pro_id:pro_id
},
success:function(response){
console.log(response);
if(typeof(response)!='object'){
response=$.parseJSON(response);
}
if(response.status){
swal('success',response.msg,'success').then(function(){
document.location.href=document.location.href;
});
}
else{
swal('error',response.msg,'error').then(function(){
// document.location.href=document.location.href;
});
}
}
})
});
</script> --}}
<script>
$(document).ready(function() {
    /*----------------------------------------------------*/
    /*  Jquery Ui slider js
    /*----------------------------------------------------*/
    if ($("#slider-range").length > 0) {
        const max_value = parseInt($("#slider-range").data('max')) || 500;
        const min_value = parseInt($("#slider-range").data('min')) || 0;
        const currency = $("#slider-range").data('currency') || '';
        let price_range = min_value + '-' + max_value;
        if ($("#price_range").length > 0 && $("#price_range").val()) {
            price_range = $("#price_range").val().trim();
        }

        let price = price_range.split('-');
        $("#slider-range").slider({
            range: true,
            min: min_value,
            max: max_value,
            values: price,
            slide: function(event, ui) {
                $("#amount").val(currency + ui.values[0] + " -  " + currency + ui.values[1]);
                $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
            }
        });
    }
    if ($("#amount").length > 0) {
        const m_currency = $("#slider-range").data('currency') || '';
        $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
            "  -  " + m_currency + $("#slider-range").slider("values", 1));
    }
})
</script>
@endpush
