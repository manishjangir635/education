@extends('student.layouts.master')
@section('content')

<section class="content-block pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 text-center">
                    <img src="{{url('/')}}/public/student/images/how-it-works.svg" alt="curriculum" width="303" height="212">
                    <h4 class="font-20 text-darkblue font-bold mt-20 mb-20">Invite Friends, Get Great Discounts on Your Course Purchases</h4>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control bg-gray email-field" placeholder="Email addresses">
                            <button class="btn pl-30 pr-30 theme-btn2 ms-2 btn-email disabled" type="button">Send</button>
                        </div>
                        <div class="font-16 text-darkblue font-regular pt-20 pb-20">Or</div>
                        <div class="input-group">
                            <label class="font-16 text-darkblue font-bold mb-0 align-self-center me-3">Your referral code</label>
                            <input type="text" class="form-control bg-gray" placeholder="asfsdfdg">
                            <button class="btn theme-btn2 ms-2" type="button">Copy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-60 pb-60">
        <div class="heading-block justify-content-center">
            <h3 class="main-heading">How it works</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="img-center-block">
                        <img src="{{url('/')}}/public/student/images/work-11.svg" alt="curriculum" width="112" height="114">
                        <h4 class="font-20 text-darkblue font-bold mt-20 mb-10">Spread the Word</h4>
                        <p class="font-14 text-darkblue font-regular mb-0">Share your custom Referral code/link with friends.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="img-center-block">
                        <img src="{{url('/')}}/public/student/images/work-12.svg" alt="Record your lectures" width="160" height="109">
                        <h4 class="font-20 text-darkblue font-bold mt-20 mb-10">Get Redemption Coupon</h4>
                        <p class="font-14 text-darkblue font-regular mb-0"> Get a redemption coupon when your friend purchases a course using your code/link.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="img-center-block">
                        <img src="{{url('/')}}/public/student/images/work-13.svg" alt="earning" width="112" height="111">
                        <h4 class="font-20 text-darkblue font-bold mt-20 mb-10">Get Discounts </h4>
                        <p class="font-14 text-darkblue font-regular mb-0">Use the redemption coupon to get great discounts on your next course purchase.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
