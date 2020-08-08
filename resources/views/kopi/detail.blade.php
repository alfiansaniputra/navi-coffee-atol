@extends('ta')
@section('title')Detail Kopi
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
				<h5 class="card-title">Detail Data Kopi</h5>

					<!-- <div class="position-relative form-group">
						<label for="exampleEmail" class="">Nama Kopi</label>
						<input name="nama_kopi" id="exampleEmail" placeholder="Nama Kopi" type="text" class="form-control-plaintext" required value="{{ $kopi['nama_kopi']}}" readonly>
					</div> -->

					<div class="position-relative form-group">
						<table class="table">
							<tr>
								<td>Nama Kopi</td>
								<td>:</td>
								<td>{{$kopi['nama_kopi']}}</td>
							</tr>
							<tr>
								<td>Jenis Kopi</td>
								<td>:</td>
								<td>{{$kopi['jenis_kopi']}}</td>
							</tr>
							<tr>
								<td>Harga Kopi</td>
								<td>:</td>
								<td>@rupiah($kopi->harga)</td>
							</tr>
						</table>
						<!-- <label for="exampleEmail" class="">Jenis Kopi</label> -->
						<!-- <div>
							<div class="custom-radio custom-control custom-control-inline">
								<input type="radio" id="exampleCustomRadio" name="jenis_kopi" value="arabika" class="custom-control-input" 
								@if($kopi['jenis_kopi']=='arabika') checked @endif
								 required>
								<label class="custom-control-label" for="exampleCustomRadio">Arabika</label>
							</div>
							<div class="custom-radio custom-control custom-control-inline">
								<input type="radio" id="exampleCustomRadio2" name="jenis_kopi" value="robusta" class="custom-control-input" 
								@if($kopi['jenis_kopi']=='robusta') checked @endif
								required>
								<label class="custom-control-label" for="exampleCustomRadio2">Robusta</label>
							</div>
							<div class="custom-radio custom-control custom-control-inline">
								<input type="radio" id="exampleCustomRadio3" name="jenis_kopi" value="cappucino" class="custom-control-input"
								@if($kopi['jenis_kopi']=='cappucino') checked @endif
								 required>
								<label class="custom-control-label" for="exampleCustomRadio3">Cappucino</label>
							</div>
							<div class="custom-radio custom-control custom-control-inline">
								<input type="radio" id="exampleCustomRadio4" name="jenis_kopi" value="nonkopi" class="custom-control-input"
								@if($kopi['jenis_kopi']=='nonkopi') checked @endif
								 required>
								<label class="custom-control-label" for="exampleCustomRadio4">Non-kopi</label>
							</div>
						</div> -->
					</div>

					<!-- <div class="position-relative form-group">
					
						<label for="exampleEmail" class="">harga Kopi</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Rp.</span>
							</div>
							<input placeholder="harga" type="number" id="harga" name="harga" class="form-control" value="{{$kopi['harga']}}"required>
						</div>
					</div> -->


					<!-- <div class="position-relative form-group">
						<label for="exampleText" class="">Text Area</label>
						<textarea name="text" id="exampleText" class="form-control"></textarea>
					</div> -->
					<!-- <div class="position-relative form-group">
						<label for="exampleFile" class="">File</label>
						<input name="file" id="exampleFile" type="file" class="form-control-file">
						<small class="form-text text-muted">This is some placeholder block-level help
							text for the above input. It's a bit lighter and easily wraps to a new
							line.
						</small>
					</div> -->

					<!-- <a class="mb-2 mr-2 btn btn-primary active" href="{{route('admin.kopi-tambah')}}"><i class="fa fa-plus"></i> Tambah Data</a> -->
					<center>

						<!-- <a href="{{route('admin.kopi')}}" class="mb-2 mr-2 btn-icon btn-square btn btn-light"><i class="lnr-arrow-left btn-icon-wrapper"> </i>Kembali</a> -->
						<!-- <button type="reset" class="mb-2 mr-2 btn-icon btn-square btn btn-danger"><i class="lnr-undo btn-icon-wrapper"> </i>Reset</button> -->
						<!-- <button type="submit" class="mb-2 mr-2 btn-icon btn-square btn btn-info"><i class="fa fa-check btn-icon-wrapper"> </i>Submit</button> -->
						<!-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> -->
          				<!-- <input type="hidden" name="_method" value="put"> -->

					</center>
			</div>
		</div>
	</div>
</div>
<!-- <script>
// Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  });
}
// Install input filters.
setInputFilter(document.getElementById("harga"), function(value) {
  return /^-?\d*$/.test(value); });
</script> -->
@endsection

                    @section('footer')
                    <button class="btn btn-secondary btn-labeled btn-labeled-left btn-icon mr-2" onclick="window.location.href='{{ url()->previous() }}'"><span class="btn-label"><i class="ti-angle-left"></i></span>kembali</button>
                    @endsection


