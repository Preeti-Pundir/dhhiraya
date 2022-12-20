@extends('frontend.layouts.master')

@section('title','E-Shop || Login Page')

@section('main-content')

<!-- Demo header-->
<section class="header">
    <div class="container ">
       


        <div class="row">
            <div class="col-md-4 pt-5 pb-5" >
                <!-- Tabs nav -->
                <div class="nav flex-column myaccount-tabs nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-5 p-3 shadow active" id="v-pills-saved-properties-tab" data-toggle="pill" href="#v-pills-saved-properties" role="tab" aria-controls="v-pills-saved-properties" aria-selected="true">
                        <span  class="font-weight-bold small text-uppercase">saved properties</span></a>

                    <a class="nav-link mb-5 p-3 shadow" id="v-pills-visited-properties-tab" data-toggle="pill" href="#v-pills-visited-properties" role="tab" aria-controls="v-pills-visited-properties" aria-selected="false">
                        <span  class="font-weight-bold small text-uppercase">Visited properties</span></a>

                    <a class="nav-link mb-5 p-3 shadow" id="v-pills-faqs-tab" data-toggle="pill" href="#v-pills-faqs" role="tab" aria-controls="v-pills-faqs" aria-selected="false">
                        <span  class="font-weight-bold small text-uppercase">FAQs</span></a>

                    <a class="nav-link mb-5 p-3 shadow" id="v-pills-terms-tab" data-toggle="pill" href="#v-pills-terms" role="tab" aria-controls="v-pills-terms" aria-selected="false">
                        <span  class="font-weight-bold small text-uppercase">Terms of service</span></a>
                    
                        <a class="nav-link mb-5 p-3 shadow " href="{{Route('contact')}}"  >
                        <span  class="font-weight-bold small text-uppercase">Contact us</span></a>
                    </div>
            </div>


            <div class="col-md-8">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-saved-properties" role="tabpanel" aria-labelledby="v-pills-saved-properties-tab">
                       <div class="container ">
                        <div class="row properties align-items-center ">
                            <div class="col-md-4"><img src="/frontend/img/Rectangle 51.png" alt=""></div>
                            <div class="col-md-5">
                                <h4>Bedroom 2</h4>
                                <p style="line-height:2">Lorem ipsum dolor sit amet, consectetur adm ad </p>
                            </div>
                            <div class="col-md-3">
                                <button class="btn-ma" id="b" >Book a visit</button><br>
                                <button class="btn-ma" id="g">Get a call</button>
                            </div>
                        </div>

                        <div class="row properties align-items-center mb-4 mt-4">
                            <div class="col-md-4"><img src="/frontend/img/Rectangle 51.png" alt=""></div>
                            <div class="col-md-5">
                                <h4>Bedroom 2</h4>
                                <p style="line-height:2">Lorem ipsum dolor sit amet, consectetur adm ad </p>
                            </div>
                            <div class="col-md-3">
                                <button class="btn-ma" id="b" >Book a visit</button><br>
                                <button class="btn-ma" id="g">Get a call</button>
                            </div>
                        </div>

                        <div class="row properties align-items-center">
                            <div class="col-md-4"><img src="/frontend/img/Rectangle 51.png" alt=""></div>
                            <div class="col-md-5">
                                <h4>Bedroom 2</h4>
                                <p style="line-height:2">Lorem ipsum dolor sit amet, consectetur adm ad </p>
                            </div>
                            <div class="col-md-3">
                                <button class="btn-ma" id="b" >Book a visit</button><br>
                                <button class="btn-ma" id="g">Get a call</button>
                            </div>
                        </div>
                       </div>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-visited-properties" role="tabpanel" aria-labelledby="v-pills-visited-properties-tab">
                    <div class="container ">
                        <div class="row properties align-items-center ">
                            <div class="col-md-4"><img src="/frontend/img/Rectangle 51.png" alt=""></div>
                            <div class="col-md-5">
                                <h4>Bedroom 2</h4>
                                <p style="line-height:2">Lorem ipsum dolor sit amet, consectetur adm ad </p>
                            </div>
                            <div class="col-md-3">
                                <button class="btn-ma" id="b" >Book a visit</button><br>
                                <button class="btn-ma" id="g">Get a call</button>
                            </div>
                        </div>

                        <div class="row properties align-items-center mb-4 mt-4">
                            <div class="col-md-4"><img src="/frontend/img/Rectangle 51.png" alt=""></div>
                            <div class="col-md-5">
                                <h4>Bedroom 2</h4>
                                <p style="line-height:2">Lorem ipsum dolor sit amet, consectetur adm ad </p>
                            </div>
                            <div class="col-md-3">
                                <button class="btn-ma" id="b" >Book a visit</button><br>
                                <button class="btn-ma" id="g">Get a call</button>
                            </div>
                        </div>

                        <div class="row properties align-items-center">
                            <div class="col-md-4"><img src="/frontend/img/Rectangle 51.png" alt=""></div>
                            <div class="col-md-5">
                                <h4>Bedroom 2</h4>
                                <p style="line-height:2">Lorem ipsum dolor sit amet, consectetur adm ad </p>
                            </div>
                            <div class="col-md-3">
                                <button class="btn-ma" id="b" >Book a visit</button><br>
                                <button class="btn-ma" id="g">Get a call</button>
                            </div>
                        </div>
                       </div>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-faqs" role="tabpanel" aria-labelledby="v-pills-faqs-tab">
                        <h4 class="font-italic mb-4">FAQs</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-terms" role="tabpanel" aria-labelledby="v-pills-terms-tab">
                        <h4 class="font-italic mb-4">Terms of service</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                  
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
