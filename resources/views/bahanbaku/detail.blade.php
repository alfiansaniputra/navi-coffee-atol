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
								<td>Nama Bahan Baku</td>
								<td>:</td>
								<td>{{ $bahanbaku['nama_bahan_baku']}}</td>
							</tr>
							<tr>
								<td>Jenis Bahan Baku (satuan)</td>
								<td>:</td>
								<td>{{ $bahanbaku['jenis_bahan_baku']}}</td>
							</tr>
							<tr>
								<td>Stok</td>
								<td>:</td>
								<td>{{ $bahanbaku['stok']}}</td>
							</tr>
							<tr>
								<td>Suplier</td>
								<td>:</td>
								<td>{{ $bahanbaku->suplier['nama_perusahaan']}}</td>
							</tr>
							<tr>
								<td>Data Dibuat</td>
								<td>:</td>
								<td>{{ $bahanbaku['created_at']}}</td>
							</tr>
							<tr>
								<td>Data Diupdate</td>
								<td>:</td>
								<td>{{ $bahanbaku['updated_at']}}</td>
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


