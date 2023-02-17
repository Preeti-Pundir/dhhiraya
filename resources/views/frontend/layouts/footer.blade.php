<!-- Start Footer Area -->
<footer class="footer">
    <!-- Footer Top -->
    <!-- <div class="footer-top section"> -->
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
                <!-- Single Widget -->
                <div class="single-footer about">
                    <div class="logo">
                        <!-- <a href="index.html"><img src="{{ asset('backend/img/dhhirayalogo.png') }}" alt="#"></a> -->
                        <a href="index.html"><img src="{{ asset('/frontend/img/dhiiraaya-logo.svg') }}"
                                style="width:150px" alt="#"></a>
                    </div>
                    @php
                        $settings = DB::table('settings')->get();
                    @endphp
                    <p class="text ">Funding freemium long tail hypotheses first mover advantage assets ownership niche
                        market startup</p>

                    <!-- <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">
@foreach ($settings as $data)
{{ $data->phone }}
@endforeach

</a></span></p> -->
                    <p class="info mt-4"><a href="mailto:dewahosting@mail.com">dewahosting@mail.com</a></p>
                    <p class="info "><a href="callto:+91 9856327415">9856327415</a></p>
                </div>
                <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                <!-- Single Widget -->
                <div class="single-footer links">
                    <h4>Services</h4>
                    <ul>

                        <li><a href="{{route('product-lists')}}">Commercial Property</a></li>
                        <li><a href="{{route('product-lists')}}">Residential Property</a></li>
                        <!-- <li><a href="{{ route('contact') }}">Contact Us</a></li> -->
                        <li><a href="{{route('product-lists')}}">Holiday homes</a></li>



                    </ul>
                </div>
                <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                <!-- Single Widget -->
                <div class="single-footer links">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="{{ route('about-us') }}">About</a></li>
                        <li><a href="">Our Team</a></li>
                        <!-- <li><a href="#">Money-back</a></li> -->
                        <li><a href="">Policy</a></li>

                    </ul>
                </div>
                <!-- End Single Widget -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Widget -->
                <div class="single-footer social">
                    <h4>Address</h4>
                    <!-- Single Widget -->
                    <div class="contact">
                        <ul>
                            <li>123 Lorem Ipsum Street</li>
                            <li>Jakarta, Indonesia</li>
                            <!-- <li>
@foreach ($settings as $data)
{{ $data->address }}
@endforeach
</li>
         <li>
@foreach ($settings as $data)
{{ $data->email }}
@endforeach
</li>
         <li>
@foreach ($settings as $data)
{{ $data->phone }}
@endforeach
</li> -->
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                    <!-- <div class="sharethis-inline-follow-buttons"></div> -->
                </div>
                <!-- End Single Widget -->
            </div>
        </div>
    </div>
    <!-- </div> -->
    <!-- End Footer Top -->
    <div class="copyright ">
        <div class="container pt-3 pb-3">
            <div class="row text-center">
                <div class="col-lg-4 col-md-12">
                    <p>Dhiiraayahomes.com</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <p>Powered by Avidus Interactive</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <p>Copyright © 2023</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /End Footer Area -->

<!-- Jquery -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-migrate-3.0.0.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- Slicknav JS -->
<script src="{{ asset('frontend/js/slicknav.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('frontend/js/owl-carousel.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('frontend/js/magnific-popup.js') }}"></script>
<!-- Waypoints JS -->
<script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
<!-- Countdown JS -->
<script src="{{ asset('frontend/js/finalcountdown.min.js') }}"></script>
<!-- Nice Select JS -->
<script src="{{ asset('frontend/js/nicesellect.js') }}"></script>
<!-- Flex Slider JS -->
<script src="{{ asset('frontend/js/flex-slider.js') }}"></script>
<!-- ScrollUp JS -->
<script src="{{ asset('frontend/js/scrollup.js') }}"></script>
<!-- Onepage Nav JS -->
<script src="{{ asset('frontend/js/onepage-nav.min.js') }}"></script>
{{-- Isotope --}}
<script src="{{ asset('frontend/js/isotope/isotope.pkgd.min.js') }}"></script>
<!-- Easing JS -->
<script src="{{ asset('frontend/js/easing.js') }}"></script>

<!-- Active JS -->
<script src="{{ asset('frontend/js/active.js') }}"></script>


@stack('scripts')
<script>
    setTimeout(function() {
        $('.alert').slideUp();
    }, 5000);
    $(function() {
        // ------------------------------------------------------- //
        // Multi Level dropdowns
        // ------------------------------------------------------ //
        $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
            event.preventDefault();
            event.stopPropagation();

            $(this).siblings().toggleClass("show");


            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });

        });
    });
</script>
