@extends('teacher.layouts.master')
@section('content')
        <div class="left-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="index.html" class="nav-link active" aria-current="page" title="Teacher Dashboard"
                        data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg width="48" height="48" viewBox="0 0 48 48">
                            <g data-name="Group 16224" transform="translate(15933.904 4540)">
                                <path data-name="Union 1"
                                    d="M17.05,0V13.95H31V0ZM0,0V13.95H13.95V0ZM17.05,17.05V31H31V17.05ZM0,17.05V31H13.95V17.05Z"
                                    transform="translate(-15925.404 -4531.5)" fill="#b5bbc7" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="students.html" class="nav-link" aria-current="page" title="Students" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg width="48" height="48" viewBox="0 0 48 48">
                            <g data-name="Group 16226" transform="translate(15930.414 4334.922)">
                                <g id="Group_16221" data-name="Group 16221" transform="translate(-15474.589 -4921.779)">
                                    <path data-name="Path 51194"
                                        d="M-377.13,588.845a18.919,18.919,0,0,1,1.894.518,7.283,7.283,0,0,1,4.611,7.494,7.3,7.3,0,0,1-6.338,6.54,7.305,7.305,0,0,1-8.165-6.115,7.3,7.3,0,0,1,6.208-8.363,1.588,1.588,0,0,0,.242-.075Z"
                                        transform="translate(-53.925 0)" fill="#b5bbc7" />
                                    <path data-name="Path 51195"
                                        d="M-416.6,728.92c-1.11-.414-2.194-.817-3.276-1.222l-9.323-3.5a1.4,1.4,0,0,1-1.143-1.628c0-.786,0-1.572,0-2.387.322-.02.621-.016.912-.059a3.706,3.706,0,0,0,3.321-3.319,22.693,22.693,0,0,0,0-4.462,3.749,3.749,0,0,0-3.868-3.365c-.1,0-.2,0-.368,0V707.7c0-.487,0-.975,0-1.462a1.3,1.3,0,0,1,1.873-1.287q3.481,1.294,6.955,2.6c1.527.573,3.053,1.151,4.583,1.716a.44.44,0,0,1,.357.481q-.014,9.418-.008,18.835C-416.578,728.682-416.589,728.78-416.6,728.92Z"
                                        transform="translate(-16.542 -96.052)" fill="#b5bbc7" />
                                    <path data-name="Path 51196"
                                        d="M-321.529,720.192c0,.988.035,1.933-.012,2.873-.032.634-.5.95-1.065,1.159q-3.239,1.2-6.471,2.42l-5.626,2.108c-.172.064-.346.123-.554.2-.009-.156-.022-.278-.022-.4q0-9.353-.008-18.707a.493.493,0,0,1,.382-.552q5.714-2.123,11.419-4.27a1.318,1.318,0,0,1,1.967,1.366c0,.858,0,1.716,0,2.582a12.526,12.526,0,0,0-1.29.153,3.751,3.751,0,0,0-2.975,3.372,31.247,31.247,0,0,0,0,4.211,3.816,3.816,0,0,0,3.769,3.491C-321.874,720.2-321.731,720.192-321.529,720.192Z"
                                        transform="translate(-95.258 -96.085)" fill="#b5bbc7" />
                                    <path data-name="Path 51197"
                                        d="M-401.079,682.846a14.485,14.485,0,0,1,4.485-2.762.587.587,0,0,1,.429.078,9.766,9.766,0,0,0,10.209.013.679.679,0,0,1,.505-.067,14.335,14.335,0,0,1,4.3,2.629.907.907,0,0,1,.1.14l-2.374.89c-2.409.9-4.816,1.816-7.23,2.705a1.142,1.142,0,0,1-.729.015c-3.111-1.148-6.215-2.318-9.32-3.483C-400.814,682.964-400.917,682.916-401.079,682.846Z"
                                        transform="translate(-40.774 -75.545)" fill="#b5bbc7" />
                                    <path data-name="Path 51198"
                                        d="M-445.162,747c0,.545.007,1.09,0,1.634a1.3,1.3,0,0,1-1.355,1.351,4.339,4.339,0,0,1-2.141-.322,3,3,0,0,1-1.583-3.351,3,3,0,0,1,2.828-2.343c.329-.01.66-.014.989,0a1.281,1.281,0,0,1,1.26,1.268C-445.149,745.821-445.162,746.409-445.162,747Z"
                                        transform="translate(0 -128.454)" fill="#b5bbc7" />
                                    <path data-name="Path 51199"
                                        d="M-265.2,746.987c0-.558-.009-1.116,0-1.673a1.277,1.277,0,0,1,1.3-1.309,7.531,7.531,0,0,1,1.451.073,2.975,2.975,0,0,1,2.4,3.189,3.018,3.018,0,0,1-2.906,2.749c-.329.01-.658.014-.987,0a1.3,1.3,0,0,1-1.258-1.269c0-.029,0-.057,0-.086Q-265.2,747.824-265.2,746.987Z"
                                        transform="translate(-153.302 -128.491)" fill="#b5bbc7" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="revenue-report.html" class="nav-link" aria-current="page" title="Performance" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg width="48" height="48" viewBox="0 0 48 48">
                            <g transform="translate(15931.627 4234.362)">
                                <g id="Group_16223" data-name="Group 16223" transform="translate(-16009.24 -4999.706)">
                                    <path data-name="Path 51200"
                                        d="M81.038,807.551c3.336,0,6.674.082,10.007-.02a20.061,20.061,0,0,0,17.329-10.091,19.831,19.831,0,0,0,2.9-10.692c-.006-2.738,0-5.476,0-8.257h-3.634l7.252-9.77,7.3,9.724h-3.682v.475c0,2.725.013,5.45,0,8.175a23.066,23.066,0,0,1-15.854,21.752,22.117,22.117,0,0,1-5.343,1.051,2.7,2.7,0,0,0-.348.069H81.038Z"
                                        fill="#b5bbc7" />
                                    <path data-name="Path 51201" d="M81.038,845.984H84.71v7.251H81.038Z"
                                        transform="translate(0 -48.1)" fill="#b5bbc7" />
                                    <path data-name="Path 51202"
                                        d="M129.268,788.191h3.585v.449q0,11.779.007,23.558a.791.791,0,0,1-.315.68,18.642,18.642,0,0,1-3.277,2.248Z"
                                        transform="translate(-30.026 -12.121)" fill="#b5bbc7" />
                                    <path id="Path_51203" data-name="Path 51203" d="M113.25,829.1V807.411h3.569v20.826Z"
                                        transform="translate(-20.054 -24.086)" fill="#b5bbc7" />
                                    <path data-name="Path 51204" d="M97.274,841.283v-14.45h3.569v14.45Z"
                                        transform="translate(-10.108 -36.178)" fill="#b5bbc7" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="reviews.html" class="nav-link" aria-current="page" title="Ratings and Reviews" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg width="48" height="48" viewBox="0 0 48 48">
                            <g transform="translate(15932 4123)">
                                <g transform="translate(-15928.075 -4119.075)">
                                    <path data-name="Path 51205"
                                        d="M20.075,0A20.075,20.075,0,1,0,40.15,20.075,20.1,20.1,0,0,0,20.075,0Zm0,36.5A16.425,16.425,0,1,1,36.5,20.075,16.444,16.444,0,0,1,20.075,36.5Z"
                                        fill="#b5bbc7" />
                                    <path id="Path_51206" data-name="Path 51206"
                                        d="M91.554,77.006l-5.776-.84L83.2,70.932a1.825,1.825,0,0,0-3.273,0l-2.583,5.234-5.776.84a1.825,1.825,0,0,0-1.011,3.113l4.18,4.074-.987,5.753a1.825,1.825,0,0,0,2.648,1.924l5.166-2.716,5.166,2.716a1.823,1.823,0,0,0,.849.21h.006a1.827,1.827,0,0,0,1.776-2.233l-.97-5.653,4.18-4.074a1.825,1.825,0,0,0-1.011-3.113Z"
                                        transform="translate(-61.483 -61.409)" fill="#b5bbc7" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="messages.html" class="nav-link" aria-current="page" title="Communication" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg width="48" height="48" viewBox="0 0 48 48">
                            <g transform="translate(15929 4017)">
                                <path
                                    d="M18.5,6A14.5,14.5,0,0,0,4,20.5C4,38.5,28,42,28,42V35h1.5a14.5,14.5,0,0,0,0-29ZM24,23.5A2.5,2.5,0,1,0,21.5,21,2.5,2.5,0,0,0,24,23.5ZM34.5,21A2.5,2.5,0,1,1,32,18.5,2.5,2.5,0,0,1,34.5,21ZM16,23.5A2.5,2.5,0,1,0,13.5,21,2.5,2.5,0,0,0,16,23.5Z"
                                    transform="translate(-15929 -4017)" fill="#b5bbc7" fill-rule="evenodd" />
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-9">
                    <h3 class="font-16 font-regular text-dgray">Teacher</h3>
                    <h1 class="playfair font-28 font-bold text-darkblue">Taha khan</h1>
                    <h3 class="font-16 font-regular text-dgray">Doctor, Content creator, Nutritionist, Certified trainer
                        in, Gold Medalist</h3>
                    <h4 class="font-18 font-bold text-darkblue mt-3">Doctor</h4>
                    <h3 class="font-16 font-regular text-dgray">MD (Hom)</h3>
                    <div class="row my-3 my-md-5">
                        <div class="col-6 col-sm-3 col-md-3 col-xl-2">
                            <h3 class="font-16 font-regular text-dgray">Total Students</h3>
                            <h4 class="font-24 font-bold text-darkblue">134</h4>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3 col-xl-2">
                            <h3 class="font-16 font-regular text-dgray">Reviews</h3>
                            <h4 class="font-24 font-bold text-darkblue">160</h4>
                        </div>
                    </div>
                    <h3 class="font-24 font-bold text-darkblue">About me</h3>
                    <div class="w-75 mb-30">
                        <p class="font-16 font-medium text-darkblue mb-0">Hi! My name is Dr. Taha Khan, and I have
                            completed my BHMS from National Institute of Homoeopathy (Govt. of India) in 2013, and did
                            my MD from D.N.De Homoeopathic Medical College and Hospital (Govt. of WB) between 2014-17.
                        </p>
                        <p class="font-16 font-medium text-darkblue">I have been teaching and preparing students for
                            medical exams for more than 7 years now. I am also the founder of Pulse Coaching Institute,
                            which has been preparing students for the MD entrance exam.</p>
                    </div>
                    <h3 class="font-24 font-bold text-darkblue">My courses</h3>
                    <div class="my-courses">
                        <div class="card mt-20">
                            <div class="row">
                                <div class="col-6">
                                    <div class="thumbBlock">
                                        <img src="{{url('/')}}/public/teacher/images/v-thumb1.jpg" class="img-fluid w-100" alt="img">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);"
                                        class="mt-2 md-md-3 font-18 font-black text-darkblue line-clamp">Part-time BHMS
                                        Academy -
                                        Materia Medica for BHMS and</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4 mt-md-0 position-relative">
                    <a href="edit-profile.html" class="themeBtn position-absolute top-0 end-0">Edit Profile</a>
                    <div class="profile-block">
                        <div class="avatar-upload">
                            <div id="img-preview"><img src="{{url('/')}}/public/teacher/images/profile-img.png"></div>
                            <input type="file" id="choose-file" name="choose-file" accept="image/*" />
                            <label for="choose-file"><i class="bi bi-camera-fill"></i></label>
                        </div>
                        <div class="socialLink mt-4">
                            <a href="javascript:void(0);"><i class="bi bi-facebook"></i> Facebook</a>
                            <a href="javascript:void(0);"><i class="bi bi-youtube"></i> You Tube</a>
                            <a href="javascript:void(0);"><i class="bi bi-linkedin"></i> Linkedin</a>
                            <a href="javascript:void(0);"><i class="bi bi-globe"></i> Website</a>
                            <a href="javascript:void(0);"><i class="bi bi-twitter"></i>  Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
