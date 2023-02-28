@extends('student.layouts.master')
@section('content')


<section class="bg-darkblue about_us pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="top-content">
                       <h1 class="playfair font-40 text-white text-uppercase mb-20">{{$about_us_data->title}}</h1>
                       <p class="font-14 text-white font-regular mb-0">{{$about_us_data->description}}</p>
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
                    <h3 class="main-heading">{{$about_us_data->page_title}}</h3>
                    <p class="mw-50 mx-auto font-14 text-darkblue font-regular mb-0">{{$about_us_data->page_description}}</p>
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
                               
                                {!!$about_us_data->content!!}
                            </div>
                        </div>



                <div class="tab-pane fade" id="pills-vision" role="tabpanel" aria-labelledby="pills-vision-tab" tabindex="0">
                            <div class="row">
                                <div class="row">
                                {!!$about_us_data->vision!!} 
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-mission" role="tabpanel" aria-labelledby="pills-mission-tab" tabindex="0">
                            <div class="row">
                               {!!$about_us_data->mission!!} 
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
               
            
            @foreach($testimonials as $testimonial)
            <div class="swiper-slide">
                    <div class="testimonial-block">
                        <div class="content">
                            <img src="{{$testimonial->image}}" alt="testimonials" style="width: 76px;height: 76px; border-radius:100%;">
                            <div class="text-user">
                                <h3>{{$testimonial->name}}</h3>
                                <p  class="font-14 text-darkblue font-regular mb-1">Student</p>
                            </div>
                            <span class="text-yellow d-inline-flex mb-1 mx-auto">

                                 <?php 
                                 $full_star= $testimonial->rating;
                                 $dim_star= 5-$testimonial->rating;

                                 while($full_star>0){
                                    echo '<i class="bi bi-star-fill ms-1"></i>';
                                      $full_star--;
                                   }

                                 while($dim_star>0){
                                  echo '<i class="bi bi-star ms-1"></i>';
                                    $dim_star--;
                                 }

                                 ?>
                            </span>
                        </div>
                        <p class="font-14 text-darkblue font-regular">{{$testimonial->content}}</p>
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


@endsection
