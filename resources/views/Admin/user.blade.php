<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('template/assets/images/brand/favicon.ico')}}" />

		<!-- TITLE -->
		<title>Zanex – Bootstrap  Admin & Dashboard Template</title>

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('template/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('template/assets/css/dark-style.css')}}" rel="stylesheet"/>
		<link href="{{asset('template/assets/css/skin-modes.css')}}" rel="stylesheet" />

		<!-- SIDE-MENU CSS -->
		<link href="{{asset('template/assets/css/sidemenu.css')}}" rel="stylesheet" id="sidemenu-theme">

		<!--C3 CHARTS CSS -->
		<link href="{{asset('template/assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>

		<!-- SELECT2 CSS -->
		<link href="{{asset('template/assets/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

		<!-- DATA TABLE CSS -->
		<link href="{{asset('template/assets/plugins/datatable/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
		<link href="{{asset('template/assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}"  rel="stylesheet">
		<link href="{{asset('template/assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet" />

		<!-- INTERNAL SELECT2 CSS -->
		<link href="{{asset('template/assets/plugins/select2/select2.min.css')}}" rel="stylesheet"/>

		<!-- P-scroll bar css-->
		<link href="{{asset('template/assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{asset('template/assets/css/icons.css')}}" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="{{asset('template/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css')}}" media="all" href="{{asset('template/assets/colors/color1.css')}}" />

	</head>

	<body class="app sidebar-mini">

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('template/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!--APP-SIDEBAR-->
				<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="side-header">
						<a class="header-brand1" href="index.html">
							<img src="{{asset('template/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
							<img src="{{asset('template/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
							<img src="{{asset('template/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
							<img src="{{asset('template/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
						</a><!-- LOGO -->
					</div>
					<ul class="side-menu">
						<li><h3>Main</h3></li>
						<li class="slide">
							<a class="side-menu__item"  data-bs-toggle="slide" href="index.html"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
						<li><h3>Gestion des utilisateurs</h3></li>
						<li>
							<a class="side-menu__item" href="{{url('/admin/alluser')}}"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Voir tout le monde</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-user-check"></i><span class="side-menu__label">Voir l'equipe</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="cards.html" class="slide-item"> Facturation </a></li>
								<li><a href="calendar.html" class="slide-item"> Gestion</a></li>
								<li><a href="calendar2.html" class="slide-item"> Administrateur</a></li>
								
							</ul>
						</li>
						
						<li><h3>Gestion des Commandes</h3></li>
						<li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-folder-plus"></i><span class="side-menu__label">Voir tout les commandes</span></a>
						</li>
                        <li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-pocket"></i><span class="side-menu__label">Notifications</span></a>
						</li>
                        <li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-file"></i><span class="side-menu__label">Factures</span></a>
						</li>
                        <li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Recus</span></a>
						</li>
                        <li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-truck"></i><span class="side-menu__label">Bon de livraisons</span></a>
						</li>

						
						<li><h3>Charts & Tables</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="chart-chartist.html" class="slide-item">Chart Js</a></li>
								<li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
								<li><a href="chart-echart.html" class="slide-item"> ECharts</a></li>
								<li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
								<li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
								<li><a href="charts.html" class="slide-item"> C3 Bar Charts</a></li>
								<li><a href="chart-line.html" class="slide-item"> C3 Line Charts</a></li>
								<li><a href="chart-donut.html" class="slide-item"> C3 Donut Charts</a></li>
								<li><a href="chart-pie.html" class="slide-item"> C3 Pie charts</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-clipboard"></i><span class="side-menu__label">Tables</span><span class="badge bg-secondary side-badge">2</span></a>
							<ul class="slide-menu">
								<li><a href="tables.html" class="slide-item">Default table</a></li>
								<li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
							</ul>
						</li>
						<li><h3>Forms & Icons</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Forms</span><span class="badge bg-success side-badge">5</span></a>
							<ul class="slide-menu">
								<li><a href="form-elements.html" class="slide-item"> Form Elements</a></li>
								<li><a href="form-advanced.html" class="slide-item"> Form Advanced</a></li>
								<li><a href="wysiwyag.html" class="slide-item"> Form Editor</a></li>
								<li><a href="form-wizard.html" class="slide-item"> Form Wizard</a></li>
								<li><a href="form-validation.html" class="slide-item"> Form Validation</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-command"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
								<li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
								<li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
								<li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
								<li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
								<li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
								<li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
								<li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
								<li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
								<li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
							</ul>
						</li>
						<li><h3>Pages</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="profile.html" class="slide-item"> Profile</a></li>
								<li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
								<li><a href="email.html" class="slide-item"> Mail-Inbox</a></li>
								<li><a href="emailservices.html" class="slide-item"> Mail-Compose</a></li>
								<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
								<li><a href="about.html" class="slide-item"> About Company</a></li>
								<li><a href="services.html" class="slide-item"> Services</a></li>
								<li><a href="faq.html" class="slide-item"> FAQS</a></li>
								<li><a href="terms.html" class="slide-item"> Terms</a></li>
								<li><a href="invoice.html" class="slide-item"> Invoice</a></li>
								<li><a href="pricing.html" class="slide-item"> Pricing Tables</a></li>
								<li><a href="blog.html" class="slide-item"> Blog</a></li>
								<li><a href="empty.html" class="slide-item"> Empty Page</a></li>
								<li><a href="construction.html" class="slide-item"> Under Construction</a></li>
							</ul>
						</li>
						<li><h3>E-Commerce</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">E-Commerce</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="shop.html" class="slide-item"> Shop</a></li>
								<li><a href="shop-description.html" class="slide-item">Product Details</a></li>
								<li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
								<li><a href="wishlist.html" class="slide-item"> Wishlist</a></li>
								<li><a href="checkout.html" class="slide-item"> Checkout</a></li>
							</ul>
						</li>
						<li><h3>Custom & Error Pages</h3></li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Custom Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="login.html" class="slide-item"> Login</a></li>
								<li><a href="register.html" class="slide-item"> Register</a></li>
								<li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
								<li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-info"></i><span class="side-menu__label">Error Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="400.html" class="slide-item"> 400</a></li>
								<li><a href="401.html" class="slide-item"> 401</a></li>
								<li><a href="403.html" class="slide-item"> 403</a></li>
								<li><a href="404.html" class="slide-item"> 404</a></li>
								<li><a href="500.html" class="slide-item"> 500</a></li>
								<li><a href="503.html" class="slide-item"> 503</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="#">
							<i class="side-menu__icon fe fe-sliders"></i>
							<span class="side-menu__label">Submenus</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="#" class="slide-item">Level-1</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Level-2</span><i class="sub-angle fa fa-angle-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="#">Level-2.1</a></li>
										<li><a class="sub-slide-item" href="#">Level-2.2</a></li>
										<li class="sub-slide2">
											<a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Level-2.3</span><i class="sub-angle2 fa fa-angle-right"></i></a>
											<ul class="sub-slide-menu2">
												<li><a href="#" class="sub-slide-item2">Level-2.3.1</a></li>
												<li><a href="#" class="sub-slide-item2">Level-2.3.2</a></li>
												<li><a href="#" class="sub-slide-item2">Level-2.3.3</a></li>
											</ul>
										</li>
										<li><a class="sub-slide-item" href="#">Level-2.4</a></li>
										<li><a class="sub-slide-item" href="#">Level-2.5</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</aside>
				<!--/APP-SIDEBAR-->

				<!-- Mobile Header -->
				<div class="app-header header">
					<div class="container-fluid">
						<div class="d-flex">
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
							<a class="header-brand1 d-flex d-md-none" href="index.html">
								<img src="{{asset('template/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
								<img src="{{asset('template/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
								<img src="{{asset('template/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
								<img src="{{asset('template/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
							</a><!-- LOGO -->
							<div class="main-header-center ms-3 d-none d-md-block">
								<input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
							<div class="d-flex order-lg-2 ms-auto header-right-icons">
								<div class="dropdown d-lg-none d-md-block d-none">
									<a href="#" class="nav-link icon" data-bs-toggle="dropdown">
										<i class="fe fe-search"></i>
									</a>
									<div class="dropdown-menu header-search dropdown-menu-start">
										<div class="input-group w-100 p-2">
											<input type="text" class="form-control" placeholder="Search....">
											<div class="input-group-text btn btn-primary">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div><!-- SEARCH -->
								<button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
								</button>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon theme-layout nav-link-bg layout-setting">
										<span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Dark Theme"><i class="fe fe-moon"></i></span>
										<span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Light Theme"><i class="fe fe-sun"></i></span>
									</a>
								</div><!-- Theme-Layout -->
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div><!-- FULL-SCREEN -->
								<div class="dropdown d-none d-md-flex notifications">
									<a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
										<div class="drop-heading border-bottom">
											<div class="d-flex">
												<h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Notification</h6>
												<div class="ms-auto">
													<span class="badge bg-success rounded-pill">3</span>
												</div>
											</div>
										</div>
										<div class="notifications-menu">
											<a class="dropdown-item d-flex" href="chat.html">
												<div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
													<i class="fe fe-message-square"></i>
												</div>
												<div class="mt-1">
													<h5 class="notification-label mb-1">New review received</h5>
													<span class="notification-subtext">2 hours ago</span>
												</div>
											</a>
											<a class="dropdown-item d-flex" href="chat.html">
												<div class="me-3 notifyimg  bg-secondary-gradient brround box-shadow-primary">
													<i class="fe fe-mail"></i>
												</div>
												<div class="mt-1">
													<h5 class="notification-label mb-1">New Mails Received</h5>
													<span class="notification-subtext">1 week ago</span>
												</div>
											</a>
											<a class="dropdown-item d-flex" href="cart.html">
												<div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">
													<i class="fe fe-shopping-cart"></i>
												</div>
												<div class="mt-1">
													<h5 class="notification-label mb-1">New Order Received</h5>
													<span class="notification-subtext">1 day ago</span>
												</div>
											</a>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a href="#" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
									</div>
								</div><!-- NOTIFICATIONS -->
								<div class="dropdown  d-none d-md-flex message">
									<a class="nav-link icon text-center" data-bs-toggle="dropdown">
										<i class="fe fe-message-square"></i><span class=" pulse-danger"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
										<div class="drop-heading border-bottom">
											<div class="d-flex">
												<h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Messages</h6>
												<div class="ms-auto">
													<span class="badge bg-danger rounded-pill">4</span>
												</div>
											</div>
										</div>
										<div class="message-menu">
											<a class="dropdown-item d-flex" href="chat.html">
												<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/1.jpg')}}"></span>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1">Madeleine</h5>
														<small class="text-muted ms-auto text-end">
															3 hours ago
														</small>
													</div>
													<span>Hey! there I' am available....</span>
												</div>
											</a>
											<a class="dropdown-item d-flex" href="chat.html">
												<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/12.jpg')}}"></span>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1">Anthony</h5>
														<small class="text-muted ms-auto text-end">
															5 hour ago
														</small>
													</div>
													<span>New product Launching...</span>
												</div>
											</a>
											<a class="dropdown-item d-flex" href="chat.html">
												<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/4.jpg')}}"></span>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1">Olivia</h5>
														<small class="text-muted ms-auto text-end">
															45 mintues ago
														</small>
													</div>
													<span>New Schedule Realease......</span>
												</div>
											</a>
											<a class="dropdown-item d-flex" href="chat.html">
												<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/15.jpg')}}"></span>
												<div class="wd-90p">
													<div class="d-flex">
														<h5 class="mb-1">Sanderson</h5>
														<small class="text-muted ms-auto text-end">
															2 days ago
														</small>
													</div>
													<span>New Schedule Realease......</span>
												</div>
											</a>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a href="#" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
									</div>
								</div><!-- MESSAGE-BOX -->
								<div class="dropdown d-none d-md-flex profile-1">
									<a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
										<span>
											<img src="{{asset('template/assets/images/users/8.jpg')}}" alt="profile-user" class="avatar  profile-user brround cover-image">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-0">Elizabeth Dyer</h5>
												<small class="text-muted">Administrator</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="profile.html">
											<i class="dropdown-icon fe fe-user"></i> Profile
										</a>
										<a class="dropdown-item" href="email.html">
											<i class="dropdown-icon fe fe-mail"></i> Inbox
											<span class="badge bg-primary float-end">3</span>
										</a>
										<a class="dropdown-item" href="emailservices.html">
											<i class="dropdown-icon fe fe-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="faq.html">
											<i class="dropdown-icon fe fe-alert-triangle"></i> Need help??
										</a>
										<a class="dropdown-item" href="login.html">
											<i class="dropdown-icon fe fe-alert-circle"></i> Sign out
										</a>
									</div>
								</div>
								<!-- SIDE-MENU -->
							</div>
						</div>
					</div>
				</div>
				<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 ms-auto">
							<div class="dropdown d-sm-flex">
								<a href="#" class="nav-link icon" data-bs-toggle="dropdown">
									<i class="fe fe-search"></i>
								</a>
								<div class="dropdown-menu header-search dropdown-menu-start">
									<div class="input-group w-100 p-2">
										<input type="text" class="form-control" placeholder="Search....">
										<div class="input-group-text btn btn-primary">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div><!-- SEARCH -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon theme-layout nav-link-bg layout-setting">
									<span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Dark Theme"><i class="fe fe-moon"></i></span>
									<span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Light Theme"><i class="fe fe-sun"></i></span>
								</a>
							</div><!-- Theme-Layout -->
							<div class="dropdown d-md-flex">
								<a class="nav-link icon full-screen-link nav-link-bg">
									<i class="fe fe-minimize fullscreen-button"></i>
								</a>
							</div><!-- FULL-SCREEN -->
							<div class="dropdown  d-md-flex notifications">
								<a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
									<div class="drop-heading border-bottom">
										<div class="d-flex">
											<h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Notification</h6>
											<div class="ms-auto">
												<span class="badge bg-success rounded-pill">3</span>
											</div>
										</div>
									</div>
									<div class="notifications-menu">
										<a class="dropdown-item d-flex" href="chat.html">
											<div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
												<i class="fe fe-message-square"></i>
											</div>
											<div class="mt-1">
												<h5 class="notification-label mb-1">New review received</h5>
												<span class="notification-subtext">2 hours ago</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="chat.html">
											<div class="me-3 notifyimg  bg-secondary-gradient brround box-shadow-primary">
												<i class="fe fe-mail"></i>
											</div>
											<div class="mt-1">
												<h5 class="notification-label mb-1">New Mails Received</h5>
												<span class="notification-subtext">1 week ago</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="cart.html">
											<div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">
												<i class="fe fe-shopping-cart"></i>
											</div>
											<div class="mt-1">
												<h5 class="notification-label mb-1">New Order Received</h5>
												<span class="notification-subtext">1 day ago</span>
											</div>
										</a>
									</div>
									<div class="dropdown-divider m-0"></div>
									<a href="#" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
								</div>
							</div><!-- NOTIFICATIONS -->
							<div class="dropdown d-md-flex message">
								<a class="nav-link icon text-center" data-bs-toggle="dropdown">
									<i class="fe fe-message-square"></i><span class=" pulse-danger"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
									<div class="drop-heading border-bottom">
										<div class="d-flex">
											<h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Messages</h6>
											<div class="ms-auto">
												<span class="badge bg-danger rounded-pill">4</span>
											</div>
										</div>
									</div>
									<div class="message-menu">
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/1.jpg')}}"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Madeleine</h5>
													<small class="text-muted ms-auto text-end">
														3 hours ago
													</small>
												</div>
												<span>Hey! there I' am available....</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/12.jpg')}}"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Anthony</h5>
													<small class="text-muted ms-auto text-end">
														5 hour ago
													</small>
												</div>
												<span>New product Launching...</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/4.jpg')}}"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Olivia</h5>
													<small class="text-muted ms-auto text-end">
														45 mintues ago
													</small>
												</div>
												<span>New Schedule Realease......</span>
											</div>
										</a>
										<a class="dropdown-item d-flex" href="chat.html">
											<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="{{asset('template/assets/images/users/15.jpg')}}"></span>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1">Sanderson</h5>
													<small class="text-muted ms-auto text-end">
														2 days ago
													</small>
												</div>
												<span>New Schedule Realease......</span>
											</div>
										</a>
									</div>
									<div class="dropdown-divider m-0"></div>
									<a href="#" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
								</div>
							</div><!-- MESSAGE-BOX -->
							<div class="dropdown d-md-flex profile-1">
								<a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
									<span>
										<img src="{{asset('template/assets/images/users/8.jpg')}}" alt="profile-user" class="avatar  profile-user brround cover-image">
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
									<div class="drop-heading">
										<div class="text-center">
											<h5 class="text-dark mb-0">Elizabeth Dyer</h5>
											<small class="text-muted">Administrator</small>
										</div>
									</div>
									<div class="dropdown-divider m-0"></div>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon fe fe-user"></i> Profile
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon fe fe-mail"></i> Inbox
										<span class="badge bg-primary float-end">3</span>
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon fe fe-settings"></i> Settings
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon fe fe-alert-triangle"></i> Need help?
									</a>
									<a class="dropdown-item" href="login.html">
										<i class="dropdown-icon fe fe-alert-circle"></i> Sign out
									</a>
								</div>
							</div>
							<!-- SIDE-MENU -->
						</div>
					</div>
				</div>
				<!-- /Mobile Header -->

                <!--app-content open-->
				<div class="app-content">
					<div class="side-app">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Profile </h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Tout les utilisateurs</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</div>
							
						</div>
						<!-- PAGE-HEADER END -->

						<!-- ROW-1 OPEN -->
						<div class="row" id="user-profile">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="wideget-user">
											<div class="row">
												<div class="col-lg-6 col-md-12">
													<div class="wideget-user-desc d-flex">
														<div class="wideget-user-img">
															<img class="" src="{{asset('template/assets/images/users/8.jpg')}}" alt="img">
														</div>
														<div class="user-wrap">
															<h4>@foreach (
                                                                $user as $row)
                                                                {{$row->name}}
                                                            @endforeach</h4>
															<h6 class="text-muted mb-3">Membre depuis: @foreach (
                                                                $user as $row)
                                                                {{$row->created_at}}
                                                            @endforeach</h6>
															<h4>EMAIL : @foreach (
                                                                $user as $row)
                                                                {{$row->email}}
                                                            @endforeach</h4>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12">
													<div class="text-xl-right mt-4 mt-xl-0">
														<a href="emailservices.html" class="btn btn-white">Message</a>
														<a href="editprofile.html" class="btn btn-primary">Edit Role</a>
													</div>
													<div class="mt-5">
														<div class="main-profile-contact-list float-md-end d-md-flex">
															<div class="me-5">
																<div class="media">
																	<div class="media-icon bg-primary  me-3 mt-1">
																		<i class="fe fe-file-plus fs-20 text-white"></i>
																	</div>
																	<div class="media-body">
																		<span class="text-muted">Commandes</span>
																		<div class="fw-semibold fs-25">
																			328
																		</div>
																	</div>
																</div>
															</div>
															<div class="me-5 mt-5 mt-md-0">
																<div class="media">
																	<div class="media-icon bg-success me-3 mt-1">
																		<i class="fe fe-users  fs-20 text-white"></i>
																	</div>
																	<div class="media-body">
																		<span class="text-muted">Facture</span>
																		<div class="fw-semibold fs-25">
																			937k
																		</div>
																	</div>
																</div>
															</div>
															<div class="me-0 mt-5 mt-md-0">
																<div class="media">
																	<div class="media-icon bg-orange me-3 mt-1">
																		<i class="fe fe-wifi fs-20 text-white"></i>
																	</div>
																	<div class="media-body">
																		<span class="text-muted">Bon livraison</span>
																		<div class="fw-semibold fs-25">
																			2,876
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
									<div class="border-top">
										<div class="wideget-user-tab">
											<div class="tab-menu-heading">
												<div class="tabs-menu1">
													<ul class="nav">
														<li class=""><a href="#tab-51" class="active show" data-bs-toggle="tab">Profile</a></li>
														<li><a href="#tab-61" data-bs-toggle="tab" class="">Commandes</a></li>
														<li><a href="#tab-71" data-bs-toggle="tab" class="">Factures</a></li>
														<li><a href="#tab-81" data-bs-toggle="tab" class="">Bon livraisons</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							<div class="tab-content">
								<div class="tab-pane active show" id="tab-51">
									<div id="profile-log-switch">
										<div class="card">
											<div class="card-body">
												<div class="media-heading">
													<h5><strong>Personal Information</strong></h5>
												</div>
											    <div class="table-responsive ">
													<table class="table row table-borderless">
														<tbody class="col-lg-12 col-xl-6 p-0">
															<tr>
																<td><strong>Full Name :</strong> @foreach (
                                                                    $user as $row)
                                                                    {{$row->name}}
                                                                @endforeach</td>
															</tr>
															
															<tr>
																<td><strong>Languages :</strong> English, German, Spanish.</td>
															</tr>
														</tbody>
														<tbody class="col-lg-12 col-xl-6 p-0">
															
															<tr>
																<td><strong>Email :</strong> @foreach (
                                                                    $user as $row)
                                                                    {{$row->email}}
                                                                @endforeach</td>
															</tr>
															<tr>
																<td><strong>Phone :</strong> +253  </td>
															</tr>
														</tbody>
													</table>
												</div>
												
											</div>
										</div>
									</div>
								</div>
									<div class="tab-pane" id="tab-61">
										<ul class="widget-users row  mb-5">
											<li class="col-lg-4  col-md-6 col-sm-12 col-12">
												<div class="card border p-0">
													<a href="profile.html">
														<div class="card-body text-center">
															<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../../assets/images/users/15.jpg"></span>
															<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">James Thomas</h4>
															<span class="text-muted">Web designer</span>
														</div>
													</a>
													<div class="card-footer text-center">
														<div class="row user-social-detail">
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-google"></i>
															</a>
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-facebook"></i>
														     </a>
															 <a href="#" class="social-profile  rounded text-center">
																<i class="fa fa-twitter"></i>
															</a>
														</div>
													</div>
												</div>
											</li>
											<li class="col-lg-4 col-md-6 col-sm-12 col-12">
												<div class="card border p-0">
													<a href="profile.html">
														<div class="card-body text-center">
															<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../../assets/images/users/9.jpg"></span>
															<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">George Clooney</h4>
															<span class="text-muted">Web designer</span>
														</div>
													</a>
													<div class="card-footer text-center">
														<div class="row user-social-detail">
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-google"></i>
															</a>
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-facebook"></i>
														     </a>
															 <a href="#" class="social-profile  rounded text-center">
																<i class="fa fa-twitter"></i>
															</a>
														</div>
													</div>
												</div>
											</li>
											<li class="col-lg-4 col-md-6 col-sm-12 col-12">
												<div class="card border p-0">
													<a href="profile.html">
														<div class="card-body text-center">
															<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../../assets/images/users/20.jpg"></span>
															<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Robert Downey Jr.</h4>
															<span class="text-muted">Web designer</span>
														</div>
													</a>
													<div class="card-footer text-center">
														<div class="row user-social-detail">
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-google"></i>
															</a>
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-facebook"></i>
														     </a>
															 <a href="#" class="social-profile  rounded text-center">
																<i class="fa fa-twitter"></i>
															</a>
														</div>
													</div>
												</div>
											</li>
											<li class="col-lg-4 col-md-6 col-sm-12 col-12">
												<div class="card border p-0 mb-lg-0">
													<a href="profile.html">
														<div class="card-body text-center">
															<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../../assets/images/users/12.jpg"></span>
															<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Emma Watson</h4>
															<span class="text-muted">Web designer</span>
														</div>
													</a>
													<div class="card-footer text-center">
														<div class="row user-social-detail">
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-google"></i>
															</a>
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-facebook"></i>
														     </a>
															 <a href="#" class="social-profile  rounded text-center">
																<i class="fa fa-twitter"></i>
															</a>
														</div>
													</div>
												</div>
											</li>
											<li class="col-lg-4 col-md-6 col-sm-12 col-12">
												<div class="card border p-0 mb-lg-0">
													<a href="profile.html">
														<div class="card-body text-center">
															<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../../assets/images/users/4.jpg"></span>
															<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Mila Kunis</h4>
															<span class="text-muted">Web designer</span>
														</div>
													</a>
													<div class="card-footer text-center">
														<div class="row user-social-detail">
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-google"></i>
															</a>
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-facebook"></i>
														     </a>
															 <a href="#" class="social-profile  rounded text-center">
																<i class="fa fa-twitter"></i>
															</a>
														</div>
													</div>
												</div>
											</li>
											<li class="col-lg-4 col-md-6 col-sm-12 col-12">
												<div class="card border p-0 mb-0">
													<div class="card-body text-center">
														<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="../../assets/images/users/6.jpg"></span>
														<a href="profile.html"><h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Ryan Gossling</h4></a>
														<span class="text-muted">Web designer</span>
													</div>
													<div class="card-footer text-center">
														<div class="row user-social-detail">
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-google"></i>
															</a>
															<a href="#" class="social-profile me-4 rounded text-center">
																<i class="fa fa-facebook"></i>
														     </a>
															 <a href="#" class="social-profile  rounded text-center">
																<i class="fa fa-twitter"></i>
															</a>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="tab-71">
										<div class="row  mb-5 img-gallery" id="lightgallery">
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/8.jpg" data-src="../../assets/images/media/8.jpg">
											<a href="#"><img class="img-fluid mb-2 br-7" src="../../assets/images/media/8.jpg " alt="banner image"></a>
											</div>
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/10.jpg" data-src="../../assets/images/media/10.jpg">
												<a href="#"><img class="img-fluid mb-2 br-7" src="../../assets/images/media/10.jpg" alt="banner image "></a>
											</div>
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/11.jpg" data-src="../../assets/images/media/11.jpg">
												<a href="#"><img class="img-fluid  mb-2 br-7" src="../../assets/images/media/11.jpg" alt="banner image "></a>
											</div>
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/12.jpg" data-src="../../assets/images/media/12.jpg">
												<a href="#"><img class="img-fluid  mb-2 br-7" src="../../assets/images/media/12.jpg" alt="banner image "></a>
											</div>
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/13.jpg" data-src="../../assets/images/media/13.jpg">
												<a href="#"><img class="img-fluid  mb-2 br-7" src="../../assets/images/media/13.jpg " alt="banner image"></a>
											</div>
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/14.jpg" data-src="../../assets/images/media/14.jpg">
												<a href="#"><img class="img-fluid  mb-2 br-7" src="../../assets/images/media/14.jpg " alt="banner image"></a>
											</div>
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/15.jpg" data-src="../../assets/images/media/15.jpg">
												<a href="#"><img class="img-fluid mb-2 br-7" src="../../assets/images/media/15.jpg " alt="banner image"></a>
											</div>
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/16.jpg" data-src="../../assets/images/media/16.jpg">
												<a href="#"><img class="img-fluid mb-0 br-7" src="../../assets/images/media/16.jpg " alt="banner image"></a>
											</div>
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/17.jpg" data-src="../../assets/images/media/17.jpg">
												<a href="#"><img class="img-fluid mb-0 br-7" src="../../assets/images/media/17.jpg " alt="banner image"></a>
											</div>
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/18.jpg" data-src="../../assets/images/media/18.jpg">
												<a href="#"><img class="img-fluid mb-0 br-7" src="../../assets/images/media/18.jpg " alt="banner image"></a>
											</div>
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/19.jpg" data-src="../../assets/images/media/19.jpg">
												<a href="#"><img class="img-fluid mb-0 br-7" src="../../assets/images/media/19.jpg " alt="banner image"></a>
											</div>
											<div class="col-lg-3 col-md-6" data-responsive="../../assets/images/media/20.jpg" data-src="../../assets/images/media/20.jpg">
												<a href="#"><img class="img-fluid br-7" src="../../assets/images/media/20.jpg " alt="banner image"></a>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-71">
										<div class="row  mb-5">
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden">
													<div class="media card-body media-xs overflow-visible ">
														<img class="avatar brround avatar-md me-3" src="../../assets/images/users/18.jpg" alt="avatar-img">
														<div class="media-body valign-middle">
															<a href="" class=" fw-semibold text-dark">John Paige</a>
															<p class="text-muted mb-0">johan@gmail.com</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-2">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden">
													<div class="media card-body media-xs overflow-visible ">
														<span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
														<div class="media-body valign-middle mt-0">
															<a href="" class="fw-semibold text-dark">Lillian Quinn</a>
															<p class="text-muted mb-0">lilliangore</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-1">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden mb-lg-0">
													<div class="media card-body media-xs overflow-visible ">
														<span class="avatar cover-image avatar-md brround me-3 bg-primary">IH</span>
														<div class="media-body valign-middle mt-0">
															<a href="" class="fw-semibold text-dark">Irene Harris</a>
															<p class="text-muted mb-0">ireneharris@gmail.com</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-1">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden mb-lg-0">
													<div class="media card-body media-xs overflow-visible ">
														<img class="avatar brround avatar-md me-3" src="../../assets/images/users/2.jpg" alt="avatar-img">
														<div class="media-body valign-middle mt-0">
															<a href="" class="text-dark fw-semibold">Harry Fisher</a>
															<p class="text-muted mb-0">harryuqt</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-1">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden">
													<div class="media card-body media-xs overflow-visible ">
														<span class="avatar cover-image avatar-md brround bg-pink me-3">AB</span>
														<div class="media-body valign-middle mt-0">
															<a href="" class="fw-semibold text-dark">Aida Bugg</a>
															<p class="text-muted mb-0">Aidasr</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-1">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden">
													<div class="media card-body media-xs overflow-visible ">
														<span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
														<div class="media-body valign-middle mt-0">
															<a href="" class="fw-semibold text-dark">Lillian Quinn</a>
															<p class="text-muted mb-0">lilliangore</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-1">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab-81">
										<div class="row">
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden">
													<div class="media card-body media-xs overflow-visible ">
														<img class="avatar brround avatar-md me-3" src="../../assets/images/users/18.jpg" alt="avatar-img">
														<div class="media-body valign-middle">
															<a href="" class=" fw-semibold text-dark">John Paige</a>
															<p class="text-muted mb-0">johan@gmail.com</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-2">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden">
													<div class="media card-body media-xs overflow-visible ">
														<span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
														<div class="media-body valign-middle mt-0">
															<a href="" class="fw-semibold text-dark">Lillian Quinn</a>
															<p class="text-muted mb-0">lilliangore</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-1">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden mb-lg-0">
													<div class="media card-body media-xs overflow-visible ">
														<span class="avatar cover-image avatar-md brround me-3 bg-primary">IH</span>
														<div class="media-body valign-middle mt-0">
															<a href="" class="fw-semibold text-dark">Irene Harris</a>
															<p class="text-muted mb-0">ireneharris@gmail.com</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-1">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden">
													<div class="media card-body media-xs overflow-visible ">
														<img class="avatar brround avatar-md me-3" src="../../assets/images/users/3.jpg" alt="avatar-img">
														<div class="media-body valign-middle mt-0">
															<a href="" class="text-dark fw-semibold">Saureen Bgist</a>
															<p class="text-muted mb-0">harryuqt</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-1">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden">
													<div class="media card-body media-xs overflow-visible ">
														<img class="avatar brround avatar-md me-3" src="../../assets/images/users/2.jpg" alt="avatar-img">
														<div class="media-body valign-middle mt-0">
															<a href="" class="text-dark fw-semibold">Maureen Biologist</a>
															<p class="text-muted mb-0">harryuqt</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-1">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
											<div class=" col-lg-6 col-md-12">
												<div class="card border p-0 over-flow-hidden">
													<div class="media card-body media-xs overflow-visible ">
														<span class="avatar cover-image avatar-md brround me-3 bg-info">PF</span>
														<div class="media-body valign-middle mt-0">
															<a href="" class="fw-semibold text-dark">Paddy O'Furniture.</a>
															<p class="text-muted mb-0">ireneharris@gmail.com</p>
														</div>
														<div class="media-body valign-middle text-end overflow-visible mt-1">
															<button class="btn btn-primary" type="button">Follow</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>

			<!-- Sidebar-right -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="panel panel-primary card mb-0 shadow-none border-0">
					<div class="tab-menu-heading border-0 d-flex p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options ms-auto">
							<a href="#" class="sidebar-icon text-end float-end me-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						<div class="tabs-menu border-bottom">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-user me-1"></i> Profile</a></li>
								<li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-users me-1"></i> Contacts</a></li>
								<li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-settings me-1"></i> Settings</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="side1">
								<div class="card-body text-center">
									<div class="dropdown user-pro-body">
										<div class="">
											<img alt="user-img" class="avatar avatar-xl brround mx-auto text-center" src="{{asset('template/assets/images/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
										</div>
										<div class="user-info mg-t-20">
											<h6 class="fw-semibold  mt-2 mb-0">Mintrona Pechon</h6>
											<span class="mb-0 text-muted fs-12">Premium Member</span>
										</div>
									</div>
								</div>
								<a class="dropdown-item d-flex border-bottom border-top" href="profile.html">
									<div class="d-flex"><i class="fe fe-user me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Profile</h6>
											<p class="tx-12 mb-0 text-muted">Profile Personal information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="chat.html">
									<div class="d-flex"><i class="fe fe-message-square me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Messages</h6>
											<p class="tx-12 mb-0 text-muted">Person message information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="emailservices.html">
									<div class="d-flex"><i class="fe fe-mail me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">My Mails</h6>
											<p class="tx-12 mb-0 text-muted">Persons mail information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="editprofile.html">
									<div class="d-flex"><i class="fe fe-settings me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">Account Settings</h6>
											<p class="tx-12 mb-0 text-muted">Settings Information</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item d-flex border-bottom" href="login.html">
									<div class="d-flex"><i class="fe fe-power me-3 tx-20 text-muted"></i>
										<div class="pt-1">
											<h6 class="mb-0">Sign Out</h6>
											<p class="tx-12 mb-0 text-muted">Account Signout</p>
										</div>
									</div>
								</a>
							</div>
							<div class="tab-pane" id="side2">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/9.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
											<p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/11.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
											<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/10.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
											<p class="mb-0 tx-12 text-muted">alinaaernier@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/2.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
											<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/13.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
											<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/12.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
											<p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/4.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
											<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/7.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
											<p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/2.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
											<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/14.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
											<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/11.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
											<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/9.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
											<p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/15.jpg')}}"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
											<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="{{asset('template/assets/images/faces/4.jpg')}}"></span>
										</div>
										<div class="">
											<div class="fw-semibold" data-bs-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
											<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="side3">
								<a class="dropdown-item bg-gray-100 pd-y-10" href="#">
									Account Settings
								</a>
								<div class="card-body">
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Updates Automatically</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Allow Location Map</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show Contacts</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show Notication</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show Tasks Statistics</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show Email Notification</span>
										</label>
									</div>
								</div>
								<a class="dropdown-item bg-gray-100 pd-y-10" href="#">
									General Settings
								</a>
								<div class="card-body">
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show User Online</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Website Notication</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Show Recent activity</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Logout Automatically</span>
										</label>
									</div>
									<div class="form-group mg-b-10">
										<label class="custom-switch ps-0">
											<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description mg-l-10">Aloow All Notifications</span>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Sidebar-right-->

			<!-- FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							 Copyright © 2021 <a href="#">Zenax</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="#"> Spruko </a> All rights reserved
						</div>
					</div>
				</div>
			</footer>
			<!-- FOOTER CLOSED -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="{{asset('template/assets/js/jquery.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{asset('template/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- SPARKLINE JS-->
		<script src="{{asset('template/assets/js/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="{{asset('template/assets/js/circle-progress.min.js')}}"></script>

		<!-- C3 CHART JS -->
		<script src="{{asset('template/assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/charts-c3/c3-chart.js')}}"></script>

		<!-- INPUT MASK JS-->
		<script src="{{asset('template/assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

        <!-- SIDE-MENU JS -->
		<script src="{{asset('template/assets/plugins/sidemenu/sidemenu.js')}}"></script>

		<!-- INTERNAL SELECT2 JS -->
		<script src="{{asset('template/assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- DATA TABLE JS-->
		<script src="{{asset('template/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('template/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
		<script src="{{asset('template/assets/js/table-data.js')}}"></script>

		<!-- SIDEBAR JS -->
		<script src="{{asset('template/assets/plugins/sidebar/sidebar.js')}}"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="{{asset('template/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
		<script src="{{asset('template/assets/plugins/p-scroll/pscroll.js')}}"></script>
		<script src="{{asset('template/assets/plugins/p-scroll/pscroll-1.js')}}"></script>

		<!-- CUSTOM JS-->
		<script src="{{asset('template/assets/js/custom.js')}}"></script>

	</body>
</html>