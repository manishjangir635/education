@extends('student.layouts.master')
@section('content')

<section class="content-block bg-white pt-60 pb-60">
        <div class="container">
            <h1 class="playfair text-capitalize font-34 font-bold text-darkblue mb-20">Purchase history</h1>
            <div class="row gy-4">
                <div class="col-sm-12">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="cart-list-item">
                                <div class="course-thumb">
                                    <img src="{{url('/')}}/public/student/images/cart-thumb.jpg" alt="thumb" width="200" height="130">
                                </div>
                                <div class="course-detail">
                                    <h3 class="font-18 font-bold text-darkblue mb-10">Homeopathy AND Flu Viruses</h3>
                                    <p class="font-14 text-darkblue font-regular mb-1">A complimentary approach to the management Flu viruses with Homeopathy, Nutrition and Well being</p>
                                    <h5 class="font-16 text-darkblue font-medium my-3">4.5
                                        <span class="text-yellow d-inline-flex">
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star ms-1"></i>
                                        </span>
                                        <span class="ms-1 font-regular">(26 ratings)</span>
                                    </h5>
                                </div>
                                <div class="course-price">
                                    <div class="font-26 font-bold text-skyblue mb-1">₹449 <sup><img src="{{url('/')}}/public/student/images/price-tag.svg"></sup></div>
                                    <del class="d-block font-18 text-dgray font-regular mb-1">₹799</del>
                                </div>
                            </div>
                            <div class="cartbottom">
                                <p class="font-14 text-darkblue font-regular mb-0">1.5 total hours • 14 lectures • All Levels</p>
                                <span class="action-btn ms-md-auto me-4">
                                    <div class="font-14 font-regular text-dgray">Expiry Date</div>
                                    <div class="font-16 font-black text-darkblue">10/05/2022</div>
                                </span>
                                <span class="action-btn">
                                    <div class="font-14 font-regular text-dgray">Amount Paid</div>
                                    <div class="font-16 font-black text-darkblue">500.00</div>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="cart-list-item">
                                <div class="course-thumb">
                                    <img src="{{url('/')}}/public/student/images/cart-thumb.jpg" alt="thumb" width="200" height="130">
                                </div>
                                <div class="course-detail">
                                    <h3 class="font-18 font-bold text-darkblue mb-10">Homeopathy AND Flu Viruses</h3>
                                    <p class="font-14 text-darkblue font-regular mb-1">A complimentary approach to the management Flu viruses with Homeopathy, Nutrition and Well being</p>
                                    <h5 class="font-16 text-darkblue font-medium my-3">4.5
                                        <span class="text-yellow d-inline-flex">
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star ms-1"></i>
                                        </span>
                                        <span class="ms-1 font-regular">(26 ratings)</span>
                                    </h5>
                                </div>
                                <div class="course-price">
                                    <div class="font-26 font-bold text-skyblue mb-1">₹449 <sup><img src="{{url('/')}}/public/student/images/price-tag.svg"></sup></div>
                                    <del class="d-block font-18 text-dgray font-regular mb-1">₹799</del>
                                </div>
                            </div>
                            <div class="cartbottom">
                                <p class="font-14 text-darkblue font-regular mb-0">1.5 total hours • 14 lectures • All Levels</p>
                                <span class="action-btn">
                                    <a href="javascript:viod(0);">Move to Wishlist</a>
                                    <a class="red-btn" href="javascript:viod(0);">Remove</a>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="cart-list-item">
                                <div class="course-thumb">
                                    <img src="{{url('/')}}/public/student/images/cart-thumb.jpg" alt="thumb" width="200" height="130">
                                </div>
                                <div class="course-detail">
                                    <h3 class="font-18 font-bold text-darkblue mb-10">Homeopathy AND Flu Viruses</h3>
                                    <p class="font-14 text-darkblue font-regular mb-1">A complimentary approach to the management Flu viruses with Homeopathy, Nutrition and Well being</p>
                                    <h5 class="font-16 text-darkblue font-medium my-3">4.5
                                        <span class="text-yellow d-inline-flex">
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star-fill ms-1"></i>
                                            <i class="bi bi-star ms-1"></i>
                                        </span>
                                        <span class="ms-1 font-regular">(26 ratings)</span>
                                    </h5>
                                </div>
                                <div class="course-price">
                                    <div class="font-26 font-bold text-skyblue mb-1">₹449 <sup><img src="{{url('/')}}/public/student/images/price-tag.svg"></sup></div>
                                    <del class="d-block font-18 text-dgray font-regular mb-1">₹799</del>
                                </div>
                            </div>
                            <div class="cartbottom">
                                <p class="font-14 text-darkblue font-regular mb-0">1.5 total hours • 14 lectures • All Levels</p>
                                <span class="action-btn">
                                    <a href="javascript:viod(0);">Move to Wishlist</a>
                                    <a class="red-btn" href="javascript:viod(0);">Remove</a>
                                </span>
                            </div>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
