<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Evento;

class Statistiche{
  
    public static function bigliettiVenduti($orgId){
        $bigliettiVenduti = Biglietto::where('utenteId', $orgId)->get()->pluck('prezzoAcquisto');
        return count($bigliettiVenduti);
    }
}
