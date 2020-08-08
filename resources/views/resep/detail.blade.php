@extends('ta')
@section('title')Detail bahanbaku
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
								<td>Nama bahanbaku</td>
								<td>:</td>
								<td>{{$bahanbaku['nama_perusahaan']}}</td>
							</tr>
							<tr>
								<td>No HP bahanbaku</td>
								<td>:</td>
								<td>{{$bahanbaku['no_hp']}}</td>
							</tr>
							<tr>
								<td>Alamat bahanbaku</td>
								<td>:</td>
								<td>{{$bahanbaku['alamat']}}</td>
							</tr>
							<tr>
								<td>Provinsi</td>
								<td>:</td>
								<td>{{ substr(preg_replace('/\d/', '', $bahanbaku['provinsi']), 1) }}</td>
							</tr>
							<tr>
								<td>Kota/Kabupaten</td>
								<td>:</td>
								<td>{{ substr(preg_replace('/\d/', '', $bahanbaku['kota']), 1) }}</td>
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


