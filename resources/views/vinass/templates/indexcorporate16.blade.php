<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>VINASOFT - Responsive HTML5 Template 7.2.0</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="VINASOFT - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/templates/vinass/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/templates/vinass/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/templates/vinass/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/magnific-popup/magnific-popup.min.css">



		<!-- Theme CSS -->
		<link rel="stylesheet" href="/templates/vinass/css/theme.css">
		<link rel="stylesheet" href="/templates/vinass/css/theme-elements.css">
		<link rel="stylesheet" href="/templates/vinass/css/theme-blog.css">
		<link rel="stylesheet" href="/templates/vinass/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="/templates/vinass/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="/templates/vinass/vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="/templates/vinass/css/skins/skin-corporate-16.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/templates/vinass/css/custom.css">

		<!-- Head Libs -->
		<script src="/templates/vinass/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 bg-dark box-shadow-none">
					@include('templates.vinass.superheader')
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											<img alt="Porto" width="82" height="40" src="/templates/vinass/img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-font-md header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
													<li class="dropdown ml-0">
														<a class="dropdown-item dropdown-toggle active" href="/">
															Home
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="/">
																	Landing Page
																</a>
															</li>
															<li class="dropdown-submenu">
																<a class="dropdown-item" href="#">Classic</a>
																<ul class="dropdown-menu">
																	<li><a class="dropdown-item" data-thumb-preview="/templates/vinass/img/previews/preview-classic.jpg">Classic - Original</a></li>
																	<li><a class="dropdown-item" data-thumb-preview="/templates/vinass/img/previews/preview-classic-color.jpg">Classic - Color</a></li>
																	<li><a class="dropdown-item" data-thumb-preview="/templates/vinass/img/previews/preview-classic-light.jpg">Classic - Light</a></li>
																	<li><a class="dropdown-item" data-thumb-preview="/templates/vinass/img/previews/preview-classic-video.jpg">Classic - Video</a></li>
																	<li><a class="dropdown-item" data-thumb-preview="/templates/vinass/img/previews/preview-classic-video-light.jpg">Classic - Video - Light</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item">
															Contact
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item">
															About us
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item">
															Blog
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item">
															Shop
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
											<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<span class="input-group-append">
															<button class="btn" type="submit">
																<i class="fa fa-search header-nav-top-icon text-color-dark"></i>
															</button>
														</span>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<div class="slider-container rev_slider_wrapper" style="height: 800px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-2', 'left': {'h_align': 'center', 'v_align' : 'bottom', 'v_offset': 30, 'h_offset': 90}, 'right': {'h_align': 'center', 'v_align' : 'bottom', 'v_offset': 30, 'h_offset': 125}}, 'bullets': {'enable': false}}}">
						<ul>
							<li class="slide-overlay slide-overlay-level-7" data-transition="fade">
								<img src="/templates/vinass/img/slides/slide-corporate-16-1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption overlay d-none d-sm-block overlay-show overlay-color-primary overlay-op-9"
									data-frames='[{"delay":1000,"speed":1000,"from":"opacity:0;x:0;","to":"o:1;x:0;","ease":"Power1.easeIn"},{"delay":"wait","speed":500,"to":"opacity:0;fb:0;","ease":"Power1.easeIn"}]'
									data-x="right"
									data-y="bottom"
									data-height="385"
									data-width="84%"
									data-basealign="slide"></div>
									
								<h1 class="tp-caption font-weight-extra-bold text-color-light line ws-normal"
									data-frames='[{"delay":2000,"speed":900,"frame":"0","from":"opacity:0;x:50%;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['right','right','right','center']" data-hoffset="['170','170','170','0']"
									data-y="['bottom','bottom','bottom','middle']" data-voffset="['200','200','200','0']"
									data-width="['350','350','350','600']"
									data-fontsize="['39','39','39','75']"
									data-lineheight="['47','47','47','85']"
									data-textAlign="['left','left','left','center']">Welcome to our amazing office.</h1>


								<div class="tp-caption font-weight-light text-color-light opacity-7 ws-normal"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="['right','right','right','center']" data-hoffset="['18','18','18','0']"
									data-y="['bottom','bottom','bottom','middle']" data-voffset="['165','165','165','130']"
									data-width="['500','500','500','800']"
									data-fontsize="['15','15','15','35']"
									data-lineheight="['26','26','26','26']"
									data-textAlign="['left','left','left','center']">VINASOFT is a huge success, learn more about us.</div>

								<a class="tp-caption d-inline-flex align-items-center btn btn-dark font-weight-semibold"
									href="#"
									data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:-20%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['right','right','right','center']" data-hoffset="['330','330','330','0']"
									data-y="['bottom','bottom','bottom','middle']" data-voffset="['95','95','95','250']"
									data-paddingtop="['10','10','10','24']"
									data-paddingbottom="['10','10','10','24']"
									data-paddingleft="['40','40','40','40']"
									data-paddingright="['40','40','40','40']"
									data-fontsize="['11','11','11','25']"
									data-lineheight="['20','20','20','22']">VIEW OUR SERVICES</a>

							</li>

							<li class="slide-overlay slide-overlay-level-7" data-transition="fade">
								<img src="/templates/vinass/img/slides/slide-corporate-16-2.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption overlay d-none d-sm-block overlay-show overlay-color-primary overlay-op-9"
									data-frames='[{"delay":1000,"speed":1000,"from":"opacity:0;x:0;","to":"o:1;x:0;","ease":"Power1.easeIn"},{"delay":"wait","speed":500,"to":"opacity:0;fb:0;","ease":"Power1.easeIn"}]'
									data-x="right"
									data-y="bottom"
									data-height="385"
									data-width="84%"
									data-basealign="slide"></div>
									
								<h1 class="tp-caption font-weight-extra-bold text-color-light line ws-normal"
									data-frames='[{"delay":2000,"speed":900,"frame":"0","from":"opacity:0;x:50%;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['right','right','right','center']" data-hoffset="['173','173','173','0']"
									data-y="['bottom','bottom','bottom','middle']" data-voffset="['200','200','200','0']"
									data-width="['350','350','350','750']"
									data-fontsize="['39','39','39','75']"
									data-lineheight="['47','47','47','85']"
									data-textAlign="['left','left','left','center']">We build projects for people.</h1>


								<div class="tp-caption font-weight-light text-color-light opacity-7 ws-normal"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="['right','right','right','center']" data-x="right" data-hoffset="['18','18','18','0']"
									data-y="['bottom','bottom','bottom','middle']" data-voffset="['160','160','160','125']"
									data-width="['500','500','500','800']"
									data-fontsize="['15','15','15','35']"
									data-lineheight="['26','26','26','26']"
									data-textAlign="['left','left','left','center']">Amazing quality, learn more about us</div>

								<a class="tp-caption d-inline-flex align-items-center btn btn-dark font-weight-semibold"
									href="#"
									data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:-20%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="['right','right','right','center']" data-hoffset="['320','320','320','0']"
									data-y="['bottom','bottom','bottom','middle']" data-voffset="['98','98','98','253']"
									data-paddingtop="['10','10','10','24']"
									data-paddingbottom="['10','10','10','24']"
									data-paddingleft="['40','40','40','40']"
									data-paddingright="['40','40','40','40']"
									data-fontsize="['11','11','11','25']"
									data-lineheight="['20','20','20','22']">VIEW OUR PORTIFOLIO</a>

							</li>
						</ul>
					</div>
				</div>
				
				<div class="container py-3 my-5">
					<div class="row justify-content-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
						<div class="col">
							<h2 class="text-10 font-weight-normal text-color-dark mb-4 line-height-4"><span class="text-color-primary font-weight-bold ">VINASOFT </span>lorem ipsum dolor sit amet, consectetur adipiscing elit nunc ut finibus erat, a fringilla purus.</h2>
							<p class="text-5 font-weight-normal text-color-dark line-height-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut finibus erat, a fringilla purus. Aliquam consectetur, lorem vitae rhoncus mattis, libero velit hendrerit massa, eu finibus sem eros a odio. </p>

							<div class="row justify-content-center">
								<div class="col-md-2 col-lg-1 text-center mb-3 mb-md-0 mt-md-2 mt-lg-1 px-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
									<img alt="" src="/templates/vinass/img/logo-red.png" class="img-fluid">
								</div>
								<div class="col-md-10 col-lg-11 d-flex align-items-center justify-content-center justify-content-lg-start line-height-9">
									<p class="opacity-9 pl-lg-2 pr-lg-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut finibus erat, a fringilla purus. Aliquam consectetur, lorem vitae rhoncus mattis, libero velit hendrerit massa, eu finibus sem eros a odio. Nunc posuere dolor id sapien congue, et pretium augue rhoncus. Praesent vulputate vehicula est, ut lobortis metus euismod placerat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-height-3 bg-light border border-bottom-0 m-0" style="background-image: url(/templates/vinass/img/patterns/tiling.png); background-repeat: repeat;">
					<div class="container">
						<div class="row featured-boxes featured-boxes-style-4">
							<div class="col-md-6 col-lg-3">
								<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
									<div class="box-content px-4">
										<i class="icon-featured icon-screen-tablet icons text-12"></i>
										<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Mobile Apps</h4>
										<p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
									<div class="box-content px-4">
										<i class="icon-featured icon-layers icons text-12"></i>
										<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Creative Websites</h4>
										<p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
									<div class="box-content px-4">
										<i class="icon-featured icon-magnifier icons text-12"></i>
										<h4 class="font-weight-bold text-color-dark pb-1 mb-2">SEO Optimization</h4>
										<p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
									<div class="box-content px-4">
										<i class="icon-featured icon-screen-desktop icons text-12"></i>
										<h4 class="font-weight-bold text-color-dark pb-1 mb-2">Brand Solutions</h4>
										<p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="parallax section section-text-light section-parallax section-center overlay overlay-show overlay-op-8 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}"data-image-src="/templates/vinass/img/parallax/parallax-corporate-16.jpg">
					<div class="container my-5 py-5">
						<div class="row justify-content-center text-center">
							<div class="col-8 px-0">
								<h4 class="text-9 font-weight-bold mb-4">Lessons for successful project delivery</h4>
								<p class="mb-5 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat id sapien ac varius. Fusce hendrerit ligula a consectetur ullamcorper. Vestibulum varius pharetra lorem.</p>

								<a class="btn btn-light-2 btn-outline font-weight-semibold px-4 btn-py-2 text-2">LEARN ABOUT US<i class="fas fa-arrow-right ml-2 pl-3 text-3"></i></a>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row py-5 my-5">
						<div class="col">
					
							<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid opacity-2" src="/templates/vinass/img/logos/logo-2.png" alt="">
								</div>
							</div>
							
						</div>
					</div>
				</div>

				<section class="section section-background-half-primary-half-secondary section-no-border my-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="row text-center">
									<div class="col-md-4">
										<div class="card bg-color-light border-0 py-3">
											<div class="card-body px-5 py-5">
												<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
												<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
												<div class="d-flex justify-content-center align-items-center">
													<img src="/templates/vinass/img/team/team-1.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="" />
													<strong class="text-color-dark text-2">by John Doe</strong>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card bg-color-light border-0 py-3">
											<div class="card-body px-5 py-5">
												<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
												<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
												<div class="d-flex justify-content-center align-items-center">
													<img src="/templates/vinass/img/team/team-2.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="" />
													<strong class="text-color-dark text-2">by Jessica Doe</strong>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card bg-color-light border-0 py-3">
											<div class="card-body px-5 py-5">
												<h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
												<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
												<div class="d-flex justify-content-center align-items-center">
													<img src="/templates/vinass/img/team/team-4.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="" />
													<strong class="text-color-dark text-2">by Jennifer Doe</strong>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>

			<footer id="footer" class="mt-0 bg-color-grey border-0">
				<div class="container mb-4 pt-4">
					<div class="row py-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-dark mb-4">Contact Details</h5>
							<p class="text-4 mb-0">123 VINASOFT Blvd, Suite 100</p>
							<p class="text-4 mb-0">New York, NY</p>
							<p class="text-4 mb-0">Phone: (800) 123 4567</p>
							<p class="text-4 mb-0">Email: <a href="mailto:mail@example.com" class="text-color-primary">mail@example.com</a></p>
						</div>
						<div class="col-6 col-lg-2 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-dark mb-4">Pages</h5>
							<ul class="list list-icons list-icons-sm">
								<li><i class="fas fa-angle-right"></i><a href="page-services.html" class="text-color-default ml-1"> Our Services</a></li>
								<li><i class="fas fa-angle-right"></i><a href="about-us.html" class="text-color-default ml-1"> About Us</a></li>
								<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="text-color-default ml-1"> Contact Us</a></li>
							</ul>
						</div>
						<div class="col-6 col-lg-2 mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-dark mb-4">Links</h5>
							<ul class="list list-icons list-icons-sm">
								<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="text-color-default ml-1"> FAQ's</a></li>
								<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="text-color-default ml-1"> Sitemap</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-5">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-dark mb-4">Latest Tweet</h5>
							<div id="tweet" class="twitter twitter-dark" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 1}">
								<p>Please wait...</p>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-border-grey bg-color-grey">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col mb-4 mb-lg-0">
								<p>© Copyright 2019. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="/templates/vinass/vendor/jquery/jquery.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="/templates/vinass/vendor/popper/umd/popper.min.js"></script>
		<script src="/templates/vinass/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/templates/vinass/vendor/common/common.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/templates/vinass/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/templates/vinass/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/templates/vinass/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/templates/vinass/vendor/vide/jquery.vide.min.js"></script>
		<script src="/templates/vinass/vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/templates/vinass/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="/templates/vinass/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="/templates/vinass/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Theme Custom -->
		<script src="/templates/vinass/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/templates/vinass/js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
