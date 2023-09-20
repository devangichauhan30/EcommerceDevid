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

	<link href='assets/plugins/flag-icons/css/flag-icon.min.css' rel='stylesheet'>

	<!-- Ekka CSS -->
	<link id="ekka-css" href="assets/css/ekka.css" rel="stylesheet" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!--  WRAPPER -->
	<div class="wrapper">
		<!-- LEFT MAIN SIDEBAR -->
		<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">

				<div class="ec-brand">
					<a href="index.php" title="Ekka">
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
							<a class="sidenav-item-link" href="index.php">
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
										<a class="sidenav-item-link" href="vendor-card.php">
											<span class="nav-text">Vendor Grid</span>
										</a>
									</li>

									<li class="">
										<a class="sidenav-item-link" href="vendor-list.php">
											<span class="nav-text">Vendor List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="vendor-profile.php">
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
										<a class="sidenav-item-link" href="user-card.php">
											<span class="nav-text">User Grid</span>
										</a>
									</li>

									<li class="">
										<a class="sidenav-item-link" href="user-list.php">
											<span class="nav-text">User List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="user-profile.php">
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
										<a class="sidenav-item-link" href="main-category.php">
											<span class="nav-text">Main Category</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="sub-category.php">
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
										<a class="sidenav-item-link" href="product-add.php">
											<span class="nav-text">Add Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-list.php">
											<span class="nav-text">List Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-grid.php">
											<span class="nav-text">Grid Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-detail.php">
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
										<a class="sidenav-item-link" href="new-order.php">
											<span class="nav-text">New Order</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-history.php">
											<span class="nav-text">Order History</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-detail.php">
											<span class="nav-text">Order Detail</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="invoice.php">
											<span class="nav-text">Invoice</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Reviews -->
						<li>
							<a class="sidenav-item-link" href="review-list.php">
								<i class="mdi mdi-star-half"></i>
								<span class="nav-text">Reviews</span>
							</a>
						</li>

						<!-- Brands -->
						<li>
							<a class="sidenav-item-link" href="brand-list.php">
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
										<a href="sign-in.php">
											<span class="nav-text">Sign In</span>
										</a>
									</li>
									<li class="">
										<a href="sign-up.php">
											<span class="nav-text">Sign Up</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Icons -->
						<li class="has-sub active expand">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-diamond-stone"></i>
								<span class="nav-text">Icons</span> <b class="caret"></b>
							</a>
							<div class="collapse show">
								<ul class="sub-menu" id="icons" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="material-icon.php">
											<span class="nav-text">Material Icon</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="font-awsome-icons.php">
											<span class="nav-text">Font Awsome Icon</span>
										</a>
									</li>
									<li class="active">
										<a class="sidenav-item-link" href="flag-icon.php">
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
										<a href="404.php">404 Page</a>
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
										<a href="user-profile.php">
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
										<a href="index.php"> <i class="mdi mdi-logout"></i> Log Out </a>
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
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2 d-flex align-items-center justify-content-between">
							<h1>Flag</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Flag</p>
					</div>

					<div class="card card-default">
						<div class="card-body">
							<div class="text-center row">
								<div class="mb-5 text-left col-12">For using the flags inline with text add the classes
									<code>.flag-icon</code> and
									<code>.flag-icon-xx</code> (where xx is the ISO 3166-1-alpha-2 code of a country) to
									an empty span. If you want to
									have a squared version flag
									then add the class flag-icon-squared as well.
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ad h1" title="ad" id="ad"></i>
									<div>flag-icon-ad</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ae h1" title="ae" id="ae"></i>
									<div>flag-icon-ae</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-af h1" title="af" id="af"></i>
									<div>flag-icon-af</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ag h1" title="ag" id="ag"></i>
									<div>flag-icon-ag</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ai h1" title="ai" id="ai"></i>
									<div>flag-icon-ai</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-al h1" title="al" id="al"></i>
									<div>flag-icon-al</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-am h1" title="am" id="am"></i>
									<div>flag-icon-am</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ao h1" title="ao" id="ao"></i>
									<div>flag-icon-ao</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-aq h1" title="aq" id="aq"></i>
									<div>flag-icon-aq</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ar h1" title="ar" id="ar"></i>
									<div>flag-icon-ar</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-as h1" title="as" id="as"></i>
									<div>flag-icon-as</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-at h1" title="at" id="at"></i>
									<div>flag-icon-at</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-au h1" title="au" id="au"></i>
									<div>flag-icon-au</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-aw h1" title="aw" id="aw"></i>
									<div>flag-icon-aw</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ax h1" title="ax" id="ax"></i>
									<div>flag-icon-ax</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-az h1" title="az" id="az"></i>
									<div>flag-icon-az</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ba h1" title="ba" id="ba"></i>
									<div>flag-icon-ba</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bb h1" title="bb" id="bb"></i>
									<div>flag-icon-bb</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bd h1" title="bd" id="bd"></i>
									<div>flag-icon-bd</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-be h1" title="be" id="be"></i>
									<div>flag-icon-be</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bf h1" title="bf" id="bf"></i>
									<div>flag-icon-bf</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bg h1" title="bg" id="bg"></i>
									<div>flag-icon-bg</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bh h1" title="bh" id="bh"></i>
									<div>flag-icon-bh</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bi h1" title="bi" id="bi"></i>
									<div>flag-icon-bi</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bj h1" title="bj" id="bj"></i>
									<div>flag-icon-bj</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bl h1" title="bl" id="bl"></i>
									<div>flag-icon-bl</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bm h1" title="bm" id="bm"></i>
									<div>flag-icon-bm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bn h1" title="bn" id="bn"></i>
									<div>flag-icon-bn</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bo h1" title="bo" id="bo"></i>
									<div>flag-icon-bo</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bq h1" title="bq" id="bq"></i>
									<div>flag-icon-bq</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-br h1" title="br" id="br"></i>
									<div>flag-icon-br</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bs h1" title="bs" id="bs"></i>
									<div>flag-icon-bs</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bt h1" title="bt" id="bt"></i>
									<div>flag-icon-bt</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bv h1" title="bv" id="bv"></i>
									<div>flag-icon-bv</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bw h1" title="bw" id="bw"></i>
									<div>flag-icon-bw</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-by h1" title="by" id="by"></i>
									<div>flag-icon-by</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-bz h1" title="bz" id="bz"></i>
									<div>flag-icon-bz</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ca h1" title="ca" id="ca"></i>
									<div>flag-icon-ca</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cc h1" title="cc" id="cc"></i>
									<div>flag-icon-cc</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cd h1" title="cd" id="cd"></i>
									<div>flag-icon-cd</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cf h1" title="cf" id="cf"></i>
									<div>flag-icon-cf</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cg h1" title="cg" id="cg"></i>
									<div>flag-icon-cg</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ch h1" title="ch" id="ch"></i>
									<div>flag-icon-ch</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ci h1" title="ci" id="ci"></i>
									<div>flag-icon-ci</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ck h1" title="ck" id="ck"></i>
									<div>flag-icon-ck</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cl h1" title="cl" id="cl"></i>
									<div>flag-icon-cl</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cm h1" title="cm" id="cm"></i>
									<div>flag-icon-cm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cn h1" title="cn" id="cn"></i>
									<div>flag-icon-cn</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-co h1" title="co" id="co"></i>
									<div>flag-icon-co</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cr h1" title="cr" id="cr"></i>
									<div>flag-icon-cr</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cu h1" title="cu" id="cu"></i>
									<div>flag-icon-cu</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cv h1" title="cv" id="cv"></i>
									<div>flag-icon-cv</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cw h1" title="cw" id="cw"></i>
									<div>flag-icon-cw</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cx h1" title="cx" id="cx"></i>
									<div>flag-icon-cx</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cy h1" title="cy" id="cy"></i>
									<div>flag-icon-cy</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-cz h1" title="cz" id="cz"></i>
									<div>flag-icon-cz</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-de h1" title="de" id="de"></i>
									<div>flag-icon-de</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-dj h1" title="dj" id="dj"></i>
									<div>flag-icon-dj</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-dk h1" title="dk" id="dk"></i>
									<div>flag-icon-dk</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-dm h1" title="dm" id="dm"></i>
									<div>flag-icon-dm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-do h1" title="do" id="do"></i>
									<div>flag-icon-do</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-dz h1" title="dz" id="dz"></i>
									<div>flag-icon-dz</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ec h1" title="ec" id="ec"></i>
									<div>flag-icon-ec</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ee h1" title="ee" id="ee"></i>
									<div>flag-icon-ee</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-eg h1" title="eg" id="eg"></i>
									<div>flag-icon-eg</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-eh h1" title="eh" id="eh"></i>
									<div>flag-icon-eh</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-er h1" title="er" id="er"></i>
									<div>flag-icon-er</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-es h1" title="es" id="es"></i>
									<div>flag-icon-es</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-et h1" title="et" id="et"></i>
									<div>flag-icon-et</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-fi h1" title="fi" id="fi"></i>
									<div>flag-icon-fi</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-fj h1" title="fj" id="fj"></i>
									<div>flag-icon-fj</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-fk h1" title="fk" id="fk"></i>
									<div>flag-icon-fk</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-fm h1" title="fm" id="fm"></i>
									<div>flag-icon-fm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-fo h1" title="fo" id="fo"></i>
									<div>flag-icon-fo</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-fr h1" title="fr" id="fr"></i>
									<div>flag-icon-fr</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ga h1" title="ga" id="ga"></i>
									<div>flag-icon-ga</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gb h1" title="gb" id="gb"></i>
									<div>flag-icon-gb</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gd h1" title="gd" id="gd"></i>
									<div>flag-icon-gd</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ge h1" title="ge" id="ge"></i>
									<div>flag-icon-ge</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gf h1" title="gf" id="gf"></i>
									<div>flag-icon-gf</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gg h1" title="gg" id="gg"></i>
									<div>flag-icon-gg</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gh h1" title="gh" id="gh"></i>
									<div>flag-icon-gh</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gi h1" title="gi" id="gi"></i>
									<div>flag-icon-gi</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gl h1" title="gl" id="gl"></i>
									<div>flag-icon-gl</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gm h1" title="gm" id="gm"></i>
									<div>flag-icon-gm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gn h1" title="gn" id="gn"></i>
									<div>flag-icon-gn</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gp h1" title="gp" id="gp"></i>
									<div>flag-icon-gp</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gq h1" title="gq" id="gq"></i>
									<div>flag-icon-gq</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gr h1" title="gr" id="gr"></i>
									<div>flag-icon-gr</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gs h1" title="gs" id="gs"></i>
									<div>flag-icon-gs</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gt h1" title="gt" id="gt"></i>
									<div>flag-icon-gt</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gu h1" title="gu" id="gu"></i>
									<div>flag-icon-gu</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gw h1" title="gw" id="gw"></i>
									<div>flag-icon-gw</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-gy h1" title="gy" id="gy"></i>
									<div>flag-icon-gy</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-hk h1" title="hk" id="hk"></i>
									<div>flag-icon-hk</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-hm h1" title="hm" id="hm"></i>
									<div>flag-icon-hm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-hn h1" title="hn" id="hn"></i>
									<div>flag-icon-hn</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-hr h1" title="hr" id="hr"></i>
									<div>flag-icon-hr</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ht h1" title="ht" id="ht"></i>
									<div>flag-icon-ht</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-hu h1" title="hu" id="hu"></i>
									<div>flag-icon-hu</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-id h1" title="id" id="id"></i>
									<div>flag-icon-id</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ie h1" title="ie" id="ie"></i>
									<div>flag-icon-ie</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-il h1" title="il" id="il"></i>
									<div>flag-icon-il</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-im h1" title="im" id="im"></i>
									<div>flag-icon-im</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-in h1" title="in" id="in"></i>
									<div>flag-icon-in</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-io h1" title="io" id="io"></i>
									<div>flag-icon-io</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-iq h1" title="iq" id="iq"></i>
									<div>flag-icon-iq</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ir h1" title="ir" id="ir"></i>
									<div>flag-icon-ir</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-is h1" title="is" id="is"></i>
									<div>flag-icon-is</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-it h1" title="it" id="it"></i>
									<div>flag-icon-it</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-je h1" title="je" id="je"></i>
									<div>flag-icon-je</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-jm h1" title="jm" id="jm"></i>
									<div>flag-icon-jm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-jo h1" title="jo" id="jo"></i>
									<div>flag-icon-jo</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-jp h1" title="jp" id="jp"></i>
									<div>flag-icon-jp</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ke h1" title="ke" id="ke"></i>
									<div>flag-icon-ke</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-kg h1" title="kg" id="kg"></i>
									<div>flag-icon-kg</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-kh h1" title="kh" id="kh"></i>
									<div>flag-icon-kh</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ki h1" title="ki" id="ki"></i>
									<div>flag-icon-ki</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-km h1" title="km" id="km"></i>
									<div>flag-icon-km</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-kn h1" title="kn" id="kn"></i>
									<div>flag-icon-kn</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-kp h1" title="kp" id="kp"></i>
									<div>flag-icon-kp</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-kr h1" title="kr" id="kr"></i>
									<div>flag-icon-kr</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-kw h1" title="kw" id="kw"></i>
									<div>flag-icon-kw</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ky h1" title="ky" id="ky"></i>
									<div>flag-icon-ky</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-kz h1" title="kz" id="kz"></i>
									<div>flag-icon-kz</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-la h1" title="la" id="la"></i>
									<div>flag-icon-la</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-lb h1" title="lb" id="lb"></i>
									<div>flag-icon-lb</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-lc h1" title="lc" id="lc"></i>
									<div>flag-icon-lc</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-li h1" title="li" id="li"></i>
									<div>flag-icon-li</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-lk h1" title="lk" id="lk"></i>
									<div>flag-icon-lk</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-lr h1" title="lr" id="lr"></i>
									<div>flag-icon-lr</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ls h1" title="ls" id="ls"></i>
									<div>flag-icon-ls</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-lt h1" title="lt" id="lt"></i>
									<div>flag-icon-lt</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-lu h1" title="lu" id="lu"></i>
									<div>flag-icon-lu</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-lv h1" title="lv" id="lv"></i>
									<div>flag-icon-lv</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ly h1" title="ly" id="ly"></i>
									<div>flag-icon-ly</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ma h1" title="ma" id="ma"></i>
									<div>flag-icon-ma</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mc h1" title="mc" id="mc"></i>
									<div>flag-icon-mc</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-md h1" title="md" id="md"></i>
									<div>flag-icon-md</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-me h1" title="me" id="me"></i>
									<div>flag-icon-me</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mf h1" title="mf" id="mf"></i>
									<div>flag-icon-mf</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mg h1" title="mg" id="mg"></i>
									<div>flag-icon-mg</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mh h1" title="mh" id="mh"></i>
									<div>flag-icon-mh</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mk h1" title="mk" id="mk"></i>
									<div>flag-icon-mk</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ml h1" title="ml" id="ml"></i>
									<div>flag-icon-ml</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mm h1" title="mm" id="mm"></i>
									<div>flag-icon-mm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mn h1" title="mn" id="mn"></i>
									<div>flag-icon-mn</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mo h1" title="mo" id="mo"></i>
									<div>flag-icon-mo</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mp h1" title="mp" id="mp"></i>
									<div>flag-icon-mp</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mq h1" title="mq" id="mq"></i>
									<div>flag-icon-mq</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mr h1" title="mr" id="mr"></i>
									<div>flag-icon-mr</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ms h1" title="ms" id="ms"></i>
									<div>flag-icon-ms</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mt h1" title="mt" id="mt"></i>
									<div>flag-icon-mt</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mu h1" title="mu" id="mu"></i>
									<div>flag-icon-mu</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mv h1" title="mv" id="mv"></i>
									<div>flag-icon-mv</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mw h1" title="mw" id="mw"></i>
									<div>flag-icon-mw</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mx h1" title="mx" id="mx"></i>
									<div>flag-icon-mx</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-my h1" title="my" id="my"></i>
									<div>flag-icon-my</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-mz h1" title="mz" id="mz"></i>
									<div>flag-icon-mz</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-na h1" title="na" id="na"></i>
									<div>flag-icon-na</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-nc h1" title="nc" id="nc"></i>
									<div>flag-icon-nc</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ne h1" title="ne" id="ne"></i>
									<div>flag-icon-ne</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-nf h1" title="nf" id="nf"></i>
									<div>flag-icon-nf</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ng h1" title="ng" id="ng"></i>
									<div>flag-icon-ng</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ni h1" title="ni" id="ni"></i>
									<div>flag-icon-ni</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-nl h1" title="nl" id="nl"></i>
									<div>flag-icon-nl</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-no h1" title="no" id="no"></i>
									<div>flag-icon-no</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-np h1" title="np" id="np"></i>
									<div>flag-icon-np</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-nr h1" title="nr" id="nr"></i>
									<div>flag-icon-nr</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-nu h1" title="nu" id="nu"></i>
									<div>flag-icon-nu</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-nz h1" title="nz" id="nz"></i>
									<div>flag-icon-nz</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-om h1" title="om" id="om"></i>
									<div>flag-icon-om</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-pa h1" title="pa" id="pa"></i>
									<div>flag-icon-pa</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-pe h1" title="pe" id="pe"></i>
									<div>flag-icon-pe</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-pf h1" title="pf" id="pf"></i>
									<div>flag-icon-pf</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-pg h1" title="pg" id="pg"></i>
									<div>flag-icon-pg</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ph h1" title="ph" id="ph"></i>
									<div>flag-icon-ph</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-pk h1" title="pk" id="pk"></i>
									<div>flag-icon-pk</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-pl h1" title="pl" id="pl"></i>
									<div>flag-icon-pl</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-pm h1" title="pm" id="pm"></i>
									<div>flag-icon-pm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-pn h1" title="pn" id="pn"></i>
									<div>flag-icon-pn</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-pr h1" title="pr" id="pr"></i>
									<div>flag-icon-pr</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ps h1" title="ps" id="ps"></i>
									<div>flag-icon-ps</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-pt h1" title="pt" id="pt"></i>
									<div>flag-icon-pt</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-pw h1" title="pw" id="pw"></i>
									<div>flag-icon-pw</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-py h1" title="py" id="py"></i>
									<div>flag-icon-py</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-qa h1" title="qa" id="qa"></i>
									<div>flag-icon-qa</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-re h1" title="re" id="re"></i>
									<div>flag-icon-re</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ro h1" title="ro" id="ro"></i>
									<div>flag-icon-ro</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-rs h1" title="rs" id="rs"></i>
									<div>flag-icon-rs</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ru h1" title="ru" id="ru"></i>
									<div>flag-icon-ru</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-rw h1" title="rw" id="rw"></i>
									<div>flag-icon-rw</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sa h1" title="sa" id="sa"></i>
									<div>flag-icon-sa</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sb h1" title="sb" id="sb"></i>
									<div>flag-icon-sb</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sc h1" title="sc" id="sc"></i>
									<div>flag-icon-sc</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sd h1" title="sd" id="sd"></i>
									<div>flag-icon-sd</div>
								</div>
								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-se h1" title="se" id="se"></i>
									<div>flag-icon-se</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sg h1" title="sg" id="sg"></i>
									<div>flag-icon-sg</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sh h1" title="sh" id="sh"></i>
									<div>flag-icon-sh</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-si h1" title="si" id="si"></i>
									<div>flag-icon-si</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sj h1" title="sj" id="sj"></i>
									<div>flag-icon-sj</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sk h1" title="sk" id="sk"></i>
									<div>flag-icon-sk</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sl h1" title="sl" id="sl"></i>
									<div>flag-icon-sl</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sm h1" title="sm" id="sm"></i>
									<div>flag-icon-sm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sn h1" title="sn" id="sn"></i>
									<div>flag-icon-sn</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-so h1" title="so" id="so"></i>
									<div>flag-icon-so</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sr h1" title="sr" id="sr"></i>
									<div>flag-icon-sr</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ss h1" title="ss" id="ss"></i>
									<div>flag-icon-ss</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-st h1" title="st" id="st"></i>
									<div>flag-icon-st</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sv h1" title="sv" id="sv"></i>
									<div>flag-icon-sv</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sx h1" title="sx" id="sx"></i>
									<div>flag-icon-sx</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sy h1" title="sy" id="sy"></i>
									<div>flag-icon-sy</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-sz h1" title="sz" id="sz"></i>
									<div>flag-icon-sz</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tc h1" title="tc" id="tc"></i>
									<div>flag-icon-tc</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-td h1" title="td" id="td"></i>
									<div>flag-icon-td</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tf h1" title="tf" id="tf"></i>
									<div>flag-icon-tf</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tg h1" title="tg" id="tg"></i>
									<div>flag-icon-tg</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-th h1" title="th" id="th"></i>
									<div>flag-icon-th</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tj h1" title="tj" id="tj"></i>
									<div>flag-icon-tj</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tk h1" title="tk" id="tk"></i>
									<div>flag-icon-tk</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tl h1" title="tl" id="tl"></i>
									<div>flag-icon-tl</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tm h1" title="tm" id="tm"></i>
									<div>flag-icon-tm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tn h1" title="tn" id="tn"></i>
									<div>flag-icon-tn</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-to h1" title="to" id="to"></i>
									<div>flag-icon-to</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tr h1" title="tr" id="tr"></i>
									<div>flag-icon-tr</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tt h1" title="tt" id="tt"></i>
									<div>flag-icon-tt</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tv h1" title="tv" id="tv"></i>
									<div>flag-icon-tv</div>
								</div>
								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tw h1" title="tw" id="tw"></i>
									<div>flag-icon-tw</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-tz h1" title="tz" id="tz"></i>
									<div>flag-icon-tz</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ua h1" title="ua" id="ua"></i>
									<div>flag-icon-ua</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ug h1" title="ug" id="ug"></i>
									<div>flag-icon-ug</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-um h1" title="um" id="um"></i>
									<div>flag-icon-um</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-us h1" title="us" id="us"></i>
									<div>flag-icon-us</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-uy h1" title="uy" id="uy"></i>
									<div>flag-icon-uy</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-uz h1" title="uz" id="uz"></i>
									<div>flag-icon-uz</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-va h1" title="va" id="va"></i>
									<div>flag-icon-va</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-vc h1" title="vc" id="vc"></i>
									<div>flag-icon-vc</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ve h1" title="ve" id="ve"></i>
									<div>flag-icon-ve</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-vg h1" title="vg" id="vg"></i>
									<div>flag-icon-vg</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-vi h1" title="vi" id="vi"></i>
									<div>flag-icon-vi</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-vn h1" title="vn" id="vn"></i>
									<div>flag-icon-vn</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-vu h1" title="vu" id="vu"></i>
									<div>flag-icon-vu</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-wf h1" title="wf" id="wf"></i>
									<div>flag-icon-wf</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ws h1" title="ws" id="ws"></i>
									<div>flag-icon-ws</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-ye h1" title="ye" id="ye"></i>
									<div>flag-icon-ye</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-yt h1" title="yt" id="yt"></i>
									<div>flag-icon-yt</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-za h1" title="za" id="za"></i>
									<div>flag-icon-za</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-zm h1" title="zm" id="zm"></i>
									<div>flag-icon-zm</div>
								</div>

								<div class="mb-5 col-6 col-xl-2 col-md-3 col-sm-4">
									<i class="flag-icon flag-icon-zw h1" title="zw" id="zw"></i>
									<div>flag-icon-zw</div>
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