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
					<h5>Tambah Data kategori </h5>
					<form action="{{url('kategori/tambah')}}" method="post">
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Nama kategori</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="" maxlength="30" name="nama_kategori" placeholder="Masukan Nama kategori">
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-sm-2 col-form-label">Harga kategori</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="" maxlength="30" name="harga_kategori" placeholder="Masukan  Harga kategori">
							</div>
						</div>
						<hr>
						<button type="submit" class="btn btn-primary float-right mr-1"><i class="fa fa-check"></i> Submit </button>
						<input type="hidden" value="{{ csrf_token() }}" name="_token">
					<a href="{{url('kategori')}}" type="button" class="btn bg-warning text-dark">
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



