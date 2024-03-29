@extends('frontend.layouts.master')

@section('title',' Hot Shot Listings')

@section('main-content')


		<form action="{{route('shop.filter')}}" method="POST">
		@csrf
			<!-- Product Style 1 -->
			<section class="product-area shop-sidebar shop-list shop section">
				<div class="container">
					<div class="row">

						<div class="col-lg-12 col-md-12 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Shop Top -->
                                    <div class="shop-top">
                                        <div class="shop-shorter">
                                            <div class="single-shorter">
                                                <select class="show pfilter" name="category"  onchange="this.form.submit();">
                                                    <option value="">Property Type</option>
                                                     @foreach($categorys as $key => $value)
                                                       <option value="{{ $key }}">{{ $value }}</option>
                                                 @endforeach
                                                </select>
                                            </div>
                                            <div class="single-shorter">
                                                 <select class="sortBy pfilter" name="brand"  onchange="this.form.submit();">
                                                     <option value="">City</option>
                                                     @foreach($brands as $key => $value)
                                                       <option value="{{ $key }}"
                                                    >{{ $value }}</option>
                                                 @endforeach
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
								@if(count($products))
									@foreach($products as $product)
									 	{{-- {{$product}} --}}
						    			<!-- Start Single List -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('product-detail',$product->slug)}}">
                                                        @php
                                                        $photo=explode(',',$product->photo);
                                                        @endphp
                                                        <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}" style="height:450px;" >


                                                    </a>
                                                    <div class="button-head-one">
                                                        <!-- <div class="product-action-one">
                                                            <a title="Wishlist" href="#"
                                                                class="wishlist" data-id="{{$product->id}}"><img
                                                                    src="/frontend/img/Vector.svg" alt=""></a>
                                                        </div> -->
                                                        <div class="product-action-one-2 px-2">
                                                            <a
                                                                href="#"><h6>{{$product->title}}</h6></a>
                                                                <br>
                                                                <a
                                                                href="#">{{$product->brand['title']}}</a>
                                                                <br>
                                                                <a
                                                                href="#">{{$product->area}}</a>
                                                                <br>
                                                                <a
                                                                href="#">{{$product->rooms}}</a>
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
                                                                <a data-toggle="modal" data-target="#exampleModal">
                                                                   View
                                                                </a>
                                                                @else
                                                            <a title="View the product"
                                                                href="{{route('product-detail',$product->slug)}}">View</a>
                                                               @endguest

                                                               @guest
                                                               <a class="position-relative btn-brochure"  title="Download the Brochure"
                                                                    href="{{route('login.form')}}"> Brochure</a>
                                                                    @elseif(Auth::user()->survey === 'pending')
                                                                    <a class="position-relative btn-brochure"  data-toggle="modal" data-target="#exampleModal">
                                                                         Brochure
                                                                     </a>
                                                                    @else
                                                                    <a class="position-relative btn-brochure"  href="{{ route('product.download', ['slug' => $product->slug]) }}"> Brochure</a>
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
										<!-- End Single List -->
									@endforeach
								@else
									<h4 class="text-warning" style="margin:100px auto;">There are no products.</h4>
								@endif
							</div>
							 <div class="row">
                            <div class="col-md-12 justify-content-center d-flex">
                                {{-- {{$products->appends($_GET)->links()}}  --}}
                            </div>
                          </div>

					</div>
				</div>
			</section>
			<!--/ End Product Style 1  -->
		</form>



			<section class="container-fluid-new">
<div class="container-fluid">
<div class="row align-items-center">
    <div class="col-md-6"><img src="/frontend/img/Group 103.png" alt="" class="group103img"></div>
    <div class="col-md-6">
        <h4>Hassle free buying your own property</h4>
        <p class="mt-5"> Strategy startup research & development equity burn rate<br> validation customer vesting period infrastructure seed round <br>bandwidth ecosystem infographic market.</p>
        <ul class="mt-5">
            <li class="mt-3"> <img src="/frontend/img/checklist.svg" alt="" width="20px">&nbsp; Business plan lean startup holy grail disruptive</li>
            <li class="mt-3"> <img src="/frontend/img/checklist.svg" alt="" width="20px">&nbsp; Crowdfunding beta prototype gen-z incubator niche market.</li>
            <li class="mt-3"> <img src="/frontend/img/checklist.svg" alt="" width="20px">&nbsp; Strategy startup research & development equity burn rate</li>
        </ul>
    </div>
</div>
</div>
</section>

			@include('frontend.layouts.newsletter')

@endsection
@push ('styles')
<style>
	 .pagination{
        display:inline-flex;
    }
	.filter_button{
        /* height:20px; */
        text-align: center;
        background:#F7941D;
        padding:8px 16px;
        margin-top:10px;
        color: white;
    }



/* ********************************* */




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
        $(document).ready(function(){
        /*----------------------------------------------------*/
        /*  Jquery Ui slider js
        /*----------------------------------------------------*/
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;
            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }

            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: price,
                slide: function (event, ui) {
                    $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            }
        if ($("#amount").length > 0) {
            const m_currency = $("#slider-range").data('currency') || '';
            $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
    </script>

@endpush
