@extends('teacher.layouts.master')
@section('content')
<div class="content">
			<div class="ui-block">
				<div class="p-4 border-bottom1">
					<h1 class="playfair font-24 font-bold text-darkblue mb-0">Messages</h1> </div>
				<div class="p-4">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-6">
							<h3 class="font-14 font-bold text-darkblue">All Message</h3>
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Search by keyword, sender name">
								<button type="button" class="themeBtn position-absolute end-0 z-index-3 h-100"><img src="{{url('/')}}/public/teacher/images/search.svg" width="22" height="22" alt="Icon"></button>
							</div>
							<ul class="chat-user-list">
								<li class="d-flex align-items-start justify-content-between flex-shrink-0">
									<div class="me-2 d-flex">
										<div class="user-avtar bg-darkblue position-relative"> MS <span class="active-user"></span></div>
										<div class="d-flex align-items-start flex-column">
											<p class="font-16 font-medium text-darkblue line-clamp">You: Thamk you for enrolling in Part-Time bhms Academy. I</p>
											<div class="mt-auto font-16 font-bold text-darkblue">Madhu Sharma</div>
										</div>
									</div>
									<div class="font-16 font-medium text-dgray flex-shrink-0">11 days ago</div>
								</li>
								<li class="d-flex align-items-start justify-content-between flex-shrink-0">
									<div class="me-2 d-flex">
										<div class="user-avtar bg-skyblue position-relative"> CH </div>
										<div class="d-flex align-items-start flex-column">
											<p class="font-16 font-medium text-darkblue line-clamp">You: Thamk you for enrolling in Part-Time bhms Academy. I</p>
											<div class="mt-auto font-16 font-bold text-darkblue">Madhu Sharma</div>
										</div>
									</div>
									<div class="font-16 font-medium text-dgray flex-shrink-0">11 days ago</div>
								</li>
								<li class="d-flex align-items-start justify-content-between flex-shrink-0">
									<div class="me-2 d-flex">
										<div class="user-avtar bg-yellow position-relative"> AJ </div>
										<div class="d-flex align-items-start flex-column">
											<p class="font-16 font-medium text-darkblue line-clamp">You: Thamk you for enrolling in Part-Time bhms Academy. I</p>
											<div class="mt-auto font-16 font-bold text-darkblue">Madhu Sharma</div>
										</div>
									</div>
									<div class="font-16 font-medium text-dgray flex-shrink-0">11 days ago</div>
								</li>
								<li class="d-flex align-items-start justify-content-between flex-shrink-0">
									<div class="me-2 d-flex">
										<div class="user-avtar bg-dgreen position-relative"> MS </div>
										<div class="d-flex align-items-start flex-column">
											<p class="font-16 font-medium text-darkblue line-clamp">You: Thamk you for enrolling in Part-Time bhms Academy. I</p>
											<div class="mt-auto font-16 font-bold text-darkblue">Madhu Sharma</div>
										</div>
									</div>
									<div class="font-16 font-medium text-dgray flex-shrink-0">11 days ago</div>
								</li>
								<li class="d-flex align-items-start justify-content-between flex-shrink-0">
									<div class="me-2 d-flex">
										<div class="user-avtar bg-dred position-relative"> DJ </div>
										<div class="d-flex align-items-start flex-column">
											<p class="font-16 font-medium text-darkblue line-clamp">You: Thamk you for enrolling in Part-Time bhms Academy. I</p>
											<div class="mt-auto font-16 font-bold text-darkblue">Madhu Sharma</div>
										</div>
									</div>
									<div class="font-16 font-medium text-dgray flex-shrink-0">11 days ago</div>
								</li>
								<li class="d-flex align-items-start justify-content-between flex-shrink-0">
									<div class="me-2 d-flex">
										<div class="user-avtar bg-dred position-relative"> DJ </div>
										<div class="d-flex align-items-start flex-column">
											<p class="font-16 font-medium text-darkblue line-clamp">You: Thamk you for enrolling in Part-Time bhms Academy. I</p>
											<div class="mt-auto font-16 font-bold text-darkblue">Madhu Sharma</div>
										</div>
									</div>
									<div class="font-16 font-medium text-dgray flex-shrink-0">11 days ago</div>
								</li>
							</ul>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-6  mt-4">
							<div class="border1 message-block">
								<div class="message-header">
									<div class="message-header-img"><img src="{{url('/')}}/public/teacher/images/userImg.jpg" alt="image"><span class="active-user"></span></div>
									<div class="active_state">
										<h4 class="font-16 font-bold text-darkblue mb-1">Taha Khan</h4>
										<h6 class="font-14 font-regular text-dgray mb-0">Active Right Now</h6> </div>
								</div>
								<div class="message-page">
									<div class="message-index">
										<div class="text-center font-16 font-bold text-darkblue pb-30">Jul 15, 2022 </div>
										<div class="outgoing-chat">
											<div class="outgoing-chat-msg">
												<p>People are asking me about theme development of our tasking.</p>
												<p>when should we go for it</p>
											</div>
											<div class="outgoing-chat-img"><img src="{{url('/')}}/public/teacher/images/userImg.jpg" alt=""><span class="time">12:45 pm</span></div>
										</div>
										<div class="recived-chat">
											<div class="recived-chat-img"><img src="{{url('/')}}/public/teacher/images/profile-img.png" alt=""><span class="time">12:45 pm</span></div>
											<div class="recived-msg">
												<div class="recived-msg-inbox">
													<p>People are asking me about theme development of our tasking.</p>
													<p>when should we go for it</p>
												</div>
											</div>
										</div>
										<div class="outgoing-chat">
											<div class="outgoing-chat-msg">
												<p>People are asking me about theme development of our tasking.</p>
												<p>when should we go for it</p>
											</div>
											<div class="outgoing-chat-img"><img src="{{url('/')}}/public/teacher/images/userImg.jpg" alt=""><span class="time">12:45 pm</span></div>
										</div>
									</div>
									<div class="msg-bottom">
										<div class="input-group align-items-center">
											<input type="text" class="form-control" placeholder="Type your message">
											<div class="input-group-append mx-2">
                                                <a href="#"><i class="font-16 bi bi-emoji-smile-fill"></i></a>
                                            </div>
											<div class="input-group-append mx-2"> <button class="btn" type="btn">
                                                <img src="{{url('/')}}/public/teacher/images/send.svg" alt="send"></button>
                                            </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
