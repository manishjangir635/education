@extends('teacher.layouts.master')
@section('content')
<div class="content">
            <h1 class="heading1">Teacher Dashboard</h1>
            <form class="filter mb-30">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search your courses">
                            <button type="button" class="themeBtn position-absolute end-0 z-index-3 h-100"><img
                                    src="{{url('/')}}/public/teacher/images/search.svg" width="22" height="22" alt="Icon"></button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-2 position-relative">
                        <select id="selectbox" class="form-control">
                            <option value="v-1">Newest</option>
                            <option value="v-2">Oldest</option>
                            <option value="v-3">A-Z</option>
                            <option value="v-4">Z-A</option>
                            <option value="v-5">Published first</option>
                            <option value="v-5">Ubpublished first</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-2 text-end ms-auto d-flex justify-content-end">
                        <a href="{{url('/')}}/teacher/course/create" class="themeBtn h-100">New course</a>
                    </div>
                </div>
            </form>
            <div class="class-blocks">
                <div class="card mb-20">
                    <div class="d-md-flex">
                        <div class="thumbBlock p-3">
                            <img src="{{url('/')}}/public/teacher/images/blankImg.svg" class="img-fluid grayscale h-auto" alt="img">
                        </div>
                        <div class="col">
                            <div class="row g-2 h-100">
                                <div class="col-sm-10">
                                    <div class="card-item d-flex flex-column">
                                        <a href="javascript:void(0);"
                                            class="font-16 font-black text-darkblue line-clamp">headache doseases of 2nd BHMS</a>
                                        <div class="d-flex align-items-center py-2 my-auto w-100">
                                            <h5 class="font-14 font-black text-darkblue me-4 mb-0 flex-shrink-0 offset-lg-3">
                                                Finish your course</h5>
                                            <div class="progress bg-lightgrey w-100">
                                                <div class="progress-bar bg-skyblue" role="progressbar" style="width: 50%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-auto">
                                            <p class="font-14 font-bold text-darkblue mt-auto mb-0">Draft</p>
                                        </div>
                                        <div class="upper-link"><a href="manage-courses.html">Edit / mange course</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 align-self-center">
                                    <div class="card-item">
                                        <a href="javascript:void(0);" class="themeBtn">Publish course</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @foreach($course_list as $course)
                <div class="card mb-20">
                    <div class="d-md-flex">
                        <div class="thumbBlock">
                            <img src="{{url('/')}}/public/teacher/images/v-thumb.jpg" class="img-fluid w-100" alt="img">
                        </div>
                        <div class="col align-self-center">
                            <div class="row g-2 h-100">
                                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-4">
                                    <div class="card-item">
                                        <a href="javascript:void(0);"
                                            class="font-16 font-black text-darkblue line-clamp">{{$course->title}}</a>
                                        <div class="mt-2 mt-lg-4">
                                            <a class="themeBtn2 btnsmall text-uppercase">Live</a><small
                                                class="ms-3 font-14 text-darkblue font-regular">₹16,999</small>
                                        </div>
                                        <div class="upper-link"><a href="{{url('/')}}/teacher/course/edit/detail/{{$course->id}}">Edit / mange course</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-5 col-xl-4">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="card-item">
                                            <div class="mb-3">
                                                <h5 class="font-16 font-black text-darkblue mb-0 mb-lg-2">₹0.00</h5>
                                                <small class="font-14 text-darkblue font-regular">Earned this
                                                    month</small>
                                            </div>
                                            <div class="mb-0">
                                                <h5 class="font-16 font-black text-darkblue mb-0 mb-lg-2">₹1,118.58</h5>
                                                <small class="font-14 text-darkblue font-regular">Total Earned</small>
                                            </div>
                                            <div class="upper-link"><a href="revenue-report.html">See performance</a></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card-item">
                                            <div class="mb-3">
                                                <h5 class="font-16 font-black text-darkblue mb-0 mb-lg-2">₹0.00</h5>
                                                <small class="font-14 text-darkblue font-regular">Enrollments this
                                                    month</small>
                                            </div>
                                            <div class="mb-0">
                                                <h5 class="font-16 font-black text-darkblue mb-0 mb-lg-2">131</h5>
                                                <small class="font-14 text-darkblue font-regular">Total students</small>
                                            </div>
                                            <div class="upper-link"><a href="students.html">See students</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-2 col-xl-2">
                                    <div class="card-item d-flex flex-column align-items-start justify-content-center">
                                    <h5 class="font-16 font-black text-darkblue mb-1">4.0
                                        <span class="text-yellow d-inline-flex">
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star ms-1"></i>
                                        </span>
                                    </h5>
                                    <div class="mt-0 mt-md-2">
                                        <small class="font-14 text-darkblue font-regular">Course rating</small>
                                    </div>
                                    <div class="upper-link"><a href="reviews.html">See reviews</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 align-self-center">
                                    <div class="card-item">
                                        <a href="javascript:void(0);" class="themeBtn">Publish course</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
              



                <div class="card mb-20">
                    <div class="d-md-flex">
                        <div class="thumbBlock">
                            <img src="{{url('/')}}/public/teacher/images/v-thumb.jpg" class="img-fluid w-100" alt="img">
                        </div>
                        <div class="col align-self-center">
                            <div class="row g-2 h-100">
                                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-4">
                                    <div class="card-item">
                                        <a href="javascript:void(0);"
                                            class="font-16 font-black text-darkblue line-clamp">Part-time BHMS Academy -
                                            Materia Medica for BHMS and</a>
                                        <div class="mt-2 mt-lg-4">
                                            <a class="themeBtn2 btnsmall text-uppercase">Live</a><small
                                                class="ms-3 font-14 text-darkblue font-regular">₹16,999</small>
                                        </div>
                                        <div class="upper-link"><a href="manage-courses.html">Edit / mange course</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-5 col-xl-4">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="card-item">
                                            <div class="mb-3">
                                                <h5 class="font-16 font-black text-darkblue mb-0 mb-lg-2">₹0.00</h5>
                                                <small class="font-14 text-darkblue font-regular">Earned this
                                                    month</small>
                                            </div>
                                            <div class="mb-0">
                                                <h5 class="font-16 font-black text-darkblue mb-0 mb-lg-2">₹1,118.58</h5>
                                                <small class="font-14 text-darkblue font-regular">Total Earned</small>
                                            </div>
                                            <div class="upper-link"><a href="revenue-report.html">See performance</a></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card-item">
                                            <div class="mb-3">
                                                <h5 class="font-16 font-black text-darkblue mb-0 mb-lg-2">₹0.00</h5>
                                                <small class="font-14 text-darkblue font-regular">Enrollments this
                                                    month</small>
                                            </div>
                                            <div class="mb-0">
                                                <h5 class="font-16 font-black text-darkblue mb-0 mb-lg-2">131</h5>
                                                <small class="font-14 text-darkblue font-regular">Total students</small>
                                            </div>
                                            <div class="upper-link"><a href="students.html">See students</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-2 col-xl-2">
                                    <div class="card-item d-flex flex-column align-items-start justify-content-center">
                                    <h5 class="font-16 font-black text-darkblue mb-1">4.0
                                        <span class="text-yellow d-inline-flex">
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star ms-1"></i>
                                        </span>
                                    </h5>
                                    <div class="mt-0 mt-md-2">
                                        <small class="font-14 text-darkblue font-regular">Course rating</small>
                                    </div>
                                    <div class="upper-link"><a href="reviews.html">See reviews</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 align-self-center">
                                    <div class="card-item">
                                        <a href="javascript:void(0);" class="themeBtn">Publish course</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center my-3 my-md-5">
                <i class="font-40 text-darkblue bi bi-question-circle-fill"></i>
                <h3 class="font-28 text-skyblue font-bold my-2"><a class="text-skyblue" href="faq.html">Help and Support</a></h3>
                <p class="mb-0 font-18 font-regular text-darkblue">Browse our help center or contact our support team.
                </p>
            </div>
        </div>
@endsection
