@extends('tad')
@section('title')
Dashboard 
@endsection
@section('content')
            <!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">
<div class="row mb-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="{{$akun}}" data-bar-color="#18C5A9" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-success" style="font-size:32px;"><i class="la la-users"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-success">{{$akun}}</h3>
                                    <div class="text-muted">Data Akun Pelanggan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="{{$pembelian}}" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                    <span class="easypie-data font-26 text-primary"><i class="ti-world"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-primary">{{$pembelian}}</h3>
                                    <div class="text-muted">Data Pembelian</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="{{$kopi}}" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-pink" style="font-size:32px;"><i class="la la-tags"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-pink">{{$kopi}}</h3>
                                    <div class="text-muted">Data Kopi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="{{$resep}}" data-bar-color="#18C5A9" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-success" style="font-size:32px;"><i class="la la-users"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-success">{{$resep}}</h3>
                                    <div class="text-muted">Data Resep</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="{{$bahan_baku}}" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                    <span class="easypie-data font-26 text-primary"><i class="ti-world"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-primary">{{$bahan_baku}}</h3>
                                    <div class="text-muted">Data Bahan Baku</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="{{$suplier}}" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-pink" style="font-size:32px;"><i class="la la-tags"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-pink">{{$suplier}}</h3>
                                    <div class="text-muted">Data Suplier</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
</div>
<!-- <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">VISITORS AGE</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"><i class="la la-upload"></i>Export</a>
                                        <a class="dropdown-item"><i class="la la-file-excel-o"></i>Download</a>
                                        <a class="dropdown-item"><i class="la la-print"></i>Print</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <div class="mb-5">
                                    <div class="flexbox-b mb-2">
                                        <span class="badge-point badge-success mr-2"></span>20-27
                                        <span class="h4 mb-0 ml-4">25%</span>
                                    </div>
                                    <div class="flexbox-b mb-2">
                                        <span class="badge-point badge-primary mr-2"></span>35-50
                                        <span class="h4 mb-0 ml-4">22%</span>
                                    </div>
                                    <div class="flexbox-b mb-2">
                                        <span class="badge-point badge-pink mr-2"></span>27-35
                                        <span class="h4 mb-0 ml-4">17%</span>
                                    </div>
                                </div>
                                <div class="ibox-fullwidth-block">
                                    <canvas id="age_chart" style="height:260px;"></canvas>
                                </div>
                            </div>
                        </div> -->


            <!-- END PAGE CONTENT-->
@endsection
