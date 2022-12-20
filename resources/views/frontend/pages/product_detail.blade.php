@extends('frontend.layouts.master')

@section('meta')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="online shop, purchase, cart, ecommerce site, best online shopping">
	<meta name="description" content="{{$product_detail->summary}}">
	<meta property="og:url" content="{{route('product-detail',$product_detail->slug)}}">
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{$product_detail->title}}">
	<meta property="og:image" content="{{$product_detail->photo}}">
	<meta property="og:description" content="{{$product_detail->description}}">
@endsection
@section('title','E-SHOP || PRODUCT DETAIL')
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
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minina aliqua. Ut enim ad </p>
					</div>

					<div class="mt-4 text-center">
					<button class="btn-ma" id="b" >Book a visit</button>
                                <button class="btn-ma" id="g">Get a call</button>
					</div>
				</div>
				<div class="col-md-8">
					<img src="/frontend/img/Rectangle 3.png" alt="" width="100%" style="height: 450px ">
				</div>
			</div>
		</div>
	</section>

	<section class="mb-5 ">
		<div class="container mt-5">
		<div class="row">
            <div class="col-md-12 " >
                <!-- Tabs nav -->
                <div class="nav flex-row  nav-pills nav-pills-custom pro-nav" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                    <a class="nav-link mb-5 p-3 shadow active" id="v-pills-developer-tab" data-toggle="pill" href="#v-pills-developer" role="tab" aria-controls="v-pills-developer" aria-selected="true">
                        <span  class="font-weight-bold small text-uppercase">Developer</span></a>

                    <a class="nav-link mb-5 p-3 shadow" id="v-pills-other-detail-tab" data-toggle="pill" href="#v-pills-other-detail" role="tab" aria-controls="v-pills-other-detail" aria-selected="false">
                        <span  class="font-weight-bold small text-uppercase">Other details</span></a>

                    <a class="nav-link mb-5 p-3 shadow" id="v-pills-acquisition-tab" data-toggle="pill" href="#v-pills-acquisition" role="tab" aria-controls="v-pills-acquisition" aria-selected="false">
                        <span  class="font-weight-bold small text-uppercase">Acquisition</span></a>

                  
                    </div>
            </div>


            <div class="col-md-12">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active" id="v-pills-developer" role="tabpanel" aria-labelledby="v-pills-developer-tab">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white" id="v-pills-other-detail" role="tabpanel" aria-labelledby="v-pills-other-detail-tab">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
				</div>
                    
                    <div class="tab-pane fade shadow rounded bg-white" id="v-pills-acquisition" role="tabpanel" aria-labelledby="v-pills-acquisition-tab">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                   

                  
                </div>
            </div>
        </div>
		</div>
	</section>

	<section>
		<div class="container text-center">
			<h3 class="mb-3">Projects near by...</h3>
			<p>Strategy startup research & development equity burn rate validation customer vesting period infrastructure seed round bandwidth ecosystem infographic market.</p>

			
		</div>

	</section>

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
		.star-rating__ico:hover ~ .star-rating__ico:before,
		.star-rating__input:checked ~ .star-rating__ico:before {
		content: "\F005";
		}

	</style>
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    {{-- <script>
        $('.cart').click(function(){
            var quantity=$('#quantity').val();
            var pro_id=$(this).data('id');
            // alert(quantity);
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
							document.location.href=document.location.href;
						});
                    }
                }
            })
        });
    </script> --}}

@endpush