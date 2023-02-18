@extends('student.layouts.master')
@section('content')

<section class="content-block bg-white pt-60 pb-60">
        <div class="container">
                <div class="row gy-4">
                    <div class="col-sm-12 col-md-3">
                       <div class="teacher-detail-block">
                          <div class="teacher-pik"><img src="{{url('/')}}/public/student/images/profile-img.png" alt="img" width="200" height="200"></div>
                          <span class="d-inline-block mb-20 bg-skyblue text-white font-16 font-regular px-4 py-2">Teacher</span>
                          <div class="playfair font-26 text-darkblue mb-10">Taha khan</div>
                          <div class="font-16 text-darkblue font-bold">Doctor</div>
                          <div class="font-16 font-medium text-dgray mt-20 mb-20">Doctor, Content creator, Nutritionist, Certified trainer in, Gold Medalist</div>
                          <div class="row gy-3 mb-2 mb-md-4">
                            <div class="col-12 col-sm-6">
                                <div class="font-16 font-regular text-dgray">Total Students</div>
                                <div class="font-24 font-black text-darkblue">134</div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="font-16 font-regular text-dgray">Reviews</div>
                                <div class="font-24 font-black text-darkblue">160</div>
                            </div>
                           </div>
                           <div class="font-16 font-regular text-dgray">tahakhan</div>
                           <div class="socialLink mt-10">
                            <a href="javascript:void(0);"><i class="bi bi-facebook"></i></a>
                            <a href="javascript:void(0);"><i class="bi bi-twitter"></i></a>
                            <a href="javascript:void(0);"><i class="bi bi-youtube"></i></a>
                            <a href="javascript:void(0);"><i class="bi bi-linkedin"></i></a>
                            <a href="javascript:void(0);"><i class="bi bi-globe"></i></a>
                        </div>
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <h5 class="font-20 text-darkblue font-bold">About me</h5>
                        <p class="font-14 text-darkblue font-regular mb-3 mb-md-5">Hi! My name is Dr. Taha Khan, and I have completed my BHMS from National Institute of Homoeopathy (Govt. of India) in 2013, and did my MD from D.N.De Homoeopathic Medical College and Hospital (Govt. of WB) between 2014-17. I have been teaching and preparing students for medical exams for more than 7 years now. I am also the founder of Pulse Coaching Institute, which has been preparing students for the MD entrance exam.</p>
                        <h5 class="font-20 text-darkblue font-bold mb-20">Start Learning with Taha khan on PTBA</h5>
                        <div class="row gy-4">
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
                                    <a href="{{route('courses_detail.index')}}">
                                        <div class="ratio ratio-16x9 course-thumb">
                                            <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="course-detail">
                                            <h4 class="font-16 text-darkblue font-bold">Unlocking Your Potential: 5 Exercises
                                                to Build Creative Confidence</h4>
                                            <p class="font-14 text-darkblue font-regular">Share a completed worksheet, reflection, or
                                                project.</p>
                                            <h5 class="font-16 text-darkblue font-medium">Dr. Bhumika P</h5>
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
                                                <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">₹449 <del
                                                        class="font-16 text-dgray font-regular">₹3,399</del></h5>
                                                <a class="theme-btn" href="{{route('mycart')}}">Add to Cart</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
                                    <a href="{{route('courses_detail.index')}}">
                                        <div class="ratio ratio-16x9 course-thumb">
                                            <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="course-detail">
                                            <h4 class="font-16 text-darkblue font-bold">Unlocking Your Potential: 5 Exercises
                                                to Build Creative Confidence</h4>
                                            <p class="font-14 text-darkblue font-regular">Share a completed worksheet, reflection, or
                                                project.</p>
                                            <h5 class="font-16 text-darkblue font-medium">Dr. Bhumika P</h5>
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
                                                <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">₹449 <del
                                                        class="font-16 text-dgray font-regular">₹3,399</del></h5>
                                                <a class="theme-btn" href="{{route('mycart')}}">Add to Cart</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
                                    <a href="{{route('courses_detail.index')}}">
                                        <div class="ratio ratio-16x9 course-thumb">
                                            <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="course-detail">
                                            <h4 class="font-16 text-darkblue font-bold">Unlocking Your Potential: 5 Exercises
                                                to Build Creative Confidence</h4>
                                            <p class="font-14 text-darkblue font-regular">Share a completed worksheet, reflection, or
                                                project.</p>
                                            <h5 class="font-16 text-darkblue font-medium">Dr. Bhumika P</h5>
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
                                                <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">₹449 <del
                                                        class="font-16 text-dgray font-regular">₹3,399</del></h5>
                                                <a class="theme-btn" href="{{route('mycart')}}">Add to Cart</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
                                    <a href="{{route('courses_detail.index')}}">
                                        <div class="ratio ratio-16x9 course-thumb">
                                            <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="course-detail">
                                            <h4 class="font-16 text-darkblue font-bold">Unlocking Your Potential: 5 Exercises
                                                to Build Creative Confidence</h4>
                                            <p class="font-14 text-darkblue font-regular">Share a completed worksheet, reflection, or
                                                project.</p>
                                            <h5 class="font-16 text-darkblue font-medium">Dr. Bhumika P</h5>
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
                                                <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">₹449 <del
                                                        class="font-16 text-dgray font-regular">₹3,399</del></h5>
                                                <a class="theme-btn" href="{{route('mycart')}}">Add to Cart</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
                                    <a href="{{route('courses_detail.index')}}">
                                        <div class="ratio ratio-16x9 course-thumb">
                                            <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="course-detail">
                                            <h4 class="font-16 text-darkblue font-bold">Unlocking Your Potential: 5 Exercises
                                                to Build Creative Confidence</h4>
                                            <p class="font-14 text-darkblue font-regular">Share a completed worksheet, reflection, or
                                                project.</p>
                                            <h5 class="font-16 text-darkblue font-medium">Dr. Bhumika P</h5>
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
                                                <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">₹449 <del
                                                        class="font-16 text-dgray font-regular">₹3,399</del></h5>
                                                <a class="theme-btn" href="{{route('mycart')}}">Add to Cart</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
                                    <a href="{{route('courses_detail.index')}}">
                                        <div class="ratio ratio-16x9 course-thumb">
                                            <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="course-detail">
                                            <h4 class="font-16 text-darkblue font-bold">Unlocking Your Potential: 5 Exercises
                                                to Build Creative Confidence</h4>
                                            <p class="font-14 text-darkblue font-regular">Share a completed worksheet, reflection, or
                                                project.</p>
                                            <h5 class="font-16 text-darkblue font-medium">Dr. Bhumika P</h5>
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
                                                <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">₹449 <del
                                                        class="font-16 text-dgray font-regular">₹3,399</del></h5>
                                                <a class="theme-btn" href="{{route('mycart')}}">Add to Cart</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
                                    <a href="{{route('courses_detail.index')}}">
                                        <div class="ratio ratio-16x9 course-thumb">
                                            <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="course-detail">
                                            <h4 class="font-16 text-darkblue font-bold">Unlocking Your Potential: 5 Exercises
                                                to Build Creative Confidence</h4>
                                            <p class="font-14 text-darkblue font-regular">Share a completed worksheet, reflection, or
                                                project.</p>
                                            <h5 class="font-16 text-darkblue font-medium">Dr. Bhumika P</h5>
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
                                                <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">₹449 <del
                                                        class="font-16 text-dgray font-regular">₹3,399</del></h5>
                                                <a class="theme-btn" href="{{route('mycart')}}">Add to Cart</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
                                    <a href="{{route('courses_detail.index')}}">
                                        <div class="ratio ratio-16x9 course-thumb">
                                            <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="course-detail">
                                            <h4 class="font-16 text-darkblue font-bold">Unlocking Your Potential: 5 Exercises
                                                to Build Creative Confidence</h4>
                                            <p class="font-14 text-darkblue font-regular">Share a completed worksheet, reflection, or
                                                project.</p>
                                            <h5 class="font-16 text-darkblue font-medium">Dr. Bhumika P</h5>
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
                                                <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">₹449 <del
                                                        class="font-16 text-dgray font-regular">₹3,399</del></h5>
                                                <a class="theme-btn" href="{{route('mycart')}}">Add to Cart</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
                                    <a href="{{route('courses_detail.index')}}">
                                        <div class="ratio ratio-16x9 course-thumb">
                                            <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="course-detail">
                                            <h4 class="font-16 text-darkblue font-bold">Unlocking Your Potential: 5 Exercises
                                                to Build Creative Confidence</h4>
                                            <p class="font-14 text-darkblue font-regular">Share a completed worksheet, reflection, or
                                                project.</p>
                                            <h5 class="font-16 text-darkblue font-medium">Dr. Bhumika P</h5>
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
                                                <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">₹449 <del
                                                        class="font-16 text-dgray font-regular">₹3,399</del></h5>
                                                <a class="theme-btn" href="{{route('mycart')}}">Add to Cart</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>


@endsection
