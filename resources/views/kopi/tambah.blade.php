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



<form class="" action="{{route('admin.kopi-tambah')}}" method="post" enctype="multipart/form-data">
    <div class="form-group mb-4">
        <label>Nama Kopi</label>
        <input class="form-control" type="text"  placeholder="Nama Kopi" name="nama_kopi" required>
</div><!-- <div class="form-group mb-4">
    <label>No Urut</label>
    <input class="form-control" type="text"  placeholder="No Urut" name="nourut" required>
</div> -->
<!-- <div class="form-group mb-4">
    <label>Nama</label>
    <input class="form-control" type="text"  placeholder="nama" name="nama" required>
</div> -->
<!-- <div class="form-group mb-4">
            <label>Foto</label>
            <input class="form-control" type="file"  placeholder="gambar" name="gambar" required>
            <p class="font-italic">* 200 x 170px </p>
        </div> -->
        <div class="form-group mb-0">
            <label>Jenis Kopi</label>
            <div>
                <label class="radio radio-inline radio-info text-capitalize">
                    <input type="radio" name="jenis_kopi" checked value="arabika" required><span class="input-span"></span>arabika</label>
                    <label class="radio radio-inline radio-info text-capitalize">
                        <input type="radio" name="jenis_kopi" value="robusta" required><span class="input-span"></span>robusta</label>
                        <label class="radio radio-inline radio-info text-capitalize">
                            <input type="radio" name="jenis_kopi" value="cappucino" required><span class="input-span"></span>cappucino</label>
                            <label class="radio radio-inline radio-info text-capitalize">
                                <input type="radio" name="jenis_kopi" value="nonkopi" required><span class="input-span"></span>nonkopi</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group mb-4">
                            <label>Harga Kopi</label>
                            <input class="form-control" type="number"  placeholder="Harga Kopi" name="harga" required>
                        </div>

                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    
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