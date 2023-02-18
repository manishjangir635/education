
@extends('teacher.layouts.master')
@section('content')

		<div class="content">
			<div class="ui-block">
				<div class="p-4 border-bottom1">
					<div class="d-md-flex align-items-center">
						<h1 class="playfair font-24 font-bold text-darkblue mb-0">Students</h1>
						<div class="allCoursesSel">
						<select id="allCourses" class="form-control">
							<option value="v-1">All Courses</option>
							<option value="v-2">Part-time BHMS Academy - Materia Medica for BHMS and</option>
							<option value="v-3">Part-time BHMS Academy - Materia Medica for BHMS and</option>
						</select>
						</div>
				    </div>
				</div>
				<div class="p-4">
					<div class="row justify-content-end">
						<div class="col-sm-12 col-lg-6 col-xl-5 col-xxl-4">
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Search by name">
								<button type="button" class="themeBtn position-absolute end-0 z-index-3 h-100"><img src="images/search.svg" width="22" height="22" alt="Icon"></button>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="table-responsive border-table">
								<table class="table border-0">
									<thead>
										<tr>
											<th width="250">Name</th>
											<th width="250">Date of enrollment <i class="bi bi-chevron-down"></i></th>
											<th width="250" colspan="2">Valid until <i class="bi bi-chevron-down"></i></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Sugandha Shivam</td>
											<td>07/02/2022</td>
											<td>15/07/2022</td>
											<td align="right"><a class="borderBtn" href="messages.html">Message</a></td>
										</tr>
										<tr>
											<td>Punit Agrwal</td>
											<td>05/03/2022</td>
											<td>15/07/2022</td>
											<td align="right"><a class="borderBtn" href="messages.html">Message</a></td>
										</tr>
										<tr>
											<td>Radhe Singh</td>
											<td>07/02/2022</td>
											<td>15/07/2022</td>
											<td align="right"><a class="borderBtn" href="messages.html">Message</a></td>
										</tr>
										<tr>
											<td>Aman Sharma</td>
											<td>07/02/2022</td>
											<td>15/07/2022</td>
											<td align="right"><a class="borderBtn" href="messages.html">Message</a></td>
										</tr>
										<tr>
											<td>Sugandha Shivam</td>
											<td>07/02/2022</td>
											<td>15/07/2022</td>
											<td align="right"><a class="borderBtn" href="messages.html">Message</a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<ul class="pagination justify-content-end">
								<li class="page-item">
								  <a class="page-link"><i class="bi bi-chevron-left"></i></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
								  <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
								</li>
						  </ul>
						</div>
					</div>
				</div>
			</div>
		</div>

        @endsection
