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


                                                        <ul class="nav flex-row flex-md-column myaccount-tabs nav-pills nav-pills-custom nav-tabs " id="myTabs" role="tablist"  aria-orientation="vertical">
                                                            @foreach($brands as $index => $brand)
                                                                <li class="nav-item">
                                                                    <a class="nav-link {{ $index == 0 ? 'active' : '' }}" id="tab{{ $index }}" data-toggle="tab" href="#content{{ $index }}" role="tab" aria-controls="content{{ $index }}" aria-selected="{{ $index == 0 ? 'true' : 'false' }}">{{ $brand['title'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>

                                                </div>

                                                <div class="col-lg-9 col-md-9 col-sm-12 py-4">

                                                    <div class="tab-content" id="myTabContent">
                                                        @foreach($brands as $index => $brand)
                                                            <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="content{{ $index }}" role="tabpanel" aria-labelledby="tab{{ $index }}">
                                                                {{-- {{ $brand['content'] }} --}}
                                                                <div class="container head-submenu">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <ul>
                                                                                <li>
                                                                                    <h6>Residential Property</h6>
                                                                                </li>
                                                                                <br>
                                                                                <li class="my-2"><a href="{{ route('product-grids') }}">
                                                                                        Apartments</a></li>
                                                                                <li class="my-2"><a href="{{ route('product-grids') }}">
                                                                                        Individual house</a></li>
                                                                                <li class="my-2"><a href="{{ route('product-grids') }}"> Pent
                                                                                        house</a></li>
                                                                                <li class="my-2"><a href="{{ route('product-grids') }}">
                                                                                        Cottages</a></li>
                                                                                <li class="my-2"><a href="{{ route('product-grids') }}">
                                                                                        Villa</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-4">

                                                                            <ul>
                                                                                <li>
                                                                                    <h6>Commercial Property</h6>
                                                                                </li>
                                                                                <br>
                                                                                <li class="my-2"><a href="{{ route('product-grids') }}">
                                                                                        Furnished retail shops</a></li>
                                                                                <li class="my-2"><a href="{{ route('product-grids') }}">
                                                                                        Unfurnished retail shops</a></li>

                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-4">

                                                                            <ul>
                                                                                <li>
                                                                                    <h6> Lands</h6>
                                                                                </li>
                                                                                <br>
                                                                                <li class="my-2"><a href="{{ route('product-grids') }}">
                                                                                        Empty lands</a></li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <!-- Tabs content -->


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / For Desktop Screen -->
                                <!-- For Mobile Screen -->
                                <div class="d-block d-lg-none">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a class="navs-menus" href="{{ route('product-grids') }}">Hot Shot Listings</a>

                                    <a   data-toggle="collapse"
                                        data-target="#collapseMain" aria-controls="collapseMain"><img src="/frontend/img/downarrow.png" alt="" width="20">
                                    </a>
                                     </div>

                                    <div id="collapseMain" class="collapse" aria-labelledby="headingOne">

                                        <div id="accordion">
                                            @foreach($brands as $index => $brand)

                                                    <div class="my-2" id="heading{{$index}}">
                                                        <h5 class="mb-0">
                                                            <button class="bg-transparent" data-toggle="collapse" data-target="#collapse{{$index}}" aria-expanded="true" aria-controls="collapse{{$index}}">
                                                                {{$brand['title']}}
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapse{{$index}}" class="collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{$index}}" data-parent="#accordion">
                                                        <div class="card-body">
                                                            @php
                                                            $category_lists=DB::table('categories')->get();
                                                            @endphp
                                                             @if($category_lists)
                                                             @foreach($category_lists as $cat)
                                                             @if($cat->is_parent==1)

                                                            <a class="mb-2" href="{{route('product-cat',$cat->slug)}}">{{$cat->title}}</a><br>

                                                            @endif
                                                            @endforeach
                                                            @endif
                                                            
                                                        </div>
                                                    </div>

                                            @endforeach
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
