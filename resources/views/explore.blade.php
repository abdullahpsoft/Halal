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
	<link rel="stylesheet" href="css/slideshow.css">
	<link rel="stylesheet" href="css/nicepage.css">
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
  background-color: #2E9AC8;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.dropbtn {
    background-color: #2E9AC8;
    color: white;
    padding: 2px;
    border: none;
    cursor: pointer;
    width: 100% !important;
}

.dropdown {
    position: relative;
    display: inline-block;
    width: 100% !important;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 170px;
    box-shadow: 0px 8px 16px
    0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px ;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: gray;
    width: 100% !important;
}
</style>
</head>

<body>

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
					<li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true">&nbsp;</i> {{ __('lang.home')}}</a></li>
					<li class="nav-item"><a class="nav-link" href="/categories"><i class="fa fa-home" aria-hidden="true">&nbsp;</i>{{ __('lang.category')}}</a></li>
					<li class="nav-item"><a class="nav-link active" href="/explore"><i class="fa fa-plus-square" aria-hidden="true">&nbsp;</i>{{ __('lang.explore')}}</a></li>
					<li class="nav-item"><a class="nav-link" href="/about-us"><i class="fa fa-info" aria-hidden="true">&nbsp;</i>{{ __('lang.aboutus')}}</a></li>
					<li class="nav-item"><a class="nav-link" href="/companies"><i class="fa fa-industry" aria-hidden="true">&nbsp;</i>companies</a></li>
					<li class="nav-item"><a class="nav-link" href="http://www.halalwiki.net/"><i class="fa fa-wikipedia-w" aria-hidden="true">&nbsp;</i>Halal Wiki</a></li>
					<li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-phone" aria-hidden="true">&nbsp;</i>contact</a></li>
					<li class="nav-item"><a class="nav-link" href="/admin"><i class="fa fa-sign-in" aria-hidden="true"> &nbsp;login</i></a></li>
					<li class="nav-item"><a class="nav-link" href=""><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; &nbsp; &nbsp;<i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; &nbsp; &nbsp;<i class="fa fa-instagram" aria-hidden="true"></i></a></li>

				</ul>
                <div class="dropdown">
                    <button class="dropbtn">
                        Select {{ __('lang.language')}}
                    </button>

                    <div class="dropdown-content">

                        <a href="/setLanguage/en">
                            <img src=
                                 "/img/flags/usa.png"
                                 width="16" height="16"> English</a>
                        <a href="/setLanguage/de">
                            <img src=
                                 "/img/flags/germany.png"
                                 width="16" height="16"> Deutsche
                        </a>
                        <a href="#">
                            <img src=
                                 "/img/flags/saudi-arabia.png"
                                 width="20" height="15"> عربى</a>
                        <a href="#">
                            <img src=
                                 "/img/flags/turkey.png"
                                 width="20" height="15">Türk</a>
                        <a href="#">
                            <img src=
                                 "/img/flags/france.png"
                                 width="20" height="15">français</a>

                    </div>
                </div>
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
				</div>
			</div>
		</section>

		<!-- Start banner bottom -->
		<br>
		<!-- End banner bottom -->
		<div class="breakfast-area">
			<div class="container">
				<section class="section_gap_top food-gallery-area">
					<div class="main_title">
						<h1>Most Scanned {{ __('lang.product')}}</h1>
					</div>
					<div class="container-fluid no-padding">
						<div class="row owl-carousel active-food-gallery">
							<!-- single gallery item -->
							@isset($products)
								@foreach($products as $product)
									<div class="single-gallery-item">
										<div class="container">
											<a href="product-detail/{{$product->id}}">
												<div class="card">
													@if($product->image != null)
														<img class="card-img-top" src="http://lara.halalcheck.net/img/fotos/thumb/{{$product->image}}" style="  height:189px;" alt="Card image cap">
													@endif
													@if($product->image == null)
														<img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" style="  height:189px;" alt="Card image cap">
													@endif

													<div class="card-body">
														<h4 class="card-title" style="height: 50px;"><a href="product-detail/{{$product->id}}"  class="c-title" title="View Product">{{$product->name}}</a></h4>
														@if($product->alcohol == 0 && $product->animal_additive == 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">{{ __('lang.alcohol')}}: {{ __('lang.no')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">{{ __('lang.animalproduct')}}: {{ __('lang.no')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>
														@endif
														@if($product->alcohol != 0 && $product->animal_additive == 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">{{ __('lang.alcohol')}}: {{ __('lang.yes')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute;">
																	<img id='image1' name="image1"	style="max-width: 25px !important; max-height: 40px !important;" src="img/prohibitted.jpeg"/>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">{{ __('lang.animalproduct')}}: {{ __('lang.no')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>
														@endif
														@if($product->alcohol == 0 && $product->animal_additive != 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">{{ __('lang.alcohol')}}: {{ __('lang.no')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">{{ __('lang.animalproduct')}}: {{ __('lang.yes')}}</label>
																</div>

																<div style="padding-left:85%; position:absolute;">
																	<img id='image1' name="image1"	style="max-width: 25px !important; max-height: 40px !important;" src="img/prohibitted.jpeg"/>
																</div>
															</div>
														@endif
														@if($product->alcohol != 0 && $product->animal_additive != 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">{{ __('lang.alcohol')}}: {{ __('lang.yes')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute;">
																	<img id='image1' name="image1"	style="max-width: 25px !important; max-height: 40px !important;" src="img/prohibitted.jpeg"/>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">animalproduct: {{ __('lang.yes')}}</label>
																</div>

																<div style="padding-left:85%; position:absolute;">
																	<img id='image1' name="image1"	style="max-width: 25px !important; max-height: 40px !important;" src="img/prohibitted.jpeg"/>
																</div>
															</div>
														@endif
													</div>
												</div>
											</a>
										</div>
									</div>
								@endforeach
							@endisset
						</div>
					</div>
					<br><br><br>
					<div class="main_title">
						<h1>Most Viewed {{ __('lang.product')}}</h1>
					</div>
					<div class="container-fluid no-padding">
						<div class="row owl-carousel active-food-gallery">
							<!-- single gallery item -->
							@isset($products)
								@foreach($products as $product)
									<div class="single-gallery-item">
										<div class="container">
											<a href="product-detail/{{$product->id}}">
												<div class="card">
													@if($product->image != null)
														<img class="card-img-top" src="http://lara.halalcheck.net/img/fotos/thumb/{{$product->image}}" style="  height:189px;" alt="Card image cap">
													@endif
													@if($product->image == null)
														<img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" style="  height:189px;" alt="Card image cap">
													@endif

													<div class="card-body">
														<h4 class="card-title" style="height: 50px;"><a href="product-detail/{{$product->id}}"  class="c-title" title="View Product">{{$product->name}}</a></h4>
														@if($product->alcohol == 0 && $product->animal_additive == 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">{{ __('lang.alcohol')}}: {{ __('lang.no')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">{{ __('lang.animalproduct')}}: {{ __('lang.no')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>
														@endif
														@if($product->alcohol != 0 && $product->animal_additive == 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">{{ __('lang.alcohol')}}: {{ __('lang.yes')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute;">
																	<img id='image1' name="image1"	style="max-width: 25px !important; max-height: 40px !important;" src="img/prohibitted.jpeg"/>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">{{ __('lang.animalproduct')}}: {{ __('lang.no')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>
														@endif
														@if($product->alcohol == 0 && $product->animal_additive != 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">{{ __('lang.alcohol')}}: {{ __('lang.no')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">{{ __('lang.animalproduct')}}: {{ __('lang.yes')}}</label>
																</div>

																<div style="padding-left:85%; position:absolute;">
																	<img id='image1' name="image1"	style="max-width: 25px !important; max-height: 40px !important;" src="img/prohibitted.jpeg"/>
																</div>
															</div>
														@endif
														@if($product->alcohol != 0 && $product->animal_additive != 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">{{ __('lang.alcohol')}}: {{ __('lang.yes')}}</label>
																</div>
																<div style="padding-left:85%; position:absolute;">
																	<img id='image1' name="image1"	style="max-width: 25px !important; max-height: 40px !important;" src="img/prohibitted.jpeg"/>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">{{ __('lang.animalproduct')}}: {{ __('lang.yes')}}</label>
																</div>

																<div style="padding-left:85%; position:absolute;">
																	<img id='image1' name="image1"	style="max-width: 25px !important; max-height: 40px !important;" src="img/prohibitted.jpeg"/>
																</div>
															</div>
														@endif
													</div>
												</div>
											</a>
										</div>
									</div>
								@endforeach
							@endisset
						</div>
					</div>
					<br><br><br>
					<div class="main_title">
						<h1>{{ __('lang.news')}} Section</h1>
					</div>
					<div class="slideshow-container-news">
						@foreach ($news as $news)
							<div class="mySlides-news">
								<p>{{$news->Title}}</p>
								<p>BY</p>
								<p>{{$news->Author}}</p>
								<q>{{$news->Summary}}</q>
							</div>
							<a class="prev-news" onclick="plusSlides(-1)">❮</a>
							<a class="next-news" onclick="plusSlides(1)">❯</a>
						@endforeach
					</div>

				</section>
				<div class="main_title">
					<h1>Meet Our Team</h1>
				</div>
				<div class="row-team" style="padding-bottom: 50px;">
					<div class="column-team">
					  <div class="card-team">
						<img src="img/team/team1.jpg" alt="Jane" style="width:100%;height:300px">
						<div class="container-team">
						  <h2>Isa Malikoc</h2>
						  <p class="title-team">CEO & Founder</p>
						  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
						  <p>example@example.com</p>

						</div>
					  </div>
					</div>

					<div class="column-team">
						<div class="card-team">
						  <img src="img/team/team3.jpg" alt="Jane" style="width:100%;height:300px">
						  <div class="container-team">
							<h2>Dilara Faslak</h2>
							<p class="title-team">Founder</p>
							<p>Some text that describes me lorem ipsum ipsum lorem.</p>
							<p>example@example.com</p>

						  </div>
						</div>
					</div>

					<div class="column-team">
					  <div class="card-team">
						<img src="img/team/team2.jpg" alt="Mike" style="width:100%;height:300px">
						<div class="container-team">
						  <h2>Rumeysa</h2>
						  <p class="title-team">Art Director</p>
						  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
						  <p>example@example.com</p>

						</div>
					  </div>
					</div>

					<div class="column-team">
					  <div class="card-team">
						<img src="img/team/team3.jpg" alt="John" style="width:100%;height:300px">
						<div class="container-team">
						  <h2>Feyza</h2>
						  <p class="title-team">Designer</p>
						  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
						  <p>example@example.com</p>

						</div>
					  </div>
					</div>
				</div>
				<br><br><br>
				<div class="main_title">
					<h1>{{ __('lang.faq')}}'s Section</h1>
				</div>
				<div>
					@foreach ($faqs as $faq)

					<h4>{{$faq->Question}}</h4>
					<p>{{$faq->Answer}}</p>

					@endforeach
				</div>
			</div>
		</div>
		<!--================ End Breakfast Area =================-->




    <!--================ Start Footer Area =================-->
		<footer class="footer-area overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="single-footer-widget">
							<h6>Top {{ __('lang.product')}}</h6>
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
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
  			showSlides(slideIndex += n);
		}
		function plusFaqSlides(n) {
  			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		showSlides(slideIndex = n);
		}

		function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides-news");
		var dots = document.getElementsByClassName("dot-news");
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active-news", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active-news";
		}
	</script>
</body>

</html>
