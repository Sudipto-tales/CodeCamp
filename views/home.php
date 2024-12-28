<?php
include "config.php";
?>

<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Coding Competition </title>
	<meta name="description" content>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700"
		rel="stylesheet">

	<link rel="stylesheet" href="<?= $base_url ?>assets/css/signatra-font.css">
	<link rel="icon" type="image/png" href="favicon.html">

	<link rel="apple-touch-icon" href="<?= $base_url ?>apple-touch-icon.html">
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/animate.css">
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/iconfont.css">
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/swiper.min.css">
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/rev-settings.css">

	<link rel="stylesheet" href="<?= $base_url ?>assets/css/plugins.css" />

	<link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">

	<link rel="stylesheet" href="<?= $base_url ?>assets/css/responsive.css" />
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/timer.scss" />

</head>

<body>
	<!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Page Header start -->
	<div class="header-transparent nav-sticky nav-light" data-scroll-to="top">

		<div class="off-canvas-menu-area">
			<div class="container">
				<div class="offset-menu-wraper clearfix">
					<div class="float-left">
						<a href="index.html" class="offcanvas-nav-brand">
							<img src="<?= $base_url ?>assets/images/logo-8.png" alt>
						</a>
					</div>
					<div class="float-right">
						<div class="humburger style3 fullscreen_menu_tigger">
							<div class="humburger-icons">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="offcanvas-menu-wraper clearfix">
				<div class="menu-container">

					<ul class="offcanvas-menu">
						<li><a href="#">HOME</a>
						</li>
						<li><a href="#">ABOUT</a></li>
						<li><a href="#">Competition</a>
							<ul class="inner-submenu">
								<li><a href="#">Domains</a>
									<ul class="inner-submenu">
										<li><a href="<?= $base_url?>code.php">BCA</a></li>
										<li><a href="code.php">BBA</a></li>
										<li><a href="code.php">Bio-tech</a></li>
									</ul>
								</li>
							
					</ul>
				</div>
				<div class="offcanvas-content-wraper">
					<div class="offcanvas-content">
						<h2 class="offcanvas-title">GET IN TOUCH</h2>
						<ul class="offcanvas-list-widget">
							<li>
								<p><i class="icon icon-map-marker2"></i><a
										href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
										target="_blank">179 MADISON ST. OLIVER AV. <br> NEW YORK, NY-12548</a></p>
							</li>
							<li>
								<p><i class="icon icon-phone-call3"></i><a href="tel:+1%20(254)%20854-6987">+1 (254)
										854-6987</a></p>
							</li>
							<li>
								<p><i class="icon icon-envelope4"></i><a
										href="https://html.xpeedstudio.com/cdn-cgi/l/email-protection#523b3c343d12372a333f223e377c313d3f"><span
											class="__cf_email__"
											data-cfemail="8fc6c1c9c0cfcad7cec2dfc3caa1ccc0c2">[email&#160;protected]</span></a>
								</p>
							</li>
						</ul>
						<h2 class="offcanvas-title">GET SOCIAL TOGETHER</h2>
						<ul class="social-list version-4">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Page header end -->

	<section class="xs-banner agency-banner4"
		style="background-image: url(assets/images/cases-card/SL-031121-41400-05.jpg); padding-top: 50px;">
		<div class="agency-banner-content-group">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">

						<div class="agency-banner-content banner-style4 text-center">
							<h1 class="banner-title"><span>Codecamp</span><br>Reboot Your Life With programming</h1>
							<a href="<?= $base_url ?>comming_soon" class="btn btn-primary style3">Join Compitition</a>
						</div>
					</div>

					<div class="col-lg-6">
						<div>
							<img src="<?= $base_url ?>assets/images/paper-plane-removebg-preview.png"
								style="height: 50px; width: 50px;"><br>
							<a href="#"
								class="btn btn-primary btn-gradient3 icon-right">Check Our Website</a>
						</div>
						<div>
							<img src="<?= $base_url ?>assets/images/paper-plane3-removebg-preview.png" alt="Your Image">

						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="xs-section-padding pt-0 waypoint-tigger" id="portfolio-blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<div class="agency-section-title style7 text-center">
						<h2 class="sub-title">YOU CAN JOIN</h2>
						<h3 class="main-title">Ongoing & Upcoming Competition</h3>
						<div class="shuffle-letter-title-wraper">
							<h4 class="shuufle-letter-title">Competition</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-block-post radius box-shadow xs-mb-3">
				<div class="row no-gutters">
					<div class="col-lg-6">
						<a href="blog-single-sidebar.html" class="entry-thumb">
							<img src="<?= $base_url ?>assets/images/cases-card/case-card-15.jpg" alt>
						</a>
					</div>
					<div class="col-lg-6">
						<div class="post-body">
							<div class="entry-header">
								<div class="post-meta-list meta-style2">
									<span class="meta-date"><i class="icon icon-calendar"></i>10 March</span>
									<span class="post-cat"><i class="icon icon-working_process_icons_2"></i> <a
											href="#">Frontend Developer</a></span>
								</div>
								<h2 class="entry-title">
									<a href="<?= $base_url?>/compiler">C programming</a>

								</h2><br>
								<h2 class="entry-title">
									<div class="post-meta-date countdown">
										<i class="icon icon-clock"></i> 00 : 00 : 00 : 00
									</div>

							</div>
							<div class="post-footer">
								<!-- footer section -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="post-card">
						<div class="entry-header">
							<div class="post-meta-list meta-style2">
								<span class="meta-date"><i class="icon icon-calendar"></i> 12 Jan</span>
								<span class="post-cat"><i class="icon icon-working_process_icons_2"></i> <a
										href="#">D.M.</a></span>
							</div>
							<h2 class="entry-title">
								<a href="blog-single.html">BBA</a>
							</h2>
							<span class="border-hr"></span>
							<h2 class="entry-title">
								<div class="post-meta-date countdown">
									<i class="icon icon-clock"></i> 00 : 00 : 00 : 00
								</div>
							</h2>
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="post-card">
						<div class="entry-header">
							<div class="post-meta-list meta-style2">
								<span class="meta-date"><i class="icon icon-calendar"></i> 12 Dec</span>
								<span class="post-cat"><i class="icon icon-working_process_icons_2"></i> <a href="#">Web
										Design</a></span>
							</div>
							<h2 class="entry-title">
								<a href="blog-single.html">code war</a>
							</h2>
							<span class="border-hr"></span>
							<h2 class="entry-title">
								<div class="post-meta-date countdown">
									<i class="icon icon-clock"></i> 00 : 00 : 00 : 00
								</div>
							</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="post-card">
						<div class="entry-header">
							<div class="post-meta-list meta-style2">
								<span class="meta-date"><i class="icon icon-calendar"></i> 14 Jan</span>
								<span class="post-cat"><i class="icon icon-working_process_icons_2"></i> <a
										href="#">Writer</a></span>
							</div>
							<h2 class="entry-title">
								<a href="blog-single.html">code war</a>
							</h2>
							<span class="border-hr"></span>
							<h2 class="entry-title">
								<div class="post-meta-date countdown">
									<i class="icon icon-clock"></i> 00 : 00 : 00 : 00
								</div>
							</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="btn-wraper text-center mt-3">
				<a href="#" class="btn btn-primary btn-gradient3 icon-right">VIEW ALL <i
						class="icon icon-arrow-right"></i></a>
			</div>

		</div>

	</section>

	<section class="xs-section-padding pt-0 waypoint-tigger">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="funfact-img-wraper">
						<img src="<?= $base_url ?>assets/images/funfact/funfact-img.png" alt>
					</div>
				</div>
				<div class="col-md-6">
					<div class="funfact-content">
						<h2 class="funfact-title">Take a Look in Our Website Today</h2>
						<p>Many people try to get a job today . In This competition era We give a chance to show your
							Talent
							in a great platform.
						</p>
						<ul class="funfact-lists list-inline">
							<li class="single-funfact-item">
								<div class="funfact-icon">
									<i class="icon icon-checklist color-1"></i>
								</div>
								<span class="number-percentage-count number-percentage" data-value="20"
									data-animation-duration="3500">0</span><span>+</span>
								<p>Competition</p>
							</li>
							<li class="single-funfact-item">
								<div class="funfact-icon">
									<i class="icon icon-group color-2"></i>
								</div>
								<span class="number-percentage-count number-percentage" data-value="500"
									data-animation-duration="3500">0</span>
								<p>Participent</p>
							</li>
							<li class="single-funfact-item">
								<div class="funfact-icon">
									<i class="icon icon-rating color-3"></i>
								</div>
								<span class="number-percentage-count number-percentage" data-value="85"
									data-animation-duration="3500">0</span>
								<p>Rankers</p>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="best-quote-area section-padding-medium">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 ml-auto">
					<div class="quote-slider owl-carousel">
						<div class="best-quote-content">
							<h2 class="best-quote-title">A Good Plan Executed now, is better than a perfect plan next
								Week.</h2>
							<p class="dash-title">General Patton</p>
						</div>
						<div class="best-quote-content">
							<h2 class="best-quote-title">A Good Plan Executed now, is better than a perfect plan </h2>
							<p class="dash-title">Mr. Jane</p>
						</div>
						<div class="best-quote-content">
							<h2 class="best-quote-title">A Good Plan Executed now, is better than a</h2>
							<p class="dash-title">Mrs Jane Doe</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="quote-img">
			<img src="assets/images/quote-img.png" alt>
		</div>
	</section>

	<section class="xs-section-padding about-agencifi-area"
		style="background-image: url(assets/images/map_vector.png);">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto text-center">
					<div class="about-agency-cotnent">
						<h2 class="about-agency-title">About <span>CodeCamp.</span></h2>
						<p>
							Welcome to CodeCamp – your gateway to coding excellence! Dive into a world of innovation and
							friendly competition. Whether you're a seasoned developer or a coding enthusiast, our
							platform offers carefully crafted challenges that cater to all skill levels. Join our
							vibrant community, showcase your skills, and compete for recognition and exciting prizes. At
							Reboot, we celebrate the spirit of coding with engaging problems that inspire creativity and
							critical thinking. Ready to elevate your coding journey? Join us now!




						</p>
						<ul class="social-list version-4">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="xs-section-padding hr-timeline-section">
		<div class="container">
			<div class="row hr-timeline-group">
				<div class="col-md-6 col-lg-3">
					<div class="hr-single-timeline wow bounceIn">
						<span class="number-count"></span>
						<div class="hr-timeline-content-wraper">
							<div class="hr-timeline-content">
								<i class="icon icon-working_process_icons_1" data-bs-toggle="tooltip"></i>
								<a href="<?= $base_url ?>modal/login_process">Login</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="hr-single-timeline color-1 wow bounceIn" data-wow-delay=".5s">
						<span class="number-count"></span>
						<div class="hr-timeline-content-wraper">
							<div class="hr-timeline-content">
								<i class="icon icon-working_process_icons_2" data-bs-toggle="tooltip"></i>
								<a href="<?= $base_url ?>#">Process</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="hr-single-timeline color-2 wow bounceIn" data-wow-delay=".7s">
						<span class="number-count"></span>
						<div class="hr-timeline-content-wraper">
							<div class="hr-timeline-content">
								<i class="icon icon-working_process_icons_3" data-bs-toggle="tooltip"></i>
								<a href="<?= $base_url ?>#">Competition</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="hr-single-timeline color-3 wow bounceIn" data-wow-delay=".9s">
						<span class="number-count"></span>
						<div class="hr-timeline-content-wraper">
							<div class="hr-timeline-content">
								<i class="icon icon-working_process_icons_4" data-bs-toggle="tooltip"></i>
								<a href="<?= $base_url ?>#">Result</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="timeline-wave">
			<img src="assets/images/timeline-wave-shape.png" alt>
		</div>
	</div>

	<section class="xs-section-padding get-benifits-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="get-benifits-img">
						<img src="assets/images/get-benifits-img.png" alt>
					</div>
				</div>
				<div class="col-md-6">
					<div class="get-benifits-summary">
						<h2 class="get-benifit-title">Are You Have Any <span>Idea?</span></h2>
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="contact-box-wraper">
										<form action="#" id="xs-contact-form" class="contact-form input-material"
											method="post">
											<input type="text" placeholder="Enter your Name" name="name"
												id="xs_contact_name" class="form-control">
											<input type="email" placeholder="Your mail" name="email"
												id="xs_contact_email" class="form-control">
											<textarea name="massage" id="x_contact_massage"
												placeholder="Your Message... *" class="form-control" cols="30"
												rows="10"></textarea>
											<input type="submit" name="submit" id="xs_contact_submit"
												class="btn btn-primary" value="Submit">
										</form>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>


	<div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="language-content">
					<p>Switch The Language</p>
					<ul class="flag-lists">
						<li><a href="#"><img src="assets/images/flags/006-united-states.svg"
									alt><span>English</span></a></li>
						<li><a href="#"><img src="assets/images/flags/002-canada.svg" alt><span>English</span></a></li>
						<li><a href="#"><img src="assets/images/flags/003-vietnam.svg" alt><span>Vietnamese</span></a>
						</li>
						<li><a href="#"><img src="assets/images/flags/004-france.svg" alt><span>French</span></a></li>
						<li><a href="#"><img src="assets/images/flags/005-germany.svg" alt><span>German</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="xs-search-panel">
					<form action="#" method="POST" class="xs-search-group">
						<input type="search" class="form-control" name="search" id="search" placeholder="Search">
						<button type="submit" class="search-button"><i class="icon icon-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="xs-sidebar-group cart-group">
		<div class="xs-overlay black-bg"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading media">
					<div class="media-body">
						<a href="#" class="close-side-widget">
							X
						</a>
					</div>
				</div>
				<div class="xs-empty-content">
					<h3 class="widget-title">Shopping cart</h3>
					<h4 class="xs-title">No products in the cart.</h4>
					<p class="empty-cart-icon">
						<i class="icon icon-shopping-cart"></i>
					</p>
					<p class="xs-btn-wraper">
						<a class="btn btn-primary" href="shop.html">Return To Shop</a>
					</p>
				</div>
			</div>
		</div>
	</div>


	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay black-bg"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						<i class="icon icon-cross"></i>
					</a>
				</div>
				<div class="sidebar-textwidget">
					<div class="sidebar-logo-wraper">
						<a href="index.html">
							<img src="assets/images/color-logo.png" alt="sidebar logo">
						</a>
					</div>
					<p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in Bookmarksgrove right at the coast of </p>
					<ul class="sideabr-list-widget">
						<li>
							<div class="media">
								<div class="d-flex">
									<img src="assets/images/location.png" alt>
								</div>
								<div class="media-body">
									<p>759 Pinewood Avenue</p>
									<span>Marquette, Michigan</span>
								</div>
							</div>
						</li>
						<li>
							<div class="media">
								<div class="d-flex">
									<img src="assets/images/mail.png" alt>
								</div>
								<div class="media-body">
									<a
										href="https://html.xpeedstudio.com/cdn-cgi/l/email-protection#61080f070e21050e0c00080f4f020e0c"><span
											class="__cf_email__"
											data-cfemail="0861666e67486c6765696166266b6765">[email&#160;protected]</span></a>
									<span>Online Support</span>
								</div>
							</div>
						</li>
						<li>
							<div class="media">
								<div class="d-flex">
									<img src="assets/images/phone.png" alt>
								</div>
								<div class="media-body">
									<a href="tel:906-624-2565">906-624-2565</a>
									<span>Mon-Fri 8am-5pm</span>
								</div>
							</div>
						</li>
					</ul>
					<div class="subscribe-form-wraper">
						<p>Get Subscribed!</p>
						<form action="#" method="POST" class="subscribe-form">
							<label for="sub-input"></label>
							<div class="form-group">
								<input type="email" name="email" id="sub-input" placeholder="Enter your mail here"
									class="form-control">
								<button class="sub-btn" type="submit"><i class="icon icon-arrow-right"></i></button>
							</div>
						</form>
					</div>
					<ul class="social-list version-2">
						<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
					</ul>
					<div class="text-center">
						<a href="https://themeforest.net/user/xpeedstudio/portfolio" class="btn btn-primary">Purchase
							Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- page footer start -->
	<footer class="xs-footer-section footer-style4">
		<div class="footer-top-area">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-5">
						<div class="footer-widget">
							<div class="footer-logo-wraper">
								<a href="index.html" class="footer-logo">
									<img src="assets/images/footer-logo-2.png" alt>
								</a>
							</div>
							<p>We provide customized software Solutions, matching your requirements which can help your
								business grow.
								Disclaimer
								Terms of Services</p>
							<form action="#" method="POST" class="subscribe-form subscribe-from-style2">
								<label for="sub-input2"></label>
								<div class="form-group">
									<input type="email" name="email" id="sub-input2"
										placeholder="Enter your mail here..." class="form-control">
									<button class="sub-btn" type="submit"><i class="icon icon-right-arrow"></i></button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6 col-lg-2">
						<div class="footer-widget">
							<h4 class="widget-title">Company</h4>
							<ul class="xs-list">
								<li><a href="about.html">About us</a></li>
								<li><a href="service.html">Service</a></li>
								<li><a href="blog-grid-sidebar.html">News & Blog</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li><a href="cases.html">Case</a></li>
								<li><a href="shop.html">Shop</a></li>
								<li><a href="portfolio.html">Portfolio</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="footer-widget">
							<a
								href="https://html.xpeedstudio.com/cdn-cgi/l/email-protection#b4dcd1d8d8dbf4c3d1d6c7ddc0d19ad7dbd9"><span
									class="__cf_email__"
									data-cfemail="2f474a4343406f584a4d5c465b4a014c4042">tech@infovue.in</span></a>
							<a href="tel:+1%20(254)%20859-2325">9674435535</a>
							<a href="https://www.google.com/maps/place/Infovue+Solutions/@22.5411066,88.389479,15z/data=!4m6!3m5!1s0x3a02777192873be1:0xb5247f20d4f9ea82!8m2!3d22.5411066!4d88.389479!16s%2Fg%2F11qy7nzvx_?sa=X&ved=2ahUKEwibrKDz08f9AhXC6XMBHSdZDAQQ_BJ6BAg8EAg&coh=164777&entry=tt&shorturl=1"
								target="_blank">11/A1D, Garg House, E Topsia Rd, Mirania Gardens, East Topsia, Topsia,
								Kolkata, West Bengal 700046</a>
							<a href="contact.html" class="gradient-title">Get Direction</a>
						</div>
					</div>
					<div class="col-md-6 col-lg-2">
						<div class="footer-widget">
							<ul class="simple-social-list">
								<li><a href="https://www.facebook.com/infovueinc" class="facebook"><i
											class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/infovue_tech" class="twitter"><i
											class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/company/infovueinc" class="linkedin"><i
											class="fa fa-linkedin"></i></a></li>
								<li><a href="https://www.instagram.com/infovueinc/" class="instagram"><i
											class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom-area">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="copyright-section">
							<p>©
								<?= date('Y') ?> <a href="https://sudipto-tales.github.io/Portfolios/">Sudipta Ghosh.</a>
								All Rights Reserved.
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="copyright-content">
							<ul class="xs-list list-inline">
								<li><a href="#">Terms of Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Legal info</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-vector-shape">
			<img src="assets/images/footer-vector-img.png" alt>
		</div>
	</footer>


    <!-- page footer end -->
    
	<!-- Js Script -->
	 <?php include "sections/script.php"; ?>

</body>

</html>