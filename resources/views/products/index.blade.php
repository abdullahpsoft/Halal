<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Halal Check - About Us</title>
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
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
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
				<img src="/img/logo.svg" alt="">
			</div>
		</div>
		<div class="nav-wraper">
			<div class="navbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true">&nbsp;</i> home</a></li>
					<li class="nav-item"><a class="nav-link active" href="/categories"><i class="fa fa-home" aria-hidden="true">&nbsp;</i>Categories</a></li>
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
							<h1>Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="index.html">Home</a>
									<a href="categories.html">Products</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End banner bottom -->

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">SEARCH RESULTS</h1>
            @if(!empty($successMsg))
            <div class="alert alert-danger"> {{ $successMsg }}</div>
            @endif
            @if (session('alert'))
    			<div class="col-md-12 alert alert-danger" style="text-align: center">
        			{{ session('alert') }}
    			</div>
			@endif
        </div>
    </section>



    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding-left: 0px">
                <h3>Filters:</h3>
            </div>
        </div>

        <div class="row col-sm-12">
            <div class="checkbox col-sm-2" style="width: 50% !important;">
                <label><input type="checkbox" value="">&nbsp;All Products</label>
            </div>
            <div class="checkbox col-sm-2" style="width: 50% !important;">
                <label><input type="checkbox" value="">&nbsp;Shop</label>
            </div>
            <div class="checkbox col-sm-2" style="width: 50% !important;">
                <label><input type="checkbox" value="">&nbsp;Harmless</label>
            </div>
            <div class="checkbox col-sm-2" style="width: 50% !important;">
                <label><input type="checkbox" value="">&nbsp;Controversial</label>
            </div>
            <div class="checkbox col-sm-2" style="width: 50% !important;">
                <label><input type="checkbox" value="">&nbsp;Unknown</label>
            </div>
            <div class="checkbox col-sm-2" style="width: 50% !important;">
                <label><input type="checkbox" value="">&nbsp;Certified</label>
            </div>
        </div>

        <form action="/search" method="POST">
        @csrf
        <div class="row col-md-12">
            <div class="input-group">
                <input type="text" name="q" id="q"class="form-control" placeholder="Search Products here">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
            </div>
        </form>
    </div>

    <div class="container section_gap_top">
        <div class="row">
            <div class="col">
                <div class="row">
					@isset($products)
                        @foreach($products as $product)
						    <div class="col-12 col-md-4 col-lg-3" style="padding-top: 15px;">
                                <a href="product-detail/{{$product->id}}">
                                    <div class="card">
																			@if($product->image != null)
																			<img class="card-img-top" src="http://lara.halalcheck.net/img/fotos/thumb/{{$product->image}}" style="  height:189px;" alt="Card image cap">
																			@endif
																			@if($product->image == null)
																			<img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" style="  height:189px;" alt="Card image cap">
																			@endif
                                        <div class="card-body" style="height: 200px;">
                                            <h4 class="card-title" style="height: 50px;"><a href="product-detail/{{$product->id}}" class="c-title" title="View Product">{{$product->name}}</a></h4>

                                            @if($product->alcohol == 0 && $product->animal_additive == 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">Alcohol: no</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">Animal Product: no</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>
                        								@endif
														@if($product->alcohol != 0 && $product->animal_additive == 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">Alcohol: yes</label>
																</div>
																<div style="padding-left:85%; position:absolute;">
																	<img id='image1' name="image1"	style="max-width: 25px !important; max-height: 40px !important;" src="img/prohibitted.jpeg"/>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">Animal Product: no</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>
														@endif
														@if($product->alcohol == 0 && $product->animal_additive != 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:green">Alcohol: no</label>
																</div>
																<div style="padding-left:85%; position:absolute; padding-top:5px">
																	<i name="image1" id="image1" style="color: green; max-width: 30px !important; max-height: 30px !important;" class="fa fa-check-circle fa-2x"></i>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">Animal Product: yes</label>
																</div>

																<div style="padding-left:85%; position:absolute;">
																	<img id='image1' name="image1"	style="max-width: 25px !important; max-height: 40px !important;" src="img/prohibitted.jpeg"/>
																</div>
															</div>
														@endif
														@if($product->alcohol != 0 && $product->animal_additive != 0 )
															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">Alcohol: yes</label>
																</div>
																<div style="padding-left:85%; position:absolute;">
																	<img id='image1' name="image1"	style="max-width: 25px !important; max-height: 40px !important;" src="img/prohibitted.jpeg"/>
																</div>
															</div>

															<div class="row" style="">
																<div>
																	<label for="image1" style="padding-left: 0px; padding-top: 5px; color:red">Animal Product: yes</label>
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
                        @endforeach
                    @endisset

                    {{ $products->render()  }}

                </div>
                <br>
            </div>

        </div>
    </div>
	</div>
    <br>
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="/js/gmaps.min.js"></script>
<script src="/js/theme.js"></script>
</body>

</html>
