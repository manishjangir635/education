<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BHMS Academy</title>
    <link type="text/css" href="{{url('/')}}/public/teacher/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="{{url('/')}}/public/teacher/css/bootstrap-icons.css" rel="stylesheet">
    <link type="text/css" href="{{url('/')}}/public/teacher/css/bvselect.css" rel="stylesheet">
    <link type="text/css" href="{{url('/')}}/public/teacher/css/datepicker.css" rel="stylesheet">
    <link type="text/css" href="{{url('/')}}/public/teacher/css/reset.css" rel="stylesheet">
    <link type="text/css" href="{{url('/')}}/public/teacher/css/style.css" rel="stylesheet">
    <link type="text/css" href="{{url('/')}}/public/teacher/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="{{assets('student/css/toastr.css')}}">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <a href="{{route('index')}}" class="ms-3"><img src="{{Auth::user()->image}}" width="135" height="60" alt="Logo"></a>
                <div class="ms-auto d-flex align-items-center">
                    <a href="javaceript:void(0);" class="position-relative me-4">
                        <img src="{{url('/')}}/public/teacher/images/notification.svg" width="30" height="30" alt="notification">
                        <span class="notification position-absolute top-0 translate-middle bg-red rounded-circle">
                            <span class="text-white font-10">4</span>
                        </span>
                    </a>
                    <div class="dropdown nav-item">
                        <a href="javaceript:void(0);" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{url('/')}}/public/teacher/images/userImg.jpg" alt="User" width="50" height="50" class="rounded-circle">
                            <img src="{{url('/')}}/public/teacher/images/down.svg" alt="User" width="20" height="20" class="ms-2">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end fade-up" aria-labelledby="dropdownUser">
                            <div class="d-flex mt-2 mb-3">
                                <img src="{{Auth::user()->image}}" alt="User" width="60" height="60"
                                    class="rounded-circle flex-shrink-0">
                                <div class="ms-3">
                                    <h5 class="mb-1 font-16 text-skyblue font-medium">{{Auth::user()->name}}</h5>
                                    <span class="font-14 text-darkblue font-regular">{{Auth::user()->email}}</span>
                                </div>
                            </div>
                            <li><a class="drop-item" href="{{url('/')}}/teacher/dashboard">Dashboard</a></li>
                            <li><a class="drop-item" href="{{route('teacher_profile.index')}}">Public profile</a></li>
                            <li><a class="drop-item" href="{{route('teacher_profile.edit')}}">Profile and Settings</a></li>
                            <li><a class="drop-item" href="{{route('teacher_payment.index')}}">Payment</a></li>
                            <li><a class="drop-item" href="{{route('revenue_report.index')}}">Revenue report</a></li>
                            <li><a class="drop-item" href="{{url('/')}}/logout">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>


    
