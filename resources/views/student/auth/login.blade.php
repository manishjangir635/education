@extends('student.layouts.master')
@section('content')
    <section class="content-block pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6">
                    <h3 class="font-24 text-darkblue font-bold mb-30 text-center">Log in to your account</h3>
                    <form action="{{url('/')}}/auth" method="post">
                        {{csrf_field()}}
                        <div class="mb-20">
                            <label for="email" class="font-16 text-darkblue font-medium mb-1">Email address</label>
                            <input type="email"  name="email" class="form-control" id="email" placeholder="name@example.com">
                            {!!$errors->first("email", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="mb-20">
                            <label for="password" class="font-16 text-darkblue font-medium mb-1">Password</label>
                            <input type="password" name="password"  class="form-control" id="password" placeholder="password">
                            {!!$errors->first("password", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        <div class="mb-20">
                            <button type="submit" class="w-100 theme-btn2">Log In</button>
                        </div>
                        <p class="font-14 text-darkblue font-medium mb-10"><a class="rating-link" href="{{route('forgot_password.index')}}"> Forgot Password</a></p>
                        <p class="font-16 text-darkblue font-regular mb-0">Don't have an account? <a class="font-medium rating-link" href="{{route('signup.index')}}">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
