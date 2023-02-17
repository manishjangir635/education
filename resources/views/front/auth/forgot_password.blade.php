@extends('front.layouts.master')
@section('content')
<section class="content-block pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6">
                    <h3 class="font-24 text-darkblue font-bold mb-30 text-center">Forgot Password</h3>
                    <form method="post">
                        <div class="mb-20">
                            <label for="email" class="font-16 text-darkblue font-medium mb-1">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-20">
                            <button type="submit" class="w-100 theme-btn2">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Faqs -->
@endsection
