@extends('ta')
@section('title')
{{request()->segment(count(request()->segments()))}}
@endsection
@section('content')
    
<div class="flexbox mb-4">
  <div class="flexbox">
<a class="mb-2 mr-2 btn btn-primary active" href="{{route('admin.akun-tambah')}}"><i class="fa fa-plus"></i> Tambah Data</a>
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
					<th>Nama Lenkap</th>
					<th>Alamat Email</th>
					<th>Kota</th>
					<th>No HP</th>
					<th>Hak Akses</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody><!-- {{$i=1}} -->
				@foreach($akun as $akun)
				<tr>
					<td>{{$i++}}</td>
					<td>{{ $akun['name']}}</td>
					<td>{{ $akun['email']}}</td>
					<td>{{ substr(preg_replace('/\d/', '', $akun['kota']), 1) }}</td>
					<td>{{ $akun['no_hp']}}</td>
					<td>

					@if($akun['role'] == 'admin')
					<span class="badge badge-pill badge-danger">{{$akun['role']}}</span>
					@else
					<span class="badge badge-pill badge-primary">{{$akun['role']}}</span>
					@endif
					</td>
					<td>
						<a class="text-muted font-16 pl-2" href="{{url('admin/akun/')}}/{{$akun->id}}"><i class="fa fa-eye"></i></a>
						<a class="text-muted font-16 pl-2" href="{{url('admin/akun/')}}/{{$akun->id}}/edit"><i class="fa fa-pencil"></i></a>
						<a class="text-muted font-16 pl-2" href="{{url('admin/akun/')}}/{{$akun->id}}/delete" onclick="return confirm('Apakah anda yakin ingin me reset password akun {{ $akun['name']}} dari sistem?')"><i class="fa fa-unlock-alt"></i></a>
					</td>

				</tr>
				@endforeach
			</tbody>
		</table>
</div>
@endsection
