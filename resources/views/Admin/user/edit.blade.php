@extends('layouts.Admin.adm')
@section('content')
<div id="content" class="main-content">
<div class="page-content">
        <div class="container-fluid">
            @include('layouts.Admin.breadcrumbs')
           <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing layout-top-spacing">
                <form class="card" method="POST" action="{{route('user.update', ['user' => $user])}}">
                    @csrf
                    @method('PUT')
                    <div class="card">
                    <div class="card-body row g-3">
                         <h5 id="pages_title">Edit User</h5>
                      @include('components.alert')
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-placeholder">Nama <code>(Wajib diisi)</code></label>
                                <input required name="name" type="text" class="form-control" value="{{$useredit->name}}"
                                       id="nama">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-placeholder">Username <span class="ms-2"   data-bs-toggle="tooltip"  data-bs-placement="right"  title="Digunakan untuk login"> <i class="fas fa-question-circle"></i></span><code>(Wajib diisi)</code></label>
                                <input required value="{{$useredit->username}}" name="username" type="text" class="form-control" placeholder="Username"
                                       id="username">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-placeholder">Email <code>(Wajib diisi)</code></label>
                                <input required value="{{$useredit->email}}" name="email" type="email" class="form-control" placeholder="Email@domain.com" id="email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="select">Role <code>(Wajib diisi)</code></label>
                                <select name="role" required class="form-control" id="select" value="{{old('role') ?? $roles->first()->id}}">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-placeholder">Password <code>(Wajib diisi)</code>
<span class="ms-2"   data-bs-toggle="tooltip"  data-bs-placement="right"  title="(Minimal 8 karakter dan harus gabungan huruf besar, huruf kecil, angka, simbol)"> <i class="fas fa-question-circle"></i></span>
                                </label>
                                <input required type="password" name="password" class="form-control"
                                       placeholder="***********"
                                       id="pass1">
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
                        <a href="{{\Illuminate\Support\Facades\URL::previous()}}" class="btn btn-w-lg btn-secondary"
                           type="reset">Batal</a>
                        <button class="btn btn-w-lg btn-primary" type="submit">Simpan</button>
                    </footer>

                </form>

            </div>
        </div>
    </div>
@endsection
