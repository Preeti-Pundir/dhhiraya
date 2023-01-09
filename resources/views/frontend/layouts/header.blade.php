<header class="header shop">


    <nav>
        <div class=" container py-5">

            <div class="d-flex align-items-center justify-content-between">
                
                
                <div class="nav-left d-flex align-items-center justify-content-between">
                    <div class="main-logo mr-5"><a class="navbar-brand" href="{{url('/')}}"><img src="/frontend/img/dhhirayalogo.png"
                                                    alt=""></a>
                                                </div>
                    <div class="nav-menu">
                        <ul class="menu-items d-flex">

                            <li class="{{Request::path()=='home' ? 'active' : ''}}"><a
                                                        href="{{route('home')}}">Home</a></li>
                                                <li class="{{Request::path()=='about-us' ? 'active' : ''}} mx-4"><a
                                                        href="{{route('about-us')}}">The Realtors</a></li>
                                                <li
                                                    class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif">
                                                    <a href="{{route('product-grids')}}">Hot Shot Listings</a></li>
                                                <!-- {{Helper::getHeaderCategory()}}
                                                <li class="{{Request::path()=='blog' ? 'active' : ''}} mx-4"><a href="{{route('blog')}}">Blog</a></li>									 -->

                                                <li class="{{Request::path()=='contact' ? 'active' : ''}} mx-4"><a
                                                        href="{{route('contact')}}">Contact Us</a></li>




                        </ul>
                    </div>
                    </div>

                <div class="nav-right d-flex align-items-center justify-content-between">
                @guest
                                 
                                    
                                 <div class="curser-pointer">
                                     <div class="d-flex align-items-center">
                                         <img src="/frontend/img/Group 8.svg" alt="" width="30px">&nbsp;
                                         <a href="{{route('login.form')}}">SIGN IN</a>
                                     </div>
                                 </div>

                                 @else
                                 <div class="curser-pointer">
                                         <div class="" type="button"
                                             id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                             aria-expanded="false">
                                             <img src="/frontend/img/Group 8.svg" class="user-icon" alt="" width="30px">&nbsp;
                                             <span class="uname">{{Auth::user()->name}}</span>
                                             
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

                                     <div class="hamburger">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                     </div>

                </div>
            
            </div>
        </div>
    </nav>

    <script>
        const hamburger = document.querySelector(".hamburger");
        const menu = document.querySelector(".nav-menu");
        hamburger.addEventListener("click" , ()=> {
                menu.classList.toggle('show')
        });
    </script>

    <script>
        const header = document.querySelector("header");
        window.addEventListener("scroll", () => {
                header.classList.toggle("fixed",window.scrollY > 0 );    
        })
    </script>


</header>


