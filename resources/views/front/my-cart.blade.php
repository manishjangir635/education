@extends('front.layouts.master')
@section('content')


<section class="content-block bg-white pt-60 pb-60">
        <div class="container">
            <h1 class="playfair text-capitalize font-34 font-bold text-darkblue mb-20">Shopping Cart</h1>
            <div class="row gy-4">
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="cart-list-item">
                                <div class="course-thumb">
                                    <img src="{{asset('public/front/images/cart-thumb.jpg')}}" alt="thumb" width="200" height="130">
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
                                    <div class="font-26 font-bold text-skyblue mb-1">₹449 <sup><img src="{{asset('public/front/images/price-tag.svg')}}"></sup></div>
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
                                    <img src="{{asset('public/front/images/cart-thumb.jpg')}}" alt="thumb" width="200" height="130">
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
                                    <div class="font-26 font-bold text-skyblue mb-1">₹449 <sup><img src="{{asset('public/front/images/price-tag.svg')}}"></sup></div>
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
                                    <img src="{{asset('public/front/images/cart-thumb.jpg')}}" alt="thumb" width="200" height="130">
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
                                    <div class="font-26 font-bold text-skyblue mb-1">₹449 <sup><img src="{{asset('public/front/images/price-tag.svg')}}"></sup></div>
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
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <h3 class="font-18 font-medium text-darkblue mb-1">Total:</h3>
                    <div class="font-48 font-bold text-darkblue mb-1">₹948</div>
                    <del class="d-block font-18 text-dgray font-regular mb-1">₹2,798</del>
                    <del class="d-block font-18 text-dgray font-regular">66% off</del>
                    <a class="theme-btn d-block text-center mt-20" href="javascript:void(0);">Checkout</a>
                    <h3 class="font-18 font-bold text-darkblue mt-20 mb-10">Promotions</h3>

                    <div class="d-flex align-items-center font-18 text-dgray font-regular mb-1">
                        <a class="font-bold text-darkblue" href="javascript:void(0);">
                            <img class="me-2" src="{{asset('public/front/images/close-icon.svg')}}" alt="close icon" width="18" height="18">
                        </a>
                        <strong>FT2MT92322</strong> is applied
                    </div>
                    <div class="input-group input-design mt-3">
                        <input type="text" class="form-control" placeholder="Enter Coupon">
                        <button class="btn theme-btn2" type="button">Apply</button>
                    </div>
                </div>
            </div>
            <div class="row gy-4 pt-60">
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <h3 class="font-24 font-medium text-darkblue mb-10">Recently wishlisted</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="cart-list-item">
                                <div class="course-thumb">
                                    <img src="{{asset('public/front/images/cart-thumb.jpg ')}}" alt="thumb" width="200" height="130">
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
                                    <div class="font-26 font-bold text-skyblue mb-1">₹449 <sup><img src="{{asset('public/front/images/price-tag.svg')}}"></sup></div>
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
