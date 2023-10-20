<?php

namespace App\Http\Controllers\Dinas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\AtraksiWisata;
use App\Models\KategoriFasilitas;

class AtraksiWisataController extends Controller
{
    public function index($kategori)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_kategori_fasilitas'] = KategoriFasilitas::all();
        
        $data['kategori'] = Kategori::find($kategori);
        $data['list_atraksi_wisata'] = AtraksiWisata::where('id_kategori', $kategori)->get();
        return view('dinas.atraksi_wisata.index', $data);
    }



    public function status($atraksi_wisata) {
        $atraksi_wisata = AtraksiWisata::find($atraksi_wisata);
        $atraksi_wisata->status = 2;
        $atraksi_wisata->save();

        return back()->with('success', 'Status Berhasil Di Masukan');
    }

    public function hapusstatus($atraksi_wisata) {
        $atraksi_wisata = AtraksiWisata::find($atraksi_wisata);
        $atraksi_wisata->status = 3;
        $atraksi_wisata->save();

        return back()->with('danger', 'Status Berhasil Di Hapus');
    }

    public function batalstatus($atraksi_wisata) {
        $atraksi_wisata = AtraksiWisata::find($atraksi_wisata);
        $atraksi_wisata->status = 1;
        $atraksi_wisata->save();

        return back()->with('danger', 'Status Berhasil Di Hapus');
    }
}
