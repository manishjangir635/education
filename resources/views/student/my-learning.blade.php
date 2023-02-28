@extends('student.layouts.master')
@section('content')
<section class="bg-darkblue pt-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="top-content">
                        <h1 class="playfair font-40 text-white pb-60">My Learning</h1>
                        <div class="nav nav-tabs">
                            <a class="nav-link active" id="nav-pik1-tab" data-bs-toggle="tab" data-bs-target="#nav-pik1"
                                role="tab" aria-controls="nav-pik1" aria-selected="true">My courses</a>
                            <a class="nav-link" id="nav-pik2-tab" data-bs-toggle="tab" data-bs-target="#nav-pik2"
                                role="tab" aria-controls="nav-pik2" aria-selected="false">Wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inner Top Heading Block -->


    <section class="content-block bg-white pt-60 pb-60">
        <div class="container">
            <div class="tab-content mt-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-pik1" role="tabpanel" aria-labelledby="nav-pik1-tab"
                    tabindex="0">
                    <div class="row gy-4">

                       @foreach($course_list as $course)
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="course-block">
                                <div class="ratio ratio-16x9 course-thumb">
                               
                                <img src="{{$course->image}}" alt="course" width="100%" height="200">
                               
                                </div>
                                <div class="course-detail">
                                    <h4 class="font-16 text-darkblue font-bold">{{$course->title}}</h4>
                                    <p class="font-16 text-dgray font-regular">{{$course->subtitle}}</p>
                                    <div class="mt-20 d-flex align-items-center">
                                        <a class="me-3 theme-btn" href="{{url('/')}}/course-play/{{$course->id}}">Start Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                      
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-pik2" role="tabpanel" aria-labelledby="nav-pik2-tab" tabindex="0">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 mb-20">
                            <form class="search-course-input">
                                <input class="form-control" type="search" placeholder="Search my course">
                                <i class="bi bi-search"></i>
                            </form>
                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="course-block">
                                <div class="ratio ratio-16x9 course-thumb">
                                    <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="course-detail">
                                    <h4 class="font-16 text-darkblue font-bold">Unlocking Your Potential: 5
                                        Exercises to Build Creative Confidence</h4>
                                    <p class="font-16 text-dgray font-regular">Bhms Instruvtor Team</p>
                                    <div class="mt-20 d-flex align-items-center">
                                        <a class="me-3 theme-btn" href="">Add to Cart</a>
                                        <a class="wish-coures active" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.607" height="20.401" viewBox="0 0 22.607 20.401">
                                                <path id="Path_51914" data-name="Path 51914" d="M9.667,8A5.785,5.785,0,0,0,4,13.9c0,5.9,6.7,11.257,10.3,12.5,3.606-1.247,10.3-6.608,10.3-12.5A5.785,5.785,0,0,0,18.94,8,5.6,5.6,0,0,0,14.3,10.505,5.6,5.6,0,0,0,9.667,8Z" transform="translate(-3 -7)" fill="none" stroke="#b5bbc7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="course-block">
                                <div class="ratio ratio-16x9 course-thumb">
                                    <iframe src="https://www.youtube.com/embed/xVH_xEJQvZ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="course-detail">
                                    <h4 class="font-16 text-darkblue font-bold">Unlocking Your Potential: 5
                                        Exercises to Build Creative Confidence</h4>
                                    <p class="font-16 text-dgray font-regular">Bhms Instruvtor Team</p>
                                    <div class="mt-20 d-flex align-items-center">
                                       <a class="me-3 theme-btn" href="">Add to Cart</a>
                                        <a class="wish-coures active" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.607" height="20.401" viewBox="0 0 22.607 20.401">
                                                <path id="Path_51914" data-name="Path 51914" d="M9.667,8A5.785,5.785,0,0,0,4,13.9c0,5.9,6.7,11.257,10.3,12.5,3.606-1.247,10.3-6.608,10.3-12.5A5.785,5.785,0,0,0,18.94,8,5.6,5.6,0,0,0,14.3,10.505,5.6,5.6,0,0,0,9.667,8Z" transform="translate(-3 -7)" fill="none" stroke="#b5bbc7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faqs -->
    @endsection
