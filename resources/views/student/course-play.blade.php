@extends('student.layouts.master')
@section('content')

<div class="courseplay">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="ratio ratio-21x9">
                <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="carousel-item">
            <div class="ratio ratio-21x9">
                <iframe src="https://www.youtube.com/embed/iGcNOabh0kU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <i class="bi bi-chevron-left"></i>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <i class="bi bi-chevron-right"></i>
        </button>
      </div>
      <a class="side-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="{{url('/')}}/public/student/images/angle-left.svg" alt="img" class="me-2"> Course Content</a>

    <div class="offcanvas side-content offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title font-18 font-bold text-darkblue" id="offcanvasRightLabel">Course content</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <a class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <span>Section 1: Introduction <small class="d-block font-regular">5 / 7 I 43min</small></span></a>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="filter-courses">
                        <ul>
                            <li><input class="form-check-input" type="checkbox"> <span>1.Introduction <small class="font-14 font-regular text-dgray d-block"><img src="{{url('/')}}/public/student/images/play2.svg" alt="img" class="me-1"> 4 min</small></span></li>
                            <li><input class="form-check-input" type="checkbox"> <span>1.Introduction <small class="font-14 font-regular text-dgray d-block"><img src="{{url('/')}}/public/student/images/play2.svg" alt="img" class="me-1"> 4 min</small></span></li>
                            <li><input class="form-check-input" type="checkbox"> <span>1.Introduction <small class="font-14 font-regular text-dgray d-block"><img src="{{url('/')}}/public/student/images/play2.svg" alt="img" class="me-1"> 4 min</small></span></li>
                            <li><input class="form-check-input" type="checkbox"> <span>1.Introduction <small class="font-14 font-regular text-dgray d-block"><img src="{{url('/')}}/public/student/images/play2.svg" alt="img" class="me-1"> 4 min</small></span></li>
                        </ul>
                    </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <span>Section 2: Introduction <small class="d-block font-regular">5 / 7 I 43min</small></span>
                </a>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="filter-courses">
                        <ul>
                            <li><input class="form-check-input" type="checkbox"> <span>1.Introduction <small class="font-14 font-regular text-dgray d-block"><img src="{{url('/')}}/public/student/images/play2.svg" alt="img" class="me-1"> 4 min</small></span></li>
                            <li><input class="form-check-input" type="checkbox"> <span>1.Introduction <small class="font-14 font-regular text-dgray d-block"><img src="{{url('/')}}/public/student/images/play2.svg" alt="img" class="me-1"> 4 min</small></span></li>
                            <li><input class="form-check-input" type="checkbox"> <span>1.Introduction <small class="font-14 font-regular text-dgray d-block"><img src="{{url('/')}}/public/student/images/play2.svg" alt="img" class="me-1"> 4 min</small></span></li>
                            <li><input class="form-check-input" type="checkbox"> <span>1.Introduction <small class="font-14 font-regular text-dgray d-block"><img src="{{url('/')}}/public/student/images/play2.svg" alt="img" class="me-1"> 4 min</small></span></li>
                        </ul>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


    <section class="content-block pt-60 pb-60">
        <div class="container">
            <div class="row gy-4">
                <div class="col-sm-12">
                    <h1 class="font-20 text-darkblue font-bold mb-3">Part-time BHMS Academy - Materia Medica for BHMS and AIAPGET</h1>
                    <p class="mw-50 font-16 text-darkblue font-regular">Materia Medica for BHMS (written and oral) plus for MD entrance exam, and various competitive exams in Homeopathy</p>
                    <h5 class="font-16 text-darkblue font-medium my-3">4.5
                        <span class="text-yellow d-inline-flex">
                            <i class="bi bi-star-fill ms-1"></i>
                            <i class="bi bi-star-fill ms-1"></i>
                            <i class="bi bi-star-fill ms-1"></i>
                            <i class="bi bi-star-fill ms-1"></i>
                            <i class="bi bi-star ms-1"></i>
                        </span>
                        <span class="ms-1 font-regular">(26 ratings) 134 students</span>
                    </h5>
                    <h5 class="font-20 text-darkblue font-bold mb-3 mt-30">Description</h5>
                    <p class="font-16 text-darkblue font-regular">Welcome to the <strong>Part-Time BHMS Academy</strong>.</p>
                    <p class="font-16 text-darkblue font-regular">Materia Medica has always been a difficult subject to score especially in competitive exams. Unlike other subjects, it cannot be completed in entirety in few months or even a year because even after the best of preparation, the symptoms start vanishing from the mind within few weeks. It requires constant and repeated hammering. Still, though, almost 20-25% of the questions in the exams get asked from this one subject, because of its importance in homoeopathy, hence this subject cannot be neglected.</p>
                    <p class="font-16 text-darkblue font-regular">With an endeavour to make this subject easy and scoring, I have decided to launch my course Part-Time BHMS Academy. The course aims to teach Materia medica to the students right from the beginning, while the students are in their BHMS (2nd, 3rd, 4th year, final year or internship), to <strong>prepare them for BHMS exams (written/viva), taking each individual drug at a time, and alongside, also prepare them for the MD entrance exams and other competitive exams in homoeopathy</strong>. Thereby building a strong foundation of Materia Medica right from the very start.</p>
                    <h5 class="font-20 text-darkblue font-bold mb-2 mt-30">Meet Your Teacher</h5>
                    <div class="meet-teacher">
                        <div class="teach-left text-center">
                            <div class="teacher-pik"><img src="{{url('/')}}/public/student/images/profile-img.png" alt="img" width="140" height="140"></div>
                        </div>
                        <div class="teach-right align-self-center">
                            <div class="font-18 font-medium text-darkblue mb-1">Taha khan</div>
                            <div class="font-16 font-regular text-dgray">Doctor</div>
                        </div>
                    </div>
                    <p class="font-16 text-darkblue font-regular">Hi! My name is Dr. Taha Khan, and I have completed my BHMS from National Institute of Homoeopathy (Govt. of India) in 2013, and did my MD from D.N.De Homoeopathic Medical College and Hospital (Govt. of WB) between 2014-17.</p>
                    <p class="font-16 text-darkblue font-regular mb-0">I have been teaching and preparing students for medical exams for more than 7 years now. I am also the founder of Pulse Coaching Institute, which has been preparing students for the MD entrance exam.</p>
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <div class="row gy-3">
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
                        <div class="review-block">
                            <a class="review-btn" data-bs-toggle="collapse" href="#review_btn" role="button" aria-expanded="false">Write Review</a>
                            <div class="collapse" id="review_btn">
                                <div class="py-3 py-md-4">
                                    <form>
                                        <label class="font-16 font-medium text-darkblue mb-1">Write your Review</label>
                                        <textarea class="form-control" placeholder="Would you like to write anyting about this product?"></textarea>
                                        <button type="submit" class="mt-20 theme-btn2">Submit Review</button>
                                    </form>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
