@extends('ta')
@section('title')
{{request()->segment(count(request()->segments()))}}
@endsection
@section('content')

<div class="flexbox mb-4">
  <div class="flexbox">
<a class="mb-2 mr-2 btn btn-primary active" href="{{route('admin.kopi-tambah')}}"><i class="fa fa-plus"></i> Tambah Data</a>
  </div>

  <div class="input-group-icon input-group-icon-left mr-3">
    <span class="input-icon input-icon-right font-16">
      <i class="ti-search">
      </i>
    </span>
    <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Search ...">
  </div>
</div>

<div class="table-responsive row">
  
  <table style="width: 100%;" class="table table-hover table-striped table-bordered" id="datatable">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kopi</th>
					<th>jenis kopi</th>
					<th>harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody><!-- {{$i=1}} -->
				@foreach($kopi as $kopi)
				<tr>
					<td>{{$i++}}</td>
					<td>{{ $kopi['nama_kopi']}}</td>
					<td>{{ $kopi['jenis_kopi']}}</td>
					<td>@rupiah($kopi->harga)</td>
					<td>
						<a class="text-muted font-16 pl-2" href="{{url('admin/kopi/')}}/{{$kopi->id}}"><i class="fa fa-eye"></i></a>
						<a class="text-muted font-16 pl-2" href="{{url('admin/kopi/')}}/{{$kopi->id}}/edit"><i class="fa fa-pencil"></i></a>
						<a class="text-muted font-16 pl-2" href="{{url('admin/kopi/')}}/{{$kopi->id}}/delete" onclick="return confirm('Apakah anda yakin ingin menghapus data {{ $kopi['nama_kopi']}} dari sistem?')"><i class="fa fa-trash"></i></a>
					</td>

				</tr>
				@endforeach
			</tbody>
			<!-- <tfoot>
				<tr>
					<th>No</th>
					<th>Nama Kopi</th>
					<th>jenis kopi</th>
					<th>harga</th>
					<th>Aksi</th>
				</tr>
			</tfoot> -->
		</table>
</div>
<!-- <button class="btn btn-primary" onclick="window.location.href='{{url('admin/pembelian/create')}}'">Tambah data</button> -->
@endsection
