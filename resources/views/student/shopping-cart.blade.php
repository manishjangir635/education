@extends('student.layouts.master')
@section('content')

<section class="content-block bg-white pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <h1 class="playfair text-capitalize font-34 font-bold text-darkblue mb-20">Shopping Cart</h1>
                    <h3 class="font-14 font-bold text-darkblue">0 Courses Cart</h3>
                    <div class="blank-box text-center">
                        <img src="{{url('/')}}/public/student/images/blankBg.svg" class="img-fluid" alt="img" width="443" height="250">
                        <p class="font-16 font-medium text-darkblue">Your cart is empty. Keep shopping to find a course!</p>
                        <a class="theme-btn mt-30" href="{{route('course.index')}}">Keep shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
