<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Kekerasan;
use App\Models\DokumenIdentitas;
use App\Models\Universitas;
use App\Models\Laporan;
use App\Models\LaporanLog;





class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->folderIdentitas = public_path("uploads/identitas");
        $this->folderBukti = public_path("uploads/bukti");
    }

    public function home()
    {
        //landing page awal
        return view('home');
    }

    public function form()
    {
        //tampilin form laporan
        $universitas = Universitas::orderby('nama','asc')->get();
        $kekerasan = Kekerasan::orderby('tipe_kekerasan','asc')->get();
        $identitas = DokumenIdentitas::orderby('id','asc')->get();
        return view('formlaporan',compact('universitas','kekerasan','identitas'));
    }       

    public function submitlaporan(Request $request)
    {
        //validate
        $request->validate([
        'nama' => 'required|string|max:255',
        'no_identitas' => 'required|string',
        'universitas' => 'required|string',
        'jenis_kelamin' => 'required',
        'email' => 'required|email',
        'no_hp' => 'required|string',
        'jenis_identitas' => 'required|string',
        'tanggal_kejadian' => 'required|date|before_or_equal:today',
        'kronologi_kejadian' => 'required',
        'lokasi_kejadian' => 'required',
        'jenis_kekerasan' => 'required',
        'upload_bukti' => 'required|file|max:1024|mimes:png,jpeg,pdf,zip',
        ]);

        $laporan = new Laporan();
        $laporan->id = Str::random(10);
        $kodelaporan = "REP-".$this->generateKodeLaporan();
        $laporan->kode_laporan = $kodelaporan;
        
        $nama = $request->nama;
        $laporan->nama = $nama;
        
        $laporan->no_identitas = $request->no_identitas;
        $laporan->jenis_kelamin = $request->jenis_kelamin;
        $laporan->universitas = $request->universitas;

        $email = $request->email;
        $laporan->email = $email;
        
        $laporan->no_hp = $request->no_hp;
        $laporan->jenis_identitas = $request->jenis_identitas;
        $laporan->tanggal_kejadian = $request->tanggal_kejadian;
        $laporan->kronologi_kejadian = $request->kronologi_kejadian;
        $laporan->lokasi_kejadian    = $request->lokasi_kejadian;
        $laporan->jenis_kekerasan    = $request->jenis_kekerasan;
        $sevenDaysLater = Carbon::now()->addDays(7)->toDateString();
        $laporan->tgl_batas_proses = $sevenDaysLater;

        $laporan->status_laporan     = "Diterima";
        $laporan->deskripsi_laporan     = $request->deskripsi_laporan   ;
      

        if($request->file('upload_identitas')) {
            $file = $request->file('upload_identitas');
            $nowTimestamp = now()->timestamp;
            $fileName = "{$nowTimestamp}-{$file->getClientOriginalName()}";
            $file->move($this->folderIdentitas, $fileName);
            $laporan->upload_identitas   = $this->folderIdentitas.$fileName;
        }

        if($request->file('upload_bukti')) {
            $file = $request->file('upload_bukti');
            $nowTimestamp = now()->timestamp;
            $fileName = "{$nowTimestamp}-{$file->getClientOriginalName()}";
            $file->move($this->folderBukti, $fileName);
            $laporan->upload_bukti = $this->folderBukti.$fileName;
        }
        
        if($laporan->save())
        {
            //simpan ke laporanlog
            $log = new LaporanLog();
            $log->kode_laporan = $kodelaporan;
            $log->tanggal_diubah = date('Y-m-d H:i:s');
            $log->status_laporan = "Diterima";
            $log->deskripsi_laporan = "Laporan Masuk ke Sistem";
            $log->tgl_batas_proses = $sevenDaysLater;
            $log->save();

            //kirim email
            $data = [
                'laporan' => $laporan,
            ];

            Mail::send('email.laporanditerima', $data, function($message) use ($laporan) {
            // Tentukan alamat email penerima
            $message->to($laporan->email, $laporan->nama)
                ->subject('Laporan Pengaduan LLDIKTI Wilayah 3');
            });
            
            return redirect()->route('responselaporan')->with('laporan', $laporan);
        }
         
  
    }


    public function status()
    {
        $logs = array();
        //tampilin form cek status
         return view('formstatus');
    }

    public function cekstatus(Request $request)
    {
        $id = $request->id;

        $laporan = Laporan::where('id', $id)->get();

        if ($laporan->isEmpty()) {
            return back()->with('error', 'Data tidak ditemukan.');
        }
//        print_r($laporan);
    $idField = $laporan->first()->kode_laporan;
    //die($idField);
        $logs = LaporanLog::where('kode_laporan',$idField)->get();
   // print_r($logs);        
        return view('responsestatus', compact('id','logs'));

    }

    public function responselaporan()
    {
        if (!session()->has('laporan')) {
            return redirect()->route('home'); // Redirect ke home jika session tidak ada
        }

        return view('responselaporan');
    }




    function generateKodeLaporan()
    {
        // Ambil tanggal hari ini
        $tanggal = Carbon::now()->format('ymd'); // Format YYMMDD

        // Ambil jumlah laporan yang dibuat di tanggal yang sama
        $count = Laporan::whereDate('created_at', Carbon::today())->count();

        // Nomor urut (4 digit, mulai dari 0001)
        $nomorUrut = str_pad($count + 1, 4, '0', STR_PAD_LEFT);

        // Gabungkan menjadi kode laporan
        return $tanggal . $nomorUrut;
    }

}
