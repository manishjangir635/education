
@extends('student.layouts.master')
@section('content')
<section class="content-block pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6">
                    <h3 class="font-24 text-darkblue font-bold mb-30 text-center">Profile and Account Settings</h3>
                    <form method="post">
                        <div class="mb-20">
                            <div class="avatar-upload">
                                <div id="img-preview"><img alt="User Pic" src="{{url('/')}}/public/student/images/profilebg.svg" id="profile-image1"></div>
                                <input type="file" id="choose-file" name="choose-file" onchange="previewFile()">
                                <label for="choose-file"><i class="bi bi-camera-fill"></i></label>
                            </div>
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
                            <button type="submit" class="w-100 theme-btn2">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Faqs -->

@endsection
