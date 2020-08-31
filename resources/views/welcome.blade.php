<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Halal Check</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

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
					<li class="nav-item"><a class="nav-link active" href="/"><i class="fa fa-home" aria-hidden="true">&nbsp;</i> home</a></li>
					<li class="nav-item submenu dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false"><i class="fa fa-list" aria-hidden="true">&nbsp;</i>Categories</a>
						<ul class="dropdown-menu">
							@foreach ($categories as $category)
								<li class="nav-item"><a class="nav-link" href="categories/{{$category->slug}}"><i class="fa fa-list" aria-hidden="true">&nbsp;</i>{{$category->name}}</a>	</li>
							@endforeach
							{{-- <li class="nav-item"><a class="nav-link" href="categories/eat"><i class="fa fa-list" aria-hidden="true">&nbsp;</i>Eat</a>	</li>
							<li class="nav-item"><a class="nav-link" href="categories/drink"><i class="fa fa-list" aria-hidden="true">&nbsp;</i>Drink</a></li>
							<li class="nav-item"><a class="nav-link" href="categories/nonfood"><i class="fa fa-list" aria-hidden="true">&nbsp;</i>Non-food</a></li> --}}
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="/explore"><i class="fa fa-plus-square" aria-hidden="true">&nbsp;</i>explore</a></li>
					<li class="nav-item"><a class="nav-link" href="/about-us"><i class="fa fa-info" aria-hidden="true">&nbsp;</i>about us</a></li>
					<li class="nav-item"><a class="nav-link" href="/companies"><i class="fa fa-industry" aria-hidden="true">&nbsp;</i>companies</a></li>
					<li class="nav-item"><a class="nav-link" href="http://www.halalwiki.net/"><i class="fa fa-wikipedia-w" aria-hidden="true">&nbsp;</i>Halal Wiki</a></li>
					<li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-phone" aria-hidden="true">&nbsp;</i>contact</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-sign-in" aria-hidden="true"> &nbsp;login</i></a></li>
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
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slider/01x.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider/02x.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider/03x.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			</div>
		</section>
		<!-- Start banner bottom -->

		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->

		<!--================ Start Breakfast Area =================-->
		<div class="breakfast-area section_gap_top">
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
						<label><input type="checkbox" value="">&nbsp;Harmless&nbsp;&nbsp;&nbsp;&nbsp;</label>
					</div>
					<div class="checkbox col-sm-2" style="width: 50% !important;">
						<label><input type="checkbox" value="">&nbsp;Controversial</label>
					</div>
					<div class="checkbox col-sm-2" style="width: 50% !important;">
						<label><input type="checkbox" value="">&nbsp;Unknown&nbsp;&nbsp;&nbsp;&nbsp;</label>
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
				@if (session('alert'))
    				<div class="col-md-12 alert alert-danger" style="text-align: center">
        				{{ session('alert') }}
    				</div>
				@endif
			</div>
			</div>
		</div>
				<section class="section_gap_top food-gallery-area">
					<div class="main_title">
						<h1>New Product Analayzes</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
						dolore
						magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
						</p>
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
									</div>
								@endforeach
							@endisset
						</div>
					</div>
					<br>
					<br>
					<br>
					<div class="main_title">
						<h1>Recommended Products</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
						dolore
						magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
						</p>
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
									</div>
								@endforeach
							@endisset
						</div>
					</div>
				</section>
		<!--================ Start Breakfast Area =================-->

		<!--================ End Breakfast Area =================-->

		<!--================ Start Lunch Area =================-->

		<!--================ End Lunch Area =================-->

		<!--================ Start Food Gallery Area =================-->

		<!--================ End Food Gallery Area =================-->
<br>

		<!--================ Start Reservstion Area =================-->

		<!--================ End Reservstion Area =================-->

		<!--================ Start Chef Area =================-->
		<!-- <div class="chef-area section_gap_top">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="left-chef">
							<img class="img-fluid" src="img/chef/chef1.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<div class="left-content">
							<h1>Daily Food Courses with Drinks </h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
							<img src="img/chef/signature.png" alt="">
						</div>
					</div>
				</div>
				<div class="row chef-items">
					<div class="col-lg-12 offset-lg-1">
						<div class="row">

							<div class="col-lg-2 col-md-5">
								<div class="single-chef-item">
									<a href="img/food/food5.jpg" class="img-popup"><img src="img/chef/item1.png" alt=""></a>
								</div>
							</div>

							<div class="col-lg-2 col-md-5">
								<div class="single-chef-item">
									<a href="img/food/food6.jpg" class="img-popup"><img src="img/chef/item2.png" alt=""></a>
								</div>
							</div>

							<div class="col-lg-2 col-md-5">
								<div class="single-chef-item">
									<a href="img/food/food7.jpg" class="img-popup"><img src="img/chef/item3.png" alt=""></a>
								</div>
							</div>

							<div class="col-lg-2 col-md-5">
								<div class="single-chef-item">
									<a href="img/food/food8.jpg" class="img-popup"><img src="img/chef/item4.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--================ End Chef Area =================-->

<br>
<br>

		<!--================ Start Brands Area =================-->
		<section class="brands-area">
			<div class="container">
				<div class="row text-center">
					<div class="col top">
						<div class="counter">
							<!-- <i class="fa fa-users fa-2x"></i> -->
							<img src="img/user-icon.png" style="height:50px; width:75px;">
							<p class="count-text ">More Than</p>
							<h2 class="timer count-title count-number" data-to="10000" data-speed="1500" style="color:white;"></h2>
							<p class="count-text ">Visitors On Pages</p>
						</div>
					</div>
					<div class="col top">
						<div class="counter">
							<!-- <i class="fa fa-apple fa-2x"></i> -->
							<img src="img/bl-logo.png" style="height:50px; width:50px;">
							<p class="count-text ">More Than</p>
							<h2 class="timer count-title count-number" data-to="1700" data-speed="1500" style="color:white;"></h2>
							<p class="count-text ">Verified Products</p>
						</div>
					</div>
					<div class="col top">
						<div class="counter">
							<!-- <i class="fa fa-android fa-2x"></i> -->
							<img src="img/download-icon.png" style="height:50px; width:50px;">
							<p class="count-text ">More Than</p>
							<h2 class="timer count-title count-number" data-to="11900" data-speed="1500" style="color:white;"></h2>
							<p class="count-text ">Downloads</p>
						</div>
					</div>
					<div class="col top">
						<div class="counter">
							<!-- <i class="fa fa-facebook-square fa-2x"></i> -->
							<img src="img/social-media.png" style="height:50px; width:75px;">
							<p class="count-text ">More Than</p>
							<h2 class="timer count-title count-number" data-to="157" data-speed="1500" style="color:white;"></h2>
							<p class="count-text ">Social Media Followers</p>
						</div>
					</div>
				</div>
				<br>
				<!-- <div class="row justify-content-center"> -->
					<!-- <div class="col-lg-7"> -->
						<!-- <div class="main_title"> -->
							<!-- <h1>In associasion with</h1> -->
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et -->
								<!-- dolore -->
								<!-- magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo -->
								<!-- consequat.</p> -->
						<!-- </div> -->
					<!-- </div> -->
				<!-- </div> -->
				<!-- <div class="row justify-content-center"> -->
					<!-- <div class="col-lg-10"> -->
						<!-- <div class="owl-carousel brand-carousel"> -->
							<!-- single-brand -->
							<!-- <div class="single-brand-item d-table"> -->
								<!-- <div class="d-table-cell"> -->
									<!-- <img src="img/logo.svg" alt=""> -->
								<!-- </div> -->
							<!-- </div> -->
							<!-- single-brand -->
							<!-- <div class="single-brand-item d-table"> -->
								<!-- <div class="d-table-cell"> -->
									<!-- <img src="img/hg.png" alt=""> -->
								<!-- </div> -->
							<!-- </div> -->
							<!-- single-brand -->
							<!-- <div class="single-brand-item d-table"> -->
								<!-- <div class="d-table-cell"> -->
									<!-- <img src="img/mhc.png" alt=""> -->
								<!-- </div> -->
							<!-- </div> -->
							<!-- single-brand -->
							<!-- <div class="single-brand-item d-table"> -->
								<!-- <div class="d-table-cell"> -->
									<!-- <img src="img/weh.jpg" alt=""> -->
								<!-- </div> -->
							<!-- </div> -->
							<!-- single-brand -->
							<!-- <div class="single-brand-item d-table"> -->
								<!-- <div class="d-table-cell"> -->
									<!-- <img src="img/ieathalal.png" alt=""> -->
								<!-- </div> -->
							<!-- </div> -->
							<!-- single-brand -->

							<!-- single-brand -->
							<!-- <div class="single-brand-item d-table"> -->
								<!-- <div class="d-table-cell"> -->
									<!-- <img src="img/brands/logo3.png" alt=""> -->
								<!-- </div> -->
							<!-- </div> -->
						<!-- </div> -->
					<!-- </div> -->
				<!-- </div> -->
			</div>
		</section>
		<!--================ End Brands Area =================-->
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
										<input class="form-control" name="EMAIL" placeholder="Your email address" onfocus="this.placeholder = 'Your email address'" onblur="this.placeholder = 'Your email address'"
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
					<!-- <div class="col-lg-6"> -->
						<!-- <p class="footer-text m-0"> -->
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<!-- </div> -->
					<!-- <div class="col-lg-2">
						<div class="social-icons">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div> -->
				</div>

			</div>
		</footer>
		<!--================ Start Footer Area =================-->
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>
<script>
(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};

		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);

			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;

			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};

			$self.data('countTo', data);

			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);

			// initialize the element with the starting value
			render(value);

			function updateTimer() {
				value += increment;
				loopCount++;

				render(value);

				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}

				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;

					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}

			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};

	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });

  // start all the timers
  $('.timer').each(count);

  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
</script>
