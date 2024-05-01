        <div id="header" class="header section">
            <div class="header-top-section d-none d-lg-block">
                <div class="container">
                    <div class="header-top-wrapper">
                        <div class="header-top-info">
                            <ul>
                                <li><span><i class="fa fa-volume-control-phone"></i> <a href="tel:+91-1234567890">+91-1234567890</a></span> </li>
                                <li><span><i class="fa fa fa-whatsapp"></i> <a href="#" target="_blank">+91-1234567890</a></span> </li>
                                <li><span><i class="fa fa-envelope-o"></i> <a href="mailto:info@campusbull.com" target="_blank">info@campusbull.com</a></span> </li>
                            </ul>
                        </div>
                        <div class="header-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <!-- Header Wrapper Start  -->
                <div class="header-wrapper">

                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="{{route('index')}}"><img src="{{asset('public/front_css/assets/images/logo.png')}}" alt=""></a>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="header-menu d-none d-lg-block">
                        <ul class="main-menu">
                        <li><a href="@if(Auth::check()) {{route('home_user')}} @else {{route('index')}} @endif" class="active">Home </a></li>
                        <li><a href="{{route('about_us')}}">About Us</a></li>
                        <li><a href="{{route('help')}}">Help </a></li>
                        @if(Auth::check())
                        <li><a href="{{route('subscription_plans')}}">Subscription Plans </a></li>
                        <li><a href="{{route('user_dashboard')}}">Profile </a></li>
                        <li><a href="{{route('user_logout')}}">Logout</a></li>
                        @else
                        <li><a href="{{route('user-login')}}">Login</a></li>
                        <li><a href="{{route('user-register')}}">Register</a></li>
                        @endif
                        </ul>
                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Meta Start -->
                        <div class="header-meta">
                            <div class="header-login d-none d-lg-flex">
                                <a class="link" href="{{route('user-login')}}"><i class="fa fa-user-o"></i> Login</a>
                                <a class="link" href="{{route('user-register')}}">Register</a>
                            </div>
    
                            <div class="header-toggle d-lg-none">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
    
                        </div>
                    <!-- Header Meta End -->
                </div>
                <!-- Header Wrapper End -->
            </div>
        </div>
        <!-- Header End -->
        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">

            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="/"><img src="{{asset('public/front_css/assets/images/logo.png')}}" alt=""></a>
                </div>
                <!-- Offcanvas Logo End -->
                <button class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                    <ul class="main-menu">
                        <li><a href="@if(Auth::check()) {{route('home_user')}} @else {{'/'}} @endif">Home </a></li>
                        <li><a href="{{route('about_us')}}">About Us</a></li>
                        <li><a href="{{route('help')}}">Help </a></li>
                        @if(Auth::check())
                        <li><a href="{{route('subscription_plans')}}">Subscription Plans </a></li>
                        <li><a href="{{route('user_dashboard')}}">Profile </a></li>
                        <li><a href="{{route('user_logout')}}">Logout</a></li>
                        @else
                        <li><a href="{{route('user-login')}}">Login</a></li>
                        <li><a href="{{route('user-register')}}">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <!-- Offcanvas End -->


        @if(Auth::check())
        <div class="section bg-color-1" style="border-bottom: 1px solid #dddddd6b;">
        <div class="container mt-3 mb-2">
            <div class="bg-custom-theme">
            <ul class="navbar-navs list">
                <li class="nav-item ">
                <a href="{{route('home_user')}}" class="custom-link">Announcements & Events</a>
                </li>
                <li class="nav-item">
                <a href="{{route('closing_rank')}}" class="custom-link">Closing Ranks </a>
                </li>
                <li class="nav-item">
                <a href="{{route('all_india_counselings')}}" class="custom-link">All India Counselings</a>
                </li>
                <li class="nav-item">
                <a href="{{route('state_wise_counselings')}}" class="custom-link">State Wise Counselings</a>
                </li>
                <li class="nav-item">
                <a   @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('student_report')}}" @endif  class="custom-link">Student Report</a>
                </li>
               <li class="nav-item">
                    <a href="{{route('deemed_details')}}" class="custom-link">Deemed Details</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('get_college_hospital')}}" class="custom-link">College Hospital Details</a>
                </li>
                <li class="nav-item">
                    <a  href="/dnb-beds"  class="custom-link">DNB Hospital By Details</a>
                </li>
        </ul>
            </div>
        </div>
        </div>
        @endif