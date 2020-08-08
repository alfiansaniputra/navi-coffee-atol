@extends('template')
@section('title')
Tentang
@endsection
@section('css')

				#tentang-bg-img{
					  background: url({{url('img/g19.jpg')}}) no-repeat center;
					  background-size: cover;
					  height: 350px;
					  border-radius: 10px;
				}
				@media only screen and (max-width: 600px) {
				  #tentang-bg-img {
				  	    margin: 30px;
				  }
				}

@endsection
@section('content')
<section class="generic-banner relative" style="background: url('img/banner-tentang.jpg') no-repeat center center fixed;-webkit-background-size: cover;
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
		<div class="main-wrapper">
			
			<!-- Start video-sec Area -->
			<section class="video-sec-area pt-100" id="about">
				<div class="container">
					<div class="row justify-content-start align-items-center">
						<div class="col-lg-6 justify-content-center align-items-center d-flex" id="tentang-bg-img">
						</div>						
						<div class="col-lg-6 video-left">
							<h6>NAIKIN MOOD KAMU DENGAN NAVI COFFEE!</h6>
							<h1>Navi Coffee <br>
							Kenapa Harus Navi?</h1>
							<p><span>Kami seduh sepenuh hati buat kalian yg mau ngopi.</span></p>
							<p>
								Bukan soal banyak nya kopi, tapi soal baik nya kopi. Sederhana dan enak saja sudah cukup. Tak perlu banyak.
							</p>
							<img class="img-fluid" src="{{url('img/signature.png')}}" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End video-sec Area -->

			<!-- Start Generic Area -->
			<section class="about-generic-area section-gap">
				<div class="container border-top-generic">
					<h3 class="about-title mb-30">Tentang Terbentuknya Navi Coffee</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="img-text">
								<img src="{{url('img/a.jpg')}}" alt="" class="img-fluid float-left mr-20 mb-20">
								<p>Navi Coffee, adalah sebuah kedai kopi sederhana yang tercipta dari kami para penikmat kopi. Kedai ini lahir dari sekumpulan ide dan gagasan oleh tiga orang. Memang bisnis yang paling menguntungkan saat ini adalah di dunia kopi, tapi bukan itu yang kami cari. Yang kami cari adalah tentang bagaimana mengikat satu sama lain hanya dengan secangkir kopi. Kopi dapat mengikat persaudaraan satu sama lain, mulai dari barista kepada pelanggan, pelanggan satu sama lain. Ya, inilah yang kita inginkan bukan sekedar menikmati rasa dari secangkir kopi hangat namun perbincangan hangat yang mempererat hubungan satu sama lain.</p>
							</div>
						</div>
						<div class="col-lg-12">
							<p>Kami bertiga sudah memikirkan konsep tentang kedai kopi yang kami buat dari jauh hari sebelum terbentuknya kedai kopi ini, konsep yang kami gunakan adalah coffee and music. Kami berpikir jika menggunakan konsep ini akan sangat bagus untuk kedepannya, karna jika kita mengkolaborasikan kedua hal tersebut akan sangat mengikat minat dari masyarakat terutama mereka para penikmat kopi atau orang orang yang sekedar duduk nongkrong dengan teman. Musik mungkin sering dianggap sepele oleh kebanyakan orang, tetapi ternyata musik merupakan satu hal yang sangat penting. Musik dapat membangun atmosfer yang menyenangkan dari sebuah coffee shop. Musik yang asyik dapat membuat mereka yang datang betah untuk berlama-lama nongkrong di tempat kami. Sebaliknya, lagu-lagu yang berisik akan membuat sebuah coffee shop kehilangan sisi cozy-nya.</p>
						</div>
						<div class="col-lg-12">
							<p>Lokasi kedai ini tepatnya di jalan subang nomor 52 Antapani, Bandung. Kenapa kami memilih lokasi di daerah ini? Karena daerah ini mudah dijangkau baik dari sarana transportasi maupun kendaraan pribadi dan lokasi inimerupakan daerah yang sangat strategis. Rantai bisnis yang sangat besar di daerah ini, membuat kami tidak berpikir panjang lagi untuk memilih lokasi di daerah ini. Dan Antapani merupakan daerah di pertengahan hiruk pikuk banyak orang dalam beraktifitas. Kami ingin mereka yang telah beraktifitas panjang akan singgah untuk beristirahat di kedai kami dengan hanya menikmati secangkir kopi hangat.</p>
						</div>
						<div class="col-md-12">
							<div class="img-text">
								<img src="{{url('img/a2.jpg')}}" alt="" class="img-fluid float-left mr-20 mb-20">
								<p>Barista kami pun merupakan barista yang memang sudah terlatih dan mempunya pengalaman di bidang kopi. Mereka adalah orang orang yang terpilih untuk melayani mereka yang ingin menikmati kopi dari kami. Komunikasi merupakan hal yang sangat penting, dan mereka sudah terbiasa untuk ini. Karena komunikasi antara pelanggan dan barista adalah hal yang sangat penting. Kedai kami memang sederhana tapi kedai ini terlahir dari kami penikmat kopi. Ini semua bukan tentang rasa, tapi bagaimana mengikat hubungan antara secangkir kopi dengan penikmatnya.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Generic Start -->		
@endsection