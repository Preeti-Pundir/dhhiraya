<header class="header shop">

    <nav>
        <div class=" container main-nav ">

            <div class="d-flex align-items-center justify-content-between">

                <div class="nav-left d-flex align-items-center justify-content-between ml-3">
                    <div class="main-logo"><a class="navbar-brand" href="{{ url('/') }}"><img
                                src="{{ asset('/frontend/img/dhiiraaya-logo.svg') }}" style="width:150px" alt="">
                        </a>
                    </div>
                    <div class="nav-menu">
                        <ul class="menu-items pt-2">
                            <li class="side-logo d-block d-lg-none">
                                <a class="navbar-brand" href="{{ url('/') }}"><img
                                        src="{{ asset('/frontend/img/dhiiraaya-logo.svg') }}" style="width:150px"
                                        alt="">
                                </a>
                            </li>
                            <li class="{{ Request::path() == '/' ? 'activated' : '' }}">
                                <a class="navs-menus" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ Request::path() == 'about-us' ? 'activated' : '' }} ">
                                <a class="navs-menus" href="{{ route('about-us') }}">The Realtors</a>

                            </li>
                            <li class="@if (Request::path() == 'product-grids' || Request::path() == 'product-lists') activated @endif subnav ">
                                <!-- fot Desktop Screen -->
                                <div class="d-none d-lg-block">
                                    <a class="navs-menus" href="{{ route('product-grids') }}">Hot Shot Listings</a>
                                    <div class="subnav-content-desktop">
                                        <div class="container my-5">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-3 col-sm-12 py-4 ">
                                                    <!-- Tabs nav -->
                                                    <div class="nav flex-row flex-md-column myaccount-tabs nav-pills nav-pills-custom  pb-5 pt-3"
                                                        id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                        <a class="nav-link py-3 text-right shadow active"
                                                            id="v-pills-first-properties-tab" data-toggle="pill"
                                                            href="#v-pills-first-properties" role="tab"
                                                            aria-controls="v-pills-first-properties"
                                                            aria-selected="true">
                                                            <span class="font-weight-bold small text-uppercase">Delhi
                                                                Ncr</span></a>

                                                        <a class="nav-link py-3 text-right shadow"
                                                            id="v-pills-second-properties-tab" data-toggle="pill"
                                                            href="#v-pills-second-properties" role="tab"
                                                            aria-controls="v-pills-second-properties"
                                                            aria-selected="false">
                                                            <span
                                                                class="font-weight-bold small text-uppercase">Gurgaon</span></a>

                                                        <a class="nav-link py-3 text-right shadow"
                                                            id="v-pills-third-tab" data-toggle="pill"
                                                            href="#v-pills-third" role="tab"
                                                            aria-controls="v-pills-third" aria-selected="false">
                                                            <span
                                                                class="font-weight-bold small text-uppercase">Noida</span></a>

                                                        <a class="nav-link py-3 text-right shadow"
                                                            id="v-pills-fourth-tab" data-toggle="pill"
                                                            href="#v-pills-fourth" role="tab"
                                                            aria-controls="v-pills-fourth" aria-selected="false">
                                                            <span
                                                                class="font-weight-bold small text-uppercase">Chandigargh</span></a>
                                                         {{-- @foreach ($brands as $brand)
                                                                    <a class="nav-link py-3 text-right shadow active" id="v-pills-{{ $brand->slug }}-properties-tab" data-toggle="pill"
                                                                    href="#v-pills-{{ $brand->slug }}-properties" role="tab" aria-controls="v-pills-{{ $brand->slug }}-properties"
                                                                    aria-selected="true">
                                                                    <span class="font-weight-bold small text-uppercase">{{ $brand->title }}</span></a>
                                                            @endforeach --}}

                                                    </div>
                                                </div>

                                                <div class="col-lg-9 col-md-9 col-sm-12 py-4">
                                                    <!-- Tabs content -->
                                                    {{-- @foreach ($brands as $brand)
                                                        <div class="tab-pane fade shadow rounded bg-white  show "
                                                            id="v-pills-{{ $brand->slug }}-properties" role="tabpanel"
                                                            aria-labelledby="v-pills-{{ $brand->slug }}-properties-tab">
                                                            <div class="container head-submenu">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <ul>
                                                                            <li>
                                                                                <h6>Residential Property</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Apartments</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Individual house</a></li>
                                                                            <li class="my-2"><a href=""> Pent
                                                                                    house</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Cottages</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Villa</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">

                                                                        <ul>
                                                                            <li>
                                                                                <h6>Commercial Property</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Furnished retail shops</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Unfurnished retail shops</a></li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">

                                                                        <ul>
                                                                            <li>
                                                                                <h6> Lands</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Empty lands</a></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach --}}
                                                    <div class="tab-content" id="v-pills-tabContent">
                                                        <div class="tab-pane fade shadow rounded bg-white show active"
                                                            id="v-pills-first-properties" role="tabpanel"
                                                            aria-labelledby="v-pills-first-properties-tab">
                                                            <div class="container head-submenu">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <ul>
                                                                            <li>
                                                                                <h6>Residential Property</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Apartments</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Individual house</a></li>
                                                                            <li class="my-2"><a href=""> Pent
                                                                                    house</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Cottages</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Villa</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">

                                                                        <ul>
                                                                            <li>
                                                                                <h6>Commercial Property</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Furnished retail shops</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Unfurnished retail shops</a></li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">

                                                                        <ul>
                                                                            <li>
                                                                                <h6> Lands</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Empty lands</a></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade shadow rounded bg-white"
                                                            id="v-pills-second-properties" role="tabpanel"
                                                            aria-labelledby="v-pills-second-properties-tab">
                                                            <div class="container head-submenu">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <ul>
                                                                            <li>
                                                                                <h6>Residential Property</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Apartments</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Individual house</a></li>
                                                                            <li class="my-2"><a href=""> Pent
                                                                                    house</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Cottages</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Villa</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">

                                                                        <ul>
                                                                            <li>
                                                                                <h6>Commercial Property</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Furnished retail shops</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Unfurnished retail shops</a></li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">

                                                                        <ul>
                                                                            <li>
                                                                                <h6> Lands</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Empty lands</a></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade shadow rounded bg-white"
                                                            id="v-pills-third" role="tabpanel"
                                                            aria-labelledby="v-pills-third-tab">
                                                            <div class="container head-submenu">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <ul>
                                                                            <li>
                                                                                <h6>Residential Property</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Apartments</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Individual house</a></li>
                                                                            <li class="my-2"><a href=""> Pent
                                                                                    house</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Cottages</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Villa</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">

                                                                        <ul>
                                                                            <li>
                                                                                <h6>Commercial Property</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Furnished retail shops</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Unfurnished retail shops</a></li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">

                                                                        <ul>
                                                                            <li>
                                                                                <h6> Lands</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Empty lands</a></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade shadow rounded bg-white"
                                                            id="v-pills-fourth" role="tabpanel"
                                                            aria-labelledby="v-pills-fourth-tab">
                                                            <div class="container head-submenu">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <ul>
                                                                            <li>
                                                                                <h6>Residential Property</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Apartments</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Individual house</a></li>
                                                                            <li class="my-2"><a href=""> Pent
                                                                                    house</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Cottages</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Villa</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">

                                                                        <ul>
                                                                            <li>
                                                                                <h6>Commercial Property</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Furnished retail shops</a></li>
                                                                            <li class="my-2"><a href="">
                                                                                    Unfurnished retail shops</a></li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">

                                                                        <ul>
                                                                            <li>
                                                                                <h6> Lands</h6>
                                                                            </li>
                                                                            <br>
                                                                            <li class="my-2"><a href="">
                                                                                    Empty lands</a></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / For Desktop Screen -->
                                <!-- For Mobile Screen -->
                                <div class="d-block d-lg-none">
                                    <a class="navs-menus" href="{{ route('product-grids') }}" data-toggle="collapse"
                                        data-target="#collapseMain" aria-controls="collapseMain">Hot Shot Listings
                                    </a>

                                    <div id="collapseMain" class="collapse" aria-labelledby="headingOne">


                                        <div class="location-div mx-1 my-2">
                                            <a data-toggle="collapse" data-target="#locationOne"
                                                aria-controls="locationOne"> Delhi Ncr </a>

                                            <div id="locationOne" class="collapse" aria-labelledby="headingOne">

                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#fcategoryOne"
                                                        aria-controls="fcategoryOne"> Residential Property </a>
                                                    <div id="fcategoryOne" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Apartments</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#fcategoryTwo"
                                                        aria-controls="fcategoryTwo"> Commercial Property </a>
                                                    <div id="fcategoryTwo" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Furnished retail shops</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#fcategoryThree"
                                                        aria-controls="fcategoryThree"> Lands </a>
                                                    <div id="fcategoryThree" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Empty lands</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>




                                        </div>
                                        <div class="location-div mx-1 my-2">
                                            <a data-toggle="collapse" data-target="#locationTwo"
                                                aria-controls="locationTwo"> Gurgaon</a>

                                            <div id="locationTwo" class="collapse" aria-labelledby="headingOne">

                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#scategoryOne"
                                                        aria-controls="scategoryOne"> Residential Property</a>
                                                    <div id="scategoryOne" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Apartments</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#scategoryTwo"
                                                        aria-controls="scategoryTwo"> Commercial Property</a>
                                                    <div id="scategoryTwo" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Furnished retail shops</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#scategoryThree"
                                                        aria-controls="scategoryThree"> Lands</a>
                                                    <div id="scategoryThree" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Empty lands</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>




                                        </div>
                                        <div class="location-div mx-1 my-2">
                                            <a data-toggle="collapse" data-target="#locationThree"
                                                aria-controls="locationThree">Noida</a>

                                            <div id="locationThree" class="collapse" aria-labelledby="headingOne">

                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#tcategoryOne"
                                                        aria-controls="tcategoryOne"> Residential Property</a>
                                                    <div id="tcategoryOne" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Apartments</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#tcategoryTwo"
                                                        aria-controls="tcategoryTwo"> Commercial Property</a>
                                                    <div id="tcategoryTwo" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Furnished retail shops</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#tcategoryThree"
                                                        aria-controls="tcategoryThree"> Lands</a>
                                                    <div id="tcategoryThree" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Empty lands</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>




                                        </div>
                                        <div class="location-div mx-1 my-2">
                                            <a data-toggle="collapse" data-target="#locationFour"
                                                aria-controls="locationFour"> Chandigargh</a>

                                            <div id="locationFour" class="collapse" aria-labelledby="headingOne">

                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#focategoryOne"
                                                        aria-controls="focategoryOne"> Residential Property</a>
                                                    <div id="focategoryOne" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Apartments</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#focategoryTwo"
                                                        aria-controls="focategoryTwo"> Commercial Property</a>
                                                    <div id="focategoryTwo" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Furnished retail shops</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="category-div">
                                                    <a data-toggle="collapse" data-target="#focategoryThree"
                                                        aria-controls="focategoryThree"> Lands</a>
                                                    <div id="focategoryThree" class="collapse"
                                                        aria-labelledby="headingOne">
                                                        <div class="container my-2">
                                                            <a href="#">Empty lands</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>




                                        </div>

                                        <!-- /For Mobile Screen -->
                                    </div>
                                </div>
                            </li>
                            <li class="{{ Request::path() == 'contact' ? 'activated' : '' }} ">
                                <a class="navs-menus" href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="nav-right mx-2">
                    @guest
                        <div class="curser-pointer">
                            <div class="d-flex align-items-center">
                                <img src="/frontend/img/Group 8.svg" alt="" width="30px">&nbsp;
                                <a href="{{ route('login.form') }}">SIGN IN</a>
                            </div>
                        </div>
                    @else
                        <div class="curser-pointer">
                            <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="/frontend/img/Group 8.svg" class="user-icon" alt=""
                                    width="30px">&nbsp;
                                <span>{{ Auth::user()->name }}</span>

                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('user.myaccount') }}">My Account</a>
                                @if (Auth::user()->role == 'admin')
                                    <a class="dropdown-item" href="{{ route('admin') }}">Dashboard</a>
                                @else
                                    <a class="dropdown-item" href="{{ route('user') }}">Dashboard</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                            </div>

                        </div>


                    @endguest

                    <div class="hamburger mx-3">
                        <div class="line one"></div>
                        <div class="line two"></div>
                        <div class="line three"></div>
                    </div>

                </div>


            </div>
        </div>
    </nav>

    <script>
        const hamburger = document.querySelector(".hamburger");
        const lineone = document.querySelector(".one");
        const linetwo = document.querySelector(".two");
        const linethree = document.querySelector(".three");
        const logo = document.querySelector(".main-logo");
        const menu = document.querySelector(".nav-menu");
        hamburger.addEventListener("click", () => {
            menu.classList.toggle('show')
            lineone.classList.toggle('change')
            linetwo.classList.toggle('change')
            linethree.classList.toggle('change')
            logo.classList.toggle('hide');
        })
    </script>



    <script>
        const header = document.querySelector("header");
        window.addEventListener("scroll", () => {
            header.classList.toggle("fixed", window.scrollY > 0);
        })
    </script>


</header>
