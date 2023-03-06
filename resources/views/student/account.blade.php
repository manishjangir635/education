
@extends('student.layouts.master')
@section('content')
<section class="content-block pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6">
                    <h3 class="font-24 text-darkblue font-bold mb-30 text-center">Profile and Account Settings</h3>
                    <form method="post" action="{{url('/')}}/edit_profile" enctype= multipart/form-data>
                    {{csrf_field()}}
                        <div class="mb-20">
                            <div class="avatar-upload">
                                <div id="img-preview"><img alt="User Pic" src="{{$user_detail->image}}" id="profile-image1"></div>
                                <input type="file" id="choose-file" name="image" onchange="previewFile()">
                                <label for="choose-file"><i class="bi bi-camera-fill"></i></label>
                            </div>
                        </div>
                        <div class="mb-20">
                            <label for="email" class="font-16 text-darkblue font-medium mb-1">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="David" value="{{$user_detail->name}}">
                            {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
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
