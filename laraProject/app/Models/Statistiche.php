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
            $guadagnoTotale += $biglietti->prezzoAcquisto;
        }
        
        return $guadagnoTotale;
    }

    public static function bigliettiVendutiByOrg($orgId){
        $bigliettiVenduti = Biglietto::bigliettiByOrg($orgId);
        return count($bigliettiVenduti);
    }

    public static function bigliettiVendutiByEvento($eventoId){
        return Evento::where('eventoId', $eventoId)->get(['bigliettiVenduti']);
    }

    public static function incassoEvento($eventoId){
        $incasso = 0;
        $biglietti = Biglietto::where('eventoId', $eventoId)->get(['prezzoAcquisto']);

        foreach($biglietti as $biglietto){
            $incasso += $biglietto->prezzoAcquisto;
        }

        return $incasso;
    }
}
