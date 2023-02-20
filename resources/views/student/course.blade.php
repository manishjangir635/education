@extends('student.layouts.master')
@section('content')


<section class="content-block bg-white pt-60 pb-60">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6">
                    <h1 class="playfair text-capitalize font-34 font-bold text-darkblue mb-20">All courses</h1>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="d-flex sortcourse align-items-center justify-content-sm-end flex-shrink-0 position-relative">
                        <label class="font-16 text-darkblue font-bold flex-shrink-0 me-3">Sort By</label>
                        <select id="sort" class="form-control">
                            <option value="v-1" selected>Most Popular</option>
                            <option value="v-2">Newest</option>
                            <option value="v-3">Oldest</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="all-courses-block">
                <div class="row gy-4">
                    <div class="col-sm-12 col-md-3">
                        <div class="filter-courses">
                            <h5 class="font-16 text-darkblue font-bold mb-0">Category</h5>
                            <ul>
                                @foreach($category_list as $category)
                                <li><input class="form-check-input" name="category[]" type="checkbox" value="{{$category->id}}"> <span>{{$category->title}}</span></li>
                                @endforeach
                            </ul>
                            <h5 class="font-16 text-darkblue font-bold mb-0">Teacher</h5>
                            <ul>
                                
                                @foreach($user_list as $user)
                                <li><input class="form-check-input" name="teacher[]" type="checkbox" value="{{$user->id}}"> <span>{{$user->name}}</span></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <div class="row gy-4">
                            @foreach($course_list as $course)
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
                                    <div class="ratio ratio-16x9 course-thumb">
                                        <iframe src="{{url('/')}}/teacher/video/{{$course->preview_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                            <h5 class="font-16 text-darkblue font-bold mb-3 mb-md-0">₹{{$course->price-($course->price*$course->discount_percentage/100)}} <del
                                                    class="font-16 text-dgray font-regular">₹{{$course->price}}</del></h5>
                                            <a class="theme-btn" href="{{url('/')}}/cart/add/{{$course->id}}">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <div class="pagination-wrapper">
                            {{ $course_list->links('custom_pagination') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
