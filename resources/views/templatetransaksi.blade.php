	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{url('img/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Navi Coffee | @yield('title')</title>
		<style>
			.coklat{
				color: #b68834;
			}
			#coklat{
				color: #b68834;
			}
			.main-section{
				background-color: #F8F8F8;
			}
			.dropdown{
				float:right;
				padding-right: 30px;
			}
			.btn{
				border:0px;
				margin:10px 0px;
				box-shadow:none !important;
			}
			.dropdown .dropdown-menu{
				padding:20px;
				top:30px !important;
				width:350px !important;
				left:-110px !important;
				box-shadow:0px 5px 30px black;
			}
			.total-header-section{
				border-bottom:1px solid #d2d2d2;
			}
			.total-section p{
				margin-bottom:20px;
			}
			#cart-detail{
				padding:15px 0px;
				padding: 10px 0px;
			}
			.cart-detail-img img{
				width:70%;
				height:100%;
				padding-left:15px;
			}
			.cart-detail-product p{
				font-size: 15px;
				margin:0px;
				color:#000;
				font-weight:500;
			}
			.cart-detail .price{
				font-size:12px;
				margin-right:10px;
				font-weight:500;
			}
			.cart-detail .count{
				color:#C2C2DC;
			}
			.checkout{
				border-top:1px solid #d2d2d2;
				padding-top: 15px;
			}
			.checkout .btn-primary{
				border-radius:50px;
				height:50px;
			}
			.dropdown-menu:before{
				content: " ";
				position:absolute;
				top:-20px;
				right:50px;
				border:10px solid transparent;
				border-bottom-color:#fff;
			}

			.thumbnail {
				position: relative;
				padding: 0px;
				margin-bottom: 20px;
			}

			.thumbnail img {
				width: 100%;
			}

			.thumbnail .caption{
				margin: 7px;
			}

			.page {
				margin-top: 50px;
			}

			.btn-holder{
				text-align: center;
			}
			.text-cst{
				color: #b68834;
				font-weight: bold;
			}


			@media screen and (max-width: 600px) {
				table#cart tbody td .form-control{
					width:20%;
					display: inline !important;
				}
				.actions .btn{
					width:36%;
					margin:1.5em 0;
				}

				.actions .btn-info{
					float:left;
				}
				.actions .btn-danger{
					float:right;
				}

				table#cart thead { display: none; }
				table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
				table#cart tbody tr td:first-child { background: #333; color: #fff; }
				table#cart tbody td:before {
					content: attr(data-th); font-weight: bold;
					display: inline-block; width: 8rem;
				}



				table#cart tfoot td{display:block; }
				table#cart tfoot td .btn{display:block;}

			}
		</style>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{url('css/linearicons.css')}}">
			<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{url('css/nice-select.cs')}}s">					
			<link rel="stylesheet" href="{{url('css/animate.min.css')}}">
			<link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{url('css/main.css')}}">
			<style>
				@yield('css')
			</style>
		</head>
		<body>

			<header id="header" id="home">
				<div class="header-top">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
								<ul>
									<li>
										Senin - Jumat : 14:00 s/d 22:00
									</li>
									<li>
										Sabtu - Minggu : 14:00 s/d 24:00
									</li>
									<li>
										<a href="tel:(012) 6985 236 7512">(082) 240-172-388</a>
									</li>				  					
								</ul>
							</div>
						</div>			  					
					</div>
				</div>			  	
				<div class="container">
					<div class="row align-items-center justify-content-between d-flex">
						<div id="logo">
							<a href="index.html"><img src="{{url('img/20200408_110834-removebg-preview.png')}}" alt="" title="" /></a>
						</div>
						<nav id="nav-menu-container">
							<ul class="nav-menu">
								<li class="menu-active"><a href="{{url('/')}}">Beranda</a></li>
								<li><a href="{{url('tentang')}}">Tentang</a></li>
								<li><a href="{{url('galeri')}}">Galeri</a></li>
								<li><a href="{{url('artikel')}}">Promo & Artikel</a></li>
								<li><a href="{{url('kontak')}}">Kontak </a></li>

								<li>
									<div class="col-lg-12 col-sm-12 col-12 main-section">
										<div class="dropdown">
											<button type="button" class="btn btn-outline-light pl-2 pr-2" data-toggle="dropdown">
												<i class="fa fa-shopping-cart" aria-hidden="true"></i> Keranjang <span class="">{{ count((array) session('cart')) }}</span>
											</button>
											<div class="dropdown-menu">
												<div class="row total-header-section">
													<div class="col-lg-6 col-sm-6 col-6">
														<i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="">{{ count((array) session('cart')) }}</span>
													</div>

													<?php $total = 0 ?>
													@foreach((array) session('cart') as $id => $details)
													<?php $total += $details['harga'] * $details['quantity'] ?>
													@endforeach

													<div class="col-lg-6 col-sm-6 col-6 total-section text-right">
														<p>Total: <span class="text-cst">@rupiah($total)</span></p>
													</div>
												</div>

												@if(session('cart'))
												@foreach(session('cart') as $id => $details)
												<div class="row cart-detail" id="cart-detail">
													<div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
														<img src="{{url('img/produk1.png')}}" />
													</div>
													<div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
														<p>{{ $details['name'] }}</p>
														<span class="harga text-cst"> @rupiah($details['harga'])</span> <span class="count"> x {{ $details['quantity'] }} Pcs</span>
													</div>
												</div>
												@endforeach
												@endif
												<div class="row">
													<div class="col-lg-12 col-sm-12 col-12 text-center checkout">

														<button onclick="window.location.href='{{ url('cart') }}';" type="button" class="genric-btn btn primary-border circle  btn-block mb-2 mt-2"><i class="fa fa-shopping-cart"></i> Lihat Keranjang </button><br>
														<!-- <button onclick="window.location.href='{{ url('checkout') }}';" type="button" class="genric-btn btn primary circle  btn-block mt-1">Checkout Sekarang<span class="lnr lnr-arrow-right"></span></button> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								@guest
								<li>
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
								@if (Route::has('register'))
								<li>
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
								@endif
								@else
								<li class="menu-has-children"><a href="#">{{ Auth::user()->name }}</a>
									<ul>
										<li><a href="{{url('profil')}}">Profil Kamu</a></li>
										<li>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
												@csrf
												<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
											</form>
										</li>
									</ul>
								</li>
								
								@endguest
								<!-- <li class="menu-has-children"><a href="">Pages</a>
									<ul>
										<li><a href="generic.html">Generic</a></li>
										<li><a href="elements.html">Elements</a></li>
									</ul>
								</li> -->
							</ul>
						</nav><!-- #nav-menu-container -->		    		
					</div>
				</div>
			</header><!-- #header -->

			@yield('content')

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Tentang Kami</h6>
								<p>
									Navi Coffee, adalah sebuah kedai kopi sederhana yang tercipta dari kami para penikmat kopi. Kami siap melayani anda dengan sepenuh hati dan kami siap sajikan kopi terbaik untuk anda.
								</p>

								<h6 class="m-0">Alamat</h6>
								<p class="m-0 p-0">
									Jl. Subang No 52, Antapani, Bandung, Jawa Barat.
								</p>
								<p class="footer-text">
								Copyright 2020 All rights reserved | NAVI COFFEE</a>
							</p>								
						</div>
					</div>
					<div class="col-lg-5  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Dapatkan Promo Menarik</h6>
							<p>Tetap update promo menarik setiap minggunya!</p>
							<div class="" id="mc_embed_signup">
								<form class="form-inline">
									<input class="form-control" name="EMAIL" placeholder="Masukan E-Mail anda" placeholder="Masukan E-Mail anda" required="" type="email">
									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="" tabindex="-1" value="" type="text">
									</div>

									<div class="info pt-20"></div>
								</form>
							</div>
						</div>
					</div>						
					<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
						<div class="single-footer-widget">
							<h6>Ikuti Kami</h6>
							<p>Ikuti Sosial Media kami! </p>
							<div class="footer-social d-flex align-items-center">
								<a href="https://www.instagram.com/navicoffees/"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
					</div>							
				</div>
			</div>
		</footer>	
		<!-- End footer Area -->	
		@yield('scripts')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<!-- <script src="{{url('js/vendor/jquery-2.2.4.min.js')}}"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="{{url('js/vendor/bootstrap.min.js')}}"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="{{url('js/easing.min.js')}}"></script>			
		<script src="{{url('js/hoverIntent.js')}}"></script>
		<script src="{{url('js/superfish.min.js')}}"></script>	
		<script src="{{url('js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>	
		<script src="{{url('js/owl.carousel.min.js')}}"></script>			
		<script src="{{url('js/jquery.sticky.js')}}"></script>
		<script src="{{url('js/jquery.nice-select.min.js')}}"></script>			
		<script src="{{url('js/parallax.min.js')}}"></script>	
		<!-- <script src="js/waypoints.min.js"></script> -->
		<!-- <script src="js/jquery.counterup.min.js"></script>					 -->
		<script src="{{url('js/main.js')}}"></script>	
@if(Session::get('message') != NULL)
		<script>
			Swal.fire(
			  '{{Session::get('message')}}',
			  '',
			  'success'
			)
		</script>
@endif
	</body>
	</html>



