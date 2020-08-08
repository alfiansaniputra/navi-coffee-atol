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
<form class="" action="{{url('admin/bahanbaku')}}/{{$bahanbaku->id}}" method="post" enctype="multipart/form-data">
    <div class="form-group mb-4">
        <label>Nama Bahan Baku</label>
        <input class="form-control" type="text"  placeholder="Nama bahanbaku" name="nama_bahan_baku" value="{{$bahanbaku['nama_bahan_baku']}}" required>
    </div>
    <div class="form-group mb-4">
        <label>Jenis bahanbaku</label>
        <input class="form-control" type="text"  placeholder="jenis_bahan_baku" name="jenis_bahan_baku" value="{{$bahanbaku['jenis_bahan_baku']}}" required>
    </div>
    <div class="form-group mb-4">
        <label>Stok</label>
        <input class="form-control" type="number"  placeholder="Stok Bahan Baku" name="stok" value="{{$bahanbaku['stok']}}" required>
    </div>


        <div class="form-group mb-4">
        <label>Suplier<span class="text-danger">*</span></label>
        <div class="">
            <select name="id_suplier"  class="form-control" required>
                <!-- {{$i=1}} -->
                @foreach($suplier as $suplier)
                    <option name="id_suplier" value="{{ $suplier['id']}}" @if($bahanbaku['id_suplier'] == $suplier['id']) selected @endif required>{{ $suplier['nama_perusahaan']}}</option>
                @endforeach
            </select>
        </div>
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
