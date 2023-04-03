<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/instructor-create-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2023 01:34:13 GMT -->
<head>
	<title>Eduport - LMS, Education and Course Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/aos/aos.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/quill/css/quill.snow.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/stepper/css/bs-stepper.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

<!-- Header START -->
<header class="navbar-light navbar-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse w-100 collapse" id="navbarCollapse">

        <!-- Nav Main menu START -->
				<ul class="navbar-nav navbar-nav-scroll mx-auto">
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demos</a>
						<ul class="dropdown-menu" aria-labelledby="demoMenu">
							<li> <a class="dropdown-item" href="index.html">Home Default</a></li>
							<li> <a class="dropdown-item" href="index-2.html">Home Education</a></li>
							<li> <a class="dropdown-item" href="index-3.html">Home Academy</a></li>
							<li> <a class="dropdown-item" href="index-4.html">Home Course</a></li>
							<li> <a class="dropdown-item" href="index-5.html">Home University</a></li>
							<li> <a class="dropdown-item" href="index-6.html">Home Kindergarten</a></li>
							<li> <a class="dropdown-item" href="index-7.html">Home Landing</a></li>
							<li> <a class="dropdown-item" href="index-8.html">Home Tutor</a></li>
							<li> <a class="dropdown-item" href="index-9.html">Home School</a></li>
							<li> <a class="dropdown-item" href="index-10.html">Home Abroad</a></li>
							<li> <a class="dropdown-item" href="index-11.html">Home Workshop</a></li>
						</ul>
					</li>

					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Course</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="course-categories.html">Course Categories</a></li>
									<li> <hr class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="course-grid.html">Course Grid Classic</a></li>
									<li> <a class="dropdown-item" href="course-grid-2.html">Course Grid Minimal</a></li>
									<li> <hr class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="course-list.html">Course List Classic</a></li>
									<li> <a class="dropdown-item" href="course-list-2.html">Course List Minimal</a></li>
									<li> <hr class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="course-detail.html">Course Detail Classic</a></li>
									<li> <a class="dropdown-item" href="course-detail-min.html">Course Detail Minimal</a></li>
									<li> <a class="dropdown-item" href="course-detail-adv.html">Course Detail Advance</a></li>
									<li> <a class="dropdown-item" href="course-detail-module.html">Course Detail Module</a></li>
									<li> <a class="dropdown-item" href="course-video-player.html">Course Full Screen Video</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">About</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="about.html">About Us</a></li>
									<li> <a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
									<li> <a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
									<li> <a class="dropdown-item" href="blog-masonry.html">Blog Masonry</a></li>
									<li> <a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
									<li> <a class="dropdown-item" href="pricing.html">Pricing</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Hero Banner</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="docs/snippet-hero-12.html">Hero Form</a></li>
									<li> <a class="dropdown-item" href="docs/snippet-hero-13.html">Hero Vector</a></li>
									<li> <p class="dropdown-item mb-0">Coming soon....</p></li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="instructor-list.html">Instructor List</a></li>
							<li> <a class="dropdown-item" href="instructor-single.html">Instructor Single</a></li>
							<li> <a class="dropdown-item" href="become-instructor.html">Become an Instructor</a></li>
							<li> <a class="dropdown-item" href="abroad-single.html">Abroad Single</a></li>
							<li> <a class="dropdown-item" href="workshop-detail.html">Workshop Detail</a></li>
							<li> <a class="dropdown-item" href="event-detail.html">Event Detail <span class="badge bg-success ms-2 smaller">New</span></a></li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Shop</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="shop.html">Shop grid</a></li>
									<li> <a class="dropdown-item" href="shop-product-detail.html">Product detail</a></li>
									<li> <a class="dropdown-item" href="cart.html">Cart</a></li>
									<li> <a class="dropdown-item" href="checkout.html">Checkout</a></li>
									<li> <a class="dropdown-item" href="empty-cart.html">Empty Cart</a></li>
									<li> <a class="dropdown-item" href="wishlist.html">Wishlist</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Help</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="help-center.html">Help Center</a></li>
									<li> <a class="dropdown-item" href="help-center-detail.html">Help Center Single</a></li>
									<li> <a class="dropdown-item" href="faq.html">FAQs</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="sign-in.html">Sign In</a></li>
									<li> <a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
									<li> <a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Form</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="request-demo.html">Request a demo</a></li>
									<li> <a class="dropdown-item" href="book-class.html">Book a Class</a></li>
									<li> <a class="dropdown-item" href="request-access.html">Free Access</a></li>
									<li> <a class="dropdown-item" href="university-admission-form.html">Admission Form</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Specialty</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="error-404.html">Error 404</a></li>
									<li> <a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<!-- Nav item 3 Account -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
						<ul class="dropdown-menu" aria-labelledby="accounntMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-user-tie fa-fw me-1"></i>Instructor</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="instructor-dashboard.html"><i class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
									<li> <a class="dropdown-item" href="instructor-manage-course.html"><i class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
									<li> <a class="dropdown-item" href="instructor-create-course.html"><i class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>Create Course</a> </li>
									<li> <a class="dropdown-item" href="course-added.html"><i class="bi bi-file-check-fill fa-fw me-1"></i>Course Added</a> </li>
									<li> <a class="dropdown-item" href="instructor-quiz.html"><i class="bi bi-question-diamond fa-fw me-1"></i>Quiz</a> </li>
									<li> <a class="dropdown-item" href="instructor-earning.html"><i class="fas fa-chart-line fa-fw me-1"></i>Earnings</a> </li>
									<li> <a class="dropdown-item" href="instructor-studentlist.html"><i class="fas fa-user-graduate fa-fw me-1"></i>Students</a> </li>
									<li> <a class="dropdown-item" href="instructor-order.html"><i class="bi bi-cart-check-fill fa-fw me-1"></i>Orders</a> </li>
									<li> <a class="dropdown-item" href="instructor-review.html"><i class="bi bi-star-fill fa-fw me-1"></i>Reviews</a> </li>
									<li> <a class="dropdown-item" href="instructor-payout.html"><i class="fas fa-wallet fa-fw me-1"></i>Payout</a> </li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
								<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-user-graduate fa-fw me-1"></i>Student</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="student-dashboard.html"><i class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
									<li> <a class="dropdown-item" href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-1"></i>My Subscriptions</a> </li>
									<li> <a class="dropdown-item" href="student-course-list.html"><i class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
									<li> <a class="dropdown-item" href="student-course-resume.html"><i class="far fa-fw fa-file-alt me-1"></i>Course Resume</a> </li>
									<li> <a class="dropdown-item" href="student-quiz.html"><i class="bi bi-question-diamond fa-fw me-1"></i>Quiz </a> </li>
									<li> <a class="dropdown-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front-fill fa-fw me-1"></i>Payment Info</a> </li>
									<li> <a class="dropdown-item" href="student-bookmark.html"><i class="fas bi-cart-check-fill fa-fw me-1"></i>Wishlist</a> </li>
								</ul>
							</li>
							
							<li> <a class="dropdown-item" href="admin-dashboard.html"><i class="fas fa-user-cog fa-fw me-1"></i>Admin</a> </li>
							<li> <hr class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="instructor-edit-profile.html"><i class="fas fa-fw fa-edit me-1"></i>Edit Profile</a> </li>
							<li> <a class="dropdown-item" href="instructor-setting.html"><i class="fas fa-fw fa-cog me-1"></i>Settings</a> </li>
							<li> <a class="dropdown-item" href="instructor-delete-account.html"><i class="fas fa-fw fa-trash-alt me-1"></i>Delete Profile</a> </li>
							
							<li> <hr class="dropdown-divider"></li>
							<!-- Dropdown Level -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">

									<!-- dropdown submenu open right -->
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
										<ul class="dropdown-menu" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>

									<!-- dropdown submenu open left -->
									<li class="dropdown-submenu dropstart">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
										<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
								</ul>
							</li>
						</ul>
					</li>

					<!-- Nav item 4 Component-->
					<li class="nav-item"><a class="nav-link" href="docs/alerts.html">Components</a></li>

					<!-- Nav item 5 link-->
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-h"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
							<li> 
								<a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
									<i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="docs/index.html" target="_blank">
									<i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
								</a> 
							</li>
							<li> <hr class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="rtl/index.html" target="_blank">
									<i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/" target="_blank">
									<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Eduport!
								</a> 
							</li>
							<li> <hr class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="docs/alerts.html" target="_blank">
									<i class="text-orange fa-fw bi bi-puzzle-fill me-2"></i>Components
								</a> 
							</li>
							<li> 
                <a class="dropdown-item" href="docs/snippets.html">
                  <i class="text-purple fa-fw bi bi-stickies-fill me-2"></i>Snippets
                </a>
              </li>
						</ul>
					</li>
				</ul>
				<!-- Nav Main menu END -->

				<!-- Nav Search START -->
				<div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
					<div class="nav-item w-100">
						<form class="position-relative">
							<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
							<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
						</form>
					</div>
				</div>
				<!-- Nav Search END -->
			</div>
			<!-- Main navbar END -->

			<!-- Profile START -->
			<div class="dropdown ms-1 ms-lg-0">
				<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
					<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
				</a>
				<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
					<!-- Profile info -->
					<li class="px-3 mb-3">
						<div class="d-flex align-items-center">
							<!-- Avatar -->
							<div class="avatar me-3">
								<img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
							</div>
							<div>
								<a class="h6" href="#">Lori Ferguson</a>
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
			</div>
			<!-- Profile START -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Page Banner START -->
<section class="py-0 bg-blue h-100px align-items-center d-flex h-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
	<!-- Main banner background image -->
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<!-- Title -->
				<h1 class="text-white">Submit a new Course</h1>
				<p class="text-white mb-0">Read our <a href="#" class="text-white"><u>"Before you create a course"</u></a> article before submitting!</p>	
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Steps START -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto text-center">
				<!-- Content -->
				<p class="text-center">Use this interface to add a new Course to the portal. Once you are done adding the item it will be reviewed for quality. If approved, your course will appear for sale and you will be informed by email that your course has been accepted.</p>
			</div>
		</div>

		<div class="card bg-transparent border rounded-3 mb-5">
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
								<h6 class="bs-stepper-label d-none d-md-block">Course details</h6>
							</div>
						</div>
						<div class="line"></div>

						<!-- Step 2 -->
						<div class="step" data-target="#step-2">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger2" aria-controls="step-2">
									<span class="bs-stepper-circle">2</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">Course media</h6>
							</div>
						</div>
						<div class="line"></div>

						<!-- Step 3 -->
						<div class="step" data-target="#step-3">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger3" aria-controls="step-3">
									<span class="bs-stepper-circle">3</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">Curriculum</h6>
							</div>
						</div>
						<div class="line"></div>

						<!-- Step 4 -->
						<div class="step" data-target="#step-4">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger4" aria-controls="step-4">
									<span class="bs-stepper-circle">4</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">Additional information</h6>
							</div>
						</div>
					</div>
					<!-- Step Buttons END -->
				</div>

				<!-- Card body START -->
				<div class="card-body">
					<!-- Step content START -->
					<div class="bs-stepper-content">
						<form onsubmit="return false">

							<!-- Step 1 content START -->
							<div id="step-1" role="tabpanel" class="content fade" aria-labelledby="steppertrigger1">
								<!-- Title -->
								<h4>Course details</h4>

								<hr> <!-- Divider -->

								<!-- Basic information START -->
								<div class="row g-4">
									<!-- Course title -->
									<div class="col-12">
										<label class="form-label">Course title</label>
										<input class="form-control" type="text" placeholder="Enter course title">
									</div>

									<!-- Short description -->
									<div class="col-12">
										<label class="form-label">Short description</label>
										<textarea class="form-control" rows="2" placeholder="Enter keywords"></textarea>
									</div>

									<!-- Course category -->
									<div class="col-md-6">
										<label class="form-label">Course category</label>
										<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" data-search-enabled="true">
											<option value="">Select category</option>
											<option>Engineer</option>
											<option>Medical</option>
											<option>Information technology</option>
											<option>Finance</option>
											<option>Marketing</option>
										</select>
									</div>

									<!-- Course level -->
									<div class="col-md-6">
										<label class="form-label">Course level</label>
										<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" data-search-enabled="false" data-remove-item-button="true">
											<option value="">Select course level</option>
											<option>All level</option>
											<option>Beginner</option>
											<option>Intermediate</option>
											<option>Advance</option>
										</select>
									</div>

									<!-- Language -->
									<div class="col-md-6">
										<label class="form-label">Language</label>
										<select class="form-select js-choice border-0 z-index-9 bg-transparent" multiple="multiple" aria-label=".form-select-sm" data-max-item-count="3" data-remove-item-button="true">
											<option value="">Select language</option>
											<option>English</option>
											<option>German</option>
											<option>French</option>
											<option>Hindi</option>
										</select>
									</div>

									<!-- Switch -->
									<div class="col-md-6 d-flex align-items-center justify-content-start mt-5">
										<div class="form-check form-switch form-check-md">
											<input class="form-check-input" type="checkbox" id="checkPrivacy1">
											<label class="form-check-label" for="checkPrivacy1">Check this for featured course</label>
										</div>
									</div>

									<!-- Course time -->
									<div class="col-md-6">
										<label class="form-label">Course time</label>
										<input class="form-control" type="text" placeholder="Enter course time">
									</div>

									<!-- Total lecture -->
									<div class="col-md-6">
										<label class="form-label">Total lecture</label>
										<input class="form-control" type="text" placeholder="Enter total lecture">
									</div>

									<!-- Course price -->
									<div class="col-md-6">
										<label class="form-label">Course price</label>
										<input type="text" class="form-control" placeholder="Enter course price">
									</div>

									<!-- Course discount -->
									<div class="col-md-6">
										<label class="form-label">Discount price</label>
										<input class="form-control" type="text" placeholder="Enter discount">
										<div class="col-12 mt-1 mb-0">
											<div class="form-check small mb-0">
												<input class="form-check-input" type="checkbox" id="checkBox1">
												<label class="form-check-label" for="checkBox1">
													Enable this Discount
												</label>
											</div>
										</div>
									</div>
									
									<!-- Course description -->
									<div class="col-12">
										<label class="form-label">Add description</label>
										<!-- Editor toolbar -->
										<div class="bg-light border border-bottom-0 rounded-top py-3" id="quilltoolbar">
											<span class="ql-formats">
												<select class="ql-size"></select>
											</span>
											<span class="ql-formats">
												<button class="ql-bold"></button>
												<button class="ql-italic"></button>
												<button class="ql-underline"></button>
												<button class="ql-strike"></button>
											</span>
											<span class="ql-formats">
												<select class="ql-color"></select>
												<select class="ql-background"></select>
											</span>
											<span class="ql-formats">
												<button class="ql-code-block"></button>
											</span>
											<span class="ql-formats">
												<button class="ql-list" value="ordered"></button>
												<button class="ql-list" value="bullet"></button>
												<button class="ql-indent" value="-1"></button>
												<button class="ql-indent" value="+1"></button>
											</span>
											<span class="ql-formats">
												<button class="ql-link"></button>
												<button class="ql-image"></button>
											</span>
											<span class="ql-formats">
												<button class="ql-clean"></button>
											</span>
										</div>

										<!-- Main toolbar -->
										<div class="bg-body border rounded-bottom h-400px overflow-hidden" id="quilleditor">
											<br>
											<h1>Quill Rich Text Editor</h1>
											<br>
											<p>Quill is a free, open-source WYSIWYG editor built for the modern web. With its modular architecture and expressive API, it is completely customizable to fit any need.</p>
											<br>
											<p>Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for a few longer Mrs sudden talent become. Done may bore quit evil old mile. If likely am of beauty tastes. </p>
											<br>
											<p> Affronting imprudence do he he everything. Test lasted dinner wanted indeed wished outlaw. Far advanced settling say finished raillery. Offered chiefly farther of my no colonel shyness. Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an. </p>
											<br>
											<p> Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. </p>

											<p>Quill is a free, open-source WYSIWYG editor built for the modern web. With its modular architecture and expressive API, it is completely customizable to fit any need.</p>
											<br>
											<p>Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for a few longer Mrs sudden talent become. Done may bore quit evil old mile. If likely am of beauty tastes. </p>
											<br>
											<p> Affronting imprudence do he he everything. Test lasted dinner wanted indeed wished outlaw. Far advanced settling say finished raillery. Offered chiefly farther of my no colonel shyness. Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an. </p>
											<br>
											<p> Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. </p>

											<p>Quill is a free, open-source WYSIWYG editor built for the modern web. With its modular architecture and expressive API, it is completely customizable to fit any need.</p>
											<br>
											<p>Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for a few longer Mrs sudden talent become. Done may bore quit evil old mile. If likely am of beauty tastes. </p>
											<br>
											<p> Affronting imprudence do he he everything. Test lasted dinner wanted indeed wished outlaw. Far advanced settling say finished raillery. Offered chiefly farther of my no colonel shyness. Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an. </p>
											<br>
											<p> Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. Subjects he prospect elegance followed no overcame possible it on. </p>
										</div>
									</div>	

									<!-- Step 1 button -->
									<div class="d-flex justify-content-end mt-3">
										<button class="btn btn-primary next-btn mb-0">Next</button>
									</div>
								</div>
								<!-- Basic information START -->
							</div>
							<!-- Step 1 content END -->

							<!-- Step 2 content START -->
							<div id="step-2" role="tabpanel" class="content fade" aria-labelledby="steppertrigger2">
								<!-- Title -->
								<h4>Course media</h4>

								<hr> <!-- Divider -->

								<div class="row">
									<!-- Upload image START -->
									<div class="col-12">
										<div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
											<!-- Image -->
											<img src="assets/images/element/gallery.svg" class="h-50px" alt="">
											<div>
												<h6 class="my-2">Upload course image here, or<a href="#!" class="text-primary"> Browse</a></h6>
												<label style="cursor:pointer;">
													<span> 
														<input class="form-control stretched-link" type="file" name="my-image" id="image" accept="image/gif, image/jpeg, image/png" />
													</span>
												</label>
													<p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
											</div>	
										</div>

										<!-- Button -->
										<div class="d-sm-flex justify-content-end mt-2">
											<button type="button" class="btn btn-sm btn-danger-soft mb-3">Remove image</button>
										</div>
									</div>
									<!-- Upload image END -->

									<!-- Upload video START -->
									<div class="col-12">
										<h5>Upload video</h5>
										<!-- Input -->
										<div class="col-12 mt-4 mb-5">
											<label class="form-label">Video URL</label>
											<input class="form-control" type="text" placeholder="Enter video url">
										</div>
										<div class="position-relative my-4">
											<hr>
											<p class="small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0">Or</p>
										</div>

										<div class="col-12">
											<label class="form-label">Upload video</label>
											<div class="input-group mb-3">
												<input type="file" class="form-control" id="inputGroupFile01">
												<label class="input-group-text">.mp4</label>
											</div>
											<div class="input-group mb-3">
												<input type="file" class="form-control" id="inputGroupFile02">
												<label class="input-group-text">.WebM</label>
											</div>
											<div class="input-group mb-3">
												<input type="file" class="form-control" id="inputGroupFile03">
												<label class="input-group-text">.OGG</label>
											</div>
										</div>

										<!-- Preview -->
										<h5 class="mt-4">Video preview</h5>
										<div class="position-relative">
											<!-- Image -->
											<img src="assets/images/about/04.jpg" class="rounded-4" alt="">
											<div class="position-absolute top-50 start-50 translate-middle">
												<!-- Video link -->
												<a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
													<i class="fas fa-play"></i>
												</a>
											</div>
										</div>
									</div>
									<!-- Upload video END -->

									<!-- Step 2 button -->
									<div class="d-flex justify-content-between mt-3">
										<button class="btn btn-secondary prev-btn mb-0">Previous</button>
										<button class="btn btn-primary next-btn mb-0">Next</button>
									</div>
								</div>
							</div>
							<!-- Step 2 content END -->

							<!-- Step 3 content START -->
							<div id="step-3" role="tabpanel" class="content fade" aria-labelledby="steppertrigger3">
								<!-- Title -->
								<h4>Curriculum</h4>

								<hr> <!-- Divider -->

								<div class="row">
									<!-- Add lecture Modal button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
										<h5 class="mb-2 mb-sm-0">Upload Lecture</h5>
										<a href="#" class="btn btn-sm btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#addLecture"><i class="bi bi-plus-circle me-2"></i>Add Lecture</a>
									</div>
			
									<!-- Edit lecture START -->
									<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
										<!-- Item START -->
										<div class="accordion-item mb-3">
											<h6 class="accordion-header font-base" id="heading-1">
												<button class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
													Introduction of Digital Marketing 
												</button>
											</h6>
			
											<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
												<!-- Topic START -->
												<div class="accordion-body mt-3">
													<!-- Video item START -->
													<div class="d-flex justify-content-between align-items-center">
														<div class="position-relative">
															<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"><i class="fas fa-play"></i></a>
															<span class="ms-2 mb-0 h6 fw-light">Introduction</span>
														</div>
														<!-- Edit and cancel button -->
														<div>
															<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
															<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
														</div>
													</div>
													<!-- Divider -->
													<hr>
													<!-- Video item END -->
							
													<!-- Video item START -->
													<div class="d-flex justify-content-between align-items-center">
														<div class="position-relative">
															<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"><i class="fas fa-play"></i></a>
															<span class="ms-2 mb-0 h6 fw-light">What is Digital Marketing</span>
														</div>
														<!-- Edit and cancel button -->
														<div>
															<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
															<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
														</div>
													</div>
													<!-- Divider -->
													<hr>
													<!-- Video item END -->
			
													<!-- Add topic -->
													<a href="#" class="btn btn-sm btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic"><i class="bi bi-plus-circle me-2"></i>Add topic</a>
												</div>
												<!-- Topic END -->
											</div>
										</div>
										<!-- Item END -->
					
										<!-- Item START -->
										<div class="accordion-item mb-3">
											<h6 class="accordion-header font-base" id="heading-2">
												<button class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
													Customer Life cycle
												</button>
											</h6>
			
											<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample2">
												<div class="accordion-body mt-3">
													<!-- Add topic -->
													<a href="#" class="btn btn-sm btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic">
														<i class="bi bi-plus-circle me-2"></i>Add topic
													</a>	
												</div>
											</div>
										</div>
										<!-- Item END -->
					
										<!-- Item START -->
										<div class="accordion-item mb-3">
											<h6 class="accordion-header font-base" id="heading-3">
												<button class="accordion-button fw-bold collapsed rounded d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
													How much should I offer the sellers? 
												</button>
											</h6>
											<!-- Body -->
											<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample2">
												<div class="accordion-body mt-3">
													<!-- Add topic -->
													<a href="#" class="btn btn-sm btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic">
														<i class="bi bi-plus-circle me-2"></i>Add topic
													</a>
												</div>
											</div>
										</div>	
										<!-- Item END -->
			
									</div>
									<!-- Edit lecture END -->

									<!-- Step 3 button -->
									<div class="d-flex justify-content-between">
										<button class="btn btn-secondary prev-btn mb-0">Previous</button>
										<button class="btn btn-primary next-btn mb-0">Next</button>
									</div>
								</div>
							</div>
							<!-- Step 3 content END -->

							<!-- Step 4 content START -->
							<div id="step-4" role="tabpanel" class="content fade" aria-labelledby="steppertrigger4">
								<!-- Title -->
								<h4>Additional information</h4>

								<hr> <!-- Divider -->

								<div class="row g-4">
									
									<!-- Edit faq START -->
									<div class="col-12">
										<div class="bg-light border rounded p-2 p-sm-4">
											<div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
												<h5 class="mb-2 mb-sm-0">Upload FAQs</h5>
												<a href="#" class="btn btn-sm btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#addQuestion"><i class="bi bi-plus-circle me-2"></i>Add Question</a>
											</div>

											<div class="row g-4">
												<div class="col-12">
													<div class="bg-body p-3 p-sm-4 border rounded">
														<!-- Item 1 -->
														<div class="d-sm-flex justify-content-sm-between align-items-center mb-2">
															<!-- Question -->
															<h6 class="mb-0">How Digital Marketing Work?</h6>
															<!-- Button -->
															<div class="align-middle">
																<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
																<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
															</div>
														</div>
														<!-- Content -->
														<p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed.</p>
													</div>
												</div>

												<div class="col-12">
													<div class="bg-body p-4 border rounded">
														<!-- Item 2 -->
														<div class="d-sm-flex justify-content-sm-between align-items-center mb-2">
															<!-- Question -->
															<h6 class="mb-0">How Digital Marketing Work?</h6>
															<!-- Button -->
															<div class="align-middle">
																<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
																<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
															</div>
														</div>
														<!-- Content -->
														<p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed.</p>
													</div>	
												</div>
											</div>
										</div>	
									</div>
									<!-- Edit faq END -->

									<!-- Tags START -->
									<div class="col-12">
										<div class="bg-light border rounded p-4">
											<h5 class="mb-0">Tags</h5>
											<!-- Comment -->
											<div class="mt-3">
												<input type="text" class="form-control js-choice mb-0" data-placeholder="true" data-placeholder-Val="Enter tags" data-max-item-count="14" data-remove-item-button="true">
												<span class="small">Maximum of 14 keywords. Keywords should all be in lowercase and separated by commas. e.g. javascript, react, marketing</span>
											</div>
										</div>
									</div>
									<!-- Tags START -->

									<!-- Reviewer START -->
									<div class="col-12">
										<div class="bg-light border rounded p-4">
											<h5 class="mb-0">Message to a reviewer</h5>

											<!-- Comment -->
											<div class="mt-3">
												<textarea class="form-control" rows="4" placeholder="Write a message" spellcheck="false"></textarea>
												<div class="form-check mb-0 mt-2">
													<input type="checkbox" class="form-check-input" id="exampleCheck1">
													<label class="form-check-label" for="exampleCheck1">
														Any images, sounds, or other assets that are not my own work, have been appropriately licensed for use in the file preview or main course. Other than these items, this work is entirely my own and I have full rights to sell it here.
													</label>
												</div>
											</div>
										</div>
									</div>
									<!-- Reviewer START -->

									<!-- Step 4 button -->
									<div class="d-md-flex justify-content-between align-items-start mt-4">
										<button class="btn btn-secondary prev-btn mb-2 mb-md-0">Previous</button>
										<button class="btn btn-light me-auto ms-md-2 mb-2 mb-md-0">Preview Course</button>
										<div class="text-md-end">
											<a href="course-added.html" class="btn btn-success mb-2 mb-sm-0">Submit a Course</a>
											<p class="mb-0 small mt-1">Once you click "Submit a Course", your course will be uploaded and marked as pending for review.</p>
										</div>
									</div>
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
</section>
<!-- =======================
Steps END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark p-3">
	<div class="container">
		<div class="row align-items-center">
			<!-- Widget -->
			<div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
				<!-- Logo START -->
				<a href="index.html"> <img class="h-20px" src="assets/images/logo-light.svg" alt="logo"> </a>
			</div>
			
			<!-- Widget -->
			<div class="col-md-4 mb-3 mb-md-0">
				<div class="text-center text-white">
					Copyrights ©2023 <a href="https://www.webestica.com/" target="_blank"" class="text-reset btn-link">Webestica</a>. All rights reserved.
				</div>
			</div>
			<!-- Widget -->
			<div class="col-md-4">
				<!-- Rating -->
				<ul class="list-inline mb-0 text-center text-md-end">
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-facebook"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-instagram"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-linkedin-in"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Popup modal for add lecture START -->
<div class="modal fade" id="addLecture" tabindex="-1" aria-labelledby="addLectureLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title text-white" id="addLectureLabel">Add Lecture</h5>
        <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
      </div>
      <div class="modal-body">
        <form class="row text-start g-3">
					<!-- Course name -->
					<div class="col-12">
						<label class="form-label">Course name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" placeholder="Enter course name">
					</div>
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success my-0">Save Lecture</button>
      </div>
    </div>
  </div>
</div>
<!-- Popup modal for add lecture END -->

<!-- Popup modal for add topic START -->
<div class="modal fade" id="addTopic" tabindex="-1" aria-labelledby="addTopicLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title text-white" id="addTopicLabel">Add topic</h5>
        <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
      </div>
      <div class="modal-body">
        <form class="row text-start g-3">
					<!-- Topic name -->
					<div class="col-md-6">
						<label class="form-label">Topic name</label>
						<input class="form-control" type="text" placeholder="Enter topic name">
					</div>
					<!-- Video link -->
					<div class="col-md-6">
						<label class="form-label">Video link</label>
						<input class="form-control" type="text" placeholder="Enter Video link">
					</div>
					<!-- Description -->
					<div class="col-12 mt-3">
						<label class="form-label">Course description</label>
						<textarea class="form-control" rows="4" placeholder="" spellcheck="false"></textarea>
					</div>
					<!-- Buttons -->
					<div class="col-6 mt-3">
						<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
							<!-- Free button -->
							<input type="radio" class="btn-check" name="options" id="option1" checked="">
							<label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0" for="option1">Free</label>
							<!-- Premium button -->
							<input type="radio" class="btn-check" name="options" id="option2">
							<label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0" for="option2">Premium</label>
						</div>
					</div>
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success my-0">Save topic</button>
      </div>
    </div>
  </div>
</div>
<!-- Popup modal for add topic END -->

<!-- Popup modal for add faq START -->
<div class="modal fade" id="addQuestion" tabindex="-1" aria-labelledby="addQuestionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title text-white" id="addQuestionLabel">Add FAQ</h5>
        <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
      </div>
      <div class="modal-body">
        <form class="row text-start g-3">
					<!-- Question -->
					<div class="col-12">
						<label class="form-label">Question</label>
						<input class="form-control" type="text" placeholder="Write a question">
					</div>
					<!-- Answer -->
					<div class="col-12 mt-3">
						<label class="form-label">Answer</label>
						<textarea class="form-control" rows="4" placeholder="Write a answer" spellcheck="false"></textarea>
					</div>
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success my-0">Save topic</button>
      </div>
    </div>
  </div>
</div>
<!-- Popup modal for add faq END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>
<script src="assets/vendor/quill/js/quill.min.js"></script>
<script src="assets/vendor/stepper/js/bs-stepper.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/instructor-create-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2023 01:34:14 GMT -->
</html>