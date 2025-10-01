<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}">

        <!-- jquery.vectormap css -->
        <link href="{{asset('admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{asset('admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href="{{asset('admin/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        @stack('css')
    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('admin/images/logo-sm.png')}}" alt="logo-sm" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('admin/images/logo-dark.png')}}" alt="logo-dark" height="20">
                                </span>
                            </a>

                            <a href="{{url('/')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('admin/images/logo-sm.png')}}" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('admin/images/logo-light.png')}}" alt="logo-light" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>                        
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('admin/images/users/avatar-1.png')}}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">{{Auth::user()->name}}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item text-danger" href="{{route('logout')}}"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!-- User details -->
    <div class="user-profile text-center mt-3">
        <div class="">
            <img src="{{asset('admin/images/users/avatar-1.png')}}" alt="" class="avatar-md rounded-circle">
        </div>
        <div class="mt-3">
            <h4 class="font-size-16 mb-1">{{Auth::user()->name}}</h4>
           <!-- <span class="text-muted"><i class="align-middle font-size-14 text-success"></i> {{Auth::user()->username}}</span>-->
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            @if(Auth::user()->level=='superadmin')
                <li>
                <a href="{{route('dashboard')}}" class="waves-effect">
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('laporan.index')}}" class="waves-effect">
                    <span>Laporan Masuk</span>
                </a>
            </li>
             <li>
                <a href="{{route('kekerasan.index')}}" class="waves-effect">
                    <span>Jenis Kekerasan</span>
                </a>
            </li>
            <li>
                <a href="{{route('identitas.index')}}" class="waves-effect">
                    <span>Jenis Identitas</span>
                </a>
            </li>
            <li>
                <a href="{{route('universitas.index')}}" class="waves-effect">
                    <span>Universitas</span>
                </a>
            </li>
             <li>
                <a href="{{route('template.index')}}" class="waves-effect">
                    <span>Template Status</span>
                </a>
            </li>
            <li>
                <a href="{{route('user.index')}}" class="waves-effect">
                    <span>User</span>
                </a>
            </li>
            @else
           

            
            <li>
                <a href="{{route('dashboard')}}" class="waves-effect">
                    <span>Dashboard</span>
                </a>
            </li>
             <li>
                <a href="{{route('laporan.index')}}" class="waves-effect">
                    <span>Laporan Masuk</span>
                </a>
            </li>
        @endif

                
        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->

@yield('content')

<!-- JAVASCRIPT -->
<script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/libs/node-waves/waves.min.js')}}"></script>

        
        <!-- apexcharts -->
        <script src="{{asset('admin/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{asset('admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('admin/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>


        <!-- App js -->
        <script src="{{asset('admin/js/app.js')}}"></script>
@stack('js')
    </body>

</html>