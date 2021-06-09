<?php

namespace App\Models\Statistics;

use App\Models\Resources\Evento;
use App\Models\Resources\Biglietto;
use Illuminate\Database\Eloquent\Model;

class OrgStats
{
    private $org;

    function __construct($orgId){
        $this->org = $orgId;
    }

    public function incassoTotaleOrg (){
        $incassoTotale = 0;
        $idEventi = Evento::idEventiByOrg($this->org);
        $bigliettiOrg = Biglietto::whereIn('eventoId', $idEventi)->get()->pluck(['prezzoAcquisto']);

        foreach($bigliettiOrg as $prezzoAcquistoBiglietto){
            $incassoTotale += $prezzoAcquistoBiglietto;
        }
        
        return $incassoTotale;
    } 

    public function bigliettiVendutiTotaleOrg(){
        $bigliettiVendutiTotale = 0;
        $bigliettiVenduti = Evento::where('utenteId', $this->org)->get()->pluck(['bigliettiVenduti']);

        foreach ($bigliettiVenduti as $numBigliettiEvento) {
            $bigliettiVendutiTotale += $numBigliettiEvento;
        }

        return $bigliettiVendutiTotale;
    }
}

