@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Dashboard - Penjualan HP</div>

				<div class="card-body">
					<br>
					<h5>Tambah Data Barang </h5>
					<form action="{{url('barang')}}/{{$barang->id}}" method="post">
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Nama Barang</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="" maxlength="30" name="nama_barang" placeholder="Masukan Nama Barang" value="{{$barang->nama_barang}}">
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Harga Barang</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="" maxlength="30" name="harga_barang" placeholder="Masukan  Harga Barang" value="{{$barang->harga_barang}}">
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Stok Barang</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="stok_barang" placeholder="Masukan Stok Barang" value="{{$barang->stok_barang}}">
							</div>
						</div>
						<!-- <div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Pembeli</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="user_id" placeholder="Masukan Pembeli">
							</div>
						</div> -->
						<!-- <input type="hidden" class="form-control" name="user_id" placeholder="Masukan Pembeli"> -->
						<hr>
						<button type="submit" class="btn btn-primary float-right mr-1"><i class="fa fa-check"></i> Submit </button>
						<input type="hidden" value="{{ csrf_token() }}" name="_token">
          				<input type="hidden" name="_method" value="put">
					<a href="{{url('barang')}}" type="button" class="btn bg-warning text-dark">
						<i class="fa fas fa-chevron-left" aria-hidden="true"></i>
						<span class="fs-it-btn-vertical-line"></span>
					Kembali</a>
					<button style="color: white;" class="btn btn-danger cursor-pointer mr-2" type="reset"><i class="fa fa-undo"></i> Reset</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection



