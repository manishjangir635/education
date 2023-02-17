
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BHMS Academy</title>
    <link type="text/css" href="{{asset('public/front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('public/front/css/bootstrap-icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/front/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/bvselect.css')}}">
    <link type="text/css" href="{{asset('public/front/css/reset.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('public/front/css/style.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('public/front/css/responsive.css')}}" rel="stylesheet">
</head>

<body>
<header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md">
                <a class="logo" href="{{route('index')}}"><img src="{{asset('public/front/images/logo.svg')}}" width="144" height="60" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar">
                    <span class="bi bi-list"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header">
                        <a href="index.html"><img src="{{asset('public/front/images/logo.svg')}}" width="100" height="42" alt="Logo"></a>
                        <button type="button" class="btn-close p-0 pe-1" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form class="search-form">
                            <input class="form-control" type="search" placeholder="Search for a course">
                            <i class="bi bi-search"></i>
                        </form>
                        <ul class="navbar-nav align-items-center justify-content-end flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">Become a Teacher</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my-learning.html">My Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="cart-btn" href="shopping-cart.html"><i class="bi bi-cart"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="border-btn" href="{{route('login.index')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="theme-btn" href="{{route('signup.index')}}">Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown nav-item">
                    <a href="javaceript:void(0);" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('public/front/images/userImg.jpg')}}" alt="User" width="50" height="50" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end fade-up" aria-labelledby="dropdownUser">
                        <div class="d-flex mt-2 mb-3">
                            <img src="{{asset('public/front/images/userImg.jpg')}}" alt="User" width="50" height="50"
                                class="rounded-circle flex-shrink-0">
                            <div class="ms-3">
                                <h5 class="mb-1 font-16 text-skyblue font-medium">Taha Khan</h5>
                                <span class="font-14 text-darkblue font-regular">khantaha12@gmail.com</span>
                            </div>
                        </div>
                         <li><a class="drop-item" href="account.html">Profile and settings</a></li>
                        <li><a class="drop-item" href="my-learning.html">My learning </a></li>
                        <li><a class="drop-item" href="my-cart.html">My cart</a></li>
                        <li class="dropdown-divider my-2 mx-n2"></li>
                        <li><a class="drop-item" href="messages.html">Messages</a></li>
                        <li><a class="drop-item" href="purchase-history.html">Purchase History</a></li>
                        <li><a class="drop-item" href="my-redemption-coupons.html">My Redemption
                                coupons</a></li>
                        <li><a class="drop-item" href="refer-and-earn.html">Refer and earn</a></li>
                        <li><a class="drop-item" href="teacher-dashboard.html">Teacher Dashboard</a>
                        </li>
                        <li class="dropdown-divider my-2 mx-n2"></li>
                        <li><a class="drop-item" href="javascript:void(0);">Log out</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header -->
