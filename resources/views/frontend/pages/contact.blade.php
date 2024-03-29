@extends('frontend.layouts.master')

@section('title','Contact Us')

@section('main-content')


<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="contact-head">
            <div class="row ">
                <div class="col-lg-5 col-md-5 col-12">

                    <h2>Lets talk about your <br> dream house</h2>

                    <div class="single-head">
                        <div class="single-info mt-5 pt-3">
                            <img src="/frontend/img/Vector-c3.svg" alt="">
                            <div class="ml-4">
                                <h4 class="title">Call </h4>
                                <ul>
                                    <li><a href="callto:+91 9856327415">9779890316</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-info mt-5 pt-3">
                            <img src="/frontend/img/Vector-c.svg" alt="">
                            <div class="ml-4">

                                <h4 class="title">Email</h4>
                                <ul>
                                    <li><a href="mailto:info@dhiiraayarealty.com">info@dhiiraayarealty.com</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="single-info mt-5 pt-3">
                            <img src="/frontend/img/Vector-c2.svg" alt="">
                            <div class="ml-4">
                                <h4 class="title">Chat</h4>
                                <ul>
                                    <li><a href="https://wa.me/9779890316/" title="whatsapp chat" target="_blank">9779890316</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-12">


                    <div class="form-main">
                        <div class="title">

                        </div>
                        <form class="form-contact form contact_form" method="post" action="{{route('Sendemail')}}">
                            @csrf
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                            {{ session()->get('message') }}
                            </div>
                        @endif
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label>Your Name<span>*</span></label>
                                        <input name="name" id="name" type="text" placeholder="Enter your name">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label>Your Email<span>*</span></label>
                                        <input name="email" type="email" id="email" placeholder="Enter email address">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group message">
                                        <label>Your message<span>*</span></label>
                                        <textarea name="msg" id="msg" cols="30" rows="9"
                                            placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button class="btn-lgn" type="submit">Send Message</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->

<!-- Map Section -->
<!-- <div class="map-section">
		<div id="myMap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14130.857353934944!2d85.36529494999999!3d27.6952226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sne!2snp!4v1595323330171!5m2!1sne!2snp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div> -->
<!--/ End Map Section -->

<!-- Start Shop Newsletter  -->
@include('frontend.layouts.newsletter')
<!-- End Shop Newsletter -->
<!--================Contact Success  =================-->
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-success">Thank you!</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-success">Your message is successfully sent...</p>
            </div>
        </div>
    </div>
</div>

<!-- Modals error -->
<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-warning">Sorry!</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-warning">Something went wrong.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.modal-dialog .modal-content .modal-header {
    position: initial;
    padding: 10px 20px;
    border-bottom: 1px solid #e9ecef;
}

/* .modal-dialog .modal-content .modal-body {
    height: 100px;
    padding: 10px 20px;
} */

.modal-dialog .modal-content {
    width: 50%;
    border-radius: 0;
    margin: auto;
}
</style>
@endpush
@push('scripts')
<script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/js/contact.js') }}"></script>
@endpush
