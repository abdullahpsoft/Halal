{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Livewire Load More OnScroll Tutorial Laravel 8 - phpcodingstuff.com</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
      <!-- Styles -->
      <style>
         html, body {
         background-color: #fff;
         color: #636b6f;
         font-family: 'Nunito', sans-serif;
         font-weight: 200;
         height: 100vh;
         margin: 0;
         }
         .full-height {
         height: 100vh;
         }
         .flex-center {
         align-items: center;
         display: flex;
         justify-content: center;
         }
         .position-ref {
         position: relative;
         }
         .top-right {
         position: absolute;
         right: 10px;
         top: 18px;
         }
         .content {
         text-align: center;
         }
         .title {
         font-size: 84px;
         }
         .links > a {
         color: #636b6f;
         padding: 0 25px;
         font-size: 13px;
         font-weight: 600;
         letter-spacing: .1rem;
         text-decoration: none;
         text-transform: uppercase;
         }
         .m-b-md {
         margin-bottom: 30px;
         }
      </style>
   </head>
   <body>
      <div class="container mt-5">
         <div class="row justify-content-center">
            <div class="col-md-8">
               <div class="card">
                  <div class="card-header">
                     <h2>Livewire Load More OnScroll Tutorial Laravel 8 - phpcodingstuff.com</h2>
                  </div>
                  <div class="card-body">
                     @if (session()->has('message'))
                     <div class="alert alert-success">
                        {{ session('message') }}
                     </div>
                     @endif
                     @livewire('load-more-user-list')
                  </div>
               </div>
            </div>
         </div>
      </div>
      @livewireScripts
      <script type="text/javascript">
         window.onscroll = function(ev) {
         if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
         window.livewire.emit('load-more');
         }
         };
      </script>
   </body>
</html> --}}























<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="/img/favicon.png" type="image/png">
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
        <link href="multiselect.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

        <!-- main css -->
        <link rel="stylesheet" href="/css/style.css">

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
					<li class="nav-item"><a class="nav-link active" href="/categories"><i class="fa fa-list" aria-hidden="true">&nbsp;</i>Categories</a></li>
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
		
    <section class="jumbotron text-center">
        <div class="container">
			<h1 class="jumbotron-heading">{{$sub_cat->name}}</h1>
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
                <div class="col-md-2" style="padding-left: 0px">
                    <h3>Filters:</h3>
                </div>
            	<div class="col-md-10">
			
					<form action="/search-in-sub_cat/{{$sub_cat->name}}" method="POST">
						@csrf
						<div class="row col-md-12">
							<select class="col-md-2" id="filter1" name="filter1">
								<option value="">Select Filter:</option>
								<option value="All Products">All Products</option>						
								<option value="Harmless">Harmless</option>
								<option value="Controversial">Controversial</option>
								<option value="Unknown">Unkonwn</option>
								<option value="Certified">Certified</option>						
							</select>
							{{-- <div class="col-md-1"></div> --}}
							<div class="input-group col-md-10">
								<input type="text" name="q" id="q"class="form-control" @if($q== "") placeholder="Search Products here" @else placeholder={{$q}} @endif>
								<div class="input-group-append">
								<button class="btn btn-secondary" type="submit">
									<i class="fa fa-search"></i>
								</button>
								</div>
							</div>
						</div>
					</form>
				</div>
         </div>
         {{-- @isset($sub_category) --}}
         {{-- @livewire('load-more-user-list', compact(['cat_slug'])) --}}
         @livewire('load-more-user-list',['sub_cat' => $sub_cat->name])
         {{-- <button class="btn-primary">Load More</button> --}}
         {{-- @endisset --}}
		{{-- @if(count($products)>0)
    		<p class="text-center mt-4 mb-5"><button class="load-more btn btn-dark" data-totalResult="{{$products_count}}">Load More</button></p>
    	@endif --}}
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
   <script src="multiselect.min.js"></script>
   @livewireScripts
      <script type="text/javascript">
         window.onscroll = function(ev) {
         if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
         window.livewire.emit('load-more');
         }
         };
      </script>
</body>
<script>
	
</html>
