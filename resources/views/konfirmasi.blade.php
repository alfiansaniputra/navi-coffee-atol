@extends('template')

@section('title', 'Cart')
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
<div class="container pt-5">
	<h4><center>Checkout Belanja</center></h4><br>
<!-- <button type="submit">submit</button> -->
		
</div>
@endsection