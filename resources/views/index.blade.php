@extends('student.layouts.master')
@section('content')

    <section class="banner">
        <div class="banner">
            <div class="swiper-wrapper">
                
            @foreach($sliders as $slider)
            <div class="swiper-slide">
                    <img src="{{$slider->image}}" alt="banner" width="100%" height="650">
                </div>
            @endforeach    
              
            </div>
            <div class="slide-btns">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <!-- Banner -->

    <section class="bg-white pt-60 pb-60">
        <div class="heading-block">
            <h3 class="main-heading">Discover a course with</h3>
            <a class="border-btn" href="{{route('course.index')}}">View All</a>
        </div>
        <div class="courses mt-30">
            <div class="swiper-wrapper">
                @foreach($course_list as $course)
                <div class="swiper-slide">
                    <div class="course-block">
                        <a href="{{url('/')}}/courses-detail/{{$course->id}}">
                            <div class="course-thumb">
                                <img src="{{$course->image}}" alt="course" width="100%" height="200">
                            </div>
                            <div class="course-detail">
                                <h4 class="font-16 text-darkblue font-bold">{{$course->title}}</h4>
                                <p class="font-14 text-darkblue font-regular">{{$course->subtitle}}</p>
                                <h5 class="font-16 text-darkblue font-medium">{{$course->user->name}}</h5>
                                <h5 class="font-16 text-darkblue font-medium my-3">4.5
                                    <span class="text-yellow d-inline-flex">
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                    </span>
                                </h5>
                                <h5 class="font-16 text-darkblue font-medium">22 Student Enrolled</h5>
                                <div class="mt-20 d-md-flex align-items-md-center justify-content-md-between">
                                    <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">???{{$course->price}} <del
                                            class="font-16 text-dgray font-regular">???3,399</del></h5>
                                    <a class="theme-btn" href="{{url('/')}}/cart/add/{{$course->id}}">Add to Cart</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
              
            </div>
            <div class="slide-btns">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <!-- Discover Courses -->


    <section class="pt-60 pb-60">
        <div class="heading-block">
            <h3 class="main-heading">Recommended courses</h3>
            <a class="border-btn" href="{{route('course.index')}}">View All</a>
        </div>
        <div class="courses mt-30">
            <div class="swiper-wrapper">
            @foreach($course_list as $course)
                <div class="swiper-slide">
                    <div class="course-block">
                        <a href="{{url('/')}}/courses-detail/{{$course->id}}">
                            <div class="course-thumb">
                                <img src="{{$course->image}}" alt="course" width="100%" height="200">
                            </div>
                            <div class="course-detail">
                                <h4 class="font-16 text-darkblue font-bold">{{$course->title}}</h4>
                                <p class="font-14 text-darkblue font-regular">{{$course->subtitle}}</p>
                                <h5 class="font-16 text-darkblue font-medium">{{$course->user->name}}</h5>
                                <h5 class="font-16 text-darkblue font-medium my-3">4.5
                                    <span class="text-yellow d-inline-flex">
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                    </span>
                                </h5>
                                <h5 class="font-16 text-darkblue font-medium">22 Student Enrolled</h5>
                                <div class="mt-20 d-md-flex align-items-md-center justify-content-md-between">
                                    <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">???{{$course->price}} <del
                                            class="font-16 text-dgray font-regular">???3,399</del></h5>
                                    <a class="theme-btn" href="{{url('/')}}/cart/add/{{$course->id}}">Add to Cart</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="slide-btns">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <!-- Recommended courses -->


    <section>
        <div class="heading-block justify-content-center">
            <h3 class="main-heading">Become a Teacher</h3>
        </div>
        <div class="the-future">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h4 class="font-40 text-white font-bold">The Future of Quality Education Starts With You.</h4>
                        <p class="font-22 text-white font-medium mb-0">Join us in making things simple for everyone.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recommended courses -->


    <section class="bg-white pt-60 pb-60">
        <div class="heading-block justify-content-center">
            <h3 class="main-heading">So many reasons to start</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="img-center-block">
                        <img src="{{url('/')}}/public/student/images/teach-your-way.svg" alt="tech" width="112" height="114">
                        <h4 class="font-20 text-darkblue font-bold mt-20 mb-10">Teach your way</h4>
                        <p class="font-14 text-darkblue font-regular mb-0">Publish the course you want, in the way you
                            want, and always have of control your own content.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="img-center-block">
                        <img src="{{url('/')}}/public/student/images/inspire.svg" alt="inspire" width="160" height="109">
                        <h4 class="font-20 text-darkblue font-bold mt-20 mb-10">Inspire</h4>
                        <p class="font-14 text-darkblue font-regular mb-0">Teach what you know and help learns explore
                            their interests, gain new skills, and advance their careers.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="img-center-block">
                        <img src="{{url('/')}}/public/student/images/get-rewarded.svg" alt="rewarded" width="112" height="111">
                        <h4 class="font-20 text-darkblue font-bold mt-20 mb-10">Get rewarded</h4>
                        <p class="font-14 text-darkblue font-regular mb-0">Expand your professional network, build your
                            expertise, and earn money on each
                            paid enrollment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reasons to start -->


    <section class="pt-60 pb-60">
        <div class="heading-block justify-content-center">
            <h3 class="main-heading">How Teaching works</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="img-center-block">
                        <img src="{{url('/')}}/public/student/images/curriculum.svg" alt="curriculum" width="112" height="114">
                        <h4 class="font-20 text-darkblue font-bold mt-20 mb-10">Plan you curriculum</h4>
                        <p class="font-14 text-darkblue font-regular mb-0">Start with your passion and knowledge. Choose
                            an engaging topic for your audience and compile a course.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="img-center-block">
                        <img src="{{url('/')}}/public/student/images/lectures.svg" alt="Record your lectures" width="160" height="109">
                        <h4 class="font-20 text-darkblue font-bold mt-20 mb-10">Record your lectures</h4>
                        <p class="font-14 text-darkblue font-regular mb-0">Film your PTBA lectures using a basic tool
                            like a smartphone or a DSLR camera. If you don???t like being on camera, just capture your
                            screen. Add a good microphone and you???re good to go.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="img-center-block">
                        <img src="{{url('/')}}/public/student/images/earning.svg" alt="earning" width="112" height="111">
                        <h4 class="font-20 text-darkblue font-bold mt-20 mb-10">Start earning</h4>
                        <p class="font-14 text-darkblue font-regular mb-0">You???ll be paid monthly for every student who
                            takes your course, forever.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How Teaching Works -->


    <section class="pt-60 become-instructor">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-4 d-none d-sm-block align-self-end">
                    <img src="{{url('/')}}/public/student/images/instructor.png" alt="instructor" width="439" height="404" class="img-fluid">
                </div>
                <div class="col-12 col-sm-7 align-self-center">
                    <h4 class="playfair font-40 text-darkblue font-bold">Become an instructor today</h4>
                    <p class="font-22 text-darkblue font-medium">Join one of the world's largest online leaening
                        maketplaces.</p>
                    <a class="get-started" href="{{route('course.index')}}">Get started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Become an instructor today -->


    <section class="bg-white pt-60 pb-60">
        <div class="heading-block">
            <h3 class="main-heading">Top courses</h3>
            <a class="border-btn" href="{{route('course.index')}}">View All</a>
        </div>
        <div class="courses mt-30">
            <div class="swiper-wrapper">
                
            @foreach($course_list as $course)
                <div class="swiper-slide">
                    <div class="course-block">
                        <a href="{{url('/')}}/courses-detail/{{$course->id}}">
                            <div class="course-thumb">
                                <img src="{{$course->image}}" alt="course" width="100%" height="200">
                            </div>
                            <div class="course-detail">
                                <h4 class="font-16 text-darkblue font-bold">{{$course->title}}</h4>
                                <p class="font-14 text-darkblue font-regular">{{$course->subtitle}}</p>
                                <h5 class="font-16 text-darkblue font-medium">{{$course->user->name}}</h5>
                                <h5 class="font-16 text-darkblue font-medium my-3">4.5
                                    <span class="text-yellow d-inline-flex">
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                    </span>
                                </h5>
                                <h5 class="font-16 text-darkblue font-medium">22 Student Enrolled</h5>
                                <div class="mt-20 d-md-flex align-items-md-center justify-content-md-between">
                                    <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">???{{$course->price}} <del
                                            class="font-16 text-dgray font-regular">???3,399</del></h5>
                                    <a class="theme-btn" href="{{url('/')}}/cart/add/{{$course->id}}">Add to Cart</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="slide-btns">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <!-- Top courses -->


    <section class="pt-60 pb-60">
        <div class="heading-block">
            <h3 class="main-heading">Recently enrolled</h3>
            <a class="border-btn" href="{{route('course.index')}}">View All</a>
        </div>
        <div class="courses mt-30">
            <div class="swiper-wrapper">
              
            @foreach($course_list as $course)
                <div class="swiper-slide">
                    <div class="course-block">
                        <a href="{{url('/')}}/courses-detail/{{$course->id}}">
                            <div class="course-thumb">
                                <img src="{{$course->image}}" alt="course" width="100%" height="200">
                            </div>
                            <div class="course-detail">
                                <h4 class="font-16 text-darkblue font-bold">{{$course->title}}</h4>
                                <p class="font-14 text-darkblue font-regular">{{$course->subtitle}}</p>
                                <h5 class="font-16 text-darkblue font-medium">{{$course->user->name}}</h5>
                                <h5 class="font-16 text-darkblue font-medium my-3">4.5
                                    <span class="text-yellow d-inline-flex">
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                    </span>
                                </h5>
                                <h5 class="font-16 text-darkblue font-medium">22 Student Enrolled</h5>
                                <div class="mt-20 d-md-flex align-items-md-center justify-content-md-between">
                                    <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">???{{$course->price}} <del
                                            class="font-16 text-dgray font-regular">???3,399</del></h5>
                                    <a class="theme-btn" href="{{url('/')}}/cart/add/{{$course->id}}">Add to Cart</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="slide-btns">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <!-- Recently enrolled -->

    <section class="bg-white pt-60 pb-60">
        <div class="heading-block">
            <h3 class="main-heading">PTBA Teachers </h3>
            <a class="border-btn" href="{{route('teacher_detail.index')}}">View All</a>
        </div>
        <div class="teacher mt-30">
            <div class="swiper-wrapper">
               
                @foreach($teachers as $teacher)
                <div class="swiper-slide">
                    <div class="teacher-block">
                        <a href="{{route('teacher_detail.index')}}">
                            <div class="teacher-thumb">
                                <img src="{{$teacher->image}}" alt="teacher" width="100%" height="200">
                            </div>
                            <div class="teacher-detail text-center">
                                <h4 class="font-18 text-darkblue font-bold">{{$teacher->name}}</h4>
                                <p class="font-16 text-dgray font-regular mb-0">Ph.D; MT(ASCP); MB (ASCP)</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="slide-btns">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <!-- PTBA Teachers  -->
@endsection
