@extends('layouts.Admin.adm')
@section('content')
<div id="content" class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @include('layouts.Admin.breadcrumbs')
           <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing layout-top-spacing">
            
                <form class="card" method="POST" action="{{route('user.store')}}">
                    @csrf
                     <div class="card-body row g-3">
                     <h5 id="pages_title">Tambah User</h5>
                      @include('components.alert')
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-placeholder">Nama <code>(Wajib diisi)</code></label>
                                <input required value="{{old('name')}}" name="name" type="text" class="form-control" placeholder="Nama Lengkap"
                                       id="nama">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-placeholder">Email <code>(Wajib diisi)</code></label>
                                <input required value="{{old('email')}}" name="email" type="email" class="form-control" placeholder="Email@domain.com" id="email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="select">Level <code>(Wajib diisi)</code></label>
                                <select name="level" required class="form-control" id="level" value="">
                                   <option value=""></option> 
                                    @foreach($level as $index=>$value)
                                    
                                        <option value="{{$index}}" class="text-capitalize">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="select">Universitas</label>

                                <select name="universitas" class="form-control" id="universitas">
                                    <option value=""></option>
                                    @foreach($universitas as $dtuniv)
                                        <option value="{{$dtuniv->id}}" class="text-capitalize">{{$dtuniv->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-placeholder">Password 
                                    <span class="ms-2"   data-bs-toggle="tooltip"  data-bs-placement="right"  title="(Minimal 8 karakter dan harus gabungan huruf besar, huruf kecil, angka, simbol)"> <i class="fas fa-question-circle"></i></span>
                                    <code></code></label>
                                <input required type="password" name="password" class="form-control"
                                       placeholder="***********"
                                       id="pass1">
                                            <div id="password-strength-status"></div> <!-- Di sini meteran akan muncul -->

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-placeholder">Konfirmasi Password <code>(Wajib diisi)</code></label>
                                <input required type="password" name="password_confirmation" class="form-control"
                                       placeholder="***********"
                                       id="pass2">
                            </div>
                        </div>
                    </div>

                    <footer class="card-footer text-right">
                        <a href="{{\Illuminate\Support\Facades\URL::previous()}}" class="btn btn-w-lg btn-secondary" type="reset">Batal</a>
                        <button class="btn btn-w-lg btn-primary" type="submit">Simpan</button>
                    </footer>

                </form>

            </div>
        </div>
    </div>

@endsection
@push('css')
<link href="{{asset('admin/libs/strength-meter/css/strength-meter.min.css')}}" media="all" rel="stylesheet" type="text/css" />

@endpush

@push('js')
<script src="{{asset('admin/libs/strength-meter/js/strength-meter.min.js')}}" type="text/javascript"></script>
<script>
$( document ).ready(function() {
    $('#level').on('change', function() {
        var levelValue = $(this).val();
        if(levelValue === 'superadmin'){
            // Jika level adalah superadmin, kosongkan dan nonaktifkan select universitas
            $('#universitas').val('').attr('disabled', true);
        } else if(levelValue === 'pt'){
            // Jika level adalah pt, aktifkan select universitas
            $('#universitas').removeAttr('disabled');
        } else {
            // Untuk kondisi lain, misalnya jika ada level lain yang mengharuskan select diaktifkan
            $('#universitas').removeAttr('disabled');
        }
    });
    $("#pass1").strength({showMeter: true, toggleMask: false});
});

</script>
@endpush