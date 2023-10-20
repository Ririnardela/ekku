<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Taman;

class TamanNasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_taman'] = Taman::all();
        return view('admin.taman_nasional.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.taman_nasional.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $taman = new Taman;
        $taman->nama = request('nama');
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
        $taman->handleUploadFoto();
        $taman->handleUploadFoto1();
        $taman->handleUploadFoto2();
        $taman->save();

        return redirect('admin/taman')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Display the specified resource.
     */
    public function show($taman)
    {
        $data['taman'] = Taman::find($taman);

        return view('admin.taman_nasional.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($taman)
    {
        $data['taman'] = Taman::find($taman);

        return view('admin.taman_nasional.edit', $data);
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

        return redirect('admin/taman')->with('success', 'Data Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($taman)
    {
        $taman = Taman::find($taman);
        $taman->handleDelete();
        $taman->delete();
        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
