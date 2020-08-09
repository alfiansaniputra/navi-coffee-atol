@if(Auth::user()->role == 'pelanggan')
    <script>window.location = "/";</script>
@else 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Navi - Dashboard Admin | {{request()->segment(count(request()->segments()))}}</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/toastr/toastr.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    @yield('css')
    <link href="{{url('assets/vendors/dataTables/datatables.min.css')}}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{url('assets/css/main.min.css')}}" rel="stylesheet" />
    <link href="{{url('index.css')}}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a href="index-2.html">
                    <span class="brand"><img src="{{url('logop.png')}}" alt=""></span>
                    <span class="brand-mini"><img src="{{url('logo.png')}}" alt=""></span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <span>{{ Auth::user()->name }}</span>
                            <img src="{{url('logob.jpg')}}" alt="image" />
                        </a>
                        <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-header">
                                <div class="admin-avatar">
                                    <img src="{{url('logo.png')}}" alt="image" />
                                </div>
                                <div>
                                    <h5 class="font-strong text-white">{{ Auth::user()->name }}</h5>
                                    <div>
                                        <span class="admin-badge mr-3"><i class="ti-alarm-clock mr-2"></i>30m.</span>
                                        <span class="admin-badge"><i class="ti-lock mr-2"></i>Safe Mode</span>
                                    </div>
                                </div>
                            </div>
                            <div class="admin-menu-content">
                                <div class="d-flex justify-content-between mt-2">
                                    <a class="text-muted text-sm" href="javascript:;">{{ Auth::user()->email }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                                    <button type="submit" class="d-flex align-items-center btn btn-lin">Logout<i class="ti-shift-right ml-2 font-20"></i></button></a>


                                        @csrf
                                    </form>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="side-menu metismenu">
                    <li class="heading">Menu</li>
                        <li class="{{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
                            <a href="{{route('admin.index')}}"><i class="sidebar-item-icon ti-home"></i>
                                <span class="nav-label">Dashboard</span>
                            </a>
                        </li>
                        
                        <!-- <li class="{{ (request()->is('admin/akun*')) ? 'active' : '' }}">
                            <a href="{{url('admin/akun')}}"><i class="sidebar-item-icon ti-gallery"></i>
                                <span class="nav-label">akun</span>
                            </a>
                        </li> -->
                        <!-- <li class="{{ (strpos(Route::currentRouteName(), 'admin.pembelian') === 0) ? 'active' : '' }}">
                            <a href="{{url('admin/pembelian')}}"><i class="sidebar-item-icon ti-package"></i>
                                <span class="nav-label">Pembelian</span>
                            </a>
                        </li> -->
                        <!-- <li class="{{ (strpos(Route::currentRouteName(), 'admin.pembayaran') === 0) ? 'active' : '' }}">
                            <a href="{{url('admin/pembayaran')}}"><i class="sidebar-item-icon ti-package"></i>
                                <span class="nav-label">Pembayaran</span>
                            </a>
                        </li> -->
                        
                    <li class="heading">Data Pokok</li>
                        <li class="{{ (request()->is('admin/suplier*')) ? 'active' : '' }}">
                            <a href="{{url('admin/suplier')}}"><i class="sidebar-item-icon ti-package"></i>
                                <span class="nav-label">Suplier</span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('admin/kopi*')) ? 'active' : '' }}">
                            <a href="{{route('admin.kopi')}}"><i class="sidebar-item-icon ti-layout-grid2-alt"></i>
                                <span class="nav-label">Data Kopi</span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('admin/bahanbaku*')) ? 'active' : '' }}">
                            <a href="{{url('admin/bahanbaku')}}"><i class="sidebar-item-icon ti-agenda"></i>
                                <span class="nav-label">Stok Bahan Baku</span>
                            </a>
                        </li>
                        <li class="{{ (request()->is('admin/resep*')) ? 'active' : '' }}">
                            <a href="{{url('admin/resep')}}"><i class="sidebar-item-icon ti-bookmark-alt"></i>
                                <span class="nav-label">resep</span>
                            </a>
                        </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">@yield('title')</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a> </li>
                    <li class="breadcrumb-item"><a href="#">@yield('title')</a></li>
                </ol>
            </div>

        @if(Session::get('message') != NULL)
        <div class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
          <h4><i class="icon fa fa-check"></i> Notifikasi!</h4>
          {{Session::get('message')}}
        </div>
        @endif
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">@yield('title')</div>
                            </div>
                            <div class="ibox-body">
                                    @yield('content')
                            </div>
                            <div class="ibox-footer">
                                    @yield('footer')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content2')
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2019 © <b>Perkindo Jabar</b> - profesional dalam berkarya</div>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- START SEARCH PANEL-->
    <form class="search-top-bar" action="http://admincast.com/adminca/preview/admin_1/html/search.html">
        <input class="form-control search-input" type="text" placeholder="Search...">
        <button class="reset input-search-icon"><i class="ti-search"></i></button>
        <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
    </form>
    <!-- END SEARCH PANEL-->
    <!-- BEGIN THEME CONFIG PANEL-->
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- New question dialog-->
    <div class="modal fade" id="session-dialog">
        <div class="modal-dialog" style="width:400px;" role="document">
            <div class="modal-content timeout-modal">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mt-3 mb-4"><i class="ti-lock timeout-icon"></i></div>
                    <div class="text-center h4 mb-3">Set Auto Logout</div>
                    <p class="text-center mb-4">You are about to be signed out due to inactivity.<br>Select after how many minutes of inactivity you log out of the system.</p>
                    <div id="timeout-reset-box" style="display:none;">
                        <div class="form-group text-center">
                            <button class="btn btn-danger btn-fix btn-air" id="timeout-reset">Deactivate</button>
                        </div>
                    </div>
                    <div id="timeout-activate-box">
                        <form id="timeout-form" action="javascript:;">
                            <div class="form-group pl-3 pr-3 mb-4">
                                <input class="form-control form-control-line" type="text" name="timeout_count" placeholder="Minutes" id="timeout-count">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-fix btn-air" id="timeout-activate">Activate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End New question dialog-->
    <!-- QUICK SIDEBAR-->
    <!-- END QUICK SIDEBAR-->
    <!-- CORE PLUGINS-->
    <script src="{{url('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/vendors/metisMenu/dist/metisMenu.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-idletimer/dist/idle-timer.min.js')}}"></script>
    <script src="{{url('assets/vendors/toastr/toastr.min.js')}}"></script>
    <script src="{{url('assets/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{url('assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <!-- CORE SCRIPTS-->
    <script src="{{url('assets/vendors/dataTables/datatables.min.js')}}"></script>
    <script src="{{url('assets/js/app.min.js')}}"></script>
      @yield('js')
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
        

</body>
</html>
@endif