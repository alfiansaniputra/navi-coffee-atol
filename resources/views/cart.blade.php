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
height: 200px;">	

<!-- <div class="container">
	<div class="row height align-items-center justify-content-center">
		<div class="col-lg-10">
			<div class="generic-banner-content">
											<h2 class="text-white">Navi Coffee bandung</h2>
											<p class="text-white">Weekend nya udah beres, gak kerasa udah hari senin lagi nih. Tetap semangat ya kalian, seperti biasa jangan lupa ngopi!</p>
										</div>							
		</div>
	</div>
</div> -->
</section>		
<!-- End banner Area -->
<div class="container pt-5">
	<h4><center>Keranjang Belanja</center></h4><br>
	<table id="cart" class="table table-hover table-condensed">
		<thead>
			<tr>
				<th style="width:50%">Product</th>
				<th style="width:10%">Harga</th>
				<th style="width:8%">Banyak</th>
				<th style="width:22%" class="text-center">Subtotal</th>
				<th style="width:10%"></th>
			</tr>
		</thead>
		<tbody>

			<?php $total = 0 ?>

			@if(session('cart'))

			@foreach(session('cart') as $id => $details)

			<?php $total += $details['harga'] * $details['quantity'] ?>

			<tr>
				<td data-th="Product">
					<div class="row">
						<div class="col-sm-3 hidden-xs"><img src="{{url('img/produk1.png')}}" width="100" height="100" class="img-responsive"/></div>
						<div class="col-sm-9">
							<h4 class="nomargin">{{ $details['name'] }}</h4>
						</div>
					</div>
				</td>
				<td data-th="harga">@rupiah($details['harga'])</td>
				<td data-th="Quantity">
					<input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
				</td>
				<td data-th="Subtotal" class="text-center">@rupiah($details['harga'] * $details['quantity'])</td>
				<td class="actions" data-th="">
					<button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
					<button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
				</td>
			</tr>
			@endforeach
			@endif

		</tbody>
		<tfoot>
			<tr class="visible-xs">
				<td class="text-right text-strong font-weight-bold" colspan="5"><strong> Total @rupiah($total)</strong></td>
			</tr>
			<script>
				var g ={{$total}};
			</script>
			
		</tfoot>
	</table>
	<div class="text-right font-weight-bold">
		<h5>Terbilang : <strong id="nominal">Total @rupiah($total)</strong></h5>
	</div>
	<center>
			<a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Lanjutkan Belanja</a>
			<a  class="btn btn-primary text-light" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-check"></i> Konfirmasi Belanja</a>
			</center>
	<div class="row mt-3 mb-5">

			

	</div>
</div>
<!-- Modal -->
<!-- <button type="button" class="btn btn-primary" >
	Launch demo modal
</button> -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Pilih Metode Pembayaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
<form action="{{url('checkout')}}" method="post">
			<div class="modal-body p-5">
				<div class="row">
					<div class="container text-center">
						<h4>Silahkan Pilih Metode Pembayaran</h4>
					</div>

					<div class="col-6">

						<label for="exampleInputEmail1">Pilih Metode Pembayaran :</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="metode_pembayaran" id="exampleRadios1" value="ovo" checked>
							<label class="form-check-label" for="exampleRadios1">
								OVO
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="metode_pembayaran" id="exampleRadios2" value="gopay">
							<label class="form-check-label" for="exampleRadios2">
								GO - Pay
							</label>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Total Harga yang Harus Dibayar :</label>
							<input class="form-control" type="text" placeholder="@rupiah($total)"  readonly>
							<small id="emailHelp" class="form-text text-muted">*sudah termasuk Ongkir dan Pajak Pendapatan 10%.</small>
						</div>
					</div>



				</div>
			</div>
			<div class="modal-footer d-flex justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
				<button type="submit" class="btn btn-primary"><i class="fa fa-check btn-icon-wrapper"> </i> Konfirmasi Pembayaran</button>
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
			</div>
			</form>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">

	$(".update-cart").click(function (e) {
		e.preventDefault();

		var ele = $(this);

		$.ajax({
			url: '{{ url('update-cart') }}',
			method: "patch",
			data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
			success: function (response) {
				window.location.reload();
			}
		});
	});

	$(".remove-from-cart").click(function (e) {
		e.preventDefault();

		var ele = $(this);

		if(confirm("Apakah Anda Yakin akan menghapus data ini?")) {
			$.ajax({
				url: '{{ url('remove-from-cart') }}',
				method: "DELETE",
				data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
				success: function (response) {
					window.location.reload();
				}
			});
		}
	});

/*! Copyright (c) 2016 Naufal Rabbani (https://github.com/BosNaufal/terbilang-js)
* Licensed Under MIT (http://opensource.org/licenses/MIT)
*
* Version 0.0.1
*
* Inspired By: http://notes.rioastamal.net/2012/03/membuat-fungsi-terbilang-pada-php.html
*/

// alert(terbilang(1555987643211111) + " Rupiah");
document.getElementById("nominal").innerHTML = (terbilang(g) + " Rupiah");
// console.log(terbilang(g) + " Rupiah");

function terbilang(a){
	var bilangan = ['','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan','Sepuluh','Sebelas'];

	// 1 - 11
	if(a < 12){
		var kalimat = bilangan[a];
	}
	// 12 - 19
	else if(a < 20){
		var kalimat = bilangan[a-10]+' Belas';
	}
	// 20 - 99
	else if(a < 100){
		var utama = a/10;
		var depan = parseInt(String(utama).substr(0,1));
		var belakang = a%10;
		var kalimat = bilangan[depan]+' Puluh '+bilangan[belakang];
	}
	// 100 - 199
	else if(a < 200){
		var kalimat = 'Seratus '+ terbilang(a - 100);
	}
	// 200 - 999
	else if(a < 1000){
		var utama = a/100;
		var depan = parseInt(String(utama).substr(0,1));
		var belakang = a%100;
		var kalimat = bilangan[depan] + ' Ratus '+ terbilang(belakang);
	}
	// 1,000 - 1,999
	else if(a < 2000){
		var kalimat = 'Seribu '+ terbilang(a - 1000);
	}
	// 2,000 - 9,999
	else if(a < 10000){
		var utama = a/1000;
		var depan = parseInt(String(utama).substr(0,1));
		var belakang = a%1000;
		var kalimat = bilangan[depan] + ' Ribu '+ terbilang(belakang);
	}
	// 10,000 - 99,999
	else if(a < 100000){
		var utama = a/100;
		var depan = parseInt(String(utama).substr(0,2));
		var belakang = a%1000;
		var kalimat = terbilang(depan) + ' Ribu '+ terbilang(belakang);
	}
	// 100,000 - 999,999
	else if(a < 1000000){
		var utama = a/1000;
		var depan = parseInt(String(utama).substr(0,3));
		var belakang = a%1000;
		var kalimat = terbilang(depan) + ' Ribu '+ terbilang(belakang);
	}
	// 1,000,000 - 	99,999,999
	else if(a < 100000000){
		var utama = a/1000000;
		var depan = parseInt(String(utama).substr(0,4));
		var belakang = a%1000000;
		var kalimat = terbilang(depan) + ' Juta '+ terbilang(belakang);
	}
	else if(a < 1000000000){
		var utama = a/1000000;
		var depan = parseInt(String(utama).substr(0,4));
		var belakang = a%1000000;
		var kalimat = terbilang(depan) + ' Juta '+ terbilang(belakang);
	}
	else if(a < 10000000000){
		var utama = a/1000000000;
		var depan = parseInt(String(utama).substr(0,1));
		var belakang = a%1000000000;
		var kalimat = terbilang(depan) + ' Milyar '+ terbilang(belakang);
	}
	else if(a < 100000000000){
		var utama = a/1000000000;
		var depan = parseInt(String(utama).substr(0,2));
		var belakang = a%1000000000;
		var kalimat = terbilang(depan) + ' Milyar '+ terbilang(belakang);
	}
	else if(a < 1000000000000){
		var utama = a/1000000000;
		var depan = parseInt(String(utama).substr(0,3));
		var belakang = a%1000000000;
		var kalimat = terbilang(depan) + ' Milyar '+ terbilang(belakang);
	}
	else if(a < 10000000000000){
		var utama = a/10000000000;
		var depan = parseInt(String(utama).substr(0,1));
		var belakang = a%10000000000;
		var kalimat = terbilang(depan) + ' Triliun '+ terbilang(belakang);
	}
	else if(a < 100000000000000){
		var utama = a/1000000000000;
		var depan = parseInt(String(utama).substr(0,2));
		var belakang = a%1000000000000;
		var kalimat = terbilang(depan) + ' Triliun '+ terbilang(belakang);
	}

	else if(a < 1000000000000000){
		var utama = a/1000000000000;
		var depan = parseInt(String(utama).substr(0,3));
		var belakang = a%1000000000000;
		var kalimat = terbilang(depan) + ' Triliun '+ terbilang(belakang);
	}

  else if(a < 10000000000000000){
		var utama = a/1000000000000000;
		var depan = parseInt(String(utama).substr(0,1));
		var belakang = a%1000000000000000;
		var kalimat = terbilang(depan) + ' Kuadriliun '+ terbilang(belakang);
	}

	var pisah = kalimat.split(' ');
	var full = [];
	for(var i=0;i<pisah.length;i++){
	 if(pisah[i] != ""){full.push(pisah[i]);}
	}
	return full.join(' ');
}
</script>

@endsection