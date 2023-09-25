
<!--========================================================= 
    Item Name: Ekka - Ecommerce php Template.
    Author: ashishmaraviya
    Version: 3.3
    Copyright 2022-2023
	Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    
    <title>Ekka - Ecommerce php Template.</title>
    <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce php, electronics, fashion, php eCommerce, php store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce php template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="assetsUser/images/favicon/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="assetsUser/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="assetsUser/images/favicon/favicon.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="assetsUser/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="assetsUser/css/plugins/animate.css" />
    <link rel="stylesheet" href="assetsUser/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assetsUser/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assetsUser/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="assetsUser/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="assetsUser/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="assetsUser/css/demo1.css" />
    <link rel="stylesheet" href="assetsUser/css/responsive.css" />

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assetsUser/css/backgrounds/bg-4.css">
</head>
<body>
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <!-- Header start  -->
    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top social Start -->
                    <div class="col text-left header-top-left d-none d-lg-block">
                        <div class="header-top-social">
                            <span class="social-text text-upper">Follow us on:</span>
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top social End -->
                    <!-- Header Top Message Start -->
                    <div class="col text-center header-top-center">
                        <div class="header-top-message text-upper">
                            <span>Free Shipping</span>This Week Order Over - $75
                        </div>
                    </div>
                    <!-- Header Top Message End -->
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block">
                        <div class="header-top-lan-curr d-flex justify-content-end">
                            <!-- Currency Start -->
                            <div class="header-top-curr dropdown">
                                <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                        class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                    <li><a class="dropdown-item" href="#">EUR €</a></li>
                                </ul>
                            </div>
                            <!-- Currency End -->
                            <!-- Language Start -->
                            <div class="header-top-lan dropdown">
                                <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                        class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Italiano</a></li>
                                </ul>
                            </div>
                            <!-- Language End -->

                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col d-lg-none ">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                        src="assetsUser/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                   
                                    <li><a class="dropdown-item" href="register.php">Register</a></li>
                                    <li><a class="dropdown-item" href="checkout.php">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header Cart Start -->
                            <a href="wishlist.php" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><img src="assetsUser/images/icons/wishlist.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count">4</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><img src="assetsUser/images/icons/cart.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count cart-count-lable">3</span>
                            </a>
                            <!-- Header Cart End -->
                            <a href="javascript:void(0)" class="ec-header-btn ec-sidebar-toggle">
                                <img src="assetsUser/images/icons/category-icon.svg" class="svg_img header_svg" alt="icon" />
                            </a>
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <img src="assetsUser/images/icons/menu.svg" class="svg_img header_svg" alt="icon" />
                            </a>
                            <!-- Header menu End -->
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center">
                            <div class="header-logo">
                                <a href="index.php"><img src="assetsUser/images/logo/logo.png" alt="Site Logo" /><img
                                        class="dark-logo" src="assetsUser/images/logo/dark-logo.png" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center">
                            <div class="header-search">
                                <form class="ec-btn-group-form" action="#">
                                    <input class="form-control ec-search-bar" placeholder="Search products..." type="text">
                                    <button class="submit" type="submit"><img src="assetsUser/images/icons/search.svg"
                                            class="svg_img header_svg" alt="" /></button>
                                </form>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center">
                            <div class="ec-header-bottons">

                                <!-- Header User Start -->
                                <div class="ec-header-user dropdown">
                                    <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                            src="assetsUser/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                   
                                        <li><a class="dropdown-item" href="register.php">Register</a></li>
                                        <li><a class="dropdown-item" href="checkout.php">Checkout</a></li>
                                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                                    </ul>
                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                <a href="wishlist.php" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon"><img src="assetsUser/images/icons/wishlist.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                    <span class="ec-header-count">4</span>
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                    <div class="header-icon"><img src="assetsUser/images/icons/cart.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                    <span class="ec-header-count cart-count-lable">3</span>
                                </a>
                                <!-- Header Cart End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">

                    <!-- Ec Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="index.php"><img src="assetsUser/images/logo/logo.png" alt="Site Logo" /><img
                                    class="dark-logo" src="assetsUser/images/logo/dark-logo.png" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control ec-search-bar" placeholder="Search products..." type="text">
                                <button class="submit" type="submit"><img src="assetsUser/images/icons/search.svg"
                                        class="svg_img header_svg" alt="icon" /></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="ec-main-menu">
                            <a href="javascript:void(0)" class="ec-header-btn ec-sidebar-toggle">
                                <img src="assetsUser/images/icons/category-icon.svg" class="svg_img header_svg" alt="icon" />
                            </a>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li class="dropdown position-static"><a href="javascript:void(0)">Categories</a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Fashion</a></li>
                                                <li><a href="shop-left-sidebar-col-3.php">Men's Top Wear</a>
                                                </li>
                                                <li><a href="shop-left-sidebar-col-4.php">Men's Botton Wear</a>
                                                </li>
                                                <li><a href="shop-right-sidebar-col-3.php">Women Ethic</a>
                                                </li>
                                                <li><a href="shop-right-sidebar-col-4.php">women footware</a>
                                                </li>
                                                <li><a href="shop-full-width.php">Men Footwear</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Kids</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-3.php">Kids Toy's</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-4.php">Kids Pents</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-3.php">kids Footware</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-4.php">Kids Cloth</a></li>
                                                <li><a href="shop-banner-full-width.php">Kids Round T-Shirt</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Electronics</a></li>
                                                <li><a href="shop-full-width-col-3.php">Moblie</a></li>
                                                <li><a href="shop-full-width-col-4.php">Leptop and Desktop</a></li>
                                                <li><a href="shop-full-width-col-5.php">MoblileAccessory</a></li>
                                                <li><a href="shop-full-width-col-6.php">Powerbank</a></li>
                                                <li><a href="shop-banner-full-width-col-3.php">Tablets</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Beauty,Toys & More</a>
                                                </li>
                                                <li><a href="shop-list-left-sidebar.php">Men's Grooming</a></li>
                                                <li><a href="shop-list-right-sidebar.php">Food & Drinksr</a></li>
                                                <li><a href="shop-list-banner-left-sidebar.php">Books</a>
                                                </li>
                                                <li><a href="shop-list-banner-right-sidebar.php">Beby Care</a></li>
                                                <li><a href="shop-list-full-col-2.php">Sports & Fitness</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <!-- <ul class="ec-main-banner w-100">
                                                <li><a class="p-0" href="shop-left-sidebar-col-3.php"><img
                                                            class="img-responsive" src="assetsUser/images/menu-banner/cloth1.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-left-sidebar-col-4.php"><img
                                                            class="img-responsive" src="assetsUser/images/menu-banner/cloth3.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-3.php"><img
                                                            class="img-responsive" src="assetsUser/images/menu-banner/cloth4.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-4.php"><img
                                                            class="img-responsive" src="assetsUser/images/menu-banner/cloth1.jpg"
                                                            alt=""></a></li>
                                            </ul> -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Products</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Living Room Furniture
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-left-sidebar.php">TV Units</a></li>
                                                <li><a href="product-right-sidebar.php">Sofa Beds</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Kitchen & Dining
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-360-left-sidebar.php">Cookware</a></li>
                                                <li><a href="product-360-right-sidebar.php">Kitchen tools</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Home Decor
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-video-left-sidebar.php">Phota Frames & Albums</a>
                                                </li>
                                                <li><a href="product-video-right-sidebar.php">Clocks</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Lightings & Electricals
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-gallery-left-sidebar.php">ElectricalWire</a>
                                                </li>
                                                <li><a href="product-gallery-right-sidebar.php">ElectricalDoorBell</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product-full-width.php">Cleaning & Bath</a></li>
                                        <li><a href="product-360-full-width.php">Kids Furniture</a></li>
                                        <li><a href="product-video-full-width.php">Pet & Gardening</a></li>
                                        <li><a href="product-gallery-full-width.php">Storege</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="contact-us.php">Contact Us</a></li>
                                        <li><a href="cart.php">Cart</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="compare.php">Compare</a></li>
                                        <li><a href="faq.php">FAQ</a></li>
                                        
                                        <li><a href="track-order.php">Track Order</a></li>
                                        <li><a href="terms-condition.php">Terms Condition</a></li>
                                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                    </ul>
                                </li>
                               
                                <li class="dropdown"><a href="blog-full-width.php">Blog</a>
                                </li>
                                
                                <li class="dropdown scroll-to"><a href="javascript:void(0)"><img
                                    src="assetsUser/images/icons/scroll.svg" class="svg_img header_svg scroll" alt="" /></a>
                                    <ul class="sub-menu">
                                        <li class="menu_title">Scroll To Section</li>
                                        <li><a href="javascript:void(0)" data-scroll="collection" class="nav-scroll">Top Collection</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="categories" class="nav-scroll">Categories</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="offers" class="nav-scroll">Offers</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="vendors" class="nav-scroll">Top Vendors</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="services" class="nav-scroll">Services</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="arrivals" class="nav-scroll">New Arrivals</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="reviews" class="nav-scroll">Client Review</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="insta" class="nav-scroll">Instagram Feed</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- ekka Mobile Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">Fashion</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-left-sidebar-col-3.php">Men's Top Wear</a>
                                        </li>
                                        <li><a href="shop-left-sidebar-col-4.php">Men's Botton Wear</a>
                                         </li>
                                        <li><a href="shop-right-sidebar-col-3.php">Women Ethic</a>
                                        </li>
                                        <li><a href="shop-right-sidebar-col-4.php">women footware</a>
                                        </li>
                                        <li><a href="shop-full-width.php">Men Footwear</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Kids</a>
                                    <ul class="sub-menu">
                                    <li><a href="shop-banner-left-sidebar-col-3.php">Kids Toy's</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-4.php"></a>Kids Pents</li>
                                                <li><a href="shop-banner-right-sidebar-col-3.php"></a>kids Footware</li>
                                                <li><a href="shop-banner-right-sidebar-col-4.php"></a>Kids Cloth</li>
                                                <li><a href="shop-banner-full-width.php">Kids Round T-Shirt</a>
                                                </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Electronics</a>
                                    <ul class="sub-menu">
                                    <li><a href="shop-full-width-col-3.php">Moblie</a></li>
                                                <li><a href="shop-full-width-col-4.php">Leptop and Desktop</a></li>
                                                <li><a href="shop-full-width-col-5.php">MoblileAccessory</a></li>
                                                <li><a href="shop-full-width-col-6.php">Powerbank</a></li>
                                                <li><a href="shop-banner-full-width-col-3.php">Tablets</a>
                                                </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Beauty,Toys & More</a>
                                    <ul class="sub-menu">
                                    <li><a href="shop-list-left-sidebar.php">Men's Grooming</a></li>
                                                <li><a href="shop-list-right-sidebar.php">Food & Drinksr</a></li>
                                                <li><a href="shop-list-banner-left-sidebar.php">Books</a>
                                                </li>
                                                <li><a href="shop-list-banner-right-sidebar.php">Beby Care</a></li>
                                                <li><a href="shop-list-full-col-2.php">Sports & Fitness</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a class="p-0" href="shop-left-sidebar-col-3.php"><img class="img-responsive"
                                            src="assetsUser/images/menu-banner/cloth1.jpg" alt=""></a>
                                </li> -->
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Products</a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Living Room Furniture</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-left-sidebar.php">TV Units</a></li>
                                        <li><a href="product-right-sidebar.php">Sofa Beds</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Kitchen & Dining</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-360-left-sidebar.php">Cookware</a></li>
                                        <li><a href="product-360-right-sidebar.php">Kitchen tools</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Home Decor</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-video-left-sidebar.php">Phota Frames & Albums</a></li>
                                        <li><a href="product-video-right-sidebar.php">Clocks</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Lightings & Electricals</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-gallery-left-sidebar.php">ElectricalWire</a></li>
                                        <li><a href="product-gallery-right-sidebar.php">ElectricalDoorBell</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-full-width.php">Cleaning & Bath</a></li>
                                <li><a href="product-360-full-width.php">Kids Furniture</a></li>
                                <li><a href="product-video-full-width.php">Pet & Gardening</a></li>
                                <li><a href="product-gallery-full-width.php">Storege</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">about</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="compare.php">Compare</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="track-order.php">Track Order</a></li>
                                <li><a href="terms-condition.php">Terms Condition</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="blog-full-width.php">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-top-lan-curr">
                        <!-- Language Start -->
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->
                    </div>
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>
        <!-- ekka mobile Menu End -->
    </header>
    <!-- Header End  -->

    <!-- ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                 <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                src="assetsUser/images/product-image/roundnecktshirt.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.php" class="cart_pro_title">T-shirt For Women</a>
                            <span class="cart-price"><span>$76.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                src="assetsUser/images/product-image/Leather womens purse.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.php" class="cart_pro_title">Women Leather Shoes</a>
                            <span class="cart-price"><span>$64.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                src="assetsUser/images/product-image/designer leather purses.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.php" class="cart_pro_title">Girls Nylon Purse</a>
                            <span class="cart-price"><span>$59.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.php" class="btn btn-primary">View Cart</a>
                    <a href="checkout.php" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ekka Cart End -->

    <!-- Category Sidebar start -->
    <div class="ec-side-cat-overlay"></div>
    <div class="col-lg-3 category-sidebar" data-animation="fadeIn">
            <div class="cat-sidebar">
                <div class="cat-sidebar-box">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Category<button class="ec-close">×</button></h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item"><img src="assetsUser/images/icons/dress-8.svg" class="svg_img" alt="drink" />Cothes</div>
                                        <ul style="display: block;">
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Shirt <span title="Available Stock">- 25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">shorts & jeans <span title="Available Stock">- 52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">jacket<span title="Available Stock">- 500</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">dress & frock  <span title="Available Stock">- 35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item"><img src="assetsUser/images/icons/shoes-8.svg" class="svg_img" alt="drink" />Footwear</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Sports <span title="Available Stock">- 25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Formal <span title="Available Stock">- 52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Casual <span title="Available Stock">- 40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">safety shoes <span title="Available Stock">- 35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item"><img src="assetsUser/images/icons/jewelry-8.svg" class="svg_img" alt="drink" />jewelry</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Earrings <span title="Available Stock">- 50</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Couple Rings <span title="Available Stock">- 35</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Necklace <span title="Available Stock">- 40</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item"><img src="assetsUser/images/icons/perfume-8.svg" class="svg_img" alt="drink" />perfume</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Clothes perfume<span title="Available Stock">- 4 pcs</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">deodorant <span title="Available Stock">- 52 pcs</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Flower fragrance <span title="Available Stock">- 10 pack</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Air Freshener<span title="Available Stock">- 35 pack</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item"><img src="assetsUser/images/icons/cosmetics-8.svg" class="svg_img" alt="drink" />cosmetics</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">shampoo<span title="Available Stock"></span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Sunscreen<span title="Available Stock"></span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">body wash<span title="Available Stock"></span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">makeup kit<span title="Available Stock"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item"><img src="assetsUser/images/icons/glasses-8.svg" class="svg_img" alt="drink" />glasses</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item" ><a href="shop-left-sidebar-col-3.php">Sunglasses <span title="Available Stock">- 20</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Lenses <span title="Available Stock">- 52</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item"><img src="assetsUser/images/icons/bag-8.svg" class="svg_img" alt="drink" />bags</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">shopping bag <span title="Available Stock">- 25</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">Gym backpack <span title="Available Stock">- 52</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">purse <span title="Available Stock">- 40</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.php">wallet <span title="Available Stock">- 35</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Category Block -->
                    </div>
                </div>
                <div class="ec-sidebar-slider-cat">
                    <div class="ec-sb-slider-title">Best Sellers</div>
                    <div class="ec-sb-pro-sl">
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                        src="assetsUser/images/product-image/ClasicBabyShoes.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.php">baby fabric shoes</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$5.00</span>
                                        <span class="new-price">$4.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                        src="assetsUser/images/product-image/Full sleeve cap hoodies.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Men's hoodies t-shirt</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$10.00</span>
                                        <span class="new-price">$7.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                        src="assetsUser/images/product-image/roundnecktshirt.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Girls t-shirt</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$5.00</span>
                                        <span class="new-price">$3.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                        src="assetsUser/images/product-image/canvascowboyhat.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.php">woolen hat for men</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$15.00</span>
                                        <span class="new-price">$12.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                        src="assetsUser/images/product-image/ClassicLeatherpurse.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Womens purse</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$15.00</span>
                                        <span class="new-price">$12.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                        src="assetsUser/images/product-image/BabyDoctorToyKit.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Baby toy doctor kit</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                        <i class="ecicon eci-star"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$50.00</span>
                                        <span class="new-price">$45.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                        src="assetsUser/images/product-image/bebytoytedtbear1.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.php">teddy bear baby toy</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$35.00</span>
                                        <span class="new-price">$25.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                        src="assetsUser/images/product-image/Full sleeve cap hoodies.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Mens hoodies blue</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$15.00</span>
                                        <span class="new-price">$13.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Main Slider Start -->
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper" >
                <div class="ec-slide-item swiper-slide d-flex ec-slide-1" style="background-image: url('assetsUser/images/banner/banner1.jpg');">
                    <div class="container align-self-center" >
                        <div class="row" >
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation" >
                                    <h1 class="ec-slide-title" style="color:white">New Fashion Collection</h1>
                                    <h2 class="ec-slide-stitle" style="color:white">Sale Offer</h2>
                                    <p style="color:white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex ec-slide-2" style="background-image: url('assetsUser/images/banner/boat.jpg');">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title" >Boat Headphone Sets</h1>
                                    <h2 class="ec-slide-stitle" >Sale Offer</h2>
                                    <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p" id="collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">Our Top Collection</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center">
                    <ul class="ec-pro-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-pro-for-all">For
                                All</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-men">For
                                Men</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-women">For
                                Women</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-child">For
                                Children</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-for-all">
                            <div class="row">
                                <!-- Product Content -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/roundnecktshirt.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/roundnecktshirt.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Round Neck T-Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$27.00</span>
                                                <span class="new-price">$22.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e8c2ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#9cfdd5;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$25.00" data-new="$20.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00"
                                                                data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$30.00"
                                                                data-new="$25.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                                data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/fullsleevshirt.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/fullsleevshirt.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Full Sleeve Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#01f1f1;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#b89df8;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$12.00" data-new="$10.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$15.00"
                                                                data-new="$12.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$18.00"
                                                                data-new="$15.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                                data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/cute.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/cute.jpg" alt="Product" />
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Cute Baby Toy's</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/bebytoytedtbear1.jpg"
                                                data-src-hover="assetsUser/images/product-image/bebytoytedtbear1.jpg"
                                                data-tooltip="Gray"><span
                                                    style="background-color:#90cdf7;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/bebytoytedtbear1.jpg"
                                                data-src-hover="assetsUser/images/product-image/bebytoytedtbear1.jpg"
                                                data-tooltip="Orange"><span
                                                    style="background-color:#ff3b66;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                    data-src-hover="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                data-tooltip="Green"><span
                                                    style="background-color:#ffc476;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color:#1af0ba;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$40.00" data-new="$30.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$50.00"
                                                                data-new="$40.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/jumbocurrybag.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/jumbocurrybag.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Jumbo Carry Bag</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$50.00</span>
                                                <span class="new-price">$40.00</span>
                                            </span>                                                
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/jumbocurrybag.jpg"
                                                                data-src-hover="assetsUser/images/product-image/jumbocurrybag.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fdbf04;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/designerleatherpurses.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/designerleatherpurses.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">15%</span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Designer Leather Purses</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/bebytoytedtbear1.jpg"
                                                                data-src-hover="assetsUser/images/product-image/bebytoytedtbear1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#75e3ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/bebytoytedtbear1.jpg"
                                                                data-src-hover="assetsUser/images/product-image/bebytoytedtbear1.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#11f7d8;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-src-hover="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#acff7c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#e996fa;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/canvascowboyhat.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/canvascowboyhat.jpg" alt="Product" />
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Canvas Cowboy Hat</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/canvascowboyhat.jpg"
                                                                data-src-hover="assetsUser/images/product-image/canvascowboyhat.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#ebbf60;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/canvascowboyhat.jpg"
                                                                data-src-hover="assetsUser/images/product-image/canvascowboyhat.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#b4fc57;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/canvascowboyhat.jpg"
                                                                data-src-hover="assetsUser/images/product-image/canvascowboyhat.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#2ea1cd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/canvascowboyhat.jpg"
                                                                data-src-hover="assetsUser/images/product-image/canvascowboyhat.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#c1a1fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/leatherbeltformen.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/leatherbeltformen.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Leather Belt for Men</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/leatherbeltformen.jpg"
                                                                data-src-hover="assetsUser/images/product-image/leatherbeltformen.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#9e9e9e;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/leatherbeltformen.jpg"
                                                                data-src-hover="assetsUser/images/product-image/leatherbeltformen.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#eb8e76;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$15.00" data-new="$10.00"
                                                                data-tooltip="Small">32</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$17.00"
                                                                data-new="$12.00" data-tooltip="Medium">34</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                                data-new="$15.00" data-tooltip="Large">36</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/digitalsmartwatch.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/digitalsmartwatch.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">35%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Digital Smart Watches</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.php">Shop All Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 1st Product tab end -->
                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-men">
                            <div class="row">
                                <!-- Product Content -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/roundnecktshirt.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/roundnecktshirt.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Round Neck T-Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e8c2ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#9cfdd5;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$25.00" data-new="$20.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00"
                                                                data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$30.00"
                                                                data-new="$25.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                                data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/fullsleevshirt.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/fullsleevshirt.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Full Sleeve Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#01f1f1;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#b89df8;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$12.00" data-new="$10.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$15.00"
                                                                data-new="$12.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$18.00"
                                                                data-new="$15.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                                data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/mans1.webp" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/mans1.webp" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Black Boy"s T-shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$20.00</span>
                                            </span>                                                
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/mans1.webp"
                                                                data-src-hover="assetsUser/images/product-image/mans1.webp"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fdbf04;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/canvascowboyhat.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/canvascowboyhat.jpg" alt="Product" />
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Canvas Cowboy Hat</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/bebytoytedtbear1.jpg"
                                                                data-src-hover="assetsUser/images/product-image/bebytoytedtbear1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#ebbf60;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-src-hover="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#b4fc57;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#2ea1cd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/cute.jpg"
                                                                data-src-hover="assetsUser/images/product-image/cute.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                style="background-color:#c1a1fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/leatherbeltformen.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/leatherbeltformen.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Leather Belt for Men</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/leatherbeltformen.jpg"
                                                                data-src-hover="assetsUser/images/product-image/leatherbeltformen.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#9e9e9e;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/leatherbeltformen.jpg"
                                                                data-src-hover="assetsUser/images/product-image/leatherbeltformen.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#eb8e76;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$15.00" data-new="$10.00"
                                                                data-tooltip="Small">32</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$17.00"
                                                                data-new="$12.00" data-tooltip="Medium">34</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                                data-new="$15.00" data-tooltip="Large">36</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/digitalsmartwatch.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/digitalsmartwatch.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Digital Smart Watches</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/Canvas Shoes for Men.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/Canvas Shoes for Men.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Canvas Shoes for Men</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/Canvas Shoes for Men.jpg"
                                                                data-src-hover="assetsUser/images/product-image/Canvas Shoes for Men.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#41d49c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/Canvas Shoes for Men.jpg"
                                                                data-src-hover="assetsUser/images/product-image/Canvas Shoes for Men.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#fc8484;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/Canvas Shoes for Men.jpg"
                                                                data-src-hover="assetsUser/images/product-image/Canvas Shoes for Men.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#db94f7;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/Canvas Shoes for Men.jpg"
                                                                data-src-hover="assetsUser/images/product-image/Canvas Shoes for Men.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#24da0c;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$30.00" data-new="$25.00"
                                                                data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                                data-new="$27.00" data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00"
                                                                data-new="$30.00" data-tooltip="Large">8</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00"
                                                                data-new="$35.00" data-tooltip="Extra Large">9</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/fullsleevshirt.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/fullsleevshirt.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Full Sleeve T-Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#21b7fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#1df0ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/fullsleevshirt.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#94f7a1;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$30.00" data-new="$25.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                                data-new="$27.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00"
                                                                data-new="$30.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00"
                                                                data-new="$35.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.php">Shop All Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 2nd Product tab end -->
                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-women">
                            <div class="row">
                                <!-- Product Content -->                                
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/women1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/women1.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                      </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Women Sleev T-Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image//women1.jpg"
                                                                data-src-hover="assetsUser/images/product-image//women1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#21b7fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image//women1.jpg"
                                                                data-src-hover="assetsUser/images/product-image//women1.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#1df0ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image//women1.jpg"
                                                                data-src-hover="assetsUser/images/product-image//women1.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#94f7a1;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$30.00" data-new="$25.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                                data-new="$27.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00"
                                                                data-new="$30.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00"
                                                                data-new="$35.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/roundnecktshirt.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/roundnecktshirt.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Round Neck T-Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e8c2ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-src-hover="assetsUser/images/product-image/roundnecktshirt.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#9cfdd5;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$25.00" data-new="$20.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00"
                                                                data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$30.00"
                                                                data-new="$25.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                                data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/digitalsmartwatch.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/digitalsmartwatch.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Digital Smart Watches</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/women2.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/women2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">T-Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-src-hover="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#75e3ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-src-hover="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#11f7d8;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-src-hover="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#acff7c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-src-hover="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#e996fa;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image" src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image" src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare" title="Compare"><img
                                                            src="assetsUser/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To
                                                        Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Classic Leather purse</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-src-hover="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-tooltip="Gray"><span style="background-color:#dba4ff;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-src-hover="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#ff4a77;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-src-hover="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-tooltip="Green"><span style="background-color:#c9ff55;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-src-hover="assetsUser/images/product-image/designerleatherpurses.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#ffcc5e;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image" src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image" src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare" title="Compare"><img
                                                            src="assetsUser/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To
                                                        Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Fancy Ladies Sandal</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                                data-src-hover="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                                data-tooltip="Gray"><span style="background-color:#db9dff;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                                data-src-hover="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#00ffff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                                data-src-hover="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                                data-tooltip="Green"><span style="background-color:#ffa7f3;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                                data-src-hover="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#89ff7e;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$50.00"
                                                                data-new="$40.00" data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$60.00" data-new="$50.00"
                                                                data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$70.00" data-new="$60.00"
                                                                data-tooltip="Large">8</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$80.00" data-new="$70.00"
                                                                data-tooltip="Extra Large">9</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image" src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image" src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                        alt="Product" />
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare" title="Compare"><img
                                                            src="assetsUser/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To
                                                        Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Womens Leather Backpack</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                                data-src-hover="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                                data-tooltip="Gray"><span style="background-color:#deffa4;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                                data-src-hover="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#ffcdbe;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                                data-src-hover="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                                data-tooltip="Green"><span style="background-color:#ff94df;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                                data-src-hover="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#dd9bfc;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/digitalsmartwatch.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/digitalsmartwatch.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Beautiful Watch for Women</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#bb8641;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#5dd677;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#32ffdd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-src-hover="assetsUser/images/product-image/digitalsmartwatch.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#56ccfa;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$70.00" data-new="$60.00"
                                                                data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$80.00"
                                                                data-new="$70.00" data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$90.00"
                                                                data-new="$80.00" data-tooltip="Large">8</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$100.00"
                                                                data-new="$90.00" data-tooltip="Extra Large">9</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.php">Shop All Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 3rd Product tab end -->
                        <!-- ec 4th Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-child">
                            <div class="row">
                                <!-- Product Content -->                                
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/cute.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/cute.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Cute Baby Toy's</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/cute.jpg"
                                                                data-src-hover="assetsUser/images/product-image/cute.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#90cdf7;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/cute.jpg"
                                                                data-src-hover="assetsUser/images/product-image/cute.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#ff3b66;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/cute.jpg"
                                                                data-src-hover="assetsUser/images/product-image/cute.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#ffc476;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/cute.jpg"
                                                                data-src-hover="assetsUser/images/product-image/cute.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#1af0ba;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$40.00" data-new="$30.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$50.00"
                                                                data-new="$40.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/ClasicBabyShoes.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/ClasicBabyShoes.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Clasic Baby Shoes
                                            </a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$80.00</span>
                                                <span class="new-price">$70.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/ClasicBabyShoes.jpg"
                                                                data-src-hover="assetsUser/images/product-image/ClasicBabyShoes.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#ffacfb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/ClasicBabyShoes.jpg"
                                                                data-src-hover="assetsUser/images/product-image/15_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#90dfff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/ClasicBabyShoes.jpg"
                                                                data-src-hover="assetsUser/images/product-image/ClasicBabyShoes.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#c6ff4a;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/ClasicBabyShoes.jpg"
                                                                data-src-hover="assetsUser/images/product-image/ClasicBabyShoes.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#ffb158;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$80.00" data-new="$70.00"
                                                                data-tooltip="Small">4</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$70.00"
                                                                data-new="$60.00" data-tooltip="Medium">5</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$60.00"
                                                                data-new="$50.00" data-tooltip="Large">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$50.00"
                                                                data-new="$40.00" data-tooltip="Extra Large">7</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/BabyDoctorToyKit.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/BabyDoctorToyKit.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Baby Doctor Toy Kit</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$50.00</span>
                                                <span class="new-price">$40.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/BabyDoctorToyKit.jpg"
                                                                data-src-hover="assetsUser/images/product-image/BabyDoctorToyKit.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#6ee9ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/BabyDoctorToyKit.jpg"
                                                                data-src-hover="assetsUser/images/product-image/BabyDoctorToyKit.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#eb99ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/BabyDoctorToyKit.jpg"
                                                                data-src-hover="assetsUser/images/product-image/BabyDoctorToyKit.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#ff6464;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/BabyDoctorToyKit.jpg"
                                                                data-src-hover="assetsUser/images/product-image/BabyDoctorToyKit.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#e476ff;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/childern1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/childern1.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Baby All Cloths</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$60.00</span>
                                                <span class="new-price">$50.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern1.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#8ad2fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern1.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern1.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#ff8ef6;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern1.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern1.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#ffbe31;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern1.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern1.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#a3ffba;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/CanvasShoesforBoy.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/CanvasShoesforBoy.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Canvas Shoes for Boy</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/CanvasShoesforBoy.jpg"
                                                                data-src-hover="assetsUser/images/product-image/CanvasShoesforBoy.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#21b7fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/CanvasShoesforBoy.jpg"
                                                                data-src-hover="assetsUser/images/product-image/CanvasShoesforBoy.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#1df0ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/CanvasShoesforBoy.jpg"
                                                                data-src-hover="assetsUser/images/product-image/CanvasShoesforBoy.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#94f7a1;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$30.00" data-new="$25.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                                data-new="$27.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00"
                                                                data-new="$30.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00"
                                                                data-new="$35.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/childern2.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/childern2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Childern Cloths</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern2.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern2.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e8c2ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern2.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#9cfdd5;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$25.00" data-new="$20.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00"
                                                                data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$30.00"
                                                                data-new="$25.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                                data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/childern3.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/childern3.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Childer CLoth And Toys</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern3.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern3.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern3.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern3.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern3.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern3.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.php" class="image">
                                                    <img class="main-image"
                                                        src="assetsUser/images/product-image/childern4.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assetsUser/images/product-image/childern4.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.php" class="ec-btn-group compare"
                                                        title="Compare"><img src="assetsUser/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assetsUser/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Childer CLoth And Toys</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern4.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern4.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#75e3ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern4.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern4.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#11f7d8;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern4.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern4.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#acff7c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assetsUser/images/product-image/childern4.jpg"
                                                                data-src-hover="assetsUser/images/product-image/childern4.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#e996fa;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.php">Shop All Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 4th Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->

    <!-- ec Banner Section Start -->
    <section class="ec-banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="container">
            <!-- ec Banners Start -->
            <div class="ec-banner-inner">
                <!--ec Banner Start -->
                <div class="ec-banner-block ec-banner-block-2">
                    <div class="row">
                        <div class="banner-block col-lg-6 col-md-12 margin-b-30" data-animation="slideInRight" >
                            <div class="bnr-overlay">
                            <img src="assetsUser/images/banner/shoes.jpg" alt=""/>
                                <div class="banner-text">
                                <span class="ec-banner-stitle" style="color:white">New Arrivals</span>
                                    <span class="ec-banner-title" style="color:white">mens<br> Sport shoes</span>
                                    <span class="ec-banner-discount" style="color:white" >30% Discount</span>
                                </div>                   
                                <div class="banner-content">
                                
                                    <span class="ec-banner-btn"><a href="#">Order Now</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="banner-block col-lg-6 col-md-12" data-animation="slideInLeft">
                            <div class="bnr-overlay">
                                <img src="assetsUser/images/banner/watch.jpg" alt="" />
                                <div class="banner-text">
                                <span class="ec-banner-stitle">New Trending</span>
                                    <span class="ec-banner-title" >Smart<br> watches</span>
                                    <span class="ec-banner-discount" >Buy any 3 Items & get <br>20% Discount</span>
                                </div>
                                <div class="banner-content">
                               
                                    <span class="ec-banner-btn"><a href="#">Order Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ec Banner End -->
                </div>
                <!-- ec Banners End -->
            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!--  Category Section Start -->
    <section class="section ec-category-section section-space-p" id="categories">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">Top Categories</h2>
                        <p class="sub-title">Browse The Collection of Top Categories</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!--Category Nav Start -->
                <div class="col-lg-3">
                    <ul class="ec-cat-tab-nav nav">
                        <li class="cat-item"><a class="cat-link active" data-bs-toggle="tab" href="#tab-cat-1">
                                <div class="cat-icons"><img class="cat-icon" src="assetsUser/images/icons/cat_1.png"
                                        alt="cat-icon"><img class="cat-icon-hover" src="assetsUser/images/icons/cat_1_1.png"
                                        alt="cat-icon"></div>
                                <div class="cat-desc"><span>Clothes</span><span>440 Products</span></div>
                            </a></li>
                        <li class="cat-item"><a class="cat-link" data-bs-toggle="tab" href="#tab-cat-2">
                                <div class="cat-icons"><img class="cat-icon" src="assetsUser/images/icons/cat_2.png"
                                        alt="cat-icon"><img class="cat-icon-hover" src="assetsUser/images/icons/cat_2_1.png"
                                        alt="cat-icon"></div>
                                <div class="cat-desc"><span>Watches</span><span>510 Products</span></div>
                            </a></li>
                        <li class="cat-item"><a class="cat-link" data-bs-toggle="tab" href="#tab-cat-3">
                                <div class="cat-icons"><img class="cat-icon" src="assetsUser/images/icons/cat_3.png"
                                        alt="cat-icon"><img class="cat-icon-hover" src="assetsUser/images/icons/cat_3_1.png"
                                        alt="cat-icon"></div>
                                <div class="cat-desc"><span>Bags</span><span>620 Products</span></div>
                            </a></li>
                        <li class="cat-item"><a class="cat-link" data-bs-toggle="tab" href="#tab-cat-4">
                                <div class="cat-icons"><img class="cat-icon" src="assetsUser/images/icons/cat_4.png"
                                        alt="cat-icon"><img class="cat-icon-hover" src="assetsUser/images/icons/cat_4_1.png"
                                        alt="cat-icon"></div>
                                <div class="cat-desc"><span>Shoes</span><span>320 Products</span></div>
                            </a></li>
                    </ul>

                </div>
                <!-- Category Nav End -->
                <!--Category Tab Start -->
                <div class="col-lg-9">
                    <div class="tab-content">
                        <!-- 1st Category tab end -->
                        <div class="tab-pane fade show active" id="tab-cat-1">
                            <div class="row">
                                <img src="assetsUser/images/cat-banner/clothes.jpg" alt="" />
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.php" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                        <!-- 1st Category tab end -->
                        <div class="tab-pane fade" id="tab-cat-2">
                            <div class="row">
                                <img src="assetsUser/images/cat-banner/watches.jpg" alt="" />
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.php" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                        <!-- 2nd Category tab end -->
                        <!-- 3rd Category tab start -->
                        <div class="tab-pane fade" id="tab-cat-3">
                            <div class="row">
                                <img src="assetsUser/images/cat-banner/bags.jpg" alt="" />
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.php" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                        <!-- 3rd Category tab end -->
                        <!-- 4th Category tab start -->
                        <div class="tab-pane fade" id="tab-cat-4">
                            <div class="row">
                                <img src="assetsUser/images/cat-banner/shoes.jpg" alt="" />
                            </div>
                            <span class="panel-overlay">
                                <a href="shop-left-sidebar-col-3.php" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                        <!-- 4th Category tab end -->
                    </div>
                    <!-- Category Tab End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!--  Feature & Special Section Start -->
    <section class="section ec-fre-spe-section section-space-p" id="offers">
        <div class="container">
            <div class="row">
                <!--  Feature Section Start -->
                <div class="ec-fre-section col-lg-6 col-md-6 col-sm-6 margin-b-30" data-animation="slideInRight">
                    <div class="col-md-12 text-left">
                        <div class="section-title">
                            <h2 class="ec-bg-title">Feature Items</h2>
                            <h2 class="ec-title">Feature Items</h2>
                        </div>
                    </div>

                    <div class="ec-fre-products">
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.php" class="image"><img class="main-image"
                                                src="assetsUser/images/product-image/bebytoytedtbear1.jpg" alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.php">Baby Toy Teddybear</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$549.00</span>
                                        <span class="new-price">$480.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="ec-fs-count-1"></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.php" class="image"><img class="main-image"
                                                src="assetsUser/images/product-image/designerleatherpurses.jpg" alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.php">Leather Purse For Women</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$300.00</span>
                                        <span class="new-price">$250.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="ec-fs-count-2"></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Feature Section End -->
                <!--  Special Section Start -->
                <div class="ec-spe-section col-lg-6 col-md-6 col-sm-6" data-animation="slideInLeft">
                    <div class="col-md-12 text-left">
                        <div class="section-title">
                            <h2 class="ec-bg-title">Limited Time Offer</h2>
                            <h2 class="ec-title">Limited Time Offer</h2>
                        </div>
                    </div>

                    <div class="ec-spe-products">
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.php" class="image"><img class="main-image"
                                                src="assetsUser/images/product-image/Smart watch Firebolt.jpg" alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.php">Smart watch Firebolt</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$200.00</span>
                                        <span class="new-price">$180.00</span>
                                    </div>
                                    <div class="countdowntimer"><span id="ec-fs-count-3"></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.php" class="image"><img class="main-image"
                                                src="assetsUser/images/product-image/Canvas Shoes for Men.jpg" alt="Product" /></a>
                                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.php">Casual Shoes Men</a>
                                    </h5>
                                    <div class="ec-fs-pro-rating">
                                        <span class="ec-fs-rating-icon">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </span>
                                        <span class="ec-fs-rating-text">4 Review</span>
                                    </div>
                                    <div class="ec-fs-price">
                                        <span class="old-price">$120.00</span>
                                        <span class="new-price">$95.00</span>
                                    </div>

                                    <div class="countdowntimer"><span id="ec-fs-count-4"></span></div>
                                    <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and
                                        typesetting.
                                    </div>
                                    <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                    <div class="ec-fs-pro-btn">
                                        <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                        <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Special Section End -->
            </div>
        </div>
    </section>
    <!-- Feature & Special Section End -->

    <!--  Top Vendor Section Start -->
    <section class="section section-space-p" id="vendors">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Top Vendor</h2>
                        <h2 class="ec-title">Top Vendor</h2>
                        <p class="sub-title">Browse The Collection of <a>All Vendors.</a></p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-t-15 margin-minus-b-15">
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="assetsUser/images/vendor/Marvelus.jpg" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.php" class="name">Marvelus</a>
                                <p class="prod-count">154 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 954</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                               <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/Marvelus.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/Marvelus.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/Marvelus.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/Marvelus.jpg" alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="assetsUser/images/vendor/Oreva Fashion.jpg" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.php" class="name">Oreva Fashion</a>
                                <p class="prod-count">546 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 785</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                               <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/OrevaFashion1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/OrevaFashion2.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/OrevaFashion3.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/OrevaFashion4.jpg" alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="assetsUser/images/vendor/Cenva Art.jpg" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.php" class="name">Cenva Art</a>
                                <p class="prod-count">854 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 587</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                               <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/CenvaArt1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/CenvaArt2.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/CenvaArt3.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/CenvaArt4.jpg" alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                    <div class="ec-vendor-card">
                        <div class="ec-vendor-detail">
                            <div class="ec-vendor-avtar">
                                <img src="assetsUser/images/vendor/Neon Fashion.jpg" alt="vendor img">
                            </div>
                            <div class="ec-vendor-info">
                                <a href="catalog-single-vendor.php" class="name">Neon Fashion</a>
                                <p class="prod-count">154 Products</p>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <div class="ec-sale">
                                    <p title="Weekly sales">Sales 354</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec-vendor-prod">
                            <div class="ec-prod-img">
                               <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/NeonFashion1.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/NeonFashion2.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/NeonFashion3.jpg" alt="vendor img"></a>
                            </div>
                            <div class="ec-prod-img">
                                <a href="product-left-sidebar.php"><img src="assetsUser/images/product-image/NeonFashion4.jpg" alt="vendor img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Top Vendor Section End -->

    <!--  services Section Start -->
    <section class="section ec-services-section section-space-p" id="services">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="assetsUser/images/icons/service_1.svg" class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>Free Shipping</h2>
                            <p>Free shipping on all US order or order above $200</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="assetsUser/images/icons/service_2.svg" class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>24X7 Support</h2>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="assetsUser/images/icons/service_3.svg" class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>30 Days Return</h2>
                            <p>Simply return it within 30 days for an exchange</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="assetsUser/images/icons/service_4.svg" class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>Payment Secure</h2>
                            <p>Contact us 24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->

    <!--  offer Section Start -->
    <section class="section ec-offer-section section-space-p section-space-m" style="background-image: url('assetsUser/images/banner/sale.jpg');">
        <h2 class="d-none">Offer</h2>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center ec-offer-content">
                    <h2 class="ec-offer-title" style="color:white">Sunglasses</h2>
                    <h3 class="ec-offer-stitle" data-animation="slideInDown" style="color:white">Super Offer</h3>
                    <span class="ec-offer-img" data-animation="zoomIn"></span>
                    <span class="ec-offer-desc" style="color:white">Acetate Frame Sunglasses</span>
                    <span class="ec-offer-price" style="color:white" >$40.00 Only</span>
                    <a class="btn btn-primary" href="shop-left-sidebar-col-3.php" data-animation="zoomIn">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->

    <!-- New Product Start -->
    <section class="section ec-new-product section-space-p" id="arrivals">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">New Arrivals</h2>
                        <h2 class="ec-title">New Arrivals</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- New Product Content -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="flipInY">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.php" class="image">
                                    <img class="main-image" src="assetsUser/images/product-image/FullSleeveCapTShirt.jpg"
                                        alt="Product" />
                                    <img class="hover-image" src="assetsUser/images/product-image/FullSleeveCapTShirt.jpg"
                                        alt="Product" />
                                </a>
                                <span class="flags">
                                    <span class="sale">Sale</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.php" class="ec-btn-group compare" title="Compare"><img
                                            src="assetsUser/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class="add-to-cart"><img
                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To
                                        Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="assetsUser/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Full Sleeve Cap T-Shirt</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <span class="ec-price">
                                <span class="old-price">$20.00</span>
                                <span class="new-price">$15.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/fullsleevshirt"
                                                data-src-hover="assetsUser/images/product-image/fullsleevshirt"
                                                data-tooltip="Orange"><span style="background-color:#74c7ff;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/fullsleevshirt"
                                                data-src-hover="assetsUser/images/product-image/fullsleevshirt"
                                                data-tooltip="Green"><span  style="background-color:#7af6ff;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/fullsleevshirt"
                                                data-src-hover="assetsUser/images/product-image/fullsleevshirt"
                                                data-tooltip="Sky Blue"><span style="background-color:#85ffeb;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                data-new="$15.00" data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$22.00" data-new="$17.00"
                                                data-tooltip="Medium">M</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00"
                                                data-tooltip="Large">X</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00"
                                                data-tooltip="Extra Large">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="flipInY">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.php" class="image">
                                    <img class="main-image" src="assetsUser/images/product-image/ClassicLeatherpurse.jpg"
                                        alt="Product" />
                                    <img class="hover-image" src="assetsUser/images/product-image/ClassicLeatherpurse.jpg"
                                        alt="Product" />
                                </a>
                                <span class="flags">
                                    <span class="new">New</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.php" class="ec-btn-group compare" title="Compare"><img
                                            src="assetsUser/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class="add-to-cart"><img
                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To
                                        Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="assetsUser/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Classic Leather purse</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <span class="ec-price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/ClassicLeatherpurse.jpg"
                                                data-src-hover="assetsUser/images/product-image/ClassicLeatherpurse.jpg"
                                                data-tooltip="Gray"><span style="background-color:#dba4ff;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/ClassicLeatherpurse.jpg"
                                                data-src-hover="assetsUser/images/product-image/ClassicLeatherpurse.jpg"
                                                data-tooltip="Orange"><span
                                                    style="background-color:#ff4a77;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/ClassicLeatherpurse.jpg"
                                                data-src-hover="assetsUser/images/product-image/ClassicLeatherpurse.jpg"
                                                data-tooltip="Green"><span style="background-color:#c9ff55;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/ClassicLeatherpurse.jpg"
                                                data-src-hover="assetsUser/images/product-image/ClassicLeatherpurse.jpg"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color:#ffcc5e;"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="flipInY">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.php" class="image">
                                    <img class="main-image" src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                        alt="Product" />
                                    <img class="hover-image" src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                        alt="Product" />
                                </a>
                                <span class="percentage">5%</span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.php" class="ec-btn-group compare" title="Compare"><img
                                            src="assetsUser/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class="add-to-cart"><img
                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To
                                        Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="assetsUser/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Fancy Ladies Sandal</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <span class="ec-price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                data-src-hover="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                data-tooltip="Gray"><span style="background-color:#db9dff;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                data-src-hover="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                data-tooltip="Orange"><span
                                                    style="background-color:#00ffff;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                data-src-hover="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                data-tooltip="Green"><span style="background-color:#ffa7f3;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                data-src-hover="assetsUser/images/product-image/FancyLadiesSandal.jpg"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color:#89ff7e;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$50.00"
                                                data-new="$40.00" data-tooltip="Small">6</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$60.00" data-new="$50.00"
                                                data-tooltip="Medium">7</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$70.00" data-new="$60.00"
                                                data-tooltip="Large">8</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$80.00" data-new="$70.00"
                                                data-tooltip="Extra Large">9</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="flipInY">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.php" class="image">
                                    <img class="main-image" src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                        alt="Product" />
                                    <img class="hover-image" src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                        alt="Product" />
                                </a>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                        src="assetsUser/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.php" class="ec-btn-group compare" title="Compare"><img
                                            src="assetsUser/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class="add-to-cart"><img
                                            src="assetsUser/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To
                                        Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="assetsUser/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.php">Womens Leather Backpack</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <span class="ec-price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                data-src-hover="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                data-tooltip="Gray"><span style="background-color:#deffa4;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                data-src-hover="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                data-tooltip="Orange"><span
                                                    style="background-color:#ffcdbe;"></span></a></li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                data-src-hover="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                data-tooltip="Green"><span style="background-color:#ff94df;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                data-src-hover="assetsUser/images/product-image/WomensLeatherBackpack.jpg"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color:#dd9bfc;"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.php">Shop All Collection</a>
                </div>
            </div>
        </div>
    </section>
    <!-- New Product end -->

    <!-- ec testmonial Start -->
    <section class="section ec-test-section section-space-ptb-100 section-space-m" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title mb-0">
                        <h2 class="ec-bg-title">Testimonial</h2>
                        <h2 class="ec-title">Client Review</h2>
                        <p class="sub-title mb-3">What say client about us</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-test-outer">
                    <ul id="ec-testimonial-slider">
                        <li class="ec-test-item">
                            <img src="assetsUser/images/testimonial/top-quotes.svg" class="svg_img test_svg top" alt="" />
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="assetsUser/images/testimonial/johndeo.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="ec-test-name">John Doe</div>
                                    <div class="ec-test-designation">General Manager</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <img src="assetsUser/images/testimonial/bottom-quotes.svg" class="svg_img test_svg bottom"
                                alt="" />
                        </li>
                        <li class="ec-test-item ">
                            <img src="assetsUser/images/testimonial/top-quotes.svg" class="svg_img test_svg top" alt="" />
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="assetsUser/images/testimonial/johndeo.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="ec-test-name">John Doe</div>
                                    <div class="ec-test-designation">General Manager</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <img src="assetsUser/images/testimonial/bottom-quotes.svg" class="svg_img test_svg bottom"
                                alt="" />
                        </li>
                        <li class="ec-test-item">
                            <img src="assetsUser/images/testimonial/top-quotes.svg" class="svg_img test_svg top" alt="" />
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="assetsUser/images/testimonial/johndeo.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen</div>
                                    <div class="ec-test-name">John Doe</div>
                                    <div class="ec-test-designation">General Manager</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                </div>
                            </div>
                            <img src="assetsUser/images/testimonial/bottom-quotes.svg" class="svg_img test_svg bottom"
                                alt="" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ec testmonial end -->

    <!-- Ec Brand Section Start -->
    <section class="section ec-brand-area section-space-p">
        <h2 class="d-none">Brand</h2>
        <div class="container">
            <div class="row">
                <div class="ec-brand-outer">
                    <ul id="ec-brand-slider">
                        <li class="ec-brand-item"  data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="assetsUser/images/brand-image/brandimage1.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item"  data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="assetsUser/images/brand-image/brandimage2.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item"  data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="assetsUser/images/brand-image/brandimage3.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item"  data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="assetsUser/images/brand-image/brandimage4.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item"  data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="assetsUser/images/brand-image/brandimage5.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item"  data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="assetsUser/images/brand-image/brandimage1.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item"  data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="assetsUser/images/brand-image/brandimage2.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item"  data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="assetsUser/images/brand-image/brandimage3.jpg" /></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Brand Section End -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section module section-space-p" id="insta">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Instagram Feed</h2>
                        <h2 class="ec-title">Instagram Feed</h2>
                        <p class="sub-title">Share your store with us</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ec-insta-wrapper">
            <div class="ec-insta-outer">
                <div class="container" data-animation="fadeIn">
                    <div class="insta-auto">
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assetsUser/images/instragram-image/instragram.jpg"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assetsUser/images/instragram-image/instragram.jpg"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assetsUser/images/instragram-image/instragram.jpg"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assetsUser/images/instragram-image/instragram.jpg"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assetsUser/images/instragram-image/instragram.jpg"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assetsUser/images/instragram-image/instragram.jpg"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assetsUser/images/instragram-image/instragram.jpg"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Instagram End -->

    <!-- Footer Start -->
    <footer class="ec-footer section-space-mt">
        <div class="footer-container">
            <div class="footer-offer">
                <div class="container">
                    <div class="row">
                        <div class="text-center footer-off-msg">
                            <span>Win a contest! Get this limited-editon</span><a href="#" target="_blank">View
                                Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 ec-footer-contact">
                            <div class="ec-footer-widget">
                                <div class="ec-footer-logo"><a href="#"><img src="assetsUser/images/logo/footer-logo.png"
                                            alt=""><img class="dark-footer-logo" src="assetsUser/images/logo/dark-logo.png"
                                            alt="Site Logo" style="display: none;" /></a></div>
                                <h4 class="ec-footer-heading">Contact us</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, east california.</li>
                                        <li class="ec-footer-link"><span>Call Us:</span><a href="tel:+440123456789">+44
                                                0123 456 789</a></li>
                                        <li class="ec-footer-link"><span>Email:</span><a
                                                href="mailto:example@ec-email.com">+example@ec-email.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-info">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">About</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="about-us.php">About Us</a></li>
                                        <li class="ec-footer-link"><a href="contact-us.php">Contact Us</a></li>
                                        <li class="ec-footer-link"><a href="checkout.php">Checkout</a></li>
                                        <li class="ec-footer-link"><a href="track-order.php">Track Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Help</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="user-profile.php">Payments</a></li>
                                        <li class="ec-footer-link"><a href="track-order.php">Shipping</a></li>
                                        <li class="ec-footer-link"><a href="faq.php">FAQ</a></li>
                                        <li class="ec-footer-link"><a href="offer.php">Cancellation & Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-service">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Consumer Policy</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="track-order.php">Discount Returns</a></li>
                                        <li class="ec-footer-link"><a href="privacy-policy.php">Privacy & policy </a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.php">Customer Service</a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.php">Term & condition</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-news">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Newsletter</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">Get instant updates about our new products and
                                            special promos!</li>
                                    </ul>
                                    <div class="ec-subscribe-form">
                                        <form id="ec-newsletter-form" name="ec-newsletter-form" method="post"
                                            action="#">
                                            <div id="ec_news_signup" class="ec-form">
                                                <input class="ec-email" type="email" required=""
                                                    placeholder="Enter your email here..." name="ec-email" value="" />
                                                <button id="ec-news-btn" class="button btn-primary" type="submit"
                                                    name="subscribe" value=""><i class="ecicon eci-paper-plane-o"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Footer social Start -->
                        <div class="col text-left footer-bottom-left">
                            <div class="footer-bottom-social">
                                <span class="social-text text-upper">Follow us on:</span>
                                <ul class="mb-0">
                                    <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer social End -->
                        <!-- Footer Copyright Start -->
                        <div class="col text-center footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">Copyright © 2021-2022 <a class="site-name text-upper"
                                        href="#">ekka<span>.</span></a>. All Rights Reserved</div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->
                        <!-- Footer payment -->
                        <div class="col footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-end">
                                <div class="payment-link">
                                    <img src="assetsUser/images/icons/payment.png" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- Footer payment -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assetsUser/images/product-image/roundnecktshirt.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assetsUser/images/product-image/fullsleevshirt.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assetsUser/images/product-image/canvascowboyhat.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assetsUser/images/product-image/cute.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assetsUser/images/product-image/designerleatherpurses.jpg" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assetsUser/images/product-image/roundnecktshirt.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assetsUser/images/product-image/fullsleevshirt.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assetsUser/images/product-image/canvascowboyhat.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assetsUser/images/product-image/cute.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assetsUser/images/product-image/designerleatherpurses.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.php">Handbag leather purse for women</a>
                                </h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="old-price">$100.00</span>
                                    <span class="new-price">$80.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-color">
                                            <ul class="ec-opt-swatch">
                                                <li><span style="background-color:#696d62;"></span></li>
                                                <li><span style="background-color:#d73808;"></span></li>
                                                <li><span style="background-color:#577023;"></span></li>
                                                <li><span style="background-color:#2ea1cd;"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul class="ec-opt-size">
                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                        data-tooltip="Small">S</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary"><img src="assetsUser/images/icons/cart.svg"
                                                class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Newsletter Modal Start -->
    <div id="ec-popnews-bg"></div>
    <div id="ec-popnews-box">
        <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
        <div class="row">
            <div class="col-md-6 disp-no-767">
                <img src="assetsUser/images/banner/Subscribe Newsletter.jpg" alt="newsletter">
            </div>
            <div class="col-md-6">
                <div id="ec-popnews-box-content">
                    <h2>Subscribe Newsletter</h2>
                    <p>Subscribe the ekka ecommerce to get in touch and get the future update. </p>
                    <form id="ec-popnews-form" action="#" method="post">
                        <input type="email" name="newsemail" placeholder="Email Address" required />
                        <button type="button" class="btn btn-primary" name="subscribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Modal end -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="assetsUser/images/icons/menu.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="assetsUser/images/icons/cart.svg" class="svg_img header_svg" alt="icon" /><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.php" class="ec-header-btn"><img src="assetsUser/images/icons/home.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.php" class="ec-header-btn"><img src="assetsUser/images/icons/wishlist.svg"
                            class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.php" class="ec-header-btn"><img src="assetsUser/images/icons/user.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <div class="recent-purchase">
        <img src="assetsUser/images/product-image/ClasicBabyShoes.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>stylish baby shoes</h6>
            <p>10 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>    
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Cart Floating Button -->
    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><img src="assetsUser/images/icons/cart.svg" class="svg_img header_svg" alt="cart" />
            </div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>
    <!-- Cart Floating Button end -->

    <!-- Whatsapp -->
    <div class="ec-style ec-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="ec-panel">
            <!-- Panel Header -->
            <div class="ec-header">
                <strong>Need Help?</strong>
                <p>Chat with us on WhatsApp</p>
            </div>
            <!-- Panel Content -->
            <div class="ec-body">
                <ul>
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assetsUser/images/whatsapp/john dei.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Sahar Darya</span>
                                    <p>Sahar left 7 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assetsUser/images/whatsapp/john dei.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-online"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Yolduz Rafi</span>
                                    <p>Yolduz is online</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assetsUser/images/whatsapp/john dei.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Nargis Hawa</span>
                                    <p>Nargis left 30 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assetsUser/images/whatsapp/john dei.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Khadija Mehr</span>
                                    <p>Khadija left 50 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                </ul>
            </div>
        </div>
        <!--/ End Floating Panel Container -->
        <!-- Start Right Floating Button-->
        <div class="ec-right-bottom">
            <div class="ec-box">
                <div class="ec-button rotateBackward">
                    <img class="whatsapp" src="assetsUser/images/common/whatsapp.png" alt="whatsapp icon">
                </div>
            </div>
        </div>
        <!--/ End Right Floating Button-->
    </div>
    <!-- Whatsapp end -->

    <!-- Feature tools -->
    <div class="ec-tools-sidebar-overlay"></div>
    <div class="ec-tools-sidebar">
        <div class="tool-title">
            <h3>Features</h3>
        </div>
        <a href="#" class="ec-tools-sidebar-toggle in-out">
            <img alt="icon" src="assetsUser/images/common/settings.png">
        </a>
        <div class="ec-tools-detail">
            <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
                <h3>Color Scheme</h3>
                <ul class="bg-panel">
                    <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                    <li data-color="02"><a href="#" class="colorcode2"></a></li>
                    <li data-color="03"><a href="#" class="colorcode3"></a></li>
                    <li data-color="04"><a href="#" class="colorcode4"></a></li>
                    <li data-color="05"><a href="#" class="colorcode5"></a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Backgrounds</h3>
                <ul class="bg-panel">
                    <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                    <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                    <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                    <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Full Screen mode</h3>
                <div class="ec-fullscreen-mode">
                    <div class="ec-fullscreen-switch">
                        <div class="ec-fullscreen-btn">Mode</div>
                        <div class="ec-fullscreen-on">On</div>
                        <div class="ec-fullscreen-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Dark mode</h3>
                <div class="ec-change-mode">
                    <div class="ec-mode-switch">
                        <div class="ec-mode-btn">Mode</div>
                        <div class="ec-mode-on">On</div>
                        <div class="ec-mode-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>RTL mode</h3>
                <div class="ec-change-rtl">
                    <div class="ec-rtl-switch">
                        <div class="ec-rtl-btn">Rtl</div>
                        <div class="ec-rtl-on">On</div>
                        <div class="ec-rtl-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Language</h3>
                <div class="ec-change-lang">
                    <span id="google_translate_element"></span>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Clear local storage</h3>
                <a class="clear-cach" href="javascript:void(0)">Clear Cache & Default</a>
            </div>
        </div>
    </div>
    <!-- Feature tools end -->

    <!-- Vendor JS -->
    <script src="assetsUser/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assetsUser/js/vendor/popper.min.js"></script>
    <script src="assetsUser/js/vendor/bootstrap.min.js"></script>
    <script src="assetsUser/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assetsUser/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="assetsUser/js/plugins/swiper-bundle.min.js"></script>
    <script src="assetsUser/js/plugins/countdownTimer.min.js"></script>
    <script src="assetsUser/js/plugins/scrollup.js"></script>
    <script src="assetsUser/js/plugins/jquery.zoom.min.js"></script>
    <script src="assetsUser/js/plugins/slick.min.js"></script>
    <script src="assetsUser/js/plugins/infiniteslidev2.js"></script>
    <script src="assetsUser/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assetsUser/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Google translate Js -->
    <script src="assetsUser/js/vendor/google-translate.js"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
    <!-- Main Js -->
    <script src="assetsUser/js/vendor/index.js"></script>
    <script src="assetsUser/js/main.js"></script>
</body>
</php>