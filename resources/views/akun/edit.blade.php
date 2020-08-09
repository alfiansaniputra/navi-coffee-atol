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
<form  action="{{url('admin/akun')}}/{{$akun->id}}" method="post" enctype="multipart/form-data">
    <div class="form-group mb-4">
        <label>Role <span class="text-danger">*</span></label>
        <div class="">
            <select name="role"  class="form-control" required>
                <option value="admin" name="role" @if($akun['role'] == 'admin') selected @endif>Admin</option>
                <option value="pelanggan" name="role" @if($akun['role'] == 'pelanggan') selected @endif>Pelanggan</option>
            </select>
        </div>
    </div>
    <div class="form-group mb-4">
        <label>Nama Lengkap Pemilik akun</label>
        <input class="form-control" type="text"  placeholder="Nama Lengkap" name="name" value="{{$akun['name']}}" required>
    </div>
    <div class="form-group mb-4">
        <label>E-mail</label>
        <input class="form-control" type="email"  placeholder="E-mail" name="email" value="{{$akun['email']}}" required>
    </div>
    <!-- <div class="form-group mb-4">
        <label>Password</label>
        <input class="form-control" type="password"  placeholder="Password" name="password" required>
    </div> -->
    <div class="form-group mb-4">
        <label>No HP Pemilik Akun</label>
        <input class="form-control" type="number"  placeholder="No HP" name="no_hp" value="{{$akun['no_hp']}}" required>
    </div>
    <div class="form-group mb-4">
        <label>Alamat Lengkap</label>
        <textarea class="form-control" type="text"  placeholder="Alamat" name="alamat" required name="" id="" cols="30" rows="4">{{$akun['alamat']}}</textarea>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group mb-4">
            <label>Provinsi <span class="text-danger">*</span></label>
            <div class="">
                <select name="provinsi" id="propinsi" class="form-control" required>
                    <!-- <option value="" disabled>Pilih Provinsi</option> -->
                </select>
            </div>
        </div>
        <!-- /Propinsi -->
        </div>
        <div class="col-6">
                <!-- Kabupaten -->
            <div class="form-group mb-4">
                <label>Kabupaten/Kota <span class="text-danger">*</span></label>
                <div class="">
                    <select name="kabupaten" id="kabupaten" class="form-control" required>
                        <!-- <option disabled>Pilih Kabupaten</option> -->
                    </select>
                </div>
            </div>
            <!-- /Kabupaten -->
        </div>
    </div>

    <div class="form-group mb-4">
        <label>Kode Pos</label>
        <input class="form-control" type="number"  placeholder="Kode Pos" name="kodepos" value="{{$akun['kodepos']}}" required>
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
@section('js')

<!-- province -->
<script>

    // Get semua provinsi
    
    let provinces = $('#propinsi');
    let kabupaten = $('#kabupaten');
    provinces.empty();
    provinces.append('<option selected="true" disabled>Pilih Provinsi</option>');

    const url = '{{ route("province") }}';

    const provinceId = "{!! $akun['provinsi'] ? $akun['provinsi'] : 0 !!}" ;
    const districtId = "{!! $akun['kabupaten'] ? $akun['kabupaten'] : 0 !!}" ;
    var provinceValue = null;
    var districtValue = null;

    // Populate provinces with list of provinces
    $.getJSON(url, function (data) {
        $.each(data.provinsi, function (key, entry) {
            provinceValue = entry.id + '_' + entry.nama;
            provinces.append($('<option></option>').attr('value', provinceValue).text(entry.nama));
        })

        if(provinceId || districtId){

            provinces.val(provinceId);
            var stateID = provinceId;
            stateID.replace( /^\D+/g, ''); 

            if(stateID) {
                $.ajax({
                    url: '/api/provinces/'+ stateID +'/districts',
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="kabupaten"]').empty();
                        $.each(data.kota_kabupaten, function(key, value) {
                            districtValue = value.id + '_' + value.nama
                            $('select[name="kabupaten"]').append('<option value="'+ districtValue +'">'+ value.nama +'</option>');
                        });
                        
                        kabupaten.val(districtId);

                    }
                });
            }
        }
    });

        $('select[id="propinsi"]').on('change', function() {
            var stateID = $(this).val();
            $('select[name="kabupaten"]').empty();
            if(stateID) {
                $.ajax({
                    url: '/api/provinces/'+ stateID +'/districts',
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="kabupaten"]').empty();
                        $.each(data.kota_kabupaten, function(key, value) {
                            districtValue = value.id + '_' + value.nama;
                            $('select[name="kabupaten"]').append('<option value="'+ districtValue +'">'+ value.nama +'</option>');
                        });
                    }
                });
            }
        });

</script>
@endsection