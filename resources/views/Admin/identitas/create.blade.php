@extends('layouts.Admin.adm')

@section('content')
<div id="content" class="main-content">
<div class="page-content">
         <div class="container-fluid">
            @include('layouts.Admin.breadcrumbs')
           <div class="row">
           <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing layout-top-spacing">
<form class="card" method="POST" action="{{route('identitas.store')}}" enctype="multipart/form-data">
                    @csrf
                <div class="card">
                    <div class="card-body row g-3">
                    <h5 id="pages_title">Tambah Jenis Identitas</h5>
                        <div class="col-lg-12 col-12 layout-spacing layout-top-spacing">
                        <div class="tab-content" id="borderTopContent">
                                <div class="row g-3">
                                <div class="col-md-12">
                            <div class="form-group">
                                <label for="input-placeholder">Nama identitas</label>
                                <input type="text" required class="form-control" placeholder="Nama" id="input-placeholder" name="jenis_identitas" value="{{ $identitas->jenis_identitas ?? old('jenis_identitas') }}">
                            </div>
                        </div>
                                </div>  
                            </div>
                            </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area border-top-tab">
                        <div class="row g-3">
                        <footer class="card-footer text-right">
                        <a href="{{\Illuminate\Support\Facades\URL::previous()}}" class="btn btn-w-lg btn-light"
                           type="reset">Batal</a>
                        <button class="btn btn-w-lg btn-primary" type="submit">Simpan</button>
                    </footer>
                    </div>
                    </div>
                </div>
            </div>

    </div>
</form>
@endsection

@push('css')
@endpush