@extends('template')
@section('title')
Detail Artikel
@endsection
@section('css')

@endsection
@section('content')
<section class="generic-banner relative" style="background: url('img/banner-tentang.jpg') no-repeat center center fixed;-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
-o-background-size: cover;
height: 300px;">	
<div class="container">
	<div class="row height align-items-center justify-content-center">
		<div class="col-lg-10">
			<div class="generic-banner-content">
			</div>							
		</div>
	</div>
</div>
</section>		
<!-- End banner Area -->

<!-- About Generic Start -->
<div class="main-wrapper">
	<div class="container">
		<div class="row mt-100">
			<div class="col- 12 col-lg-9" style="overflow: hidden;">

				<h3>promo 40% buat nemenin kamu #dirumahaja</h3>



				<p>Oleh <span class="badge badge-pill badge-primary">Admin</span> | Jumat, 10 April 2020 </p>
				<img src="{{url('img/navi7.jpg')}}" alt="" class="img-fluid" style="border-radius: 10px;">
				<p>* Mitra Navi Cofee mengadakan diskon #dirumahsaja  (Foto: Admin)</p>
				<p>disaat-saat lagi kumpul semua dirumah kaya sekarang, enaknya ngopi bareng sekeluarga. gak perlu kemana-mana cukup dengan gofood kamu bisa nikmatin promo beli 1 gratis 1. dengan memasukan kode vocher NAVIDIRUMAH. cukup dari rumah saja kamu bisa nikmati 2 buah kopi dengan harga 1 kopi. tunggu apalagi, ayo pesan sekarang juga.</p>

				<p>Syarat dan ketentuan promo :<br>
					<b class="text-dark">1. Hanya berlaku pada menu Es Kopi Susu <br> </b>
					<b class="text-dark">2. Berlaku sampai dengan 25 mei 2020 <br></b>
					<b class="text-dark">3. Promo beli 1 gratis 1 Hanya pembelian melalu gofood  <br></b>
					<b class="text-dark">4. Berlaku juga kelipatan ( kelipatan 2) <br></b>
				</p>
				<p>
					Cara menggunakan kode promo 
					<b class="text-dark">1. Buka aplikasi gojek <br> </b>
					<b class="text-dark">2. Pilih menu gofood <br> </b>
					<b class="text-dark">3. Keyword Navi coffe <br> </b>
					<b class="text-dark">4. Pilih menu es kopi susu <br> </b>
					<b class="text-dark">5. Masukan kode promo NAVIDIRUMAH <br> </b>
					<b class="text-dark">6. Secara otomatis belanjaan anda berjumlah 2 dan hanya bayar 1 saja <br> </b>
					<b class="text-dark">7. Untuk pesan lebih dari 2 silahkan tambahkan jumlahnya. Jumlahnya harus kelipatan 2 <br> </b>
				</p>
				<b><i>Selamat menikmati kopi dari navi coffe. Coffe yang kita sajikan dengan penuh kenikmatan untuk pelanggan tercinta. </i></b>
				<br>
				#happyshopping #janganlupangopi
				<br><br>
				<div class="tags">
					Tags :
					<span class="badge badge-pill badge-primary">Promo</span>
					<span class="badge badge-pill badge-primary">Gojek</span>
					<span class="badge badge-pill badge-primary">#dirumahsaja</span>
					<span class="badge badge-pill badge-primary">Covid-19</span>
					<span class="badge badge-pill badge-primary">Navi Coffee</span>
				</div>
				<br>
				<div class="div">
					<h2 class="text-left">Komentar Artikel</h2>

					<div class="card">
						<div class="card-body">
							<div class="row mb-2">
								<div class="col-md-2">
									<img src="{{url('img/komen.jpg')}}" class="img img-rounded img-fluid" style="height: 70px;">
									<p class="text-secondary text-left">10 April 2020</p>
								</div>
								<div class="col-md-10">
									<p>
										<a class="float-left" href=""><strong>Riza Bachtiar</strong></a>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>

									</p>
									<div class="clearfix"></div>
									<p>artikel sangat menarik juga enak untuk di lihat , karena desain yg menarik serta saya suka juga dengan kopi</p>
									<p>
										<a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Balas</a>
										<a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Suka</a>
									</p>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-md-2">
									<img src="{{url('img/komen.jpg')}}" class="img img-rounded img-fluid" style="height: 70px;">
									<p class="text-secondary text-left">10 April 2020</p>
								</div>
								<div class="col-md-10">
									<p>
										<a class="float-left" href=""><strong>D'Tia Nugaraha</strong></a>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>

									</p>
									<div class="clearfix"></div>
									<p>Dari web ini saya jadi tau,bahwa coffie bukan tentang rasa pahit nya saja.Tetapi mengandung unsur penasaran untuk merasakan nya.Karena di lihat dari tampilan yang unik dan menarik, yang di tampilkan dari web ini,dan akan  mengundang pecinta coffie untuk merasakan seduhan coffie dengan cinta rasa yang maksimal.</p>
									<p>
										<a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Balas</a>
										<a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Suka</a>
									</p>
								</div>
							</div>
							<div class="card card-inner">
								<div class="card-body">
									<div class="row">
										<div class="col-md-2">
											<img src="{{url('img/komen.jpg')}}" class="img img-rounded img-fluid" style="height: 70px;">
											<p class="text-secondary text-left">11 April 2020</p>
										</div>
										<div class="col-md-10">
											<p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Hamdan Arief</strong></a></p>
											<p>trimakasih kaka semogha bermanfaat.</p>
											<p>
												<a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Balas</a>
												<a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Suka</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<br>
				<div class="col-lg-12">

					<h4>Posting Komentar Anda</h4><br>
					<form action="#" method="post" role="form" class="php-email-form">
						<div class="form-row">
							<div class="col-md-6 form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
								<div class="validate"></div>
							</div>
							<div class="col-md-6 form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
								<div class="validate"></div>
							</div>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Komentar anda"></textarea>
							<div class="validate"></div>
						</div>
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> -->
            <div class="text-center">
            	<a href="#" class="genric-btn primary-border e-large">Kirim</a></div>
            </form>

        </div>

    </div>
    <div class="col-md-3" id="set-mobile">
    	<h3 class="mb-30">Artikel & Promo Navi Coffee</h3>
    	<div class="row mb-3" id="set-kecil">
    		<div class="col-md-3 p-0 col-3">
    			<img src="{{url('img/s1.png')}}" alt="" class="img-fluid">
    		</div>
    		<div class="col-md-8 mt-sm-20 col-9">
    			<a href="detailartikel.html"><h5>PROMO 40% Di Hari Jumat, Tukarkan Kode kamu Disini!</h5></a>
    		</div>
    	</div>
    	<div class="row mb-3" id="set-kecil">
    		<div class="col-md-3 p-0 col-3">
    			<img src="{{url('img/s2.png')}}" alt="" class="img-fluid">
    		</div>
    		<div class="col-md-8 mt-sm-20 col-9">
    			<a href="detailartikel.html"><h5>Kini Grab Food Hadir Untuk Anda! dapatkan Promo 100% dengan OVO!</h5></a>
    		</div>
    	</div>
    	<div class="row mb-3" id="set-kecil">
    		<div class="col-md-3 p-0 col-3">
    			<img src="{{url('img/s3.png')}}" alt="" class="img-fluid">
    		</div>
    		<div class="col-md-8 mt-sm-20 col-9">
    			<a href="detailartikel.html"><h5>[review] Navi Coffee, Ngobrol asik bersama Selebgram Awkarin</h5></a>
    		</div>
    	</div>
    	<div class="row mb-3" id="set-kecil">
    		<div class="col-md-3 p-0 col-3">
    			<img src="{{url('img/s4.png')}}" alt="" class="img-fluid">
    		</div>
    		<div class="col-md-8 mt-sm-20 col-9">
    			<a href="detailartikel.html"><h5>Tips And Trik Foto Instagramable dengan Navi Coffee</h5></a>
    		</div>
    	</div>
    	<div class="row mb-3" id="set-kecil">
    		<div class="col-md-3 p-0 col-3">
    			<img src="{{url('img/s5.png')}}" alt="" class="img-fluid">
    		</div>
    		<div class="col-md-8 mt-sm-20 col-9">
    			<a href="detailartikel.html"><h5>PROMO Gratis Ongkir GO-Food cuma hari ini!</h5></a>
    		</div>
    	</div>
    	<div class="row mb-3" id="set-kecil">
    		<div class="col-md-3 p-0 col-3">
    			<img src="{{url('img/s6.png')}}" alt="" class="img-fluid">
    		</div>
    		<div class="col-md-8 mt-sm-20 col-9">
    			<a href="detailartikel.html"><h5>Tips OOTD Instagramable Untuk Kamu yang suka nongki di caffe</h5></a>
    		</div>
    	</div>


    </div>
    
</div>
</div>

</div>
<!-- Start Generic Area -->

@endsection