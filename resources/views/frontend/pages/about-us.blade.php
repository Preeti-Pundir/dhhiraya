@extends('frontend.layouts.master')

@section('title','E-SHOP || About Us')

@section('main-content')

	

	<div class="container-fluid  mt-5">
		<div class="row text-center about-first-row">
			<div class="col-lg-2 col-md-0"></div>
			<div class="col-lg-3 col-md-6"><img src="/frontend/img/about-img1.png" alt="" width="100%" style="height:250px"></div>
			<div class="col-lg-3 col-md-6"><img src="/frontend/img/about-img2.png" alt="" width="100%" style="height:250px"></div>
			<div class="col-lg-4 col-md-12 about-third-image"><img src="/frontend/img/about-img3.png" alt="" width="100%" style="height:250px"></div>
		</div>
	</div>

	<div class="container-fluid mt-5 mb-5 pb-4">
		<div class="row align-items-center">
			<div class="col-lg-5"><img src="/frontend/img/about-img5.png" alt="" width="100%"></div>
			<div class="col-lg-2"><h1>About US</h1></div>
			<div class="col-lg-5 about-second-col" style="background-color:#F1F1F1;"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est </p></div>
		</div>
	</div>

	<div class="container pt-5 pb-5">
		<div class="about-third-section">
		<p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum  sadipscing elitr</p>
		</div>
	</div>

	<div class="container mt-5">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<div >
				<h1 class="text-center mb-3">Trust</h1>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum </p>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-md-6 p-2"><img src="/frontend/img/about-img6.png" alt="" width="100%" style="height:200px" ></div>
					<div class="col-md-6 p-2"><img src="/frontend/img/about-img4.png" alt="" width="100%" style="height:200px" ></div>
					<div class="col-md-6 p-2"><img src="/frontend/img/about-img7.png" alt="" width="100%" style="height:200px" ></div>
					<div class="col-md-6 p-2"><img src="/frontend/img/about-img8.png" alt="" width="100%" style="height:200px" ></div>
				</div>
			</div>
		</div>
	</div>

<div class="container-fluid mt-5 mb-5">
	<div class="row align-items-center">
		<div class="col-md-4 text-center about-fifth-section">
			<h1>Exprience</h1>
		</div>
		<div class="col-md-8">
			
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
		</div>
	</div>
</div>

<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-md-5"><img src="/frontend/img/Rectangle 50.png" alt="" width="100%" style="height:200px" ></div>
		<div class="col-md-3"><img src="/frontend/img/Rectangle 52.png" alt="" width="100%" style="height:200px" ></div>
		<div class="col-md-4"><img src="/frontend/img/Rectangle 51.png" alt="" width="100%" style="height:200px" ></div>
	</div>
</div>

	@include('frontend.layouts.newsletter')
@endsection
