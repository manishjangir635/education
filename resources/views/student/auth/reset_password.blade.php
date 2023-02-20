@extends('student.layouts.master')
@section('content')
<section class="content-block pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6">
                    <h3 class="font-24 text-darkblue font-bold mb-30 text-center">Reset Password</h3>
                    <form method="post" action="{{url('newPassword')}}">
                        @csrf
                        <input type="hidden" name="validate_string" value="{{$validate_string}}">
                        <div class="mb-20">
                            <label for="password" class="font-16 text-darkblue font-medium mb-1">New Password</label>
                            <input type="password" class="form-control" name="new_password" id="new_password" placeholder="********">
                            {!!$errors->first("new_password", "<span class='text-danger'>:message</span>")!!}

                        </div>
                        <div class="mb-20">
                            <label for="password" class="font-16 text-darkblue font-medium mb-1">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="******">
                            {!!$errors->first("confirm_password", "<span class='text-danger'>:message</span>")!!}

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
