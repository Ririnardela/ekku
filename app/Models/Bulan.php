<?php

namespace App\Models;

use App\Models\Model;
use App\Models\KalenderWisata;

class Bulan extends Model
{
    protected $table = "bulan";

    public function KalenderWisata()
    {
        return $this->belongsTo(KalenderWisata::class, 'id');
    }
}
