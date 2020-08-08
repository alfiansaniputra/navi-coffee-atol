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
					<h5>Data kategori : </h5>

					@if ($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button> 
						<strong>{{ $message }}</strong>
					</div>
					@endif
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama kategori</th>
								<th scope="col">keterangan kategori</th>
								<th scope="col">waktu dibuat</th>
								<th scope="col">waktu di update</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody><!-- {{$i=1}} -->
							@foreach($kategori as $kategori)
							<tr>
								<th scope="row">{{$i++}}</th>
								<td>{{ $kategori->nama_kategori}}</td>
								<td>{{ $kategori->keterangan}}</td>
								<td>{{ $kategori->created_at}}</td>
								<td>{{ $kategori->updated_at}}</td>
								<td>
									<a href="{{url('kategori')}}/{{$kategori->id}}/edit">edit</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<a href="{{url('kategori/tambah')}}" type="button" class="btn bg-primary text-light"><i class="fa fa-plus" aria-hidden="true"></i><span class="fs-it-btn-vertical-line"></span>Tambah data</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection



