@extends('ta')
@section('title')
{{request()->segment(count(request()->segments()))}}
@endsection
@section('content')
<div class="flexbox mb-4">
  <div class="flexbox">
<!-- <a class="mb-2 mr-2 btn btn-primary active" href="{{route('admin.pembelian-tambah')}}"><i class="fa fa-plus"></i> Tambah Data</a> -->
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
					<th>Nama Pembeli</th>
					<th>Total Harga</th>
					<th>Status</th>
					<th>Waktu Pembelian</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody><!-- {{$i=1}} -->
				@foreach($pembelian as $pembelian)
				<tr>
					<td>{{$i++}}</td>
					<td>{{ $pembelian->users['name']}}</td>
					<td>@rupiah($pembelian['total_harga'])</td>
					<td></td>
					<!-- <td>{{ $pembelian['no_pengiriman']}}</td> -->
					<td>{{ $pembelian['created_at']}}</td>
					<td>
						<!-- <a class="text-muted font-16 pl-2" href="{{url('admin/pembelian/')}}/{{$pembelian->id}}"><i class="fa fa-eye"></i></a> -->
						<a class="text-muted font-16 pl-2" href="{{url('admin/pembelian/')}}/{{$pembelian->id}}/edit"><i class="fa fa-pencil"></i></a>
						<a class="text-muted font-16 pl-2" href="{{url('admin/pembelian/')}}/{{$pembelian->id}}/delete" onclick="return confirm('Apakah anda yakin ingin menghapus data {{ $pembelian['nama_pembelian']}} dari sistem?')"><i class="fa fa-trash"></i></a>
					</td>

				</tr>
				@endforeach
			</tbody>
		</table>
</div>
@endsection
