<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Halal Check - Products</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/animate-css/animate.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- main css -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
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
				<img src="/img/logo.svg" alt="">
			</div>
		</div>
		<div class="nav-wraper">
			<div class="navbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true">&nbsp;</i> home</a></li>
					<li class="nav-item"><a class="nav-link active" href="/categories"><i class="fa fa-home" aria-hidden="true">&nbsp;</i>categories</a></li>
					{{-- <li class="nav-item submenu dropdown">
						<a href="#" class="nav-link active dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false"><i class="fa fa-list" aria-hidden="true">&nbsp;</i>Categories</a>
						<ul class="dropdown-menu">
							@foreach ($categories as $category)
								<li class="nav-item"><a class="nav-link" href="/categories/{{$category->slug}}"><i class="fa fa-list" aria-hidden="true">&nbsp;</i>{{$category->name}}</a>	</li>
							@endforeach
						</ul>
					</li> --}}
					<li class="nav-item"><a class="nav-link" href="/explore"><i class="fa fa-plus-square" aria-hidden="true">&nbsp;</i>explore</a></li>
					<li class="nav-item"><a class="nav-link" href="/about-us"><i class="fa fa-info" aria-hidden="true">&nbsp;</i>about us</a></li>
					<li class="nav-item"><a class="nav-link" href="/companies"><i class="fa fa-industry" aria-hidden="true">&nbsp;</i>companies</a></li>
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
		{{-- <section class="home_banner_area common-banner">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row halfscreen">

					</div>
				</div>
			</div>
		</section> --}}
		<!-- Start banner bottom -->
		{{-- <div class="row banner-bottom common-bottom-banner align-items-center justify-content-center">
			<div class="col-lg-8 offset-lg-4">
				<div class="banner_content">
					<div class="row d-flex align-items-center" style="background: white">
						<div class="col-lg-7 col-md-12">
							<h1>Product</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="index.html">Home</a>
									<a href="product.html">Product</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End banner bottom -->

		<div class="super_container">

		    <div class="single_product">
		        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
		            <div class="row">

		                <div class="col-lg-4 order-lg-2 order-1">
		                    <div class="image_selected"><img src="http://lara.halalcheck.net/img/fotos/big/{{$product->image}}" alt=""></div>
		                </div>
		                <div class="col-lg-6 order-2">
		                    <div class="product_description">
		                        <nav>
		                            <ol class="breadcrumb">
		                                <li class="breadcrumb-item"><a href="#">{{$product->title}}</a></li>

		                            </ol>
		                        </nav>
		                        <div class="product_name">{{$product->name}}</div>
														<hr class="singleline">
														<br><br>

														@if($product->alcohol == 0 && $product->animal_additive == 0 )

														<div class="row">
															<div class="col-md-7">
																<div class="br-dashed">
																	<div class="row">
																		<div class="col-md-3 col-xs-3">
                                                                            <i style="color: green;max-width: 30px !important;max-height: 30px !important; margin:0px;" class="fa fa-check-circle fa-2x"></i>
                                                                        </div>
																		<div class="col-md-9 col-xs-9">
																			<div class="pr-info">
                                                                                <span class="break-all">Alcohol: no  <p>free from alcoholic ingredients</p></span>
                                                                            </div>
																		</div>
																	</div>
																</div>
															</div>
															{{-- <p class="" style="padding-left: 0px; color:green"> </p><img style="color: green; width: 87px" src="/img/certified-trans.png"></i> --}}
															<div class="col-md-7"> </div>
														</div>

														<div class="row">
															<div class="col-md-7">
																<div class="br-dashed">
																	<div class="row">
																		<div class="col-md-3 col-xs-3">
                                                                            <i style="color: green;max-width: 30px !important;max-height: 30px !important; margin:0px;" class="fa fa-check-circle fa-2x"></i>
                                                                        </div>
			    														<div class="col-md-9 col-xs-9">
				    														<div class="pr-info">
                                                                                <span class="break-all">Animal additives: No  <p>free of animal components (eggs, milk, fish products excluded)</p></span>
                                                                            </div>
							    										</div>
								    								</div>
									    						</div>
										    				</div>
											    			<div class="col-md-7"> </div>
													    </div>
														<br>

														@endif

														@if($product->alcohol != 0 && $product->animal_additive == 0 )
														<div class="row">
															<div class="col-md-7">
																<div class="br-dashed">
																	<div class="row">
																		<div class="col-md-3 col-xs-3">
                                                                            <img style="max-width: 25px !important; max-height: 40px !important;" src="/img/prohibitted.jpeg">
                                                                        </div>
																		<div class="col-md-9 col-xs-9">
                                                                            <div class="pr-info">
                                                                                <span class="break-all">Alcohol: yes  <p></p></span>
                                                                            </div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-7"> </div>
														</div>

														<div class="row">
															<div class="col-md-7">
																<div class="br-dashed">
																	<div class="row">
																		<div class="col-md-3 col-xs-3">
                                                                            <i style="color: green;max-width: 30px !important;max-height: 30px !important; margin:0px;" class="fa fa-check-circle fa-2x"></i>
                                                                        </div>
																		<div class="col-md-9 col-xs-9">
																			<div class="pr-info">
                                                                                <span class="break-all">Animal additives: No  <p>free of animal components (eggs, milk, fish products excluded)</p></span>
                                                                            </div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-7"> </div>
														</div>
														<br>
														@endif

														@if($product->alcohol == 0 && $product->animal_additive != 0 )
														<div class="row">
															<div class="col-md-7">
																<div class="br-dashed">
																	<div class="row">
																		<div class="col-md-3 col-xs-3">
                                                                            <i style="color: green;max-width: 30px !important;max-height: 30px !important; margin:0px;" class="fa fa-check-circle fa-2x"></i>
                                                                        </div>
																		<div class="col-md-9 col-xs-9">
																			<div class="pr-info">
                                                                                <span class="break-all">Alcohol: no  <p>free from alcoholic ingredients</p></span>
                                                                            </div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-7"> </div>
														</div>

														<div class="row">
															<div class="col-md-7">
																<div class="br-dashed">
																	<div class="row">
																		<div class="col-md-3 col-xs-3">
                                                                            <img style="max-width: 25px !important; max-height: 40px !important;" src="/img/prohibitted.jpeg">
                                                                        </div>
																		<div class="col-md-9 col-xs-9">
                                                                            <div class="pr-info">
                                                                                <span class="break-all">
                                                                                    Animal additives: Yes  <p></p>
                                                                                </span>
                                                                            </div>
																		</div>
                                                                    </div>
                                                                </div>
															</div>
															<div class="col-md-7">
                                                            </div>
														</div>
														<br>
														@endif

														@if($product->alcohol != 0 && $product->animal_additive != 0 )
														<div class="row">
															<div class="col-md-7">
												    			<div class="br-dashed">
																	<div class="row">
                                                                        <div class="col-md-3 col-xs-3">
                                                                            <img style="max-width: 25px !important; max-height: 40px !important;" src="/img/prohibitted.jpeg">
                                                                        </div>
																		<div class="col-md-9 col-xs-9">
                                                                            <div class="pr-info">
                                                                                <span class="break-all">Alcohol: yes  <p></p></span>
                                                                            </div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-7"> </div>
														</div>

														<div class="row">
															<div class="col-md-7">
																<div class="br-dashed">
																	<div class="row">
																		<div class="col-md-3 col-xs-3">
                                                                            <img style="max-width: 25px !important; max-height: 40px !important;" src="/img/prohibitted.jpeg">
                                                                        </div>
																		<div class="col-md-9 col-xs-9">
																			<div class="pr-info">
                                                                                <span class="break-all">Animal additives: Yes  <p></p></span>
                                                                            </div>
																		</div>
																	</div>
										    					</div>
															</div>
															<div class="col-md-7"> </div>
														</div>
														<br>
														@endif

                                                        <br>
													  <hr class="singleline">
		                        <div> <span class="product_info">Barcode number: <b>{{$product->ean}}</b><span><br>
															<span class="product_info">Category: <b>{{$subCategory->name}}</b><span><br>
																 <span class="product_info">Registered: <b> {{$product->created_at}}</b><span><br>
																	 <span class="product_info">Answer received on: <b>LOOK FOR</b><span><br>  </div>

		                        <hr class="singleline">


		                    </div>
		                </div>
						<div class="col-lg-2 order-3">
		                    <ul class="image_list">
		                        <!-- <li data-image="/img/product.jpg"><img src="img/generic-image-placeholder.png" alt=""></li>
		                        <li data-image="/img/product.jpg"><img src="img/generic-image-placeholder.png" alt=""></li>
		                        <li data-image="/img/product.jpg"><img src="img/generic-image-placeholder.png" alt=""></li> -->
		                    </ul>
		                </div>
		            </div>


		            <div class="row row-underline">
		                <div class="col-md-6"> <span class=" deal-text">Manufacturer's Answer</span> </div>
		                <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                            <pre>{{$product->man_reply}}
												 {{-- Dear Ms. F.,<br>

												 nice of you to contact us.<br>

												 Gelatin is not used as an ingredient in HiPP products. Gelatin is also not used as a possible clarifying agent in HiPP products.
<br>
												 I wish you and your family all the best! Kind
<br>
												 regards
									<br>			 from the
										<br>		 HiPP Parents Service Team
										<br>		 ------------------------------
										<br>		 Admin: The product is without added flavors and extracts. --}}
											 </pre>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
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
		<!--================ Start Footer Area =================-->
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/popper.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/stellar.js"></script>
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="/js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="/js/gmaps.min.js"></script>
	<script src="/js/theme.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
