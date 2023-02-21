@extends('student.layouts.master')
@section('content')

<section class="bg-darkblue pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="top-content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Health & Fitness</a></li>
                            <li class="breadcrumb-item"><a href="#">General Health</a></li>
                            <li class="breadcrumb-item active">Homeopathy</li>
                        </ol>
                       <h1 class="font-36 text-white mb-20">{{$course_detail->title}}</h1>
                       <p class="font-14 text-white font-regular mb-0">{{$course_detail->subtitle}}</p>
                       <h5 class="font-16 text-white font-medium my-3">4.5
                        <span class="text-yellow d-inline-flex">
                            <i class="bi bi-star-fill ms-1"></i>
                            <i class="bi bi-star-fill ms-1"></i>
                            <i class="bi bi-star-fill ms-1"></i>
                            <i class="bi bi-star-fill ms-1"></i>
                            <i class="bi bi-star ms-1"></i>
                        </span>
                        <a class="mx-1 rating-link" href="javascript:void(0);">(11 ratings)</a>
                        <span class="font-regular">134 Students</span>
                    </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inner Top Heading Block -->


    <section class="content-block bg-white pt-60 pb-60">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <div class="learn-box">
                       <h4 class="font-26 text-darkblue font-bold">What you'll learn</h4>
                       <ul>
                        @foreach($course_detail->student_learn as $val1)
                        <li>{{$val1->title}}</li>
                        @endforeach
                       </ul>
                    </div>
                    <div class="text-area mb-20" data-controller="#readMore1">
                        <div class="course-content">
                            <h5 class="font-20 text-darkblue font-bold mb-3">Requirements</h5>
                            <ul class="cricle-list">
                            @foreach($course_detail->course_requirments as $val2)
                            <li>{{$val2->title}}</li>
                            @endforeach
                            </ul>
                            <h5 class="font-20 text-darkblue font-bold mb-3">Description</h5>
                            {!!$course_detail->description!!}
                            
                            <h5 class="font-20 text-darkblue font-bold mb-3 pt-2">Who this course is for:</h5>
                            <ul class="cricle-list list-small">

                            @foreach($course_detail->course_for as $val3)
                            <li>{{$val3->title}}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <a id="readMore1" class="link-text mt-20">Read more </a>
                   <div class="acc-course">
                    <h5 class="font-20 text-darkblue font-bold mb-2 mt-20">Course content</h5>
                    <div class="d-md-flex justify-content-md-between mb-2 mb-md-0">
                        <p class="font-16 text-darkblue font-regular">3 sections • 10 lectures • 6h 47m total length</p>
                        <a  href="javascript:void(0)" class="expand-btn text-link">Expand all sections</a>
                    </div>
                    <div class="accordion" id="accordionExample">
                        
                    @foreach($course_detail->section_list as $section)

                    <div class="accordion-item">
                            <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> {{$section->title}} <span>3 lectures • 24 Min</span></a>
                          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <ul class="stud-link">
                               
                              @foreach($section->lecture_list as $lecture)
                              <li>
                                    <div class="left-cts d-flex align-items-center">
                                        <img src="{{url('/')}}/public/student/images/play.svg" width="35" height="23" alt="img">
                                        <a href="javascript:void(0);" class="ms-2 rating-link">{{$lecture->title}}</a>
                                    </div>
                                    <div class="right-cts">
                                        <a class="me-2 rating-link">Preview</a>
                                        <time class="font-14 text-darkblue font-regular">6:48</time>
                                    </div>
                                </li>
                              @endforeach
                        
                             
                              </ul>
                            </div>
                          </div>
                        </div>
                       
                            @endforeach

                 

                
                   
                    </div>
                    <h5 class="font-20 text-darkblue font-bold mb-2 mt-30">Meet Your Teacher</h5>
                    <div class="meet-teacher">
                        <div class="teach-left text-center">
                            <div class="font-18 font-medium text-skyblue text-decoration-underline mb-0">Taha khan</div>
                            <div class="font-16 font-regular text-dgray">Doctor</div>
                            <div class="teacher-pik"><img src="{{url('/')}}/public/student/images/profile-img.png" alt="img" width="140" height="140"></div>
                        </div>
                        <div class="teach-right">
                            <div class="teacher-pro"><img src="{{url('/')}}/public/student/images/star.svg" alt="img" width="20" height="20"> 4.0 Instructor Rating</div>
                            <div class="teacher-pro"><img src="{{url('/')}}/public/student/images/trophy.svg" alt="img" width="20" height="20"> 11 Reviews</div>
                            <div class="teacher-pro"><img src="{{url('/')}}/public/student/images/user-group.svg" alt="img" width="20" height="20"> 134 Students</div>
                            <div class="teacher-pro"><img src="{{url('/')}}/public/student/images/play-icon.svg" alt="img" width="20" height="20"> 1 Course</div>
                        </div>
                    </div>
                    <p class="font-16 text-darkblue font-regular">Hi! My name is Dr. Taha Khan, and I have completed my BHMS from National Institute of Homoeopathy (Govt. of India) in 2013, and did my MD from D.N.De Homoeopathic Medical College and Hospital (Govt. of WB) between 2014-17.</p>
                    <p class="font-16 text-darkblue font-regular mb-0">I have been teaching and preparing students for medical exams for more than 7 years now. I am also the founder of Pulse Coaching Institute, which has been preparing students for the MD entrance exam.</p>
                    </div>
                    <h5 class="font-20 text-darkblue font-bold mb-30 mt-30">Student feedback</h5>
                    <div class="row gy-4">
                        <div class="col-sm-12 col-md-3 col-lg-2">
                            <div class="font-60 text-darkblue font-bold line-60">4.0</div>
                            <span class="text-yellow d-inline-flex">
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star ms-1"></i>
                            </span>
                            <div class="font-16 text-darkblue font-bold mt-10">Course Rating</div>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-10">
                            <ul class="st-rating">
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ms-3 text-yellow d-inline-flex">
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <a class="ms-2 rating-link">25%</a>
                                    </span>
                                </li>
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ms-3 text-yellow d-inline-flex">
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <a class="ms-2 rating-link">50%</a>
                                    </span>
                                </li>
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ms-3 text-yellow d-inline-flex">
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <a class="ms-2 rating-link">75%</a>
                                    </span>
                                </li>
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ms-3 text-yellow d-inline-flex">
                                        <i class="bi bi-star ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <a class="ms-2 rating-link">0%</a>
                                    </span>
                                </li>
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ms-3 text-yellow d-inline-flex">
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star-fill ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <i class="bi bi-star ms-1"></i>
                                        <a class="ms-2 rating-link">25%</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h5 class="font-20 text-darkblue font-bold mb-20 mt-10">Reviews</h5>
                    <div class="row gy-4">
                        <div class="col-sm-12 col-md-8 col-lg-9">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search by keyword, sender name">
                                <button type="button" class="theme-btn position-absolute end-0 z-index-3 h-100"><img src="{{url('/')}}/public/student/images/search.svg" width="22" height="22" alt="Icon"></button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="ratingdrop">
                                <select id="ratings" class="form-control">
                                    <option value="v-1" selected>All ratings</option>
                                    <option value="v-2">3.98 Coursera</option>
                                    <option value="v-3">3.98 Coursera</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="userComment">
                        <ul>
                           <li>
                              <div class="userImg"><img src="{{url('/')}}/public/student/images/chat-img.png" alt="img"></div>
                              <div class="textPost">
                                 <h5>Rahul T.</h5>
                                 <span class="text-yellow d-inline-flex">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill ms-1"></i>
                                    <i class="bi bi-star-fill ms-1"></i>
                                    <i class="bi bi-star-fill ms-1"></i>
                                    <i class="bi bi-star ms-1"></i>
                                </span>
                                <span class="ms-2 font-16 font-regular text-dgray">11 months ago</span>
                                 <p class="font-16 text-darkblue font-regular">Appreciate your hard work to explain students. Thank you sir.</p>
                                 <p class="font-14 text-darkblue font-regular">Was this review helpful?</p>
                                 <div class="like-dislike">
                                    <a class="lik-btn" href="javascript:void(0);"><img src="{{url('/')}}/public/student/images/like.svg" alt="img"></a>
                                    <a class="lik-btn" href="javascript:void(0);"><img src="{{url('/')}}/public/student/images/dislike.svg" alt="img"></a>
                                    <a class="report-text" href="javascript:void(0);">Report</a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                        <ul>
                           <li>
                              <div class="userImg"><img src="{{url('/')}}/public/student/images/chat-img.png" alt="img"></div>
                              <div class="textPost">
                                 <h5>Rahul T.</h5>
                                 <span class="text-yellow d-inline-flex">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill ms-1"></i>
                                    <i class="bi bi-star-fill ms-1"></i>
                                    <i class="bi bi-star-fill ms-1"></i>
                                    <i class="bi bi-star ms-1"></i>
                                </span>
                                <span class="ms-2 font-16 font-regular text-dgray">11 months ago</span>
                                 <p class="font-16 text-darkblue font-regular">Appreciate your hard work to explain students. Thank you sir.</p>
                                 <p class="font-14 text-darkblue font-regular">Was this review helpful?</p>
                                 <div class="like-dislike">
                                    <a class="lik-btn" href="javascript:void(0);"><img src="{{url('/')}}/public/student/images/like.svg" alt="img"></a>
                                    <a class="lik-btn" href="javascript:void(0);"><img src="{{url('/')}}/public/student/images/dislike.svg" alt="img"></a>
                                    <a class="report-text" href="javascript:void(0);">Report</a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                        <ul>
                           <li>
                              <div class="userImg"><img src="{{url('/')}}/public/student/images/chat-img.png" alt="img"></div>
                              <div class="textPost">
                                 <h5>Rahul T.</h5>
                                 <span class="text-yellow d-inline-flex">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill ms-1"></i>
                                    <i class="bi bi-star-fill ms-1"></i>
                                    <i class="bi bi-star-fill ms-1"></i>
                                    <i class="bi bi-star ms-1"></i>
                                </span>
                                <span class="ms-2 font-16 font-regular text-dgray">11 months ago</span>
                                 <p class="font-16 text-darkblue font-regular">Appreciate your hard work to explain students. Thank you sir.</p>
                                 <p class="font-14 text-darkblue font-regular">Was this review helpful?</p>
                                 <div class="like-dislike">
                                    <a class="lik-btn" href="javascript:void(0);"><img src="{{url('/')}}/public/student/images/like.svg" alt="img"></a>
                                    <a class="lik-btn" href="javascript:void(0);"><img src="{{url('/')}}/public/student/images/dislike.svg" alt="img"></a>
                                    <a class="report-text" href="javascript:void(0);">Report</a>
                                 </div>
                              </div>
                           </li>
                           <ul>
                              <li>
                                 <div class="userImg"><img src="{{url('/')}}/public/student/images/userImg.jpg"></div>
                                 <div class="textPost">
                                    <h5>Taha Khan</h5>
                                    <h6 class="font-14 font-regular text-dgray">Instructor response • 3 years ago</h6>
                                    <p>Thank you for the feedback I will have a look at the presentation it was made a long
                                        time ago and may need some updating.</p>
                                 </div>
                              </li>
                           </ul>
                        </ul>
                     </div>
                     <h5 class="font-20 text-darkblue font-bold mb-20 mt-30">Related courses</h5>
                     <div class="row gy-4">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="course-block">
                                <a href="">
                                    <div class="course-thumb">
                                        <img src="{{url('/')}}/public/student/images/course-thumb/course-thumb4.jpg" alt="course" width="100%" height="200">
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
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="course-block">
                                <a href="">
                                    <div class="course-thumb">
                                        <img src="{{url('/')}}/public/student/images/course-thumb/course-thumb5.jpg" alt="course" width="100%" height="200">
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
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                     </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 mobile-first">
                    <div class="courses-preview">
                        <div class="course-block">
                            <div class="ratio ratio-16x9 course-thumb">
                                <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="course-detail">
                                <div class="d-flex align-items-center">
                                    <span class="font-44 font-bold text-darkblue mb-1">₹{{$course_detail->price*$course_detail->discount/100}}</span>
                                    <del class="font-18 text-dgray font-medium ms-2 mb-1">₹{{$course_detail->price}}</del>
                                    <span class="font-18 text-darkblue font-medium ms-2 mb-1">{{$course_detail->discount}}% off</span>
                                </div>
                                <div class="mb-10 d-flex align-items-center">
                                    <a class="flex-fill me-3 theme-btn" href="javascript:void(0);">Add to Cart</a>
                                    <a class="wish-coures rounded-0" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.607" height="20.401" viewBox="0 0 22.607 20.401">
                                            <path id="Path_51914" data-name="Path 51914" d="M9.667,8A5.785,5.785,0,0,0,4,13.9c0,5.9,6.7,11.257,10.3,12.5,3.606-1.247,10.3-6.608,10.3-12.5A5.785,5.785,0,0,0,18.94,8,5.6,5.6,0,0,0,14.3,10.505,5.6,5.6,0,0,0,9.667,8Z" transform="translate(-3 -7)" fill="none" stroke="#b5bbc7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        </svg>
                                    </a>
                                </div>
                                <a class="buy-btn d-block text-center mb-20" href="javascript:void(0);">Buy Now</a>
                                <p class="font-16 text-darkblue font-regular text-center">30-Day Money-Back Guarantee</p>
                                <h3 class="text-decoration-underline font-16 font-bold text-darkblue mt-20 mb-10">Apply Coupon</h3>
                                <div class="input-group input-design">
                                    <input type="text" class="form-control" placeholder="Enter Coupon">
                                    <button class="btn theme-btn2" type="button">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h5 class="font-20 text-darkblue font-bold mt-20 mb-10">Become a Teacher</h5>
                    <div class="become-teacher">
                        <h4 class="font-40 text-white font-bold">The Future of Quality Education Starts With You.</h4>
                        <p class="font-22 text-white font-medium mb-0">Join us in making things simple for everyone.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
