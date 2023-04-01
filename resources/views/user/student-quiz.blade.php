@extends('layouts.user-layout.user-layout')
@section('content')
<!-- =======================
Page Banner START -->
<section class="pt-0">
	<div class="container-fluid px-0">
		<div class="card bg-blue h-100px h-md-200px rounded-0" style="background:url(images/pattern/04.png) no-repeat center center; background-size:cover;">
		</div>
	</div>
	<div class="container mt-n4">
		<div class="row">
			<div class="col-12">
				<div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
					<div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
						<!-- Avatar -->
						<div class="col-auto">
							<div class="avatar avatar-xxl position-relative mt-n3">
								<img class="avatar-img rounded-circle border border-white border-3 shadow" src="images/avatar/09.jpg" alt="">
								<span class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span>
							</div>
						</div>
						<!-- Profile info -->
						<div class="col d-sm-flex justify-content-between align-items-center">
							<div>
								<h1 class="my-1 fs-4">Lori Stevens</h1>
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-3 mb-1 mb-sm-0">
										<span class="h6">255</span>
										<span class="text-body fw-light">points</span>
									</li>
									<li class="list-inline-item me-3 mb-1 mb-sm-0">
										<span class="h6">7</span>
										<span class="text-body fw-light">Completed courses</span>
									</li>
									<li class="list-inline-item me-3 mb-1 mb-sm-0">
										<span class="h6">52</span>
										<span class="text-body fw-light">Completed lessons</span>
									</li>
								</ul>
							</div>
							<!-- Button -->
							<div class="mt-2 mt-sm-0">
								<a href="student-course-list.html" class="btn btn-outline-primary mb-0">View my courses</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Advanced filter responsive toggler START -->
				<!-- Divider -->
				<hr class="d-xl-none">
				<div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
					<a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
					<button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
						<i class="fas fa-sliders-h"></i>
					</button>
				</div>
				<!-- Advanced filter responsive toggler END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">
		<div class="row">

			<!-- Left sidebar START -->
			<div class="col-xl-3">
				<!-- Responsive offcanvas body START -->
				<div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
					<!-- Offcanvas header -->
					<div class="offcanvas-header bg-light">
						<h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
						<button  type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
					</div>
					<!-- Offcanvas body -->
					<div class="offcanvas-body p-3 p-xl-0">
						<div class="bg-dark border rounded-3 p-3 w-100">
							<!-- Dashboard menu -->
							<div class="list-group list-group-dark list-group-borderless collapse-list">
								<a class="list-group-item" href="student-dashboard.html"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
								<a class="list-group-item" href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-2"></i>My Subscriptions</a>
								<a class="list-group-item" href="student-course-list.html"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
								<a class="list-group-item" href="student-course-resume.html"><i class="far fa-fw fa-file-alt me-2"></i>Course Resume</a>
								<a class="list-group-item active" href="student-quiz.html"><i class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a>
								<a class="list-group-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment Info</a>
								<a class="list-group-item" href="student-bookmark.html"><i class="bi bi-cart-check fa-fw me-2"></i>Wishlist</a>
								<a class="list-group-item" href="instructor-edit-profile.html"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
								<a class="list-group-item" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
								<a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
								<a class="list-group-item text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
								<!-- Collapse menu -->
								<a class="list-group-item" data-bs-toggle="collapse" href="#collapseauthentication" role="button" aria-expanded="false" aria-controls="collapseauthentication">
									<i class="bi bi-lock fa-fw me-2"></i>Dropdown level
								</a>
								<!-- Submenu -->
								<ul class="nav collapse flex-column" id="collapseauthentication" data-bs-parent="#navbar-sidebar">
									<li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a></li>
									<li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Responsive offcanvas body END -->
			</div>
			<!-- Left sidebar END -->

			<!-- Main content START -->
			<div class="col-xl-9">

				<!-- Course item START -->
				<div class="card border">

						<div class="card-header border-bottom">
							<!-- Course list START -->
							<div class="row">
								<div class="col-12">
									<div class="card">
										<div class="row g-0">
											<div class="col-md-2">
												<img src="images/courses/4by3/01.jpg" class="rounded-2" alt="Card image">
											</div>
											<div class="col-md-10">
												<div class="card-body">
													<!-- Title -->
													<h3 class="card-title"><a href="#">The Complete Digital Marketing Course - 12 Courses in 1</a></h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Course list END -->
						</div>

						<div class="card-body">
							<!-- Step content START -->
							<div class="card bg-transparent border rounded-3 mb-1">
								<div id="stepper" class="bs-stepper stepper-outline">
									<!-- Card header -->
									<div class="card-header bg-light border-bottom px-lg-5">
										<!-- Step Buttons START -->
										<div class="bs-stepper-header" role="tablist">
											<!-- Step 1 -->
											<div class="step" data-target="#step-1">
												<div class="d-grid text-center align-items-center">
													<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger1" aria-controls="step-1">
														<span class="bs-stepper-circle">1</span>
													</button>
												</div>
											</div>
											<div class="line"></div>

											<!-- Step 2 -->
											<div class="step" data-target="#step-2">
												<div class="d-grid text-center align-items-center">
													<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger2" aria-controls="step-2">
														<span class="bs-stepper-circle">2</span>
													</button>
												</div>
											</div>
											<div class="line"></div>

											<!-- Step 3 -->
											<div class="step" data-target="#step-3">
												<div class="d-grid text-center align-items-center">
													<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger3" aria-controls="step-3">
														<span class="bs-stepper-circle">3</span>
													</button>
												</div>
											</div>
											<div class="line"></div>

											<!-- Step 4 -->
											<div class="step" data-target="#step-4">
												<div class="d-grid text-center align-items-center">
													<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger4" aria-controls="step-4">
														<span class="bs-stepper-circle">4</span>
													</button>
												</div>
											</div>
										</div>
										<!-- Step Buttons END -->
									</div>

									<!-- Card body START -->
									<div class="card-body">

										<h6 class="text-danger text-end mb-0"><i class="bi bi-clock-history me-2"></i>Time Left: 00:01:30</h6>

										<!-- Step content START -->
										<div class="bs-stepper-content">
											<form>

												<!-- Step 1 content START -->
												<div id="step-1" role="tabpanel" class="content fade" aria-labelledby="steppertrigger1">
													<!-- Title -->
													<h4>How do you protect your business against cyber-crime?</h4>

													<hr> <!-- Divider -->
													<div class="vstack gap-2">
														<!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option1">
														 <label class="btn btn-outline-primary w-100" for="option1">We have cybersecurity insurance coverage</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option2">
														 <label class="btn btn-outline-primary w-100" for="option2">Our dedicated staff will protect us</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option3">
														 <label class="btn btn-outline-primary w-100" for="option3">We give regular training for best practices</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option4">
														 <label class="btn btn-outline-primary w-100" for="option4">Third-party vendor protection</label>
													 </div>
													</div>

													<!-- Step 1 button -->
													<div class="d-flex justify-content-center mt-3">
														<button type="button" class="btn btn-primary next-btn mb-0">Next question</button>
													</div>

												</div>
												<!-- Step 1 content END -->

												<!-- Step 2 content START -->
												<div id="step-2" role="tabpanel" class="content fade" aria-labelledby="steppertrigger2">
													<!-- Title -->
													<h4>What is SEO?</h4>

													<hr> <!-- Divider -->
													<div class="vstack gap-2">
														<!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option11">
														 <label class="btn btn-outline-primary w-100" for="option11">We have cybersecurity insurance coverage</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option22">
														 <label class="btn btn-outline-primary w-100" for="option22">Our dedicated staff will protect us</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option33">
														 <label class="btn btn-outline-primary w-100" for="option33">We give regular training for best practices</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option44">
														 <label class="btn btn-outline-primary w-100" for="option44">Third-party vendor protection</label>
													 </div>
													</div>

													<!-- Next button -->
													<div class="d-flex justify-content-center mt-3">
														<button type="button" class="btn btn-primary next-btn mb-0">Next question</button>
													</div>
												</div>
												<!-- Step 2 content END -->

												<!-- Step 3 content START -->
												<div id="step-3" role="tabpanel" class="content fade" aria-labelledby="steppertrigger3">
													<!-- Title -->
													<h4>Who should join this course?</h4>

													<hr> <!-- Divider -->
													<div class="vstack gap-2">
														<!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option111">
														 <label class="btn btn-outline-primary w-100" for="option111">We have cybersecurity insurance coverage</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option222">
														 <label class="btn btn-outline-primary w-100" for="option222">Our dedicated staff will protect us</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option333">
														 <label class="btn btn-outline-primary w-100" for="option333">We give regular training for best practices</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option444">
														 <label class="btn btn-outline-primary w-100" for="option444">Third-party vendor protection</label>
													 </div>
													</div>

													<!-- Next button -->
													<div class="d-flex justify-content-center mt-3">
														<button type="button" class="btn btn-primary next-btn mb-0">Next question</button>
													</div>

												</div>
												<!-- Step 3 content END -->

												<!-- Step 4 content START -->
												<div id="step-4" role="tabpanel" class="content fade" aria-labelledby="steppertrigger4">
													<!-- Title -->
													<h4>What are the T&C for this program?</h4>

													<hr> <!-- Divider -->
													<div class="vstack gap-2">
														<!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option1111">
														 <label class="btn btn-outline-primary w-100" for="option1111">We have cybersecurity insurance coverage</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option2222">
														 <label class="btn btn-outline-primary w-100" for="option2222">Our dedicated staff will protect us</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option3333">
														 <label class="btn btn-outline-primary w-100" for="option3333">We give regular training for best practices</label>
													 </div>
													 <!-- Feed ques item -->
													 <div>
														 <input type="radio" class="btn-check" name="ques" id="option4444">
														 <label class="btn btn-outline-primary w-100" for="option4444">Third-party vendor protection</label>
													 </div>
													</div>

													<!-- Next button -->
													<div class="d-flex justify-content-center mt-3">
														<button type="button" class="btn btn-success next-btn mb-0">View result</button>
													</div>

												</div>
												<!-- Step 4 content END -->

											</form>
										</div>
									</div>
									<!-- Card body END -->
								</div>
							</div>
						</div>

				</div>
				<!-- Course item END -->

			</div>
			<!-- Main content END -->
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->
@endsection
@section('model')

<!-- Modal START -->
<div class="modal fade" id="coursePremium" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header border-0 bg-transparent">
				<!-- Close button -->
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<!-- Modal body -->
			<div class="modal-body px-5 pb-5 position-relative overflow-hidden">

				<!-- Element -->
				<figure class="position-absolute bottom-0 end-0 mb-n4 me-n4 d-none d-sm-block">
					<img src="images/element/01.svg" alt="element">
				</figure>
				<figure class="position-absolute top-0 end-0 z-index-n1 opacity-2">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="818.6px" height="235.1px" viewBox="0 0 818.6 235.1">
						<path class="fill-info" d="M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z"></path>
					</svg>
				</figure>
				<!-- Title -->
				<h2>Get Premium Course in <span class="text-success">$800</span></h2>
				<p>Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving breakfast am or perfectly.</p>
				<!-- Content -->
				<div class="row mb-3 item-collapse">
					<div class="col-sm-6">
						<ul class="list-group list-group-borderless">
							<li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>High quality Curriculum</li>
							<li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>Tuition Assistance</li>
							<li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>Diploma course</li>
						</ul>
					</div>
					<div class="col-sm-6">
						<ul class="list-group list-group-borderless">
							<li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>Intermediate courses</li>
							<li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>Over 200 online courses</li>
						</ul>
					</div>
				</div>
				<!-- Button -->
				<a href="#" class="btn btn-lg btn-orange-soft">Purchase premium</a>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer d-block bg-info">
				<div class="d-sm-flex justify-content-sm-between align-items-center text-center text-sm-start">
					<!-- Social media button -->
				<ul class="list-inline mb-0 social-media-btn mb-2 mb-sm-0">
					<li class="list-inline-item"> <a class="btn btn-sm mb-0 me-1 bg-white text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm mb-0 me-1 bg-white text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm mb-0 me-1 bg-white text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm mb-0 bg-white text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
				</ul>
				<!-- Contact info -->
				<div>
					<p class="mb-1 small"><a href="#" class="text-white"><i class="far fa-envelope fa-fw me-2"></i>example@gmail.com</a></p>
					<p class="mb-0 small"><a href="#" class="text-white"><i class="fas fa-headset fa-fw me-2"></i>123-456-789</a></p>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal END -->
@endsection
