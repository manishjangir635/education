@extends('teacher.layouts.master')
@section('content')
<div class="left-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="index.html" class="nav-link active" aria-current="page" title="Teacher Dashboard"
                        data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg width="48" height="48" viewBox="0 0 48 48">
                            <g data-name="Group 16224" transform="translate(15933.904 4540)">
                                <path data-name="Union 1"
                                    d="M17.05,0V13.95H31V0ZM0,0V13.95H13.95V0ZM17.05,17.05V31H31V17.05ZM0,17.05V31H13.95V17.05Z"
                                    transform="translate(-15925.404 -4531.5)" fill="#b5bbc7" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="students.html" class="nav-link" aria-current="page" title="Students" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg width="48" height="48" viewBox="0 0 48 48">
                            <g data-name="Group 16226" transform="translate(15930.414 4334.922)">
                                <g id="Group_16221" data-name="Group 16221" transform="translate(-15474.589 -4921.779)">
                                    <path data-name="Path 51194"
                                        d="M-377.13,588.845a18.919,18.919,0,0,1,1.894.518,7.283,7.283,0,0,1,4.611,7.494,7.3,7.3,0,0,1-6.338,6.54,7.305,7.305,0,0,1-8.165-6.115,7.3,7.3,0,0,1,6.208-8.363,1.588,1.588,0,0,0,.242-.075Z"
                                        transform="translate(-53.925 0)" fill="#b5bbc7" />
                                    <path data-name="Path 51195"
                                        d="M-416.6,728.92c-1.11-.414-2.194-.817-3.276-1.222l-9.323-3.5a1.4,1.4,0,0,1-1.143-1.628c0-.786,0-1.572,0-2.387.322-.02.621-.016.912-.059a3.706,3.706,0,0,0,3.321-3.319,22.693,22.693,0,0,0,0-4.462,3.749,3.749,0,0,0-3.868-3.365c-.1,0-.2,0-.368,0V707.7c0-.487,0-.975,0-1.462a1.3,1.3,0,0,1,1.873-1.287q3.481,1.294,6.955,2.6c1.527.573,3.053,1.151,4.583,1.716a.44.44,0,0,1,.357.481q-.014,9.418-.008,18.835C-416.578,728.682-416.589,728.78-416.6,728.92Z"
                                        transform="translate(-16.542 -96.052)" fill="#b5bbc7" />
                                    <path data-name="Path 51196"
                                        d="M-321.529,720.192c0,.988.035,1.933-.012,2.873-.032.634-.5.95-1.065,1.159q-3.239,1.2-6.471,2.42l-5.626,2.108c-.172.064-.346.123-.554.2-.009-.156-.022-.278-.022-.4q0-9.353-.008-18.707a.493.493,0,0,1,.382-.552q5.714-2.123,11.419-4.27a1.318,1.318,0,0,1,1.967,1.366c0,.858,0,1.716,0,2.582a12.526,12.526,0,0,0-1.29.153,3.751,3.751,0,0,0-2.975,3.372,31.247,31.247,0,0,0,0,4.211,3.816,3.816,0,0,0,3.769,3.491C-321.874,720.2-321.731,720.192-321.529,720.192Z"
                                        transform="translate(-95.258 -96.085)" fill="#b5bbc7" />
                                    <path data-name="Path 51197"
                                        d="M-401.079,682.846a14.485,14.485,0,0,1,4.485-2.762.587.587,0,0,1,.429.078,9.766,9.766,0,0,0,10.209.013.679.679,0,0,1,.505-.067,14.335,14.335,0,0,1,4.3,2.629.907.907,0,0,1,.1.14l-2.374.89c-2.409.9-4.816,1.816-7.23,2.705a1.142,1.142,0,0,1-.729.015c-3.111-1.148-6.215-2.318-9.32-3.483C-400.814,682.964-400.917,682.916-401.079,682.846Z"
                                        transform="translate(-40.774 -75.545)" fill="#b5bbc7" />
                                    <path data-name="Path 51198"
                                        d="M-445.162,747c0,.545.007,1.09,0,1.634a1.3,1.3,0,0,1-1.355,1.351,4.339,4.339,0,0,1-2.141-.322,3,3,0,0,1-1.583-3.351,3,3,0,0,1,2.828-2.343c.329-.01.66-.014.989,0a1.281,1.281,0,0,1,1.26,1.268C-445.149,745.821-445.162,746.409-445.162,747Z"
                                        transform="translate(0 -128.454)" fill="#b5bbc7" />
                                    <path data-name="Path 51199"
                                        d="M-265.2,746.987c0-.558-.009-1.116,0-1.673a1.277,1.277,0,0,1,1.3-1.309,7.531,7.531,0,0,1,1.451.073,2.975,2.975,0,0,1,2.4,3.189,3.018,3.018,0,0,1-2.906,2.749c-.329.01-.658.014-.987,0a1.3,1.3,0,0,1-1.258-1.269c0-.029,0-.057,0-.086Q-265.2,747.824-265.2,746.987Z"
                                        transform="translate(-153.302 -128.491)" fill="#b5bbc7" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="revenue-report.html" class="nav-link" aria-current="page" title="Performance" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg width="48" height="48" viewBox="0 0 48 48">
                            <g transform="translate(15931.627 4234.362)">
                                <g id="Group_16223" data-name="Group 16223" transform="translate(-16009.24 -4999.706)">
                                    <path data-name="Path 51200"
                                        d="M81.038,807.551c3.336,0,6.674.082,10.007-.02a20.061,20.061,0,0,0,17.329-10.091,19.831,19.831,0,0,0,2.9-10.692c-.006-2.738,0-5.476,0-8.257h-3.634l7.252-9.77,7.3,9.724h-3.682v.475c0,2.725.013,5.45,0,8.175a23.066,23.066,0,0,1-15.854,21.752,22.117,22.117,0,0,1-5.343,1.051,2.7,2.7,0,0,0-.348.069H81.038Z"
                                        fill="#b5bbc7" />
                                    <path data-name="Path 51201" d="M81.038,845.984H84.71v7.251H81.038Z"
                                        transform="translate(0 -48.1)" fill="#b5bbc7" />
                                    <path data-name="Path 51202"
                                        d="M129.268,788.191h3.585v.449q0,11.779.007,23.558a.791.791,0,0,1-.315.68,18.642,18.642,0,0,1-3.277,2.248Z"
                                        transform="translate(-30.026 -12.121)" fill="#b5bbc7" />
                                    <path id="Path_51203" data-name="Path 51203" d="M113.25,829.1V807.411h3.569v20.826Z"
                                        transform="translate(-20.054 -24.086)" fill="#b5bbc7" />
                                    <path data-name="Path 51204" d="M97.274,841.283v-14.45h3.569v14.45Z"
                                        transform="translate(-10.108 -36.178)" fill="#b5bbc7" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="reviews.html" class="nav-link" aria-current="page" title="Ratings and Reviews" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg width="48" height="48" viewBox="0 0 48 48">
                            <g transform="translate(15932 4123)">
                                <g transform="translate(-15928.075 -4119.075)">
                                    <path data-name="Path 51205"
                                        d="M20.075,0A20.075,20.075,0,1,0,40.15,20.075,20.1,20.1,0,0,0,20.075,0Zm0,36.5A16.425,16.425,0,1,1,36.5,20.075,16.444,16.444,0,0,1,20.075,36.5Z"
                                        fill="#b5bbc7" />
                                    <path id="Path_51206" data-name="Path 51206"
                                        d="M91.554,77.006l-5.776-.84L83.2,70.932a1.825,1.825,0,0,0-3.273,0l-2.583,5.234-5.776.84a1.825,1.825,0,0,0-1.011,3.113l4.18,4.074-.987,5.753a1.825,1.825,0,0,0,2.648,1.924l5.166-2.716,5.166,2.716a1.823,1.823,0,0,0,.849.21h.006a1.827,1.827,0,0,0,1.776-2.233l-.97-5.653,4.18-4.074a1.825,1.825,0,0,0-1.011-3.113Z"
                                        transform="translate(-61.483 -61.409)" fill="#b5bbc7" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="messages.html" class="nav-link" aria-current="page" title="Communication" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg width="48" height="48" viewBox="0 0 48 48">
                            <g transform="translate(15929 4017)">
                                <path
                                    d="M18.5,6A14.5,14.5,0,0,0,4,20.5C4,38.5,28,42,28,42V35h1.5a14.5,14.5,0,0,0,0-29ZM24,23.5A2.5,2.5,0,1,0,21.5,21,2.5,2.5,0,0,0,24,23.5ZM34.5,21A2.5,2.5,0,1,1,32,18.5,2.5,2.5,0,0,1,34.5,21ZM16,23.5A2.5,2.5,0,1,0,13.5,21,2.5,2.5,0,0,0,16,23.5Z"
                                    transform="translate(-15929 -4017)" fill="#b5bbc7" fill-rule="evenodd" />
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="mb-20 d-flex justify-content-end">
                <a class="backBtn d-flex align-items-center" href="profile.html"><i class="bi bi-arrow-left"></i> <span class="font-medium ms-2">Back</span></a>
            </div>
            <div class="border-block edit-profile p-0">
                <div class="row">
                    <div class="col-5 col-sm-4 col-md-3 col-xl-2 pb-60 pe-0 border-right1">
                        <div class="userProfile p-2 p-lg-4">
                            <div class="p-title text-white font-30 font-bold text-uppercase mx-auto">Tk</div>
                            <div class="p-name font-22 font-bold text-darkblue mt-2 mt-md-3">Taha Khan</div>
                        </div>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="true">Profile</button>
                            <button class="nav-link" id="v-pills-profile-photo-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile-photo" type="button" role="tab"
                                aria-controls="v-pills-profile-photo" aria-selected="false">Profile Photo</button>
                            <button class="nav-link" id="v-pills-account-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-account" type="button" role="tab"
                                aria-controls="v-pills-account" aria-selected="false">Account settings</button>
                        </div>
                    </div>
                    <div class="col-7 col-sm-8 col-md-9 col-xl-10 ps-0">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="edit-title text-center p-2 p-lg-4 border-bottom1">
                                    <h3 class="p-name font-22 font-bold text-darkblue mb-1">Public profile</h3>
                                    <p class="font-16 font-regular text-dgray mb-0">Add information about yourself</p>
                                </div>
                                <div class="p-2 p-md-3 p-lg-4">
                                    <form>
                                        <div class="row gy-3">
                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                <div class="mb-3">
                                                    <label class="font-16 font-medium text-darkblue mb-1" for="">First
                                                        Name</label>
                                                    <input type="text" class="form-control" placeholder="Taha">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="font-16 font-medium text-darkblue mb-1" for="">Last
                                                        Name</label>
                                                    <input type="text" class="form-control" placeholder="Khan">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="font-16 font-medium text-darkblue mb-1"
                                                        for="">Headline <small
                                                            class="text-dgray font-12 font-regular"><i
                                                                class="bi bi-info-circle-fill"></i> e.g. Doctor, Content
                                                            creator, Nutritionist, Certified trainer in, Gold Medalist
                                                            etc.</small></label>
                                                    <input type="text" class="form-control" placeholder="Headline">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="font-16 font-medium text-darkblue mb-1"
                                                        for="">Designation</label>
                                                    <input type="text" class="form-control" placeholder="MD (Hom)">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="font-16 font-medium text-darkblue mb-1"
                                                        for="">About Me</label>
                                                        <textarea class="form-control" id="editor">
                                                            Hi! My name is Dr. Taha Khan, and I have completed my BHMS from National Institute of Homoeopathy (Govt. of India) in 2013, and did my MD from D.N.De Homoeopathic Medical College and Hospital (Govt. of WB) between 2014-17.
                                                            I have been teaching and preparing students for medical exams for more than 7 years now. I am also the founder of Pulse Coaching Institute, which has been preparing students for the MD entrance exam.
                                                        </textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                <div class="mb-3">
                                                    <label class="font-16 font-medium text-darkblue mb-1"
                                                        for="">Facebook</label>
                                                    <div class="input-group">
                                                        <div class="input-group-text rounded-0 border1 bg-lightgrey urlLink">https://www.facebook.com/</div>
                                                        <input type="text" class="form-control"
                                                            placeholder="https://www.facebook.com/dr.thanth">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="font-16 font-medium text-darkblue mb-1"
                                                        for="">You Tube</label>
                                                    <div class="input-group">
                                                        <div class="input-group-text rounded-0 border1 bg-lightgrey urlLink">https://www.youtube.com/</div>
                                                        <input type="text" class="form-control"
                                                            placeholder="https://www.youtube.com/dr.thanth">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="font-16 font-medium text-darkblue mb-1"
                                                        for="">LinkedIn</label>
                                                    <div class="input-group">
                                                        <div class="input-group-text rounded-0 border1 bg-lightgrey urlLink">https://www.linkedIn.com/</div>
                                                        <input type="text" class="form-control"
                                                            placeholder="https://www.linkedIn.com/dr.thanth">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="font-16 font-medium text-darkblue mb-1"
                                                        for="">Website</label>
                                                    <div class="input-group">
                                                        <div class="input-group-text rounded-0 border1 bg-lightgrey urlLink">https://www.website.com/</div>
                                                        <input type="text" class="form-control"
                                                            placeholder="https://www.website.com/dr.thanth">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="font-16 font-medium text-darkblue mb-1"
                                                        for="">Twitter</label>
                                                    <div class="input-group">
                                                        <div class="input-group-text rounded-0 border1 bg-lightgrey urlLink">https://www.twitter.com/</div>
                                                        <input type="text" class="form-control"
                                                            placeholder="https://www.twitter.com/dr.thanth">
                                                    </div>
                                                </div>
                                                <div class="input_fields_wrap">
                                                    <a class="addsocialLink add_field_button" href="javascript:void(0);">+ Add social media links</a>
                                                </div>


                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile-photo" role="tabpanel"
                                aria-labelledby="v-pills-profile-photo-tab">
                                <div class="edit-title text-center p-2 p-lg-4 border-bottom1">
                                    <h3 class="p-name font-22 font-bold text-darkblue mb-1">Photo</h3>
                                    <p class="font-16 font-regular text-dgray mb-0">Minimum 200x200 pixels, Maximum 6000x6000 pixels</p>
                                </div>
                                <form>
                                    <div class="row justify-content-center px-3 pt-30 pb-100">
                                        <div class="col-sm-12 col-md-8 col-lg-6">
                                            <div class="previewDiv"><img id="output" src="{{url('/')}}/public/teacher/images/img-preview.svg"></div>
                                            <label class="font-16 font-medium text-darkblue mb-1" for="">Add / Change Image</label>
                                            <div class="position-relative">
                                              <input type="file" id="imageupload" class="form-control" accept="image/*" onchange="loadFile(event)">
                                              <label class="imgUpload" for="imageupload">Upload Image</label>
                                            </div>
                                            <button type="submit" class="themeBtn mt-30">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-account" role="tabpanel"
                                aria-labelledby="v-pills-account-tab">
                                <div class="edit-title text-center p-2 p-lg-4 border-bottom1">
                                    <h3 class="p-name font-22 font-bold text-darkblue mb-1">Account</h3>
                                    <p class="font-16 font-regular text-dgray mb-0">Edit your account settings and change your password here.</p>
                                </div>
                                <form>
                                    <div class="border-bottom1 mb-100" id="email_pass">
                                    <div class="row justify-content-center px-3 pt-30 pb-30">
                                        <div class="col-sm-12 col-md-8 col-lg-6">
                                            <div class="mb-3">
                                                <label class="font-16 font-medium text-darkblue mb-1"
                                                    for="">Email:</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control"
                                                        placeholder="Your email address is khanta12@gmail.com" disabled>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="font-16 font-medium text-darkblue mb-1"
                                                    for="">Password:</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control"
                                                        placeholder="***********" disabled>
                                                        <a href="#" onclick="switchVisible();" class="input-group-text rounded-0 border1 bg-lightgrey"><img src="{{url('/')}}/public/teacher/images/edit.svg" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" class="themeBtn">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="email_pass_edit" class="flex-column mb-100">
                                    <div class="border-bottom1">
                                    <div class="row justify-content-center px-3 pt-30 pb-30">
                                        <div class="col-sm-12 col-md-8 col-lg-6">
                                            <div class="mb-3">
                                                <label class="font-16 font-medium text-darkblue mb-1"
                                                    for="">Email:</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control"
                                                        placeholder="Enter email address">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="border-bottom1">
                                    <div class="row justify-content-center px-3 pt-30 pb-30">
                                        <div class="col-sm-12 col-md-8 col-lg-6">
                                            <div class="mb-3">
                                                <label class="font-16 font-medium text-darkblue mb-1"
                                                    for="">Password:</label>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter Current Password">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter New Password">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control"
                                                        placeholder="Re-type New Password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="text-center px-3 mt-30">
                                      <button type="submit" class="themeBtn">Change Password</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
