<header class="header shop">


   
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container mt-4 mb-4">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg ">
                            <a class="navbar-brand" href="#"><img src="/frontend/img/dhhirayalogo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">	
                                    <div class="nav-inner">	
                                    <ul class="navbar-nav mr-auto">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="{{Request::path()=='home' ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
                                            <li class="{{Request::path()=='about-us' ? 'active' : ''}}"><a href="{{route('about-us')}}">The Realtors</a></li>
                                            <li class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif"><a href="{{route('product-grids')}}">Hot Shot Listings</a></li>												
                                                {{Helper::getHeaderCategory()}}
                                            <!-- <li class="{{Request::path()=='blog' ? 'active' : ''}}"><a href="{{route('blog')}}">Blog</a></li>									 -->
                                               
                                            <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Contact Us</a></li>
                                        </ul>
                                    </div>

                                   
                                </div>
                                <ul class="nav navbar-nav navbar-right">
                                    @auth 
                                @if(Auth::user()->role=='admin')
                                    <li> <a href="{{route('admin')}}"  target="_blank">Dashboard</a></li>
                                @else 
                                    <li> <a href="{{route('user')}}"  target="_blank">Dashboard</a></li>
                                @endif
                                <li><a href="{{route('user.logout')}}">Logout</a></li>

                            @else
                                <li>
                                    <div class="d-flex align-items-center">
                                        <img src="/frontend/img/Group 8.svg" alt="" width="25px">&nbsp;
                                    <a href="{{route('login.form')}}">SIGN IN</a>
                                    </div>
                                 <!-- <a href="{{route('register.form')}}">Register</a></li> -->
                            @endauth
                                    </ul>
                            </nav>
                            <!--/ End Main Menu -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->


</header>