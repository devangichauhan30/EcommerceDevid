<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

	<title>Ekka - Admin Dashboard HTML Template.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

	<link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- LEFT MAIN SIDEBAR -->
		<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">

				<div class="ec-brand">
					<a href="index.html" title="Ekka">
						<img class="ec-brand-icon" src="assets/img/logo/ec-site-logo.png" alt="" />
						<span class="ec-brand-name text-truncate">Dummy</span>
					</a>
				</div>

				<!-- begin sidebar scrollbar -->
				<div class="ec-navigation" data-simplebar>
					<!-- sidebar menu -->
					<ul class="nav sidebar-inner" id="sidebar-menu">
						<!-- Dashboard -->
						<li>
							<a class="sidenav-item-link" href="index.html">
								<i class="mdi mdi-view-dashboard-outline"></i>
								<span class="nav-text">Dashboard</span>
							</a>
							<hr>
						</li>

						<!-- Vendors -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group-outline"></i>
								<span class="nav-text">Vendors</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="vendor-card.html">
											<span class="nav-text">Vendor Grid</span>
										</a>
									</li>

									<li class="">
										<a class="sidenav-item-link" href="vendor-list.html">
											<span class="nav-text">Vendor List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="vendor-profile.html">
											<span class="nav-text">Vendors Profile</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Users -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group"></i>
								<span class="nav-text">Users</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
									<li>
										<a class="sidenav-item-link" href="user-card.html">
											<span class="nav-text">User Grid</span>
										</a>
									</li>

									<li class="">
										<a class="sidenav-item-link" href="user-list.html">
											<span class="nav-text">User List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="user-profile.html">
											<span class="nav-text">Users Profile</span>
										</a>
									</li>
								</ul>
							</div>
							<hr>
						</li>

						<!-- Category -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-dns-outline"></i>
								<span class="nav-text">Categories</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="main-category.html">
											<span class="nav-text">Main Category</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="sub-category.html">
											<span class="nav-text">Sub Category</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Products -->
						<li class="has-sub active expand">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-palette-advanced"></i>
								<span class="nav-text">Products</span> <b class="caret"></b>
							</a>
							<div class="collapse show">
								<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="product-add.html">
											<span class="nav-text">Add Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-list.html">
											<span class="nav-text">List Product</span>
										</a>
									</li>
									<li class="active">
										<a class="sidenav-item-link" href="product-grid.html">
											<span class="nav-text">Grid Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-detail.html">
											<span class="nav-text">Product Detail</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Orders -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-cart"></i>
								<span class="nav-text">Orders</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="new-order.html">
											<span class="nav-text">New Order</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-history.html">
											<span class="nav-text">Order History</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-detail.html">
											<span class="nav-text">Order Detail</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="invoice.html">
											<span class="nav-text">Invoice</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Reviews -->
						<li>
							<a class="sidenav-item-link" href="review-list.html">
								<i class="mdi mdi-star-half"></i>
								<span class="nav-text">Reviews</span>
							</a>
						</li>

						<!-- Brands -->
						<li>
							<a class="sidenav-item-link" href="brand-list.html">
								<i class="mdi mdi-tag-faces"></i>
								<span class="nav-text">Brands</span>
							</a>
							<hr>
						</li>

						<!-- Authentication -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-login"></i>
								<span class="nav-text">Authentication</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
									<li class="">
										<a href="sign-in.html">
											<span class="nav-text">Sign In</span>
										</a>
									</li>
									<li class="">
										<a href="sign-up.html">
											<span class="nav-text">Sign Up</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Icons -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-diamond-stone"></i>
								<span class="nav-text">Icons</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="icons" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="material-icon.html">
											<span class="nav-text">Material Icon</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="font-awsome-icons.html">
											<span class="nav-text">Font Awsome Icon</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="flag-icon.html">
											<span class="nav-text">Flag Icon</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Other Pages -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-image-filter-none"></i>
								<span class="nav-text">Other Pages</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="otherpages" data-parent="#sidebar-menu">
									<li class="has-sub">
										<a href="404.html">404 Page</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<!-- Header -->
			<header class="ec-main-header" id="header">
				<nav class="navbar navbar-static-top navbar-expand-lg">
					<!-- Sidebar toggle button -->
					<button id="sidebar-toggler" class="sidebar-toggle"></button>
					<!-- search form -->
					<div class="search-form d-lg-inline-block">
						<div class="input-group">
							<input type="text" name="query" id="search-input" class="form-control"
								placeholder="search.." autofocus autocomplete="off" />
							<button type="button" name="search" id="search-btn" class="btn btn-flat">
								<i class="mdi mdi-magnify"></i>
							</button>
						</div>
						<div id="search-results-container">
							<ul id="search-results"></ul>
						</div>
					</div>

					<!-- navbar right -->
					<div class="navbar-right">
						<ul class="nav navbar-nav">
							<!-- User Account -->
							<li class="dropdown user-menu">
								<button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown"
									aria-expanded="false">
									<img src="assets/img/user/v12.webp" class="user-image" alt="User Image" />
								</button>
								<ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
									<!-- User image -->
									<li class="dropdown-header">
										<img src="assets/img/user/v12.webp" class="img-circle" alt="User Image" />
										<div class="d-inline-block">
											John Deo <small class="pt-1">john.example@gmail.com</small>
										</div>
									</li>
									<li>
										<a href="user-profile.html">
											<i class="mdi mdi-account"></i> My Profile
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-email"></i> Message
										</a>
									</li>
									<li>
										<a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
									</li>
									<li class="right-sidebar-in">
										<a href="javascript:0"> <i class="mdi mdi-settings-outline"></i> Setting </a>
									</li>
									<li class="dropdown-footer">
										<a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
									</li>
								</ul>
							</li>
							<li class="dropdown notifications-menu custom-dropdown">
								<button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
									<i class="mdi mdi-bell-outline"></i>
								</button>

								<div class="card card-default dropdown-notify dropdown-menu-right mb-0">
									<div class="card-header card-header-border-bottom px-3">
										<h2>Notifications</h2>
									</div>

									<div class="card-body px-0 py-0">
										<ul class="nav nav-tabs nav-style-border p-0 justify-content-between" id="myTab"
											role="tablist">
											<li class="nav-item mx-3 my-0 py-0">
												<a href="#" class="nav-link active pb-3" id="home2-tab"
													data-bs-toggle="tab" data-bs-target="#home2" role="tab"
													aria-controls="home2" aria-selected="true">All (10)</a>
											</li>

											<li class="nav-item mx-3 my-0 py-0">
												<a href="#" class="nav-link pb-3" id="profile2-tab" data-bs-toggle="tab"
													data-bs-target="#profile2" role="tab" aria-controls="profile2"
													aria-selected="false">Msgs (5)</a>
											</li>

											<li class="nav-item mx-3 my-0 py-0">
												<a href="#" class="nav-link pb-3" id="contact2-tab" data-bs-toggle="tab"
													data-bs-target="#contact2" role="tab" aria-controls="contact2"
													aria-selected="false">Others (5)</a>
											</li>
										</ul>

										<div class="tab-content" id="myTabContent3">
											<div class="tab-pane fade show active" id="home2" role="tabpanel"
												aria-labelledby="home2-tab">
												<ul class="list-unstyled" data-simplebar style="height: 360px">
													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u2.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Nitin</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 30 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification media-active">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u1.jpg"
																	alt="Image">
																<span class="status active"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Lovina</h4>
																	<p class="last-msg">Donec mattis augue a nisl
																		consequat, nec imperdiet ex rutrum. Fusce et
																		vehicula enim. Sed in enim eu odio vehic.</p>

																	<span
																		class="font-size-12 font-weight-medium text-white">
																		<i class="mdi mdi-clock-outline"></i> Just
																		now...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u5.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Crinali</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification event-active">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
																<i class="mdi mdi-calendar-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Upcomming event added</h4>
																	<p class="last-msg font-size-14">03/Jan/2020 (1pm -
																		2pm)</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 10 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
																<i class="mdi mdi-chart-areaspline font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Yearly Sales report</h4>
																	<p class="last-msg font-size-14">Lorem ipsum dolor
																		sit, amet consectetur adipisicing elit. Nam
																		itaque doloremque odio, eligendi delectus vitae.
																	</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
																<i
																	class="mdi mdi-account-multiple-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New request</h4>
																	<p class="last-msg font-size-14">Add Dany Jones as
																		your contact consequat nec imperdiet ex rutrum.
																		Fusce et vehicula enim. Sed in enim.</p>

																	<span
																		class="my-1 btn btn-sm btn-success">Accept</span>
																	<span
																		class="my-1 btn btn-sm btn-secondary">Delete</span>

																	<span
																		class="font-size-12 font-weight-medium text-secondary d-block">
																		<i class="mdi mdi-clock-outline"></i> 5 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
																<i class="mdi mdi-server-network-off font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Server overloaded</h4>
																	<p class="last-msg font-size-14">Donec mattis augue
																		a nisl consequat, nec imperdiet ex rutrum. Fusce
																		et vehicula enim. Sed in enim eu odio vehic.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 30 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
																<i class="mdi mdi-playlist-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Task complete</h4>
																	<p class="last-msg font-size-14">Nam ut nisi erat.
																		Ut quis tortor varius, hendrerit arcu quis,
																		congue nisl. In scelerisque, sem ut ve.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 2 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

												</ul>
											</div>

											<div class="tab-pane fade" id="profile2" role="tabpanel"
												aria-labelledby="profile2-tab">
												<ul class="list-unstyled" data-simplebar style="height: 360px">
													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u6.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Hardiko</h4>
																	<p class="last-msg">Donec mattis augue a nisl
																		consequat, nec imperdiet ex rutrum. Fusce et
																		vehicula enim. Sed in enim eu odio vehic.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u7.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Browin</h4>
																	<p class="last-msg">Nam ut nisi erat. Ut quis tortor
																		varius, hendrerit arcu quis, congue nisl. In
																		scelerisque, sem ut ve.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification media-active">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u1.jpg"
																	alt="Image">
																<span class="status active"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">jenelia</h4>
																	<p class="last-msg">Donec mattis augue a nisl
																		consequat, nec imperdiet ex rutrum. Fusce et
																		vehicula enim. Sed in enim eu odio vehic.</p>

																	<span
																		class="font-size-12 font-weight-medium text-white">
																		<i class="mdi mdi-clock-outline"></i> Just
																		now...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u2.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Bhavlio</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u5.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Browini</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

												</ul>
											</div>

											<div class="tab-pane fade" id="contact2" role="tabpanel"
												aria-labelledby="contact2-tab">
												<ul class="list-unstyled" data-simplebar style="height: 360px">
													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification event-active">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
																<i class="mdi mdi-calendar-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Upcomming event added</h4>
																	<p class="last-msg font-size-14">03/Jan/2020 (1pm -
																		2pm)</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 10 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
																<i class="mdi mdi-chart-areaspline font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New Sales report</h4>
																	<p class="last-msg font-size-14">Lorem ipsum dolor
																		sit, amet consectetur adipisicing elit. Nam
																		itaque doloremque odio, eligendi delectus vitae.
																	</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
																<i
																	class="mdi mdi-account-multiple-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New Request</h4>
																	<p class="last-msg font-size-14">Add Dany Jones as
																		your contact consequat nec imperdiet ex rutrum.
																		Fusce et vehicula enim. Sed in enim.</p>

																	<span
																		class="my-1 btn btn-sm btn-success">Accept</span>
																	<span
																		class="my-1 btn btn-sm btn-secondary">Delete</span>

																	<span
																		class="font-size-12 font-weight-medium text-secondary d-block">
																		<i class="mdi mdi-clock-outline"></i> 5 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
																<i class="mdi mdi-server-network-off font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Server overloaded</h4>
																	<p class="last-msg font-size-14">Donec mattis augue
																		a nisl consequat, nec imperdiet ex rutrum. Fusce
																		et vehicula enim. Sed in enim eu odio vehic.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 30 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
																<i class="mdi mdi-playlist-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New Task complete</h4>
																	<p class="last-msg font-size-14">Nam ut nisi erat.
																		Ut quis tortor varius, hendrerit arcu quis,
																		congue nisl. In scelerisque, sem ut ve.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 2 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<ul class="dropdown-menu dropdown-menu-right d-none">
									<li class="dropdown-header">You have 5 notifications</li>
									<li>
										<a href="#">
											<i class="mdi mdi-account-plus"></i> New user registered
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 10 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-account-remove"></i> User deleted
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 07 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-chart-areaspline"></i> Sales report is ready
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 12 PM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-account-supervisor"></i> New client
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 10 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-server-network-off"></i> Server overloaded
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 05 AM</span>
										</a>
									</li>
									<li class="dropdown-footer">
										<a class="text-center" href="#"> View All </a>
									</li>
								</ul>
							</li>
							<li class="right-sidebar-in right-sidebar-2-menu">
								<i class="mdi mdi-settings-outline mdi-spin"></i>
							</li>
						</ul>
					</div>
				</nav>
			</header>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Product</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-list.html" class="btn btn-primary"> Add Porduct</a>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom d-flex justify-content-between">
									<div class="card-bar">
										<div class="col-lg-6 col-md-12">
											<input type="text" class="form-control" id="searchProduct"
												placeholder="search with product name..">
										</div>
										<div class="col-lg-6 col-md-12 sort">
											<div class="col-lg-4 col-md-6 p-space">
												<select class="form-control" id="dropdownCategory">
													<option value="ALL">ALL Category</option>
													<option value="MEN">Men's</option>
													<option value="WOMAN">Woman's</option>
													<option value="KID">Kids</option>
													<option value="OTHER">OTHER</option>
												</select>
											</div>
											<div class="col-lg-4 col-md-6 p-space">
												<select class="form-control" id="dropdownOrderBy">
													<option value="ALL">ORDER BY</option>
													<option value="MEN">Letest</option>
													<option value="WOMAN">Price Low - High</option>
													<option value="KID">Price High - Low</option>
													<option value="OTHER">OTHER</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Glomy shoes.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Glomy shoes</h3>
														<p>$50</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Full Cap t-Shirt.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Full Cap t-Shirt</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/full3.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Full Sleeve t-Shirt</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Round Cap with Belt.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Round Cap with Black Frame</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Mini Blue Bag.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Mini Blue Bag</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Doctor Kit for Kids.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Doctor's kit for baby</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Baby shoes.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Baby Smart shoes</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/full3.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Full Sleeve T-Shirt</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/full3.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Full Sleeve For Men's</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/shoes for Men.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>shoes for Men</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Classic Purse for Woman.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Classic Purse for Woman</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/High Heal Scandle for Woman.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>High Heal Scandle for Woman</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Big basket Lather Bag.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Big basket Lather Bag</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Lather shoes for Kids.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Lather shoes for Kids</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Baby Pink shoes.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Baby Pink shoes</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Big Basket Bag.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Big Basket For Grossary</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Boat Ear buds.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Boat Ear buds</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Smart Shirt For Men.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Smart Shirt For Men</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/Smart Digital Watches.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Smart Digital Watches</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/shoes for Men.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>shoes for Men</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<nav aria-label="Page navigation example p-0">
											<ul class="pagination pagination-seperated pagination-seperated-rounded">
												<li class="page-item">
													<a class="page-link" href="#" aria-label="Previous">
														<span aria-hidden="true"
															class="mdi mdi-chevron-left mr-1"></span> Prev
														<span class="sr-only">Previous</span>
													</a>
												</li>

												<li class="page-item active">
													<a class="page-link" href="#">1</a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#">2</a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#">3</a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#" aria-label="Next">
														Next
														<span aria-hidden="true"
															class="mdi mdi-chevron-right ml-1"></span>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright &copy; <span id="ec-year"></span><a class="text-primary"
							href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin
							Dashboard</a>. All Rights Reserved.
					</p>
				</div>
			</footer>
			
		</div> <!-- End Content -->
	</div> <!-- End Content Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>

</body>

</html>