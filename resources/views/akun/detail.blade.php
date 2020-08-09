@extends('ta')
@section('title')Detail akun
@endsection
@section('content')
@if(count($errors)>0)
<ul class="text-danger">
	@foreach($errors->all() as $error)
	<li>
		{{$error}}
	</li>
	@endforeach
</ul>
@endif
<div class="row">
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-body">
				<div class="position-relative form-group">
					<table class="table">
						<tr>
							<td>Nama akun</td>
							<td>:</td>
							<td>{{$akun['name']}}</td>
						</tr>
						<tr>
							<td>Alamat E-mail</td>
							<td>:</td>
							<td>{{$akun['email']}}</td>
						</tr>
						<tr>
							<td>No Hp</td>
							<td>:</td>
							<td>{{$akun['no_hp']}}</td>
						</tr>
						<tr>
							<td>Alamat Lengkap</td>
							<td>:</td>
							<td>{{$akun['alamat']}}</td>
						</tr>
						<tr>
							<td>Provinsi</td>
							<td>:</td>
							<td>{{ substr(preg_replace('/\d/', '', $akun['provinsi']), 1) }}</td>
						</tr>
						<tr>
							<td>Kota/Kabupaten</td>
							<td>:</td>
							<td>{{ substr(preg_replace('/\d/', '', $akun['kabupaten']), 1) }}</td>
						</tr>
						<tr>
							<td>Kode Pos</td>
							<td>:</td>
							<td>{{$akun['kodepos']}}</td>
						</tr>
						<tr>
							<td>Hak Akses</td>
							<td>:</td>
							<td>
								@if($akun['role'] == 'admin')
								<span class="badge badge-pill badge-danger">{{$akun['role']}}</span>
								@else
								<span class="badge badge-pill badge-primary">{{$akun['role']}}</span>
								@endif
							</td>
						</tr>
						<tr>
							<td>Data Dibuat</td>
							<td>:</td>
							<td>{{ $akun['created_at']}}</td>
						</tr>
						<tr>
							<td>Data Diupdate</td>
							<td>:</td>
							<td>{{ $akun['updated_at']}}</td>
						</tr>
					</table>
				</div>

				<center>

				</center>
			</div>
		</div>
	</div>
</div>

@endsection

@section('footer')
<button class="btn btn-secondary btn-labeled btn-labeled-left btn-icon mr-2" onclick="window.location.href='{{ url()->previous() }}'"><span class="btn-label"><i class="ti-angle-left"></i></span>kembali</button>
@endsection


