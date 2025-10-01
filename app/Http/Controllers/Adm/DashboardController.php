<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Laporan;


class DashboardController extends Controller
{
    //
    public function index()
    {
        if(Auth::user()->level=='superadmin'){
            $laporanmasuk = Laporan::count();
            $laporanselesai = Laporan::where('status_laporan','Selesai')->count();
            $laporanbelumselesai = $laporanmasuk-$laporanselesai;
        }else{
            $univ_id = Auth::user()->universitas_id;
            $laporanmasuk = Laporan::where('universitas',$univ_id)->count();
            $laporanselesai = Laporan::where('status_laporan','Selesai')->where('universitas',$univ_id)->count();
            $laporanbelumselesai = $laporanmasuk-$laporanselesai;
        }
        return view('Admin/dashboard',compact('laporanmasuk','laporanselesai','laporanbelumselesai'));
    }
}
