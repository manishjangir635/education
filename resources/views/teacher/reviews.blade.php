@extends('teacher.layouts.master')
@section('content')
<div class="content">
			<div class="ui-block">
				<div class="p-4 border-bottom1">
					<h1 class="playfair font-24 font-bold text-darkblue mb-0">Rating and Reviews</h1>
				</div>
				<div class="p-4">
					<div class="row">
						<div class="col rating-pik d-flex align-items-center">
							<label class="font-16 font-regular text-darkblue mb-1 me-2" for="">Rating :</label>
							<select id="rating" class="form-control">
								<option value="v-1">3.98 Coursera</option>
								<option value="v-2">3.98 Coursera</option>
							</select>
						</div>
						<div class="col rating-pik d-flex align-items-center">
							<label class="font-16 font-regular text-darkblue mb-1 me-2" for="">Sort By :</label>
							<select id="sort" class="form-control">
								<option value="v-1">Has a comment</option>
								<option value="v-2">Not responded</option>
								<option value="v-3">Responded</option>
								<option value="v-4">Newest to oldest</option>
								<option value="v-4">Oldest to newest</option>
							</select>
						</div>
						<div class="col-sm-12">
							<div
								class="d-flex align-items-start font-16 font-regular text-darkblue p-3 border1 mt-20 mb-30">
								<i class="font-18 bi bi-info-circle-fill me-2"></i>Encourage your students to give
								ratings and reviews to your course. This helps new students to enroll in your course.
							</div>
						</div>
					</div>
					<div class="border1">
						<div class="border-bottom1 p-2 p-md-3">
							<div class="row">
								<div class="col-12 col-sm-6 col-md-4 col-lg-3">
									<div class="thumbBlock">
										<img src="{{url('/')}}/public/teacher/images/v-thumb1.jpg" class="img-fluid w-100" alt="img">
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-8 col-lg-9">
									<a href="javascript:void(0);"
										class="mt-2 md-md-3 font-18 font-black text-darkblue line-clamp">Part-time BHMS
										Academy -
										Materia Medica for BHMS and</a>
									<p class="font-16 font-regular text-darkblue">3.98 Coursera</p>
								</div>
							</div>
						</div>
						<div class="p-4">
							<ul class="review-response">
								<li>
									<div class="reviewby d-flex align-items-start">
										<div class="user-avtar bg-darkblue position-relative"> MS </div>
										<div class="mb-0">
											<p class="font-16 font-bold text-darkblue mb-0">Summra imtiaz</p>
											<p class="font-14 font-regular text-dgray mb-0">Updated 9 months ago</p>
											<span class="text-yellow d-inline-flex">
												<i class="bi bi-star-fill"></i>
												<i class="bi bi-star-fill ms-1"></i>
												<i class="bi bi-star-fill ms-1"></i>
												<i class="bi bi-star-fill ms-1"></i>
												<i class="bi bi-star ms-1"></i>
											</span>
										</div>
									</div>
									<p class="font-16 font-regular text-darkblue">Appreciate your hard work to students.
										Thank you sir</p>
								</li>
							</ul>
							<div class="mt-20">
						    	<a class="borderBtn" href="post-response.html">Respond</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
