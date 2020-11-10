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
	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f881c4943bd26001418de68&product=inline-share-buttons" async="async"></script>
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


		<div class="super_container">
		    <div class="single_product">
				<div class="container-fluid" style=" background-color: #fff; padding: 11px;">
					<div class="row" style="padding: 10px;">
						<div class="product_description">
							<nav>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">{{$product->title}}</a></li>
								</ol>
							</nav>
							<div class="product_name">{{$product->name}}</div>

						</div>
					</div>
					<hr>
		            <div class="row">
		                <div class="col-lg-3 order-lg-2 order-1">
							@if($product->image != null)
								<div class="image_selected" style="height:400px;"><img src="http://lara.halalcheck.net/img/fotos/big/{{$product->image}}" alt=""></div>
							@endif
							@if($product->image == null)
								<div class="image_selected" style="height:400px;"><img src="/img/placeholder-product.jpg" alt=""></div>
							@endif
							<hr class="singleline">
							<div>
								<span class="product_info">Barcode number: <b>{{$product->ean}}</b><span><br>
								<span class="product_info">Category: <b>{{$subCategory->name}}</b><span><br>
								<span class="product_info">Registered: <b> {{$product->created_at}}</b><span><br>
								{{-- <span class="product_info">Answer received on: <b>LOOK FOR</b><span><br>   --}}
							</div>

							<hr class="singleline">
							<h2>Share On:</h2>
							<div class="sharethis-inline-share-buttons"></div>

		                </div>
		                <div class="col-lg-9 order-2">
		                    <div class="product_description">
		                        {{-- <nav>
		                            <ol class="breadcrumb">
		                                <li class="breadcrumb-item"><a href="#">{{$product->title}}</a></li>
		                            </ol>
		                        </nav>
		                        <div class="product_name">{{$product->name}}</div>
									<hr class="singleline"> --}}
										{{-- <br>
										<br> --}}

											<div class="row">
												<div class="col-md-6">
													{{-- <div class="br-dashed"> --}}
														<div class="row">
															@if($product->alcohol == 0)
                                                         	    {{-- <label for="image1" style="padding-left: 0px; color:green">Alcohol: No</label>
																<img src="/img/no.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">																 --}}
																<div class="col-md-2 col-xs-2">
																	<img src="/img/no.png" style="padding-top: 5px;">
																</div>
																<div class="col-md-9 col-xs-9">
																	<div class="pr-info col-md-12">
																		<span class=""><b style="color: green">Alcohol: No</b></span>
																	</div>
																	<div class="pr-info col-md-12">
																		<span><b style="color:black">Free From Alcoholic Ingredients</b></span>
																	</div>
																</div>
                                                        	@endif
															@if($product->alcohol == 1)
																<div class="col-md-2 col-xs-2">
																	<img src="/img/yes.png" style="padding-top: 5px;">
																</div>
																<div class="col-md-9 col-xs-9">
																	<div class="pr-info col-md-12">
																		<span class=""><b style="color: red">Alcohol: Yes</b></span>
																	</div>
																</div>
															@endif
															@if($product->alcohol == 2)
																<div class="col-md-2 col-xs-2">
																	<img src="/img/controversial.png" style="padding-top: 5px;">
																</div>
																<div class="col-md-9 col-xs-9">
																	<div class="pr-info col-md-12">
																		<span class=""><b style="color: orange">Alcohol: Controversial</b></span>
																	</div>
																	<div class="pr-info col-md-12">
																		<span><b style="color:black">{{$reason->Text}}&nbsp &#x25BC</b></span>
																	</div>
																	@if($reason->explanation != "")
																		<div class="pr-info col-md-12">
																			<textarea rows="5" cols="45" style="border: none" readonly>{{$reason->explanation}}</textarea>
																		</div>
																	@endif
																</div>
															@endif
															@if($product->alcohol == 3)
																<div class="col-md-2 col-xs-2">
																	<img src="/img/unknown.png" style="padding-top: 5px;">
																</div>
																<div class="col-md-9 col-xs-9">
																	<div class="pr-info col-md-12">
																		<span class=""><b style="color: #2E9AC8">Alcohol: No Information</b></span>
																	</div>
																</div>
															@endif

														</div>
													{{-- </div> --}}
												{{-- </div>

											</div> --}}
<br>
											{{-- <div class="row">
												<div class="col-md-6"> --}}
													{{-- <div class="br-dashed"> --}}
														<div class="row">
															@if($product->animal_additive == 0)
																{{-- <label for="image1" style="padding-left: 0px; color:green">Alcohol: No</label>
																<img src="/img/no.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">																 --}}
																<div class="col-md-2 col-xs-2">
																	<img src="/img/no.png" style="padding-top: 5px;">
																</div>
																<div class="col-md-9 col-xs-9">
																	<div class="pr-info col-md-12">
																		<span class=""><b style="color: green">Animal Additive: No</b></span>
																	</div>
																	<div class="pr-info col-md-12">
																		<span><b style="color:black">Free From Animal Additives</b></span>
																	</div>
																</div>
															@endif
															@if($product->animal_additive == 1)
																<div class="col-md-2 col-xs-2">
																	<img src="/img/yes.png" style="padding-top: 5px;">
																</div>
																<div class="col-md-9 col-xs-9">
																	<div class="pr-info col-md-12">
																		<span class=""><b style="color: red">Animal Additive: Yes</b></span>
																	</div>
																</div>
															@endif
															@if($product->animal_additive == 2)
																<div class="col-md-2 col-xs-2">
																	<img src="/img/controversial.png" style="padding-top: 5px;">
																</div>
																<div class="col-md-9 col-xs-9">
																	<div class="pr-info col-md-12">
																		<span class=""><b style="color: orange">Animal Additive: Controversial</b></span>
																	</div>
                                                                    @if($product->reason_id != "")
                                                                        <div class="pr-info col-md-12">
                                                                            <span><b style="color:black">{{$reason->Text}}&nbsp &#x25BC</b></span>
                                                                        </div>
                                                                        @if($reason->explanation != "")
                                                                            <div class="pr-info col-md-12">

                                                                                <textarea rows="5" cols="45" style="border:none" readonly>{{$reason->explanation}}</textarea>
                                                                            </div>
                                                                        @endif
                                                                    @elseif($product->reason_id == "")
                                                                        <div class="pr-info col-md-12">
                                                                            <span><b style="color:black">{{$product->reason_title}}&nbsp &#x25BC</b></span>
                                                                        </div>

                                                                        <div class="pr-info col-md-12">

                                                                            <textarea rows="5" cols="45" style="border:none" readonly>{{$product->reason}}</textarea>
                                                                        </div>
                                                                    @endif
																</div>
															@endif
															@if($product->animal_additive == 3)
																<div class="col-md-2 col-xs-2">
																	<img src="/img/unknown.png" style="padding-top: 5px;">
																</div>
																<div class="col-md-9 col-xs-9">
																	<div class="pr-info col-md-12">
																		<span class=""><b style="color: #2E9AC8">Animal Additive: No Information</b></span>
																	</div>
																</div>
															@endif

														</div>
													{{-- </div> --}}
													<br>
													<br>
													<div class="image_selected" style="height:230px;"><img src="/img/placeholder-advertisement.jpg" alt=""></div>
												</div>
												{{-- <div class="col-md-3"> --}}
												<div class="col-md-3">
													<h3>Recommended Products</h3>
													<ul class="image_list">
														<li><img src="/img/placeholder-product.jpg"></li>
														<li><img src="/img/placeholder-product.jpg"></li>
														<li><img src="/img/placeholder-product.jpg"></li>
													</ul>
												</div>
												{{-- </div> --}}
												<div class="col-md-3">
													<div class="image_selected" style="height:600px;"><img src="/img/placeholder-advertisement.jpg" alt=""></div>
												</div>
											</div>



														{{-- <div class="row row-underline">
															<div class="col-md-6"> <span class=" deal-text">Manufacturer's Answer</span> </div>
															<div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<pre>{{$product->man_reply}}</pre>
															</div>
														</div> --}}
													  	{{-- <hr class="singleline">
		                        						<div>
															<span class="product_info">Barcode number: <b>{{$product->ean}}</b><span><br>
															<span class="product_info">Category: <b>{{$subCategory->name}}</b><span><br>
															<span class="product_info">Registered: <b> {{$product->created_at}}</b><span><br>
															<span class="product_info">Answer received on: <b>LOOK FOR</b><span><br>
														</div>

		                        						<hr class="singleline"> --}}


		                    </div>
						</div>

						{{-- <div class="col-lg-2 order-3">
		                    <ul class="image_list">
								<li><img src="/img/placeholder-advertisement.jpg"></li>
								<li><img src="/img/placeholder-advertisement.jpg"></li>
								<li><img src="/img/placeholder-advertisement.jpg"></li>
		                    </ul>
		                </div> --}}
		            </div>

					<br>
		            {{-- <div class="row row-underline">
		                <div class="col-md-6"> <span class=" deal-text">Manufacturer's Answer</span> </div>
		                <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                            <pre>{{$product->man_reply}}</pre>
		                </div>
					</div> --}}
					<div class="row row-underline">
						<div class="col-md-6"> <span class=" deal-text">Manufacturer's Answer</span> </div>
						<div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<pre>{{$product->man_reply}}</pre>
						</div>
					</div>
					{{-- <div class="row col-md-12">
						<div class="col-md-4">
							<ul class="image_list">
								<li><img src="/img/placeholder-advertisement.jpg" style="height: 100%"></li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul class="image_list">
								<li><img src="/img/placeholder-advertisement.jpg" style="height: 100%"></li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul class="image_list">
								<li><img src="/img/placeholder-advertisement.jpg" style="height: 100%"></li>
							</ul>
						</div>
					</div> --}}
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
