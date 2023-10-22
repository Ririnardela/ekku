<?php

namespace App\Http\Controllers\Dinas;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\KategoriFasilitas;
use App\Models\Taman;
use Illuminate\Http\Request;

class TamanNasional extends Controller
{
    
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['list_taman'] = Taman::all();

        return view('dinas.taman_nasional.index', $data);
    }

 

    
    public function show($taman)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        $data['taman'] = Taman::find($taman);

        return view('dinas.taman_nasional.show', $data);
    }

    public function status($taman) {
        $taman = Taman::find($taman);
        $taman->status = 2;
        $taman->save();

        return back()->with('success', 'Status Berhasil Di Masukan');
    }

    public function hapusstatus($taman) {
        $taman = Taman::find($taman);
        $taman->status = 3;
        $taman->save();

        return back()->with('danger', 'Status Berhasil Di Hapus');
    }

    public function batalstatus($taman) {
        $taman = Taman::find($taman);
        $taman->status = 1;
        $taman->save();

        return back()->with('danger', 'Status Berhasil Di Hapus');
    }
}
