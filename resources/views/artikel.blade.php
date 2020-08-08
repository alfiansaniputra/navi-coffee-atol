@extends('template')
@section('title')
Artikel
@endsection
@section('css')

@endsection
@section('content')
<section class="generic-banner relative" style="background: url('img/bannerpromo.jpg') no-repeat center center fixed;-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
-o-background-size: cover;
height: 500px;">	
<div class="container">
	<div class="row height align-items-center justify-content-center">
		<div class="col-lg-10">
			<div class="generic-banner-content">
				<h2 class="text-white">Navi Coffee bandung</h2>
				<p class="text-white">Weekend nya udah beres, gak kerasa udah hari senin lagi nih. Tetap semangat ya kalian, seperti biasa jangan lupa ngopi!</p>
			</div>							
		</div>
	</div>
</div>
</section>		
<!-- End banner Area -->

<!-- About Generic Start -->
<div class="main-wrapper container">
	<div class="section-top-border row">
		<div class="col-md-8">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="{{url('img/promo1.jpg')}}" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5 class="text-white">Filosofi Kopi Navi</h5>
							<p>Sejarah Navi Coffee berdiri sampai sekarang ...</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="{{url('img/promo2.jpg')}}" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5 class="text-white">PROMO 40% MINGGU INI!</h5>
							<p>Gunakan Kode Voucher "NAVIAJA" dapatkan diskon ...</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="{{url('img/promo3.jpg')}}" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5 class="text-white">Promo Februari Manis</h5>
							<p>Cuma Buat KAMU promo #gojekin aja dapatkan ...</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-md-4" id="set-mobile">
			<h3 class="mb-30">Artikel & Promo Navi Coffee</h3>
			<div class="row mb-3" id="set-kecil">
				<div class="col-md-3 p-0 col-3">
					<img src="img/s1.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-8 mt-sm-20 col-9">
					<a href="{{url('detailartikel')}}"><h5>PROMO 40% Di Hari Jumat, Tukarkan Kode kamu Disini!</h5></a>
				</div>
			</div>
			<div class="row mb-3" id="set-kecil">
				<div class="col-md-3 p-0 col-3">
					<img src="img/s2.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-8 mt-sm-20 col-9">
					<a href="{{url('detailartikel')}}"><h5>Kini Grab Food Hadir Untuk Anda! dapatkan Promo 100% dengan OVO!</h5></a>
				</div>
			</div>
			<div class="row mb-3" id="set-kecil">
				<div class="col-md-3 p-0 col-3">
					<img src="img/s3.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-8 mt-sm-20 col-9">
					<a href="{{url('detailartikel')}}"><h5>[review] Navi Coffee, Ngobrol asik bersama Selebgram Awkarin</h5></a>
				</div>
			</div>
			<div class="row mb-3" id="set-kecil">
				<div class="col-md-3 p-0 col-3">
					<img src="img/s4.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-8 mt-sm-20 col-9">
					<a href="{{url('detailartikel')}}"><h5>Tips And Trik Foto Instagramable dengan Navi Coffee</h5></a>
				</div>
			</div>
			<div class="row mb-3" id="set-kecil">
				<div class="col-md-3 p-0 col-3">
					<img src="img/s5.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-8 mt-sm-20 col-9">
					<a href="{{url('detailartikel')}}"><h5>PROMO Gratis Ongkir GO-Food cuma hari ini!</h5></a>
				</div>
			</div>
			<div class="row mb-3" id="set-kecil">
				<div class="col-md-3 p-0 col-3">
					<img src="img/s6.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-8 mt-sm-20 col-9">
					<a href="{{url('detailartikel')}}"><h5>Tips OOTD Instagramable Untuk Kamu yang suka nongki di caffe</h5></a>
				</div>
			</div>


		</div>
	</div>
</div>
<div class="container">
	<div class="col-lg-12 mb-4 row">
		<div class="col-3" id="grid-under">
			<img src="{{url('img/m-artikel3.jpg')}}" class="img-fluid" alt="">
		</div>
		<div class="col">
			<a href="{{url('detailartikel')}}"><h4>UNDER CONSTRUCTION</h4></a>
			<p>Sorry for the inconvenience but we're performing some maintenance the moment. If you need to you can always contact us, otherwise we'll be back online shortly!</p>
		</div>
	</div>
	<div class="col-lg-12 mb-4 row">
		<div class="col-3" id="grid-under">
			<img src="{{url('img/m-artikel1.jpg')}}" class="img-fluid" alt="">
		</div>
		<div class="col">
			<a href="{{url('detailartikel')}}"><h4>Tips OOTD Instagramable Untuk Kamu yang suka nongki di caffe</h4></a>
			<p>Penampilan yang stylish merupakan kebanggaan setiap orang. Setiap orang yang aware dengan fashion pasti tak akan pernah ketinggalan up date dan selalu mengikuti tren fashion terbaru. Sebagus apapun style fashion, sebetulnya yang terpenting adalah kenyamanan saat mengenakannya. Bagi kamu yang akan nongkrong sore ini dan masih bingung dengan outfitnya bisa banget mengintip inspirasinya di halaman-halaman berikut ini.</p>
		</div>
	</div>
	<div class="col-lg-12 mb-4 row">
		<div class="col-3" id="grid-under">
			<img src="{{url('img/m-artikel2.jpg')}}" class="img-fluid" alt="">
		</div>
		<div class="col">
			<a href="{{url('detailartikel')}}"><h4>PROMO Gratis Ongkir GO-Food cuma hari ini!</h4></a>
			<p>Saatnya pesan semua makanan dan minuman favorit kamu! LebiHepi;) lagi karena ada GRATIS ongkir. Hore!! Untuk bisa menikmati gratis ongkir, caranya pesan GoFood dengan min. Order Rp50.000 menggunakan GoPay. Berlaku di *outlet pusat (antapani - Bandung)</p>
		</div>
	</div>

</div>

@endsection