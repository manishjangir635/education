@extends('teacher.layouts.master')
@section('content')

<div class="left-menu innerMenu">
			<ul class="nav flex-column">
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/detail/{{$course_detail->id}}" class="nav-link active"> Course landing page </a>
				</li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/curriculum/{{$course_detail->id}}" class="nav-link"> Curriculum </a></li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/pricing/{{$course_detail->id}}" class="nav-link"> Pricing </a></li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/promotion/{{$course_detail->id}}" class="nav-link"> Promotions </a></li>
			</ul>
		</div>
<div class="content">
			<div class="ui-block">
				<div class="p-4 border-bottom1">
					<div class="d-flex justify-content-between">
					<h1 class="playfair font-24 font-bold text-darkblue mb-2 mb-sm-0">Course landing page</h1>
					<a class="backBtn d-flex align-items-center" href="index.html"><i class="bi bi-arrow-left"></i> <span class="font-medium ms-2">Back</span></a>
					</div>
				</div>
				<div class="p-4 mb-100">
					<form>
						<div class="row gy-3">
							<div class="col-sm-12">
								<div class="mb-3">
									<label class="font-16 font-bold text-darkblue mb-1" for="">Course title</label>
									<div class="textLimit">
									    <input type="text" class="form-control char" maxlength="60" placeholder="Insert your course title" value="{{$course_detail->title}}">
										<span class="counter"></span>
								    </div>
								</div>
								<div class="mb-3">
									<label class="font-16 font-bold text-darkblue mb-1" for="">Course subtitle</label>
									<div class="textLimit">
									   <input type="text" class="form-control char" maxlength="120" placeholder="Insert your course subtitle">
									   <span class="counter"></span>
									</div>
								</div>
								<div class="mb-3">
									<label class="font-16 font-bold text-darkblue mb-1" for="">Course
										description</label>
									<textarea class="form-control" id="editor2" placeholder="Insert your course description"></textarea>
								</div>
								<div class="mt-30">
									<h3 class="font-20 font-bold text-darkblue">Who is this course for? <a
											class="detail-link" href="javascript:void(0);" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover focus" data-bs-content="Students who find studying Materia Medica difficult and less scoring. Ideally students in their BHMS (2nd,3rd, or 4th) who want to prepare Materia Medica for BHMS and AIAPGET"><i
												class="font-18 bi bi-info-circle"></i></a></h3>
									<p class="mb-0 font-16 font-regular text-darkblue">
										Write a clear description of the intended learners for your course who will find your course <br>content valuable. This will help you attract the right learners to your course.
									</p>
									<ul class="more-fields wrapper1">
										<li class="item">
											<div class="input-group textLimit">
												<input type="text" class="form-control char" maxlength="160" placeholder="">
												<span class="input-group-text h-100 p-0 rounded-0 bg-white border1">
													<span class="counter position-static border-top-0 border-bottom-0 border-start-0"></span>
													<a href="javascript:void(0);" class=""><img src="images/delete.svg" alt="img"></a>
													<a href="javascript:void(0);" class="dragBtn border-left1"><img src="images/drag.svg" alt="img"></a>
												</span>
											</div>
										</li>
										<li class="item">
											<div class="input-group textLimit">
												<input type="text" class="form-control char" maxlength="160" placeholder="">
												<span class="input-group-text h-100 p-0 rounded-0 bg-white border1">
													<span class="counter position-static border-top-0 border-bottom-0 border-start-0"></span>
													<a href="javascript:void(0);" class=""><img src="images/delete.svg" alt="img"></a>
													<a href="javascript:void(0);" class="dragBtn border-left1"><img src="images/drag.svg" alt="img"></a>
												</span>
											</div>
										</li>
										<li class="item">
											<div class="input-group textLimit">
												<input type="text" class="form-control char" maxlength="160" placeholder="">
												<span class="input-group-text h-100 p-0 rounded-0 bg-white border1">
													<span class="counter position-static border-top-0 border-bottom-0 border-start-0"></span>
													<a href="javascript:void(0);" class=""><img src="images/delete.svg" alt="img"></a>
													<a href="javascript:void(0);" class="dragBtn border-left1"><img src="images/drag.svg" alt="img"></a>
												</span>
											</div>
										</li>
										<div id="fields_wrap"></div>
										<a class="addmore mt-3" href="javascript:void(0);">+ Add more to your response</a>
									</ul>
								</div>
								<div class="mt-30">
									<h3 class="font-20 font-bold text-darkblue">What are the requirements or prerequisites for taking your course? <a
											class="detail-link" href="javascript:void(0);" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover focus" data-bs-content="Better if you have Allen's Keynotes and Boericke's Materia Medica beside you for quick references. Taking down notes alongside the lectures will immensely help you"><i
												class="font-18 bi bi-info-circle"></i></a></h3>
									<p class="mb-0 font-16 font-regular text-darkblue">List the required skills, experience, tools or equipment learners <br>should have prior to taking your course.
									</p>
									<ul class="more-fields wrapper2">
										<li class="item">
											<div class="input-group textLimit">
												<input type="text" class="form-control char" maxlength="160" placeholder="">
												<span class="input-group-text h-100 p-0 rounded-0 bg-white border1">
													<span class="counter position-static border-top-0 border-bottom-0 border-start-0"></span>
													<a href="javascript:void(0);" class=""><img src="images/delete.svg" alt="img"></a>
													<a href="javascript:void(0);" class="dragBtn border-left1"><img src="images/drag.svg" alt="img"></a>
												</span>
											</div>
										</li>
										<li class="item">
											<div class="input-group textLimit">
												<input type="text" class="form-control char" maxlength="160" placeholder="">
												<span class="input-group-text h-100 p-0 rounded-0 bg-white border1">
													<span class="counter position-static border-top-0 border-bottom-0 border-start-0"></span>
													<a href="javascript:void(0);" class=""><img src="images/delete.svg" alt="img"></a>
													<a href="javascript:void(0);" class="dragBtn border-left1"><img src="images/drag.svg" alt="img"></a>
												</span>
											</div>
										</li>
										<li class="item">
											<div class="input-group textLimit">
												<input type="text" class="form-control char" maxlength="160" placeholder="">
												<span class="input-group-text h-100 p-0 rounded-0 bg-white border1">
													<span class="counter position-static border-top-0 border-bottom-0 border-start-0"></span>
													<a href="javascript:void(0);" class=""><img src="images/delete.svg" alt="img"></a>
													<a href="javascript:void(0);" class="dragBtn border-left1"><img src="images/drag.svg" alt="img"></a>
												</span>
											</div>
										</li>
										<a class="addmore mt-3" href="javascript:void(0);">+ Add more to your response</a>
									</ul>
								</div>
								<div class="mt-30">
									<h3 class="font-20 font-bold text-darkblue">What will students learn in your course? <a
											class="detail-link" href="javascript:void(0);" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover focus" data-bs-content="Few clinical tips, Materia Medica for BHMS exams and viva, How to remember every symptoms in Materia Medica easily, Learn techniques for repertorization."><i
												class="font-18 bi bi-info-circle"></i></a></h3>
									<p class="mb-0 font-16 font-regular text-darkblue">You must enter at least 4 learning objectives or outcomes that learners can expect to <br>achieve after completing your course.
									</p>
									<ul class="more-fields wrapper3">
										<li class="item">
											<div class="input-group textLimit">
												<input type="text" class="form-control char" maxlength="160" placeholder="">
												<span class="input-group-text h-100 p-0 rounded-0 bg-white border1">
													<span class="counter position-static border-top-0 border-bottom-0 border-start-0"></span>
													<a href="javascript:void(0);" class=""><img src="images/delete.svg" alt="img"></a>
													<a href="javascript:void(0);" class="dragBtn border-left1"><img src="images/drag.svg" alt="img"></a>
												</span>
											</div>
										</li>
										<li class="item">
											<div class="input-group textLimit">
												<input type="text" class="form-control char" maxlength="160" placeholder="">
												<span class="input-group-text h-100 p-0 rounded-0 bg-white border1">
													<span class="counter position-static border-top-0 border-bottom-0 border-start-0"></span>
													<a href="javascript:void(0);" class=""><img src="images/delete.svg" alt="img"></a>
													<a href="javascript:void(0);" class="dragBtn border-left1"><img src="images/drag.svg" alt="img"></a>
												</span>
											</div>
										</li>
										<li class="item">
											<div class="input-group textLimit">
												<input type="text" class="form-control char" maxlength="160" placeholder="">
												<span class="input-group-text h-100 p-0 rounded-0 bg-white border1">
													<span class="counter position-static border-top-0 border-bottom-0 border-start-0"></span>
													<a href="javascript:void(0);" class=""><img src="images/delete.svg" alt="img"></a>
													<a href="javascript:void(0);" class="dragBtn border-left1"><img src="images/drag.svg" alt="img"></a>
												</span>
											</div>
										</li>
										<a class="addmore mt-3" href="javascript:void(0);">+ Add more to your response</a>
									</ul>
								</div>
								<div class="mt-30 course_image">
									<h3 class="font-20 font-bold text-darkblue mb-2">Course image</h3>
									<div class="row">
										<div class="col-12 col-sm-12 col-lg-4">
											<div class="previewDiv"><img id="output" src="images/blankBg.svg"></div>
										</div>
										<div class="col-12 col-sm-12 col-lg-8 mt-2 mt-lg-0">
											<p class="font-16 font-regular text-darkblue">It must meet our <a class="text-skyblue text-decoration-underline">course image quality standards</a> <br>
												(Image guidelines: 750x422 pixels; .jpg, .jpeg,. gif,<br> or .png format)</p>
												<div class="position-relative w-75">
                                                    <input id="img-input" type="file" class="form-control" accept="image/*" onchange="loadFile(event)">
													<label class="uploadType" for="img-input">Upload File</label>
											    </div>
										</div>
									</div>
								</div>
								<div class="mt-30 course_image">
									<h3 class="font-20 font-bold text-darkblue mb-2">Course Preview Video</h3>
									<div class="row">
										<div class="col-12 col-sm-12 col-lg-4">
											<div class="previewDiv"><video id="video" poster="/mages/blankBg.svg" controls></video></div>
										</div>
										<div class="col-12 col-sm-12 col-lg-8 mt-2 mt-lg-0">
											<p class="font-16 font-regular text-darkblue">It must meet our <a class="text-skyblue text-decoration-underline">course image quality standards</a> <br>
												(Image guidelines: 750x422 pixels; .jpg, .jpeg,. gif,<br> or .png format)</p>
										    <div class="position-relative w-75">		
											    <input id="file-input" type="file" class="form-control" accept="video/*">
											    <label class="uploadType" for="file-input">Upload File</label>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mt-30">
							<button type="submit" class="themeBtn">Save Course</button>
							<div class="wrapper">
								<div class="item">
								  <span class="text">Draggable Element One</span>
								  <i class="fas fa-bars"></i>
								</div>
								<div class="item">
								  <span class="text">Draggable Element Two</span>
								  <i class="fas fa-bars"></i>
								</div>
								<div class="item">
								  <span class="text">Draggable Element Three</span>
								  <i class="fas fa-bars"></i>
								</div>
								<div class="item">
								  <span class="text">Draggable Element Four</span>
								  <i class="fas fa-bars"></i>
								</div>
								<div class="item">
								  <span class="text">Draggable Element Five</span>
								  <i class="fas fa-bars"></i>
								</div>
							  </div>
						</div>
					</form>
				</div>
			</div>
		</div>
@endsection
