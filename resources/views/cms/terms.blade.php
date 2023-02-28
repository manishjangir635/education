@extends('student.layouts.master')
@section('content')


    <section class="bg-darkblue pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="top-content">
                       <h1 class="playfair font-40 text-white text-uppercase mb-20">{{$record->title}}</h1>
                       <p class="font-14 text-white font-regular mb-0">{{$record->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inner Top Heading Block -->


    <section class="content-block pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    {!!$record->content!!}
                </div>
            </div>
        </div>
    </section>

    <!-- Faqs -->
@endsection
