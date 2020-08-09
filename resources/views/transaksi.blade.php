@extends('templatetransaksi')
@section('title')
Profil
@endsection
@section('css')
/*status pengajuan(timeline)*/
ul.timeline {
list-style-type: none;
position: relative;
}
ul.timeline:before {
content: ' ';
background: #b68834;
display: inline-block;
position: absolute;
left: 29px;
width: 2px;
height: 100%;
z-index: 400;
}
ul.timeline > li {
margin: 20px 0;
padding-left: 8%;
}
ul.timeline > li:before {
content: ' ';
background: white;
display: inline-block;
position: absolute;
border-radius: 50%;
border: 3px solid #b68834;
left: 20px;
width: 20px;
height: 20px;
z-index: 400;
}
.boxlayanan{
border: 1px solid;
padding: 2%;
margin: 1% 0;
}
.container-form{
padding: 0 4%;
font-size: 12px;
color: black;
}
@endsection
@section('content')

    <link href="{{url('assets/vendors/dataTables/datatables.min.css')}}" rel="stylesheet" />
<section class="generic-banner relative" style="background: url('img/banner-galeri.jpg') no-repeat center center fixed;-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
-o-background-size: cover;
height: 250px;">	


<div class="generic-banner-content" style="padding-top: 10%;">
	<h2 class="text-white">Navi Coffee bandung</h2>
	<p class="text-white">Selamat datang di halaman Transaksi</p>
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

		</ul>
		<a class="nav-link text-dark" href="{{url('profil')}}">Profil Kamu</a>
		<a class="nav-link text-dark" href="{{url('transaksi')}}">Transaksi</a>
	</div>
</nav>
<div class="p-5 container">
<div class="containesr">
		<h4 class="mb-4">Data Transaksi pembelian Kamu :</h4>
		</div>
<div class="flexbox mb-4">

  <div class="input-group-icon input-group-icon-left mr-3">
    <span class="input-icon input-icon-right font-16">
      <i class="ti-search">
      </i>
    </span>
    <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Cari Data ...">
  </div>
</div>
	<div class="table-responsive row">
		<table style="width: 100%;" class="table table-hover table-striped table-bordered" id="datatable">
			<thead>
				<tr>
					<th>No</th>
				</tr>
			</thead>
			<tbody>
				@if(count($pembelian) < 1)
				<tr>
					<td>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Hai {{ Auth::user()->name }}!</strong> Transaksi pembelian Kamu Kosong, silahkan Order terlebih dahulu! <a href="{{url('/')}}">Order Disini!</a>.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</td>
				</tr>
				@endif<!-- {{$i=1}} -->
				@foreach($pembelian as $pembelian)
				<tr>
					<td>
						<div class="card">
							<h5 class="card-header">{{$pembelian['created_at']->format('d, M Y H:i')}} - {{$pembelian['created_at']->diffForHumans()}}</h5>
							<div class="card-body">
								<div class="row">
									<div class="col">
										ID Pembelian <br>
										<b class="font-weight-bold">{{$pembelian['id']}}</b>
									</div>
									<div class="col">
										Status <br>
										@if($pembelian['fix_order'] == 0)
										<b class="font-weight-bold">Sedang Di Proses</b>
										@else
										<b class="font-weight-bold">Selesai</b>
										@endif
									</div>
									<div class="col">
										Total Belanja: <br>
										<b class="coklat font-weight-bold">@rupiah($pembelian['total_harga'])</b>
									</div>
								</div>
								<hr>
								<div class="container pl-4 pr-4">
									@foreach($pembelian_kopi->where('id_pembelian', 1) as $pembelian_kopi)
									<div class="row mb-2">
										<div class="col">
											<div class="row">
												<div class="col-5">
													<img src="{{url('img/produk1.png')}}" class="img-fluid">
												</div>
												<div class="col">
													<h5 class="card-title">{{$pembelian_kopi->Kopi['nama_kopi']}}</h5>
													<small>@rupiah($pembelian_kopi['harga_satuan']) x {{$pembelian_kopi['jumlah']}}</small>
												</div>
											</div>
										</div>
										<div class="col">
											<p class="card-text">Total Harga Produk</p>
											<b class="coklat font-weight-bold">@rupiah($pembelian_kopi['sub_total_harga'])</b>
										</div>
										<div class="col text-right">
											<a href="{{ url('add-to-cart/'.$pembelian_kopi->Kopi['id']) }}" class="btn genric-btn primary circle ">Beli Lagi</a>
										</div>
									</div>
									@endforeach
								</div>
								
							</div>
							<div class="card-footer text-muted">
								<button  class="btn genric-btn primary-border circle " data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i> Lihat Proses</button>
							</div>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Status Proses Pembelian</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body p-5">

				<ul class="timeline">
					<li>
						<a id="coklat" target="_blank" href="#">1. Pembelian dibuat</a>
						<a id="coklat" href="#" class="float-right">{{date('d-m-Y')}}</a>
					</li>
					<li>
						<a id="coklat" href="#">2. Pembelian dikonfirmasi</a>
						<a id="coklat" href="#" class="float-right">{{date('d-m-Y')}}</a>
					</li>
					<li>
						<a id="coklat" href="#">3. Pembayaran dikonfirmasi</a>
						<a id="coklat" href="#" class="float-right">{{date('d-m-Y')}}</a>
					</li>
					<li>
						<a id="coklat" href="#">4. Pesanan sedang disiapkan</a>
						<a id="coklat" href="#" class="float-right">{{date('d-m-Y')}}</a>
					</li>
					<li>
						<a id="coklat" href="#">5. Pesanan Sedang dikirim</a>
						<a id="coklat" href="#" class="float-right">{{date('d-m-Y')}}</a>
					</li>
				</ul>
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 coklat">Data Pembeli</h6>
</div>
<div class="card-body">
<table class="table">
	<tr>
		<td>Nama Pelanggan</td>
		<td>:</td>
		<td>{{ Auth::user()->name }}</td>
	</tr>
	<tr>
		<td>Alamat Lengkap</td>
		<td>:</td>
		<td>{{ Auth::user()->alamat }}, {{ substr(preg_replace('/\d/', '', Auth::user()->kota), 1) }} {{ substr(preg_replace('/\d/', '', Auth::user()->provinsi), 1) }}. {{ Auth::user()->kodepos }}</td>
	</tr>
	<tr>
		<td>No HP</td>
		<td>:</td>
		<td>{{ Auth::user()->no_hp }}</td>
	</tr>
</table>
<!-- <a target="_blank" rel="nofollow" href="#">Lihat lebih detail →</a> -->
</div>
</div>

			</div>
			<!-- <div class="modal-footer d-flex justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
			</div> -->

		</div>
	</div>
</div>
<!-- End Generic Start -->		

    <script src="{{url('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('assets/vendors/dataTables/datatables.min.js')}}"></script>
    <script src="{{url('assets/js/app.min.js')}}"></script>
        <!-- PAGE LEVEL SCRIPTS-->
        <script>
        $(function() {
            $('#datatable').DataTable({
                pageLength: 10,
                fixedHeader: true,
                responsive: true,
                "sDom": 'rtip',
                columnDefs: [{
                    targets: 'no-sort',
                    orderable: false
                }]
            });

            var table = $('#datatable').DataTable();
            $('#key-search').on('keyup', function() {
                table.search(this.value).draw();
            });
            $('#type-filter').on('change', function() {
                table.column(4).search($(this).val()).draw();
            });
        });
    </script>

@endsection