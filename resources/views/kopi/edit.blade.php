@extends('ta')
@section('title')
{{request()->segment(count(request()->segments()))}}
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



<form action="{{url('admin/kopi')}}/{{$kopi->id}}" method="post">

	<div class="form-group mb-4">
		<label>Nama Kopi</label>
		<input name="nama_kopi" placeholder="Nama Kopi" type="text" class="form-control" required value="{{ $kopi['nama_kopi']}}">
	</div>
	<div class="form-group mb-4">
		<label>Jenis Kopi</label>
		<div>
			<label class="radio radio-inline radio-info text-capitalize">
				<input type="radio" name="jenis_kopi" checked value="arabika" @if($kopi['jenis_kopi']=='arabika') checked @endif required><span class="input-span"></span>arabika</label>
				<label class="radio radio-inline radio-info text-capitalize">
					<input type="radio" name="jenis_kopi" value="robusta" @if($kopi['jenis_kopi']=='robusta') checked @endif required><span class="input-span"></span>robusta</label>
					<label class="radio radio-inline radio-info text-capitalize">
						<input type="radio" name="jenis_kopi" value="cappucino" @if($kopi['jenis_kopi']=='cappucino') checked @endif required><span class="input-span"></span>cappucino</label>
						<label class="radio radio-inline radio-info text-capitalize">
							<input type="radio" name="jenis_kopi" value="nonkopi" @if($kopi['jenis_kopi']=='nonkopi') checked @endif required><span class="input-span"></span>nonkopi</label>
						</div>
					</div>

					<div class="form-group mb-4">
						<label>Harga Kopi</label>
						<input placeholder="harga" type="number" id="harga" name="harga" class="form-control" value="{{$kopi['harga']}}"required>
					</div>
					
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
					<input type="hidden" value="put" name="_method">
					@endsection
					@section('footer')
					<div class="d-flex">
						<div class="mr-auto p-0">
							<button class="btn btn-secondary btn-labeled btn-labeled-left btn-icon mr-2" onclick="window.location.href='{{ url()->previous() }}'"><span class="btn-label"><i class="ti-angle-left"></i></span>kembali</button>
						</div>
						<div class="p-0">
							<button class="btn btn-secondary mr-2" type="reset"><i class="fa fa-undo btn-icon-wrapper"></i> Reset</button>
						</div>
						<div class="p-0">
							<button class="btn btn-info mr-2" type="submit"><i class="fa fa-check btn-icon-wrapper"> </i> Submit</button>
						</div>
					</div>
				</form>
				@endsection


