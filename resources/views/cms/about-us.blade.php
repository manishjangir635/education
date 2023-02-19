@extends('student.layouts.master')
@section('content')


<section class="bg-darkblue about_us pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="top-content">
                       <h1 class="playfair font-40 text-white text-uppercase mb-20">About Us</h1>
                       <p class="font-14 text-white font-regular mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inner Top Heading Block -->


    <section class="content-block bg-white pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-30">
                    <h3 class="main-heading">Welcome to Part Time BHMS Academy</h3>
                    <p class="mw-50 mx-auto font-14 text-darkblue font-regular mb-0">Film your PTBA lectures using a basic tool
                        like a smartphone or a DSLR camera. If you don’t like being on camera, just capture your
                        screen. Add a good microphone and you’re good to go.</p>
                </div>
                <div class="col-sm-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                          <button class="nav-link active" id="pills-about-ptba-tab" data-bs-toggle="pill" data-bs-target="#pills-about-ptba" type="button" role="tab" aria-controls="pills-about-ptba" aria-selected="true">About PTBA</button>
                        </li>
                        <li class="nav-item">
                          <button class="nav-link" id="pills-vision-tab" data-bs-toggle="pill" data-bs-target="#pills-vision" type="button" role="tab" aria-controls="pills-vision" aria-selected="false">Our Vision</button>
                        </li>
                        <li class="nav-item">
                          <button class="nav-link" id="pills-mission-tab" data-bs-toggle="pill" data-bs-target="#pills-mission" type="button" role="tab" aria-controls="pills-mission" aria-selected="false">Our Mission</button>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-about-ptba" role="tabpanel" aria-labelledby="pills-about-ptba-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 mb-30">
                                    <img src="{{url('/')}}/public/student/images/instructor.png" alt="instructor" width="439" height="404" class="img-fluid">
                                </div>
                                <div class="col-sm-12 col-md-8 align-self-center">
                                   <p class="font-14 text-darkblue font-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                   <p class="font-14 text-darkblue font-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-vision" role="tabpanel" aria-labelledby="pills-vision-tab" tabindex="0">
                            <div class="row">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 align-self-center">
                                       <p class="font-14 text-darkblue font-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                       <p class="font-14 text-darkblue font-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-30">
                                        <img src="{{url('/')}}/public/student/images/vision.webp" alt="instructor" width="439" height="404" class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-mission" role="tabpanel" aria-labelledby="pills-mission-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mb-30">
                                    <img src="{{url('/')}}/public/student/images/mission.png" alt="instructor" width="439" height="404" class="w-100 img-fluid">
                                </div>
                                <div class="col-sm-12 col-md-6 align-self-center">
                                    <p class="font-14 text-darkblue font-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p class="font-14 text-darkblue font-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                 </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="the-future mt-0">
            <div class="heading-block justify-content-center">
                <h3 class="main-heading text-white mb-5">We just keep growing</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 text-center">
                        <h4 class="font-40 text-white font-bold">57M+</h4>
                        <p class="font-22 text-white font-medium mb-0">Learners</p>
                    </div>
                    <div class="col-sm-12 col-md-3 text-center">
                        <h4 class="font-40 text-white font-bold">74K+</h4>
                        <p class="font-22 text-white font-medium mb-0">Instructors</p>
                    </div>
                    <div class="col-sm-12 col-md-3 text-center">
                        <h4 class="font-40 text-white font-bold">213K+</h4>
                        <p class="font-22 text-white font-medium mb-0">Courses</p>
                    </div>
                    <div class="col-sm-12 col-md-3 text-center">
                        <h4 class="font-40 text-white font-bold">773M+</h4>
                        <p class="font-22 text-white font-medium mb-0">Course enrollments</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pt-60 pb-60">
        <div class="heading-block">
            <h3 class="main-heading">Testimonial</h3>
        </div>
        <div class="testimonial mt-30">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-block">
                        <div class="content">
                            <img src="{{url('/')}}/public/student/images/chat-img.png" alt="testimonials">
                            <div class="text-user">
                                <h3>Sikha Singh</h3>
                                <p  class="font-14 text-darkblue font-regular mb-1">Student</p>
                            </div>
                            <span class="text-yellow d-inline-flex mb-1 mx-auto">
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star ms-1"></i>
                            </span>
                        </div>
                        <p class="font-14 text-darkblue font-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-block">
                        <div class="content">
                            <img src="{{url('/')}}/public/student/images/chat-img.png" alt="testimonials">
                            <div class="text-user">
                                <h3>Sikha Singh</h3>
                                <p  class="font-14 text-darkblue font-regular mb-1">Student</p>
                            </div>
                            <span class="text-yellow d-inline-flex mb-1 mx-auto">
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star ms-1"></i>
                            </span>
                        </div>
                        <p class="font-14 text-darkblue font-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-block">
                        <div class="content">
                            <img src="{{url('/')}}/public/student/images/chat-img.png" alt="testimonials">
                            <div class="text-user">
                                <h3>Sikha Singh</h3>
                                <p  class="font-14 text-darkblue font-regular mb-1">Student</p>
                            </div>
                            <span class="text-yellow d-inline-flex mb-1 mx-auto">
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star ms-1"></i>
                            </span>
                        </div>
                        <p class="font-14 text-darkblue font-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-block">
                        <div class="content">
                            <img src="{{url('/')}}/public/student/images/chat-img.png" alt="testimonials">
                            <div class="text-user">
                                <h3>Sikha Singh</h3>
                                <p  class="font-14 text-darkblue font-regular mb-1">Student</p>
                            </div>
                            <span class="text-yellow d-inline-flex mb-1 mx-auto">
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star ms-1"></i>
                            </span>
                        </div>
                        <p class="font-14 text-darkblue font-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-block">
                        <div class="content">
                            <img src="{{url('/')}}/public/student/images/chat-img.png" alt="testimonials">
                            <div class="text-user">
                                <h3>Sikha Singh</h3>
                                <p  class="font-14 text-darkblue font-regular mb-1">Student</p>
                            </div>
                            <span class="text-yellow d-inline-flex mb-1 mx-auto">
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star-fill ms-1"></i>
                                <i class="bi bi-star ms-1"></i>
                            </span>
                        </div>
                        <p class="font-14 text-darkblue font-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                    </div>
                </div>

            </div>
            <div class="slide-btns">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>


@endsection
