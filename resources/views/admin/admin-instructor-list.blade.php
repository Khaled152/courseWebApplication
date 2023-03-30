@extends('layouts.admin-layout.admin-header')
@section('content')
	<!-- Page main content START -->
	<!-- Page content START -->
<div class="page-content">

	<!-- Top bar START -->
	<nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3">
		<div class="container-fluid p-0">
			<div class="d-flex align-items-center w-100">

				<!-- Logo START -->
				<div class="d-flex align-items-center d-xl-none">
					<a class="navbar-brand" href="index.html">
						<img class="light-mode-item navbar-brand-item h-30px" src="images/logo-mobile.svg" alt="">
						<img class="dark-mode-item navbar-brand-item h-30px" src="images/logo-mobile-light.svg" alt="">
					</a>
				</div>
				<!-- Logo END -->

				<!-- Toggler for sidebar START -->
				<div class="navbar-expand-xl sidebar-offcanvas-menu">
					<button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
						<i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip" data-bs-target="#offcanvasMenu"> </i>
					</button>
				</div>
				<!-- Toggler for sidebar END -->

				<!-- Top bar left -->
				<div class="navbar-expand-lg ms-auto ms-xl-0">

					<!-- Toggler for menubar START -->
					<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-animation">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</button>
					<!-- Toggler for menubar END -->

					<!-- Topbar menu START -->
					<div class="collapse navbar-collapse w-100" id="navbarTopContent">
						<!-- Top search START -->
						<div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
							<div class="nav-item w-100">
								<form class="position-relative">
									<input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" aria-label="Search">
									<button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
								</form>
							</div>
						</div>
						<!-- Top search END -->
					</div>
					<!-- Topbar menu END -->
				</div>
				<!-- Top bar left END -->

				<!-- Top bar right START -->
				<div class="ms-xl-auto">
					<ul class="navbar-nav flex-row align-items-center">

						<!-- Notification dropdown START -->
						<li class="nav-item ms-2 ms-md-3 dropdown">
							<!-- Notification button -->
							<a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
								<i class="bi bi-bell fa-fw"></i>
							</a>
							<!-- Notification dote -->
							<span class="notif-badge animation-blink"></span>

							<!-- Notification dropdown menu START -->
							<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
								<div class="card bg-transparent">
									<div class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
										<h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
										<a class="small" href="#">Clear all</a>
									</div>
									<div class="card-body p-0">
										<ul class="list-group list-unstyled list-group-flush">
											<!-- Notif item -->
											<li>
												<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
													<div class="me-3">
														<div class="avatar avatar-md">
															<img class="avatar-img rounded-circle" src="images/avatar/08.jpg" alt="avatar">
														</div>
													</div>
													<div>
														<p class="text-body small m-0">Congratulate <b>Joan Wallace</b> for graduating from <b>Microverse university</b></p>
														<u class="small">Say congrats</u>
													</div>
												</a>
											</li>

											<!-- Notif item -->
											<li>
												<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
													<div class="me-3">
														<div class="avatar avatar-md">
															<img class="avatar-img rounded-circle" src="images/avatar/02.jpg" alt="avatar">
														</div>
													</div>
													<div>
														<h6 class="mb-1">Larry Lawson Added a new course</h6>
														<p class="small text-body m-0">What's new! Find out about new features</p>
														<u class="small">View detail</u>
													</div>
												</a>
											</li>

											<!-- Notif item -->
											<li>
												<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
													<div class="me-3">
														<div class="avatar avatar-md">
															<img class="avatar-img rounded-circle" src="images/avatar/05.jpg" alt="avatar">
														</div>
													</div>
													<div>
														<h6 class="mb-1">New request to apply for Instructor</h6>
														<u class="small">View detail</u>
													</div>
												</a>
											</li>

											<!-- Notif item -->
											<li>
												<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
													<div class="me-3">
														<div class="avatar avatar-md">
															<img class="avatar-img rounded-circle" src="images/avatar/03.jpg" alt="avatar">
														</div>
													</div>
													<div>
														<h6 class="mb-1">Update v2.3 completed successfully</h6>
														<p class="small text-body m-0">What's new! Find out about new features</p>
														<small class="text-body">5 min ago</small>
													</div>
												</a>
											</li>
										</ul>
									</div>
									<!-- Button -->
									<div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
										<a href="#" class="stretched-link">See all incoming activity</a>
									</div>
								</div>
							</div>
							<!-- Notification dropdown menu END -->
						</li>
						<!-- Notification dropdown END -->

						<!-- Profile dropdown START -->
						<li class="nav-item ms-2 ms-md-3 dropdown">
							<!-- Avatar -->
							<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
								<img class="avatar-img rounded-circle" src="images/avatar/01.jpg" alt="avatar">
							</a>

							<!-- Profile dropdown START -->
							<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
								<!-- Profile info -->
								<li class="px-3">
									<div class="d-flex align-items-center">
										<!-- Avatar -->
										<div class="avatar me-3 mb-3">
											<img class="avatar-img rounded-circle shadow" src="images/avatar/01.jpg" alt="avatar">
										</div>
										<div>
											<a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
											<p class="small m-0">example@gmail.com</p>
										</div>
									</div>
								</li>
                <li> <hr class="dropdown-divider"></li>
								<!-- Links -->
								<li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
								<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
								<li> <hr class="dropdown-divider"></li>

								<!-- Dark mode options START -->
								<li>
									<div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
										<!-- <span>Mode:</span> -->
										<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
												<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
												<use href="#"></use>
											</svg> Light
										</button>
										<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
												<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
												<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
												<use href="#"></use>
											</svg> Dark
										</button>
										<button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
												<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
												<use href="#"></use>
											</svg> Auto
										</button>
									</div>
								</li>
								<!-- Dark mode options END-->
							</ul>
							<!-- Profile dropdown END -->
						</li>
						<!-- Profile dropdown END -->
					</ul>
				</div>
				<!-- Top bar right END -->
			</div>
		</div>
	</nav>
	<!-- Top bar END -->

	<!-- Page main content START -->
	<div class="page-content-wrapper border">

		<!-- Title -->
		<div class="row">
			<div class="col-12">
				<h1 class="h3 mb-2 mb-sm-0">Instructors</h1>
			</div>
		</div>

		<!-- Card START -->
		<div class="card bg-transparent">

			<!-- Card header START -->
			<div class="card-header bg-transparent border-bottom px-0">
				<!-- Search and select START -->
				<div class="row g-3 align-items-center justify-content-between">

					<!-- Search bar -->
					<div class="col-md-8">
						<form class="rounded position-relative">
							<input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
							<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
						</form>
					</div>

					<!-- Tab buttons -->
					<div class="col-md-3">
						<!-- Tabs START -->
						<ul class="list-inline mb-0 nav nav-pills nav-pill-dark-soft border-0 justify-content-end" id="pills-tab" role="tablist">
							<!-- Grid tab -->
							<li class="nav-item">
								<a href="#nav-preview-tab-1" class="nav-link mb-0 me-2 active" data-bs-toggle="tab">
									<i class="fas fa-fw fa-th-large"></i>
								</a>
							</li>
							<!-- List tab -->
							<li class="nav-item">
								<a href="#nav-html-tab-1" class="nav-link mb-0" data-bs-toggle="tab">
									<i class="fas fa-fw fa-list-ul"></i>
								</a>
							</li>
						</ul>
						<!-- Tabs end -->
					</div>
				</div>
				<!-- Search and select END -->
			</div>
			<!-- Card header END -->

			<!-- Card body START -->
			<div class="card-body px-0">
				<!-- Tabs content START -->
				<div class="tab-content">

					<!-- Tabs content item START -->
					<div class="tab-pane fade show active" id="nav-preview-tab-1">
						<div class="row g-4">

							<!-- Card item START -->
							<div class="col-md-6 col-xxl-4">
								<div class="card bg-transparent border h-100">
									<!-- Card header -->
									<div class="card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between">
										<div class="d-sm-flex align-items-center">
											<!-- Avatar -->
											<div class="avatar avatar-md flex-shrink-0">
												<img class="avatar-img rounded-circle" src="images/avatar/09.jpg" alt="avatar">
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
												<h5 class="mb-0"><a href="#">Lori Stevens</a></h5>
												<p class="mb-0 small">Web Designer</p>
											</div>
										</div>

										<!-- Edit dropdown -->
										<div class="dropdown">
											<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-three-dots fa-fw"></i>
											</a>
											<!-- dropdown button -->
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
												<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
											</ul>
										</div>
									</div>

									<div class="card-body">
										<!-- Total students -->
										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0"><i class="fas fa-user-graduate fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Students</h6>
											</div>
											<span class="mb-0 fw-bold">5,354</span>
										</div>

										<!-- Total courses -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0"><i class="fas fa-book fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Courses</h6>
											</div>
											<span class="mb-0 fw-bold">15</span>
										</div>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent border-top">
										<div class="d-flex justify-content-between align-items-center">
											<!-- Rating star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
											</ul>
											<!-- Message button -->
											<a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
												<i class="bi bi-envelope-fill"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="col-md-6 col-xxl-4">
								<div class="card bg-transparent border h-100">
									<!-- Card header -->
									<div class="card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between">
										<div class="d-sm-flex align-items-center">
											<!-- Avatar -->
											<div class="avatar avatar-md flex-shrink-0">
												<img class="avatar-img rounded-circle" src="images/avatar/01.jpg" alt="avatar">
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
												<h5 class="mb-0"><a href="#">Carolyn Ortiz</a></h5>
												<p class="mb-0 small">Web Developer</p>
											</div>
										</div>

										<!-- Edit dropdown -->
										<div class="dropdown">
											<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare2" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-three-dots fa-fw"></i>
											</a>
											<!-- dropdown button -->
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare2">
												<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
											</ul>
										</div>
									</div>

									<div class="card-body">
										<!-- Total students -->
										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0"><i class="fas fa-user-graduate fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Students</h6>
											</div>
											<span class="mb-0 fw-bold">15,523</span>
										</div>

										<!-- Total courses -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0"><i class="fas fa-book fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Courses</h6>
											</div>
											<span class="mb-0 fw-bold">10</span>
										</div>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent border-top">
										<div class="d-flex justify-content-between align-items-center">
											<!-- Rating star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
											</ul>
											<!-- Message button -->
											<a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
												<i class="bi bi-envelope-fill"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="col-md-6 col-xxl-4">
								<div class="card bg-transparent border h-100">
									<!-- Card header -->
									<div class="card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between">
										<div class="d-sm-flex align-items-center">
											<!-- Avatar -->
											<div class="avatar avatar-md flex-shrink-0">
												<img class="avatar-img rounded-circle" src="images/avatar/03.jpg" alt="avatar">
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
												<h5 class="mb-0"><a href="#">Dennis Barrett</a></h5>
												<p class="mb-0 small">Developer and Instructor</p>
											</div>
										</div>

										<!-- Edit dropdown -->
										<div class="dropdown">
											<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare3" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-three-dots fa-fw"></i>
											</a>
											<!-- dropdown button -->
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare3">
												<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
											</ul>
										</div>
									</div>

									<div class="card-body">
										<!-- Total students -->
										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0"><i class="fas fa-user-graduate fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Students</h6>
											</div>
											<span class="mb-0 fw-bold">2,546</span>
										</div>

										<!-- Total courses -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0"><i class="fas fa-book fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Courses</h6>
											</div>
											<span class="mb-0 fw-bold">09</span>
										</div>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent border-top">
										<div class="d-flex justify-content-between align-items-center">
											<!-- Rating star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
											</ul>
											<!-- Message button -->
											<a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
												<i class="bi bi-envelope-fill"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="col-md-6 col-xxl-4">
								<div class="card bg-transparent border h-100">
									<!-- Card header -->
									<div class="card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between">
										<div class="d-sm-flex align-items-center">
											<!-- Avatar -->
											<div class="avatar avatar-md flex-shrink-0">
												<img class="avatar-img rounded-circle" src="images/avatar/04.jpg" alt="avatar">
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
												<h5 class="mb-0"><a href="#">Billy Vasquez</a></h5>
												<p class="mb-0 small">Full Stack Web Developer</p>
											</div>
										</div>

										<!-- Edit dropdown -->
										<div class="dropdown">
											<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare4" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-three-dots fa-fw"></i>
											</a>
											<!-- dropdown button -->
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare4">
												<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
											</ul>
										</div>
									</div>

									<div class="card-body">
										<!-- Total students -->
										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0"><i class="fas fa-user-graduate fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Students</h6>
											</div>
											<span class="mb-0 fw-bold">12,786</span>
										</div>

										<!-- Total courses -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0"><i class="fas fa-book fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Courses</h6>
											</div>
											<span class="mb-0 fw-bold">07</span>
										</div>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent border-top">
										<div class="d-flex justify-content-between align-items-center">
											<!-- Rating star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
											</ul>
											<!-- Message button -->
											<a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
												<i class="bi bi-envelope-fill"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="col-md-6 col-xxl-4">
								<div class="card bg-transparent border h-100">
									<!-- Card header -->
									<div class="card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between">
										<div class="d-sm-flex align-items-center">
											<!-- Avatar -->
											<div class="avatar avatar-md flex-shrink-0">
												<img class="avatar-img rounded-circle" src="images/avatar/05.jpg" alt="avatar">
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
												<h5 class="mb-0"><a href="#">Jacqueline Miller</a></h5>
												<p class="mb-0 small">Engineering Architect</p>
											</div>
										</div>

										<!-- Edit dropdown -->
										<div class="dropdown">
											<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare5" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-three-dots fa-fw"></i>
											</a>
											<!-- dropdown button -->
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare5">
												<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
											</ul>
										</div>
									</div>

									<div class="card-body">
										<!-- Total students -->
										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0"><i class="fas fa-user-graduate fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Students</h6>
											</div>
											<span class="mb-0 fw-bold">21,245</span>
										</div>

										<!-- Total courses -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0"><i class="fas fa-book fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Courses</h6>
											</div>
											<span class="mb-0 fw-bold">05</span>
										</div>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent border-top">
										<div class="d-flex justify-content-between align-items-center">
											<!-- Rating star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
											</ul>
											<!-- Message button -->
											<a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
												<i class="bi bi-envelope-fill"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="col-md-6 col-xxl-4">
								<div class="card bg-transparent border h-100">
									<!-- Card header -->
									<div class="card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between">
										<div class="d-sm-flex align-items-center">
											<!-- Avatar -->
											<div class="avatar avatar-md flex-shrink-0">
												<img class="avatar-img rounded-circle" src="images/avatar/06.jpg" alt="avatar">
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
												<h5 class="mb-0"><a href="#">Amanda Reed</a></h5>
												<p class="mb-0 small">Medical Science</p>
											</div>
										</div>

										<!-- Edit dropdown -->
										<div class="dropdown">
											<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare6" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-three-dots fa-fw"></i>
											</a>
											<!-- dropdown button -->
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare6">
												<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
											</ul>
										</div>
									</div>

									<div class="card-body">
										<!-- Total students -->
										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0"><i class="fas fa-user-graduate fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Students</h6>
											</div>
											<span class="mb-0 fw-bold">8,546</span>
										</div>

										<!-- Total courses -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0"><i class="fas fa-book fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Courses</h6>
											</div>
											<span class="mb-0 fw-bold">06</span>
										</div>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent border-top">
										<div class="d-flex justify-content-between align-items-center">
											<!-- Rating star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
											</ul>
											<!-- Message button -->
											<a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
												<i class="bi bi-envelope-fill"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="col-md-6 col-xxl-4">
								<div class="card bg-transparent border h-100">
									<!-- Card header -->
									<div class="card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between">
										<div class="d-sm-flex align-items-center">
											<!-- Avatar -->
											<div class="avatar avatar-md flex-shrink-0">
												<img class="avatar-img rounded-circle" src="images/avatar/07.jpg" alt="avatar">
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
												<h5 class="mb-0"><a href="#">Samuel Bishop</a></h5>
												<p class="mb-0 small">Finance manager</p>
											</div>
										</div>

										<!-- Edit dropdown -->
										<div class="dropdown">
											<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare7" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-three-dots fa-fw"></i>
											</a>
											<!-- dropdown button -->
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare7">
												<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
											</ul>
										</div>
									</div>

									<div class="card-body">
										<!-- Total students -->
										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0"><i class="fas fa-user-graduate fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Students</h6>
											</div>
											<span class="mb-0 fw-bold">5,354</span>
										</div>

										<!-- Total courses -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0"><i class="fas fa-book fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Courses</h6>
											</div>
											<span class="mb-0 fw-bold">15</span>
										</div>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent border-top">
										<div class="d-flex justify-content-between align-items-center">
											<!-- Rating star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
											</ul>
											<!-- Message button -->
											<a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
												<i class="bi bi-envelope-fill"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->

							<!-- Card item START -->
							<div class="col-md-6 col-xxl-4">
								<div class="card bg-transparent border h-100">
									<!-- Card header -->
									<div class="card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between">
										<div class="d-sm-flex align-items-center">
											<!-- Avatar -->
											<div class="avatar avatar-md flex-shrink-0">
												<img class="avatar-img rounded-circle" src="images/avatar/10.jpg" alt="avatar">
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
												<h5 class="mb-0"><a href="#">Louis Ferguson</a></h5>
												<p class="mb-0 small">Civil Engineer</p>
											</div>
										</div>

										<!-- Edit dropdown -->
										<div class="dropdown">
											<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare8" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-three-dots fa-fw"></i>
											</a>
											<!-- dropdown button -->
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare8">
												<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
												<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
											</ul>
										</div>
									</div>

									<div class="card-body">
										<!-- Total students -->
										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0"><i class="fas fa-user-graduate fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Students</h6>
											</div>
											<span class="mb-0 fw-bold">2,578</span>
										</div>

										<!-- Total courses -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0"><i class="fas fa-book fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Courses</h6>
											</div>
											<span class="mb-0 fw-bold">02</span>
										</div>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent border-top">
										<div class="d-flex justify-content-between align-items-center">
											<!-- Rating star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
											</ul>
											<!-- Message button -->
											<a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
												<i class="bi bi-envelope-fill"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->

						</div> <!-- Row END -->
					</div>
					<!-- Tabs content item END -->

					<!-- Tabs content item START -->
					<div class="tab-pane fade" id="nav-html-tab-1">
						<!-- Table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">Instructor name</th>
										<th scope="col" class="border-0">Detail</th>
										<th scope="col" class="border-0">Courses</th>
										<th scope="col" class="border-0">Total studentss</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody>
									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="images/avatar/09.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Lori Stevens</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Web Designer</h6>
										</td>

										<!-- Table data -->
										<td>15</td>

										<!-- Table data -->
										<td>5,354</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="images/avatar/01.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Carolyn Ortiz</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Web Developer</h6>
										</td>

										<!-- Table data -->
										<td>10</td>

										<!-- Table data -->
										<td>15,523</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="images/avatar/03.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Dennis Barrett</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Developer and Instructor</h6>
										</td>

										<!-- Table data -->
										<td>09</td>

										<!-- Table data -->
										<td>2,546</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="images/avatar/04.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Billy Vasquez</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Full Stack Web Developer</h6>
										</td>

										<!-- Table data -->
										<td>07</td>

										<!-- Table data -->
										<td>12,786</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="images/avatar/05.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Jacqueline Miller</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Engineering Architect</h6>
										</td>

										<!-- Table data -->
										<td>05</td>

										<!-- Table data -->
										<td>21,245</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="images/avatar/06.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Amanda Reed</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Medical Science</h6>
										</td>

										<!-- Table data -->
										<td>06</td>

										<!-- Table data -->
										<td>8,546</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="images/avatar/07.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Samuel Bishop</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Finance manager</h6>
										</td>

										<!-- Table data -->
										<td>15</td>

										<!-- Table data -->
										<td>5,354</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

									<!-- Table row -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="images/avatar/10.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link">Louis Ferguson</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0">Civil Engineer</h6>
										</td>

										<!-- Table data -->
										<td>02</td>

										<!-- Table data -->
										<td>2,578</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
												<i class="bi bi-envelope"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="bi bi-trash"></i>
											</button>
										</td>
									</tr>

								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Table END -->
					</div>
					<!-- Tabs content item END -->

				</div>
				<!-- Tabs content END -->
			</div>
			<!-- Card body END -->

			<!-- Card footer START -->
			<div class="card-footer bg-transparent p-0">
				<!-- Pagination START -->
				<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
					<!-- Content -->
					<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
					<!-- Pagination -->
					<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
						<ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
							<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
							<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<!-- Pagination END -->
			</div>
			<!-- Card footer END -->
		</div>
		<!-- Card END -->
	</div>
	<!-- Page main content END -->

</div>

@endsection
