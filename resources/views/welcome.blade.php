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
    <link href="multiselect.css" rel="stylesheet">
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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function () {
            $("#test").CreateMultiCheckBox({ });
        });
    </script>
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
                <li class="nav-item"><a class="nav-link" href="/categories"><i class="fa fa-list" aria-hidden="true">&nbsp;</i> Categories</a></li>
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
                <div class="col-md-1" style="padding-left: 0px">
                    <h3>Filters:</h3>
                </div>
                <div class="col-md-10">

                    <form action="/search" method="POST">
                        @csrf
                        <div class="row col-md-12">
                            <div class="" id="d2" name="d2">
                                <select id="test" name="test" style="height: 150px; width: 150px;" >
                                    @foreach($stores as $store)
                                        <option value="{{$store->id}}">&nbsp{{$store->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <select class="col-md-2" id="filter1" name="filter1" style="height: 40px;">
                                <option value="">Select Filter:</option>
                                <option value="All Products">All Products</option>
                                {{-- <option value="Categories">Categories</option> --}}
                                {{-- <option value="Shops">Shops</option> --}}
                                <option value="Certified">Certified</option>
                                <option value="Controversial">Controversial</option>
                                <option value="Harmless">Harmless</option>
                                <option value="UnKnown">UnKnown</option>

                            </select>

                            {{-- <div class="" id="d2" name="d2">
                                <select class="" id="filter2" name="filter2" style="height: 100px;" multiple>
                                    <option value="">Select Store:</option>
                                    @foreach($stores as $store)
                                        <option value="{{$store->id}}">{{$store->name}}</option>
                                    @endforeach
                                </select>
                            </div> --}}

                            <div class="" id="d3" name="d3">
                                <select class="" id="filter3" name="filter3" style="height: 40px;" onchange="check1()">
                                    <option value="">Select Category:</option>
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->name}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="hidden" id="d4" name="d4">
                                <select class="" id="filter4" name="filter4" style="height: 40px;">
                                    <option value="">Select Sub-Category</option>
                                    @foreach($eat as $eat)
                                        <option value="{{$eat->name}}">{{$eat->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="hidden" id="d5" name="d5">
                                <select class="" id="filter5" name="filter5" style="height: 40px;">
                                    <option value="">Select Sub-Category</option>
                                    @foreach($drink as $drink)
                                        <option value="{{$drink->name}}">{{$drink->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="hidden" id="d6" name="d6" style="height: 40px;">
                                <select class="" id="filter6" name="filter6">
                                    <option value="">Select Sub-Category</option>
                                    @foreach($nf as $nf)
                                        <option value="{{$nf->name}}">{{$nf->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" name="q" id="q"class="form-control" placeholder="Search Products here">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @if (session('alert'))
                <div class="col-md-12 alert alert-danger" style="text-align: center">
                    {{ session('alert') }}
                </div>
            @endif
        </div>
        {{-- </div> --}}
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
                                            <img class="card-img-top" src="img/placeholder-product.jpg" style="  height:189px;" alt="Card image cap">
                                        @endif

                                        <div class="card-body">
                                            <h4 class="card-title" style="height: 50px;"><a href="product-detail/{{$product->id}}"  class="c-title" title="View Product">{{$product->name}}</a></h4>
                                            <div class="row" style="">
                                                @if($product->alcohol == 0)
                                                    <label for="image1" style="padding-left: 0px; color:green">Alcohol: No</label>
                                                    <img src="/img/no.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->alcohol == 1)
                                                    <label for="image1" style="padding-left: 0px; color: red">Alcohol: Yes</label>
                                                    <img src="/img/yes.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->alcohol == 2)
                                                    <label for="image1" style="padding-left: 0px; color: orange">Alcohol: Controversial</label>
                                                    <img src="/img/controversial.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->alcohol == 3)
                                                    <label for="image1" style="padding-left: 0px; color: #25b7d3">Alcohol: No Information</label>
                                                    <img src="/img/unknown.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                            </div>

                                            <div class="row" style="">
                                                @if($product->animal_additive == 0)
                                                    <label for="image1" style="padding-left: 0px; color:green">Animal Add: No</label>
                                                    <img src="/img/no.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->animal_additive == 1)
                                                    <label for="image1" style="padding-left: 0px; color: red">Animal Add: Yes</label>
                                                    <img src="/img/yes.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->animal_additive == 2)
                                                    <label for="image1" style="padding-left: 0px; color: orange">Animal Add: Controversial</label>
                                                    <img src="/img/controversial.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->animal_additive == 3)
                                                    <label for="image1" style="padding-left: 0px; color: #25b7d3">Animal Add: No Information</label>
                                                    <img src="/img/unknown.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                            </div>
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
                                            <img class="card-img-top" src="img/placeholder-product.jpg" style="  height:189px;" alt="Card image cap">
                                        @endif
                                        <div class="card-body">
                                            <h4 class="card-title" style="height: 50px;"><a href="product-detail/{{$product->id}}" class="c-title" title="View Product">{{$product->name}}</a></h4>
                                            <div class="row" style="">
                                                @if($product->alcohol == 0)
                                                    <label for="image1" style="padding-left: 0px; color:green">Alcohol: No</label>
                                                    <img src="/img/no.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->alcohol == 1)
                                                    <label for="image1" style="padding-left: 0px; color: red">Alcohol: Yes</label>
                                                    <img src="/img/yes.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->alcohol == 2)
                                                    <label for="image1" style="padding-left: 0px; color: orange">Alcohol: Controversial</label>
                                                    <img src="/img/controversial.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->alcohol == 3)
                                                    <label for="image1" style="padding-left: 0px; color: #25b7d3">Alcohol: No Information</label>
                                                    <img src="/img/unknown.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                            </div>

                                            <div class="row" style="">
                                                @if($product->animal_additive == 0)
                                                    <label for="image1" style="padding-left: 0px; color:green">Animal Add: No</label>
                                                    <img src="/img/no.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->animal_additive == 1)
                                                    <label for="image1" style="padding-left: 0px; color: red">Animal Add: Yes</label>
                                                    <img src="/img/yes.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->animal_additive == 2)
                                                    <label for="image1" style="padding-left: 0px; color: orange">Animal Add: Controversial</label>
                                                    <img src="/img/controversial.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                                @if($product->animal_additive == 3)
                                                    <label for="image1" style="padding-left: 0px; color: #25b7d3">Animal Add: No Information</label>
                                                    <img src="/img/unknown.png" name="image1" style="padding-left:90%; position:absolute; padding-top:5px max-width: 30px !important; max-height: 30px !important;">
                                                @endif
                                            </div>
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
<script src="multiselect.min.js"></script>
</body>

</html>
<script>
    $(document).ready(function () {
        $(document).on("click", ".MultiCheckBox", function () {
            var detail = $(this).next();
            detail.show();
        });

        $(document).on("click", ".MultiCheckBoxDetailHeader input", function (e) {
            e.stopPropagation();
            var hc = $(this).prop("checked");
            $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", hc);
            $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
        });

        $(document).on("click", ".MultiCheckBoxDetailHeader", function (e) {
            var inp = $(this).find("input");
            var chk = inp.prop("checked");
            inp.prop("checked", !chk);
            $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", !chk);
            $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
        });

        $(document).on("click", ".MultiCheckBoxDetail .cont input", function (e) {
            e.stopPropagation();
            $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();

            var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
            $(".MultiCheckBoxDetailHeader input").prop("checked", val);
        });

        $(document).on("click", ".MultiCheckBoxDetail .cont", function (e) {
            var inp = $(this).find("input");
            var chk = inp.prop("checked");
            inp.prop("checked", !chk);

            var multiCheckBoxDetail = $(this).closest(".MultiCheckBoxDetail");
            var multiCheckBoxDetailBody = $(this).closest(".MultiCheckBoxDetailBody");
            multiCheckBoxDetail.next().UpdateSelect();

            var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
            $(".MultiCheckBoxDetailHeader input").prop("checked", val);
        });

        $(document).mouseup(function (e) {
            var container = $(".MultiCheckBoxDetail");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        });
    });

    var defaultMultiCheckBoxOption = { width: '220px', defaultText: 'Select Below', height: '200px' };

    jQuery.fn.extend({
        CreateMultiCheckBox: function (options) {

            var localOption = {};
            localOption.width = (options != null && options.width != null && options.width != undefined) ? options.width : defaultMultiCheckBoxOption.width;
            localOption.defaultText = (options != null && options.defaultText != null && options.defaultText != undefined) ? options.defaultText : defaultMultiCheckBoxOption.defaultText;
            localOption.height = (options != null && options.height != null && options.height != undefined) ? options.height : defaultMultiCheckBoxOption.height;

            this.hide();
            this.attr("multiple", "multiple");
            var divSel = $("<div class='MultiCheckBox'>" + localOption.defaultText + "<span class='k-icon k-i-arrow-60-down'><svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='sort-down' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512' class='svg-inline--fa fa-sort-down fa-w-10 fa-2x'><path fill='currentColor' d='M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z' class=''></path></svg></span></div>").insertBefore(this);
            divSel.css({ "width": localOption.width });

            var detail = $("<div class='MultiCheckBoxDetail'><div class='MultiCheckBoxDetailHeader'><input type='checkbox' class='mulinput' value='-1982' /><div>Select All</div></div><div class='MultiCheckBoxDetailBody'></div></div>").insertAfter(divSel);
            detail.css({ "width": parseInt(options.width) + 10, "max-height": localOption.height });
            var multiCheckBoxDetailBody = detail.find(".MultiCheckBoxDetailBody");

            this.find("option").each(function () {
                var val = $(this).attr("value");

                if (val == undefined)
                    val = '';

                multiCheckBoxDetailBody.append("<div class='cont'><div><input type='checkbox' class='mulinput' value='" + val + "' /></div><div>" + $(this).text() + "</div></div>");
            });

            multiCheckBoxDetailBody.css("max-height", (parseInt($(".MultiCheckBoxDetail").css("max-height")) - 28) + "px");
        },
        UpdateSelect: function () {
            var arr = [];

            this.prev().find(".mulinput:checked").each(function () {
                arr.push($(this).val());
            });

            this.val(arr);
        },
    });
</script>
<script>
    function myFunction() {
        document.multiselect('#filter2');
    }
    function check1() {
        var val3 = document.getElementById('filter3').value;
        if(val3=='Eat')
        {
            $(document).ready(function() {
                $("div#d4").removeClass("hidden");
                $("div#d4").addClass("display");
            });
        }
        else {
            $(document).ready(function() {
                $("div#d4").removeClass("display");
                $("div#d4").addClass("hidden");
            });
        }
        if(val3=='Drink')
        {
            $(document).ready(function() {
                $("div#d5").removeClass("hidden");
                $("div#d5").addClass("display");
            });
        }
        else {
            $(document).ready(function() {
                $("div#d5").removeClass("display");
                $("div#d5").addClass("hidden");
            });
        }
        if(val3=='Non-Food')
        {
            $(document).ready(function() {
                $("div#d6").removeClass("hidden");
                $("div#d6").addClass("display");
            });
        }
        else {
            $(document).ready(function() {
                $("div#d6").removeClass("display");
                $("div#d6").addClass("hidden");
            });
        }
    }
    function check() {
        var val = document.getElementById('filter1').value;
        if(val=='Shops') {
            $(document).ready(function() {
                $("div#d2").removeClass("hidden");
                $("div#d2").addClass("display");
            });
        }
        else {
            $(document).ready(function() {
                $("div#d2").removeClass("display");
                $("div#d2").addClass("hidden");
            });
        }
        if(val=='Categories') {
            $(document).ready(function() {
                $("div#d3").removeClass("hidden");
                $("div#d3").addClass("display");

            });
        }
        else {
            $(document).ready(function() {
                $("div#d3").removeClass("display");
                $("div#d3").addClass("hidden");
            });
        }
    }



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
