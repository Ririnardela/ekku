<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class PengelolaController extends Controller
{
   
    public function index()
    {
        $data['list_user'] = Admin::all();
        $data['user'] = auth()->user();

        return view('admin.pengelola.index', $data);
    }

   
    public function create()
    {
        $data['user'] = auth()->user();

        return view('admin.pengelola.create', $data);
    }

   
    public function store(Request $request)
    {
        $pengelola = New Admin;
        $pengelola->nama = request('nama');
        $pengelola->username = request('username');
        $pengelola->password = request('confir_password');
        $pengelola->confir_password = request('confir_password');
        $pengelola->handleUploadPoto();
        $pengelola->save();

        return redirect('admin/pengelola')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function show(Admin $pengelola)
    {
        $data['pengelola'] = $pengelola;
        $data['user'] = auth()->user();

        return view('admin.pengelola.show', $data);
    }

   
    public function edit(Admin $pengelola)
    {
        $data['pengelola'] = $pengelola;
        $data['user'] = auth()->user();

        return view('admin.pengelola.edit', $data);
    }

   
    public function update(Admin $pengelola)
    {
        $pengelola->nama = request('nama');
        $pengelola->username = request('username');
        $pengelola->password = request('confir_password');
        $pengelola->confir_password = request('confir_password');
        $pengelola->save();
        $pengelola->handleUploadPoto();

        return redirect('admin/pengelola')->with('success', 'Data Berhasil Disimpan');
    }

   
    public function destroy($user)
    {
        Admin::destroy($user);

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
