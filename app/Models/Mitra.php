<?php

namespace App\Models;
use Illuminate\Support\Str;

use App\Models\ModelAuthenticate;

class Mitra extends ModelAuthenticate
{
    protected $table="mitra";


    function handleUploadPoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "Mitra";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;

        }
    }
}
