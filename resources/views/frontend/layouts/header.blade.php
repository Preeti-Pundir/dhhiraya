<header class="header shop">

    <nav>
        <div class=" container main-nav ">

            <div class="d-flex align-items-center justify-content-between">


                <div class="nav-left d-flex align-items-center justify-content-between ml-3">
                    <div class="main-logo"><a class="navbar-brand" href="{{url('/')}}"><img
                                src="{{asset ('/frontend/img/dhiiraaya-logo.svg') }}" style="width:150px" alt="">
                        </a>
                    </div>
                    <div class="nav-menu">
                        <ul class="menu-items pt-2">
                            <li class="side-logo d-block d-lg-none">
                                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset ('/frontend/img/dhiiraaya-logo.svg') }}" style="width:150px"
                                        alt="">
                                </a>
                            </li>

                            <li class="{{Request::path()=='/' ? 'active' : ''}}">
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="{{Request::path()=='about-us' ? 'active' : ''}} ">
                                <a href="{{route('about-us')}}">The Realtors</a>
                            </li>
                            <li
                                class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif">
                                <a href="{{route('product-grids')}}">Hot Shot Listings</a>
                            </li>
                            <!-- {{Helper::getHeaderCategory()}}
                           <li class="{{Request::path()=='blog' ? 'active' : ''}} "><a href="{{route('blog')}}">Blog</a></li>									 -->

                            <li class="{{Request::path()=='contact' ? 'active' : ''}} ">
                                <a href="{{route('contact')}}">Contact Us</a>
                            </li>




                        </ul>
                    </div>
                </div>

                <div class="nav-right mx-3">
                    @guest


                    <div class="curser-pointer">
                        <div class="d-flex align-items-center">
                            <img src="/frontend/img/Group 8.svg" alt="" width="30px">&nbsp;
                            <a href="{{route('login.form')}}">SIGN IN</a>
                        </div>
                    </div>

                    @else
                    <div class="curser-pointer">
                        <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="/frontend/img/Group 8.svg" class="user-icon" alt="" width="30px">&nbsp;
                            <span>{{Auth::user()->name}}</span>

                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('user.myaccount')}}">My Account</a>
                            @if(Auth::user()->role == "admin")
                            <a class="dropdown-item" href="{{route('admin')}}">Dashboard</a>
                            @else
                            <a class="dropdown-item" href="{{route('user')}}">Dashboard</a>
                            @endif
                            <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
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