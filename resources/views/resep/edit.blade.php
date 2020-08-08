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
<form class="" action="{{url('admin/resep')}}/{{$resep->id}}" method="post" enctype="multipart/form-data">
    <div class="form-group mb-4">
        <label>Kopi<span class="text-danger">*</span></label>
        <div class="">
            <select name="id_kopi"  class="form-control" required>
                <!-- {{$i=1}} -->
                @foreach($kopi as $kopi)
                    <option name="id_kopi" value="{{ $kopi['id']}}" @if($resep['id_kopi'] == $kopi['id']) selected @endif>{{ $kopi['nama_kopi']}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group mb-4">
        <label>bahanbaku<span class="text-danger">*</span></label>
        <div class="">
            <select name="id_bahan_baku"  class="form-control" required>
                <!-- {{$i=1}} -->
                @foreach($bahanbaku as $bahanbaku)
                    <option name="id_bahan_baku" value="{{ $bahanbaku['id']}}" @if($resep['id_bahan_baku'] == $bahanbaku['id']) selected @endif>{{ $bahanbaku['nama_bahan_baku']}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group mb-4">
        <label>Qty (jumlah)</label>
        <input class="form-control" type="number"  placeholder="Qty (jumlah) / satuan gram" name="qty" value="{{$resep['qty']}}" required>
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
