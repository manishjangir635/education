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
                            <h5 class="font-16 text-darkblue font-bold mb-0">Subject</h5>
                            <ul>
                                <li><input class="form-check-input" type="checkbox"> <span>Practice Of Medicine</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Materia Medica</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Preventive & Social Medicine</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Organon & Homeopathic Philosophy</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Repertory</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Gynaecology & Obstetrics</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Surgery</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Pathology</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Forensic Medicine & Toxiocology</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Anatomy</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Physiology & Biochemistry</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Pharmacy</span></li>
                            </ul>
                            <h5 class="font-16 text-darkblue font-bold mb-0">Teacher</h5>
                            <ul>
                                <li><input class="form-check-input" type="checkbox"> <span>Dr. Rashi</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Dr. Poorva Tiwari</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Dr. Himani Garg</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Dr. Harsh Nigam</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Grant Bentley</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Dr. Maneesha Solanki</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Louise Bentley</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span>Dr. Saptarshi Banerjea</span></li>
                                <li><input class="form-check-input" type="checkbox"> <span> Dr. Rashid Akhtar</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <div class="row gy-4">
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
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
                                            <a class="theme-btn" href="javascript:void(0);">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
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
                                            <a class="theme-btn" href="javascript:void(0);">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
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
                                            <a class="theme-btn" href="javascript:void(0);">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
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
                                            <a class="theme-btn" href="javascript:void(0);">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
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
                                            <a class="theme-btn" href="javascript:void(0);">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
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
                                            <a class="theme-btn" href="javascript:void(0);">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
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
                                            <a class="theme-btn" href="javascript:void(0);">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
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
                                            <a class="theme-btn" href="javascript:void(0);">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="course-block">
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
                                            <a class="theme-btn" href="javascript:void(0);">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                              <a class="page-link"><i class="bi bi-chevron-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item page-dot">...</li>
                            <li class="page-item"><a class="page-link" href="#">40</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
                            </li>
                            <li>
                                <select class="form-select">
                                    <option selected>10/page</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
