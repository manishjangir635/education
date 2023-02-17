@extends('student.layouts.master')
@section('content')
    <section class="content-block pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6">
                    <h3 class="font-24 text-darkblue font-bold mb-30 text-center">Sign up and start learning</h3>
                    <form method="post">
                        <div class="mb-20">
                            <label for="name" class="font-16 text-darkblue font-medium mb-1">Name</label>
                            <input type="text" class="form-control" id="email" placeholder="Rohit Kumar">
                        </div>
                        <div class="mb-20">
                            <label for="email" class="font-16 text-darkblue font-medium mb-1">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-20">
                            <label for="password" class="font-16 text-darkblue font-medium mb-1">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="password">
                        </div>
                        <div class="mb-20">
                            <button type="submit" class="w-100 theme-btn2">Sign Up</button>
                        </div>
                        <p class="font-14 text-darkblue font-regular mb-10">By signing up, you agree to our <a class="rating-link" href="{{route('terms.index')}}">Terms</a> of Use and <a class="rating-link" href="{{route('privacy_policy.index')}}">Privacy Policy</a>..</p>
                        <p class="font-16 text-darkblue font-regular mb-0">Already have an account? <a class="font-medium rating-link" href="{{route('login.index')}}">Log in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
