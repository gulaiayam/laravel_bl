@extends('layouts.Admin.adm')
@section('content')
 <div id="content" class="main-content">
 <div class="page-content">
         <div class="container-fluid">
        @include('layouts.Admin.breadcrumbs')
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            @include('components.alert')
                    </div>
                            <div class="col-sm-10 col-12">
                             <h4 id="pages_title">Data Laporan</h4>
                            </div>
                           
                        </div>
                <div class="row mt-2 mb-2">
                    <div class="col-md-6"><strong>Nama</strong> : {{$laporan->nama}}</div>
                    <div class="col-md-6">NIK/NIM/NPSN : {{$laporan->no_identitas}}</div>
                     <div class="col-md-6"><strong>Universitas</strong> : {{$laporan->universitasRel->nama}}</div>
                    <div class="col-md-6">Jenis Kelamin : {{$laporan->jenis_kelamin}}</div>
                     <div class="col-md-6"><strong>Email</strong> : {{$laporan->email}}</div>
                    <div class="col-md-6">No Telp: {{$laporan->no_hp}}</div>
                     <div class="col-md-6"><strong>Jenis Identitas</strong> : {{$laporan->identitasRel->jenis_identitas}}</div>
                    <div class="col-md-6">Tanggal Kejadian : {{$laporan->tanggal_kejadian}}</div>
                    <div class="col-md-6">Kronologi Kejadian : {{$laporan->kronologi_kejadian}}</div>
                    <div class="col-md-6">Tanggal Laporan : {{$laporan->created_at}}</div>
                </div>
                <div class="row mt-4 mb-2">
                <div class="col-sm-10 col-12"><h4>Detail Log</h4></div>
                 <div class="col-sm-2 col-12">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateStatusModal">Tambah Log</button>

                            </div>
                </div>
<!-- Modal Update Laporan -->
<div class="modal fade" id="updateStatusModal" tabindex="-1" role="dialog" aria-labelledby="updateStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- Header Modal -->
      <div class="modal-header">
        <h5 class="modal-title" id="updateStatusModalLabel">Tambah Log Laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Form di dalam Modal -->
      <form action="{{ route('laporan.update', $laporan->kode_laporan) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="kode_laporan" value="{{$laporan->kode_laporan}}">
        @csrf
        @method('PUT')
        <!-- Body Modal -->
        <div class="modal-body">
          <!-- Dropdown status_laporan -->
          <div class="form-group ">
            <label for="status_laporan" class="form-label">Status Laporan</label>
            <select name="status_laporan" id="status_laporan" class="form-control">
              <option value="">Pilih status</option>
              @foreach($statuslaporan as $status)
                <option value="{{ $status->status }}" {{ (old('status_laporan', $laporan->status_laporan) == $status) ? 'selected' : '' }}>
                  {{ $status->status}}
                </option>
              @endforeach
            </select>
          </div>
          <!-- Textarea deskripsi_laporan -->
          <div class="form-group">
            <label for="deskripsi_laporan">Deskripsi Laporan</label>
            <textarea name="deskripsi_laporan" id="deskripsi_laporan" rows="3" class="form-control">{{ old('deskripsi_laporan', $laporan->deskripsi_laporan) }}</textarea>
          </div>
          <!-- Input upload file -->
          <div class="form-group">
            <label for="upload_file">Upload File Log</label>
            <input type="file" name="upload_file" id="upload_file" class="form-control-file">
          </div>
          <!-- Input tanggal batas proses -->
          <div class="form-group">
            <label for="tgl_batas_proses">Tanggal Batas Proses</label>
            <input type="date" name="tgl_batas_proses" id="tgl_batas_proses" class="form-control" 
       value="{{ old('tgl_batas_proses')}}">

          </div>
        </div>
        <!-- Footer Modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

                <table id='datatabel' class="table table-hover" style="width:100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Status Laporan</th>
                        <th>Tanggal Diubah</th>
                        <th>Deskripsi</th>
                        <th>File</th>
                        <th>Tanggal Batas Proses</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($logs as $data)
                        <tr>
                             <td>{{$loop->iteration}}</td>
                            <td>{{$data->status_laporan}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->deskripsi_laporan}}</td>
                            <td>{{$data->file}}</td>
                            <td>{{$data->tgl_batas_waktu}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

        




                </div>
                </div>
            </div>
        </div>
    </div>

   



</div>
</div>

       

    @include('components.delete-modal')
@endsection

@push('css')

@endpush


@push('js')

<script>
$( document ).ready(function() {
});
</script>
@endpush