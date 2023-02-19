@extends('teacher.layouts.master')
@section('content')

<div class="left-menu innerMenu">
			<ul class="nav flex-column">
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/detail/{{$course_detail->id}}" class="nav-link "> Course landing page </a>
				</li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/curriculum/{{$course_detail->id}}" class="nav-link"> Curriculum </a></li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/pricing/{{$course_detail->id}}" class="nav-link active"> Pricing </a></li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/promotion/{{$course_detail->id}}" class="nav-link"> Promotions </a></li>
			</ul>
		</div>

		<div class="content">
			<div class="ui-block">
				<div class="p-4 border-bottom1 d-sm-flex align-items-center justify-content-between">
					<h1 class="playfair font-24 font-bold text-darkblue mb-2 mb-sm-0">Pricing</h1>
				</div>
				<div class="p-4 mb-100">
					<h3 class="font-14 font-bold text-darkblue">Course Price</h3>
					<p class="font-16 font-regular text-darkblue">Please select an appropriate price for your course below and click 'Save'. All courses have 1 year validity. So a user will have to re-purchase your course in case they want to extend access. Hence set your course price accordingly.</p>
					<form action="{{url('/')}}/teacher/course/update/price/{{$course_detail->id}}" method="post" class="pricing">
					{{csrf_field()}}	
					<div class="row g-3">
							<div class="col pricecol">
								<label class="font-16 font-medium text-darkblue me-3" for="">INR</label>
								<input class="form-control" name="price" placeholder="Enter Amount" value="{{$course_detail->price}}">
							</div>
							<div class="col validity">
								<select id="validity" class="form-control">
									<option value="v-1" selected>1 Yr</option>
								</select>
							</div>
							<div class="col validity">
								<button type="submit" class="themeBtn2 h-100">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
@endsection
