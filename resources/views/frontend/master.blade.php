<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Royal Furniture - Digital Product Website </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}">

        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

        {{-- <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
        
    </head>
    <body>

        <!-- preloader -->
        {{-- <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div> --}}
        <!-- preloader-end -->

        <!-- header-area -->
        <header>
            <div id="header-sticky" class="menu-area transparent-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="logo">
                                <a href="index-2.html">
                                    <img src="{{ asset('frontend/img/logo/s_logo.png') }}" class="transparent-logo" alt="Logo">
                                    <img src="{{ asset('frontend/img/logo/logo.png') }}" class="sticky-logo" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-6 text-right">
                            <div class="main-menu s-main-menu d-none d-lg-inline-block">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="all-products.html">Products</a></li>
										<li><a href="shortcode-pricing.html">Pricing</a></li>
										<li><a href="shortcode-blog.html">Blog</a></li>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="shop-cart s-shop-cart position-relative d-none d-sm-inline-block">
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <span>2</span>
                                <div class="menu-cart-widget">
                                    <ul>
                                        <li class="menu-cart-product-list">
                                            <div class="cart-product-thumb">
                                                <a href="#"><img src="{{ asset('frontend/img/product/check-out01.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="cart-product-content">
                                                <h5><a href="#">Multi-Purpose HTML
                                                        Template</a></h5>
                                                <span>1 x $29.00</span>
                                            </div>
                                            <div class="cart-del">
                                                <a href="#">X</a>
                                            </div>
                                        </li>
                                        <li class="menu-cart-product-list">
                                            <div class="cart-product-thumb">
                                                <a href="#"><img src="{{ asset('frontend/img/product/check-out01.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="cart-product-content">
                                                <h5><a href="#">App Landing Sass
                                                        HTML5 Template</a></h5>
                                                <span>1 x $29.00</span>
                                            </div>
                                            <div class="cart-del">
                                                <a href="#">X</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="cart-price fix mb-15">
                                        <span>Subtotal</span>
                                        <span>$ 58.00</span>
                                    </div>
                                    <div class="cart-checkout-btn">
                                        <a href="#" class="btn">check out</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-btn d-none d-xl-inline-block">
                                <a href="#" class="btn"><i class="fas fa-user"></i>My Account</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->

       @yield('content')


        <!-- footer -->
        <footer>
            <div class="footer-top-wrap black-bg pt-90 pb-35">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="logo text-center mb-30">
                                <a href="#"><img src="{{ asset('frontend/img/logo/w_logo.png') }}" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-cat-wrap">
                    <div class="container">
                        <div class="row f-cat-active">
                            <div class="col-12">
                                <div class="single-footer-cat">
                                    <a href="#">
                                        <div class="footer-cat-icon">
                                            <i class="flaticon-wordpress-logo"></i>
                                        </div>
                                        <span>Wordpress</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-footer-cat">
                                    <a href="#">
                                        <div class="footer-cat-icon">
                                            <i class="flaticon-plug-for-electrical-connection"></i>
                                        </div>
                                        <span>Plugins Free</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-footer-cat">
                                    <a href="#">
                                        <div class="footer-cat-icon">
                                            <i class="flaticon-html-5-logo"></i>
                                        </div>
                                        <span>HTML Template</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-footer-cat">
                                    <a href="#">
                                        <div class="footer-cat-icon">
                                            <i class="flaticon-joomla-logo"></i>
                                        </div>
                                        <span>Joolmal Template</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-footer-cat">
                                    <a href="#">
                                        <div class="footer-cat-icon">
                                            <i class="flaticon-e-shopping-basket"></i>
                                        </div>
                                        <span>Shopify Themes</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-footer-cat">
                                    <a href="#">
                                        <div class="footer-cat-icon">
                                            <i class="flaticon-gift"></i>
                                        </div>
                                        <span>Woocommerce</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-footer-cat">
                                    <a href="#">
                                        <div class="footer-cat-icon">
                                            <i class="flaticon-wordpress-logo"></i>
                                        </div>
                                        <span>Wordpress</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-footer-cat">
                                    <a href="#">
                                        <div class="footer-cat-icon">
                                            <i class="flaticon-wordpress-logo"></i>
                                        </div>
                                        <span>Wordpress</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget mb-50 pr-80">
                                <div class="fw-title mb-30">
                                    <h5>About Market</h5>
                                </div>
                                <div class="footer-text mb-35">
                                    <p>Royal Furniture is your trusted destination for elegant, durable, and affordable furniture solutions. With a commitment to quality craftsmanship and timeless design, </p>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>PRODUCT List</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">LiveChat Benefits</a></li>
                                        <li><a href="#">Tour</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Use Cases</a></li>
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">Marketplace</a></li>
                                        <li><a href="#">Updates</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>RESOURCES</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Infographics</a></li>
                                        <li><a href="#">Reports</a></li>
                                        <li><a href="#">Podcast</a></li>
                                        <li><a href="#">Benchmark</a></li>
                                        <li><a href="#">Update</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>CUSTOMERS</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">LiveChat Benefits</a></li>
                                        <li><a href="#">Tour</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Use Cases</a></li>
                                        <li><a href="#">App</a></li>
                                        <li><a href="#">Marketplace</a></li>
                                        <li><a href="#">Updates</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>SUPPORT center</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Community</a></li>
                                        <li><a href="#">Webinars</a></li>
                                        <li><a href="#">Experts Marketplace</a></li>
                                        <li><a href="#">API & Developers</a></li>
                                        <li><a href="#">System Status</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © <?= date('Y') ?>
                                    <a href="#">Royal Furniture</a> All Rights Reserved.     </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="payment-method-img text-right">
                                <p>Developed By <a href="https://tantsoft.com/">Tantsoft</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
        {{-- <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
        <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/js/aos.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
        
    </body>
</html>
