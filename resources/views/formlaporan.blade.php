@extends('layouts.apptailwind')

@section('title', 'Form Laporan SWYC & Satgas PPK')

@section('content')
    <div>
  <div class="flex items-center justify-center min-h-screen bg-gray-50 pt-20">
    <form class="space-y-4 max-w-4xl bg-white text-gray-900 px-8 py-12 my-10 mx-auto shadow-2xl shadow-[#e91e6254] rounded-2xl" action="{{route('submitlaporan')}}" method="post" enctype="multipart/form-data">
      @csrf

      <h2 class="text-3xl font-bold text-center mb-8">Form Pengaduan Online <br>Satgas PPKS LLDIKTI Wilayah 3 </h2>

      @if ($errors->any())
    <div class="mb-4 p-4 bg-red-100 text-red-700 border border-red-400 rounded-lg">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      <div>
        <p class="block mb-2 text-lg font-medium text-gray-900">Isi informasi dibawah ini <br>
          <span class="text-red-500 font-normal text-base">Tanda Bintang Wajib Diisi</span>
        </p>
        <div class="w-full">
          <label for="text-field" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap <span class="text-red-500">*</span>
          </label>
          <input class="bg-gray-100 text-gray-900 text-sm rounded-lg outline-none focus:ring-[#fa87ad] focus:border-[#fa87ad] block w-full px-2.5 py-4" type="text" name="nama" placeholder="Masukkan nama" required="" value="{{ old('nama') }}">
          @error('nama')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>
      </div>
      <div>
        <div class="w-full">
          <label class="block mb-2 text-sm font-medium text-gray-900">NIK/NIP/NIM <span class="text-red-500">*</span>
          </label>
          <input class="bg-gray-100 text-gray-900 text-sm rounded-lg outline-none focus:ring-[#fa87ad] focus:border-[#fa87ad] block w-full px-2.5 py-4 no-arrows" type="number" name="no_identitas" placeholder="Masukkan NIK/NIP/NIM" required="" value="{{ old('no_identitas') }}">
          @error('no_identitas')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>
      </div>
      <div class="w-full">
        <label class="block mb-2 text-sm font-medium text-gray-900">Universitas <span class="text-red-500">*</span>
        </label>
        <div class="relative">
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </div>
          <select class="bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-[#fa87ad] focus:border-[#fa87ad] block w-full px-2.5 py-4 appearance-none outline-none cursor-pointer" name="universitas" required="">
            <option value="">Pilih</option>
            @foreach($universitas as $datauniv)
    <option value="{{ $datauniv->id }}" {{ old('universitas') == $datauniv->id ? 'selected' : '' }}>
        {{ $datauniv->nama }}
    </option>
@endforeach

          </select>
          @error('universitas')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>
      </div>
      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin: <span class="text-red-500">*</span>
        </label>
        <div class="flex items-center space-x-4">
          <div class="flex items-center mb-4">
            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " type="radio" name="jenis_kelamin" required="" value="Laki-laki">
            <label class="ms-2 text-sm font-medium text-gray-900 ">Laki-laki</label>
          </div>
          <div class="flex items-center mb-4">
            <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " type="radio" name="jenis_kelamin" required="" value="Perempuan">
            <label class="ms-2 text-sm font-medium text-gray-900 ">Perempuan</label>
          </div>
          @error('jenis_kelamin')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>
      </div>
      <div>
        <div class="w-full">
          <label for="text-field" class="block mb-2 text-sm font-medium text-gray-900">Alamat Email <span class="text-red-500">*</span>
          </label>
          <input class="bg-gray-100 text-gray-900 text-sm rounded-lg outline-none focus:ring-[#fa87ad] focus:border-[#fa87ad] block w-full px-2.5 py-4" type="email" name="email" placeholder="Masukkan alamat email" required="" value="{{ old('email') }}">
          @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>
      </div>
      <div>
        <div class="w-full">
          <label class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon <span class="text-red-500">*</span>
          </label>
          <input class="bg-gray-100 text-gray-900 text-sm rounded-lg outline-none focus:ring-[#fa87ad] focus:border-[#fa87ad] block w-full px-2.5 py-4 no-arrows" type="number" name="no_hp" placeholder="Masukkan nomor telepon" required="" value="{{ old('no_hp') }}">
          @error('no_hp')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>
      </div>
      <div class="w-full">
        <label class="block mb-2 text-sm font-medium text-gray-900">Jenis Identitas <span class="text-red-500">*</span>
        </label>
        <div class="relative">
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </div>
          <select class="bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-[#fa87ad] focus:border-[#fa87ad] block w-full px-2.5 py-4 appearance-none outline-none cursor-pointer" name="jenis_identitas" required="">
            <option value="">Pilih</option>
              @foreach($identitas as $dataidentitas)
            <option value="{{$dataidentitas->id}}" {{ old('jenis_identitas') == $dataidentitas->id ? 'selected' : '' }} >{{$dataidentitas->jenis_identitas}}</option>
            @endforeach
          </select>
          @error('jenis_identitas')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>
      </div>
      <div>
        <div class="w-full">
  <label class="block mb-2 text-sm font-medium text-gray-900" for="upload_identitas-file-upload">Upload Identitas</label>
  <div class="flex items-center bg-white rounded-lg">
    <button type="button" id="uploadButton" class="rounded-lg p-2 text-white bg-blue-500 font-semibold text-sm px-4 py-4 text-center">
      Pilih File
    </button>
    <input id="upload_identitas-file-upload" type="file" name="upload_identitas" class="hidden" accept=".png,.jpg,.jpeg,.zip">
    <span id="fileName" class="ml-4 text-gray-600 cursor-pointer flex-1">Tidak ada file yang dipilih</span>
  </div>
</div>

<script>
  document.getElementById('uploadButton').addEventListener('click', function () {
    document.getElementById('upload_identitas-file-upload').click();
  });

  document.getElementById('upload_identitas-file-upload').addEventListener('change', function () {
    let fileName = this.files.length > 0 ? this.files[0].name : "Tidak ada file yang dipilih";
    document.getElementById('fileName').textContent = fileName;
  });
</script>


        <p class="ml-1 mt-1 text-sm text-gray-400">File: png, jpg, jpeg, zip (max. 1 MB).</p>
      </div>
      <div>
        <div class="w-full">
          <label for="text-field" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Kejadian <span class="text-red-500">*</span>
          </label>
          <input class="bg-gray-100 text-gray-900 text-sm rounded-lg outline-none focus:ring-[#fa87ad] focus:border-[#fa87ad] block w-full px-2.5 py-4" type="date" name="tanggal_kejadian" id="tanggal_kejadian" required="" value="{{ old('tanggal_kejadian') }}">
          @error('tanggal_kejadian')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>
        <script>
          document.addEventListener("DOMContentLoaded", function () {
    let today = new Date().toISOString().split("T")[0]; // Ambil tanggal hari ini dalam format YYYY-MM-DD
    document.getElementById("tanggal_kejadian").setAttribute("max", today);
});
</script>
      </div>
      <div>
        <div class="w-full">
          <label class="block mb-2 text-sm font-medium text-gray-900">Kronologi Kejadian <span class="text-red-500">*</span>
          </label>
          <textarea class="h-40 bg-gray-100 text-gray-900 text-sm rounded-lg outline-none focus:ring-[#fa87ad] focus:border-[#fa87ad] block w-full px-2.5 py-4" name="kronologi_kejadian" placeholder="Ceritakan kronologi kejadian anda disini...." required="">{{old('kronologi_kejadian')}}</textarea>
          @error('kronologi_kejadian')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>
      </div>
      <div>
       <div class="w-full">
  <label class="block mb-2 text-sm font-medium text-gray-900" for="upload_bukti-file-upload">
    Upload Bukti Kejadian <span class="text-red-500">*</span>
  </label>
  <div class="flex items-center bg-white rounded-lg relative">
    <button type="button" id="uploadBuktiButton" class="rounded-lg p-2 text-white bg-blue-500 font-semibold text-sm px-4 py-4 text-center">
      Pilih File
    </button>
    
    <!-- Input file disembunyikan dengan absolute dan opacity-0 agar tetap bisa divalidasi -->
    <input id="upload_bukti-file-upload" type="file" name="upload_bukti" 
      class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
      accept=".png,.jpg,.jpeg,.zip" required>

    <span id="fileNameBukti" class="ml-4 text-gray-600 cursor-pointer flex-1">
      Tidak ada file yang dipilih
    </span>
  </div>
</div>


<script>
  document.getElementById('uploadBuktiButton').addEventListener('click', function () {
    document.getElementById('upload_bukti-file-upload').click();
});

// Menampilkan nama file yang dipilih
document.getElementById('upload_bukti-file-upload').addEventListener('change', function () {
    let fileName = this.files.length > 0 ? this.files[0].name : "Tidak ada file yang dipilih";
    document.getElementById('fileNameBukti').textContent = fileName;
});

</script>

        <p class="ml-1 mt-1 text-sm text-gray-400">File: png, jpg, jpeg, zip (max. 1 MB).</p>
      </div>
      <div>
        <div class="w-full">
          <label for="text-field" class="block mb-2 text-sm font-medium text-gray-900">Lokasi Kejadian <span class="text-red-500">*</span>
          </label>
          <input class="bg-gray-100 text-gray-900 text-sm rounded-lg outline-none focus:ring-[#fa87ad] focus:border-[#fa87ad] block w-full px-2.5 py-4" type="text" name="lokasi_kejadian" placeholder="Masukkan lokasi kejadian" required="" value="{{old('lokasi_kejadian')}}">
          @error('lokasi_kejadian')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>
      </div>
      <div>
        <div class="w-full">
          <label class="block mb-2 text-sm font-medium text-gray-900">Jenis Kekerasan <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
            <select class="bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-[#fa87ad] focus:border-[#fa87ad] block w-full px-2.5 py-4 appearance-none outline-none cursor-pointer" name="jenis_kekerasan" required="">
              <option value="">Pilih</option>
              @foreach($kekerasan as $datakekerasan)
            <option value="{{$datakekerasan->id}}" {{ old('jenis_kekerasan') == $datakekerasan->id ? 'selected' : '' }}>{{$datakekerasan->tipe_kekerasan}}</option>
            @endforeach
            </select>
          </div>
        </div>
      </div>
      <div class="py-6 font-medium text-gray-900">
        <p>Kami akan memproses data yang dikumpulkan dengan pengawasan. Anda mempunyai hak akses, perbaikan, portabilitas data, penghapusan data pribadi Anda, hak untuk membatasi pemrosesan, serta hak untuk menolak pemrosesan data Anda. Anda juga berhak mengirimkan kepada kami instruksi khusus mengenai nasib data pribadi Anda setelah kematian Anda dan mengajukan keluhan kepada otoritas pengawas yang berwenang. Untuk mengetahui lebih lanjut tentang pemrosesan data pribadi Anda, hak-hak Anda, dan cara menggunakannya, silakan baca Pemberitahuan Privasi kami dengan mengeklik tautan berikut: <a class="text-[#00aeff] underline font-normal" href="/">disini</a>
        </p>
      </div>
      <div class="flex gap-4 justify-end">
        <a class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#adadad] hover:bg-[#838383] focus:ring-4 focus:ring-gray-300 transition duration-300 ease-in-out" href="/">Kembali</a>
        <button type="submit" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#f84480] hover:bg-[#ff256e] focus:ring-4 focus:ring-blue-30 ">Submit Laporan</button>
      </div>
    </form>
  </div>
</div>
@endsection
