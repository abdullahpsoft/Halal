<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Halal Check</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<style>
.container {
  position: relative;

}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #2A2E43;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>
</head>

<body class="container-fluid">

	<!--================ Start Header Menu Area =================-->
	<div class="menu-trigger">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<header class="fixed-menu">
		<span class="menu-close"><i class="fa fa-times"></i></span>
		<div class="menu-header">
			<div class="logo d-flex justify-content-center">
				<img src="img/logo.svg" alt="">
			</div>
		</div>
		<div class="nav-wraper">
			<div class="navbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true">&nbsp;</i> home</a></li>
					<li class="nav-item"><a class="nav-link" href="/categories"><i class="fa fa-home" aria-hidden="true">&nbsp;</i>categories</a></li>
					{{-- <li class="nav-item submenu dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false"><i class="fa fa-list" aria-hidden="true">&nbsp;</i>Categories</a>
						<ul class="dropdown-menu">
							@foreach ($categories as $category)
								<li class="nav-item"><a class="nav-link" href="categories/{{$category->slug}}"><i class="fa fa-list" aria-hidden="true">&nbsp;</i>{{$category->name}}</a>	</li>	
							@endforeach
						</ul>
					</li> --}}
					<li class="nav-item"><a class="nav-link" href="/explore"><i class="fa fa-plus-square" aria-hidden="true">&nbsp;</i>explore</a></li>
					<li class="nav-item"><a class="nav-link" href="/about-us"><i class="fa fa-info" aria-hidden="true">&nbsp;</i>about us</a></li>
					<li class="nav-item"><a class="nav-link active" href="/companies"><i class="fa fa-industry" aria-hidden="true">&nbsp;</i>companies</a></li>
					<li class="nav-item"><a class="nav-link" href="http://www.halalwiki.net/"><i class="fa fa-wikipedia-w" aria-hidden="true">&nbsp;</i>Halal Wiki</a></li>					
					<li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-phone" aria-hidden="true">&nbsp;</i>contact</a></li>
					<li class="nav-item"><a class="nav-link" href="/admin"><i class="fa fa-sign-in" aria-hidden="true"> &nbsp;login</i></a></li>
					<li class="nav-item"><a class="nav-link" href=""><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; &nbsp; &nbsp;<i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; &nbsp; &nbsp;<i class="fa fa-instagram" aria-hidden="true"></i></a></li>

				</ul>
			</div>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<div class="site-main">
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
				
				<img src="img/slider/01x.jpg" class="col-md-12">
				
					<!-- <div style="height: 600px"> -->
					<!-- <div class="row halfscreen"> -->
					
					<!-- </div> -->

					<!-- </div> -->
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<br>
		<!-- End banner bottom -->
		<!--================ Start Reservstion Area =================-->
		<div class="main_title">
			<h1>Create Business Account</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
				dolore
				magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
		</div>
		<section class="reservation-area section_gap_top">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-6 offset-lg-6" style="height:auto">
						<div class="contact-form-section">
							<h1>Sign-Up Here!</h1>
							<form method="POST" action="/register-company" class="contact-form-area contact-page-form contact-form text-right">
								@csrf
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter Company Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Company Name'" style="padding: unset" required>
								</div>
								<div class="form-group col-md-12">
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter Company Email Address" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Enter Company Email Address'" style="padding: unset" required>
								</div>
								<div class="form-group col-md-12">
									<input type="password" class="form-control" id="password" name="passsword" placeholder="Set Your Password" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Set Your Password'" style="padding: unset" required>
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="Enter Company Contact Person Name" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Enter Company Conatact Person Name'" style="padding: unset" required>
								</div>
								<div class="form-group col-md-12">
									<input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Company Phone Number" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Enter Company Phone Number'" style="padding: unset" required>
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="address" name="address" placeholder="Address" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Address'" style="padding: unset" required>
								</div>
								<div class="row col-md-12">
								<div class="form-group col-6">
									<input type="text" class="form-control" id="city" name="city" placeholder="City" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'City'" style="padding: unset" required>
								</div>
								<div class="form-group col-6">
									<input type="text" class="form-control" id="state" name="state" placeholder="State" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'State'" style="padding: unset" required>
								</div>
								</div>
								<div class="row col-md-12">
								<div class="form-group col-6">
									<input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Zip Code'" style="padding: unset" required>
								</div>
								<div class="form-group col-6">
									<input type="text" class="form-control" id="country" name="country" placeholder="Country" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Country'" style="padding: unset" required>
								</div>
								</div>
								<div class="col-lg-12 text-center">
									<button type="submit" class="primary-btn text-uppercase" value="SIGNUP">Sign Up</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Reservstion Area =================-->

		    <!--================ Start Footer Area =================-->
			<footer class="footer-area overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-footer-widget">
								<h6>Top Products</h6>
								<div class="row">
									<div class="col">
										<ul class="list">
											<li><a href="#">Managed Website</a></li>
											<li><a href="#">Manage Reputation</a></li>
											<li><a href="#">Power Tools</a></li>
											<li><a href="#">Marketing Service</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick Links</h6>
								<div class="row">
									<div class="col">
										<ul class="list">
											<li><a href="#">Jobs</a></li>
											<li><a href="#">Brand Assets</a></li>
											<li><a href="#">Investor Relations</a></li>
											<li><a href="#">Terms of Service</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-footer-widget">
								<h6>Features</h6>
								<div class="row">
									<div class="col">
										<ul class="list">
											<li><a href="#">Jobs</a></li>
											<li><a href="#">Brand Assets</a></li>
											<li><a href="#">Investor Relations</a></li>
											<li><a href="#">Terms of Service</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<div class="row">
									<div class="col">
										<ul class="list">
											<li><a href="#">Guides</a></li>
											<li><a href="#">Research</a></li>
											<li><a href="#">Experts</a></li>
											<li><a href="#">Agencies</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-8">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
									 method="get" class="form-inline">
										<div class="d-flex flex-row">
											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
											 required="" type="email">
											<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
										</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row footer-bottom justify-content-between">
						<div class="col-lg-6">
							<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
						<div class="col-lg-2">
							<div class="social-icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>
					</div>
	
				</div>
			</footer>

	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
	
	</body>

</html>