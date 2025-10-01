@extends('layouts.Admin.adm')
@section('content') 
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>
            <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  <!-- end page title -->
    <div class="row">
      <div class="col-xl-4 col-md-4">
        <div class="card border border-primary">
          <div class="card-body">
            <div class="d-flex">
              <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Jumlah Laporan Masuk</p>
                <h4 class="mb-2">{{$laporanmasuk}}</h4>
              </div>
              <div class="avatar-sm">
                <span class="avatar-title bg-light text-primary rounded-3">
                  <i class="fas fa-table"></i>  
                </span>
              </div>
            </div>                                            
          </div><!-- end cardbody -->
        </div><!-- end card -->
      </div><!-- end col -->
      <div class="col-xl-4 col-md-4">
        <div class="card  border border-success">
          <div class="card-body">
            <div class="d-flex">
              <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Jumlah Laporan Selesai</p>
                <h4 class="mb-2">{{$laporanselesai}}</h4>
              </div>
              <div class="avatar-sm">
                <span class="avatar-title bg-light text-primary rounded-3">
                  <i class="fas fa-user"></i>  
                </span>
              </div>
            </div>                                            
          </div><!-- end cardbody -->
        </div><!-- end card -->
      </div><!-- end col -->
      <div class="col-xl-4 col-md-4">
        <div class="card  border border-warning">
          <div class="card-body">
            <div class="d-flex">
              <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Jumlah Laporan Belum Selesai</p>
                <h4 class="mb-2">{{$laporanbelumselesai}}</h4>
              </div>
              <div class="avatar-sm">
                <span class="avatar-title bg-light text-primary rounded-3">
                  <i class="fas fa-user"></i>  
                </span>
              </div>
            </div>                                            
          </div><!-- end cardbody -->
        </div><!-- end card -->
      </div><!-- end col -->
                      
    </div><!-- end row -->
  </div>
</div>
          <!-- End Page-content -->
         
          <footer class="footer">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-sm-6">
                          <script>document.write(new Date().getFullYear())</script> © Upcube.
                      </div>
                      <div class="col-sm-6">
                          <div class="text-sm-end d-none d-sm-block">
                              Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                          </div>
                      </div>
                  </div>
              </div>
          </footer>
          
      </div>
      <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->

  <!-- Right Sidebar -->
  <div class="right-bar">
      <div data-simplebar class="h-100">
          <div class="rightbar-title d-flex align-items-center px-3 py-4">
      
              <h5 class="m-0 me-2">Settings</h5>

              <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                  <i class="mdi mdi-close noti-icon"></i>
              </a>
          </div>

          <!-- Settings -->
          <hr class="mt-0" />
          <h6 class="text-center mb-0">Choose Layouts</h6>

          <div class="p-4">
              <div class="mb-2">
                  <img src="{{asset('admin/images/layouts/layout-1.jpg')}}" class="img-fluid img-thumbnail" alt="layout-1">
              </div>

              <div class="form-check form-switch mb-3">
                  <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                  <label class="form-check-label" for="light-mode-switch">Light Mode</label>
              </div>

              <div class="mb-2">
                  <img src="{{asset('admin/images/layouts/layout-2.jpg')}}" class="img-fluid img-thumbnail" alt="layout-2">
              </div>
              <div class="form-check form-switch mb-3">
                  <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="{{asset('admin/css/bootstrap-dark.min.css')}}" data-appStyle="{{asset('admin/css/app-dark.min.css')}}">
                  <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
              </div>

              <div class="mb-2">
                  <img src="{{asset('admin/images/layouts/layout-3.jpg')}}" class="img-fluid img-thumbnail" alt="layout-3">
              </div>
              <div class="form-check form-switch mb-5">
                  <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="{{asset('admin/css/app-rtl.min.css')}}">
                  <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
              </div>

      
          </div>

      </div> <!-- end slimscroll-menu-->
  </div>
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>
@push('js')
<script src="{{asset('admin/js/pages/dashboard.init.js')}}"></script>
@endpush
        
@endsection