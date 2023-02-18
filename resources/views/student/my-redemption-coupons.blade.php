@extends('student.layouts.master')
@section('content')


<section class="content-block bg-white pt-100 pb-100">
        <div class="container">
            <div class="row gy-4">
                <div class="col-sm-12">
                    <h1 class="playfair text-capitalize font-34 font-bold text-darkblue mb-20">My Redemption coupons</h1>
                    <h3 class="font-18 font-bold text-darkblue mb-10">Redemption coupons earned for referring students.</h3>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2">
                    <p class="font-16 font-regular text-dgray mb-1">Coupon code</p>
                    <div class="font-18 font-bold text-darkblue">xyzsdf</div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2">
                    <p class="font-16 font-regular text-dgray mb-1">Student’s email</p>
                    <div class="font-18 font-bold text-darkblue">xyz@gamil.com</div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2">
                    <p class="font-16 font-regular text-dgray mb-1">Expiry Date</p>
                    <div class="font-18 font-bold text-darkblue">10/05/2022</div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="asfsdfdg" disabled>
                            <button class="btn theme-btn2 ms-2" type="button">Copy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
