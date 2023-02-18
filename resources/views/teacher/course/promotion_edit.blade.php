@extends('teacher.layouts.master')
@section('content')

<div class="left-menu innerMenu">
			<ul class="nav flex-column">
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/detail/{{$course_detail->id}}" class="nav-link "> Course landing page </a>
				</li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/curriculum/{{$course_detail->id}}" class="nav-link"> Curriculum </a></li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/pricing/{{$course_detail->id}}" class="nav-link"> Pricing </a></li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/promotion/{{$course_detail->id}}" class="nav-link active"> Promotions </a></li>
			</ul>
		</div>

		<div class="content">
			<div class="ui-block">
				<div class="p-4 border-bottom1 d-sm-flex align-items-center justify-content-between">
					<h1 class="playfair font-24 font-bold text-darkblue mb-2 mb-sm-0">Promotions</h1>
				</div>
				<div class="p-4 mb-100">
					<div class="p-3 border1 mb-30">
						<h3 class="font-14 font-bold text-darkblue">Refer students</h3>
						<p class="mb-0 font-16 font-regular text-darkblue">Any time a student uses this link to register, we will credit you with the sale. <a class="detail-link font-16">Learn more</a></p>
						<div class="input-group mt-2">
							<input type="text" class="form-control border-end-0"
								placeholder="https://www.udemy.com/course/retro-vintage-logo-design-from-concept-to-presentation/learn/lecture/20719442#overview" disabled>
							<button class="btn rounded-0 borderBtn align-items-center" type="button">Copy</button>
						</div>
					</div>
					<a href="javascript:void(0);" class="themeBtn2" data-bs-toggle="modal"
								data-bs-target="#create_coupon">Create new coupon</a>		
					<div class="row mt-30">
						<div class="col-sm-12 col-lg-6 col-xl-7 col-xxl-8 align-self-end">
							<h3 class="mb-3 font-16 font-bold text-darkblue">Coupon Created</h3>
						</div>
						<div class="col-sm-12 col-lg-6 col-xl-5 col-xxl-4">
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Search Coupon Code">
								<button type="button" class="themeBtn position-absolute end-0 z-index-3 h-100"><img src="images/search.svg" width="22" height="22" alt="Icon"></button>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="table-responsive ">
								<table class="table line-table">
									<thead>
										<tr>
											<th>Code</th>
											<th>Discount price</th>
											<th>Start date <img src="images/down2.svg" alt="arrow"></th>
											<th>End date</th>
											<th>Redemptions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>50for150</td>
											<td>₹ 50</td>
											<td>12/07/2002</td>
											<td>13/07/2002</td>
											<td>8 / Unlimited</td>
										</tr>
										<tr>
											<td>ptb466</td>
											<td>₹ 20</td>
											<td>14/07/2002</td>
											<td>15/07/2002</td>
											<td>10 / Unlimited</td>
										</tr>
										<tr>
											<td>dsffa50</td>
											<td>₹ 30</td>
											<td>14/07/2002</td>
											<td>15/07/2002</td>
											<td>20 / Unlimited</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
