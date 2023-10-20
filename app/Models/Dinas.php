<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\ModelAuthenticate;

class Dinas extends ModelAuthenticate
{
    protected $table="dinas";


    function handleUploadPoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "Dinas";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;

        }
    }

}
