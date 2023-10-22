<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use App\Models\Taman;
use Illuminate\Http\Request;

class PengelolaTamanNasionalController extends Controller
{
    public function index()
    {
        $data['list_taman'] = Taman::all();
        return view('mitra.taman_nasional.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mitra.taman_nasional.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $taman = new Taman;
        $taman->nama = request('nama');
        $taman->id_mitra = request('id_mitra');
        $taman->deskripsi = request('deskripsi');
        $taman->alamat = request('alamat');
        $taman->nama_pengelola = request('nama_pengelola');
        $taman->no_pengelola = request('no_pengelola');
        $taman->link = request('link');
        $taman->hari_buka = request('hari_buka');
        $taman->jam_buka = request('jam_buka');
        $taman->jam_tutup = request('jam_tutup');
        $taman->sumber_foto = request('sumber_foto');
        $taman->lat = request('lat');
        $taman->lng = request('lng');
        $taman->status = 1;
        $taman->handleUploadFoto();
        $taman->handleUploadFoto1();
        $taman->handleUploadFoto2();
        $taman->save();

        return redirect('mitra/taman-nasional')->with('success', 'Data Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($taman)
    {
        $data['taman'] = Taman::find($taman);

        return view('mitra.taman_nasional.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($taman)
    {
        $data["list_mitra"] = Mitra::all();
        $data['taman'] = Taman::find($taman);

        return view('mitra.taman_nasional.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($taman)
    {
        $taman = Taman::find($taman);
        $taman->nama = request('nama');
        $taman->deskripsi = request('deskripsi');
        $taman->nama_pengelola = request('nama_pengelola');
        $taman->no_pengelola = request('no_pengelola');
        $taman->hari_buka = request('hari_buka');
        $taman->link = request('link');
        $taman->jam_buka = request('jam_buka');
        $taman->jam_tutup = request('jam_tutup');
        $taman->alamat = request('alamat');
        $taman->sumber_foto = request('sumber_foto');
        $taman->lat = request('lat');
        $taman->lng = request('lng');
        if (request('foto'))
            $taman->handleUploadFoto();
        if (request('foto1'))
            $taman->handleUploadFoto1();
        if (request('foto2'))
            $taman->handleUploadFoto2();
        $taman->save();

        return redirect('mitra/taman-nasional')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($taman)
    {
        Taman::destroy($taman);
        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
