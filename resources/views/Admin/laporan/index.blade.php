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
                             <h4 id="pages_title">Data Laporan Masuk</h4>
                            </div>
                        </div>
                <table id='datatabel' class="table table-hover" style="width:100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Laporan</th>
                        <th>Nama Pelapor</th>
                        <th>Universitas</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                         <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($laporan as $data)
                        <tr>
                             <td>{{$loop->iteration}}</td>
                            <td>{{$data->kode_laporan}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->universitasRel->nama}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->status_laporan}}</td>
                            <td>
                                <a class=""
                                   href="{{route('laporan.show', ['laporan' => $data->kode_laporan])}}" title="Lihat Log"><button  type="button" class="btn btn-warning badge " ><i class="fas fa-info"></i></button></a>&nbsp;
                                 
                                </td>

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



<!-- Required datatable js -->
<script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>


<script>
$( document ).ready(function() {
    $('#datatabel').DataTable();
    $('.show_confirm').click(function(e) {
        if(!confirm('Yakin ingin menghapus data ini?')) {
            e.preventDefault();
        }
    });
});
</script>
@endpush