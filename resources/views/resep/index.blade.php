@extends('ta')
@section('title')
{{request()->segment(count(request()->segments()))}}
@endsection
@section('content')
<div class="flexbox mb-4">
  <div class="flexbox">
<a class="mb-2 mr-2 btn btn-primary active" href="{{route('admin.resep-tambah')}}"><i class="fa fa-plus"></i> Tambah Data</a>
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
					<th>id_kopi</th>
					<th>id_bahan_baku</th>
					<th>qty</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody><!-- {{$i=1}} -->
				@foreach($resep as $resep)
				<tr>
					<td>{{$i++}}</td>
					<td>{{ $resep->kopi['nama_kopi']}}</td>
					<td>{{ $resep->bahan_baku['nama_bahan_baku']}}</td>
					<td>{{ $resep['qty']}}</td>
					<td>
						<!-- <a class="text-muted font-16 pl-2" href="{{url('admin/resep/')}}/{{$resep->id}}"><i class="fa fa-eye"></i></a> -->
						<a class="text-muted font-16 pl-2" href="{{url('admin/resep/')}}/{{$resep->id}}/edit"><i class="fa fa-pencil"></i></a>
						<a class="text-muted font-16 pl-2" href="{{url('admin/resep/')}}/{{$resep->id}}/delete" onclick="return confirm('Apakah anda yakin ingin menghapus data {{ $resep['nama_resep']}} dari sistem?')"><i class="fa fa-trash"></i></a>
					</td>

				</tr>
				@endforeach
			</tbody>
		</table>
</div>
@endsection
