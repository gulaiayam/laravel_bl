@extends('layouts.apptailwind')

@section('title', 'Status Laporan')

@section('content')
   
   <div class="min-h-screen flex flex-col pt-[165px] items-center bg-white">
<div class="w-full px-4 flex justify-center mt-8">
    <div class="bg-white p-6 max-w-3xl w-full rounded-2xl mb-10 transition-all duration-500 shadow-2xl shadow-[#e91e6254]">
        <h3 class="text-lg md:text-xl font-semibold text-center text-gray-800 mt-6">
            Riwayat Status Laporan
        </h3>

        <div class="relative mt-8 md:mt-16">
            <div class="border-l-4 border-gray-300 ml-4 pl-4">
              @php $urut = 1; $warna="pink";@endphp
              @foreach($logs as $data)
              @php if($urut>1) $warna="gray"; @endphp

                <div class="mb-6 md:mb-8 flex items-start pt-2">
                    <div class="w-5 h-5 md:w-6 md:h-6 rounded-full flex-shrink-0 flex items-center justify-center bg-{{$warna}}-500">
                        <div class="w-2 h-2 md:w-3 md:h-3 rounded-full bg-white"></div>
                    </div>
                    <div class="ml-4">
                        
                        <p class="text-{{$warna}}-500 font-semibold text-sm md:text-md leading-tight">
                            {{$data->deskripsi_laporan}}
                        </p>
                        <p class="text-xs md:text-sm text-gray-500">Tanggal Proses {{$data->tanggal_diubah}}</p>
                         <p class="text-xs md:text-sm text-gray-500">
                        Batas Proses {{$data->tanggal_batas_proses}}
                      </p>
                    </div>
                </div>
                @php $urut++; @endphp
                @endforeach

            </div>
        </div>
    </div>
</div>
</div>

@endsection
