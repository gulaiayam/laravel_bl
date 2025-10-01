<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Laporan;
use App\Models\LaporanLog;
use App\Models\Template;
use Illuminate\Support\Facades\Mail;


class LaporanController extends Controller
{
    //
    public function __construct()
    {
        $this->pagetitle = "Laporan Masuk";
         $this->folderLog = public_path("uploads/logs");
    }
    
    public function index()
    {
        $pagetitle = $this->pagetitle;
        $laporan = Laporan::orderby('created_at','asc')->get();
        if(Auth::user()->level=='superadmin'){
            $laporan = Laporan::orderby('created_at','asc')->get();
        }else{
            $univ_id = Auth::user()->universitas_id;

            $laporan = Laporan::where('universitas',$univ_id)->orderby('created_at','asc')->get();
        }

        return view('Admin.laporan.index', compact('laporan','pagetitle'));

    }

    public function show($kode)
    {
        $pagetitle = $this->pagetitle;
        $laporan = Laporan::where('kode_laporan',$kode)->firstorfail();
        $logs = LaporanLog::where('kode_laporan',$kode)->orderby('created_at','asc')->get();
        //ambil status laporan
        $statuslaporan = Template::get();
        return view('Admin.laporan.detail', compact('logs','pagetitle','laporan','statuslaporan'));

    }

    public function update(Request $request)
    {

        $kode_laporan = $request->kode_laporan;
        $status_laporan = $request->status_laporan;
        //simpan ke tabel laporanlog dan laporan
        $log = new LaporanLog();
        $log->kode_laporan = $kode_laporan;
        $log->deskripsi_laporan = $request->deskripsi_laporan;
        $log->status_laporan = $status_laporan;
        $log->tgl_batas_proses = $request->tgl_batas_proses;
        if($request->file('upload_file')) {
            $file = $request->file('upload_file');
            $nowTimestamp = now()->timestamp;
            $fileName = "{$nowTimestamp}-{$file->getClientOriginalName()}";
            $file->move($this->folderLog, $fileName);
            $log->upload_file   = $this->folderLog.$fileName;
        }
        if($log->save())
        {
            //simpan ke laporan
            $laporan = Laporan::where('kode_laporan',$kode_laporan)->firstorfail();
            $laporan->status_laporan = $status_laporan;
            $laporan->save();

            //kirim email nih
            //kirim email
            $data = [
                'log' => $log,
                'template' => Template::where('status',$status_laporan)->get()
            ];

            Mail::send('email.updatestatus', $data, function($message) use ($laporan) {
        // Tentukan alamat email penerima
        $message->to($laporan->email, $laporan->nama)
                ->subject('Status Laporan PPKS Telah Diperbarui');
        });
          return redirect()->route('laporan.show',$kode_laporan)->with('success', 'Log Berhasil Diinput');
    }
}

}
