<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Evento;

class Statistiche{
  
    public static function guadagnoTotale($orgId){
        $guadagnoTotale = 0;
        $biglietti = Biglietto::bigliettiByOrg($orgId);

        foreach($biglietti as $biglietto){
            $guadagnoTotale += $biglietto->prezzoAcquisto;
        }
        
        return $guadagnoTotale;
    }

    public static function bigliettiVendutiByOrg($orgId){
        $bigliettiVenduti = Biglietto::bigliettiByOrg($orgId);
        return count($bigliettiVenduti);
    }
}
