<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="/BahanStudy/css/bootstrap.min.css" rel="stylesheet">
    <link href="/BahanStudy/css/font-awesome.min.css" rel="stylesheet">
    <link href="/BahanStudy/css/prettyPhoto.css" rel="stylesheet">
    <link href="/BahanStudy/css/price-range.css" rel="stylesheet">
    <link href="/BahanStudy/css/animate.css" rel="stylesheet">
	<link href="/BahanStudy/css/main.css" rel="stylesheet">
	<link href="/BahanStudy/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/BahanStudy/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/BahanStudy/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/BahanStudy/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/BahanStudy/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<?php
		$id_user = Session::get('id_user');
		
		?>
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="/BahanStudy/images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{ route('checkoutList') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{ route('Keranjang') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
								<li><a href="{{ route('logout') }}"><i class="fa fa-unlock"></i> Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
								<li><a href="contact-us.html">Contact</a></li>
								<li><a href="{{ route('confirm') }}">Confirm</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						{{-- <div class="fixed-search search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div> --}}
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="/BahanStudy/images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="/BahanStudy/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="/BahanStudy/images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="/BahanStudy/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="/BahanStudy/images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="/BahanStudy/images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="shipping text-center"><!--shipping-->
							<img src="/BahanStudy/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="pull-right">
						<form action="/">
							<input type="text" placeholder="Search" name="search_produk" value="{{ Request::get('search_produk') }}"/>
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						
						
						@if ($dataBarang->isEmpty())
							<div class="alert alert-warning">
								Maaf, pencarian Anda tidak ditemukan.
							</div>
						@endif
						
						@foreach ($dataBarang as $dataBrng)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="/data_file/{{$dataBrng->gambar_produk}}" alt="error image" />
											<h2>Rp {{$dataBrng->harga_produk}}</h2>
											<p> {{$dataBrng->nama_produk}}</p>
											<?php if ($id_user != null) { ?>
												<button data-toggle="modal" data-target="#myModal"  data-id="{{ $dataBrng->id }}" class="btn btn-default add-to-cart jumlah"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											<?php }else {}?>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Rp {{$dataBrng->harga_produk}}</h2>
												<p> {{$dataBrng->nama_produk}}</p>
												<?php if ($id_user != null) { ?>
													<button data-toggle="modal" data-target="#myModal"  data-id="{{ $dataBrng->id }}" class="btn btn-default add-to-cart jumlah"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												<?php }else {}?>
											</div>
										</div>
								</div>
								<div class="choose">
									{{-- <ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul> --}}
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2024 E-IBOYY Inc. All rights reserved ❤️.</p>
					<p class="pull-right">Designed by <span>IBOYY LOVE ❤️</span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
		<form action="{{ route('addChart') }}" method="post">
		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Masukan Jumlah</h4>
		</div>
		<div class="modal-body">
			<input type="hidden" id="id_barang" class="id_barang" name="id_barang" value="3487">
			<div class="form-group">
			<label for="exampleInputEmail1">Jumlah Beli</label>
			<input type="text" class="form-control " id="jumlah" name="jumlah_barang" placeholder="Jumlah Beli">
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-default">Beli</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</div>
	</form>
	</div>
	</div>

	</div>

  
    <script src="/BahanStudy/js/jquery.js"></script>
	<script src="/BahanStudy/js/bootstrap.min.js"></script>
	<script src="/BahanStudy/js/jquery.scrollUp.min.js"></script>
	<script src="/BahanStudy/js/price-range.js"></script>
    <script src="/BahanStudy/js/jquery.prettyPhoto.js"></script>
    <script src="/BahanStudy/js/main.js"></script>

	<script type="text/javascript">
		$(".jumlah").click(function() {
		$(".id_barang").val($(this).attr('data-id'));
		});
	</script>
</body>
</html>