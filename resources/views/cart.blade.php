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
	<h4><center>Keranjang Belanja</center></h4><br>
	<table id="cart" class="table table-hover table-condensed">
		<thead>
			<tr>
				<th style="width:50%">Product</th>
				<th style="width:10%">Harga</th>
				<th style="width:8%">Quantity</th>
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
				<td class="text-center text-strong"><strong>Total @rupiah($total)</strong></td>
			</tr>
			<tr>
				<td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Lanjutkan Belanja</a></td>
				<td colspan="2" class="hidden-xs"><a  class="btn btn-primary text-light" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-check"></i> Konfirmasi Belanja</a></td>
				<td class="hidden-xs text-center"><strong>Total @rupiah($total)</strong></td>
			</tr>
		</tfoot>
	</table>
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
			<div class="modal-body p-5">
				<div class="row">
<form action="">
					<div class="container text-center">
						<h4>Silahkan Pilih Metode Pembayaran</h4>
					</div>

					<div class="col-6">

						<label for="exampleInputEmail1">Pilih Metode Pembayaran :</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							<label class="form-check-label" for="exampleRadios1">
								OVO
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
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
</form>


				</div>
			</div>
			<div class="modal-footer d-flex justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
				<button type="submit" class="btn btn-primary"><i class="fa fa-check btn-icon-wrapper"> </i> Konfirmasi Pembayaran</button>
			</div>
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

</script>

@endsection