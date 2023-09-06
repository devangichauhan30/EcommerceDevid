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
	
	<!-- Ekka CSS -->
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
						<li class="has-sub active expand">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group-outline"></i>
								<span class="nav-text">Vendors</span> <b class="caret"></b>
							</a>
							<div class="collapse show">
								<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
									<li class="active">
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
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-palette-advanced"></i>
								<span class="nav-text">Products</span> <b class="caret"></b>
							</a>
							<div class="collapse">
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
									<li class="">
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
											<div class="tab-pane fade show active" id="home2" role="tabpanel">
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

											<div class="tab-pane fade" id="profile2" role="tabpanel">
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

											<div class="tab-pane fade" id="contact2" role="tabpanel">
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
			<div class="ec-content-wrapper ec-vendor-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Vendor Card</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span><span><i class="mdi mdi-chevron-right"></i></span> Vendor</p>
						</div>
						<div>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#modal-add-member">Add Vendor
							</button>
						</div>
					</div>

					<div class="card card-default p-4 ec-card-space">
						<div class="ec-vendor-card mt-m-24px row">

							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">  
												<img src="assets/img/vendor/v1.jpg" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">Emma Smith</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 963-852-7410</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">
											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>180</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>1908</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$2691</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/v2.webp" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">Bobly Smith</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 863-852-7654</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">
											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>65</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>548</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$254</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/v3.webp" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">Robin Hood</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 889-852-7466</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">

											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>654</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>548</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$654</h5>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/v4.webp" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">devin chingol</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 789-852-7865</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">

											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>977</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>987</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$654</h5>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/v5.jpg" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">Nitilo Smith</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 658-852-7410</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">

											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>654</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>159</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$951</h5>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/v6.webp" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">Mehulo Kathia</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 698-852-7410</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">

											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>658</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>854</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$634</h5>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/v7.webp" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">Bridg Stone</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 333-852-7410</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">

											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>652</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>125</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$475</h5>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/v8.webp" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">pintu Trainee</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 698-866-7410</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">

											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>658</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>457</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$874</h5>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/v9.webp" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">DL Kapdia</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 332-852-3215</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">

											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>180</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>1908</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$2691</h5>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/v10.webp" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">Manu Semli</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 654-852-7744</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">

											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>252</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>542</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$854</h5>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/v11.webp" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">Niki Smith</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 45+6-852-5522</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">

											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>425</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>352</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$421</h5>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-xxl-3">
								<div class="card card-default mt-24px">
									<a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modal-contact"
											class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
									</a>
									<div class="vendor-info card-body text-center p-4">
										<a href="javascript:0" class="text-secondary d-inline-block mb-3">
											<div class="image mb-3">
												<img src="assets/img/vendor/v12.webp" class="img-fluid rounded-circle"
													alt="Avatar Image">
											</div>

											<h5 class="card-title text-dark">Jullie Bronzna</h5>

											<ul class="list-unstyled">
												<li class="d-flex mb-1">
													<i class="mdi mdi-cellphone-basic mr-1"></i>
													<span>+91 325-852-6543</span>
												</li>
												<li class="d-flex">
													<i class="mdi mdi-email mr-1"></i>
													<span>exmaple@email.com</span>
												</li>
											</ul>
										</a>
										<div class="row justify-content-center ec-vendor-detail">

											<div class="col-4">
												<h6 class="text-uppercase">Items</h6>
												<h5>254</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Sell</h6>
												<h5>574</h5>
											</div>
											<div class="col-4">
												<h6 class="text-uppercase">Payout</h6>
												<h5>$325</h5>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>
					</div>


					<!-- Contact Modal -->
					<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header justify-content-end border-bottom-0">
									<button type="button" class="btn-edit-icon" data-bs-dismiss="modal" aria-label="Close">
										<i class="mdi mdi-pencil"></i>
									</button>

									<div class="dropdown">
										<button class="btn-dots-icon" type="button" id="dropdownMenuButton"
											data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="mdi mdi-dots-vertical"></i>
										</button>

										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#">Action</a>
											<a class="dropdown-item" href="#">Another action</a>
											<a class="dropdown-item" href="#">Something else here</a>
										</div>
									</div>

									<button type="button" class="btn-close-icon" data-bs-dismiss="modal"
										aria-label="Close">
										<i class="mdi mdi-close"></i>
									</button>
								</div>

								<div class="modal-body pt-0">
									<div class="row no-gutters">
										<div class="col-md-6">
											<div class="profile-content-left px-4">
												<div class="text-center widget-profile px-0 border-0">
													<div class="card-img mx-auto rounded-circle">
														<img src="assets/img/user/u1.jpg" alt="user image">
													</div>

													<div class="card-body">
														<h4 class="py-2 text-dark">John Deo</h4>
														<p>john.example@gmail.com</p>
														<a class="btn btn-primary btn-pill my-3"
															href="#">Follow</a>
													</div>
												</div>

												<div class="d-flex justify-content-between ">
													<div class="text-center pb-4">
														<h6 class="text-dark pb-2">1503</h6>
														<p>Items</p>
													</div>

													<div class="text-center pb-4">
														<h6 class="text-dark pb-2">2905</h6>
														<p>Sell</p>
													</div>

													<div class="text-center pb-4">
														<h6 class="text-dark pb-2">1200</h6>
														<p>Payout</p>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="contact-info px-4">
												<h4 class="text-dark mb-1">Contact Details</h4>
												<p class="text-dark font-weight-medium pt-3 mb-2">Email address</p>
												<p>john.example@gmail.com</p>
												<p class="text-dark font-weight-medium pt-3 mb-2">Phone Number</p>
												<p>+00 1234 5678 91</p>
												<p class="text-dark font-weight-medium pt-3 mb-2">Birthday</p>
												<p>Dec 10, 1991</p>
												<p class="text-dark font-weight-medium pt-3 mb-2">Event</p>
												<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Add Contact Button  -->
					<div class="modal fade" id="modal-add-member" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
							<div class="modal-content">
								<form class="modal-header border-bottom-0">
									<input type="text" class="form-control" placeholder="Search...">
								</form>

								<div class="modal-body p-0" data-simplebar style="height:320px">
									<ul class="list-unstyled border-top mb-0">
										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u1.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Aaren</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox" checked="checked">
														<div class="control-indicator"></div>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="media media-message ">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u2.jpg"
														alt="Image">
													<span class="status active"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Leon Battista</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox" checked="checked">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u3.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Abriel</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u4.jpg"
														alt="Image">
													<span class="status active"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Emma</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u5.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Emily</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u6.jpg"
														alt="Image">
													<span class="status"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">William</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u7.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Sophia</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u8.jpg"
														alt="Image">
													<span class="status"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Sophia</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u1.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Aaren</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u2.jpg"
														alt="Image">
													<span class="status"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Abby</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u3.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>
												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Abriel</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u4.jpg"
														alt="Image">
													<span class="status active"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Emma</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u5.jpg"
														alt="Image">
													<span class="status"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Emily</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u6.jpg"
														alt="Image">
													<span class="status away"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">William</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>

										<li>
											<div class="media media-message">
												<div class="position-relative mr-3">
													<img class="rounded-circle" src="assets/img/user/u7.jpg"
														alt="Image">
													<span class="status"></span>
												</div>

												<div
													class="media-body d-flex justify-content-between align-items-center">
													<div class="message-contents">
														<h4 class="title">Sophia</h4>
														<p class="last-msg">Lorem ipsum dolor sit, amet consectetur
															adipisicing elit. Nam itaque doloremque
															odio,
															eligendi delectus vitae.</p>
													</div>

													<div class="control outlined control-checkbox checkbox-primary">
														<input type="checkbox">
														<div class="control-indicator"></div>
													</div>

												</div>
											</div>
										</li>
									</ul>
								</div>

								<div class="modal-footer px-4">
									<button type="button" class="btn btn-secondary btn-pill"
										data-bs-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-primary btn-pill">Add new member</button>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright &copy; <span id="ec-year"></span><a class="text-primary"
						href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin Dashboard</a>. All Rights Reserved.
					  </p>
				</div>
			</footer>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

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