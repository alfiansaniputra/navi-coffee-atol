@extends('template')
@section('title')
Profil
@endsection
@section('css')

@endsection
@section('content')
<section class="generic-banner relative" style="background: url('img/banner-galeri.jpg') no-repeat center center fixed;-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
-o-background-size: cover;
height: 250px;">	
<!-- <div class="container">
	<div class="row height align-items-center justify-content-center">
		<div class="col-lg-10">
			<div class="generic-banner-content">
											<h2 class="text-white">Navi Coffee bandung</h2>
											<p class="text-white">Selamat datang di galeri kami, kumpulan dokumentasi kami untuk para pecinta kopi yang penasaran dengan isi kedai kami</p>
										</div>							
									</div>
								</div>
							</div> -->

			<div class="generic-banner-content" style="padding-top: 10%;">
											<h2 class="text-white">Navi Coffee bandung</h2>
											<p class="text-white">Selamat datang di halaman profil</p>
										</div>							
						</section>		
						<!-- End banner Area -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu Pelanggan Navi Coffee</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
        <a class="nav-link text-dark" href="{{url('profil')}}">Profil Kamu</a>
        <a class="nav-link text-dark" href="{{url('transaksi')}}">Transaksi</a>
  </div>
</nav>
						<div class="p-5">

							<!-- <nav class="nav nav-pills nav-fill">
								<a class="nav-item nav-link active" href="asd.asdjk">Pesanan</a>
								<a class="nav-item nav-link" href="#">Profil</a>
								<a class="nav-item nav-link" href="#">Riwayar Pesanan</a>
							</nav> -->
							<div class="container p-5">
								<nav  aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Pelanggan</a></li>
										<li class="breadcrumb-item active" aria-current="page">Profil</li>
									</ol>
								</nav>

								<div class="row">
									<div class="col-8 bg-white">
										<ul class="nav nav-pills mb-3 nav nav-pills nav-fill" id="pills-tab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">1. Data Alamat</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">2. Data Akun</a>
											</li>
										</ul>
										<div class="tab-content" id="pills-tabContent">
											<div class="tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
												<div class="container">
													<form class="" action="" method="post" enctype="multipart/form-data">
														<div class="form-group mb-4">
															<label>Alamat Lengkap</label>
															<textarea class="form-control" type="text"  placeholder="Alamat Lengkap" name="alamat" required name="" id="" cols="30" rows="4"></textarea>
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
																		<select name="kota" id="kabupaten" class="form-control" required>
																			<!-- <option disabled>Pilih Kabupaten</option> -->
																		</select>
																	</div>
																</div>
																<!-- /Kabupaten -->
															</div>
														</div>
														<div class="form-group mb-4">
															<label>Kode Pos</label>
															<input class="form-control" type="number"  placeholder="Kode Pos" name="nama_perusahaan" required>
														</div>

														<div class="d-flex">
															<div class="mr-auto p-0">
																<button class="btn btn-secondary btn-labeled btn-labeled-left btn-icon mr-2" onclick="window.location.href='{{ url()->previous() }}'"><span class="btn-label"><i class="fa fa-arrow-left"> </i></span> kembali</button>
															</div>
															<div class="p-0">
																<button class="btn btn-secondary mr-2" type="reset"><i class="fa fa-undo btn-icon-wrapper"></i> Reset</button>
															</div>
															<div class="p-0">
																<button class="btn btn-info mr-2" type="submit"><i class="fa fa-check btn-icon-wrapper"> </i> Submit</button>
															</div>
														</div>
														<input type="hidden" value="{{ csrf_token() }}" name="_token">
													</form>
												</div>
											</div>
											<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
												<div class="container">
													<div class="form-group mb-4">
														<label>Nama Lengkap</label>
														<input class="form-control" type="text"  placeholder="Nama Lengkap" name="nama_perusahaan" required>
													</div>

													<div class="form-group mb-4">
														<label>No HP</label>
														<input class="form-control" type="number"  placeholder="No HP" name="nama_perusahaan" required>
													</div>

													<div class="d-flex">
														<div class="mr-auto p-0">
															<button class="btn btn-secondary btn-labeled btn-labeled-left btn-icon mr-2" onclick="window.location.href='{{ url()->previous() }}'"><span class="btn-label"><i class="fa fa-arrow-left"> </i></span> kembali</button>
														</div>
														<div class="p-0">
															<button class="btn btn-secondary mr-2" type="reset"><i class="fa fa-undo btn-icon-wrapper"></i> Reset</button>
														</div>
														<div class="p-0">
															<button class="btn btn-info mr-2" type="submit"><i class="fa fa-check btn-icon-wrapper"> </i> Submit</button>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
									<!-- end col 8  -->
									<div class="col-4">
										<div class="card card-primary card-outline">
											<div class="card-body box-profile">
												<div class="text-center">
													<img class="profile-user-img img-fluid rounded-circle" src="{{url('img/komen.jpg')}}" alt="User profile picture">
												</div>

												<h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

												<p class="text-muted text-center">{{ Auth::user()->role }}</p>

												<ul class="list-group list-group-unbordered mb-3">
													<li class="list-group-item">
														<b class="text-dark">Email</b> <a class="float-right">{{ Auth::user()->email }}</a>
													</li>
													<li class="list-group-item">
														<b class="text-dark">Akun Dibuat</b> <a class="float-right">{{ Auth::user()->created_at }}</a>
													</li>
                             <!-- <li class="list-group-item">
                                 <b>Dibuat</b> <a class="float-right">2020-07-09 12:02:03</a>
                             </li> -->
                         </ul>

                         <!-- <a href="http://lokal.perkindo/akun" class="btn btn-primary btn-block text-light"><b><i class="fas fa-fw fa-cogs"></i> Akun Anda</b></a> -->
                     </div>
                     <!-- /.card-body -->
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Generic Start -->		
 @endsection
 @section('scripts')

 <script src="{{url('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
 <script src="{{url('assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
 <!-- province -->
 <script>

    // Get semua provinsi
    
    let provinces = $('#propinsi');
    let kabupaten = $('#kabupaten');
    provinces.empty();
    provinces.append('<option selected="true" disabled>Pilih Provinsi</option>');

    const url = '{{ route("province") }}';

    const provinceId = "0" ;
    const districtId = "0" ;
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
    					$('select[name="kota"]').empty();
    					$.each(data.kota_kabupaten, function(key, value) {
    						districtValue = value.id + '_' + value.nama
    						$('select[name="kota"]').append('<option value="'+ districtValue +'">'+ value.nama +'</option>');
    					});

    					kabupaten.val(districtId);

    				}
    			});
    		}
    	}
    });

    $('select[id="propinsi"]').on('change', function() {
    	var stateID = $(this).val();
    	$('select[name="kota"]').empty();
    	if(stateID) {
    		$.ajax({
    			url: '/api/provinces/'+ stateID +'/districts',
    			type: "GET",
    			dataType: "json",
    			success:function(data) {
    				$('select[name="kota"]').empty();
    				$.each(data.kota_kabupaten, function(key, value) {
    					districtValue = value.id + '_' + value.nama;
    					$('select[name="kota"]').append('<option value="'+ districtValue +'">'+ value.nama +'</option>');
    				});
    			}
    		});
    	}
    });

</script>
@endsection