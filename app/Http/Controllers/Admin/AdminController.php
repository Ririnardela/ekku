<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AtraksiWisata;
use App\Models\DesaWisata;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $data['list_desa_wisata'] = DesaWisata::all();
        $data['list_atraksi_wisata'] = AtraksiWisata::all();
        $data['list_user'] = Admin::all();
        $data['list_fasilitas'] = Fasilitas::all();
        return view('admin.index',$data);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
