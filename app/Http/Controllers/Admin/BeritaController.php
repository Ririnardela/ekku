<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{

    public function index()
    {
        $data['list_berita'] = Berita::all();

        return view('admin.berita.index', $data);
    }


    public function create()
    {
        return view('admin.berita.create');
    }


    public function store()
    {
        $berita = New Berita();
        $berita->judul = request('judul');
        $berita->deskripsi = request('deskripsi');
        $berita->handleUploadPoto();

        $berita->save();

        return redirect('admin/berita');
    }


    public function show($berita)
    {
        $data['berita'] = Berita::find($berita);
        return view('admin.berita.show', $data);
    }


    public function edit($berita)
    {
      $data['berita'] = Berita::find($berita);

      return view('admin.berita.edit', $data);
    }


    public function update($berita)
    {
        $berita = Berita::find($berita);
        $berita->judul = request('judul');
        $berita->deskripsi = request('deskripsi');
        if (request('poto')) $berita->handleUploadPoto();

        $berita->save();

        return redirect('admin/berita');
    }


    public function destroy($berita)
    {
        Berita::destroy($berita);

        return back();
    }
}
