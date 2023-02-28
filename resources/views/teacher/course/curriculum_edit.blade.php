@extends('teacher.layouts.master')
@section('content')



<div class="left-menu innerMenu">
			<ul class="nav flex-column">
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/detail/{{$course_detail->id}}" class="nav-link "> Course landing page </a>
				</li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/curriculum/{{$course_detail->id}}" class="nav-link active"> Curriculum </a></li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/pricing/{{$course_detail->id}}" class="nav-link"> Pricing </a></li>
				<li class="nav-item"><a href="{{url('/')}}/teacher/course/edit/promotion/{{$course_detail->id}}" class="nav-link"> Promotions </a></li>
			</ul>
		</div>


		<div class="content">
			<div class="ui-block">
				<div class="p-4 border-bottom1">
					<h1 class="playfair font-24 font-bold text-darkblue mb-2 mb-sm-0">Curriculum</h1>
				</div>
				<div class="p-4 mb-100">
					<div class="d-flex align-items-start rounded-0 p-3 border1 mb-30 alert alert-dismissible fade show">
						<i class="font-18 bi bi-info-circle-fill me-2"></i>
						<p class="mb-0 font-16 font-medium text-darkblue">Here's where you add course content-like
							lectures, course sections, assignments, and more. Click a +
							<br class="d-none d-lg-block">icon on the left to get started.
						</p>
						<a class="themeBtn2 ms-auto" href="javascript:void(0);" data-bs-dismiss="alert">Dismiss</a>
					</div>

					<div class="curriculmSection wrapper1">
						

						@foreach($course_detail->section_list as $section_key => $section)
					    <div class="border1 p-4 bg-lightgrey mb-30">
							<div class="sectionHeader d-flex align-items-center">
								<span class="font-16 font-medium text-darkblue">Section {{$section_key+1}}:</span>
								<span class="font-16 font-regular text-darkblue"><img class="mx-2" src="{{url('/')}}/public/teacher/images/file.svg"
										alt="icon"> {{ $section->title}}</span>
								<span class="action_btn mx-3">
									<a href="javascript:void(0);"><img src="{{url('/')}}/public/teacher/images/edit2.svg" alt="img"></a>
									<a href="{{url('/')}}/delete_section/{{$section->id}}" onclick="return confirm('Are you sure you want to delete this item?');" class="ms-3"><img src="{{url('/')}}/public/teacher/images/delete.svg"
											alt="img"></a>
								</span>
                               <span class="action_btn ms-auto">
									<!-- <a href="javascript:void(0);"><img src="{{url('/')}}/public/teacher/images/drag.svg" alt="img"></a> -->
								</span> 
							</div>
							<div class="accordion wrapper2" id="accordionExample">

							@foreach($section->lecture_list as $lecture_key => $lecture)
								<div class="accordion-item">
									<div class="accordion-header sectionHeader accordion-button mb-0 collapsed"
										data-bs-toggle="collapse" data-bs-target="#collapse_{{$course_detail->id}}_{{$section_key}}_{{$lecture_key}}" aria-expanded="false">
										<span
											class="font-16 font-regular text-darkblue me-2 d-inline-flex align-items-center"><i
												class="bi bi-check-circle-fill font-18 me-2"></i> Lecture {{$lecture_key+1}}:</span>
										<span
											class="font-16 font-regular text-darkblue d-inline-flex align-items-center"><i
												class="bi bi-play-circle-fill font-18 me-2"></i> {{$lecture->title}}</span>
										<span class="action_btn mx-3">
											<a href="javascript:void(0);"><img src="{{url('/')}}/public/teacher/images/edit2.svg" width="18"
													alt="img"></a>
											<a href="{{url('/')}}/delete_lecture/{{$lecture->id}}" onclick="return confirm('Are you sure you want to delete this item?');" class="ms-3"><img src="{{url('/')}}/public/teacher/images/delete.svg"
													width="18" alt="img"></a>
										</span>
										<div class="d-inline-block ms-auto">
											
										@if($lecture->status==1)
										<span class="font-16 font-regular text-darkblue me-5" style="color:green;"> Approved</span>
										@elseif($lecture->status==2)
										<span class="font-16 font-regular text-darkblue me-5" style="color:red;">Rejected</span>
										@else
										<span class="font-16 font-regular text-darkblue me-5" style="color:orange;">Pending for Admin approval</span>
										@endif
										
											<span class="action_btn">
												<!-- <a href="javascript:void(0);"><img src="{{url('/')}}/public/teacher/images/drag.svg" alt="img"></a> -->
											</span>
										</div>
									</div>

									
									<div id="collapse_{{$course_detail->id}}_{{$section_key}}_{{$lecture_key}}" class="accordion-collapse collapse"
										data-bs-parent="#accordionExample">
										<div class="accordion-body p-3 pt-0">
										@if($lecture->status==1)
										<iframe src="https://player.vimeo.com/video/{{$lecture->video}}?autoplay=1" style="width: 100%" height="360" frameborder="0" allow="autoplay; fullscreen"  allowfullscreen></iframe>
										@elseif($lecture->status==2)
										<span class="font-16 font-regular text-darkblue me-5" style="color:red;">Your Video is Rejected by Admin</span>
										@else
										<span class="font-16 font-regular text-darkblue me-5" style="color:orange;">Video under review.Please wait untill admin verify your video</span>
										@endif
											
										</div>
									</div>
								</div>

								@endforeach


								
							
								<div class="addNewsection w-100 position-absolute start-0">
									<a class="add_new ml-n1" data-bs-toggle="collapse" href="#newSubitem{{$section->id}}" role="button"
									aria-expanded="false">
										<img src="{{url('/')}}/public/teacher/images/addNew.svg" alt="icon" width="20" height="20">
									</a>
								</div>
								<div class="collapse mt-20" id="newSubitem{{$section->id}}">
									<div class="card py-3 px-4 rounded-0 border1">
									<form action="{{url('/')}}/teacher/course/create/lecture/{{$section->id}}/{{$course_detail->id}}" method="post" enctype="multipart/form-data" class="lecture_form">
											{{csrf_field()}}
											<div class="row g-3 align-items-center">
												<div class="col-auto">
													<label class="font-16 font-medium text-darkblue" for="">New Lecture:</label>
												</div>
												<div class="col">
													<input type="text" class="form-control" placeholder="Enter a Title" name="title">
												</div>
												<div class="col">
												<input  type="file" name="video" class="form-control">
												</div>
												<div class="col-12 mt-20 text-end">
												<div class="progress" style="display: none;">
                                                 <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
												</div>

												<div  style="display: none; margin-bottom: 7px;" class="optimise">Please wait...</div>
												
													<button class="btn p-0 me-3 borderBtn border-0 rounded-0 font-14"
														type="submit">Cancel</button>
													<button class="themeBtn2" type="submit">Add Lecture</button>
													
												</div>
											</div>
										</form>
									</div>
								</div>
								
							</div>
						</div>
						@endforeach


						
						<div class="addNewsection">
							<a class="add_new ml-n1" data-bs-toggle="collapse" href="#newSection" role="button"
								aria-expanded="false">
								<img src="{{url('/')}}/public/teacher/images/addNew.svg" alt="icon" width="20" height="20">
							</a>
							<div class="collapse mt-10" id="newSection">
								<div class="card py-3 px-4 rounded-0 border1">
									<form action="{{url('/')}}/teacher/course/create/section/{{$course_detail->id}}" method="post" id="section_form">
									{{csrf_field()}}	
									<div class="row g-3 align-items-center">
											<div class="col-auto">
												<label class="font-16 font-medium text-darkblue" for="">New Section:</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" placeholder="Enter a Title" name="title">
											</div>
											<div class="col-12 mt-20 text-end">
												<button class="btn p-0 me-3 borderBtn border-0 rounded-0 font-14"
													type="submit">Cancel</button>
												<button class="themeBtn2" type="submit">Add Section</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					
						
					</div>
				</div>
			</div>
		</div>



<script>

$( "#section_form" ).validate({
  rules: {
    title: {
      required: true,
    }
  }
});


$('.lecture_form').each(function() { 

    var self=$(this);
    
	$(this).validate({        
       
	submitHandler: function(form,event) {
		event.preventDefault();
		var formData = new FormData(form);
        $.ajax({
          url: self.attr('action'),
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
		  xhr: function() {
        var xhr = new XMLHttpRequest();

			xhr.upload.addEventListener('progress', function(e) {
			if (e.lengthComputable) {
				console.log(e.lengthComputable,e.loaded,e.total);
				var percent = Math.round((e.loaded / e.total) * 100);
				$('.progress').show();
                $('.progress-bar').width(percent + '%');
                $('.progress-bar').text(percent + '%');

				if(percent==100){
					$('.optimise').show();
				}
			}
			});

			return xhr;
		},
          success: function(response) {
			toastr.success("Video uploaded successfully");

			setTimeout(function(){ location.reload(true); }, 1000);
            
          },
          error: function(error) {
            console.log(error);
          }
        });

},


  rules: {
    title: {
      required: true,
    },

	video: {
      required: true,
    }
  }

    });
});






</script>


		@endsection
