@extends('template')
@section('title')
Kontak
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


	<!-- Start Generic Area -->
	<section class="about-generic-area section-gap">
		<div class="container border-top-generic">
			<div class="section" style="padding-top: 0px;">
				<section id="contact" class="contact">
					<div class="container">
						<div class="section-title aos-init aos-animate" data-aos="fade-up">
							<h2>Kontak</h2>
						</div>

						<div class="row">

							<div class="col-lg-4 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
								<div class="info">
									<div class="address">
										<i class="icofont-google-map"></i>
										<h4>Alamat Kedai:</h4>
										<p>Jl. Subang No 52, Antapani, Bandung, Jawa Barat. Indonesia</p>
									</div>

									<div class="email">
										<i class="icofont-envelope"></i>
										<h4>E-Mail:</h4>
										<p>navicoffees@gmail.com</p>
									</div>

									<div class="phone">
										<i class="icofont-phone"></i>
										<h4>Tlp / WA:</h4>
										<p>(082) 240-172-388</p>
									</div>

									<div class="ig">
										<i class="icofont-phone"></i>
										<h4>Instagram :</h4>
										<p><a href="https://www.instagram.com/navicoffees/">@navicoffees</a></p>
									</div>

								</div>

							</div>

							<div class="col-lg-8 mt-5 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="200">

								<form action="#" method="post" role="form">
									<div class="form-row">
										<div class="col-md-6 form-group">
											<input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
											<div class="validate"></div>
										</div>
										<div class="col-md-6 form-group">
											<input type="email" class="form-control" name="email" id="email" placeholder="Masukan E-Mail" data-rule="email" data-msg="Please enter a valid email">
											<div class="validate"></div>
										</div>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Judul" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
										<div class="validate"></div>
									</div>
									<div class="form-group">
										<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan Anda"></textarea>
										<div class="validate"></div>
									</div>
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> -->
            <div class="text-center">
            	<button href="#" class="genric-btn primary circle arrow">Kirim Pesan<span class="lnr lnr-arrow-right"></span></button>
            </div>
        </form>

    </div>

</div>

</div>
</section>

</div>
</div>
</section>
<!-- End Generic Start -->		

@endsection