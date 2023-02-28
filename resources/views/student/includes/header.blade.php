
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BHMS Academy</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="text/css" href="{{assets('student/css/bootstrap-icons.css')}}" rel="stylesheet">
    <link type="text/css" href="{{assets('student/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{assets('student/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{assets('student/css/bvselect.css')}}">
    <link type="text/css" href="{{assets('student/css/reset.css')}}" rel="stylesheet">
    <link type="text/css" href="{{assets('student/css/style.css')}}" rel="stylesheet">
    <link type="text/css" href="{{assets('student/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{assets('student/css/toastr.css')}}">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

</head>

<body>
<header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md">
                <a class="logo" href="{{route('index')}}"><img src="{{url('/')}}/public/student/images/logo.svg" width="144" height="60" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar">
                    <span class="bi bi-list"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header">
                        <a href="index.html"><img src="{{url('/')}}/public/student/images/logo.svg" width="100" height="42" alt="Logo"></a>
                        <button type="button" class="btn-close p-0 pe-1" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form class="search-form">
                            <input class="form-control" type="search" placeholder="Search for a course">
                            <i class="bi bi-search"></i>
                        </form>
                        <ul class="navbar-nav align-items-center justify-content-end flex-grow-1">
                         @if(Auth::user() && Auth::user()->is_teacher==0)
                        <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}/teacher/become_teacher">Become a Teacher</a>
                            </li>

                        @endif

                        @if(Auth::user())
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('mylearning.index')}}">My Courses</a>
                            </li>
                        @endif
                            <li class="nav-item">
                                <a class="cart-btn" href="{{route('cart.index')}}"><i class="bi bi-cart"></i></a>
                            </li>
                            @if(empty(Auth::id()))
                            <li class="nav-item">
                                <a class="border-btn" href="{{route('login.index')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="theme-btn" href="{{route('signup.index')}}">Sign up</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                @if(Auth::id())
                <div class="dropdown nav-item">
                    <a href="javaceript:void(0);" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{url('/')}}/public/student/images/userImg.jpg" alt="User" width="50" height="50" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end fade-up" aria-labelledby="dropdownUser">
                        <div class="d-flex mt-2 mb-3">
                            <img src="{{url('/')}}/public/student/images/userImg.jpg" alt="User" width="50" height="50"
                                class="rounded-circle flex-shrink-0">
                            <div class="ms-3">
                                <h5 class="mb-1 font-16 text-skyblue font-medium">{{Auth::user()->name}}</h5>
                                <span class="font-14 text-darkblue font-regular">{{Auth::user()->email}}</span>
                            </div>
                        </div>
                        <li><a class="drop-item" href="{{route('account.index')}}">Profile and settings</a></li>
                        <li><a class="drop-item" href="{{route('mylearning.index')}}">My learning </a></li>
                        <li><a class="drop-item" href="{{route('cart.index')}}">My cart</a></li>
                        <li class="dropdown-divider my-2 mx-n2"></li>
                        <li><a class="drop-item" href="{{route('messages.index')}}">Messages</a></li>
                        <li><a class="drop-item" href="{{route('purchase_history.index')}}">Purchase History</a></li>
                        <li><a class="drop-item" href="{{route('my_redemption_coupons.index')}}">My Redemption
                                coupons</a></li>
                        <li><a class="drop-item" href="{{route('refer_and_earn.index')}}">Refer and earn</a></li>
                        @if(Auth::user() && Auth::user()->is_teacher)
                        <li><a class="drop-item" href="{{route('teacher.dashboard')}}">Teacher Dashboard</a>
                        @endif
                        </li>
                        <li class="dropdown-divider my-2 mx-n2"></li>
                        <li><a class="drop-item" href="{{url('logout')}}">Log out</a></li>
                    </ul>
                </div>
                @endif
            </nav>
        </div>
    </header>
    <!-- Header -->
