@extends('template')
@section('title')
Beranda
@endsection
@section('content')

<!-- start banner Area -->
<section class="banner-area pt-10" id="home">
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-start">
			<div class="banner-content col-lg-7">
				<h6 class="text-white text-uppercase">Perkara menyeduh kopi itu bukan hanya tentang hitungan, namun juga selera dan rasa penikmatnya yang harus dimengerti</h6>
				<h1>
					Selamat Datang<br>
					Di Navi Coffee
				</h1>
				<a href="{{url('artikel')}}" class="primary-btn text-uppercase">Lihat Promo</a>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->	
<section class="blog-area section-gap" id="blog">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">Promo Terbaru</h1>
					<p>Dapatkan Promo sampai dengan 70% melalui Aplikasi Go Food!</p>
				</div>
			</div>
		</div>						
		<div class="row">
			<div class="col-lg-6 col-md-6 single-blog">
				<img class="img-fluid" src="{{url('img/artikel1.png')}}" alt="">
				<ul class="post-tags">
					<li><a href="#">Coffe Bandung</a></li>
					<li><a href="#">Filosofi Kopi</a></li>
					<li><a href="#">Nongkrong Asik</a></li>
				</ul>
				<a href="{{url('detailartikel')}}"><h4>Filosofi Kopi, menemani senja mu #PemudaBandung</h4></a>
				<p>
					disaat-saat lagi kumpul semua dirumah kaya sekarang, enaknya ngopi bareng sekeluarga. gak perlu kemana-mana cukup dengan gofood kamu bisa nikmatin promo beli 1 gratis 1. dengan memasukan kode vocher NAVIDIRUMAH
				</p>
				<p class="post-date">
					13 April, 2020
				</p>
			</div>
			<div class="col-lg-6 col-md-6 single-blog">
				<img class="img-fluid" src="{{url('img/artikel2.png')}}" alt="">
				<ul class="post-tags">
					<li><a href="#">Kopi</a></li>
					<li><a href="#">Promo</a></li>
				</ul>
				<a href="{{url('detailartikel')}}"><h4>promo 40% buat nemenin kamu #dirumahaja</h4></a>
				<p>
					Mulut udah pengen ngopi, tapi masih sibuk perhitungan? gak usah gitu, sekarang kamu bisa nikmatin promo 40% dari Navi Coffe!
				</p>
				<p class="post-date">
					10 April, 2020
				</p>
			</div>						
		</div>
	</div>	
</section>
<!-- Start video-sec Area -->
<!-- Start menu Area -->
<section class="menu-area section-gap" id="coffee">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">Produk Navi Coffe</h1>
					<p>Berikut ini produk navi coffee untuk para penikmat dan pecinta kopi</p>
				</div>
			</div>
		</div>						
		<div class="row d-flex justify-content-center">
			<!-- START LOOPING KOPI -->
			<!-- {{$i=1}} -->
			@foreach($kopi as $kopi)
			
			
			
			<div class="col-lg-4 col-6 div-produk">
				<div class="single-menu">
					<div class="title-div justify-content-between d-flex">
						<h4>{{ $kopi['nama_kopi']}}</h4>
						<p class="price float-right">
							@rupiah($kopi->harga)
						</p>
					</div>
					<div class="container mb-3">
						<img class="img-fluid rounded" src="{{url('img/produk1.png')}}" alt="">
					</div>
					<p>
						Jenis produk : {{ $kopi['jenis_kopi']}}
					</p>	
					<center>
						<a href="{{ url('add-to-cart/'.$kopi->id) }}" class="genric-btn primary circle mr-3 btn-block mt-2" id="btn-resep"><i class="fa fa-shopping-cart"> </i> Beli</a>
					</center>
				</div>
			</div>
			@endforeach
			<!-- END LOOPING  -->
			
		</div>
	</div>	
</section>
<!-- End menu Area -->

<!-- Start gallery Area -->
<section class="gallery-area section-gap" id="gallery">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">Galeri Navi Coffe</h1>
					<p>Selamat datang di galeri kami, kumpulan dokumentasi kami untuk para pecinta kopi yang penasaran dengan isi kedai kami</p>
				</div>
			</div>
		</div>						
		<div class="row">
			<div class="col-lg-4">
				<a href="{{url('img/navi3.jpg')}}" class="img-pop-home">
					<img class="img-fluid" src="img/navi3.jpg" alt="">
				</a>	
				<a href="{{url('img/navi2.jpg')}}" class="img-pop-home">
					<img class="img-fluid" src="img/navi2.jpg" alt="">
				</a>	
			</div>
			<div class="col-lg-8">
				<a href="{{url('img/navi1.jpg')}}" class="img-pop-home">
					<img class="img-fluid" src="img/navi1.jpg" alt="">
				</a>	
				<div class="row">
					<div class="col-lg-6">
						<a href="{{url('img/g4.jpg')}}" class="img-pop-home">
							<img class="img-fluid" src="{{url('img/g4.jpg')}}" alt="">
						</a>	
					</div>
					<div class="col-lg-6">
						<a href="{{url('img/g5.jpg')}}" class="img-pop-home">
							<img class="img-fluid" src="{{url('img/g5.jpg')}}" alt="">
						</a>	
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-center mt-3">
			<a href="{{url('galeri')}}" class="genric-btn primary-border radius">Lihat Galeri</a>
		</div>
	</div>	
</section>
<!-- End gallery Area -->


@endsection